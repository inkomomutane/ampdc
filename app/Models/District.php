<?php

namespace App\Models;

use App\Data\DistrictData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\LaravelData\WithData;

/**
 * App\Models\District
 *
 * @property int $id
 * @property string $name
 * @property int $province_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\DistrictFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District query()
 * @method static \Illuminate\Database\Eloquent\Builder|District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereUpdatedAt($value)
 * @mixin IdeHelperDistrict
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Neighborhood> $neighborhoods
 * @property-read int|null $neighborhoods_count
 * @property-read \App\Models\Province $province
 * @mixin \Eloquent
 */
class District extends Model
{
    use HasFactory;
    use WithData;

    protected $fillable = ['name'];
    protected $dataClass = DistrictData::class;

    public function neighborhoods(): HasMany
    {
        return $this->hasMany(Neighborhood::class);
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}
