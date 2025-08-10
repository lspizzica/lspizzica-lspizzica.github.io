<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/projet.css">
     <link rel="icon" type="image/vnd.icon" href="image/favicon/projet.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Léo Spizzica</title>

</head>

 <?php include('navbar.php'); ?>

 <body>
     <div class="content">
         <h1>Mes projets </h1>
         <div class="projet">
             <div class="gallery">
                 <div class="project" onclick="openPopup('popup5')">
                     <img src="image/gns3.png" alt="Projet 5">
                     <h2>GNS3</h2>
                 </div>
                 <!-- Ajoutez plus de projets ici -->
             </div>
         </div>

         <!-- Popups -->
         
         </div>
    
         <div id="popup5" class="popup">
             <div class="popup-content">
                 <span class="close" onclick="closePopup('popup5')">&times;</span>
                 <h1>GNS3</h1>
<p>GNS3 est une plateforme open source de virtualisation réseau permettant de concevoir, simuler et tester des réseaux complexes. Ce projet reproduit de manière réaliste les configurations réseau utilisées dans les Services Informatiques aux Organisations (SIO), offrant aux utilisateurs un environnement pour modéliser et tester des infrastructures couramment rencontrées dans les entreprises.</p>

<p>Grâce à cette simulation, les administrateurs réseau, étudiants et professionnels peuvent pratiquer la configuration des appareils, simuler le trafic et résoudre des problèmes réseau, renforçant ainsi leurs compétences pratiques et théoriques dans un contexte professionnel.</p>

                 <p>
                     <a href="gns3/gns3.php">Voir le détail du projet</a>
                 </p>
             </div>
         </div>
     </div>

     <script>
     function openPopup(popupId) {
         document.getElementById(popupId).style.display = "flex"; // Use flex to center it
     }

     function closePopup(popupId) {
         document.getElementById(popupId).style.display = "none";
     }

     // Close the popup when the user clicks anywhere outside of it
     window.onclick = function(event) {
         if (event.target.className === 'popup') {
             event.target.style.display = "none";
         }
     }
     </script>

 </body>
 <?php include('footer.php'); ?>

 </html>