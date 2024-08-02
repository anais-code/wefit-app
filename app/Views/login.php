<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="aasets/imgs/line logo.png">
        <title>WeFit | Login</title>
        <!--the bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!--lik to compiled scss-->
        <link rel="stylesheet" href="assets/sass/styles.css">
        <!--AOS CDN-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body>
        <div>
            <a href="<?= base_url()?>">
                <img src="assets/imgs/line logo.png" alt="WeFit logo" style="position: fixed; top: 1em; left: 1em; height: 2em;">
            </a>
            <img src="assets/imgs/s x a.png" alt="Satiya x Anais" style="position: fixed; right: 0.5em; height: 3em;">
        </div>

        <div class="container-sm" data-aos="zoom-in-up" data-aos-duration="700">
            <div class="row justify-content-center ">
                <div class="col-md-5 col-8">
                    <div style="display:block; padding-top: 8em;">
                        <h1 class="text-center">WeFit</h1>
                        <h2 class="text-center">Log-in</h2>
                        <form class="floating-label needs-validation" id="signInForm" action="<?= base_url('login/login') ?>" method="post" novalidate>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="user-email" name="user-email" placeholder="name@example.com" style="background-color: rgba(255, 245, 246, .09);" required>
                                <label for="user-email" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">Email address</label>
                                <div class="invalid-feedback" style="font-family: glacial, sans-serif;">invalid email</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="user-password" name="user-password" placeholder="Password" style="background-color: rgba(255, 245, 246, .09);" required>
                                <label for="user-password" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">Password</label>
                                <div class="invalid-feedback" style="font-family: glacial, sans-serif;">invalid password</div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember-me">
                                <label class="form-check-label" for="remember-me" style="color: rgba(255, 245, 246, .8); font-family: glacial, sans-serif;">
                                    remember me
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-light btn-lg mb-3" style="font-family: tide, sans-serif; background-color: rgba(255, 245, 246, .09) ;">Log-in</button>
                            </div>
                        </form>
                        <h3 class="text-center" style="font-size: .8em; margin-top: 3em;">Not a Member? <a href="<?= base_url('signup')?>" style="color: #ef3267;" >Sign-Up</a></h3>
                    </div>
                </div>
            </div>
        </div>


        <!--the bootstrap javascript CDN, AOS CDN, and AOS initiation-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script>
            document.getElementById("signInForm").addEventListener("submit", function(event) {
                if (!this.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                window.location.href = "<?= base_url('club_member_dash.php') ?>"
                }
                this.classList.add('was-validated');
            });
        </script>
    </body>
</html>
