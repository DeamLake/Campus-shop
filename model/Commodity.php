<?php

include_once('model/Model.php');

class Commodity extends Model {

	public function SaveCommodity($name, $classfy, $price, $seller, $sellerID, $imag_name, $describe){
		$statment = $this->pdo->prepare("insert into commodity (cname, classify, price, seller, sellerID, imag_name, describeinfo) values (?,?,?,?,?,?,?)");
        $statment->execute([$name, $classfy, $price, $seller, $sellerID, $imag_name, $describe]);
	}

	public function test($c){
		$statment = $this->pdo->prepare("insert into test (cc) values (?)");
        $statment->execute([$c]);
	}

	public function Get_All_Commodity(){
		$statment = $this->pdo->prepare("select * from commodity");
		$statment->execute([]);
		$commoditys=$statment->fetchAll();
		if($commoditys){
			return $commoditys;
		}else{
			return false;
		}
	}

	public function Get_All_new_Commoditys(){
		$statment = $this->pdo->prepare("select * from commodity order by id desc");
		$statment->execute([]);
		$commoditys=$statment->fetchAll();
		if($commoditys){
			return $commoditys;
		}else{
			return false;
		}
	}

    public function Get_All_cheap_Commoditys(){
		$statment = $this->pdo->prepare("select * from commodity order by price");
		$statment->execute([]);
		$commoditys=$statment->fetchAll();
		if($commoditys){
			return $commoditys;
		}else{
			return false;
		}
	}

	public function Get_All_expensive_Commoditys(){
		$statment = $this->pdo->prepare("select * from commodity order by price desc");
		$statment->execute([]);
		$commoditys=$statment->fetchAll();
		if($commoditys){
			return $commoditys;
		}else{
			return false;
		}
	}

	public function Get_All_Qita(){
		$statment = $this->pdo->prepare("select * from commodity where classify = '其他'");
		$statment->execute([]);
		$commoditys=$statment->fetchAll();
		if($commoditys){
			return $commoditys;
		}else{
			return false;
		}
	}
	public function Get_All_Shuji(){
		$statment = $this->pdo->prepare("select * from commodity where classify = '书籍'");
		$statment->execute([]);
		$commoditys=$statment->fetchAll();
		if($commoditys){
			return $commoditys;
		}else{
			return false;
		}
	}
	public function Get_All_Wenju(){
		$statment = $this->pdo->prepare("select * from commodity where classify = '文具'");
		$statment->execute([]);
		$commoditys=$statment->fetchAll();
		if($commoditys){
			return $commoditys;
		}else{
			return false;
		}
	}
	public function Get_All_Yiwu(){
		$statment = $this->pdo->prepare("select * from commodity where classify = '衣物'");
		$statment->execute([]);
		$commoditys=$statment->fetchAll();
		if($commoditys){
			return $commoditys;
		}else{
			return false;
		}
	}
	public function Get_All_Zhuangshi(){
		$statment = $this->pdo->prepare("select * from commodity where classify = '装饰'");
		$statment->execute([]);
		$commoditys=$statment->fetchAll();
		if($commoditys){
			return $commoditys;
		}else{
			return false;
		}
	}



	public function Get_Commodity_from_cid($id){
		$statment = $this->pdo->prepare("select * from commodity where id = ?");
		$statment->execute([$id]);
		$commodity=$statment->fetch();
		if($commodity){
			return $commodity;
		}else{
			return false;
		}
	}
	public function Get_My_Cart_Commoditys($id){
		$statment = $this->pdo->prepare("select * from commodity, cart where commodity.id=cart.cid and wanter = ?");
		$statment->execute([$id]);
		$commoditys=$statment->fetchAll();
		if ($commoditys) {
			return $commoditys;
		}else{
			return false;
		}
	}

	public function Get_My_Commoditys($userid){
		$statment = $this->pdo->prepare("select * from commodity where sellerID = ?");
		$statment->execute([$userid]);
		$commodity = $statment->fetchAll();
        if ($commodity) {
            return $commodity;
        } else {
            return false;
        }
	}

	public function If_exist_same_in_cart($wanterid,$commodityid){
		$statment = $this->pdo->prepare("select * from cart where wanter = ? and  cid = ?");
		$statment->execute([$wanterid,$commodityid]);
		$cartmodel = $statment->fetch();
		if ($cartmodel) {
			return false;
		}else{
			return ture;
		}
	}

	public function Save_to_Cart($wanterid,$commodityid){
		$statment = $this->pdo->prepare("insert into cart (wanter,cid) values (?,?)");
		$statment->execute([$wanterid,$commodityid]);
	}

	public function Delete_commodity_from_cart($cart_id){
		$statment = $this->pdo->prepare("delete from cart where cart_id = ?");
		$statment->execute([$cart_id]);
	}

	public function Delete_commodity_from_cart_by_sale($commodityid){
		$statment = $this->pdo->prepare("delete from cart where cid = ?");
		$statment->execute([$commodityid]);
	}

	public function Delete_commodity_by_seller($commodityid){
		$statment = $this->pdo->prepare("update commodity set state = 'invalid' where id = ? ");
		$statment->execute([$commodityid]);
	}

	//出售商品
	public function Sale_cart_commodity($commodityid){
		$statment = $this->pdo->prepare("update commodity set state = 'invalid' where id = ? ");
		$statment->execute([$commodityid]);
	}

	//订单管理
	public function Add_to_order($commodityid,$sellerID,$buyerid,$buyer_address,$phone){
		$statment = $this->pdo->prepare("insert into c_order (commodity_id,seller_id,buyer_id,buyer_address,buyer_phone) values (?,?,?,?,?)");
		$statment->execute([$commodityid,$sellerID,$buyerid,$buyer_address,$phone]);
	}

	public function Get_my_order($id){
		$statment = $this->pdo->prepare("select * from commodity,c_order where commodity.id=c_order.commodity_id and buyer_id = ?");
		$statment->execute([$id]);
		$orders = $statment->fetchAll();
		if ($orders) {
			return $orders;
		}else{
			return false;
		}
	}

	public function Get_my_messages($id){
		$statment = $this->pdo->prepare("select * from commodity,c_order,users where commodity.id=c_order.commodity_id and users.id=c_order.buyer_id and seller_id = ?");
		$statment->execute([$id]);
		$messages = $statment->fetchAll();
		if ($messages) {
			return $messages;
		}else{
			return false;
		}
	}

	public function Get_order_need_deliver(){
		$statment = $this->pdo->prepare("select * from c_order where order_state = '已发货' and delivery_id = '无'");
		$statment->execute([]);
		$orders = $statment->fetchAll();
		if ($orders) {
			return $orders;
		}else{
			return false;
		}
	}

	//确认发货
	public function Had_takeout_commodity($order_id){
		$statment = $this->pdo->prepare("update c_order set order_state = '已发货' where order_id = ?");
		$statment->execute([$order_id]);
	}

	public function Take_order_by_deliver($id,$deliver){
		$statment = $this->pdo->prepare("update c_order set delivery_id = ? where order_id = ?");
		$statment->execute([$deliver,$id]);
	}

	public function Get_Deliver_order($id){
		$statment = $this->pdo->prepare("select * from c_order where delivery_id = ? and order_state = '已发货'");
		$statment->execute([$id]);
		$orders = $statment->fetchAll();
		if ($orders) {
			return $orders;
		}else{
			return false;
		}
	}

	public function Finish_order_by_deliver($id,$delivery_id){
		$statment = $this->pdo->prepare("update c_order set order_state = '已完成' where order_id = ?");
		$statment->execute([$id]);
		$statment = $this->pdo->prepare("update deliver set order_count = order_count + 1 where user_id = ?");
		$statment->execute([$delivery_id]);
		$statment = $this->pdo->prepare("update deliver set commission = commission + 3 where user_id = ?");
		$statment->execute([$delivery_id]);
		$statment = $this->pdo->prepare("select * from c_order,commodity where c_order.commodity_id = commodity.id and order_id = ?");
		$statment->execute([$id]);
		$order = $statment->fetch();
		$buyer = $order['seller_id'];
		$money = $order['price'];
		$statment = $this->pdo->prepare("update users set ecash = ecash + ? where id = ?");
		$statment->execute([$money,$buyer]);
	}
    
    public function Get_Commodity_want_to_see($cname){
    	$statment = $this->pdo->prepare("select * from commodity where cname like '%{$cname}%' ");
    	$statment->execute([$cname]);
    	$commoditys = $statment->fetchAll();
    	if($commoditys)
    		return $commoditys;
    	else
    		return false;
    }





}