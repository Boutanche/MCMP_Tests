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