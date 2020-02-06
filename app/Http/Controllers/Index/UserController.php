<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommonModel;
use Illuminate\Support\Facades\Cookie;
class UserController extends Controller
{
	/**
	 * 注册页面
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function reg(Request $request)
    {
    	return view("user.reg");
    }
    /**
	 * 注册执行
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function doReg(Request $request)
    {
		unset($_POST['_token']);
		$url="http://1905passport.com/api/reg";
		$info=CommonModel::curlPost($url,$_POST);
		if($info['code']!=40000){
			echo "错误信息:".$info['msg']."正在跳转>>>>";die;
		}
    }
    /**
	 * 登录页面
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function login(Request $request)
    {
    	return view("user.login");
    }
       /**
	 * 登录执行
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function doLogin(Request $request)
    {
		unset($_POST['_token']);
		$url="http://1905passport.com/api/login";
		$info=CommonModel::curlPost($url,$_POST);
		if($info['code']!=40000){
			echo "错误信息:".$info['msg']."正在跳转>>>>";die;
		}
		$uid=$info['data']['id'];
		$token=$info['data']['token'];		
		//将token保存至客户端 cookie中
		Cookie::queue('token',$token,600);
		Cookie::queue('uid',$uid,600);
		setcookie('testtoken','abcdefg',time()+3600);
		//登录成功
		header("Refresh:2;url=/user/center");
		echo "登录成功,正在跳转至个人中心";
    }
    /**
     * 个人中心
     * @return [type] [description]
     */
    public function center()
    {
    	$token=Cookie::get("token");
    	$uid=Cookie::get("uid");
    	if(empty($token)||empty($uid))
    	{
    		header("refresh:2;url=/user/login");
    		echo "请先登录,页面跳转中";die;
    	}
    	$url="http://1905passport.com/api/auth";
    	$info=CommonModel::curlPost($url,['token'=>$token,"uid"=>$uid]);
    	if($info['code']!=40000)
    	{
    		header("refresh:2;url=/user/login");
    		echo "请先登录,页面跳转中";die;
    	}
    	echo "欢迎来到个人中心";
    }
    public function contact()
    {
    	return view("contact");
    }
}
