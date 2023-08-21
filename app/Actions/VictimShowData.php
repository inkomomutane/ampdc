<?php

namespace App\Actions;

use App\Models\Victim;
use Inertia\Inertia;
use Lorisleiva\Actions\Concerns\AsController;

class VictimShowData
{
    use AsController;

    public function AsController (Victim $victim){
        return Inertia::render('Victim/Index',[
            'victim' => $victim->load([
                'organization','violence','neighborhood','statuses.organization'
            ])->getData()
        ]);
    }
}
