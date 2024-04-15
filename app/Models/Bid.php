<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = ['bid_name'];

    /**
     * Get all of the bidDocuments for the Bid
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bidDocuments(): HasMany
    {
        return $this->hasMany(BidDocuments::class);
    }
}
