<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','name','address','website','email','phone','bio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
