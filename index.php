<?php
session_start();

//Cookie : Session : Pour Log.
//ENTRER SUR LE SITE DU MCMP
//CONFIGURATION :
include ('./config/config.php');
include ('./lib/get/index.php');
//include ('./lib/function.php');
//include ('./lib/get_page.php');
//include ('./lib/post_log.php');
include('./include/layout/head.php');
include('./include/tmpl/hearder.php');
include('./include/page/mcmp/'.$page.'.php');
include('./include/layout/footer.php');
