<?php

include('model/User.php');

class LoginController {

	public function login_page() {

		include('view/login_page.php');
	}

	public function regist_page() {

		include('view/regist_page.php');
	}


	public function do_login() {
		$userId = $_POST['userId'];
		$password = $_POST['password'];

		$userModel = new User();

		$user = $userModel->verify($userId, $password);
		if ($user) {
			session_start();
			$_SESSION['user'] = $user;
			if ($user['role'] == 'teacher') {
				header('Location: /index.php?r=teacher/home');
			} else {
				header('Location: /index.php?r=student/home');
			}
		} else {
			header('Location: /index.php?r=login/login_page');
		}
	}

	public function do_regist(){
		$userid = $_POST['userid'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$userModel = new User();

		$flag = $userModel->if_regist($userId);
		if($flag){
			$userModel->add_stu_to_user($userid,$username,$password);
			header('Location: /index.php?r=login/login_page');
		} else {
			header('Location: /index.php?r=login/regist_page');
		}
	}

	public function back_to_login(){
		header('Location: /index.php?r=login/login_page');
	}

	public function back_to_home(){
		header('Location: /index.php?r=student/home');
	}

	public function Go_to_Commodity_List(){
		header('Location: /index.php?r=student/Commodity_List');
	}

	public function Go_to_Qita_List(){
		header('Location: /index.php?r=student/Qita_List');
	}

	public function Go_to_Shuji_List(){
		header('Location: /index.php?r=student/Shuji_List');
	}

	public function Go_to_Wenju_List(){
		header('Location: /index.php?r=student/Wenju_List');
	}

	public function Go_to_Yiwu_List(){
		header('Location: /index.php?r=student/Yiwu_List');
	}

	public function Go_to_Zhuangshi_List(){
		header('Location: /index.php?r=student/Zhuangshi_List');
	}

	public function go_to_regist(){
		header('Location: /index.php?r=login/regist_page');
	}
}
