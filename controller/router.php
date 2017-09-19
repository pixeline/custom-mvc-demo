<?php

if (isset($_GET['page']) && !empty($_GET['page'])) {
    switch ($_GET['page']) {

        case 'conclusion':
            $template = './views/conclusion.html';
        break;

        case 'makingof':
            $template =  './views/makingof.html';
        break;

        case 'interview':
            $template =  './views/interview.html';
        break;

        case 'presentation-webdev':
            $template =  './views/presentation-webdev.html';
        break;


        case 'login':

          // Vérifier si on reçoit un login + mdp
          include './controller/login.php';
          // afficher le formulaire
          $template =  './views/login.html';

        break;

        default:
        include './views/about.html';
        break;

    }
}
