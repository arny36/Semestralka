<div class="container">
    <?php if (isset($_GET['error'])) {?>
        <div class="alert alert-secondary alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?= $_GET['error'] ?>
        </div>
    <?php } ?>
    <form method="post" enctype="multipart/form-data" action="?c=kontakty&a=pridajKont">

        <div class="formular">

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Meno</label>
                <div class="col-sm-10">
                    <input type="text" name="meno" class="form-control" id="meno" pattern="[a-zA-Z]+" placeholder="Meno" required>
                </div>
            </div>

            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Priezvisko</label>
                <div class="col-sm-10">
                    <input type="text" name="priezvisko" class="form-control" id="priezvisko"  pattern="[a-zA-Z]+" placeholder="Priezvisko" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" >E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@gmail.com" required>
                </div>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input"  type="radio" name="pozicia" id="pozicia1" value=0 checked>
                <label class="form-check-label" >Horolezec</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pozicia" id="pozicia2" value=1>
                <label class="form-check-label" >Pamiatkar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pozicia" id="pozicia3" value=2 >
                <label class="form-check-label" >Sprievodca</label>
            </div>


        </div>

            <button type="submit"  class="btn btn-danger">Pridať</button>


    </form>
</div>

