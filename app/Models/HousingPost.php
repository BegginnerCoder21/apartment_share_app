<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\HousingType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HousingPost extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $cast = [
        'is_furnished' => 'boolean'
    ];

    public function commune():BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }

    public function housingType():BelongsTo
    {
        return $this->belongsTo(HousingType::class);
    }

    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
