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
    <footer class="footer">
      <h2 class="heading-site" id="mail">Contactez-moi</h2>
      <div class="footer-contact-form">
        <form>
          <div class="field">
            <label class="label">Votre nom</label>
            <div class="control">
              <input id="lastname" class="input" type="text" placeholder="ex: Dupond" name="lastname"> 
            </div>
          </div>
          <div class="field">
            <label class="label">Votre prénom</label>
            <div class="control">
              <input id="firstname" class="input" type="text" placeholder="ex: Jean" name="firstname">
            </div>
          </div>
          <div class="field">
            <label class="label">e-mail</label>
            <div class="control">
              <input id="email" class="input is-success" type="email" placeholder="Email" name="email">
            </div>
          </div> 
          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea id="message" class="textarea" placeholder="Explain how we can help you" name="message"></textarea>
            </div>
          </div>                         
        </form>
        <button class="button is-link" id="send_email">Envoyer</button>
      </div>
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