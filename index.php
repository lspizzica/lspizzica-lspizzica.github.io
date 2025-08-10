<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>VM - Léo Spizzica</title>
  <link rel="icon" type="image/vnd.icon" href="image/favicon/index.ico">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html, body {
      background-color: #000;
      font-family: 'Share Tech Mono', monospace;
      color: #33ff33;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
    }

    .main-content {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px 15px;
    }

    .vm-window {
      background-color: #111;
      border: 2px solid #33ff33;
      box-shadow: 0 0 30px #33ff33aa;
      border-radius: 8px;
      max-width: 1000px;
      width: 100%;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .vm-header {
      background-color: #000;
      padding: 0.5rem 1rem;
      color: #33ff33;
      border-bottom: 1px solid #33ff33;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .vm-header .dots {
      display: flex;
      gap: 0.4rem;
    }

    .dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: #33ff33;
      opacity: 0.7;
    }

    .vm-body {
      padding: 2rem;
      display: flex;
      flex-direction: column;
    }

    @media(min-width: 768px) {
      .vm-body {
        flex-direction: row;
        justify-content: space-between;
      }
    }

    .text-section {
      flex: 2;
      margin-bottom: 2rem;
    }

    @media(min-width: 768px) {
      .text-section {
        margin-right: 2rem;
        margin-bottom: 0;
      }
    }

    .terminal-text {
      background-color: #000;
      border: 1px dashed #33ff33;
      padding: 1rem;
      min-height: 300px;
      white-space: pre-wrap;
      overflow-wrap: break-word;
      animation: flicker 1s infinite alternate;
    }

    @keyframes flicker {
      0% { box-shadow: 0 0 10px #33ff3388; }
      100% { box-shadow: 0 0 15px #33ff33aa; }
    }

    .photo-section {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .photo-section img {
      width: 180px;
      height: 180px;
      border-radius: 10px;
      border: 2px solid #33ff33;
      object-fit: cover;
      box-shadow: 0 0 20px #33ff33cc;
      transition: transform 0.3s;
    }

    .photo-section img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px #33ff33ff;
    }

    footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      background-color: #000;
      color: #33ff33;
      border-top: 1px solid #33ff33;
    }
  </style>
</head>
<body>
<?php include('navbar.php'); ?>

<div class="main-content">
  <div class="vm-window">

    <div class="vm-header">
      <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <div>root@vm-leo:~</div>
    </div>

    <div class="vm-body">
      <div class="text-section">
        <div id="typed" class="terminal-text"></div>
      </div>
      <div class="photo-section">
        <img src="image/pdp.jpg" alt="Photo de Léo">
      </div>
    </div>

  </div>
</div>

<footer>
  © 2025 Léo Spizzica - Interface VM inspirée réseau
</footer>

<script>
  const texte =
`Nom : Spizzica
Prénom : Léo
Âge : 24 ans


Objectif professionnel : Chercher une alternance pour préparer le titre professionnel de Conseiller en Insertion Professionnelle (CIP).

Passionné depuis mon enfance par l'informatique,
j'aime comprendre le fonctionnement des systèmes et logiciels.

Mon parcours : Mon service civique à France Travail m'a donné l'envie de m'engager pleinement dans le métier de CIP, afin d'accompagner durablement les personnes vers l'emploi.
`;

  const typedElement = document.getElementById('typed');
  let index = 0;

  function typeText() {
    if (index < texte.length) {
      typedElement.textContent += texte.charAt(index);
      index++;
      setTimeout(typeText, 30);
    }
  }

  typeText();
</script>
</body>
</html>
