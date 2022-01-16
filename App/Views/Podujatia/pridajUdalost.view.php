<div class="container">
    <?php if (isset($_GET['error'])) {?>
        <div class="alert alert-secondary alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?= $_GET['error'] ?>
        </div>
    <?php } ?>
    <form method="post" enctype="multipart/form-data" action="?a=pridaj">

        <div class="formular">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Názov príspevku</label>
                <div class="col-sm-10">
                    <input type="text" name="nazov" class="form-control" id="nazov" minlength="3" pattern="[a-zA-Z]+" placeholder="Názov príspevku" required >
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Popis</label>
                <div class="col-sm-10">
                    <input type="text" name="popis" class="form-control" id="prispevok"  minlength="30" placeholder="Popis príspevku" required >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Obrázok</label>
                <div class="col-sm-10">
                    <input type="file" name="obrazok" accept=".jpg, .jpeg, .png" id="obrazok" required  >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Dátum</label>
                <div class="col-sm-10">

                    <input type="date" id="inputPassword" name="datum" required>
                </div>
            </div>
        </div>


        <button type="submit"  class="btn btn-danger">Pridať</button>
    </form>
</div>

