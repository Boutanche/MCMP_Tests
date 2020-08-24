<?php
session_start();
include ('./config/config.php');
include ('./lib/get_page.php');
include ('./lib/post_log.php');
include('./include/tmpl/head.php');
include ('./include/layout/hearder.php');
include('./include/page/'.$page.'.php');
include('./include/tmpl/footer.php');
