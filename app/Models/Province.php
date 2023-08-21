<?php

namespace App\Models;

use App\Data\ProvinceData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\LaravelData\WithData;

/**
 * App\Models\Province
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ProvinceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Province newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Province newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Province query()
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Province whereUpdatedAt($value)
 * @mixin IdeHelperProvince
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\District> $districts
 * @property-read int|null $districts_count
 * @mixin \Eloquent
 */
class Province extends \Eloquent
{
    use HasFactory;
    use WithData;

    protected $fillable = ['name'];
    protected $dataClass = ProvinceData::class;

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }
}
