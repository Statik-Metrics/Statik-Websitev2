<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model {


	protected $primaryKey = ['uuid', 'plugin_id'];

    public function plugins() {
        return $this->belongsToMany('App\Plugins');
    }
}
