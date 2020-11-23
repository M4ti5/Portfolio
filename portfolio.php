<?php   include 'public/templates/hearder-portfolio.php';
        include 'public/templates/projet-portfolio.php';
?>
<header>
        <div>Mes Projets</div>
        <div class="description">L'entièreté des projets a été faite par mes connaissances personnelles ou apprises lors des projets.<br> Mon module de développement web vient seulement de commencer et mon niveau technique devrait continuer à s'améliorer.</div>
</header>
<div id="resume">

  <?php
    newProjectsCard("Data Bar",'matiscaffiaux.com/projets/Data_Bar/index.html','https://github.com/M4ti5/Data_bar','22 novembre ‎2020','Css',"Experimentation des animations CSS <br> (Compatibilité Mobile)");
    newProjectsCard("Portfolio",'matiscaffiaux.com/index.html','https://github.com/M4ti5/Portfolio','19 novembre ‎2020','Css - Php - Js',"Rassemblement de projets <br> (Compatibilité Mobile)");
    newProjectsCard("Toiec",'matiscaffiaux.com/projets/Toiec/index.php','https://github.com/M4ti5?tab=repositories','18 ‎octobre ‎2020','Php - Js - SQL',"Coup de main à un professeur pour automatiser la classification des notes.<br>Exploiter des données à partir d'un fichier Excel<br>(Projet en Cours)");
    newProjectsCard("Safti",'matiscaffiaux.com/projets/Safti/index.html','https://github.com/M4ti5?tab=repositories','29 Septembre 2020','Css',"Suite à une demande de création d'une page maquette pour un site immobilier");
    newProjectsCard("Songy-Kaorengo",'m4t15.pythonanywhere.com','https://github.com/M4ti5/Songy','17 Avril 2020','Django (MVC) - Js',"Projet d'école d'ingénieur pour des associations caritatives <br> Création d'un site web pour créer une identité numérique à l'association (gestion d'articles)");
    
  ?>

</div>

<?php require 'public/templates/footer-portfolio.php'?>


