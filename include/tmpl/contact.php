<!-- Contact Section start -->
<?php include './lib/mail.php';?>
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-text">
                    <h2>Nous contacter</h2>
                    <p>Si vous le souhaitez, votre permiére participation à nos sorties se fait au tarif invitié.</p>
                    <ul>
                        <li><i class="flaticon-032-placeholder"></i>Adresse MCMP</li>
                        <li><i class="flaticon-029-telephone-1"></i>Tel MCMP</li>
                        <li><i class="flaticon-025-arroba"></i>Mail MCMP</li>
                        <li><i class="flaticon-038-wall-clock"></i>Tous les jours : 06:00-22:00</li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- START : Formulaire SMTP -->
                <form class="contact-form" action="./index.php?page=services" method="post">
                    <input type="hidden" name="formulaire" value="form_contact">

                    <fieldset>
                        <legend> Formulaire de contact : </legend>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="user_name">Nom :</label>
                                <input type="text" placeholder="Votre Nom" name="user_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="user_mail">E-Mail</label>
                                <input type="email" placeholder="Votre E-mail" name="user_mail" required>
                            </div>
                            <div class="col-md-12">
                                <label for="user_object">Objet :</label>
                                <input type="text" placeholder="Objet de votre demande" name="user_object" required>
                                <label for="user_message">Message :</label>
                                <textarea placeholder="Votre message" required name="user_message"></textarea>
                                <button class="site-btn" type="submit">Envoyer un message</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- Il faut démontrer qu'on sait intégrer Open Street Map donc je retire Google Map -->
        <!--
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5730.17916582336!2d3.0732463526177143!3d44.10214349493454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b24b17ede661c3%3A0xf92248de51dd6835!2sAMIO%202iSA%20Sesame%20PEI!5e0!3m2!1sfr!2sfr!4v1595805853693!5m2!1sfr!2sfr" style="border:0" allowfullscreen></iframe>
        </div>
        -->
        <div class="map">
            <div id="map">
                <!-- Ici la map : -->
            </div>
        </div>
        <!-- Fichiers Javascript -->
        <!-- Je l'intégre ici le code JS : choix volontaire fait en conscience -->
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
        <script type="text/javascript">
            // On initialise la latitude et la longitude de Paris (centre de la carte)
            var lat = 44.103168;
            var lon = 3.076985;
            var macarte = null;
            // Fonction d'initialisation de la carte
            function initMap() {
                // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 15,
                    maxZoom: 200
                }).addTo(macarte);
                var marker = L.marker([44.103168, 3.076985]).addTo(macarte);
            }
            window.onload = function(){
                // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
                initMap();
            };
        </script>
        <!-- Fin du Script : OpenStreetMap -->
    </div>
</section>
<!-- Contact Section end -->