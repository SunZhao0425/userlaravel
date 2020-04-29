<?php

namespace App\Http\Controllers;


use App\Model\Muser;
use Illuminate\Http\Request;
use function foo\func;


class UserController  extends Controller
{
    /**
     * 显示给定用户的概要文件.
     *
     * @param  int  $id
     * @return View
     */
    public function show(Request $request)
    {
        $uu = new Muser();

        /**
         *  //新增
            $uu->name = '23234';
             $uu->save();
         **/
        //更新
//        $DD = $uu->find(1);
//        $DD->name = 34;
//        $DD->save();


        // 查询所有的
//        $all = $uu->all();
//        foreach ( $all as $k=>$v){
//            echo $v->name .'<br>';
//        }

        // 查询条件  take 分页几个
//        $myget = $uu->where('status',0)
//                    ->orderBy('id','desc')
//                    ->take(2)
//                    ->get();
//        foreach ( $myget as $k=>$v){
////            echo $v->name .'<br>';
////        }

//        $ff = $uu->where('name','34')->first();
//        $f = $ff->fresh(); // fresh 数据为空的时候,不能使用

//        $user = $uu->all();
//        $names = $user->reject(function($user){ // 移除
//            return $user->status;
//        })->map(function ($user) { // 收集
//            return $user->name;
//        });
//           判断集合中是否包含
             $user = $uu->all();
             //contains
//         echo $user->contains(1);
//         echo $user->contains($uu->first());

//        dump($user->diff($uu->all())) ;

//        $users = $user->fresh();
        //关联
//        $users = $user->fresh('name');
        //即全部又给定
//        $users = $user->intersect($uu->whereIn('id', [1,3])->get());
        // 获取所有的主键
//        $ids = $user->modelKeys();
//        $data = $user->makeVisible('id');
//        $data = $user->only([1,2]); // 操作一条数据
//        foreach ( $data as $k=>$v){
//            dump($v . '') ;
//        }
//        print_r($users);die;

//         $uu->chunk(200,function ($datas){
//            foreach ($datas as $data){
//                echo $data->name . '<br>';
//            }
//        });

//        foreach ($uu->where('id',1)->cursor() as $data){
//            dump($data);
//        }

        $users = $uu->cursor()->filter(function ($user) {
            return $user->id > 1;
        });
        foreach ($users as $user){
            dump($user);
        }

die;
        print_r($uu->get());die;

        return response('Hello World', 200)
            ->header('Content-Type', 'text/plain');
    }
}
