<div class="container">

    <form method="post" enctype="multipart/form-data" action="?a=pridaj">


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
                <input type="file" name="obrazok"  id="obrazok" accept=".jpg, .jpeg, .png" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Dátum</label>
            <div class="col-sm-10">

                <input type="date" id="inputPassword" name="datum">
            </div>
        </div>



        <button type="submit"  class="btn btn-outline-success">Submit</button>
    </form>
</div>

