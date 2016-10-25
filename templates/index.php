<?php

include('header.php');

?>

<div id="first">
    <div class="container">
        <div class="row">
            <h1>Section d'entrée</h1>
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



