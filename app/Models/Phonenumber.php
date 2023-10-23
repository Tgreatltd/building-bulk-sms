<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonenumber extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'phoneNumber',
        'phone_id',
    ];

    public function phonebook()
    {
        return $this->belongsTo(Phonebook::class, 'phone_id');
    }
}
