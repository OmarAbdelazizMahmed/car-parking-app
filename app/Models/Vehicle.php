<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vehicle
 *
 * @method static \Database\Factories\VehicleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
 *
 * @mixin \Eloquent
 */
class Vehicle extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'plate_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
