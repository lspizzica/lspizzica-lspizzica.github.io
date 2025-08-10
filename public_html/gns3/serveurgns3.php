<link rel="stylesheet" href="../css/gns3/serveurgns3.css">
<link rel="icon" type="image/vnd.icon" href="../image/favicon/gns3.ico">
<?php include('navbar.php'); ?>

<body>
    <main>
        <div class="content">
            <div class="Titre">
                <h1>Configuration et utilisation de GNS3</h1>
            </div>
            <section id="prerequis">
                <h2>Prérequis </h2>
                <div class="texte-prerequis">
                    <ul>
                        <li>ESXI préinstaller</li>
                        <li>GNS3 Client</li>
                        <li>GNS3 VM VMWARE ESXI</li>
                        <li>windows 11 gns3 préconfiguration</li>
                        <li>système windows 11</li>
                        <li>fichier complémentaire</li>
                        <li>windows serveur 2016 préconfiguration</li>
                        <li>système windows serveur 2016</li>
                        <li>fichier complémentaire</li>
                        <li>pfsense</li>
                        <li>système pfsense</li>
                        <li>fichier complémentaire</li>
                        <li>Switch Cisco isov12</li>
                        <li>système pfsense</li>
                    </ul>
                </div>
            </section>

            <section id="esxi">
                <h2>Manipulation à faire dans ESXI</h2>
                <div class="texte-configuration">
                    <p>Créer une VM en choisissant la seconde option qui est une image complète d'une machine virtuelle
                        dans
                        notre cas de GNS3.</p>
                    <img src="../image/gns3/GNS3/Annexe1.png" onclick="openImage('../image/gns3/GNS3/Annexe2.png')">
                    </p>
                    <p>Vous devrez téléverser les fichiers ovf et vmdk à partir de votre ordinateur.</p>
                    <p>Vous devrez juste activé la fonctionnalité suivante pour ne pas avoir de problème de réseau dans
                        GNS3
                        <img src="../image/gns3/GNS3/Annexe3.png">
                    </p>
                </div>
            </section>

            <section id="reseau">
                <h2>Configuration Réseau</h2>
                <div class="description-configuration-reseau">
                    <p>Rendez-vous dans les paramètres réseau de ESXI puis ajouter un nouveau groupe de port</p>
                    <img src="../image/gns3/GNS3/Annexe4.png"> </p>
                    <p>Accepter toutes les options de sécurité </p>
                    <img src="../image/gns3/GNS3/Annexe5.png"> </p>
                </div>
            </section>

            <section id="gns3-client">
                <h2>Installation et configuration de GNS3 Client</h2>
                <div class="description-gns3-client">
                    <p>Suivez l'installation par défaut de GNS3 sauf à une étape ou il faut sélectionner GNS3 web Client
                        <img src="../image/gns3/GNS3/Annexe6.png">
                    </p>
                    <p>Une fois gns3 lancé rendez-vous dans préférences, serveur,
                        remote server </p>
                    <p><img src="../image/gns3/GNS3/Annexe7.png"> </p>
                    <p>Renseignez ensuite toutes les informations du serveur gns3 en changeant le port par défaut par le
                        port 80
                    </p>

                </div>
                <div class="suite">
                    <a href="gns3.php">Retourner aux différentes étapes</a>
                    <a href="esxi.php"> Étape précédente</a>
                    <a href="reseau.php"> Étape suivante</a>

                </div>
            </section>
        </div>
    </main>
    <?php include('../footer.php'); ?>
</body>

</html>