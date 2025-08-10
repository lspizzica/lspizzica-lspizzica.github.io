<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terminal - Contact</title>
  <style>
    html, body {
      margin: 0;
      padding: 30px;
      background-color: #000;
      color: #00ff00;
      font-family: 'Courier New', Courier, monospace;
      max-width: 100%;
      overflow-x: hidden;
    }

    h1, h3 {
      border-bottom: 1px solid #00ff00;
      padding-bottom: 5px;
      margin-top: 0;
    }

    input, textarea, button {
      background-color: black;
      color: #00ff00;
      border: 1px solid #00ff00;
      padding: 10px;
      width: 100%;
      font-family: 'Courier New', Courier, monospace;
      margin-bottom: 15px;
      box-sizing: border-box;
      resize: vertical;
    }

    input::placeholder,
    textarea::placeholder {
      color: #00ff00;
      opacity: 0.7;
    }

    button {
      cursor: pointer;
      font-weight: bold;
    }

    button:hover {
      background-color: #00ff00;
      color: black;
    }

    .container {
      max-width: 1000px;
      margin: auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
    }

    .col {
      flex: 1;
      min-width: 300px;
    }

    a {
      color: #00ff00;
      text-decoration: underline;
    }

    a:hover {
      color: #00cc00;
    }

    .popup {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vw;
      background-color: rgba(0, 0, 0, 0.95);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .popup-content {
      border: 1px solid #00ff00;
      padding: 20px;
      max-width: 400px;
      text-align: center;
    }

    .close {
      float: right;
      cursor: pointer;
      color: #00ff00;
      font-size: 20px;
    }

    .close:hover {
      color: #00cc00;
    }

    @media (max-width: 768px) {
      body {
        padding: 15px;
      }

      .row {
        flex-direction: column;
        gap: 20px;
      }

      .col {
        min-width: 100%;
      }
    }
  </style>
</head>

<body>
  <?php include('navbar.php'); ?>

  <div class="container">
    <h1>Contact</h1>
    <div class="row">
      <!-- Formulaire -->
      <div class="col">
        <form id="contactForm" method="post">
          <input type="text" name="name" id="name" placeholder="Nom et prénom*" required />
          <input type="email" name="email" id="email" placeholder="Email*" required />
          <input type="text" name="subject" id="subject" placeholder="Sujet" />
          <textarea name="message" id="message" placeholder="Votre message" rows="6"></textarea>
          <button type="submit">[ Envoyer ]</button>
        </form>
      </div>

      <!-- Coordonnées -->
      <div class="col">
        <h3>Coordonnées</h3>
        <p>Email : leo.spizzica@gmail.com</p>
        <p>Téléphone : 06 88 99 86 11</p>
        <h3>Réseaux</h3>
        <p><a href="https://www.linkedin.com/in/l%C3%A9o-spizzica/" target="_blank">> LinkedIn</a></p>
        <p><a href="https://github.com/lspizzica/mes-projets.git" target="_blank">> GitHub</a></p>
      </div>
    </div>
  </div>

  <!-- Popup de confirmation -->
  <div id="confirmationPopup" class="popup">
    <div class="popup-content">
      <span class="close" onclick="closePopup()">&times;</span>
      <p id="popupMessage"></p>
    </div>
  </div>

  <?php include('footer.php'); ?>

  <script>
    document.getElementById("contactForm").addEventListener("submit", function (event) {
      event.preventDefault();
      let formData = new FormData(this);

      fetch("contact_process.php", {
        method: "POST",
        body: formData
      })
        .then(response => response.json())
        .then(data => {
          showPopup(data.message);
        })
        .catch(() => {
          showPopup("Erreur : l'envoi a échoué.");
        });
    });

    function showPopup(message) {
      document.getElementById("popupMessage").innerText = message;
      document.getElementById("confirmationPopup").style.display = "flex";
    }

    function closePopup() {
      document.getElementById("confirmationPopup").style.display = "none";
    }
  </script>
</body>

</html>
