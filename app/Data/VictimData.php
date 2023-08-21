<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Lazy;
use Spatie\LaravelData\DataCollection;

/** @typescript */
class VictimData extends Data
{
    public function __construct(
      public ?int $id,
      public ?string $name,
      public ?string $contact,
      public ?string $violence_description,
      public ?int $age,
      public Lazy|null|OrganizationData $organization,
      public Lazy|null|ViolenceTypeData $violence,
      public Lazy|null|NeighborhoodData $neighborhood,
      /** @var StatusData[] statuses */
      public Lazy|null|DataCollection $statuses,
    ) {}
}
