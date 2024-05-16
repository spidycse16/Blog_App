<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'title', // Assuming you have a 'title' field in the database table
    'description',
    'image',
    'user_id',
    'poststatus',
    'usertype'
     // Add any other fields you want to allow mass assignment
  ];
}
