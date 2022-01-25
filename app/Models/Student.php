<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['picture','firstname','lastname','phone_number','address','enrolled_in','status','added_by'];
    use HasFactory;
}
