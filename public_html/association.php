<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Portfolio  - Léo Spizzica</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

  /* Reset */
  * {
    margin: 0; padding: 0; box-sizing: border-box;
  }

  body, html {
    height: 100%;
    background: black;
    color: #0f0;
    font-family: 'Share Tech Mono', monospace;
    overflow-x: hidden;
    display: flex;
    flex-direction: column;
  }

  /* Fond animé : matrix style code vert qui défile */
  #matrix-bg {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    z-index: 0;
    background: black;
  }

  canvas {
    display: block;
    width: 100%;
    height: 100%;
  }

  /* Navbar */
  nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    height: 50px;
    background: rgba(0,0,0,0.85);
    border-bottom: 2px solid #f00;
    display: flex;
    align-items: center;
    padding: 0 1.5rem;
    z-index: 20;
    box-shadow: 0 0 15px #f00;
  }

  nav ul {
    list-style: none;
    display: flex;
    gap: 1.5rem;
  }

  nav a {
    color: #0f0;
    text-decoration: none;
    font-weight: 700;
    font-size: 1rem;
    position: relative;
    transition: color 0.2s ease;
  }
  nav a:hover,
  nav a:focus {
    color: #f00;
    animation: glitchLink 0.7s infinite;
    outline: none;
  }

  @keyframes glitchLink {
    0%, 100% { text-shadow: 1px 0 #f00, -1px 0 #00f; }
    25% { text-shadow: 2px 0 #f00, -2px 0 #00f; }
    50% { text-shadow: 1px 1px #f00, -1px -1px #00f; }
    75% { text-shadow: 2px -1px #f00, -2px 1px #00f; }
  }

  /* Main content */
  main {
    position: relative;
    z-index: 10;
    padding: 70px 2rem 50px; /* laisser espace navbar + footer */
    max-width: 900px;
    margin: 0 auto;
    flex-grow: 1;
    overflow-y: auto;
  }

  /* Titre 1 glitch rouge */
  .glitch {
    position: relative;
    display: inline-block;
    font-weight: 700;
    color: #f00;
    animation: glitchAnim 1s infinite;
    margin-bottom: 1rem;
    font-size: 2rem;
  }
  .glitch::before, .glitch::after {
    content: attr(data-text);
    position: absolute;
    left: 0; top: 0;
    width: 100%;
    overflow: hidden;
    clip: rect(0, 900px, 0, 0);
  }
  .glitch::before {
    left: 2px;
    text-shadow: -2px 0 #f00;
    animation: glitchAnimBefore 1s infinite;
  }
  .glitch::after {
    left: -2px;
    text-shadow: -2px 0 #00f;
    animation: glitchAnimAfter 1s infinite;
  }
  @keyframes glitchAnim {
    0%, 100% { transform: none; }
    20% { transform: translate(-1.5px, 1.5px); }
    40% { transform: translate(1.5px, -1.5px); }
    60% { transform: translate(-1.5px, 0); }
    80% { transform: translate(1.5px, 1.5px); }
  }
  @keyframes glitchAnimBefore {
    0%, 100% { clip: rect(0, 900px, 0, 0); }
    20% { clip: rect(0, 900px, 20px, 0); }
    40% { clip: rect(10px, 900px, 25px, 0); }
    60% { clip: rect(0, 900px, 20px, 0); }
    80% { clip: rect(10px, 900px, 30px, 0); }
  }
  @keyframes glitchAnimAfter {
    0%, 100% { clip: rect(0, 900px, 0, 0); }
    20% { clip: rect(15px, 900px, 25px, 0); }
    40% { clip: rect(20px, 900px, 30px, 0); }
    60% { clip: rect(10px, 900px, 20px, 0); }
    80% { clip: rect(25px, 900px, 40px, 0); }
  }

  /* Box expérience avec animation apparition progressive */
  .exp-box {
    background: rgba(0, 50, 0, 0.75);
    border: 2px solid #0f0;
    border-radius: 6px;
    padding: 1rem 1.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 0 15px #0f0aa0;

    opacity: 0;
    transform: translateX(-30px);
    transition: opacity 1s ease, transform 1s ease;
  }
  .exp-box.visible {
    opacity: 1;
    transform: translateX(0);
  }

  /* Curseur vert clignotant */
  .cursor {
    display: inline-block;
    width: 12px;
    height: 1.2em;
    background-color: #0f0;
    margin-left: 4px;
    animation: blink 1s steps(2, start) infinite;
    vertical-align: bottom;
  }
  @keyframes blink {
    0%, 50% { background-color: #0f0; }
    50.1%, 100% { background-color: transparent; }
  }

  footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;
    background: rgba(0,0,0,0.85);
    border-top: 2px solid #f00;
    color: #0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 15;
    box-shadow: 0 0 15px #f00;
    font-family: 'Share Tech Mono', monospace;
  }

</style>
</head>
<body>
<?php include('navbar.php'); ?>
<div id="matrix-bg">
  <canvas id="matrix"></canvas>
</div>

<main role="main" aria-label="Expériences professionnelles">

  <h1 class="glitch" data-text="!!! INTRUSION DETECTED !!!">!!! INTRUSION DETECTED !!!</h1>

  <section class="exp-box" aria-labelledby="exp1-title">
    <h2 id="exp1-title" class="exp-title">Co-fondateur Num Café - Aide à la précarité numérique</h2>
    <p class="exp-subtitle">Mars 2023 - Novembre 2024</p>
    <p class="exp-text">Le projet Num Café a été lancé le 10 mars 2023 par un groupe de quatre jeunes, dont j’ai eu l’honneur de faire partie au départ en partenariat de l'Ensemble Scolaire Jean Baptiste de La Salle ainsi que le Centre Diocésain. Chaque vendredi soir, de 16h00 à 19h00, un atelier est organisé au Centre Diocésain de Clermont-Ferrand, dans un esprit de convivialité et d'échange intergénérationnel.</p>
    <p class="exp-text">L'objectif du projet est de créer un espace où chacun peut trouver de l’aide pour ses questions informatiques, mais aussi un lieu de partage et de rencontre. L'accent est mis sur la patience et la pédagogie, des valeurs essentielles pour transmettre efficacement des connaissances et créer une atmosphère bienveillante.</p>
  </section>

  <section class="exp-box" aria-labelledby="exp2-title">
    <h2 id="exp2-title" class="exp-title">Aidant bénévole pour personnes handicapées</h2>
    <p class="exp-subtitle">2018 - Aujourd'hui</p>
    <p class="exp-text">En tant qu'aidant bénévole, j'ai démontré un engagement inébranlable pour assurer le bien-être et le confort des personnes que j'ai soutenues. Mon approche empathique, ma capacité à résoudre les problèmes et à m'adapter aux besoins changeants des personnes concernées, ont été des éléments clés de mon succès.</p>
    <p class="exp-text">Cette expérience m'a non seulement permis de développer des compétences pratiques et organisationnelles, mais surtout, elle m'a enrichi sur le plan humain. J'ai pu mesurer l'impact positif sur la vie d'autrui, en particulier, par le maintien d'un environnement propre et sécurisé. J'ai aussi assuré la gestion administrative et financière.</p>
  </section>

  <section class="exp-box" aria-labelledby="exp3-title">
    <h2 id="exp3-title" class="exp-title">Écoute bénévole pour personnes en détresse psychologique</h2>
    <p class="exp-subtitle">Mars 2025 - Aujourd'hui</p>
    <p class="exp-text">Je consacre une partie de mon temps libre à l’écoute bénévole auprès de personnes traversant des périodes difficiles sur le plan émotionnel ou psychologique. Mon rôle consiste à offrir une présence bienveillante, une oreille attentive, et un espace de parole sans jugement.</p>
    <p class="exp-text">Cette activité m’a permis de développer une grande capacité d’écoute active, ainsi qu’une meilleure compréhension des enjeux liés à la santé mentale.</p>
  </section>

</main>

<script>
  // Matrix rain effect - vanilla JS
  const canvas = document.getElementById('matrix');
  const ctx = canvas.getContext('2d');

  // Set canvas full screen
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  const letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*()*&^%+-/~{[|`]}';
  const fontSize = 16;
  const columns = canvas.width / fontSize;

  // Array of drops - one per column
  const drops = Array(Math.floor(columns)).fill(1);

  function draw() {
    ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = '#0f0'; // green text
    ctx.font = fontSize + 'px Share Tech Mono';

    for (let i = 0; i < drops.length; i++) {
      const text = letters.charAt(Math.floor(Math.random() * letters.length));
      ctx.fillText(text, i * fontSize, drops[i] * fontSize);

      if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
        drops[i] = 0;
      }
      drops[i]++;
    }
  }

  setInterval(draw, 40);

  window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  });

  // Animation progressive des blocs exp-box
  document.addEventListener('DOMContentLoaded', () => {
    const boxes = document.querySelectorAll('.exp-box');
    boxes.forEach((box, i) => {
      setTimeout(() => {
        box.classList.add('visible');
      }, i * 1500); // délai de 1.5s entre chaque bloc
    });
  });
</script>
<?php include('footer.php'); ?>
</body>
</html>
