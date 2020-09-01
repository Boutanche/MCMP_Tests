<div class="col-lg-8" id="add_member">
    <form class="contact-form" action="./index.php?page=admin_add_members" method="post">
        <input type="hidden" name="formulaire" value="add_member"/>
        <p class="TitleForm">Formulaire d'inscription des membres du MCMP</p>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="form-box user-icon mb-30">
                    <input type="text" id="name" name="nom" value="" placeholder="Nom" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div  class="form-box mb-30">
                    <input type="text" id="firstname" name="prenom" value="" placeholder="Prénom" />
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div  class="form-box mb-30">
                    <input type="text" id="login" name="login" value="" placeholder="Pseudo" />
                </div>
            </div>
            <div class="col-lg-4">
                <div  class="form-box mb-30">
                    <input type="text" id="password" name="user_password" value="" placeholder="Password"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div  class="form-box mb-30">
                    <input type="text" id="confirm" name="confirmpassword" value="" placeholder="Confirm Password"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <input type="date" id="birth" name="dnaiss" value="" placeholder="1980-01-22"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <input type="text" id="adress" name="adresse1" value="" placeholder="Adresse"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <input type="text" id="zip" name="cdpost" value="" placeholder="Cp"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <input type="text" id="city" name="ville" value="" placeholder="Ville"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <input type="email" id="email" name="email" value="" placeholder="Test.test@test.com"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <input type="text" id="mobile" name="tel" value="" required placeholder="00.00.00.00.00"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <label>Date d'adhésion : </label>
                    <input type="date" id="dadhe" name="dadhesion" value="" placeholder="1980-01-22"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <label>Téléverser une image : </label>
                    <input type="file" id="fichierImage" name="avatar"/>
                </div>
            </div>
        </div>
        <div class="col">
            <div  class="form-box">
                <div class="row">
                    <div class="col">
                        <input type="radio" id="organisation" name="organisateur" value="1" placeholder="" />
                    </div>
                    <div class="col">
                        <label>Organisateur</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="radio" id="organisation" name="organisateur" value="0" placeholder="" checked="checked"/>
                    </div>
                    <div class="col">
                        <label>Membre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Vous acceptez que votre image soit utilisée sur le site internet ?</label>
                    </div>
                    <div class="col col_checkbox">
                        <input type="checkbox" id="droit_image" name="droit_image" value="on" checked />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="submit-info">
                <button class="site-btn" type="submit">Soumettre</button>
            </div>
        </div>
    </form>
    <?php echo $message_modal_admin ;?>
</div>
