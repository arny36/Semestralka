<div class="container">

    <form method="post" enctype="multipart/form-data" action="?a=pridajKont">


        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Názov príspevku</label>
            <div class="col-sm-10">
                <input type="text" name="meno" class="form-control" id="meno" placeholder="Názov príspevku" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Popis</label>
            <div class="col-sm-10">
                <input type="text" name="priezvisko" class="form-control" id="priezvisko"  placeholder="Popis príspevku" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="exampleFormControlInput1"class="col-sm-2 col-form-label" >E-mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@gmail.com">
            </div>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input"  type="radio" name="pozicia" id="pozicia1" value=0>
            <label class="form-check-label" for="inlineRadio1">Horolezec</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pozicia" id="pozicia2" value=1>
            <label class="form-check-label" for="inlineRadio2">Pamiatkar</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pozicia" id="pozicia3" value=2 >
            <label class="form-check-label" for="inlineRadio3">Sprievodca</label>
        </div>




        <div class="form-group row">

        <button type="submit"  class="btn btn-outline-success">Pridať</button>
        </div>
    </form>
</div>

