<section id="newarticle" class="row" class="trumbowyg">
    <div class="container">
        <form class="contact-form" action="./index.php?page=admin_add_news" method="post">
            <input type="hidden" name="formulaire" value="add_news"/>
            <p class="TitleForm">Formulaire d'ajouter une nouvelle : </p>
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
                    <button id="" class="btn btn-primary" type="">Nothing</button>
                </div>
                <div class="col-lg-4 col-md-4">
                    <button id="addNews" class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </div>

            </div>
        </form>
    </div>
</section>







        <!--
        <div class="row">
            <div class="col-12">
                <label>Titre de la news : </label>
                <input type="text" name="title" placeholder="Ajouter un titre" value=""/>
            </div>
            <div class="col-12">
                <div id="summernote">
                    Effectuer un text WYSIWYG
                </div>
            </div>
            <div>
                    <button class="btn btn-primary" type="button">Envoyer</button>
            </div>
        </div>
    </div>
</section>
