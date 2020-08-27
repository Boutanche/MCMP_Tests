<!-- Blog Section start -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                include('./lib/post_news.php');
                foreach ($ar_News as $key => $tb_news) {
                    if ($tb_news['Diffusion_Level'] == 1) {?>
                            <div class="blog-post">
                            <img src="./img/img/galerie/gallery1.png" alt="">
                            <div class="blog-date"><?php echo $tb_news['DPubli'] ?></div>
                            <h2 class="blog-title"><?php echo $tb_news['Titre'] ?></h2>
                            <div class="blog-metas">
                                <div class="blog-meta">Organisateur </div>
                        <?php if($user_level == 2){ ?>
                                <div class='sb-widget'>
                                    <div class='tags'>

                                         <!-- TODO : Ajouter l'id :   -->
                                        <button class='link' data-id='<?php echo $tb_news['IdNouvelle'];?>'>Modifier</button>
                                        
                                    </div>
                                </div>
                        <?php };?>
                            </div>
                            <p><?php echo $tb_news['Intro'] ?></p>
                            <a href="#" class="readmore">Read More <img src="img/arrow.png" alt=""></a>
                        </div> 
                    <?php }
                }
                ?>
<!--
                <div class="blog-post">
                    <img src="img/news/1.jpg" alt="">
                    <div class="blog-date">Apr 08, 2019</div>
                    <h2 class="blog-title">How to apply for a good loan</h2>
                    <div class="blog-metas">
                        <div class="blog-meta">By Mark Smith </div>
                        <div class="blog-meta">In Loans</div>
                        <div class="blog-meta"> 3 comments</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti.</p>
                    <a href="#" class="readmore">Read More <img src="img/arrow.png" alt=""></a>
                </div>




                <div class="blog-post">
                    <img src="img/news/2.jpg" alt="">
                    <div class="blog-date">Apr 08, 2019</div>
                    <h2 class="blog-title">Tips to improve your credit rate</h2>
                    <div class="blog-metas">
                        <div class="blog-meta">By Mark Smith </div>
                        <div class="blog-meta">In Loans</div>
                        <div class="blog-meta"> 3 comments</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti.</p>
                    <a href="#" class="readmore">Read More <img src="img/arrow.png" alt=""></a>
                </div>
                <div class="blog-post">
                    <img src="img/news/3.jpg" alt="">
                    <div class="blog-date">Apr 08, 2019</div>
                    <h2 class="blog-title">10 ideas to spend your holliday </h2>
                    <div class="blog-metas">
                        <div class="blog-meta">By Mark Smith </div>
                        <div class="blog-meta">In Loans</div>
                        <div class="blog-meta"> 3 comments</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti.</p>
                    <a href="#" class="readmore">Read More <img src="img/arrow.png" alt=""></a>
                </div>
                -->

                <div class="site-pagination">
                    <a href="#" class="active">01.</a>
                    <a href="#">02.</a>
                    <a href="#">03</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sidebar">
                <div class="sb-widget">
                    <form class="search-form">
                        <input type="text" placeholder="">
                        <button><img src="img/search-icon.png" alt=""></button>
                    </form>
                </div>
                <div class="sb-widget">
                    <h2 class="sb-title">Categories</h2>
                    <ul>
                        <li><a href="#">Loans</a></li>
                        <li><a href="#">Credit Cards</a></li>
                        <li><a href="#">Quick Loans</a></li>
                        <li><a href="#">Uncategorized</a></li>
                    </ul>
                </div>
                <div class="sb-widget">
                    <h2 class="sb-title">Categories</h2>
                    <ul>
                        <li><a href="#">April 2019</a></li>
                        <li><a href="#">March 2019</a></li>
                        <li><a href="#">February 2019</a></li>
                        <li><a href="#">January 2019</a></li>
                        <li><a href="#">December 2018</a></li>
                    </ul>
                </div>
                <div class="sb-widget">
                    <h2 class="sb-title">Categories</h2>
                    <div class="tags">
                        <a href="#">tips & triks</a>
                        <a href="#">quick loans</a>
                        <a href="#">tips</a>
                        <a href="#">car loan</a>
                        <a href="#">wedding loan</a>
                        <a href="#">holliday loans</a>
                        <a href="#">credit & loans</a>
                    </div>
                </div>
                <div class="sb-widget">
                    <a href="#" class="add">
                        <img src="img/add.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    <div id='modal_AddNews'>
    <div  class="container" >
        <form  class="contact-form" action="./index.php?page=info" method="post">
            <input type="hidden" name="formulaire" value="add_news"/>
            <h2 id='#modal_AddNews' class="TitleForm" >Formulaire modifier une nouvelle : </h2>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="form-box user-icon mb-30">
                        <label>Entrer un titre de la nouvelle : </label>
                        <input type="text" id="title" name="title" value="" placeholder="Un titre" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="form-box user-icon mb-30">
                        <label>Une courte introduction : </label>
                        <input type="text" id="intro" name="intro" value="" placeholder="Une introduction..." />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div  class="form-box mb-30">
                        <label>Texte de la nouvelle : </label>
                        <textarea type="text" id="description" name="description" value="" placeholder="Votre texte" > </textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <button id="Fermer" class="btn btn-danger" type="">Fermer</button>
                </div>
                <div class="col-lg-4 col-md-4">
                    <button id="modify_News" class="btn btn-success" type="submit">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    </div>