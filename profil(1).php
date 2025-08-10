<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Compétences & Formations</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #e0eafc, #cfdef3);
    color: #1a202c;
    min-height: 100vh;
    padding: 0 20px;
  }

  .navbar {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
    width: 100%;
  }

  main {
    margin-top:20px!important;
    max-width: 1200px;
    width: 95%;
    margin: 80px auto 40px;
    background: rgba(255, 255, 255, 0.85);
    border-radius: 18px;
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(16px);
    padding: 40px 50px;
  }

  header {
    text-align: center;
    margin-bottom: 50px;
  }

  header h1 {
    font-weight: 700;
    font-size: 2.5rem;
    letter-spacing: 0.05em;
    color: #2d3748;
  }

  h2 {
    font-weight: 700;
    font-size: 2rem;
    border-bottom: 3px solid #4c51bf;
    padding-bottom: 10px;
    margin-bottom: 30px;
    color: #4c51bf;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  section + section {
    margin-top: 50px;
  }

  .competences-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 25px;
  }

  .competence-category {
    background: #fafafa;
    border-radius: 14px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    transition: box-shadow 0.3s ease;
  }

  .decallage {
    margin-left: 50px !important;
  }

  .competence-category:hover {
    box-shadow: 0 8px 20px rgba(76, 81, 191, 0.3);
  }

  .competence-category h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
    color: #2d3748;
  }

  .competence-category ul {
    list-style-type: disc;
    padding-left: 20px;
  }

  .competence-category ul li {
    margin-bottom: 6px;
    color: #4a5568;
    font-size: 1rem;
  }

  .formations-list li {
    margin-bottom: 25px;
  }

  .formations-list time {
    display: block;
    font-weight: 700;
    font-size: 1.1rem;
    color: #4c51bf;
    margin-bottom: 6px;
  }

  .formations-list p {
    margin: 0;
    color: #4a5568;
    font-size: 1rem;
  }

  @media (max-width: 768px) {
    main {
      padding: 30px 25px;
    }

    header h1 {
      font-size: 2rem;
    }

    h2 {
      font-size: 1.5rem;
    }

    .competence-category h3 {
      font-size: 1.2rem;
    }
  }

  @media (max-width: 480px) {
    main {
      padding: 20px 15px;
    }

    header h1 {
      font-size: 1.8rem;
    }

    h2 {
      font-size: 1.4rem;
    }
  }

  .cv-btn {
    margin-left: 50px;
    display: inline-block;
    padding: 12px 24px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    background: linear-gradient(135deg, #007BFF, #00C6FF);
    border: none;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
    transition: all 0.3s ease;
    position: relative;
    text-align: center!important;
    cursor: pointer;
    user-select: none;
  }

  .cv-btn:hover {
    background: linear-gradient(135deg, #0056b3, #00a3cc);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 123, 255, 0.6);
  }

  .cv-btn::after {
    content: " ⬇️";
    margin-left: 8px;
  }

  .icon {
    width: 28px;
    height: 28px;
    fill: #4c51bf;
  }
</style>
</head>

<body>
<?php include('navbar.php'); ?>
<main>
  <header>
    <h1>A propos</h1>
  </header>

  <section>
    <h2><svg class="icon" viewBox="0 0 24 24"><path d="M9 17v-6h6v6h5V9h3L12 0 1 9h3v8z"/></svg>Compétences</h2>
    <div class="competences-list">
      <div class="competence-category">
        <h3>Insertion professionnelle</h3>
        <ul>
          <li>Adapter ses pratiques d’accueil et d’accompagnement selon les besoins</li>
          <li>Sens de l’accueil : écoute, orientation, information avec bienveillance</li>
          <li>Guider et accompagner dans les démarches en favorisant l’autonomie</li>
          <li>Structuration et synthèse d’informations</li>
          <li>Soutien actif à l’appropriation d’outils numériques ou administratifs</li>
          <li>Relation d’aide fondée sur l’écoute active, l’empathie et la confiance</li>
          <li>Gestion des priorités avec une organisation rigoureuse et autonome</li>
          <li>Esprit d’équipe : collaboration, échanges et co-construction</li>
          <li>Adaptabilité face à des profils variés et à des situations imprévues</li>
        </ul>
        <a href="documents/CV_CIP.pdf" download class="cv-btn">Cv Conseiller en insertion professionnel</a>
      </div>

      <div class="competence-category">
        <h3>Informatique</h3>
        <ul>
          <li>Utilisation avancée des systèmes d'exploitation (Windows, Linux)</li>
          <li>Virtualisation OS / Réseau</li>
          <li>Gestion d'un patrimoine informatique</li>
          <li>Réponse aux incidents / demandes d’assistance et d’évolution</li>
          <li>Développement de la présence en ligne de l’organisation</li>
          <li>Dépannage informatique</li>
          <li>Mise à disposition de services informatiques aux utilisateurs</li>
        </ul>
        <a href="documents/CV_Informatique.pdf" download class="cv-btn">Cv Informatique</a>
      </div>

      <div class="competence-category">
        <h3>Commerce</h3>
        <ul>
          <li>Réaliser le réassort</li>
          <li>Définir des besoins en approvisionnement</li>
          <li>Nettoyage d'un espace de travail</li>
          <li>Rotations produits</li>
          <li>Communication publicitaire en ligne (réseaux sociaux)</li>
          <li>Retirer des produits non conformes</li>
          <li>Contrôler le balisage et l'étiquetage des produits en rayon</li>
          <li>Informer, renseigner une personne sur les articles en vente</li>
        </ul>
        <a href="documents/CV_Commerce.pdf" download class="cv-btn">Cv Commerce</a>
      </div>
    </div>
  </section>

  <section>
    <h2><svg class="icon" viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v16l7-3 7 3V5a2 2 0 0 0-2-2z"/></svg>Formations</h2>
    <ul class="formations-list">
      <li>
        <time>2025</time>
        <p>Service Civique – France Travail :
          <br>- Intégrer la mission volontaire
          <br>- Incivilité et aggréssivité
          <br>- Civique et citoyenne
          <br>- Premier secours citoyen (PSC)
        </p>
      </li>

      <li>
        <time>2021–2024</time>
        <p>BTS SIO – Lycée Godefroy de Bouillon, Clermont-Ferrand :</p>
        <p class="decallage">➜ Certificat d'exemplarité</p>
      </li>

      <li>
        <time>2018–2021</time>
        <p>Bac pro Commerce - Lycée François Rabelais, Brassac les Mines</p>
        <p class="decallage">➜ BEP MRCU obtenu en 2e année</p>
      </li>
    </ul>
  </section>

<section>
  <h2><svg class="icon" viewBox="0 0 24 24"><path d="M3 3v18h18V3H3zm16 16H5V5h14v14zm-7-9h5v2h-5v5h-2v-5H7v-2h3V7h2v3z"/></svg>Lettres de recommandation</h2>
  <div class="competences-list">
    <div class="competence-category">
      <ul style="padding-left: 20px; font-size: 1rem; color: #4a5568;">
        <li>France Travail – Service Civique</li>
        <li>Num Café – Associations</li>
      </ul>
    </div>
  </div>
</section>

</main>
<?php include('footer.php'); ?>
</body>
</html>
