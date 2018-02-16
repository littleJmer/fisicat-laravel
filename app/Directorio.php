<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
     protected $table = 'directorio';

     public function slug() {
     	$str = $this->nombre;
     	$str = strtolower($str);
     	$str = trim($str);
     	$str = str_replace(' ', '.', $str);
     	return $str;
     }
}