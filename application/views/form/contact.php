<form>
<div class="col-md-6 mb-3">
    <label for="nom_user">Nom :</label>
    <input class="form-control" type="text" name="nom_user" id="nom_user" placeholder="Votre nom" required>
        <h6 class="invalid-from-error"><?= form_error('nom_user'); ?></h6>
</div>
<div class="col-md-6 mb-3">
    <label for="prenom_user">Prénom :</label>
    <input class="form-control" type="text" name="prenom_user" id="prenom_user" placeholder="Votre prénom" required>
        <h6 class="invalid-from-error"><?= form_error('prenom_user'); ?></h6>
</div>
<div class="col-md-6 mb-3">
    <label for="email_user">Email :</label>
    <input class="form-control" type="email" name="email_user" id="email_user" placeholder="votreadresse@email.com" required>
        <h6 class="invalid-from-error"><?= form_error('email_user'); ?></h6>
</div>
<div class="col-md-12 mb-3">
    <label for="message_contact">Votre message</label>
    <textarea class="form-control" name="message_contact" id="message_contact" placeholder="Votre message..." required></textarea>
        <h6 class="invalid-from-error"><?= form_error('message_contact'); ?></h6>
</div>
<div class="col-md-6 mb-3">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
    <label class="form-check-label" for="invalidCheck">Accepter les conditions générales</label>
</div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>