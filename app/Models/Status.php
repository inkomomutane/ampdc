<?php

namespace App\Models;

use App\Data\StatusData;
use App\Enums\Status as EnumsStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Enum\Laravel\Casts\EnumCast;
use Spatie\LaravelData\WithData;


/**
 * App\Models\Status
 *
 * @property int $id
 * @property int $victim_id
 * @property int $organization_id
 * @property \Spatie\Enum\Enum|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Organization $organization
 * @property-read \App\Models\Victim $victim
 * @method static \Database\Factories\StatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereVictimId($value)
 * @mixin \Eloquent
 */
class Status extends Model
{
    use HasFactory;
    use WithData;

    protected $fillable = [
        'victim_id',
        'organization_id',
        'status',
    ];

    protected $casts = [
        'status' => EnumsStatus::class,
    ];

    protected $dataClass = StatusData::class;

    public function victim(): BelongsTo
    {
        return $this->belongsTo(Victim::class);
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}
