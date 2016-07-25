<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    public function hasManyComments() {
        return $this->hasMany('App\Comment', 'page_id', 'id');
    }

    public function get_by_page()
    {

    }

    protected function getDateFormat()
    {
        return 'U';
    }
}
