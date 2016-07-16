<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=1">
  <link rel="stylesheet" href="css/lib/normalize.css">
  <link rel="stylesheet" href="css/lib/bootstrap.css">
  <!-- <link rel="stylesheet" href="css/bootstrap-theme.css"> -->
  <link rel="stylesheet" href="css/master.css">
  <title>PDpedia</title>
</head>

<body>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  
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
          <li><a href="#hero">Home</a></li>
          <li><a href="#artigos">Artigos</a></li>
          <li><a href="#biografias">Biografias</a></li>
          <li><a href="#acontecimentos">Acontecimentos</a></li>
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
          <h1 class="text-center">PDpedia</h1>
        </div>
        <h3 class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  Descubra, registre, compartilhe.
        </h3>
      </div>
    </div>
    <div id="artigos" class="pagina container-fluid">
      <div id="artigos-wrapper" class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="list-group">
            <a class="list-group-item list-heading text-center">Últimos artigos</a>
            <a href="" id="art1" class="list-group-item">As 1001 Dps</a>
            <a href="" id="art2" class="list-group-item">Como programar em Delphi</a>
            <a href="" id="art3" class="list-group-item">Aprenda sobre os atalhos do windows</a>
            <a href="" id="art4" class="list-group-item">Quantas USBs um computador suporta?</a>
            <a href="" id="art5" class="list-group-item">Biscoito ou bolacha?</a>
            <a href="" id="art6" class="list-group-item">Como invadir o DPD</a>
            <a href="" id="art7" class="list-group-item">Como fazer um pTrem</a>
            <a href="" id="art8" class="list-group-item">Para que programar?</a>
          </div>
        </div>
        <label class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-6">
          Quer escrever o que você pensa?
          <br>
          <a href="">Comece aqui!</a>
        </label>
      </div>
    </div>
    <div id="acont" class="pagina container-fluid">
      <div id="acont-wrapper" class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="list-group">
            <a class="list-group-item list-heading text-center">Últimos Acontecimentos</a>
            <a href="" id="acont1" class="list-group-item">Bando de alunos invade o DPD</a>
            <a href="" id="acont2" class="list-group-item">Aluno tenta colocar 200 USBs em um computador</a>
            <a href="" id="acont3" class="list-group-item">Professores brigam por bolacha(ou biscoito)</a>
            <a href="" id="acont4" class="list-group-item">Alunos esquecem de como programar em Delphi</a>
            <a href="" id="acont5" class="list-group-item">O número de DPs no curso 28 só aumenta</a>
            <a href="" id="acont6" class="list-group-item">Sala inteira se une para programar o pTrem</a>
            <a href="" id="acont7" class="list-group-item">Professor bate em aluno por falar que era mais maligno</a>
            <a href="" id="acont8" class="list-group-item">Atentados terroristas no LAPA</a>
          </div>
        </div>
        <label class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-6">
          Quer virar um jornalista?
          <br>
          <a href="">Comece aqui!</a>
        </label>
      </div>
    </div>
    <div id="biografia" class="pagina container-fluid">
      <div id="biografia-wrapper" class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="list-group">
            <a class="list-group-item list-heading text-center">Últimas Biografias</a>
            <a href="" id="bio1" class="list-group-item">Francisco da Fonseca(chico)</a>
            <a href="" id="bio2" class="list-group-item">Mácia(marcia)</a>
            <a href="" id="bio3" class="list-group-item">Sérgio(sergio)</a>
            <a href="" id="bio4" class="list-group-item">Patrícia(pat)</a>
            <a href="" id="bio5" class="list-group-item">André(maligno)</a>
            <a href="" id="bio6" class="list-group-item">Luciana(lu)</a>
            <a href="" id="bio7" class="list-group-item">Tiago Dall'Oca(dalóca)</a>
            <a href="" id="bio8" class="list-group-item">Daniel Campioni(Campioni Man)</a>
          </div>
        </div>
        <label class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-6">
          Quer escrever algo sobre alguém?
          <br>
          <a href="">Comece aqui!</a>
        </label>
      </div>
    </div>
  </div>
</body>

</html>
