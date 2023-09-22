<?php
include(APPPATH . "views/include/header.php")
?>
<style>
    .custom-img {
        max-width: 304;
        height: 400px;
    }
</style>

<div class="justify-content-center">
    <h5>Je recherche un
        <select name="list_search" id="list_search" required>
            <option value="chat">Chat</option>
            <option value="chien">Chien</option>
        </select>
        Proche de
        <select name="list_ville" id="list_ville" required>
            <option value="paris">Paris</option>
            <option value="reims">Reims</option>
        </select>
        Maximun à
        <select name="list_km" id="list_km" required>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="150">150</option>
            <option value="200">200</option>
        </select>
        Km
    </h5>
</div>
</head>

<a class="btn btn-outline-dark m-1" href="<?php
                                            echo base_url("Adopt/adoption") ?>">Rencontrer cet animal
</a>
<div class="container">
    <div class="row">
        <?php
        foreach ($chat_annonce as $chat_annonce) { ?>
            <div class="col-3  card">
                <a href="<?= base_url("Annonce/fiches_chats/" . $chat_annonce['nom_animal'] . '/') . $chat_annonce['id'] ?>">
                    <img class="card-img-top custom-img" src="/adopt-kitty/uploads/annonce/<?= $chat_annonce['image_chat'] ?>" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h5 class=" card-title"><?=
                                            $chat_annonce['nom_animal']
                                            ?></h5>
                    <p class="text-capitalize card-text"><?=
                                                            $chat_annonce['sexe_animal'] . ' - ' . $chat_annonce['race_animal']
                                                            ?></p>
                </div>
            </div>
        <?php  } ?>
    </div>
</div>






<?php
include(APPPATH . "views/include/footer.php")
?>