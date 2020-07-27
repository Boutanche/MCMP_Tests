<div class="col-lg-8" id="add_member">
    <form class="contact-form" action="./index.php?page=admin_add_activity" method="post">
        <input type="hidden" name="formulaire" value="add_type_activity"/>
        <p class="TitleForm">Formulaire d'inscription des types activités</p>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="form-box mb-30">
                    <p>Ajouter un type d'activité</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="form-box mb-30">
                    <input type="text" id="name" name="IntituleType" value="" placeholder="Type d'activité" />
                </div>
            </div>
            <div class="col-lg-12">
                <div class="submit-info">
                    <button class="site-btn" type="submit">Soumettre</button>
                </div>
            </div>
        </div>
    </form>
    <form class="contact-form" action="./index.php?page=admin_add_activity" method="post">
        <input type="hidden" name="formulaire" value="add_activity"/>
        <p class="TitleForm">Formulaire d'ajout des activités</p>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="form-box mb-30">
                    <p>Ajouter un intitulé d'activité</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="form-box mb-30">
                    <input type="text" id="intitule" name="IntituleActivite" value="" placeholder="Intitulé de l'activité" />
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <label>Date début d'activité</label>
                    <input type="date" id="date_debut" name="DDebut" value="" placeholder="2020-09-28"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <label>Date fin d'activité</label>
                    <input type="date" id="date_fin" name="DFin" value="" placeholder="2020-09-29"/>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="form-box mb-30">
                    <label>Description</label>
                    <input type="text" id="description" name="Description" value="" placeholder="Description de l'activité"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <label>Tarif adhérent</label>
                    <input type="text" id="tarif_adh" name="TarifAdherent" value="" placeholder="10"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <label>Tarif invité</label>
                    <input type="text" id="tarif_inv" name="TarifInvite" value="" placeholder="5"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <label>Date limite d'inscription</label>
                    <input type="date" id="date_limite" name="DLimite" value="" placeholder="2020-08-28"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="form-box mb-30">
                    <label>Choix du type d'activité : </label>
                    <select name="IdType">
                        <?php
                        foreach ($ar_activity as $key => $tb_type) {
                            echo ('<option value="' . $tb_type['IdType'] . '">' . $tb_type['IntituleType'].'</option>');
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="submit-info">
                    <button class="site-btn" type="submit">Soumettre</button>
                </div>
            </div>
        </div>
    </form>
</div>
