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
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ViolenceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViolenceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViolenceType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViolenceType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @mixin IdeHelperViolenceType
 */
class ViolenceType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function victims() :HasMany {
        return $this->hasMany(Victim::class);
    }
}
