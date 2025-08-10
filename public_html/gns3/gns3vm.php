<link rel="stylesheet" href="../css/gns3/gns3vm.css">
<link rel="icon" type="image/vnd.icon" href="../image/favicon/gns3vm.ico">

<?php include('navbar.php'); ?>

<html>

<body>
    <main>
        <div class="content">
            <div class="Titre">
                <h1>Pfsense</h1>
            </div>
            <section id="pfsense">
                <h2>Installation</h2>
                <section id="step-description">
                    <ul>
                        <li>Installez pfSense.</li>
                        <img src="../image/gns3/GNS3VM/Annexe1.png">
                        <li>Sélectionnez l'option "Auto (ZFS) Guided Root-on-ZFS" pour l'installation.</li>
                        <img src="../image/gns3/GNS3VM/Annexe2.png">
                        <li>Choisissez "stripe stripe" pour une configuration sans redondance.</li>
                        <img src="../image/gns3/GNS3VM/Annexe3.png">
                        <li>Sélectionnez "ada0 VBOX HARDDISK" comme espace de stockage.</li>
                        <img src="../image/gns3/GNS3VM/Annexe4.png">
                        <li>Arriver à cette étape ci dessous vous devrez éjectez le disque et redemarrer la machine.
                        </li>
                        <img src="../image/gns3/GNS3VM/Annexe5.png">
                    </ul>
                </section>
            </section>
            <section id="configuration">
                <h2>Configuration du réseau</h2>
                <section id="description-configuration">
                    <ul>
                        <li>Appuyez sur la touche 2.</li>
                        <li>Appuyez sur la touche 2 à nouveau.</li>
                        <li>Entrez l'adresse IP 192.168.0.254.</li>
                        <img src="../image/gns3/GNS3VM/Annexe6.png">
                        <li>Choisissez un masque de sous-réseau /24.</li>
                        <li>Appuyez deux fois sur Entrée.</li>
                        <li>Appuyez deux fois sur "n".</li>
                        <li>Voilà le résultat donné : </li>
                        <img src="../image/gns3/GNS3VM/Annexe7.png">
                    </ul>
                    <p>Une fois fini rendez vous sur l'interface web a l'aide de l'adresse ip qui est renseigner sur
                        la
                        VM de pfsense et rendez vous sur "interfaces/Interface Assignements" et rajouter 2
                        interfaces
                        comme si dessous</p>
                    <img src="../image/gns3/GNS3VM/Annexe8.png">
                    <p> vous allez devoir ensuite rajouter des règles au nouvelles interface pour leur permettre de communiquer entre elle donne si joint :</p>
                    <p>Pour OPT1 : </p>
                    <img src="../image/gns3/GNS3VM/Annexe28.png">
                    <p>Pour OPT2 : </p>
                    <p>les 2 règles avec comme déstination OPT1 et OPT2 sont pour les protocoles qui sont utilisez pour les différentes fonction de Windows Server et son active directory</p>
                    <img src="../image/gns3/GNS3VM/Annexe29.png">
                    <div class="Titre">
                        <h1>Windows Server</h1>
                    </div>
                    <section id="installation">
                        <h2>Installation</h2>
                        <p>Il vous suffira de suivre l'installation basique de windows serveur à une certaine étape
                            vous
                            devrez : </p>
                        <ul>
                            <li>Choisir le type d’installation : Windows Server 2016 Standard (expérience
                                utilisateur).</li>
                        </ul>
                    </section>
                    <section id="installation-ad">
                        <h2>Installation d'Active Directory</h2>
                        <section id="description-installation-ad">
                            <ul>
                                <li>Ouvrez le Gestionnaire de serveur </li>
                                <img src="../image/gns3/GNS3VM/Annexe10.png">
                                <li>Cliquez sur "Gérer" > "Ajouter des rôles et
                                    fonctionnalités".</li>
                                <img src="../image/gns3/GNS3VM/Annexe11.png">

                                <li>Cochez "Services AD DS" pour installer le rôle.</li>
                                <li>Poursuivez sans sélectionner de fonctionnalités supplémentaires.</li>
                                <li>Cliquez sur "Installer" pour démarrer l'installation.</li>
                                <li>Promouvez le serveur en contrôleur de domaine.</li>
                                <li>Choisissez "Ajouter une nouvelle forêt" et indiquez le nom de domaine.</li>
                                <li>Définissez le niveau fonctionnel de la forêt et du domaine.</li>
                                <li>Indiquez un nom NETBIOS pour le domaine.</li>
                                <li>Terminez en cliquant sur installer.</li>
                            </ul>
                        </section>
                    </section>
                    <section id="creations">
                        <h2>Création d'utilisateurs, d'OU et des groupes </h2>
                        <section id="description-creations">
                            <h3>Création des OU</h3>
                            <ul>
                                <li>Créez différentes OUs : BTSSIO, SIO1, SIO2, SISR, SLAM, Les élèves.</li>
                            </ul>
                            <h3>Création des groupes</h3>
                            <ul>
                                <li>Créez un groupe : SIO2</li>
                            </ul>
                            <h3>Création d'utilisateurs</h3>
                            <h4>Les élèves</h4>
                            <ul>
                                <li>Créez un fichier CSV.</li>
                                <li>Utilisez un script PowerShell pour créer les utilisateurs en utilisant les
                                    informations du
                                    fichier CSV.</li>
                            </ul>
                            <h4>Les professeurs</h4>
                            <ul>
                                <li>Créez les professeurs manuellement.</li>
                            </ul>

                            <div class="windows-installation">
                                <div class="step">
                                    <div class="step-header">
                                        <h1>Windows</h1>
                                    </div>
                                    <div class="step-description">
                                        <h2>Installation</h2>
                                        <p>Pour l'installation il vous suffira juste de suivre l'installation de base
                                            sans
                                            rien de
                                            particulier</p>
                                        <h2>Intégration des machines dans le serveur</h2>
                                        <ul>
                                            <li> Se rendre dans l'explorateur de fichier faire un clique droit puis
                                                cliquer
                                                sur
                                                propriété
                                            </li>
                                            <li>Cliquer sur domaine et groupe de travail</li>
                                            <li>Une fois dans propriété système cliquer sur modifier</li>
                                            <li>Rentrer les informations du serveur AD : sio.local</li>
                                            <li>Vous devrez rentrer les informations de connexion de l'admin</li>
                                            <li>Vous devrez aussi redémarrer l'ordinateur.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                    <div class="suite">
                        <a href="reseau.php">Étape précédente</a>
                        <a href="gns3.php">Différentes étapes</a>
                    </div>
                </section>
            </section>
        </div>
    </main>
</body>

</html>
<?php include('../footer.php'); ?>