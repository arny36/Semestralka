<?php /** @var Array $data */ ?>
<main>

    <?php if (isset($_GET['error'])) {?>
        <div class="alert alert-secondary alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?= $_GET['error'] ?>
        </div>
    <?php } ?>
    <div class="odsek"></div>
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="kontankt-imgs" src="Semestralka/public/obrazky/bean.png" alt="kbean">
                <h2>Mr.Bean</h2>
                <h4>Zakladateľ turistov</h4>
                <p></p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="kontankt-imgs" src="Semestralka/public/obrazky/veduca.jpg" alt="kveduca">
                <h2>Ivana Hrozná</h2>
                <h4>Spoluzakladateľka turistov</h4>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="kontankt-imgs" src="Semestralka/public/obrazky/organizator.jpg" alt="korganizator">
                <h2>Denisa Sladká</h2>
                <h4>Organizátorka výletov</h4>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>


    <div class="container">

        <div class="bd-example">
            <?php if (\App\Auth::jePrihlasenyAdmin()) {  ?>
            <a href="?c=kontakty&a=pridajKontakt" class="btn btn-danger">Pridať kontakt</a>
            <?php }  ?>
            <table class="table table-dark table-borderless">
                <thead>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Meno</th>
                    <th scope="col">Priezivsko</th>
                    <th scope="col">Pozícia</th>
                    <th scope="col">E-mail</th>
                </tr>
                </thead>
                <tbody>

                    <?php /** @var \App\Models\Kontakt[] $data */
                    foreach ($data as $kontakt) { ?>
                    <tr>

                    <th scope="row">
                        <?php if (\App\Auth::jePrihlasenyAdmin()) {  ?>
                        <a href="?c=kontakty&a=vymazKontakt&id=<?= $kontakt->id ?>" onclick="return confirm('Si si istý že chceš vymazať tento príspevok ?');"  class="btn btn-danger">X</a>
                        <?php }  ?>
                        <?= $kontakt->id ?></th>

                        <td><?= $kontakt->meno?></td>
                    <td><?= $kontakt->priezvisko?></td>
                    <td><?php switch ($kontakt->pozicia){
                            case 0:
                                echo "Horolezec";
                                break;
                            case 1:
                                echo "Pamiatkár";
                                break;
                            case 2:
                                echo "Sprievodca";
                                break;

                        }?></td>
                    <td><?= $kontakt->email?> </td>

                    </tr>


                    <?php } ?>


                </tbody>

            </table>
        </div>
    </div>

    </body>
</main>
