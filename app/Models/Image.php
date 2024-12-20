<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'imageUrl',
        'housing_post_id'
    ];

    public function housingPost():BelongsTo
    {
        return $this->belongsTo(HousingPost::class);
    }
}
