<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Provenance
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Victim> $victims
 * @property-read int|null $victims_count
 * @method static \Database\Factories\ProvenanceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Provenance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provenance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provenance query()
 * @mixin \Eloquent
 */
class Provenance extends Model
{
    use HasFactory;

    protected $fillable = [ 'name' ];

    public function victims() :HasMany {
        return $this->hasMany(Victim::class);
    }
}
