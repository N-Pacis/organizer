<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_id','picture','firstname','lastname','phone_number','address','enrolled_in','status','added_by'];
    protected $primary_key = 'student_id';
    protected $keyType = 'string';
    public $incrementing = false;
    use HasFactory;
}
