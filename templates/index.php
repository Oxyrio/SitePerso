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
        <video id="video_background" preload="auto" autoplay="autoplay" loop="loop" muted="muted">
            <source src="../videos/leo.webm" type="video/webm">
            <source src="../videos/leo.mp4" type="video/mp4">
            <source src="../videos/leo.ogg" type="video/ogg">
        </video>
    </div>
</div>

<section>

    <a class="arrow-wrap" href="#second">
        <span class="arrow" title="Hey you"></span>
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
                    <a href="#thumb1" class="thumbnail" style="background-image: url('../js/portfolio/img/thumb1.jpg')"><h4>Web development</h4><span class="description">Get the latest technologies</span></a>
                </li>
                <li>
                    <a href="#thumb2" class="thumbnail" style="background-image: url('../js/portfolio/img/thumb2.jpg')"><h4>SEO</h4><span class="description">Fast and reliable performance</span></a>
                </li>
                <li>
                    <a href="#thumb3" class="thumbnail" style="background-image: url('../js/portfolio/img/thumb3.jpg')"><h4>Web design</h4><span class="description">Slick and responsive website</span></a>
                </li>
            </ul>

            <div class="portfolio-content">
                <div id="thumb1">
                    <div class="media"><iframe src="//player.vimeo.com/video/69666609?byline=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                    <h1>Web development</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis nisi sit amet metus venenatis, ut congue turpis aliquet. Pellentesque eget elit sollicitudin, feugiat felis in, ornare diam. Morbi blandit sapien nibh, eu pulvinar tortor luctus nec. Aenean lobortis lacus cursus gravida adipiscing. Praesent in odio porta, placerat felis id, viverra est. Nam magna quam, tincidunt eget augue in, aliquet tristique ipsum.</p>
                    <button type="button" class="btn btn-info">Info</button>

                </div>

                <div id="thumb2">
                    <div class="media"><img src="../js/portfolio/img/media.jpg"/></div>
                    <h1>WESH ALORS</h1>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Integer a posuere tortor. Praesent malesuada mauris massa, non blandit neque tempus nec. Quisque fermentum nunc non hendrerit tempus.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>

                <div id="thumb3">
                    <div class="media"><img src="../js/portfolio/img/media.jpg"/></div>
                    <h1>Web design</h1>
                    <p>Ut condimentum eros bibendum metus lacinia, ac condimentum justo faucibus. Nam nec dui convallis, sodales sapien in, gravida justo. Pellentesque pulvinar massa a nisl iaculis, quis iaculis elit tincidunt.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
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

            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                </div>

                <button type="submit" class="btn btn-default" style="margin-bottom: 2%;">Envoyer</button>

                <p>Vous pouvez jeter un coup d'oeil à mon CV juste en cliquant sur le bouton ci-dessous<p>

                    <a href="../img/Rendu1_WEB2_JACQUET_ENGEL_INDRIANJAFY_LALBAT.pdf" download>
                        <button type="button" class="btn btn-success btn-lg">Télécharger mon CV</button>
                    </a>

                <p><b>Note:</b> The download attribute is not supported in Edge version 12, IE, Safari or Opera version 12 (and earlier).</p>
            </form>

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



