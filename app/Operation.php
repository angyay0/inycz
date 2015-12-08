<?php

namespace YCZ;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{

  public function properties(){
      return $this->hasMany('YCZ\Property');
  }
}
