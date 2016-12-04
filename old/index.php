<?php

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="robots" content="index">
    <meta name="identifier-url" content="https://www.lavaguepourpre.com">
    <meta name="reply-to" content="La Vague Pourpre"/>
    <link rel= "icon" type="image/png" href="images/logo.png"/>
    <meta name="author" content="Prism Agency"/>
    <meta name="description" content="Rien n’échappe à ses yeux. Tout est nu devant lui et dominé par son regard. C’est à lui que nous aurons à rendre des comptes..."/>
    <meta name="keywords" content ="dictature propagande"/>
    <title>La Vague Pourpre</title>

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

      <!-- container -->
      <div id="content" class="container-fluid">
        <!-- row -->
        <div class="row">

          <!-- col -->
          <div class="col-lg-12">

            <section>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                </div>
                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                  <h1>
                    <a href="index.php"><img class="img-responsive logo" src="images/logo.png" alt="La Vague Pourpre"></a>
                  </h1>
              	   <p id="titre"><span>La Vague Pourpre</span></p>
              	   <p id="description"><span>Prochainement</span></p>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12" id="block-newsletters">
                  <h2 id="newsletters">Pour recevoir notre NEWSLETTER :</h2>
                  <p id="sortie-site">(Pour être informé sur la sortie du site)</p>
              	   <form action="form.php" method="post" id="form-email">

              		    <div class="form-group">
              		        <?php if(isset($error_email) && !empty($error_email)){echo '<label for="exampleInputEmail1" id="label-email">Adresse e-mail :</label>
              		        <input type="email" class="form-control1" name="email" id="email" placeholder="Email"><span>'.$error_email.'</span>';}elseif(isset($_GET['send']) && !empty($_GET['send'])){echo '<p>Votre adresse e-mail a bien été envoyer</p>';}else{ echo '<label for="exampleInputEmail1" id="label-email">Adresse e-mail :</label>
              		        <input type="email" class="form-control1" name="email" id="email" placeholder="Email">';}?></span>
              		    </div>
              		    <button type="submit" class="btn btn-default1">ENVOYER</button>
              	    </form>

                  </div>
                  <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                  </div>
                </div>
            </section>

            <!--<footer>
              <p><a id="btn" href="">Nous contacter</a></p>
            </footer>-->

        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->


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
