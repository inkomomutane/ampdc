<?php

namespace App\Actions;

use App\Data\StatusData;
use App\Data\ViolenceTypeData;
use App\Models\Status;
use App\Models\ViolenceType;
use Auth;
use Inertia\Inertia;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\AsController;

class Service
{
    use AsAction;
    use AsController;

    public function AsController()
    {

        return Inertia::render('Service/Service', [
            'violence_types' => ViolenceTypeData::collection(ViolenceType::all()),
            'victims' => StatusData::collection(
                Status::whereOrganizationId(Auth::user()
                    ->organization_id)
                    ->with(['victim', 'organization','victim.neighborhood','victim.violence'])
                    ->paginate(6)
            ),
        ]);
    }
}
