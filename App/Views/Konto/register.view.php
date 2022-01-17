<section class="vh-100 bg-image" style="background-image: url('https://mocah.org/uploads/posts/561054-landscape-nature.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Vytvoriť účet</h2>
                            <?php if (isset($_GET['error'])) {?>
                                <div class="alert alert-secondary alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <?= $_GET['error'] ?>
                                </div>
                            <?php } ?>
                            <form  method="post" enctype="multipart/form-data" action="?c=konto&a=zaregistruj">

                                <div class="form-outline mb-4">
                                    <input type="text"  name="meno" id="meno"  pattern="[a-zA-Z]+" class="form-control form-control-lg" required/>
                                    <label class="form-label" >Meno</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" name="priezvisko" id="priezvisko" class="form-control form-control-lg" pattern="[a-zA-Z]+" required />
                                    <label class="form-label" >Priezvisko</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="email" class="form-control form-control-lg"  required>
                                    <label class="form-label" >E-mail</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="heslo" id="heslo" class="form-control form-control-lg" required />
                                    <label class="form-label" >Heslo</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="heslo2" id="heslo2"  class="form-control form-control-lg" required />
                                    <label class="form-label" >Zopakuj heslo</label>
                                </div>



                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Máš už vytvorený účet ?<a href="?c=konto&a=login" class="fw-bold text-body"><u> Prihlás sa tu!</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>