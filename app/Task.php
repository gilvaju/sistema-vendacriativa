<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'status', 'delivery_date', 'owner_id', 'responsible_designer', 'client_id'];
}
