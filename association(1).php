<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/association.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.icon" href="image/favicon/assocation.ico">
  <title>Portfolio - Léo Spizzica</title>
</head>
<?php include('navbar.php'); ?>



<body>
    <div class="d-flex justify-content-center align-items-center">
        <div class="content">
            <div id="numCafe" class="container section-container">
                <div class="text-content">
                    <h1>Co-fondateur Num Café - Aide à la précarité numérique (mars 2023 - novembre 2024)</h1>
                    <p>Le projet Num Café a été lancé le 10 mars 2023 par un groupe de quatre jeunes, dont j’ai eu l’honneur de faire partie au départ en partenariat de l'Ensemble Scolaire Jean Baptiste de La Salle ainsi que le Centre Diocésain. Chaque vendredi soir, de 16h00 à 19h00, un atelier est organisé au Centre Diocésain de Clermont-Ferrand, dans un esprit de convivialité et d'échange intergénérationnel.</p>
                    <p>L'objectif du projet est de créer un espace où chacun peut trouver de l’aide pour ses questions informatiques, mais aussi un lieu de partage et de rencontre. L'accent est mis sur la patience et la pédagogie, des valeurs essentielles pour transmettre efficacement des connaissances et créer une atmosphère bienveillante.</p>
                </div>
            </div>

                <div id="handicap" class="container section-container hidden">
                <h1>Aidant bénévole pour personnes handicapées et atteintes de maladies neuro-dégénératives (2018 - Aujourd'hui)</h1>

                <p>En tant qu'aidant bénévole, j'ai démontré un engagement inébranlable pour assurer le bien-être et le
                    confort
                    des personnes que j'ai soutenues. Mon approche empathique, ma capacité à résoudre les problèmes et à
                    m'adapter
                    aux besoins changeants des personnes concernées, ont été des éléments clés de mon succès. Cette
                    expérience m'a non
                    seulement permis de développer des compétences pratiques et organisationnelles, mais surtout, elle
                    m'a enrichi
                    sur le plan humain. J'ai pu mesurer l'impact positif sur la vie d'autrui, en particulier, par le
                    maintien d'un environnement
                    propre et sécurisé. J'ai aussi assuré la gestion administrative et financière.</p>
            </div>
                <div id="ecoute" class="container section-container hidden">
                <h1>Écoute bénévole pour personnes en détresse psychologique </h1>
                <h2>Ami en tête - Mars 2025 - Aujourd'hui </h2>
                
                <p>Je consacre une partie de mon temps libre à l’écoute bénévole auprès de personnes traversant des périodes difficiles sur le plan émotionnel ou psychologique. Mon rôle consiste à offrir une présence bienveillante, une oreille attentive, et un espace de parole sans jugement.</p>
                <p>Cette activité m’a permis de développer une grande capacité d’écoute active, ainsi qu’une meilleure compréhension des enjeux liés à la santé mentale.</p>
            </div>
<button id="arrow-left" class="arrow arrow-left hidden" aria-label="Section précédente" onclick="toggleContent(-1)">
  ‹
</button>
<button id="arrow-right" class="arrow arrow-right" aria-label="Section suivante" onclick="toggleContent(1)">
  ›
</button>


        </div>
    </div>
<?php include('footer.php'); ?>
    <script>
document.addEventListener("DOMContentLoaded", function() {
  const sections = [ "ecoute","handicap","numCafe"];
  let currentIndex = 0;

  const arrowLeft = document.getElementById("arrow-left");
  const arrowRight = document.getElementById("arrow-right");

  function updateView() {
    // Masquer toutes les sections
    sections.forEach((id, idx) => {
      const el = document.getElementById(id);
      if (idx === currentIndex) {
        el.classList.remove("hidden");
      } else {
        el.classList.add("hidden");
      }
    });

    // Gérer la visibilité des flèches
    arrowLeft.classList.toggle("hidden", currentIndex === 0);
    arrowRight.classList.toggle("hidden", currentIndex === sections.length -1);

    // Mettre à jour la classe background du body
    document.body.classList.remove("numCafe-bg", "handicap-bg", "ecoute-bg");

    if(currentIndex === 0) {
      document.body.classList.add("ecoute-bg");
    } else if(currentIndex === 1) {
      document.body.classList.add("handicap-bg");
    } else {
      document.body.classList.add("numCafe-bg");
    }
  }

  window.toggleContent = function(direction) {
    currentIndex = (currentIndex + direction + sections.length) % sections.length;
    updateView();
  }

  // Initialiser la vue au chargement
  updateView();
});


</script>
</body>


</html>