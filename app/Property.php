<?php

namespace YCZ;

use Illuminate\Database\Eloquent\Model;

class Property extends Model{

  public function type(){
      return $this->belongsTo('YCZ\Type');
  }

  public function operation(){
      return $this->belongsTo('YCZ\Operation');
  }
}
