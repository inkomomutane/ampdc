<?php

namespace App\Actions;

use App\Data\ViolenceTypeData;
use App\Models\ViolenceType;
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
            'violence_type' => ViolenceTypeData::collection(ViolenceType::all())
        ]);

    }
}
