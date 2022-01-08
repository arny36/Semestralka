<?php /** @var Array $data */ ?>
<main>
    <a href="?c=home&a=pridajUdalost" class="btn btn-dark">Pridaj položku</a>


    <div class="album py-5  ">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php /** @var \App\Models\Udalost[] $data */
                foreach ($data as $podujatie) { ?>
                <div class="col">
                    <a href="?&a=vymaz1&id=<?= $podujatie->id ?>" onclick="return confirm('Si si istý že chceš vymazať tento príspevok ?');"  class="btn btn-danger">X</a>

                    <div class="card shadow-sm">

                        <img class="galery-imgs" src="Semestralka/<?=\App\Config\Configuration::UPLOAD_DIR."/".$podujatie->obrazok?>" alt="pspania">
                        <div class="card-body">
                            <p class="galeria-nadpis"><?= $podujatie->nazov?></p>
                            <p class="datum"><?= $podujatie->datum?></p>
                            <p class="card-text"><?= $podujatie->popis?></p>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="?&a=zucasni&id=<?=$podujatie->id?>"  class="btn btn-sm btn-outline-primary">Zúčastniť sa</a>
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
