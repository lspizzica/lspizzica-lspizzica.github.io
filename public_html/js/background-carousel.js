// Tableau contenant les chemins des images pour le carrousel
const images = [
    './css/image/index/image0.jpg',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    'image4.jpg'
];

// Index de l'image actuellement affichée
let currentIndex = 0;

// Fonction pour changer l'image de fond
function changeBackgroundImage() {
    document.body.style.backgroundImage = `url('./css/image/${images[currentIndex]}')`;

    // Incrémente l'index pour passer à la prochaine image
    currentIndex = (currentIndex + 1) % images.length;
}

// Appeler la fonction pour changer l'image de fond toutes les 5 secondes
setInterval(changeBackgroundImage, 5000); // Changement toutes les 5 secondes (5000 millisecondes)
