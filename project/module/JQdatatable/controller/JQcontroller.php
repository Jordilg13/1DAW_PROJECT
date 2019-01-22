<?
$path = $_SERVER['DOCUMENT_ROOT'] . "/project/";
include($path . "module/JQdatatable/model/JQ_DAO.php");
@session_start();
	if (isset($_SESSION["tiempo"])) {  
		$_SESSION["tiempo"] = time();
    }
    
switch ($_GET['op']) {
    case 'list':
            include("module/JQdatatable/view/JQlist.php");
        break;
        case 'datatable':    
            try{
                $daoprod = new DAOProd();
                $rlt = $daoprod->select_all_products();
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