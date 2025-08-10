<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" type="image/vnd.icon" href="image/favicon/contact.ico">
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="content">
        <h1>Contact</h1>
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <!-- Formulaire -->
                    <div class="col-md-6">
                        <div class="formulaire">
                            <div class="contact-content">
                                <div class="single-contact-box">
                                    <div class="contact-form">
                                        <form id="contactForm" method="post">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="name" placeholder="Nom et prénom*" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="email" placeholder="Email*" name="email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="subject" placeholder="Sujet" name="subject">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="8" id="comment" placeholder="Message" name="message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="single-contact-btn">
                                                        <button type="submit" class="contact-btn">Envoyer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Informations de contact -->
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="Contact2">
                                <h3>Mes coordonnées</h3>
                                <p>Email: leo.spizzica@gmail.com</p>
                                <p>Téléphone: 06 88 99 86 11</p>
                            </div>
                            <div class="Contact-reseaux">
                                <h3>Mes réseaux</h3>
                                <a href="https://www.linkedin.com/in/l%C3%A9o-spizzica/" target="_blank">
                                    <img src="image/linkedin2.png" alt="LinkedIn">
                                </a>
                                <a href="https://github.com/lspizzica/mes-projets.git" target="_blank">
                                    <img src="image/github3.png" alt="GitHub">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Popup de confirmation -->
    <div id="confirmationPopup" class="popup" style="display: none;">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <p id="popupMessage"></p>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Empêche le rechargement de la page
            let formData = new FormData(this);

            fetch("contact_process.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data); // Pour déboguer, affichez la réponse dans la console
                    showPopup(data.message);
                })
                .catch(error => {
                    console.error("Erreur :", error);
                    showPopup("Erreur lors de l'envoi. Veuillez réessayer plus tard.");
                });
        });

        function showPopup(message) {
            document.getElementById("popupMessage").innerText = message;
            document.getElementById("confirmationPopup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("confirmationPopup").style.display = "none";
        }
    </script>

</body>

</html>