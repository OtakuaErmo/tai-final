<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadsModel extends Model
{
    protected $table = "threads";

    public function assuntos()
    {
        return $this->belongsTo(AssuntoModel::class, 'assunto_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
