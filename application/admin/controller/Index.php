<?php
namespace app\admin\controller;
use think\Controller;
use think\Config;
class Index extends Controller{
	public function index(){
		return $this->fetch('index',['title'=>'henry']);
	}
	/** 
	 * 
	 * @author: henry
	 * @time: Tue Nov  1 15:56:22 2016
	 * @return: [type] [description]
	 */
	public function welcome(){
		return $this->fetch('welcome');
	}
	public function test(){
		return "admin index test...";
	}
}
