<!-- TODO : CSS -->

<section>
    <div class="container">
        <div class="row align-items-end justify-content-between">
            <div class="col-lg-6 col-md-9 col-sm-9">
                <div class="section-tittle">
                    <span>Nos Membres</span>
                    <h2>Les plus excpérimentés à votre service</h2>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3">
                <a href="#" class="btn f-right">Services</a>
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
            foreach ($ar_adherent as $key => $tb_adherent) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="mb-30">
                        <div class="team-img">
                            <img src="./img/galerie/team1.png" alt="<?php echo $tb_adherent['Nom'];?>">
                            <div>
                                <span>Titre Fonction</span>
                                <h3><a href="#"><?php echo $tb_adherent['Nom'];?></a></h3>
                                <h3><?php echo $tb_adherent['Prenom'];?></h3>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-globe"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>
