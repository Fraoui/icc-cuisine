<!DOCTYPE html>
<html lang="fr">
<head>
  <title>icc-cuisine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.4/css/mdb.min.css ">
  <link rel="stylesheet" type="text/css" href="contact.css">
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="../index.html">
    <img src="../icc.jpg" alt="logo" style="width:60px;">
  </a>
  
  <!-- Links -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../index.html">ICC</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="../presentation.html">Présentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../savoir.html">Savoir-Faire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../realisations.html">Réalisations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contactez nous <span class="fa fa-envelope-o red-icon"></span></a>
      </li>
       </ul>
</nav></br>

<!-- <form action="contact.php"></form> -->
 <section id="contact" class="col-lg-12">
 <!-- Heading --></br>
                <h2 class="mb-5 font-weight-bold text-center">Contactez nous <small>(Devis , informations diverses ... )</small> </h2>
     
                        
      <form class="form-elegant row align-items-center justify-content-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

          <!--Form without header-->
               <div class="card col-lg-5">

              <div class="card-body mx-12">

                  <!--Header-->
                  <div class="text-center">
                      <h3 class="dark-grey-text mb-5 indigo-text">ICC Cuisine à votre écoute..!    </h3>
                  </div> 

                     <div class="md-form">
                     <i class="fa fa-user prefix grey-text"></i>
                        <label for="text"></label>
                        <input type="text" class="form-control" placeholder="Votre nom" name="pseudo_exp">
                    </div>

                   <div class="md-form">
                     <i class="fa fa-envelope prefix grey-text"></i>
                        <label for="email"></label>
                        <input type="email" class="form-control" placeholder="Adresse mail" name="email_exp">
                    </div>
                  
                   <div class="md-form">
                       <i class="fa fa-tag prefix grey-text"></i>
                       <input type="text" class="form-control" placeholder="Sujet du message" name='objet'>
                   </div>

                   <div class="md-form">
                       <i class="fa fa-pencil prefix grey-text"></i>
                       <textarea type="text" name="message" class="md-textarea" style="height: 100px" placeholder="message"></textarea>
                       
              </div>
              <div></div>
      <br/>
     

              <div class="text-center">
                       <button class="btn btn-indigo" type="submit" value="Envoyer" name="submitpost">Envoyer<i class="fa fa-paper-plane-o ml-1"></i></button>

              </div></br>
        
         <?php
             
          if(isset($_POST)&& !empty($_POST['pseudo_exp'])&& !empty($_POST['objet'])&& !empty($_POST['message'])){
           extract($_POST);
           $destinataire='adamefraoui415@gmail.com'; // Adresse email destinataire
           $expediteur= 'Bonjour je suis ' . $pseudo_exp .' mon adresse mail est ' . $email_exp .'>';
           $mail=mail($destinataire,$objet,$message,$expediteur.' : icc-cuisine.com : Mail via formulaire du site');
           
           if($mail) echo '<div style ="color:green">* Nous avons bien recu votre message , nous vous répondrons dans les plus brefs délais !!</style>';
           else echo'<div style ="color:#ff0000">* Echec envoi </style>';
          }
          else echo"<div style ='color:#ff0000'>* Veuillez remplir tout les champs.</style>";
         ?>

                   
            </div>

           

        </div>
        <!--/Form without header-->

    </form>
                
                        <!-- Form contact -->
                  <!-- Grid column -->

                         </div>
                         <link href="//goo.gl/2C5Kb0" rel="stylesheet">
<link href="//goo.gl/40qUwS" rel="stylesheet">

                            <!--Grid column-->

                            <!--Grid column-->
                            
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
                    </div></br>
                    <!--Grid column-->

                               <!--Grid row-->
                             

</section>
</nav>

<!--Footer-->
<footer class="page-footer center-on-small-only unique-color-dark pt-0">

    <div style="">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    
                </div>
                <!--Grid column-->

                <!--Grid column-->
              
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
               <!--First column-->
            <div class="col-md-6">
                <h6 class="title font-bold"><strong>Organisation de l'entreprise</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><u>Présidente</u>: Madame Talha Chadia.</p>
                <p><u>Responsable commercial et technique</u>: Monsieur Kharbach Said.</p>
                <p>Et une équipe complète de techniciens
profesionnels et diplômés reste à votre service !</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                
                <h6 class="title font-bold"><strong>Contact</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>226 avenue Daumesnil, 75012 Paris</p>
                <p><u>installationscuisinescollectives@hotmail.com</u></p>
                <p>01 64 10 34 79</p>
                <p>06 01 59 26 23</p>
              
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2018 Copyright: <a href="https://www.MDBootstrap.com"> icc-cuisine.com </a>

        </div>
    </div>

    
</footer>
                
</body>
</script>
</script>
 




</html>