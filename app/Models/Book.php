<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use HasFactory,Notifiable;
    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $query = $query->where('name', 'like', '%' . $key . '%')->orwhere('isbn', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
