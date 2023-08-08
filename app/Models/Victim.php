<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Victim
 *
 * @property-read \App\Models\Organization|null $organization
 * @property-read \App\Models\Provenance|null $provenance
 * @property-read \App\Models\ViolenceType|null $violence
 * @method static \Database\Factories\VictimFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Victim newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Victim newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Victim query()
 * @mixin \Eloquent
 */
class Victim extends Model
{
    use HasFactory;


    protected  $fillable = [
        'name',
        'age',
        'contact',
        'violence_description',
        'provenance_id',
        'organization_id',
        'violence_type_id',
        'date'

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'age' => 'integer',
        'date' => 'datetime:Y-m-d',
    ];


    public function provenance() :BelongsTo {
        return $this->belongsTo(Provenance::class);
    }

    public function organization() :BelongsTo {
        return $this->belongsTo(Organization::class);
    }

    public function violence() :BelongsTo {
        return $this->belongsTo(ViolenceType::class);
    }

}
