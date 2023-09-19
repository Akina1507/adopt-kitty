<?php
include(APPPATH . "views/include/header.php")
?>


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
<div class="col justify-content-center">
    <a class="btn btn-outline-dark m-1" href="<?php
                                                echo base_url("Adopt/adoption") ?>">Rencontrer cet animal
    </a>
    <div class="image-container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-4">
                <div class="card-group"> <!-- Avoir que 4 images de chats par lignes -->
                    <div class="col-3 card">
                        <img class="card-img-top" src="/adopt-kitty/assets/img/mikado.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mikado</h5>
                            <p class="card-text">Male - Siamois</p>
                        </div>
                    </div>
                    <div class="col-3 card">
                        <img class="card-img-top" src="/adopt-kitty/assets/img/pattenrond.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Pattenrond</h5>
                            <p class="card-text">Male - Europeen</p>
                        </div>
                    </div>
                    <div class="col-3  card">
                        <img class="card-img-top" src="/adopt-kitty/assets/img/image2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Capucine</h5>
                            <p class="card-text">Femelle - Sacré de birmanie</p>
                        </div>
                    </div>
                    <div class="col-3  card">
                        <img class="card-img-top" src="/adopt-kitty/assets/img/image11.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Spirou</h5>
                            <p class="card-text">Male - Croisé</p>
                        </div>
                    </div>
                    <div class="col-3  card">
                        <img class="card-img-top" src="/adopt-kitty/assets/img/image8.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tango</h5>
                            <p class="card-text">Male - Croisé</p>
                        </div>
                    </div>
                    <div class="col-3  card">
                        <img class="card-img-top" src="/adopt-kitty/assets/img/image10.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ultia</h5>
                            <p class="card-text">Femelle - Europeen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        /* $images = array(
                    'image2.jpg', 'image8.jpg', 'image11.jpg', 'mikado.jpg',
                    'image5.jpg', 'image6.jpg', 'image7.jpg', 'image1.jpg',
                    'pattenrond.jpg', 'image10.jpg', 'image3.jpg', 'image12.jpg'
                );

                $numColumns = 4;
                foreach (array_chunk($images, $numColumns) as $row) {
                    echo '<div class="row">';
                    foreach ($row as $image) {
                        echo '<div class="col-md-3">';
                        echo '<img src="' . base_url('/assets/img/' . $image) . '" alt="image">';
                        echo '</div>';
                    }
                    echo '</div>';
                } */
        ?>
        <?php
        include(APPPATH . "views/include/footer.php")
        ?>