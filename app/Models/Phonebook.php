<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
    ];
 
    public function phoneNumbers()
    {
        return $this->hasMany(Phonenumber::class, 'phone_id');
    }
}
