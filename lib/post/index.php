<?php
if(!empty($_POST)) {
    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'add_member') {
            include './lib/post/mcmp_formMember.php';
        } elseif ($_POST['formulaire'] == 'login_mcmp') {
            include './lib/post/mcmp_login.php';
        }
    }
}
