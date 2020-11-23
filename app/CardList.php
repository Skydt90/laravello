<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardList extends Model
{
    public function cards()
    {
        return $this->hasMany(Card::class, 'list_id');
    }

    public function board()
    {
        return $this->belongsTo(Board::class, 'board_id');
    }
}
