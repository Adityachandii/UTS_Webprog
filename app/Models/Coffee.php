<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }
}
