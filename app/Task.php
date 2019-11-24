<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'status', 'delivery_date', 'owner_id', 'responsible_id', 'client_id'];

    /**
     * Get the author of the post.
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the author of the post.
     */
    public function responsible()
    {
        return $this->belongsTo(User::class);
    }
}
