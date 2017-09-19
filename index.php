<?php
session_start();
// Configuration options
define('MOT_DE_PASSE', 'kangourou');

// Controller
include './controller/router.php';

// Views
include './views/header.html';
include './views/menu.php';
if (isset($template)) {
    include $template;
}
include './views/footer.html';
