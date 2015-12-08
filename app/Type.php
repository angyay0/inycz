<?php

namespace YCZ;

use Illuminate\Database\Eloquent\Model;

class Type extends Model{

  public function properties(){
      return $this->hasMany('YCZ\Property');
  }
}
