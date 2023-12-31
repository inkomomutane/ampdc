<?php

namespace App\Actions;

use App\Enums\Status as EnumsStatus;
use App\Models\Status;
use App\Models\Victim;
use Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsController;

class RegisterGbvCase
{
    use AsController;

    public function rules () {
        return [
            'name' => 'string|required',
            'age' => 'numeric|required',
            'organizations' => 'nullable|array',
            'contact' => 'nullable',
            'description' => 'string|nullable',
            'violence_type_id' => 'required',
            'neighborhood_id' => 'required',
        ];
    }

    public function AsController(ActionRequest $actionRequest){
        /** @var Victim $victim */

        $victim = Victim::create([
            'name' => $actionRequest->name,
            'birth_year' => Carbon::createFromDate(now()->year - $actionRequest->age),
            'contact' => $actionRequest->contact,
            'violence_description' => $actionRequest->description,
            'organization_id' => Auth::user()->organization_id,
            'violence_type_id' => $actionRequest->violence_type_id,
            'neighborhood_id' =>  $actionRequest->neighborhood_id,
            'date' => now(),
        ]);

        $organizations = [
            [
                'organization_id' => Auth::user()->organization_id,
                'status' =>  EnumsStatus::Pending(),
            ]
        ];

        if(is_array($actionRequest->organizations)){
            foreach ($actionRequest->organizations as $organization) {
               array_push($organizations,[
                'organization_id' => $organization,
                'status' => EnumsStatus::Pending() ,
               ]);
            }
        }

        // dd($organizations);

        $victim->statuses()->createMany($organizations);

        return to_route('dashboard.bgv.victim',[
            'victim' => $victim->id
        ]);
    }
}
