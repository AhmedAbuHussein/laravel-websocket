<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Message extends Model
{
    protected $guarded = [];
    protected $table = 'messages';

    public function fromContact()
    {
        return $this->hasOne(User::class, 'id', 'from');
    }
}
