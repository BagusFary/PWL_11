<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $hidden = [
        'user_id'
    ];

    protected $casts = [
        'done' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
