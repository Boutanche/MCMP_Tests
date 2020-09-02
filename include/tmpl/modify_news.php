<form  class="contact-form" action="./index.php?page=info" method="post">
    <input type="hidden" name="formulaire" value="add_news"/>
    <fieldset>
        <legend>Formulaire Modification :</legend>
    <h2 id='#modal_AddNews' class="TitleForm" >Modifier la nouvelle numéro : <span id="newsId"></span></h2>
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="form-box user-icon mb-30">
                <label>Entrer un titre de la nouvelle : </label>
                <div id="newsTitle"> </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="form-box user-icon mb-30">
                <label>Une courte introduction : </label>
                <div id="newsIntro"> </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div  class="form-box mb-30">
                <label>Texte de la nouvelle : </label>
                <div id="newsTexte"> </div>
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
    </fieldset>
</form>