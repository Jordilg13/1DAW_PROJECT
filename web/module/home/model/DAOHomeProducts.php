<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/web/";
include($path."model/class.php");

class DAOHomeProduct{
    function select_home_products($num){
        $sql = "SELECT * FROM products LIMIT ".$num;

        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
            
    }
    function select_prod_autocomp($data){
        $sql = "SELECT DISTINCT ".$data['toAutoComplete'].
               " FROM comentarios.products";
               
        $i = 0;
        // generates a query depending on the fields that are filled
        foreach ($data['fields'] as $key => $value) {
            if ($value['typed'] != "") {
                if ($i == 0) {
                    $sql = $sql."\nWHERE ".$key." LIKE '".$value['typed']."%'";
                } else {
                    $sql = $sql."\nAND ".$key." LIKE '".$value['typed']."%'";
                }
                $i++;
            }
            
        }
        // print_r($sql);
               
        $sql = $sql."\n limit 7";
        // echo($sql);
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
    }
}