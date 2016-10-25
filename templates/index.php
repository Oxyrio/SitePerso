<?php

include('header.php');

?>




<div id="first">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center">Aymé/Matthieu</h1>
                <h3 class="text-center">Étudiants à l'Institut de l'Internet et du Multimédia</h3>
            </div>
        </div>
    </div>
</div>

<div id="second">
    <div class="container">
        <div class="row">
            <h1>Qui suis-je ?</h1>
        </div>
    </div>
</div>

<div id="third">
    <div class="container">
        <div class="row">
            <h1>Portfolio</h1>
        </div>
    </div>
</div>

<div id="fourth">
    <div class="container">
        <div class="row">
            <h1>Compétences</h1>
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

<span class="tooltip" title="This is my span's tooltip message!">Some text</span><hr>


<span class="tooltip" data-tooltip-content="#tooltip_content">This span has a tooltip with HTML when you</span>

<div class="tooltip_templates">
    <span id="tooltip_content">
        <img src="../img/test.jpg" /> <strong>This is the content of my tooltip!</strong>
    </span>
</div>


<?php

include('footer.php');

?>



