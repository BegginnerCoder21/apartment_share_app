<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class HousingType extends Model
{
    use HasFactory;

    public function searchPost():BelongsToMany
    {
        return  $this->belongsToMany(SearchPost::class);
    }
}
