<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function list()
    {
        return $this->belongsTo(CardList::class, 'list_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
