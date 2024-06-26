<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'discount',
        'address',
        'avatar',
        'user_id',
    ];

    public function getAvatarUrl()
    {
        return Storage::url('app/public/'.$this->avatar);
    }
}
