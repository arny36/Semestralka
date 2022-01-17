<div class="container">

    <form method="post" enctype="multipart/form-data" action="?a=uprav&id=<?= $_GET['id'] ?>">


        <?php

            $novyPrispevok = App\Models\Prispevok::getOne($_GET['id']);
            $nazov = $novyPrispevok->getNazov();
            $popis = $novyPrispevok->getPopis();
            $datum = $novyPrispevok->getDatum();
        ?>

        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Názov príspevku</label>
            <div class="col-sm-10">
                <input type="text" name="nazov" class="form-control" minlength="3"  pattern="[a-zA-Z]+" id="nazov" value="<?= $nazov?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Popis</label>
            <div class="col-sm-10">
                <input type="text" name="popis" class="form-control" id="popis" minlength="30" value="<?= $popis ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Obrázok</label>
            <div class="col-sm-10">
                <input type="file" name="obrazok"  id="obrazok" accept=".jpg, .jpeg, .png" >
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Dátum</label>
            <div class="col-sm-10">

                <input type="date" id="datum" name="datum"
                        value="<?= $datum?>" required>
            </div>
        </div>



        <button type="submit"  class="btn btn-outline-success">Submit</button>
    </form>
</div>

