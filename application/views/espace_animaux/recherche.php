<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/adopt-kitty/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--------------------------- 
     Vue Adoption + for each listes animaux 
                --------------------------->
<?php 
include(APPPATH . "views/include/header.php")
?>

<body>
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
    <div class="image-container d-flex justify-content-center flex-wrap ">
    <a class="btn btn-outline-dark m-1" href="<?php
											echo base_url("Pensionnaire/adoption") ?>">Rencontrer cet animal
			</a>
        <?php
        $images = array(
            'image2.jpg', 'image8.jpg', 'image11.jpg', 'image4.jpg',
            'image5.jpg', 'image6.jpg', 'image7.jpg', 'image1.jpg',
            'image9.jpg', 'image10.jpg', 'image3.jpg', 'image12.jpg'
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
        }
        ?>
    </div>
</div>

</body>
</html>
