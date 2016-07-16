<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    /**
     * 个人与分类定义多对多关系
     */
    public function categorys()
    {
        return $this->belongsToMany('App\Models\Category');
    }


    /**
     * 个人与用户一对一关系
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
