<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model {


    public function servers() {
        return $this->belongsToMany('App\Roles');
    }

}
