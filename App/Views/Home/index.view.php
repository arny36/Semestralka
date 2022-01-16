<?php /** @var Array $data */ ?>
<body onload="showDivs(1)">
<div class="w3-content w3-display-container"  style="max-width:600px" >
    <img class="mySlides" src="Semestralka/public/obrazky/rakytov.jpg" style="width:100%" alt="rakytov">
    <img class="mySlides" src="Semestralka/public/obrazky/krivanska.jpg" style="width:100%" alt="krivanska">
    <img class="mySlides" src="Semestralka/public/obrazky/tlsta.jpg" style="width:100%" alt="tlsta">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
</div>


</body>


<main>


    <hr class="featurette-divider">
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="iconyHlavnaStranka" src="Semestralka/public/obrazky/teamwork.png" alt="teamwork">
                <h2>Spoznávanie nových ľudí</h2>
                <p>Ak nemáte priateľov na turistiku u nás ich určite nájdete. Ponúkame vám zoznámenie so super ľuďmi a trávenie voľného času spolu.</p>
                <p><a class="btn btn-secondary" href="#teamwork">Viac... &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="iconyHlavnaStranka" src="Semestralka/public/obrazky/nature.png" alt="nature">
                <h2>Spoznávanie zákutí Slovenska</h2>
                <p>Nudíte sa cez víkend? My vám plán spravíme. Ponúkame každý víkend program na víkendovú turistiku.</p>
                <p><a class="btn btn-secondary" href="#nature">Viac... &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="iconyHlavnaStranka" src="Semestralka/public/obrazky/fun.png" alt="fun">

                <h2>Užívanie si zábavy</h2>
                <p>S nami sa určite nebudete nudiť. Máme pre vás veľa zábavných eventov, fotenia a súťaží. Tak neváhajte a pridajte sa k nám.</p>
                <p><a class="btn btn-secondary" href="#fun" >Viac... &raquo;</a></p>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->





        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <a id="teamwork"></a>
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Spoznávanie nových ľudí. <span class="text-muted">Registrácia.</span></h2>
                <p class="lead">
                    Ak nemáte priateľov a radi chodíte na turistiku v prípade máte priateľov ale samých vás to nebaví chodiť na túru pridajte sa k nám. Sme skupina, ktorá rada naberá nových ľudí
                    a vytvára nové priateľstvá. Pre registráciu treba vyplniť formulár, ktorý nájdete na záložke registrovať. Skupina má už dnes cez 90 členov. Plánujeme vybudovať veľké spoločenstvo
                    nie len v turci ale po celom Slovensku.
                    Nezdolávame len hory, navštevujeme rôzne pamiatky máme viacero vedúcich a zaujímame sa o všetky vekové kategórie. Registrácia je možná už od 15 rokov inak môžete prihlásiť na turistiku
                    aj deti.
                </p>
            </div>
            <div class="col-md-5">
                <img class="feature-imgs" src="Semestralka/public/obrazky/turisti.jpg" alt="fun">
            </div>
        </div>

        <hr class="featurette-divider">
        <a id="nature"></a>
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Spoznavanie Slovenska. <span class="text-muted">Prihlasovanie sa na eventy.</span></h2>
                <p class="lead">
                    S nami prejdete všetky krásy Slovenska od západu až na východ. Každý víkend organizujeme turistiku na hory a hrady pre všetky vekové kategórie.
                    Pre prihlásenie sa stačí zaznačiť na našej stránke pomocou registrovaného účtu. Ideme za každého ročného obdobia.
                    Samozrejme všetko prispôsobíme počasiu niekedy sa môže aj akcia zrušiť.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="feature-imgs" src="Semestralka/public/obrazky/fatra-zima.jpg" alt="fun">
            </div>
        </div>

        <hr class="featurette-divider">
        <a id="fun"></a>
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Zábava. <span class="text-muted">Eventy.</span></h2>
                <p class="lead">
                    Ako už bolo spomínané organizujeme rôzne eventy a súťaže u nás kde môžete vyhrať zaujímavé ceny.
                    Medzi takéto patrí aj nájdi najväčšieho dubáka, pozbieraj najviac kíl odpadu a mnoho ďalších
                    Kombinujeme turistiku aj s prospešnými vecami pre našu zem a taktiež radi podnikáme zaujímavé veci v prírode,
                    chodíme stanovať niekedy sú akcie nie len na 1 deň ale aj s prespaním na viac dní.
                </p>
            </div>
            <div class="col-md-5">
                <img class="feature-imgs" src="Semestralka/public/obrazky/trash.jpeg" alt="fun">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->



    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Späť na vrchol.</a></p>
    </footer>
</main>
