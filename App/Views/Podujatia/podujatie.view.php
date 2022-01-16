<?php /** @var Array $data */ ?>
<main>
    <?php if (\App\Auth::jePrihlasenyAdmin()) {  ?>
    <a href="?c=podujatia&a=pridajUdalost" class="btn btn-dark">Pridaj položku</a>
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

                <?php /** @var \App\Models\Udalost[] $data */
                foreach ($data as $podujatie) { ?>
                <div class="col">
                    <?php if (\App\Auth::jePrihlasenyAdmin()) {  ?>
                    <a href="?c=podujatia&a=vymazPodujatie&id=<?= $podujatie->id ?>" onclick="return confirm('Si si istý že chceš vymazať tento príspevok ?');"  class="btn btn-danger">X</a>
                    <?php } ?>
                    <div class="card shadow-sm">

                        <img class="galery-imgs" src="Semestralka/<?=\App\Config\Configuration::UPLOAD_DIR."/".$podujatie->obrazok?>" alt="pspania">
                        <div class="card-body">
                            <p class="galeria-nadpis"><?= $podujatie->nazov?></p>
                            <p class="datum"><?= $podujatie->datum?></p>
                            <p class="card-text"><?= $podujatie->popis?></p>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <?php if (\App\Auth::jePrihlaseny()) {  ?>
                                    <a href="?c=podujatia&a=zucasnit&id=<?=$podujatie->id?>"  class="btn btn-sm btn-outline-primary">Zúčastniť sa</a>
                                    <?php } ?>
                                </div>
                                <small class="text-muted">počet zúčastnených : <?= $podujatie->zucastneni?></small>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
</main>
