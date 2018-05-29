<?php
/**
 * Created by PhpStorm.
 * User: gao
 * Date: 2018/5/29
 * Time: 下午5:10
 */

namespace app\admin\controller;

use cmf\controller\AdminBaseController;
use app\admin\model\NavModel;
use think\Db;
use app\admin\controller\HashController;

class MysqlController  extends AdminBaseController
{

    public function hash(){
        //$roles = Db::name('mysql')->select();
        $hashObj=new HashController();
        $hashObj->addServer("serv1")->addServer("serv2")->addServer("serv3");
        for($i=100;$i<200;$i++){
            $info=$hashObj->find("key".$i);
            echo '<pre>';var_dump($info);
            /*if($info=="serv1"){
                echo "key".$i."处在server1". ".\n";;
                Db::name('mysql')->insert(array('name'=>'server'.$i));
            }elseif($info=='server2'){
                echo "key".$i."处在server2". ".\n";;
                Db::name('mysql2')->insert(array('name'=>'server'.$i));
            }else{
                echo "key".$i."处在server3". ".\n";;
                Db::name('mysql3')->insert(array('name'=>'server'.$i));
            }*/

        }
    }
}