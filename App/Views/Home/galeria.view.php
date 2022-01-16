<?php /** @var Array $data */ ?>
<main>
    <?php if (\App\Auth::jePrihlasenyAdmin()) {  ?>
    <a href="?c=home&a=pridajPrispevok" class="btn btn-dark">Pridaj položku</a>
    <?php } ?>
    <div class="album py-5  ">
        <div class="container">
            <?php if (isset($_GET['error'])) {?>
                <div class="alert alert-secondary alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?= $_GET['error'] ?>
                </div>
            <?php } ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php /** @var \App\Models\Prispevok[] $data */
            foreach ($data as $galeria) { ?>


                <div class="col">
                    <?php if (\App\Auth::jePrihlasenyAdmin()) {  ?>
                    <a href="?&a=vymaz&id=<?= $galeria->id ?>" onclick="return confirm('Si si istý že chceš vymazať tento príspevok ?');"  class="btn btn-danger">X</a>
                    <?php }?>
                    <div class="card shadow-sm">
                        <img class="galery-imgs" src="Semestralka/<?=\App\Config\Configuration::UPLOAD_DIR."/".$galeria->obrazok?> " alt="gtlsta">
                        <div class="card-body">
                            <p class="galeria-nadpis"><?= $galeria->nazov?> </p>
                            <p class="card-text"><?= $galeria->popis?> </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <?php if (\App\Auth::jePrihlasenyAdmin()) {  ?>
                                    <a href="?c=home&a=upravPrispevok&id=<?= $galeria->id ?>"  class="btn btn-outline-primary">Edit</a>
                                    <?php } ?>
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