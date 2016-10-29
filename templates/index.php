<?php

include('header.php');

?>




<div id="first">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 accueil">
                <h1 class="text-center">Aymé/MatthieuLOL</h1>
                <h3 class="text-center">Étudiants à l'Institut de l'Internet et du Multimédia</h3>
                <a class="scroll" title="scroll" href="#fourth">
                    <div class="scroll-btn tipped tipper-attached" data-title="about me" data-tipper-options="{&quot;direction&quot;:&quot;top&quot;,&quot;follow&quot;:&quot;true&quot;}">
                    </div>
                </a>
            </div>
        </div>
        <video id="video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" height="300" width="150">
            <source src="../videos/dreamscapes.webm" type="video/webm">
            <source src="../videos/dreamscapes.mp4" type="video/mp4">
        </video>
    </div>
</div>

<section>

    <a class="arrow-wrap" href="#second">
        <span class="arrow"></span>
    </a>
</section>

<div id="second">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center">Qui suis-je ?</h1>
            </div>
        </div>
        <div class="row logo">
            <div class="col-md-4">
                <img src="../img/strategy.png" class="img-responsive" alt="Responsive image">
                <h2 class="text-center">Test titre</h2>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p>
            </div>
            <div class="col-md-4">
                <img src="../img/target.png" class="img-responsive" alt="Responsive image">
                <h2 class="text-center">Test titre</h2>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p>
            </div>
            <div class="col-md-4">
                <img src="../img/trophy.png" class="img-responsive" alt="Responsive image">
                <h2 class="text-center">Test titre</h2>
                <p class="text-justify">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p>
            </div>
        </div>
    </div>
</div>



<div id="third">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Portfolio</h1>
            <ul class="thumbs">
                <li>
                    <a href="#thumb1" class="thumbnail" style="background-image: url('../js/portfolio/img/thumb1.jpg')"><h4>BAP "Chez Rose-Marie"</h4><span class="description">Site d'un Restaurant Corse</span></a>
                </li>
                <li>
                    <a href="#thumb2" class="thumbnail" style="background-image: url('../js/portfolio/img/thumb2.jpg');"><h4>BAP "Qualitik"</h4><span class="description">Modification d'un Site d'un cabinet de conseil</span></a>
                </li>
                <li>
                    <a href="#thumb3" class="thumbnail" style="background-image: url('../js/portfolio/img/thumb3.jpg')"><h4>BAP "La Poste R&D"</h4><span class="description">Ubérisation de la livraison de courrier</span></a>
                </li>
            </ul>

            <div class="portfolio-content">
                <div id="thumb1">
                    <div class="media"><iframe src="//player.vimeo.com/video/69666609?byline=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                    <h1>BAP "Chez Rose-Marie"</h1>
                    <p>C'est mon projet n°1</p>
                </div>

                <div id="thumb2">
                    <div class="media"><img src="../img/editor.png"/></div>
                    <h1>BAP "Qualitik"</h1>
                    <p>C'est mon projet n°2</p>
                </div>

                <div id="thumb3">
                    <div class="media"><img src="../js/portfolio/img/media.jpg"/></div>
                    <h1>BAP "La Poste R&D"</h1>
                    <p>C'est mon projet n°3</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fourth">
    <div class="container">
        <div class="row">
            <h1>Compétences</h1>

            <div id="log_comp" class="logun">
                <img src="../img/editor.png">
                <h3>Design</h3>
            </div>

            <div id="log_comp" class="logun">
                <img src="../img/customer-service.png">
                <h3>Relation Client</h3>
            </div>

            <div id="log_comp" class="logun">
                <img src="../img/browser.png">
                <h3>Développement</h3>
            </div>

            <div id="log_comp" class="logun">
                <img src="../img/megaphone.png">
                <h3>Commmunication</h3>
            </div>

            <div id="log_comp" class="logun">
                <img src="../img/analytics.png">
                <h3>Référencement</h3>
            </div>




        </div>
    </div>
</div>


<div id="fifth">
    <div class="container">
        <div class="row">
            <h1>Contact</h1>


            <div id="map"></div>

            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBintebCEawD93XnPnDvdSJlrOgh-qn1q4&callback=initMap">
            </script>

            <div class="colonne_fifth" style="width: 33.3333%; height: 100%;  float: left; text-align: center; padding: 1.5%; font-size: 1.5em;">
                <h2>mail@gmail.com</h2>
            </div>

            <div class="colonne_fifth" style="width: 33.3333%; height: 100%;  float: left; text-align: center; padding: 1.5%; font-size: 1.5em;">
                <h2>O6O6O6O6O6</h2>
            </div>

            <div class="colonne_fifth" style="width: 33.3333%; height: 100%;  float: left; text-align: center; padding: 1.5%; font-size: 1.5em;">
                <h2>linkdin.com</h2>
            </div>

            <button type="button" class="btn btn-default btn-lg">
                <a href="#" download>
                    Mon CV
                </a>
            </button>



        </div>
    </div>
</div>

<!-- TOOLSTIP

<span class="tooltip" title="This is my span's tooltip message!">Some text</span><hr>


<span class="tooltip" data-tooltip-content="#tooltip_content">This span has a tooltip with HTML when you</span>

<div class="tooltip_templates">
    <span id="tooltip_content">
        <img src="../img/test.jpg" /> <strong>This is the content of my tooltip!</strong>
    </span>
</div>-->



<?php

include('footer.php');

?>



