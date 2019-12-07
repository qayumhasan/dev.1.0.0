<?php

namespace Bulkly;
use Bulkly\Group;
use Bulkly\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
	 protected $fillable = ['groupname','grouptype','ac_name','details'];
     public function group()
    {
        return $this->belongsTo('Bulkly\Group','groupname');
    }
    public function user()
    {
        return $this->belongsTo('Bulkly\User','ac_name');
    }
}
