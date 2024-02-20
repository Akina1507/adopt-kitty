<h1>Informations du Chat</h1>

<?php foreach ($chat_fiche as $chat_annonce) { ?>
    <div class="col-3  card">
        <a href="<?= base_url("Annonce/fiches_chats/" . $chat_annonce['nom_animal'] . '/') . $chat_annonce['id'] ?>">
            <img class="card-img-top custom-img" src="<?= base_url('uploads/annonce/'. $chat_annonce['image_chat']) ?>" alt="Card image cap">
        </a>
        <div class="card-body">
            <h5 class=" card-title"><?= $chat_annonce['nom_animal'] ?></h5>
            <p class="text-capitalize card-text"><?= $chat_annonce['sexe_animal'] . ' - ' . $chat_annonce['race_animal'] ?></p>
        </div>
    </div>
<?php  } ?>
    <div>
        <a class="btn btn-outline-dark m-1" href="<?php echo base_url("Adopt/adoption") ?>">Rencontrer cet animal</a>
    </div>