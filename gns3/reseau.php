<link rel="stylesheet" href="../css/gns3/reseau.css">
<link rel="icon" type="image/vnd.icon" href="../image/favicon/reseau.ico">
<?php include('navbar.php'); ?>

<body>
    <main>
        <div class="content">
            <div class="Titre">
                <h1>Le réseau SIO</h1>
            </div>
            <section id="salle">
                <h2>Salle SISR (f205)</h2>
                <section id="texte-salle">
                    <p>Plage d'adresses IP : 192.168.151.x (x représente le numéro de poste)</p>
                    <p>Exemples d'adresses IP :</p>
                    <ul>
                        <li>Poste 1 : 192.168.151.101</li>
                        <li>Poste 2 : 192.168.151.102</li>
                        <li>Poste 3 : 192.168.151.103</li>
                        <li>Poste 4 : 192.168.151.104</li>
                    </ul>
                </section>
            </section>

            <section id="salle">
                <h2>Salle SLAM (f204)</h2>
                <section id="texte-salle">
                    <p>Plage d'adresses IP : 192.168.150.x (x représente le numéro de poste)</p>
                    <p>Exemples d'adresses IP :</p>
                    <ul>
                        <li>Poste 1 : 192.168.150.101</li>
                        <li>Poste 2 : 192.168.150.102</li>
                        <li>Poste 3 : 192.168.150.103</li>
                        <li>Poste 4 : 192.168.150.104</li>
                    </ul>
                </section>
            </section>


            <section id="salle">
                <h2>Salle serveur (intermédiaire)</h2>
                <section id="texte-salle">
                    <p>Plage d'adresses IP : 192.168.153.x (x représente le numéro de chaque machine)</p>
                    <p>Exemple d'adresse IP du serveur :</p>
                    <ul>
                        <li>Windows Server : 192.168.153.1</li>
                        <li>Windows Server : 192.168.150.254</li>
                        <li>Windows Server : 192.168.151.254</li>
                    </ul>
                    <p>Dans cette configuration, le réseau est divisé en fonction des salles, avec une salle
                        intermédiaire
                        servant
                        de serveur réseau, où le pare-feu PfSense est également situé. Chaque zone possède sa propre
                        plage
                        d'adresses IP pour les ordinateurs connectés.</p>
                    <p> Voici un schéma du réseau SIO <a href="serveurgns3.php">
                            <img src="../image/gns3/SIO/Annexe21.png" alt="Texte alternatif pour mon image"></a></p>
                </section>
            </section>
            <div class="Titre">
                <h1>Créer une simulation du réseau SIO.</h1>
            </div>
            <div class="salle-salle">

                <h2>Dans la salle serveur :</h2>

                <div class="pfsense">
                    <h3>Pfsense :</h3>
                    <ul>
                        <li>Installer Pfsense sur un matériel dédié ou une machine virtuelle.</li>
                        <li>Configurer Pfsense en ajoutant deux interfaces réseau.</li>
                        <li>Modifier les adresses IP des trois interfaces pour correspondre à la topologie du
                            réseau
                            SIO.
                        </li>
                        <li>Créer des règles de pare-feu pour contrôler le trafic sur les deux nouvelles
                            interfaces.
                        </li>
                    </ul>
                </div>

                <div class="windows-server">
                    <h3>Windows Server :</h3>
                    <ul>
                        <li>Installer Windows Server sur une machine dédiée ou une machine virtuelle.</li>
                        <li>Configurer l'adresse IP de Windows Server pour qu'elle corresponde à la topologie du
                            réseau
                            SIO.
                        </li>
                        <li>Installer et configurer Active Directory sur Windows Server.</li>
                        <li>Créer des unités d'organisation (OU) pour refléter la structure du SIO.</li>
                        <li>Utiliser PowerShell et un fichier CSV pour créer tous les comptes utilisateurs des
                            professeurs
                            et des élèves du SIO.</li>
                    </ul>
                </div>
            </div>

            <div class="salles-sisr-slam">
                <h2>Dans les salles SISR et SLAM :</h2>

                <div class="installation-machines">
                    <ul>
                        <li>Installer 4 machines dans chaque salle, représentant les postes de travail des
                            élèves.</li>
                        <li>Configurer les adresses IP des machines pour qu'elles correspondent à la plage
                            d'adresses IP
                            attribuée à chaque salle.</li>
                        <li>Intégrer les machines dans l'Active Directory configuré sur le serveur Windows, afin
                            que les
                            utilisateurs puissent s'authentifier et accéder aux ressources partagées.</li>
                    </ul>
                </div>
            </div>
            <div class="suite">
                <a href="gns3.php">Retourner aux différentes étapes</a>
                <a href="serveurgns3.php">Retourner a l'étape précédente</a>
                <a href="gns3vm.php">étape suivante</a>

            </div>
        </div>
    </main>
</body>

</html>
<!-- Inclusion de Bootstrap JS si nécessaire -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include('../footer.php'); ?>

</html>