<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class)->withDefault([
            'id'=>'0',
            'name'=>'No Author'
        ]);
    }

}
