<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentarioModel extends Model
{
    protected $table = "comentarios";

    public function threads()
    {
        return $this->belongsTo(ThreadModel::class, 'thread_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
