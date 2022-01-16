<section class="vh-100 bg-image" style="background-image: url('https://www.kaunertal.com/Touren/motoalps-bayerntripp_50782378/images/image-thumb__52037__img-gallery-fullscreen/-tvb-tiroler-oberland-daniel-zangerl-motorrad-timmelsjoch-2016_32.jpeg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <?php if (isset($_GET['error'])) {?>
                            <div class="alert alert-secondary alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <?= $_GET['error'] ?>
                            </div>
                            <?php } ?>
                            <h2 class="text-uppercase text-center mb-5">Prihlásenie</h2>

                            <form method="post" enctype="multipart/form-data" action="?c=konto&a=prihlas">

                                <div class="form-outline mb-4">
                                    <input type="text" name="email" id="form3Example1cg" class="form-control form-control-lg" required/>
                                    <label class="form-label" for="form3Example1cg">E-mail</label>
                                </div>



                                <div class="form-outline mb-4">
                                    <input type="password"  name="heslo" id="form3Example4cg" class="form-control form-control-lg" required/>
                                    <label class="form-label" for="form3Example4cg">Heslo</label>
                                </div>



                                <div class="d-flex justify-content-center">
                                    <button type="prihlas" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Prihlásiť</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Nemáš ešte účet ? <a href="?c=konto&a=register" class="fw-bold text-body"><u>Zaregistruj sa tu !</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>