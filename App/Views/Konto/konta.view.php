<?php /** @var Array $data */ ?>
<main>
<div class="container">
    <form method="post"  >
    <div class="uzivatelia_tabulka">
        <table class="table table-success table-striped">
            <thead>
            <tr>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Email</th>
                <th>Actions</th>

            </tr>
            </thead>
            <tbody >


            <?php /** @var \App\Models\Registracia[] $data */
            $pocetPrihlasenych = 0;
            foreach ($data as $register) {
                $pocetPrihlasenych++;
                ?>
            <tr class="skry<?= $register->id  ?>">
                    <td><p id="textmeno<?= $register->id  ?>" style="visibility: visible"><?= $register->meno ?></p>
                    <input type="text" id="meno<?= $register->id  ?>" name="meno"  style="visibility: hidden" required value="<?= $register->meno ?>">
                    </td>
                    <td><p id="textpriezvisko<?= $register->id  ?>" style="visibility: visible"><?= $register->priezvisko ?></p>
                        <input type="text" id="priezvisko<?= $register->id  ?>" name="priezvisko"   style="visibility: hidden" required value="<?= $register->priezvisko ?>">
                    </td>
                        <td><p id="textemail<?= $register->id  ?>" style="visibility: visible"><?= $register->email ?></p>
                        <input type="text" id="email<?= $register->id  ?>" name="email" style="visibility: hidden"  required value="<?= $register->email ?>">
                    </td>
                    <td >
                        <a class="btn btn-primary btn-uprav"  style="visibility: visible" onclick="schovajTlacitko(<?= $register->id  ?>)"  id="btnedit<?= $register->id ?>">Edit</a>
                        <button type="button" class="fa fa-save btn-save" style="visibility: hidden" onclick="ulozto(<?= $register->id  ?>)"  id="btnsave<?= $register->id ?>"></button>
                        <a class="btn btn-danger btn-odstran"   id="<?= $register->id ?>">X   </a>
                    </td>
            </tr>
            <?php } ?>
            <tr>
                <td > <a class="btn btn-primary btn-vypisludi">Užívatelia : </a></td>
                <td  colspan="3" class="vypisuj" id="vypis"></td>
            </tr>



            </tbody>


        </table>

    </div>

    </form>

</div>

</main>
