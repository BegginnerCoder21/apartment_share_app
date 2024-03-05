<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function images():HasMany{
        return $this->hasMany(Image::class);
    }
}
