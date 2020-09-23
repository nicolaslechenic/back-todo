<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
  protected $fillable = ["description"];
  protected $hidden = [];
}