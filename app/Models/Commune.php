<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Commune extends Model
{
    use HasFactory;

    public function city():BelongsTo
    {
        return $this->belongsTo(City::class);
    }




}