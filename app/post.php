<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  //table name
    protected $table= 'posts';

  //odbc_primarykey
   public $primarykey= 'id';

   //timestamps
   public $timestamps = true;

   public function user(){
     return $this->belongsTo('App\user');
   }

}
