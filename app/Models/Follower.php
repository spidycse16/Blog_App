<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    protected $fillable = [
        'follower_id', // Assuming you have a 'title' field in the database table
        'follower_name',
        'following_id',
        'following_name',
         // Add any other fields you want to allow mass assignment
      ];
    use HasFactory;
}
