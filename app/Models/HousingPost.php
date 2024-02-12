<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HousingPost extends Model
{
    use HasFactory;

    public function commune():BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }

    public function housingType():BelongsTo
    {
        return $this->belongsTo(HousingType::class);
    }
}
