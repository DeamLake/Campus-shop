<?php

include_once('model/Model.php');

class User extends Model {
    public function verify($userId, $password)
    {
        $statment = $this->pdo->prepare("select * from users where id = ?");
        $statment->execute([$userId]);
        $user = $statment->fetch();

        if ($user['id'] == $userId && $user['password'] == $password) {
            return $user;
        } else {
            return false;
        }
    }

    public function test($c){
        $statment = $this->pdo->prepare("insert into test (cc) values (?)");
        $statment->execute([$c]);
    }

    public function if_regist($userId){
        $statment = $this->pdo->prepare("select registflag from students where id = ?");
        $statment->execute([$userId]);
        $flag = $statment->fetch();

        if($flag){
            return false;
        }else{
            return ture;
        }
    }

    public function Find_seller_from_commodityID($id){
        $statment = $this->pdo->prepare("select sellerID from commodity where id = ?");
        $statment->execute([$id]);
        $sellerid = $statment->fetch();
        $statment = $this->pdo->prepare("select * from users where id = ?");
        $statment->execute([$sellerid[0]]);
        $seller = $statment->fetch();
        if($seller){
            return $seller;
        }else{
            return false;
        }
    }

    public function add_stu_to_user($userid,$username,$password){
        $statment = $this->pdo->prepare("insert into users (id, name, password, role, level) values (?,?,?,'student',1)");
        $statment->execute([$userid, $username, $password]);
        $statment = $this->pdo->prepare("update students set registflag = 1 where id = ?");
        $statment->execute([$userid]);
    }

    public function exists($studentNo) {
        $statment = $this->pdo->prepare("select * from users where id = ?");
        $statment->execute([$studentNo]);
        $user = $statment->fetch();

        if ($user) {
            return true;
        } else {
            return false;
        }
    }   

    public function save($id, $name, $password, $role, $class) {
        $statment = $this->pdo->prepare("insert into users (id, name, password, role, class) values (?,?,?,?,?)");
        $statment->execute([$id, $name, $password, $role, $class]);
    }

    public function Change_head_image($id,$imagename){
        $statment = $this->pdo->prepare("update users set headimage = ? where id = ?");
        $statment->execute([$imagename,$id]);
    }

    public function Change_user_name($id,$name){
        $statment = $this->pdo->prepare("update users set name = ? where id = ?");
        $statment->execute([$name,$id]);
    }

    public function Get_All_Users_By_BOSS($id){
        $statment = $this->pdo->prepare("select * from users where id!= ?");
        $statment->execute([$id]);
        $users = $statment->fetchAll();
        if ($users) {
            return $users;
        }else{
            return false;
        }
    }

    //打钱
    public function Farm_it($id){
        $statment = $this->pdo->prepare("update users set ecash = ecash + 10000 where id = ?");
        $statment->execute([$id]);
    }

    //获取配送员申请  
    public function Get_All_deliver_regist(){
        $statment = $this->pdo->prepare("select * from deliver, users where deliver.user_id=users.id and  deliver_state = '申请中'");
        $statment->execute([]);
        $delivers = $statment->fetchAll();
        if ($delivers) {
            return $delivers;
        }else{
            return false;
        }
    }

    public function Regist_Deliver($id){
        $statment = $this->pdo->prepare("insert into deliver (user_id) values (?)");
        $statment->execute([$id]);
    }

    public function Accept_the_deliver($id){
        $statment = $this->pdo->prepare("update deliver set deliver_state = '申请成功' where user_id = ?");
        $statment->execute([$id]);
        $statment = $this->pdo->prepare("update users set role_state = 2 where id = ?");
        $statment->execute([$id]);
    }

    public function Refuse_the_deliver($id){
        $statment = $this->pdo->prepare("update deliver set deliver_state = '申请失败' where user_id = ?");
        $statment->execute([$id]);
    }

    public function Get_My_deliver_account($id){
        $statment = $this->pdo->prepare("select * from deliver, users where deliver.user_id=users.id and id = ?");
        $statment->execute([$id]);
        $user = $statment->fetch();
        if ($user) {
            return $user;
        }else{
            return false;
        }
    }

    public function Delete_failure_record($id){
        $statment = $this->pdo->prepare("delete from deliver where user_id = ?");
        $statment->execute([$id]);
    }

    //付钱
    public function Pay_my_cart($money,$id){
        $statment = $this->pdo->prepare("update users set ecash = ecash - ? where id = ?");
        $statment->execute([$money,$id]);
    }

    //配送员相关
    
}