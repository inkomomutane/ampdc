<?php

namespace App\Models;

use App\Data\NeighborhoodData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\LaravelData\WithData;

/**
 * App\Models\Neighborhood
 *
 * @property int $id
 * @property string $name
 * @property int $district_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\NeighborhoodFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Neighborhood newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Neighborhood newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Neighborhood query()
 * @method static \Illuminate\Database\Eloquent\Builder|Neighborhood whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighborhood whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighborhood whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighborhood whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighborhood whereUpdatedAt($value)
 * @mixin IdeHelperNeighborhood
 * @property-read \App\Models\District $district
 * @mixin \Eloquent
 */
class Neighborhood extends Model
{
    use HasFactory;
    use WithData;

    protected $fillable = ['name'];
    protected $dataClass = NeighborhoodData::class;

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
