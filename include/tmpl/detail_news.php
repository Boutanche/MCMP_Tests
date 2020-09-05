<?php include './lib/upload.php'?>
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
                    </div>
                    <div class="blog_details">
                        <h2 id="newsTitre" > </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <!-- TODO : Modifier la table nouvelle pour garder l'id de l'auteur de la news -->
                            <li><a href="#"><i class="fa fa-user"></i> Organisateur : </a></li>
                            <!-- TODO : un conteur de ligne sur la requête images pour connaitre le nombre de photos liées -->
                            <li><a href="#"><i class="fa fa-comments"></i> <span>03</span> Photos de l'événement</a></li>
                            <li> <a href="#"><i class="fa fa-calendar"> <span id="newsDPubli"></span></i> </a></li>
                        </ul>
                        <div class="quote-wrapper">
                            <div id="newsTroin" class="quotes">
                            </div>
                        </div>
                        <p id="newsTetex" class="excert">
                        </p>
                    </div>
                </div>
                <div class="navigation-top">
                    <!-- TODO : Like sur l'article : -->
                    <!--
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                            <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p>
                        </div>
                    </div>
                    -->
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i> Partager sur FaceBook</a> </li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Partager sur Twitter</a> </li>
                        </ul>
                </div>
                    <!-- TODO : Récupérer les news avant et après : ... pas le temps -->
                    <!--
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="#">
                                        <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="#">
                                        <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/next.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                <!-- TODO : Est-ce que quand on est pas connecté on a accés aux photos des membres ? -->
                <div class="image-area">
                    <h4>Photos des membres : </h4>
                    <div class="comment-list">
                        <!-- TODO : Une boucle pour chaque tof de cette news : -->
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/img/comment/comment_1.png" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Titre de la photo
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="row">
                                            <div class="col-6 align-items-center">
                                                <h6>
                                                    <a href="#">Auteur de la Photo</a>
                                                </h6>
                                            </div>
                                            <div class="col-6 align-items-center">
                                                <p>Date de publication </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vérification pour autorisation de poster une Photo sur la news : -->
            <?php if ($user_level > 0) {?>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="comment-form">
                            <h4>Poster une photo pour cette activité : </h4>
                            <!-- START : Formulaire : Poster une photo sous un article : -->
                            <form class="form-contact comment_form" action="./index.php?page=info" id="Post_Img_Form" enctype="multipart/form-data" method="post">
                                <input type="hidden" name="post_img" value="add_img"/>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="form-box mb-30">
                                                <input type="text" name="name_img" placeholder="Nom du Fichier">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div  class="form-box mb-30">
                                                <label>Téléverser une image : </label>
                                                <input type="file" name="news_img" id="this_img" placeholder="Votre image"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Poster une Photo</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END : Formulaire : Poster une Photo sous un article -->
                        </div>
                    </aside>
                </div>
            </div>
            <?php } ?>
        </div>
        <form action="./index.php?page=info" method="post">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <button id="Fermer" class="btn btn-danger" type="">Fermer</button>
                </div>
            </div>
        </form>
    </div>
</section>

