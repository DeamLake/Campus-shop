<?php

include('libs/PHPExcel/PHPExcel/IOFactory.php');
include('model/User.php');


class TeacherController {

	//页面
	public function home() {
		$user = $_SESSION['user'];
		$UserModel = new User();$deliverregist = $UserModel->Get_All_deliver_regist();$count=0;if($deliverregist){foreach ($deliverregist as $value):$count++;endforeach;}
		include('view/teacher/home.php');
	}

	public function User_Manager() {
		$user = $_SESSION['user'];
		$UserModel = new User();$deliverregist = $UserModel->Get_All_deliver_regist();$count=0;if($deliverregist){foreach ($deliverregist as $value):$count++;endforeach;}
		$Users = $UserModel->Get_All_Users_By_BOSS($user[0]);
		include('view/teacher/User_Manager.php');
	}

	public function Messager() {
		$user = $_SESSION['user'];
		$UserModel = new User();
		$deliverregist = $UserModel->Get_All_deliver_regist();
		$count=0;if($deliverregist){foreach ($deliverregist as $value):$count++;endforeach;}
		include('view/teacher/Messager.php');
	}

	//功能
	public function Change_headimg(){
		$user = $_SESSION['user'];
		$imgname = $_FILES['headimag']['name'];
        $tmp = $_FILES['headimag']['tmp_name'];
        $filepath = 'images/headimage/';
        if(move_uploaded_file($tmp,$filepath.$imgname.".png")){
            echo "上传成功";
        }else{
            echo "上传失败";
        }
        $UserModel = new User();
        $UserModel->Change_head_image($user[0],$imgname);
		header('Location: /index.php?r=teacher/home');
	}

	public function Change_name(){
		$user = $_SESSION['user'];
		$uname = $_POST['newname'];
		$UserModel = new User();
		$UserModel->Change_user_name($user[0],$uname);
		header('Location: /index.php?r=teacher/home');
	}

	public function Give_it_money(){
		$Gotuser = $_GET['user_id'];
		$UserModel = new User();
		$UserModel->Farm_it($Gotuser);
		header('Location: /index.php?r=teacher/User_Manager');
	}

	public function regist_accept(){
		$Gotuser = $_GET['user_id'];
		$UserModel = new User();
		$UserModel->Accept_the_deliver($Gotuser);
		header('Location: /index.php?r=teacher/Messager');
	}

	public function regist_refuse(){
		$Gotuser = $_GET['user_id'];
		$UserModel = new User();
		$UserModel->Refuse_the_deliver($Gotuser);
		$UserModel->test($Gotuser);
		header('Location: /index.php?r=teacher/Messager');
	}
}