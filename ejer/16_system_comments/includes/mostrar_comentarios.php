<?php
    session_start();
    require_once("comentarios.php");
?>
<script>
    function ActualizarComentarios(page){
        page_actual=page;
        $('#comentarios').fadeIn('normal', function() {
            $('#comentarios').css('display', 'block');
            $("#comentarios").load("includes/mostrar_comentarios.php?page="+page);
            
        });
    }
</script>
<?php
    $comments = new comentarios(getenv('IP'), "yomogan", "", "comments");
    $conexion = $comments->sql_connect();

    $result_set = mysqli_query($conexion, "SELECT * FROM coments ORDER BY id DESC");
    $number = mysqli_num_rows($result_set);
    if ($number) {
      while ($row = mysqli_fetch_array($result_set)) {
         $id[] = $row['id'];
         $usuario[] = $row['usuario'];
         $comentario[] = $row['comentario'];
         $fecha[] = $row['fecha'];
      }
    
      $max_show = 3;
      if (isset($_GET["page"]))
         $page = $_GET["page"];   
      else
         $page = 1;
      
      $from2 = $page * $max_show;
      if ($from2 > $number){
          $diff = $number % $max_show;
          $from2 = $number;
          $from1 = $from2 - $diff;
      } else
          $from1 = $from2 - $max_show;
      for ($i=$from1; $i < $from2; $i++) {
           echo "<strong>".$usuario[$i]." dijo el ".$fecha[$i].":</strong>\n<br/>"; 
           echo $comentario[$i]."\n<br/><br />";       
      }
    
      if ($from1 > 0){
         $previous = $page - 1;
         echo "<a href='#comentarios' onclick=\"ActualizarComentarios(".$previous.")\"><< Página anterior</a> ";
      }
    
      if ($from2 < $number){
         $next = $page + 1;
         echo " <a href='#comentarios' onClick=\"ActualizarComentarios(".$next.");\">Página siguiente >></a>";
      }
    } else {
      echo "No hay comentarios";
    }
    $comments->sql_close();
