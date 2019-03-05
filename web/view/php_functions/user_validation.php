<?
include_once('module\login\model\DAO_login.php');
class Functions {

    public function loggedUserHasPermissions(){
        $hasPerm = true;

        if (isset($_SESSION['logged_user'])) {
            try{
                $reg_dao = new loginDAO();
                $rlt = $reg_dao->UserInfo(array('id'=>$_SESSION['logged_user']));
            } catch(Exception $e){
                $hasPerm = false;
            }
            $rlt = $rlt->fetch_assoc();

            if ($rlt['type'] != "Admin") { 
                $hasPerm = false;
            }
        } else 
            $hasPerm = false;
        
        return $hasPerm;
    }

}

