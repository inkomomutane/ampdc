<?php

namespace App\Models;

use App\Data\OrganizationData;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\LaravelData\WithData;

/**
 * App\Models\Organization
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Victim> $victims
 * @property-read int|null $victims_count
 *
 * @method static \Database\Factories\OrganizationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization query()
 *
 * @property int $id
 * @property string|null $name
 * @property mixed $services
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organization whereUpdatedAt($value)
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Status> $statuses
 * @property-read int|null $statuses_count
 *
 * @mixin Eloquent
 * @mixin IdeHelperOrganization
 */
class Organization extends Eloquent
{
    use HasFactory;
    use WithData;

    protected $fillable = [
        'name', 'services',
    ];

    protected $dataClass = OrganizationData::class;

    public function victims(): HasMany
    {
        return $this->hasMany(Victim::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function statuses(): HasMany
    {
        return $this->hasMany(Status::class);
    }
}
