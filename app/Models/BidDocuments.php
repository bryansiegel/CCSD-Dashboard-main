<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidDocuments extends Model
{
    use HasFactory;


    /**
     * Get the bid that owns the BidDocuments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bid(): BelongsTo
    {
        return $this->belongsTo(Bid::class);
    }
}
