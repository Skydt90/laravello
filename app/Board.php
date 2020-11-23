<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function lists()
    {
        return $this->hasMany(CardList::class, 'board_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
