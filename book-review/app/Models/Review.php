<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function book() {
        $this->belongsTo(Book::class);
    }
}
