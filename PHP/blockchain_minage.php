<!DOCTYPE html>
<html lang="fr">
  <head>
      <title>Crypto-Money - Blockchain / Minage</title>
      <link rel="shortcut icon" href="../IMG/logo_site.png">
  </head>

  <body>

    <div class="header">
      <nav class="navbar navbar-fixed-top">
              <div class="container-fluid">
                  <div class="navbar-header">
                    <button id="nav-toggle-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="accueil.php" title="Crypto-Money"><img src="../IMG/logo_site_navbar.png" class="logo3" alt="logo site">rypto-Money</a>
                  </div>


                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="navbutt"><a href="accueil.php" title="Accueil"><img class="logo2" src="../IMG/accueil.png" alt="logo Accueil" height="20" width="20" />Accueil</a></li>
                      <li class="navbutt"><a href="histoire.php" title="Histoire"><img class="logo2" src="../IMG/histoire.png" alt="logo H" height="20" width="20" />Histoire</a></li>
                      <li class="active navbutt"><a href="blockchain_minage.php" title="Blockchain / Minage"><img class="logo2" src="../IMG/blockchain-minage.png" alt="logo Minage"  height="20" width="20" />Blockchain / Minage</a></li>
                      <li class="navbutt"><a href="enjeux_economiques.php" title="Enjeux économiques"><img class="logo2" src="../IMG/enjeux_economiques.png" alt="logo Economie "  height="20" width="20" />Enjeux économiques</a></li>
                      <li class="navbutt"><a href="quiz.php" title="Quizz"><img class="logo2" src="../IMG/quiz.png" alt="logo Quizz" height="20" width="20"/>Quiz</a></li>
                      <li class="navbutt"><a href="contact.php" title="Contact"><img class="logo2" src="../IMG/mail.png" alt="logo Contact" height="20" width="20"/>Contact</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
      <div  class="page">
              <section>
                <h2 class="principal">Le Minage</h2>
                <br>
                <h3>Généralité</h3>
                <article class="article1">Le minage est le processus par lequel certaines cryptomonnaies sécurisent leurs transactions. Ces cryptomonnaies reposent sur des technologies de blockchains basées sur un protocole appelé preuve de travail ("proof of work" en anglais). Pour valider une transaction du réseau, un mineur doit fournir la preuve qu’il effectue un travail spécial. Ce travail consiste en la résolution d’un problème mathématique complexe. Le mineur doit alors trouver un code composé de chiffres et de lettres, que l’on appelle un hash, pour générer le prochain bloc de la blockchain.
                </article>
                <br>
                <h4>Les difficultées présentes</h4>
                <article class="article1"> Seul le calcul informatique dispose de la puissance nécessaire pour trouver ce code (ou hash) et pour avoir une grande puissance de calcul informatique il faut le plus souvent avoir d'excellentes cartes graphiques ce qui est un gros investissement. De plus la difficulté de minage évolue au fil des années en fonction du nombre de blocs créés. Avec le temps, il est en effet de plus en plus difficile de trouver le bon hash pour créer un bloc.C'est pour cela que certains mineurs vont se tourner vers des pools de minage.
                </article>
                <h3>Une petite vidéo explicative</h3>
                <article class="article1">
                  <!-- 16:9 aspect ratio -->

                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wdOTQIo1BT4"></iframe>
                  </div>
                </article>
                <h3>Les pools de minage</h3>
                <article class="article1">Il peut être difficile de miner seul pour un particulier. Afin de rentabiliser au mieux votre matériel de minage et obtenir régulièrement des récompenses, il peut être préférable de rejoindre un pool de minage.
                Un pool de minage est une infrastructure permettant à plusieurs mineurs de mettre leur puissance de calcul en commun afin d’obtenir plus de chances de créer un bloc et ensuite partager les récompenses en fonction de la puissance investie de chacun. Les pools de minage sont très nombreux pour miner des cryptomonnaies difficiles, tout particulièrement le Bitcoin (la difficulté de minage change tous les 2016 blocs, soit tous les 14 jours. Il est aujourd’hui extrêmement difficile de miner du Bitcoin. Les mineurs de Bitcoin sont aujourd’hui essentiellement les grosses fermes de minage comme <a href="https://www.bitmain.com/"> Bitmain </a>, ou des pools de mineurs. ) .
                Plus de crypto monnaie est créée, plus la tâche de minage devient complexe à accomplir, et c’est pour cette raison qu’il est aujourd’hui intéressant de s’affilier à un pool de minage.
                </article>
                <br>
              <h4>Quelques exemples de pools de minage intéréssants :</h4>
              <article class="article1">
                <br>
                <a href="https://fr.minergate.com/"> Minergate : </a> <br>
                Minergate.com est un pool de minage très prisé des mineurs indépendants grâce à l’efficacité de son interface, et à son large éventail d’une vingtaine de monnaies virtuelles. <br> <br>
                <a href="https://www.genesis-mining.com/"> Genesis-mining : </a> <br>
                Il s’agit de l’un des pools sur lequel les mineurs peuvent louer de la puissance de minage via un cloud (= cloud mining il s'agit de louer de la puissance de calcul). Son autre avantage est de permettre aux utilisateurs d’utiliser leur propre carte graphique. <br><br>
                <a href="https://www.nicehash.com/">NiceHash</a> et <a href="https://www.miningrigrentals.com/">MiningRigRentals :</a>
                <br>
                Autres pools de minage à peu de chose près comparable qui proposent également de la location de puissance de calcul pour miner ses propres cryto-devises.
                <br> <br>
                Il ne faut aussi pas oublier Cryptopia qui était un pool de minage mais qui a la mi-janvier 2019 s'est fait hacker a un montant de 16 millions de dollars en cryptomonnaies.
                Ce qui prouve aussi que les pools ne sont parfois pas sur et qu'il vaut mieux faire attention avec son argent.

              </article>

              </section>

            </div>
      <?php
        include("footer.php");
      ?>
  </body>
</html>
