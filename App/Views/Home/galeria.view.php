<?php /** @var Array $data */ ?>
<main>

    <a href="?c=home&a=pridajPrispevok" class="btn btn-dark">Pridaj položku</a>

    <div class="album py-5  ">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php /** @var \App\Models\Prispevok[] $data */
            foreach ($data as $galeria) { ?>


                <div class="col">
                    <a href="?&a=vymaz&id=<?= $galeria->id ?>" onclick="return confirm('Si si istý že chceš vymazať tento príspevok ?');"  class="btn btn-danger">X</a>
                    <div class="card shadow-sm">
                        <img class="galery-imgs" src=<?= $galeria->obrazok?> alt="gtlsta">
                        <div class="card-body">
                            <p class="galeria-nadpis"><?= $galeria->nazov?> </p>
                            <p class="card-text"><?= $galeria->popis?> </p>
                            <p class="card-text"><?= $galeria->id?> </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="?c=home&a=upravPrispevok&id=<?= $galeria->id ?>&nazov=<?= $galeria->nazov ?>&obrazok=<?= $galeria->obrazok ?>&popis=<?= $galeria->popis ?>&datum=<?= $galeria->datum ?>"  class="btn btn-outline-primary">Edit</a>

                                </div>
                                <small class="text-muted"><?= $galeria->datum?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>

        </div>
    </div>

</main>




</body>