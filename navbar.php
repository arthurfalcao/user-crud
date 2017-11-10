<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Flow</a>
    </div>  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php if (isLoggedIn()): ?> 
        <ul class="nav navbar-nav">          
          <li class="active"><a href="listar.php">Usuários<span class="sr-only">(current)</span></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="painel.php"><?php echo $_SESSION['user_name']; ?></a></li>
        <li><a href="logout.php">Sair</a></li>
      </ul>            
      <?php else: ?>
        <ul class="nav navbar-nav">          
          <li class="active"><a href="login.php">Login<span class="sr-only">(current)</span></a></li>
          <li><a href="cadastro.php">Cadastro</a></li>
          <li><a href="listar.php">Usuários</a></li>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>