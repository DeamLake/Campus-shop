<?php

include('model/Commodity.php');
include('model/User.php');

class StudentController {
	

	//页面
	public function home() {
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$newCommoditys = $CommodityModel->Get_All_new_Commoditys();
		$cheapCommoditys = $CommodityModel->Get_All_cheap_Commoditys();
		$expensiveCommoditys = $CommodityModel->Get_All_expensive_Commoditys();
		$Totalprice=$count=0;
		$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/home.php');
	}

	public function Commodity_List() {
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$Commoditys = $CommodityModel->Get_All_Commodity();
		$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Commodity_List.php');
	}

	//搜索展示
	public function Search_result() {
		$user = $_SESSION['user'];
		$cname= $_POST['cname'];
		$CommodityModel = new Commodity();
		$Commoditys = $CommodityModel->Get_Commodity_want_to_see($cname);
		$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Search_result.php');
	}

	public function Qita_List() {
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$Commoditys = $CommodityModel->Get_All_Qita();
		$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Qita_List.php');
	}
	public function Shuji_List() {
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$Commoditys = $CommodityModel->Get_All_Shuji();
		$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Shuji_List.php');
	}
	public function Wenju_List() {
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$Commoditys = $CommodityModel->Get_All_Wenju();
		$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Wenju_List.php');
	}
	public function Yiwu_List() {
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$Commoditys = $CommodityModel->Get_All_Yiwu();
		$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Yiwu_List.php');
	}
	public function Zhuangshi_List() {
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$Commoditys = $CommodityModel->Get_All_Zhuangshi();
		$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Zhuangshi_List.php');
	}



	public function My_account() {
		$user = $_SESSION['user'];

		$CommodityModel = new Commodity();


		$messages = $CommodityModel->Get_my_messages($user[0]);$message_count=0;
		if($messages){foreach ($messages as $value) {if($value['order_state']=='未发货'){$message_count +=1;}}}$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/My_account.php');
	}

	public function My_commodity() {
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
        $Commoditys = $CommodityModel->Get_My_Commoditys($user[0]);


		$messages = $CommodityModel->Get_my_messages($user[0]);$message_count=0;if($messages){foreach ($messages as $value) {if($value['order_state']=='未发货'){$message_count +=1;}}}$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/My_commodity.php');
	}

	public function Buyed_Commoditys(){
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$orders = $CommodityModel->Get_my_order($user[0]);


		$messages = $CommodityModel->Get_my_messages($user[0]);$message_count=0;if($messages){foreach ($messages as $value) {if($value['order_state']=='未发货'){$message_count +=1;}}}$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/Buyed_Commoditys.php');
	}


	public function My_cart() {
		$user = $_SESSION['user'];


		$CommodityModel = new Commodity();$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		$WholePrice = $Totalprice + $count*3; 
		include('view/student/My_cart.php');
	}

	public function Commodity_view(){
		$user = $_SESSION['user'];
		$commodity_id = $_GET['commodity_id'];
		$UserModel = new User();
		$seller = $UserModel->Find_seller_from_commodityID($commodity_id);
		$CommodityModel = new Commodity();
		$commodity = $CommodityModel->Get_Commodity_from_cid($commodity_id);

		$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Commodity_view.php');
	}

	

	//支付界面
	public function Checkout(){
		$user = $_SESSION['user'];
		$WholePrice = $_GET['WholePrice'];

		$CommodityModel = new Commodity();$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Checkout.php');
	}

	public function CheckFinish(){
		$user = $_SESSION['user'];

		$CommodityModel = new Commodity();$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Checkfinish.php');
	}

	public function Checkfinish_failure(){
		$user = $_SESSION['user'];

		$CommodityModel = new Commodity();$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车
		include('view/student/Checkfinish_failure.php');
	}

	//订单相关界面
	public function No_takeout(){
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();


		$messages = $CommodityModel->Get_my_messages($user[0]);$message_count=0;if($messages){foreach ($messages as $value) {if($value['order_state']=='未发货'){$message_count +=1;}}}$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/No_takeout.php');
	}

	public function No_getin(){
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$orders = $CommodityModel->Get_my_order($user[0]);


		$messages = $CommodityModel->Get_my_messages($user[0]);$message_count=0;if($messages){foreach ($messages as $value) {if($value['order_state']=='未发货'){$message_count +=1;}}}$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/No_getin.php');
	}

	public function Order_finished(){
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$orders = $CommodityModel->Get_my_order($user[0]);


		$messages = $CommodityModel->Get_my_messages($user[0]);$message_count=0;if($messages){foreach ($messages as $value) {if($value['order_state']=='未发货'){$message_count +=1;}}}$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/Order_finished.php');
	}

	public function My_message(){
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$messages = $CommodityModel->Get_my_messages($user[0]);
		$message_count=0;if($messages){foreach ($messages as $value) {
		if($value['order_state']=='未发货'){
		$message_count +=1;
		}}}
		
		$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/My_message.php');
	}

	public function Deliver(){
		$user = $_SESSION['user'];


		$CommodityModel = new Commodity();
		$messages = $CommodityModel->Get_my_messages($user[0]);$message_count=0;if($messages){foreach ($messages as $value) {if($value['order_state']=='未发货'){$message_count +=1;}}}$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/Deliver.php');
	}

	public function Order_Hall(){
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$Orders = $CommodityModel->Get_order_need_deliver();


		$messages = $CommodityModel->Get_my_messages($user[0]);$message_count=0;if($messages){foreach ($messages as $value) {if($value['order_state']=='未发货'){$message_count +=1;}}}$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/Order_Hall.php');
	}

	public function My_deliver_order(){
		$user = $_SESSION['user'];
		$CommodityModel = new Commodity();
		$Orders = $CommodityModel->Get_Deliver_order($user[0]);

		$messages = $CommodityModel->Get_my_messages($user[0]);$message_count=0;if($messages){foreach ($messages as $value) {if($value['order_state']=='未发货'){$message_count +=1;}}}$orders = $CommodityModel->Get_my_order($user[0]);$takeout_count = 0;$getin_count = 0;if($orders){foreach ($orders as $value) {if($value['order_state']=='未发货'){$takeout_count+=1;}if($value['order_state']=='已发货'){$getin_count+=1;}}}$UserModel = new User();$Deliveraccount = $UserModel->Get_My_deliver_account($user[0]);$Totalprice=$count=0;$CartCommoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);if ($CartCommoditys) {foreach ($CartCommoditys as $value):$Totalprice+=$value['price']; $count+=1;endforeach;}//购物车及配送flag
		include('view/student/My_deliver_order.php');
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
		header('Location: /index.php?r=student/My_account');
	}

	public function Change_name(){
		$user = $_SESSION[user];
		$uname = $_POST['newname'];
		$UserModel = new User();
		$UserModel->Change_user_name($user[0],$uname);
		header('Location: /index.php?r=student/My_account');
	}

	public function Go_to_Commodity_List(){
		header('Location: /index.php?r=student/Commodity_List');
	}

	public function Add_commodity(){
		$user = $_SESSION['user'];
		$cname = $_POST['cname'];
		$classify = $_POST['classify'];
		$cprice = $_POST['cprice'];
		$describeinfo = $_POST['describeinfo'];
		$imgname = $_FILES['cimag']['name'];
        $tmp = $_FILES['cimag']['tmp_name'];
        $filepath = 'images/commodity/';
        if(move_uploaded_file($tmp,$filepath.$imgname.".png")){
            echo "上传成功";
        }else{
            echo "上传失败";
        }
        $CommodityModel = new Commodity();
        $CommodityModel->SaveCommodity($cname, $classify, $cprice, $user[1], $user[0], $imgname, $describeinfo);
		header('Location: /index.php?r=student/My_commodity');
	}

	public function Delete_cart_commodity(){
		$commodity_id = $_GET['commodity_id'];
		$CommodityModel = new Commodity();
		$CommodityModel->Delete_commodity_from_cart($commodity_id);
		header('Location: /index.php?r=student/My_cart');
	}

	//浮动版本
	public function Delete_cart_commodity_float(){
		$commodity_id = $_GET['commodity_id'];
		$CommodityModel = new Commodity();
		$CommodityModel->Delete_commodity_from_cart($commodity_id);
		header('Location: /index.php?r=student/My_cart');
	}

	public function Delete_commodity(){
		$commodity_id = $_GET['commodity_id'];
		$CommodityModel = new Commodity();
		$CommodityModel->Delete_commodity_by_seller($commodity_id);
		header('Location: /index.php?r=student/My_commodity');
	}

	public function Add_to_cart(){
		$user = $_SESSION['user'];
		$cid = $_GET['cid'];
		$CommodityModel=new Commodity();
		$existflag = $CommodityModel->If_exist_same_in_cart($user[0],$cid);
		if ($existflag) {
			$CommodityModel->Save_to_Cart($user[0],$cid);
		}
		header('Location: /index.php?r=student/My_cart');
	}

	public function regist_to_be_deliver(){
		$user = $_SESSION['user'];
		$UserModel = new User();
		$UserModel->Regist_Deliver($user[0]);
		header('Location: /index.php?r=student/My_account');
	}

	public function accept_failure_regist(){
		$user = $_SESSION['user'];
		$UserModel = new User();
		$UserModel->Delete_failure_record($user[0]);
		header('Location: /index.php?r=student/My_account');
	}

	//付款
	public function Do_pay_cart(){
		$user = $_SESSION['user'];
		$WholePrice = $_GET['WholePrice'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		if ($user[6]>=$WholePrice) {
			$CommodityModel = new Commodity();
		    $Commoditys = $CommodityModel->Get_My_Cart_Commoditys($user[0]);
		    foreach ($Commoditys as $value):
			   $CommodityModel->Sale_cart_commodity($value['id']);
			   $CommodityModel->Delete_commodity_from_cart_by_sale($value['id']);
			   $CommodityModel->Add_to_order($value['id'],$value['sellerID'],$user[0],$address,$phone);
		    endforeach;
		    $UserModel = new User();
		    $UserModel->Pay_my_cart($WholePrice,$user[0]);
		    header('Location: /index.php?r=student/Checkfinish');
		}else{
			header('Location: /index.php?r=student/Checkfinish_failure');
		}
	}

	//确认发货
	public function Comfirm_takeout(){
		$user = $_SESSION['user'];
		$orderid = $_GET['order_id'];
		$CommodityModel = new Commodity();
		$CommodityModel->Had_takeout_commodity($orderid);
		$CommodityModel->test($orderid);

		header('Location: /index.php?r=student/My_message');
	}

	public function Take_Order(){
		$user = $_SESSION['user'];
		$orderid = $_GET['order_id'];
		$CommodityModel = new Commodity();
		$CommodityModel->Take_order_by_deliver($orderid,$user[0]);

		header('Location: /index.php?r=student/Order_Hall');
	}

	public function Have_finished_Order(){
		$user = $_SESSION['user'];
		$orderid = $_GET['order_id'];
		$CommodityModel = new Commodity();
		$CommodityModel->Finish_order_by_deliver($orderid,$user[0]);
		header('Location: /index.php?r=student/My_deliver_order');
	}

}

