<?php
include_once("model/class.php");

class DAOProd{
    function create_prod($data){

        $product_code = $data['product_code'];
        $product = $data['product'];
        $brand = $data['brand'];
        $m_email = $data['m_email'];
        $price = $data['product_price'];
        $state = $data['state'];
        $prod_type = $data['prod_type'];
        $type_proc="";
        $type_proc = implode(",",$data['type_proc']);
        $aviable_until_date = $data['aviable_until_date'];

        $sql = " INSERT INTO products (product_code, product_name, brand, m_email, price, state_product, product_type, processor_type, aviable_until)"
            . " VALUES ('$product_code', '$product', '$brand', '$m_email', '$price', '$state', '$prod_type', '$type_proc', '$aviable_until_date')";

            
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
    
    public static function select_prod($prod_code){
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
        $price = $data['product_price'];
        $state = $data['state'];
        $prod_type = $data['prod_type'];
        $type_proc="";
        $type_proc = implode(",",$data['type_proc']);
        $aviable_until_date = $data['aviable_until_date'];

        $sql = " UPDATE products".
        " SET product_name='$product', brand='$brand', m_email='$m_email', price='$price', state_product='$state', product_type='$prod_type', processor_type='$type_proc',".
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
        
        $conexion = Conectar::con();
        $res = mysqli_query($conexion, $sql);
        Conectar::close($conexion);
        return $res;
    }
}