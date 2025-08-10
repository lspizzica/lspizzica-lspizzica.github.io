<link rel="stylesheet" href="../css/stage/mini-chantier.css">
<link rel="stylesheet" href="../css/navbar-footer/style.css">


<?php include('navbar.php'); ?>

<body>
    <div class="content">
        <div class="page">
            <img src="mini-chantier/page1.jpg" alt="Description de l'image 1">
        </div>
        <div class="page">
            <img src="mini-chantier/page2.jpg" alt="Description de l'image 2">
        </div>

        <div class="page">
            <img src="mini-chantier/page3.jpg" alt="Description de l'image 3">
        </div>

        <div class="page">
            <img src="mini-chantier/page4.jpg" alt="Description de l'image 4">
        </div>

        <div class="page">
            <img src="mini-chantier/page5.jpg" alt="Description de l'image 5">
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Retour en haut"><i class="fas fa-arrow-up">▲</i></button>
</body>

<script>
// Afficher le bouton lorsque l'utilisateur fait défiler la page vers le bas
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// Lorsque l'utilisateur clique sur le bouton, remonter en haut de la page
function topFunction() {
    document.body.scrollTop = 0; // Pour les navigateurs Safari
    document.documentElement.scrollTop = 0; // Pour les autres navigateurs
}
</script>

</html>

<?php include('../footer.php'); ?>