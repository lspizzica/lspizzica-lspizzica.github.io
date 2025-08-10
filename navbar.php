<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Terminal Navbar Animée</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
    }

    nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 9999;
      background: #000;
      border-bottom: 2px solid #33ff33;
      padding: 10px 20px;
      box-sizing: border-box;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }

    body {
      padding-top: 60px; /* espace pour ne pas cacher le contenu sous le nav */
    }

    .prompt {
      font-weight: bold;
      font-size: 1.2rem;
      white-space: nowrap;
      color: #33ff33 !important;
    }

    .prompt::after {
      content: "_";
      animation: blink 1s step-start infinite;
      color: #33ff33 !important;
    }

    @keyframes blink {
      50% { opacity: 0; }
    }

    .nav-links {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .nav-links a {
      text-decoration: none;
      color: #33ff33;
      padding: 6px 10px;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: #99ff99;
    }

    .burger {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }

    .burger div {
      width: 24px;
      height: 3px;
      background: #33ff33;
      margin: 4px;
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
        width: 100%;
        flex-direction: column;
        margin-top: 10px;
      }

      .nav-links.show {
        display: flex;
      }

      .burger {
        display: flex;
      }
    }
  </style>
</head>
<body>

  <nav>
    <div class="prompt" id="terminalPrompt"></div>
    <div class="burger" onclick="toggleMenu()">
      <div></div><div></div><div></div>
    </div>
    <div class="nav-links" id="navLinks">
      <a href="index.php">Accueil</a>
      <a href="profil.php">A propos</a>
      <a href="experience.php">Experiences</a>
      <a href="association.php">Association</a>
      <a href="projet.php">Projet</a>
      <a href="contact.php">Contact</a>
    </div>
  </nav>

  <script>
    // Récupère le nom du fichier actuel sans le "./"
    const page = window.location.pathname.split("/").pop() || "index.html";
    const promptText = `leo@terminal:~$ ${page}`;
    const promptElement = document.getElementById("terminalPrompt");
    let i = 0;

    function typePrompt() {
      if (i < promptText.length) {
        promptElement.textContent += promptText.charAt(i);
        i++;
        setTimeout(typePrompt, 60);
      }
    }

    typePrompt();

    // Activer le lien correspondant
    const links = document.querySelectorAll('.nav-links a');
    links.forEach(link => {
      if (link.getAttribute('href') === page) {
        link.classList.add('active');
      }
    });

    function toggleMenu() {
      document.getElementById("navLinks").classList.toggle("show");
    }
  </script>

</body>
</html>
