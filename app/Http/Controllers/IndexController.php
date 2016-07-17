<?php
/**
 * 首页控制器
 * ProjectName: laravel-project-2
 * FileName: IndexController.php
 * User: Jiafang.Wang (270494194@qq.com)
 * Date: 2016/7/17 21:39
 * 
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{

    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }



}