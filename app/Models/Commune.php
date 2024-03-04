<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commune extends Model
{
    use HasFactory;

    public function city():BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function housingPost():HasMany
    {
        return $this->hasMany(HousingPost::class);
    }

    public function searchPosts():BelongsToMany
    {
        return $this->belongsToMany(SearchPost::class,'commune_search_post', 'commune_id', 'search_post_id');
    }


}
