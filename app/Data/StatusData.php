<?php

namespace App\Data;

use App\Models\Status;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Lazy;

/** @typescript */
class StatusData extends Data
{
    public function __construct(
      public ?int $id,
      public ?string $status,
      public Lazy|null|VictimData $victim,
      public Lazy|null|OrganizationData $organization,
    ) {}

    public static function fromModel(Status $status){
        
        return new self(
            id: $status->id,
            status: $status->status->label,
            victim : Lazy::whenLoaded('victim',$status,fn()=> $status->victim->getData()),
            organization : Lazy::whenLoaded('organization',$status,fn()=> $status->organization->getData())
        );
    }
}
