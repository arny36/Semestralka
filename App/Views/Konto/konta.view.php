<?php /** @var Array $data */ ?>
<main>
<div class="container">

    <div class="uzivatelia_tabulka">
        <table class="table table-success table-striped">
            <thead>
            <tr>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Email</th>

            </tr>
            </thead>
            <tbody >

            <?php /** @var \App\Models\Registracia[] $data */
            $pocetPrihlasenych = 0;
            foreach ($data as $register) {
                $pocetPrihlasenych++;
                ?>


            <tr>
                <td><?= $register->meno ?></td>
                <td><?= $register->priezvisko ?></td>
                <td><?= $register->email ?></td>

            </tr>

            <?php } ?>


            </tbody>
            <th colspan="3">Aktuálny počet zaregistrovaných je : <?=  $pocetPrihlasenych       ?></th>


        </table>

    </div>



</div>
