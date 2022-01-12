<!DOCTYPE html>

<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>TuristiTurca</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Semestralka/public/css.css" type="text/css">
    <link rel="icon" href="Semestralka/public/obrazky/icon.png">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
        <a class="navbar-brand" href="?c=home">Domov</a>
        <a class="navbar-brand" href="?c=home&a=galeria">Galéria</a></li>
        <a class="navbar-brand" href="?c=home&a=podujatie">Podujatie</a>
        <a class="navbar-brand" href="?c=home&a=kontakt">Kontakt</a>




        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            </ul>

        </div>
        <?php if (\App\Auth::jePrihlaseny()) {  ?>
            <a class="navbar-brand" href="?c=home&a=login">Odhlásiť</a>
        <?php } else {?>
            <a class="navbar-brand" href="?c=home&a=login">Login</a>
        <?php } ?>
    </div>
</nav>
<div class="container">
    <div class="row mt-2">
        <div class="col">
            <?= $contentHTML ?>
        </div>
    </div>
</div>
</body>
</html>

