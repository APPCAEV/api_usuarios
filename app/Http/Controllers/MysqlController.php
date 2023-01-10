<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\usuarios_lectores;
use \DB;

class MysqlController extends Controller
{
   public function obtenerTodosUsuarios(){
    return usuarios_lectores::all();
   }
}
