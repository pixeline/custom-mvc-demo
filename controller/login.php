<?php



if (isset($_POST) && !empty($_POST['mdp'])) {
    if ($_POST['mdp'] === MOT_DE_PASSE) {
        $_SESSION['login'] = 'ok';
        header('Location: ./about.html');
        exit;
    } else {
        $_SESSION['login'] = 'ko';
        $message = 'Mot de passe incorrect';
    }
}
