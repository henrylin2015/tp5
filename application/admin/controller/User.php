<?php
namespace app\admin\controller;
use think\Controller;
/**
 * @file:  User.php
 * @author: henry
 * @time: Tue Nov  1 16:31:33 2016
 * @desc:User controller 
 */
class User extends Controller{
	/** 
	 * 
	 * @author: henry
	 * @time: Tue Nov  1 16:32:08 2016
	 * @desc:action index
	 */
	public function index(){
		$data = [
			'title'=>'用户管理'
		];
		return $this->fetch('index',$data);
	}
}