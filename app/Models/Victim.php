<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Victim
 *
 * @property int $id
 * @property string $ulidcode
 * @property string|null $name
 * @property \Illuminate\Support\Carbon $birth_year
 * @property string|null $contact
 * @property string $violence_description
 * @property int $neighborhood_id
 * @property int $organization_id
 * @property int $violence_type_id
 * @property \Illuminate\Support\Carbon $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Neighborhood $neighborhood
 * @property-read \App\Models\Organization $organization
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Status> $statuses
 * @property-read int|null $statuses_count
 * @property-read \App\Models\ViolenceType|null $violence
 * @method static \Database\Factories\VictimFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Victim newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Victim newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Victim query()
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereBirthYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereNeighborhoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereUlidcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereViolenceDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Victim whereViolenceTypeId($value)
 * @mixin \Eloquent
 * @mixin IdeHelperVictim
 */
class Victim extends Model
{
    use HasFactory;


    protected  $fillable = [
        'name',
        'birth_year',
        'ulidcode',
        'contact',
        'violence_description',
        'organization_id',
        'violence_type_id',
        'neighborhood_id',
        'date'
    ];

    protected $appends = [
        'age'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'birth_year' => 'date:Y-m-d',
        'date' => 'datetime:Y-m-d',
        'age' => 'int'
    ];

    public function organization() :BelongsTo {
        return $this->belongsTo(Organization::class);
    }

    public function violence() :BelongsTo {
        return $this->belongsTo(ViolenceType::class);
    }

    public function neighborhood() :BelongsTo {
        return $this->belongsTo(Neighborhood::class);
    }

    public function statuses() : HasMany {
        return $this->hasMany(Status::class);
    }

    public function getAgeAtrribute(){
        return $this->birth_year->age;
    }

}
