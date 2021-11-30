<div class="container">

    <form method="post" action="?a=uprav&id=<?= $_GET['id'] ?>">


        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Názov príspevku</label>
            <div class="col-sm-10">
                <input type="text" name="nazov" class="form-control" id="inputPassword" value="<?= $_GET['nazov']?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Popis</label>
            <div class="col-sm-10">
                <input type="text" name="popis" class="form-control" id="inputPassword" value="<?= $_GET['popis'] ?>"></input>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Obrázok</label>
            <div class="col-sm-10">
                <input type="text" name="obrazok" class="form-control" id="inputPassword" value="<?= $_GET['obrazok'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Dátum</label>
            <div class="col-sm-10">

                <input type="date" id="inputPassword" name="datum"
                       min="2018-03-02" value="<?= $_GET['datum'] ?>"
            </div>
        </div>



        <button type="submit"  class="btn btn-outline-success">Submit</button>
    </form>
</div>

