<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index">
    <meta name="identifier-url" content="https://www.lavaguepourpre.com">
    <meta name="reply-to" content="La Vague Pourpre"/>
    <link rel= "icon" type="image/png" href="images/logo-red.png"/>
    <meta name="author" content="Prism Agency"/>
    <meta name="description" content="Rien n’échappe à ses yeux. Tout est nu devant lui et dominé par son regard. C’est à lui que nous aurons à rendre des comptes..."/>
    <meta name="keywords" content ="anarchiste anti-capitaliste anarchisme libertaire black-block"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>La vague pourpre</title>

    <!-- style css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fakeLoader.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="fakeloader"></div>

    <header id="header-principal" class="container-fluid">
      <h1 id="logo">
        <a href="index.html"><img src="images/logo.png" title="logo la vague pourpre" alt="logo la vague pourpre"></a>
      </h1>
    </header>
      
      <!-- container -->
    <div id="content" class="container-fluid">
      <section>
        <p id="description">Soyez alertés de la sortie du site « La vague pourpre »<br><span>jeudi 8 décembre 2016</span></p>

        <form method="post" action="form.php">
            <p>
                <?php if(isset($error_email) && !empty($error_email)){
                    echo '<input placeholder="E-mail" type="email" name="email" id="email" /><p><span>'.$error_email.'</span></p'
                            . '><p><button type=submit>Envoyer</button></p>';
                }elseif($_SERVER[REQUEST_URI] == '/error'){
                    echo '<input placeholder="E-mail" type="email" name="email" id="email" /><p><span>Veuillez-remplir le champ e-mail</span></p>'
                    . '<br /><p><button type=submit>Envoyer</button></p>';
                }elseif($_SERVER[REQUEST_URI] == '/succes' or (isset($_GET['send']) && !empty($_GET['send']))){
                    echo '<p>Votre adresse e-mail a bien été envoyé</p>';
                
                }else{ echo '<input placeholder="E-mail" type="email" name="email" id="email" /><p><button type=submit>Envoyer</button></p>';}?>
            </p>
        </form>
      </section>
    </div>
    <!-- /.container -->
  
    <footer id="footer-principal" class="container-fluid">
      <p id="reseaux-soc">
        <a href="https://www.facebook.com/LaVaguePourpre/?fref=ts" target="_blank"><i data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook" aria-hidden="true"></i></a>

        <a href="https://twitter.com/LaVaguePourpre" target="_blank"><i data-toggle="tooltip" data-placement="top" title="twitter" class="fa fa-twitter" aria-hidden="true"></i></a>

      </p>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/fakeLoader.min.js"></script>

    <script>
      
      $(document).ready(function(){ // permet de gérer le preloader du site
        $(".fakeloader").fakeLoader({
          timeToHide:900,
          bgColor:"#000000",
          spinner:"1"
        });

        $('[data-toggle="tooltip"]').tooltip()

      });

    </script>
  </body>
</html>
