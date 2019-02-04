<?
$path = $_SERVER['DOCUMENT_ROOT'] . "/project/";
include_once($path."model/class.php");

class DAOProd{
    function select_all_products(){
            $sql = "SELECT * FROM products ORDER BY product_name ASC";
            
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
            return $res;
    }
}