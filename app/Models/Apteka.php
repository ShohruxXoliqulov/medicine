<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Apteka extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'name',
        'address',
        'owner_name',
        'owner_phone',
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
