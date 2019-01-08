<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./"><b>MYAPP</b></a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["user_id"])):?>
      <li><a href="./registro.php">REGISTRO</a></li>
      <li><a href="./login.php">LOGIN</a></li>
    <?php else:?>
      <li><a href="./php/logout.php">SALIR</a></li>
    <?php endif;?>
    </ul>
  </div>
</div>
</nav>