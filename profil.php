<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio - Interface VirtualBox</title>
  <link rel="icon" type="image/vnd.icon" href="image/favicon/apropos.ico">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #0d1117;
      color: #39ff14;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
    }

    .window {
      width: 960px;
      height: 600px;
      background-color: #121921;
      border: 1px solid #39ff14;
      border-radius: 10px;
      box-shadow: 0 0 30px #39ff14aa;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .title-bar {
      height: 35px;
      background-color: #1e242d;
      display: flex;
      align-items: center;
      padding: 0 10px;
      justify-content: space-between;
      border-bottom: 1px solid #39ff14;
    }

    .title-bar .buttons {
      display: flex;
      gap: 8px;
    }

    .title-bar .buttons span {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      display: inline-block;
    }

    .btn-close { background: #ff5f56; }
    .btn-min { background: #ffbd2e; }
    .btn-max { background: #27c93f; }

    .title-bar .title {
      font-weight: bold;
      color: #39ff14;
      font-size: 14px;
    }

    .window-body {
      flex: 1;
      display: flex;
    }

    .sidebar {
      width: 220px;
      background-color: #161b22;
      border-right: 1px solid #39ff14;
      display: flex;
      flex-direction: column;
    }

    .vm-item {
      padding: 14px 16px;
      cursor: pointer;
      border-bottom: 1px solid #222;
      color: #a0ffa0;
      transition: background 0.2s;
    }

    .vm-item:hover,
    .vm-item.active {
      background-color: #39ff14;
      color: #121921;
    }

    .content {
      flex: 1;
      padding: 20px;
      overflow-y: auto;
    }

    .section {
      display: none;
    }

    .section.active {
      display: block;
    }

    h2 {
      margin-top: 0;
      border-bottom: 2px solid #39ff14;
      padding-bottom: 5px;
    }

    ul {
      padding-left: 20px;
    }

    li {
      color: #a0ffa0;
      margin-bottom: 0.5rem;
    }

    a.cv-link {
      display: inline-block;
      margin-top: 1rem;
      padding: 10px 20px;
      background: #39ff14;
      color: #121921;
      font-weight: bold;
      text-decoration: none;
      border-radius: 20px;
      box-shadow: 0 0 15px #39ff14cc;
      transition: 0.3s ease;
    }

    a.cv-link:hover {
      background: #28cc0d;
      box-shadow: 0 0 25px #28cc0dcc;
    }
  </style>
</head>
<body>

<?php include('navbar.php'); ?>

<main>
  <div class="window">
    <div class="title-bar">
      <div class="buttons">
        <span class="btn-close"></span>
        <span class="btn-min"></span>
        <span class="btn-max"></span>
      </div>
      <div class="title">VirtualBox - Portfolio</div>
      <div style="width: 50px;"></div>
    </div>

    <div class="window-body">
      <div class="sidebar">
        <div class="vm-item active" data-target="competences">🖥️ Compétences</div>
        <div class="vm-item" data-target="formations">📚 Formations</div>
        <div class="vm-item" data-target="lettres">📄 Lettres</div>
      </div>

      <div class="content">
        <div id="competences" class="section active">
          <h2>Compétences</h2>
          <strong>Insertion professionnelle</strong>
          <ul>
            <li>Accueil bienveillant, écoute active, orientation</li>
            <li>Relation d’aide, accompagnement à l’autonomie</li>
            <li>Outils numériques, structuration des infos</li>
          </ul>

          <strong>Informatique</strong>
          <ul>
            <li>Windows / Linux, virtualisation, dépannage</li>
            <li>Réseaux, maintenance, création web</li>
          </ul>

          <strong>Commerce</strong>
          <ul>
            <li>Réassort, étiquetage, conseil client</li>
            <li>Réseaux sociaux, merchandising</li>
          </ul>

          <a href="documents/CV_CIP.pdf" download class="cv-link">CV Insertion Pro</a>
          <a href="documents/CV_Informatique.pdf" download class="cv-link">CV Informatique</a>
          <a href="documents/CV_Commerce.pdf" download class="cv-link">CV Commerce</a>
        </div>

        <div id="formations" class="section">
          <h2>Formations</h2>
          <ul>
            <li><strong>2025</strong> – Service Civique – France Travail</li>
            <li><strong>2021–2024</strong> – BTS SIO – Clermont-Ferrand</li>
            <li><strong>2018–2021</strong> – Bac Pro Commerce – Brassac-les-Mines</li>
          </ul>
        </div>

        <div id="lettres" class="section">
          <h2>Lettres de recommandation</h2>
          <ul>
            <li>France Travail – Service Civique</li>
            <li>Num Café – Association</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include('footer.php'); ?>

<script>
  const items = document.querySelectorAll('.vm-item');
  const sections = document.querySelectorAll('.section');

  items.forEach(item => {
    item.addEventListener('click', () => {
      items.forEach(i => i.classList.remove('active'));
      sections.forEach(s => s.classList.remove('active'));
      item.classList.add('active');
      document.getElementById(item.dataset.target).classList.add('active');
    });
  });
</script>

</body>
</html>
