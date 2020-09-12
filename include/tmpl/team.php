<!-- TODO : CSS -->
<section>
    <div class="container">
        <div class="row align-items-end justify-content-between">
            <div class="col-10">
                <div class="section-tittle">
                    <span>Nos Membres</span>
                    <h2>Les membres à votre service</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!--? Team Ara Start -->
<div>
    <div class="container">
        <div class="row">
            <!-- TODO : Start Boucle here-->
            <?php
            include ('./lib/update_members.php');
            include ('./lib/request/select_role.php');
            foreach ($ar_adherent as $key => $tb_adherent) {?>
            <div class="col-3 vignette">
                <div class="mb-30">
                    <div class="team-img">
                        <img src="https://via.placeholder.com/150" alt="<?php echo $tb_adherent['Nom'];?>">
                        <div class="info">
                            <span><?php
                                foreach ($ar_role as $key => $tb_role){
                                    if ($tb_role['IdRole'] == $tb_adherent['IdRole']){
                                        echo $tb_role['DesignRole'];
                                    }
                                }
                            ?></span>
                            <h3><a href="<?php ?>"><?php echo $tb_adherent['Nom'];?></a></h3>
                            <h3><?php echo $tb_adherent['Prenom'];?></h3>

                            <!-- Blog Social -->
                            <div class="social-links">

                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-globe"></i></a>

                            </div>
                            <p>Info : </p>
                            <?php if ($tb_adherent['IdAdherent'] == $idConnected ) { ?>
                                <div class='tags'>
                                    <button class='badge' data-id='<?php echo $tb_adherent['IdAdherent'];?>'>Modifier mon profil</button>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- TODO : Definir nombre d'article par page -->
        <div class="site-pagination">
            <a href="#" class="active">01.</a>
            <a href="#">02.</a>
            <a href="#">03</a>
        </div>
    </div>
</div>
