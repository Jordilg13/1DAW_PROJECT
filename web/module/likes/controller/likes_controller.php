<?
$path = $_SERVER['DOCUMENT_ROOT'] . "/web/";
include($path . "module/likes/model/likesDAO.php");
    
switch ($_GET['op']) {
    case 'list':
        include("module/likes/view/list_likes.php");
        break;
    case 'toggle_like':
        
        try{
            $daolike = new likesDAO();
            $rlt = $daolike->toggle_like($_POST['id']);
        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rlt['rlt']){
            echo json_encode("error2");
        } 
        else {
          echo json_encode($rlt['op']);
        }
        break;
    case 'check_like':
        
        try{
            $daolike = new likesDAO();
            $rlt = $daolike->check_like($_POST['id']);
        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rlt){
            echo json_encode("error2");
        } 
        else {
          echo json_encode($rlt);
        }
        break;
    case 'datatable':    
        try{
            $daolike = new likesDAO();
            $rlt = $daolike->select_all_likes();
        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rlt){
            echo json_encode("error");
        }
        else{
            $dinfo = array();

            foreach ($rlt as $row) {
                array_push($dinfo, $row);
            }
            // error_log( print_r($dinfo,1) );
            echo json_encode($dinfo);
        }
        break;
    default:
        include("view/inc/error404.php");
        break;
	}