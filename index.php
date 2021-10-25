<?php
require('./views/index/header.php');?>
<body>
    
    <div class="container">
        <?php require('views/index/navbar.php'); ?>
            <div class="container-fluid">
                <div class="titlePage">
                    <h1 class="">ACCUEIL</h1>
                </div>
                <div class="presContainer">
                    <h2>QUI SUIS-JE ?</h2>
                    <p class="presText">Je suis Vanessa alias "Plume". Je passe le plupart de mon temps libre à fabriquer diverses créations utiles ou à but décoratif, tel que des lanternes, des urnes de mariage, ou encore des fleurs murales.
                        <span class="hideonphone">En voici quelques exemples :</span>
                    </p>
                    <div class="presPictures">
                        <div class="bordered hideonphone">
                            <img src="assets/img/default.jpg" class="demoPic" alt="">
                            <h3>Lorem ipsum</h3>
                        </div>
                        <div class="bordered hideonphone">
                            <img src="assets/img/default.jpg" class="demoPic" alt="">
                            <h3>Lorem ipsum</h3>
                        </div>
                        <div class="bordered hideonphone">
                            <img src="assets/img/default.jpg" class="demoPic" alt="">
                            <h3>Lorem ipsum</h3>
                        </div>
                    </div>
                    <a href="views/boutique.php">
                        <button class="caps"><h2>accéder à ma boutique</h2></button>
                    </a>
                </div>
            </div>
        
    </div>
</body>
<?php require('./views/index/footer.php');?>