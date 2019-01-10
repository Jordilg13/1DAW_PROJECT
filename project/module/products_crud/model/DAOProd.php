<?php
include("model/class.php");

class DAOProd{
    function insert_prod($data){
        $product_code = $data['product_code'];
        $product = $data['product'];
        $brand = $data['brand'];
        $m_email = $data['m_email'];
        $state = $data['state'];
        $prod_type = $data['prod_type'];
        $type_proc="";
        $type_proc = implode(",",$data['type_proc']);
        $aviable_until_date = $data['aviable_until_date'];

        $sql = " INSERT INTO products (product_code, product_name, brand, m_email, state_product, product_type, processor_type, aviable_until)"
            . " VALUES ('$product_code', '$product', '$brand', '$m_email', '$state', '$prod_type', '$type_proc', '$aviable_until_date')";
        debug($sql);
        die();
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
    
    function select_prod($prod_code){
        $sql = "SELECT * FROM products WHERE product_code='$prod_code'";
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql)->fetch_object();
        Conectar::close($conexion);
        return $res;
    }
    
    function update_prod($data){

        $product_code = $data['product_code'];
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
        " SET product_name='$product', brand='$brand', m_email='$m_email', state_product='$state', product_type='$prod_type', processor_type='$type_proc',".
        " aviable_until='$aviable_until_date'".
        " WHERE product_code='$product_code'";
        
      
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
    }
    
    function delete_prod($prod_code){
        $sql = "DELETE FROM products WHERE product_code='$prod_code'";
        
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
    }
    
    function delete_all_products(){
        $sql = "DELETE FROM products";
        debug($sql);
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
    }
}