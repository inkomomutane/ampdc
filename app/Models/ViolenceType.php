<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\ViolenceType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Victim> $victims
 * @property-read int|null $victims_count
 * @method static \Database\Factories\ViolenceTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ViolenceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ViolenceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ViolenceType query()
 * @mixin \Eloquent
 */
class ViolenceType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function victims() :HasMany {
        return $this->hasMany(Victim::class);
    }
}
