<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_lectores extends Model
{
    protected $table="usuarios_lectores";
    protected $primaryKey="Id_lec";
    use HasFactory;
}
