<ul id = "navigation" class="main-menu">
    <?php
    include ('./lib/session_destroy.php');
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
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./index.php?deconnexion=1">Deconnexion <span class="flaticon-007-house"></span></a>
            </div>
        <?php } else if ($user_level < 1){ ?>
            <button id="myBtn" href="#" class="hr-btn hr-btn"><i class="flaticon-002-woman"></i>Se Connecter</button>
        <?php }?>

    </li>
</ul>

<div id="login_mod">
    <div id = "myModal" class="modal-content">
        <span class="close">&times;</span>
        <form class="contact-form" action="./index.php" method="post" id="modal_log">
            <input type="hidden" name="formulaire" value="log"/>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div  class="form-box mb-30">
                        <label>Pseudo : </label>
                        <input type="text" id="login" name="login" value="" placeholder="Pseudo"/>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div  class="form-box mb-30">
                        <label>Mot de Passe : </label>
                        <input type="text" id="password" name="password" value="" placeholder="Password"/>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div  class="form-box mb-30">
                        <button class="btn-modal">Connexion</button>
                    </div>
                    <p><?php echo $message_log;?></p>
                </div>
            </div>
        </form>
    </div>
</div>
