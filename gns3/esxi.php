<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.icon" href="../image/favicon/esxi.ico">
    <title>GNS3 - ESXI</title>
    <link rel="stylesheet" href="../css/gns3/esxi.css">
</head>

<body>
    <?php include('navbar.php'); ?>
    <main>
        <div class="content">
            <div class="Titre">
                <h1>Installation d'ESXI</h1>
            </div>
            <section id="prerequis">
                <h2>Prérequis :</h2>
                <div class="texte-prerequis">
                    <ul>
                        <li>Serveur avec puce ILO-4 (Intel)</li>
                        <li>ISO ESXI</li>
                    </ul>
                </div>
            </section>
            <section id="ilo-4">
                <h2>ILO-4 :</h2>
                <div class="texte-configuration">
                    <p>Nous aurons besoins de l'adresse IP de la puce ILO-4 afin d'accéder à l'interface web d'ilo.
                    </p>
                    <p>Nous aurons aussi besoin d'entrer dans la configuration de la puce afin de créer un utilisateur
                    </p>
                    <div class="Description-installation-esxi">
                        <p>Pour commencer nous allons insérer l'iso d'esxi, pour cela il va falloir suivre les étapes
                            ci-dessous : </p>
                        <ul>
                            <li>Accéder à l'interface ILO-4.</li>
                            <li>Parvenir à Remote Console.</li>
                            <li>Utiliser la console HTML5.</li>
                            <li>Cliquer sur l'icône en forme de CD en haut à gauche de la console.</li>
                            <li>Naviguer vers CD/DVD.</li>
                            <li>Se diriger vers Local *.iso file.</li>
                            <li>Sélectionner l’ISO d’ESXI.</li>
                            <li>Redémarrer le serveur via l'interface ILO-4 pour que la modification soit prise en
                                compte.
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="esxi">
                <h2>ESXI :</h2>
                <div class="description-configuration-esxi">
                    <ul>
                        <li>Sélectionner l'installeur </li>
                        <ol><img src="../image/gns3/esxi/Annexe1.png" alt="Écran de sélection de l'installeur ESXi"></ol>
                        <li>Appuyer sur Entrée </li>
                        <ol><img src="../image/gns3/esxi/Annexe2.png" alt="Écran après sélection de l'installeur, appuyer sur Entrée"></ol>
                        <li>Accepter le contrat pour continuer en appuyant sur F11 </li>
                        <ol><img src="../image/gns3/esxi/Annexe3.png" alt="Écran du contrat de licence ESXi, appuyer sur F11 pour accepter"></ol>
                        <li>Sélectionner le disque où installer ESXi </li>
                        <ol><img src="../image/gns3/esxi/Annexe4.png" alt="Écran de sélection du disque pour l'installation d'ESXi"></ol>
                        <li>Sélectionner la langue</li>
                        <ol><img src="../image/gns3/esxi/Annexe5.png" alt="Écran de sélection de la langue"></ol>
                        <li>Mettre un mot de passe </li>
                        <ol><img src="../image/gns3/esxi/Annexe6.png" alt="Écran de configuration du mot de passe administrateur"></ol>
                        <li>Retirer le CD d'installation et appuyez sur Entrée</li>
                        <ol><img src="../image/gns3/esxi/Annexe7.png" alt="Écran demandant de retirer le CD d'installation, appuyer sur Entrée"></ol>
                        <li>Le serveur redémarre, appuyer sur F2 </li>
                        <ol><img src="../image/gns3/esxi/Annexe8.png" alt="Écran après redémarrage, appuyer sur F2"></ol>
                        <li>Entrer le mot de passe </li>
                        <ol><img src="../image/gns3/esxi/Annexe9.png" alt="Écran pour entrer le mot de passe administrateur"></ol>
                        <li>Configurez le réseau </li>
                        <ol><img src="../image/gns3/esxi/Annexe10.png" alt="Écran de configuration réseau ESXi"></ol>
                        <li>Rendez-vous sur Network Adapters </li>
                        <ol><img src="../image/gns3/esxi/Annexe11.png" alt="Écran de sélection des adaptateurs réseau"></ol>
                        <li>Aller sur Ipv4 configuration </li>
                        <ol><img src="../image/gns3/esxi/Annexe12.png" alt="Écran de configuration IPv4"></ol>
                        <li>Paramétrer l'IP de l'ESXi, le subnet et la gateway</li>
                        <ol><img src="../image/gns3/esxi/Annexe13.png" alt="Écran de paramétrage IP, subnet et passerelle"></ol>
                        <li>Terminer en sauvegardant le tout.</li>
                    </ul>
                </div>
            </section>
            <div class="suite">
                <a href="gns3.php"class="btn-suite">Retourner aux différentes étapes</a>
                <a href="serveurgns3.php" class="btn-suite"> Étape suivante</a>

            </div>
            </section>
        </div>
    </main>
</body>
<?php include('../footer.php'); ?>

</html>
