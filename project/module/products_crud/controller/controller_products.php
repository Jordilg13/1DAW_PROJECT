<?php
include("module/products_crud/model/DAOProd.php");
switch ($_GET['op']) {
    case 'list':
        try {
            $daoprod = new DAOProd();
            $rdo = $daoprod->select_all_products();
        }catch (Exception $e){
            $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
        }

        if(!$rdo){
            $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
        }else{
            include("module/products_crud/view/list_user.php");
        }
        break;

    case 'create':
        include("module/products_crud/model/validate.php");
                
        $check = true;
        if (isset($_POST['product_code'])){
            $check=validate();
            
            if ($check){
                $_SESSION['user']=$_POST;
                try{
                    $daoprod = new DAOProd();
                    $rdo = $daoprod->insert_prod($_POST);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if($rdo){
                    echo '<script language="javascript">alert("Product created succesfully")</script>';
                    $callback = 'index.php?page=controller_products&op=list';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
            }
        }
        include("module/products_crud/view/products_form.php");
        break;

    case 'read':
        try{
            $daoprod = new DAOProd();
            $rdo = $daoprod->select_prod($_GET['id']);
            $user=get_object_vars($rdo);

        }catch (Exception $e){
            $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
        }
        if(!$rdo){
            $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
        }else{
            include("module/products_crud/view/read_user.php");
        }
        break;

        case 'update';
            include("module/products_crud/model/validate.php");
            // echo("sdf");
            
            $check = true;
            // echo("post");
            // debug($_POST);
            // echo("session");
            // debug($_SESSION);
            // echo("get");
            // debug($_GET);
            if (isset($_POST['product_code'])){
                $check=validate();

                if ($check){
                    $_SESSION['user']=$_POST;
                    try{
                        $daoprod = new DAOProd();
                        $rdo = $daoprod->update_prod($_POST);
                    }catch (Exception $e){
                        die('<script>console.log('.$e.');</script>');
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Product updated sucessfully.")</script>';
            			$callback = 'index.php?page=controller_products&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
                        // die('<script>console.log("rdo_else");</script>');
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }

            try{
                $daoprod = new DAOProd();
            	$rdo = $daoprod->select_prod($_GET['id']);
                $user=get_object_vars($rdo);
            }catch (Exception $e){
                // echo('<script>console.log("1_else");</script>');
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }

            if(!$rdo){
                // echo('<script>console.log("2");</script>');
    			$callback = 'index.php?page=503';
    			// die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                // echo('<script>console.log("2_else");</script>');
        	    include("module/products_crud/view/update_user.php");
    		}
            break;

        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daoprod = new DAOProd();
                    $rdo = $daoprod->delete_prod($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if($rdo){
                    echo '<script language="javascript">alert("Product removed sucesfully.")</script>';
                    $callback = 'index.php?page=controller_products&op=list';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
            }
            
            include("module/products_crud/view/delete_user.php");
        break;
        case 'deleteall';
            if (isset($_POST['delete'])){
                try{
                    $daoprod = new DAOProd();
                    $rdo = $daoprod->delete_all_products();
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if($rdo){
                    echo '<script language="javascript">alert("All products deleted sucesfully.")</script>';
                    $callback = 'index.php?page=controller_products&op=list';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
            }
            include("module/products_crud/view/delete_all_products.php");
        break;
    default:
        echo("default");
        break;
}