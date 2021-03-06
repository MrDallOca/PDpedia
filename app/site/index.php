<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=1">
  <link rel="stylesheet" href="../../lib/bootstrap/css/normalize.css">
  <link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/theme.min.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="shortcut icon" href="images/PDpedia2.png">
  <title>PDpedia</title>
</head>

<body>
  <script src="../../lib/jQuery/jquery-2.1.4.js" type="text/javascript"></script>
  <script src="../../lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script src="js/master.js" charset="utf-8"></script>
  <script src="../../api/apiClient.js" type="text/javascript"></script>
  <script src="../../api/formatar.js" type="text/javascript"></script>

  <script type="text/javascript">
    $('.dropdown-menu').find('form').click(function(e) {
      e.stopPropagation();
    });
  </script>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <!--  Esse é um daqueles botões de "hambúrger"-->
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">PDpedia</a> -->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="#artigos">Acontecimento</a></li>
          <li><a href="artigo.html">Artigo</a></li>
          <li><a href="biografia.html">Biografias</a></li>
          <li class="dropdown dropdown-large">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Login
            </a>
            <ul id="div-form-login" class="dropdown-menu">
              <li>
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="loginID" class="control-label">ID</label>
                    <input type="text" class="form-control" id="loginID" placeholder="Enter ID">
                  </div>
                  <div class="form-group">
                    <label for="loginPass" class="control-label">Password</label>
                    <input type="password" class="form-control" id="loginPass" placeholder="Enter Password">
                  </div>
                  <div class="form-group">
                    <button type="button" class="form-control btn-default" id="loginConf">Logar</button>
                  </div>
                </form>
              </li>
            </ul>
          </li>
          <li class="dropdown dropdown-large">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Cadastrar
            </a>
            <ul id="div-form-cadastrar" class="dropdown-menu">
              <li>
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="loginID" class="control-label">ID</label>
                    <input type="text" class="form-control" id="loginID" placeholder="Enter ID">
                  </div>
                  <div class="form-group">
                    <label for="loginNome" class="control-label">Nome</label>
                    <input type="text" class="form-control" id="loginNome" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="cadastrarPass" class="control-label">Password</label>
                    <input type="password" class="form-control" id="cadastrarPass" placeholder="Enter Password">
                  </div>
                  <div class="form-group">
                    <label for="cadastrarConfPass" class="control-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cadastrarConfPass" placeholder="Repeat Password">
                  </div>
                  <div class="form-group">
                    <button type="button" class="form-control btn-default" id="cadastrarConf">Cadastrar</button>
                  </div>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <div id="content">
    <div id="hero" class="pagina container-fluid">
      <div class="apresentacao container-fluid col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="row">
          <img id="hero-logo" class="center" src="images/PDpedia.png">
          <h1 class="text-center">PDpedia</h1>
          <h3 class="text-center">Descubra, Registre, Compartilhe</h3>
        </div>
      </div>
    </div>
    <div id="main" class="pagina container-fluid">
      <div id="posts-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="center col-xs-12 col-sm-12 col-md-9 col-lg-9">
          <div class="list-group">
            <a class="list-group-item list-heading text-center">Últimos <em>posts</em></a>
            <a href="" id="post1" class="artigo list-group-item">As 1001 Dps</a>
            <a href="" id="post2" class="biografia list-group-item">Como programar em Delphi</a>
            <a href="" id="post3" class="acontecimento list-group-item">Aprenda sobre os atalhos do windows</a>
            <a href="" id="post4" class="artigo list-group-item">Quantas USBs um computador suporta?</a>
            <a href="" id="post5" class="acontecimento list-group-item">Biscoito ou bolacha?</a>
            <a href="" id="post6" class="biografia list-group-item">Como invadir o DPD</a>
            <a href="" id="post7" class="acontecimento list-group-item">Como fazer um pTrem</a>
            <a href="" id="post8" class="artigo list-group-item">Para que programar?</a>
            <a href="" id="post9" class="artigo list-group-item">As 1001 Dps</a>
            <a href="" id="post10" class="biografia list-group-item">Como programar em Delphi</a>
            <a href="" id="post11" class="acontecimento list-group-item">Aprenda sobre os atalhos do windows</a>
            <a href="" id="post12" class="artigo list-group-item">Quantas USBs um computador suporta?</a>
            <a href="" id="post13" class="acontecimento list-group-item">Biscoito ou bolacha?</a>
            <a href="" id="post14" class="biografia list-group-item">Como invadir o DPD</a>
            <a href="" id="post15" class="acontecimento list-group-item">Como fazer um pTrem</a>
            <a href="" id="post16" class=" artigo list-group-item">Para que programar?</a>
          </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>

        <label class="center text-center col-xs-6 col-sm-3 col-md-3 col-lg-3">
          Quer escrever o que você pensa?
          <br>
          <a href="">Comece aqui!</a>
        </label>
      </div>
    </div>
  </div>

  <div class="footer">
    <h1>Mega ultra footer</h1>
  </div>

</body>

</html>
