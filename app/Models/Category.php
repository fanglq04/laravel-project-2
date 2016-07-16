<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * 分类与机构定义多对多关系
     */
    public function organizations()
    {
        return $this->belongsToMany('App\Models\Organization');
    }


    /**
     * 分类与个人定义多对多关系
     */
    public function personals()
    {
        return $this->belongsToMany('App\Models\Personal');
    }

}
