<?php
include("utils/class.php");

class DAOProd{
    function insert_prod($data){
        $product = $data['product'];
        $brand = $data['brand'];
        $m_email = $data['m_email'];
        $state = $data['state'];
        $prod_type = $data['prod_type'];
        $type_proc="";
        $type_proc = implode(",",$data['type_proc']);
        $aviable_until_date = $data['aviable_until_date'];

        $sql = " INSERT INTO products (product_name, brand, m_email, state_product, product_type, processor_type, aviable_until)"
            . " VALUES ('$product', '$brand', '$m_email', '$state', '$prod_type', '$type_proc', '$aviable_until_date')";
        
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
    }
    
    function select_all_products(){
        $sql = "SELECT * FROM products ORDER BY product_name ASC";
        
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
    }
    
    function select_prod($prod){
        $sql = "SELECT * FROM products WHERE product_name='$prod'";
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql)->fetch_object();
        Conectar::close($conexion);
        return $res;
    }
    
    function update_prod($data){

        $product = $data['product'];
        $brand = $data['brand'];
        $m_email = $data['m_email'];
        $state = $data['state'];
        $prod_type = $data['prod_type'];
        $type_proc="";
        // foreach ($data['type_proc'] as $indice) {
        //     $type_proc=$type_proc."$indice,";
        // }
        $type_proc = implode(",",$data['type_proc']);
        $aviable_until_date = $data['aviable_until_date'];

        $sql = " UPDATE products".
        " SET brand='$brand', m_email='$m_email', state_product='$state', product_type='$prod_type', processor_type='$type_proc',".
        " aviable_until='$aviable_until_date'".
        " WHERE product_name='$product'";
        
      
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
    }
    
    function delete_prod($prod){
        $sql = "DELETE FROM products WHERE product_name='$prod'";
        
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
    }
}