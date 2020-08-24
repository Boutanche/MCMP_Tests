<ul id = "navigation" class="main-menu">
    <?php
    include('./lib/session_destroy.php');
    foreach ($ar_page as $key => $tb_page){
        if ($tb_page['key_file'] == $ar_page) {
            $active ='active';
        }
        else {$active ='';}
        if($tb_page['navBarMenu'] == 1){
            echo '<li><a  class="'.$active.'" href="./index.php?page='.$tb_page['key_file'].'">'.$tb_page['menu'].'</a></li>';
        }
    }
    ?>
    <li class="header-right">
        <?php if($user_level > 0) { ?>
            <a class="dropdown-item" href="./index.php?deconnexion=1">Deconnexion <span class="flaticon-007-house"></span></a>
        <?php } else if ($user_level < 1){ ?>
            <a id="myBtn" href="#" class="hr-btn hr-btn myBtn"><i class="flaticon-002-woman"></i>Se Connecter</a>
        <?php }?>
    </li>
</ul>

<div id="login_mod">
    <div class="col-lg-6 modal-content" id="myModal">
        <form class="hero-form" action="./index.php" method="post">
            <input type="hidden" name="formulaire" value="log"/>
            <p><span class="close">&times;</span></p>
            <input type="text" id="login" name="login" placeholder="Login">
            <input type="text" id="password" name="password" placeholder="Password">
            <p><?php echo $message_log;?></p>
            <button class="site-btn">Se connecter</button>
        </form>
    </div>
</div>
