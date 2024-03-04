<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SearchPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'budget',
        "description",
        'communes',
        'coloc_gender',
        'availability_date',
        'appartment_type',
        'user_id'
    ];

    public function communes(): BelongsToMany
    {
        return $this->belongsToMany(Commune::class, 'commune_search_post', 'search_post_id', 'commune_id');
    }

    public function housingType(): BelongsToMany
    {
        return $this->belongsToMany(HousingType::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
