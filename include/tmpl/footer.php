        <!-- Footer Section -->
        <footer class="footer-section">
            <div class="container">
                <a href="index.html" class="footer-logo">
                    <img src="img/logo.png" alt="">
                </a>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <?php if ($user_level == 2){
                                echo ('<h2>Administration</h2>
                                <ul>
                                    <li><a href="./index.php?page=admin_add_members">Gestion des Membres</a></li>
                                    <li><a href="./index.php?page=admin_add_activity">Gestion des Activités</a></li>
                                    <li><a href="./index.php?page=admin_add_news">Gestion des Nouvelles</a></li>
                                    <li><a href="#">Home improvement loans</a></li>
                                    <li><a href="#"> Wedding loans</a></li>
                                    <li><a href="#">Innovative Finance ISA</a></li>
                                </ul>');
                            }?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <h2>About us</h2>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our story</a></li>
                                <li><a href="#">Meet the board</a></li>
                                <li><a href="#">Meet the leadership team</a></li>
                                <li><a href="#">Awards</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <h2>Legal</h2>
                            <ul>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Loans2go principles</a></li>
                                <li><a href="#">Website terms</a></li>
                                <li><a href="#">Cookie policy</a></li>
                                <li><a href="#">Conflicts policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <h2>Site Info</h2>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
                <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="flaticon-003-like" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
            </div>
        </footer>
        <!-- Footer Section end -->

        <!--====== Javascripts & Jquery ======-->
        <script src="./assets/js/jquery-3.2.1.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/jquery.slicknav.min.js"></script>
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/jquery-ui.min.js"></script>
        <script src="./vendor/Trumbowyg-master/dist/trumbowyg.min.js"></script>
        <!-- Mon code jQuery -->
        <script src="./assets/js/main.js?v=1.<?php echo time() ?>"></script>
    </body>
</html>
