<div class="step">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="type_logement">Quel type de logement avez-vous ?</label>
            <select name="type_logement" id="type_logement" required>
                <option value="selectionnez">Sélectionnez</option>
                <option value="maison">Maison</option>
                <option value="appartement">Appartement</option>
            </select>
            <h6><?= form_error('type_logement'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="exterieur_user">Avez-vous un extérieur dans votre logement ?</label>
            <select name="exterieur_user" id="exterieur_user">
                <option value="selectionnez">Sélectionnez</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
            <h6><?= form_error('exterieur_user'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="type_exterieur">Sélectionnez le type d'extérieur de votre habitation :</label>
            <select name="type_exterieur" id="type_exterieur" required>
                <option value="selectionnez">Sélectionnez</option>
                <option value="terrasse">Terrasse</option>
                <option value="jardin">Jardin</option>
                <option value="balcon" class="balcon-option">Balcon</option>
                <option value="aucun">Aucun</option>
            </select>
            <h6><?= form_error('type_exterieur'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="situation_foyer">Quelle est la situation de votre foyer ?</label>
            <select name="situation_foyer" id="situation_foyer" required>
                <option value="selectionnez">Sélectionnez</option>
                <option value="seul">Seul</option>
                <option value="couple">En couple</option>
            </select>
            <h6><?= form_error('situation_foyer'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="nbr_enfants">Combien avez-vous d'enfants ?</label>
            <input type="number" name="nbr_enfants" id="nbr_enfants">
            <h6><?= form_error('nbr_enfants'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="age_enfants">Quel âge ont vos enfants ?</label>
            <input type="number" name="age_enfants" id="age_enfants">
            <h6><?= form_error('age_enfants'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="activite_famille">Avez-vous un emploi ?</label>
            <select name="activite_famille" id="activite_famille" required>
                <option value="selectionnez">Sélectionnez</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
            <h6><?= form_error('activite_famille'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="temps_activite">Combien de temps l'animal restera-t-il seul ?</label>
            <input class="form-control" type="number" name="temps_activite" id="temps_activite" required>
            <h6><?= form_error('temps_activite'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="raison_famille">Quelles sont les raisons qui vous poussent à devenir famille d'accueil ?</label>
            <textarea name="raison_famille" id="raison_famille" placeholder="Pourquoi devenir famille d'accueil..." required></textarea>
            <h6><?= form_error('raison_famille'); ?></h6>
        </div>
    </div>
    <div class="d-flex btn-row">
        <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Previous</button>
        <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
    </div>
</div>



<div class="step">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="animaux_famille">Avez vous déjà eu des animaux dans votre foyer ? :</label>
            <select name="animaux_famille" id="animaux_famille" required>
                <option value="selectionnez">Sélectionnez</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
            <h6><?= form_error('animaux_famille'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
        <label for="animaux_famille">Avez vous déjà eu des animaux dans votre foyer ? :</label>
            <select name="animaux_famille" id="animaux_famille" required>
                <option value="selectionnez">Sélectionnez</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
            <h6><?= form_error('animaux_famille'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="nbr_animaux">Combien avez-vous d'animaux dans votre foyer ?</label>
            <input class="form-control" type="number" name="nbr_animaux" id="nbr_animaux" required>
            <h6><?= form_error('nbr_animaux'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="age_animaux_vie">Quel âge ont vos animaux ?</label>
            <select name="age_animaux_vie" id="age_animaux_vie" required>
                <option value="">Sélectionnez</option>
                <option value="junior">Junior</option>
                <option value="adulte">Adulte</option>
                <option value="senior">Sénior</option>
            </select>
            <h6><?php echo form_error('age_animaux_vie'); ?></h6>
        </div>
        <div class="col-md-6 mb-3">
            <label for="detail_animaux_vie">Pourriez-vous nous donner des détails sur vos animaux ?</label>
            <textarea name="detail_animaux_vie" id="detail_animaux_vie" placeholder="races, activités, maladies..." required></textarea>
            <h6><?php echo form_error('detail_animaux_vie'); ?></h6> 
        </div>
        <div class="col-md-6 mb-3">
            <label for="disponible_veto">Seriez-vous capable de prendre en charge les soins vétérinaires de l'animal ?</label>
            <select name="disponible_veto" id="disponible_veto" required>
                <option value="selectionnez">Sélectionnez</option>
                <option value="oui">Oui</option>
                <option value="non">Non</option>
            </select>
            <h6><?= form_error('disponible_veto'); ?></h6>
        </div>
    </div>
    <div class="step">
        <h3>Terminé</h3>
    </div>
    <div class="d-flex btn-row">
        <button class="btn btn-primary fw-bold m-1" id="prevBtn" onclick="nextPrev(-1)" type="button">Previous</button>
        <button class="btn btn-primary fw-bold m-1" id="nextBtn" onclick="nextPrev(1)" type="button">Next</button>
    </div>
</div>