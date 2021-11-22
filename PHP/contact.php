<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Crypto-Money - Contact</title>
        <link rel="shortcut icon" href="../IMG/logo_site.png">
    </head>

    <body>

        <div class="header">
            <nav class="navbar  navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button id="nav-toggle-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="accueil.php" title="Crypto-Money"><img src="../IMG/logo_site_navbar.png" class="logo3" alt="logo_site">rypto-Money</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="navbutt"><a href="accueil.php" title="Accueil"><img class="logo2" src="../IMG/accueil.png" alt="logo Accueil" height="20" width="20" />Accueil</a></li>
                            <li class="navbutt"><a href="histoire.php"  title="Histoire"><img class="logo2" src="../IMG/histoire.png" alt="logo Histoire" height="20" width="20" />Histoire</a></li>
                            <li class="navbutt"><a href="blockchain_minage.php" title="Blockchain / Minage"><img class="logo2" src="../IMG/blockchain-minage.png" alt="logo Blockchain-Minage"  height="20" width="20" />Blockchain / Minage</a></li>
                            <li class="navbutt"><a href="enjeux_economiques.php" title="Enjeux économiques"><img class="logo2" src="../IMG/enjeux_economiques.png" alt="logo Economie"  height="20" width="20" />Enjeux économiques</a></li>
                            <li class="navbutt"><a href="quiz.php" title="Quiz"><img class="logo2" src="../IMG/quiz.png" alt="logo Quizz" height="20" width="20"/>Quiz</a></li>
                            <li class="active navbutt"><a href="contact.php" title="Contact"><img class="logo2" src="../IMG/mail.png" alt="logo Contact" height="20" width="20"/>Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="col-xs-12">        
                <?php 
                    if(empty($_POST)){
                        echo "<center><strong><div style='font-size:3.2vw; margin-top:75px;'><p>Une question, une recommendation ?</p> <p>Contactez-nous via le formulaire ci-dessous : </p></div></strong></center>"; 
                    }
                    else{
                        echo " ";
                    }
                ?>            
            </div>
        </div>
        
        <style>
            .container1{
                margin-top:50px;
                margin-bottom:100px;
            }
        </style>

        <div class="container1">
            <div class="starter-template">
                <?php if (array_key_exists("errors", $_SESSION)): ?>
                    <div class="alert alert-danger">
                        <?php echo implode("<br>", $_SESSION["errors"]); ?>

                    </div>
                <?php endif; ?>

                <?php if (array_key_exists("success", $_SESSION)): ?>
                    <div class="alert alert-success">
                        Votre message a  été envoyé avec succès.
                    </div>
                <?php endif; ?>


                <form action="traitement_mail.php" method="POST">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">

                                <label for="input_name">Nom </label>
                                <input type="text" name="name" class="form-control" id="input_name" value="<?php echo isset($_SESSION["champs"]["name"]) ? $_SESSION["champs"]["name"]:"";?>">
                                                        
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">

                                <label for="input_firstname">Prénom </label>
                                <input type="text" name="firstname" class="form-control" id="input_firstname" value="<?php echo isset($_SESSION["champs"]["firstname"]) ? $_SESSION["champs"]["firstname"]:"";?>">
                                                        
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">

                                <label for="input_subject">Sujet</label>
                                <input type="text" name="subject" class="form-control" id="input_subject" value="<?php echo isset($_SESSION["champs"]["subject"]) ? $_SESSION["champs"]["subject"]:"";?>">
                                                        
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">

                                <label for="input_mail">Adresse mail</label>
                                <input type="email" name="mail" class="form-control" id="input_mail" value="<?php echo isset($_SESSION["champs"]["mail"]) ? $_SESSION["champs"]["mail"]:"";?>">
                                                        
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">

                                <label for="input_content">Message</label>
                                <textarea type="text" name="message" class="form-control" id="input_content"><?php echo isset($_SESSION["champs"]["message"]) ? $_SESSION["champs"]["message"]:"";?></textarea>
                            
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
            include("footer.php");
        ?>
    </body>
</html>


<?php 

unset($_SESSION["errors"]);
unset($_SESSION["success"]);
unset($_SESSION["champs"]);
