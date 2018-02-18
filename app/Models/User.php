<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Http\Request
 
class User extends Model {
	
    protected $table = 'users';
    protected $fillable = ['username','country','email','password'];
}

 ?>