<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="imgs/line logo.png">
        <title>WeFit</title>
        <!--the bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!--lik to compiled scss-->
        <link rel="stylesheet" href="assets/sass/styles.css">
        <!--AOS CDN-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body class="blue">
        <div><!--the images in the top corners-->
        <img src="<?= base_url('assets/imgs/line logo.png'); ?>" alt="WeFit logo" style="position: fixed; top: 1em; left: 1em; height: 2em;">
        <img src="<?= base_url('assets/imgs/s x a.png'); ?>" alt="Satiya x Anais" style="position: fixed; right: 0.5em; height: 3em;">

        </div>
        <div class="container-sm" data-aos="zoom-in-up" data-aos-duration="700">
            <div class="row justify-content-center ">
                <div class="col-md-5 col-8">
                    <div style="display:block; padding-top: 12em;">
                        <h2 class="text-center"><small><small>members booking portal</small></small></h2> 
                        <h1 class="text-center">WeFit</h1>
                        <h2 class="text-center"><small><small>Serene Fitness</small></small></h2>
                        <div class="text-center">
                            <!-- php syntax used to lead to sign up page on button clik-->
                        <?= anchor('signup', '<button type="button" class="btn btn-outline-light btn-lg" style="background-color: rgba(255, 245, 246, .09); outline-color: #fff5f6; font-family: tide, sans serif; font-size: 1.25em; margin-top: 1em;">Get Started</button>', ['class' => 'btn-link']) ?>
                        </div>

                        <h3 class="text-center" style="font-size: .8em; margin-top: 3em;">Have an account? <a href="<?= base_url('login') ?>" style="color: #ef3267;">Log-in</a></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-sm mt-5" data-aos="zoom-in-up" data-aos-duration="700">
            <div class="row justify-content-center">
                <div class="card mb-3" style="max-width: 1000px; background-color: rgba(255, 245, 246, .8); color: #fff5f6; border: .05em solid #fff5f6 ;">
                    <div class="row g-2">
                        <div class="col-md-4 p-2  object-fit-fill">
                            <img src="<?= base_url('assets/imgs/yoga.png'); ?>" class="img-fluid" alt="ladies doing beach vinyasa" style="border-radius: .28em; max-height: fit-content;">
                        </div>

                        <div class="col-md-8">
                            <div class="card-body p-5">
                                <h1 class="card-title text-center" style="color: #3F413A;"><small><small><small>WeFit</small></small></small> </h1>
                                <h2 class="card-text text-center" style="color: #3F413A;"><small><small><small>about us</small></small></small></h2>
                                <p class="card-text" style="font-family: glacial, sans-serif; text-align: center; color: #3F413A;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies aliquam tristique. Vestibulum metus nisl, pellentesque vitae sollicitudin. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nesciunt earum fugiat ad explicabo nobis sunt assumenda architecto sapiente dolores, deserunt iste quod ducimus amet eum quas dicta officia. Porro.</p>
                                <div class="d-flex justify-content-center">
                                <img src="<?= base_url('assets/imgs/line logo green.png'); ?>" alt="logo" style="max-height: 3em;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mt-5" data-aos="zoom-in-up" data-aos-duration="700">
            <h1 class="text-center mb-0"><small>WeFit</small></h1>
            
            <h2 class="text-center mt-0"><small><small>made by:</small></small></h2>
            <div class="d-flex justify-content-center">
                <img src="<?= base_url('assets/imgs/tiyanna.png'); ?>" alt="satiya and anais" class="img-fluid" style="max-height: 25em;">

            </div>
            <p class="text-center" style="font-family: glacial, sans-serif; color: #fff5f6;">For An Assignment<br>Presented in Partial Fulfillment<br>Of the Requirements for the Course<br>CPTR332-01: INTERNET TECHNOLOGIES</p>
        </footer>

        <!--the bootstrap javascript CDN-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--aos javascript CDN-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!--aos initiation, won't work without this-->
        <script>
            AOS.init();
        </script>
    </body>
</html>
