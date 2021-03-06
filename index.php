<DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Mon Portfolio </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet"> 
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <meta name="description" content="CV curiculum vitae experience jérôme magnier">
    <meta name="keywords" content="web, front-end, webdev, back-end, C.V, Jérôme Magnier, experience">
    
    <!-- résolution responsive pour téléphone. -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">

</head>
<body>

  <?php require "header.html"; ?>

  <div class="modal own-modal" id="modal_to_open">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Titre du Modal</p>
        <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
        <p>Le contenu de mon modal</p>
      </section>
      <footer class="modal-card-foot">
        <button class="button is-link">Sauvegarder</button>
        <button class="button" id="close_modal">Annuler</button>
      </footer>
    </div>
  </div>

  <div class="block">
    <h2 class="subtitle heading-site" id="about">A propos</h2>
    <div class="container about">
      <div class="columns">
        <div class="column about-single-element">
          <i class="fab fa-html5 icon"></i>
          <p>Cognitis enim pilatorum caesorumque funeribus nemo deinde ad has stationes appulit navem, sed ut Scironis praerupta letalia declinantes litoribus Cypriis contigui navigabant, quae Isauriae scopulis sunt controversa.</p>
        </div>
        <div class="column about-single-element">
          <i class="fab fa-js icon"></i>
          <p>Ac ne quis a nobis hoc ita dici forte miretur, quod alia quaedam in hoc facultas sit ingeni, neque haec dicendi ratio aut disciplina, ne nos quidem huic uni studio penitus umquam dediti fuimus. Etenim omnes artes, quae ad humanitatem pertinent, habent quoddam commune vinculum, et quasi cognatione quadam inter se continentur.</p>
        </div>
        <div class="column about-single-element">
          <i class="fab fa-css3-alt icon"></i>
          <p>Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="block">
    <h2 class="subtitle heading-site" id="porfo">Mon portfolio</h2>
    <div class="container">
      <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
          <div class="tile">
            <div class="tile is-parent is-vertical">
              <article class="tile is-child">
                <div class="notification">contient une photo</div>
              </article>
              <article class="tile is-child">
                <img src="code.jpg" alt="code source">
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child">
                <div class=" notification is-primary">
                  <div class="COLORED">
                    100 X 100
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child">
                <img src="code2.jpg" alt="code source">
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child">
              <div class="notification is-warning">
                Le contenu
              </div>
          </article>
        </div>
      </div>
    </div>
  </div>

  <div class="block">
    <footer class="footer">
      <h2 class="heading-site" id="mail">Contactez-moi</h2>
      <div class="footer-informations">
        <p>En cours de préparation de la certification RNCP Développeur web et mobile bientôt</p>
        <p>Possibilité de télé-travail ou accès à des espaces de travail collaboratif</p>
        <ul>
          <li>
            <a href="#"><i class="fab fa-facebook-square"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-github-square"></i></a>
          </li>
        </ul>
      </div>
    </footer>
  </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="main.js"></script>  

      </body>
</html>