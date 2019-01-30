<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/project/";
include_once($path."model/class.php");

class likesDAO{
        function select_all_likes(){
                $sql = "SELECT * FROM likes ORDER BY 1,2 ASC";
                
                $conexion = Conectar::con();
                $res = mysqli_query($conexion, $sql);
                Conectar::close($conexion);
                return $res;
        }
        // function add_like($id){
        //         // $id['user'] = "default"; //default user until the user module is finished
                

        //         $conexion = Conectar::con();
        //         $res = mysqli_query($conexion, $sql);
        //         Conectar::close($conexion);
        //         return $res;
        // }
        // function remove_like($id){
        //         // $id['user'] = "default"; //default user until the user module is finished
        //         $sql = "delete from likes where product_code = ".$id;

        //         $conexion = Conectar::con();
        //         $res = mysqli_query($conexion, $sql);
        //         Conectar::close($conexion);
        //         return $res;
        // }

        function toggle_like($id){
                $sql = "select * from likes where product_code = '".$id."'";
                $conexion = Conectar::con();
                $res = mysqli_query($conexion, $sql);
                
                if ($res->num_rows > 0) {
                        $sql = "delete from likes where product_code = '".$id."'";
                        $op = "deleted";
                } else {
                        $sql = "INSERT INTO likes(user_l, product_code)
                        values(\"default\", \"".$id."\")";
                        $op = "added";
                }
                        
                $conexion = Conectar::con();
                $res = mysqli_query($conexion, $sql);
                Conectar::close($conexion);
                // var $res = {"res"=> $res};
                return array(
                        "rlt" => $res,
                        "op" => $op
                );
        }
}