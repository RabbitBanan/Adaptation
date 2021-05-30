<?php



//require_once 'db.php';


session_start();

class authcUser {

    public function CheckUse(){
        if(!isset($_SESSION["login"])){
            return false;
        } else {
            return true;
        }

    }

    public function CheckAuth($login, $pass){
      if ($this->LoadAllInf($login, $pass)) {
        return true;
      }else {
        return false;
      }

    }

    public function LoadAllInf($login, $pass){
        $_SESSION["login"] = $login;
        $_SESSION["password"] = $pass;

        if (($_SESSION["login"] == 'curator') && ($_SESSION["password"] == 'curator')) {
          $_SESSION["user_name"] = 'Василий';
          $_SESSION["user_family"] = 'Баляс';

          $_SESSION["isAuto"] = true;
          return true;
        } else if (($_SESSION["login"] == 'cadr') && ($_SESSION["password"] == 'cadr')) {
          $_SESSION["user_name"] = 'Алексей';
          $_SESSION["user_family"] = 'Кардашин';

          $_SESSION["isAuto"] = true;
          return true;
        } else if (($_SESSION["login"] == 'worker') && ($_SESSION["password"] == 'worker')) {
          $_SESSION["user_name"] = 'Богдан';
          $_SESSION["user_family"] = 'Цимбалюк';

          $_SESSION["d"] = 'true';
          return true;
        } else {
          $_SESSION["isAuto"] = 'false';
          return false;
        }
    }
    /*public function CheckAuth($name, $pass){
        //$query = "select count(*) as countU, id from case.user where login = $name and password =$pass";
        //$link = my_connect::GetConnect();
        //$res = $link->query($query);
        //$row= $res->fetch_assoc();
        //$count = $row["countU"];
        $count = 1;
        //$_SESSION["user_id"] = $row["id"];
        if($count == 1){
            $this->LoadAllInf($row["id"]);
            return true;
        }

    }

    /public function LoadAllInf($id){
        //$query = "select * from case.worker w where w.id_user = $id";
        //$link = my_connect::GetConnect();
        //$res = $link->query($query);
        //$row = $res->fetch_assoc();
        //$_SESSION["user_name"] = $row["firstname"];
        //$_SESSION["user_family"] = $row["secondname"];
        $_SESSION["login"] = $row["secondname"];

    }

    /*public function  GetId(){
        return $_SESSION["user_id"];
    }

    public function GetIdPost(){
        return $_SESSION["user_position"];
    }

    public function GetName(){
        return $_SESSION["user_name"];
    }

    public function GetFamily(){
        return $_SESSION["user_family"];
    }*/

    public function UnLogin(){
        session_destroy();
        session_start();
    }
}
