<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Account extends BaseController
{
	public function __construct()
	{
		$this->helpers = array_merge($this->helpers,['url','form']);
	}
	public function index()
	{
		return view('account/index',[
			'validation'=>\Config\Services::validation()
		]);
	}
	public function save()
	{
		$val = $this->validate([
			'username'=>'trim|required|min_length[4]|max_length[10]',
			'password'=>'trim|required|min_length[5]|max_length[15]',
			'confirmpassword'=>'trim|required|matches[password]',
			'email'=>'trim|required|valid_email',
		]);
		if(!$val){
			return view('account/index',[
				'validation'=>\Config\Services::validation()
			]);
		}else{
			return view ('account/success');
		}
	
	}
}
?>
