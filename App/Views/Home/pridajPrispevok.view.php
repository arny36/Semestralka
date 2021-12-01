<div class="container">

    <form method="post" action="?a=pridaj">


        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Názov príspevku</label>
            <div class="col-sm-10">
                <input type="text" name="nazov" class="form-control" id="nazov" placeholder="Názov príspevku" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Popis</label>
            <div class="col-sm-10">
                <input type="text" name="popis" class="form-control" id="prispevok" minlength="30" placeholder="Popis príspevku" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Obrázok</label>
            <div class="col-sm-10">
                <input type="text" name="obrazok" class="form-control" id="obrazok"  pattern="https://.*.jpg" placeholder="URL adresy obrázka vo formáte JPG" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Dátum</label>
            <div class="col-sm-10">

                <input type="date" id="inputPassword" name="datum"
                       min="2018-03-02" value="2018-05-02">
            </div>
        </div>



        <button type="submit"  class="btn btn-outline-success">Submit</button>
    </form>
</div>

