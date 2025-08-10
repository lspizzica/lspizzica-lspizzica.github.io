<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio - Léo Spizzica</title>
  <link rel="icon" type="image/vnd.icon" href="image/favicon/experience.ico" />
  <style>
    body {
      background-color: #0f111a;
      color: #00ffcc;
      font-family: 'Fira Code', monospace;
      margin: 0;
      padding: 40px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h2 {
      color: #00ffff;
      font-size: 2.5rem;
      text-shadow: 0 0 10px #00ffff;
      margin-bottom: 30px;
    }

    .experience-container {
      width: 90%;
      max-width: 1000px;
      background-color: #1a1d29;
      border: 2px solid #00ffcc;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 20px #00ffcc66;
    }

    .experience-block {
      border-left: 4px solid #00ffcc;
      padding-left: 20px;
      margin-bottom: 30px;
      position: relative;
      animation: fadeIn 0.6s ease-in-out;
    }

    .experience-block::before {
      content: ">_";
      color: #00ffff;
      position: absolute;
      left: -30px;
      top: 0;
      font-size: 1.2rem;
    }

    .experience-date {
      color: #ffea00;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .experience-title {
      color: #00ffff;
      font-size: 1.3rem;
    }

    .experience-location {
      color: #ff99cc;
      font-style: italic;
      margin-bottom: 10px;
    }

    .experience-description {
      color: #ffffff;
      white-space: pre-line;
    }

    .experience-button {
      display: inline-block;
      margin-top: 10px;
      padding: 6px 12px;
      background-color: transparent;
      color: #00ffcc;
      border: 1px solid #00ffcc;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s, color 0.3s;
    }

    .experience-button:hover {
      background-color: #00ffcc;
      color: #0f111a;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

<?php include('navbar.php'); ?>

<h2 style="margin-top:100px">Expériences</h2>
<div class="experience-container">

    <div class="experience-block">
        <div class="experience-date">2025</div>
        <div class="experience-title">Employé commercial</div>
        <div class="experience-location">Intermarché, Brassac-les-Mines</div>
        <div class="experience-description">
            <ul>
                <li> Garantir la bonne présentation et la qualité des produits en rayon</li>
                <li> Mise en rayon en utilisant d'abord les stocks puis la livraison</li>
                <li> Nettoyage de la zone</li>
                <li> Nettoyage des étagères</li>
                <li> Vérification des étiquettes de prix</li>
                <li> Mise en rayon des sacs pour fruit et légumes</li>
            </ul>
        </div>
    </div>

    <div class="experience-block">
        <div class="experience-date">2025</div>
        <div class="experience-title">Immersion CIP</div>
        <div class="experience-location">Association API</div>
        <div class="experience-description">
            
            <li>Découverte du métier de conseiller en insertion professionnelle :
                <ul>
                    <li>Assister à plusieurs entretiens -> Comprendre la posture professionnelle à adopter ainsi que les méthodes d'accompagnements</li>
                    <li>Suivi cloture accompagnement -> Mesurer l'évolution d'un parcours et l'importance du suivi dans la réussite de l'insertion</li>
                    <li>Présent lors des réunions -> Illustre le travail en réseau et la coordination nécessaire entre les acteurs de l'insertion pour offrir un accompagnement global et cohérent </li>
                </ul>
            </li>   
        </div>
    </div>

  <div class="experience-block">
    <div class="experience-date">2024 - 2025</div>
    <div class="experience-title">Service Civique - Accueil et numérique</div>
    <div class="experience-location">France Travail, Issoire</div>
    <div class="experience-description">
        <ul>
            <li>Accueil physique des usagers, orientation et accompagnement dans leurs démarches.</li>
            <li>Gestion des rendez-vous :
                <ul>
                    <li>Vérification présence rendez-vous</li>
                    <li>Prise de rendez-vous avec leur Conseiller</li>
                    <li>Décalage rendez-vous</li>
                    <li>Annulation rendez-vous</li>
                    <li>Justification absence rendez-vous</li>
                </ul>
            </li>    
            <li>Assistance à l’utilisation des outils numériques de France Travail :
                <ul>
                    <li>Aide à l’actualisation mensuelle et aux demandes d’allocations</li>
                    <li>Accompagnement à l’inscription et à la création/gestion de l’espace personnel</li>
                    <li>Mise à jour du dossier (ajout de documents, modification d’informations)</li>
                </ul>
            </li>
            <li>Scan et impression de documents pour les demandeurs d’emploi</li>
            <li>Maintenance de 1er niveau : réapprovisionnement des consommables des imprimantes</li>
            <li>Ouverture et fermeture de l’agence selon les consignes en vigueur</li>
        </ul>
    </div>
  </div>

  <div class="experience-block">
    <div class="experience-date">2024</div>
    <div class="experience-title">Immersion CIP</div>
    <div class="experience-location">France Travail</div>
    <div class="experience-description">
            <li>Découverte du métier de conseiller en insertion professionnelle :
                <ul>
                    <li>Assister à plusieurs entretiens -> découvrir le déroulement de ces échanges, d’observer l’écoute, l’analyse de la situation et la co-construction d’un parcours d’accompagnement adapté</li>
                    <li>Observer les personnes à l'acueil -> Comprendre le rôle et leur tâches </li>
                </ul>
            </li>   
    </div>
  </div>

  <div class="experience-block">
    <div class="experience-date">2024</div>
    <div class="experience-title">Mini chantier</div>
    <div class="experience-location">Issoire</div>
    <div class="experience-description">
                    <li>Rénovation des gradins du Gymnase les prés à Issoire:
                <ul>
                    <li>Nettoyage de la surface</li>
                    <li>Protection des surfaces</li>
                    <li>Poncage</li>
                    <li>Peinture des différentes zones (gradins, escaliers)</li>
                    <li>Nettoyage de la zone et du materiel</li>
                </ul>
            </li>
    </div>
    <a href="stage/minichantier.php" class="experience-button">Voir le rapport</a>
  </div>

  <div class="experience-block">
    <div class="experience-date">2024</div>
    <div class="experience-title">Stage administrateur systèmes & réseaux (6 semaines)</div>
    <div class="experience-location">Laboratoire, Clermont</div>
    <div class="experience-description">
        <li>Amélioration de la Qualité de Service (QoS) : 
            <ul>
                <li>Recherche sur la Qualité de Service (concept, enjeux, pratiques) : </li>
                    <li class="decallage" style="margin-left:30px">Étude approfondie du concept de Qualité de Service dans le domaine des systèmes et réseaux.</li>
                    <li class="decallage" style="margin-left:30px">Analyse des enjeux liés à la QoS : performance, disponibilité, sécurité, et satisfaction utilisateur.</li>
                    <li class="decallage" style="margin-left:30px">Identification des bonnes pratiques pour améliorer la qualité des services IT.</li>
                <li>Sondage de satisfaction et analyse : </li>
                    <li class="decallage" style="margin-left:30px">Élaboration et diffusion d’un questionnaire de satisfaction auprès des utilisateurs internes.</li>
                    <li class="decallage" style="margin-left:30px">Collecte et traitement des réponses via un tableau de bord (Excel).</li>
                    <li class="decallage" style="margin-left:30px">Réalisation d’une synthèse claire et argumentée, mettant en avant les axes d’amélioration identifiés.</li>
                <li>Recherche outil : </li>
                    <li class="decallage" style="margin-left:30px">Étude comparative de plusieurs solutions pour la gestion documentaire et le suivi des interventions/modifications (ex. : Request Tracker, GLPI, OCS Inventory, elog, Jira, Etop.).</li>
                    <li class="decallage" style="margin-left:30px">Critères de sélection : Installation/Configuration, interface utilisateur, avantages/inconvénients, prix, avis, Fonctionnalités, Type d'entreprise</li>
                <li>Mise en place de l'outil elog : </li>
                    <li class="decallage" style="margin-left:30px">Installation et configuration de l’outil retenu (ex. : création de comptes, structuration de l’arborescence).</li>
                    <li class="decallage" style="margin-left:30px">Rédaction de procédures de prise en main pour les équipes internes..</li>
                    <li class="decallage" style="margin-left:30px">Premiers tests et intégration de données réelles (fiches incidents, documentations, suivis de tickets).</li>
            </ul>
        </li>
    </div>
        <a href="stage/stage2.php" class="experience-button">Voir le rapport</a>
  </div>

  <div class="experience-block">
    <div class="experience-date">2023</div>
    <div class="experience-title">Stage administrateur systèmes & réseaux (5 semaines)</div>
    <div class="experience-location">Laboratoire, Clermont</div>
    <div class="experience-description">
                <li> : Découvrir et mettre en place des outils de supervision réseau. / Approfondir les connaissances en protocoles réseau et en gestion d’infrastructure.
            <ul>
                <li>Recherche sur l'outil de supervision Cacti : </li>
                    <li class="decallage" style="margin-left:30px">Étude des fonctionnalités principales de Cacti..</li>
                    <li class="decallage" style="margin-left:30px">Identification des prérequis techniques (serveur web, base de données, SNMP, etc.)..</li>
                    <li class="decallage" style="margin-left:30px">Analyse des besoins en supervision dans le contexte de l’entreprise.</li>
                <li>Installation et configuration de Cacti : </li>
                    <li class="decallage" style="margin-left:30px">Installation des dépendances nécessaires (Apache/Nginx, MySQL/MariaDB, PHP).</li>
                    <li class="decallage" style="margin-left:30px">Téléchargement et déploiement de Cacti sur un serveur local..</li>
                    <li class="decallage" style="margin-left:30px">Configuration de la base de données et des utilisateurs.</li>
                    <li class="decallage" style="margin-left:30px">Intégration d’équipements réseau via SNMP pour la collecte des données.</li>
                <li>Recherche outil : </li>
                    <li class="decallage" style="margin-left:30px">Étude comparative de plusieurs solutions pour la gestion documentaire et le suivi des interventions/modifications (ex. : Request Tracker, GLPI, OCS Inventory, elog, Jira, Etop.).</li>
                    <li class="decallage" style="margin-left:30px">Critères de sélection : Installation/Configuration, interface utilisateur, avantages/inconvénients, prix, avis, Fonctionnalités, Type d'entreprise</li>
                <li>Mise en place de l'outil Cacto : </li>
                    <li class="decallage" style="margin-left:30px">Installation et configuration de l’outil retenu (ex. : création de comptes, structuration de l’arborescence).</li>
                    <li class="decallage" style="margin-left:30px">Rédaction de procédures de prise en main pour les équipes internes..</li>
                    <li class="decallage" style="margin-left:30px">Premiers tests et intégration de données réelles.</li>
                <li>Recherche sur les protocoles : </li>
                    <li class="decallage" style="margin-left:30px">SNMP (Simple Network Management Protocol)</li>
                    <li class="decallage" style="margin-left:30px">Spanning Tree</li>
                    <li class="decallage" style="margin-left:30px">solutions de sauvegarde réseau </li>
            </ul>
    </div>
        <a href="stage/stage1.php" class="experience-button">Voir le rapport</a>
  </div>

  <div class="experience-block">
    <div class="experience-date">2018 - 2021</div>
    <div class="experience-title">Stages en commerce</div>
    <div class="experience-location">Gifi, Bazarland, Intermarché</div>
    <div class="experience-description">
        <ul>
            <li> Mise en rayon</li>
            <li> Nettoyage de la zone</li>
            <li> Nettoyage de la réserve</li>
            <li> Vérification des étiquettes de prix</li>
            <li> Deneigement</li>
            <li> Tête de gondole du au fête</li>
        </ul>
    </div>
  </div>

  <div class="experience-block">
    <div class="experience-date">2017 - 2018</div>
    <div class="experience-title">Stage en accueil</div>
    <div class="experience-location">Mairie</div>
    <div class="experience-description">
        <ul>
            <li> Acceuil des visiteurs</li>
            <li> Gestion des appels téléphoniques</li>
            <li> Gestion des lots téléthons</li>
            <li> Scan documents</li>
            <li> Classement et envoi de courriers</li>
        </ul>
    </div>
  </div>

</div>

<?php include('footer.php'); ?>

</body>
</html>
