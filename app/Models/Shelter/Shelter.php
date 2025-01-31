<?php

namespace App\Models\Shelter;

use App\Models\Necessity\Necessity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shelter extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'neighborhood',
        'zone',
        'need_volunteers',
        'address',
        'pix',
        'phone_number',
        'shelter_capacity_count',
        'sheltered_capacity_count',
        'is_pet_friendly',
    ];

    public function needs(): BelongsToMany
    {
        return $this->belongsToMany(Necessity::class)->using(ShelterNeed::class);
    }
}
