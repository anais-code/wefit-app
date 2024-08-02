<!-- signup page, also very self explanatory -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="assets/imgs/line logo.png">
        <title>WeFit | Sign up</title>
        <!--the bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/sass/styles.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body>
        <div>
            <!--the images in the top corner, but ones a link that'll take you back to the homepage (the logo)-->
            <!--I'm not repeating this again either｡◕‿◕｡-->
            <a href="<?= base_url() ?>">
                <img src="<?= base_url('assets/imgs/line logo.png'); ?>" alt="WeFit logo" style="position: fixed; top: 1em; left: 1em; height: 2em;">
            </a>
            <img src="<?= base_url('assets/imgs/s x a.png'); ?>" alt="Satiya x Anais" style="position: fixed; right: 0.5em; height: 3em;">
        </div>

        <div class="container-sm" data-aos="zoom-in-up" data-aos-duration="700">
            <div class="row justify-content-center">
                <div class="col-md-5 col-8">
                    <div style="display:block; padding-top: 4em;">
                        <h1 class="text-center">WeFit</h1>
                        <h2 class="text-center">Sign-Up</h2>

                        <!--has: first name, last name, phone num, email, password, remember me, submit-->
                        <!--needs-validation lets bootstrap know to validate the form their way, novalidate turns off default broswer validation, action opens the member dash if submitted-->
                        <form class="floating-label needs-validation" id="signUpForm" novalidate action="<?= site_url('signup/register') ?>" method="post">
                            <!--they're nested so much to get them next to each other-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Jane" style="background-color: rgba(255, 245, 246, .09);" required>
                                        <label for="first-name" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">First name</label>
                                        <div class="invalid-feedback" style="font-family: glacial, sans-serif;">please enter first name</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Doe" style="background-color: rgba(255, 245, 246, .09);" required>
                                        <label for="last-name" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">Last name</label>
                                        <div class="invalid-feedback" style="font-family: glacial, sans-serif;">please enter last name</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="user-email" name="user-email" placeholder="name@example.com" style="background-color: rgba(255, 245, 246, .09);" required>
                                        <label for="user-email" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">Email address</label>
                                        <div class="invalid-feedback" style="font-family: glacial, sans-serif;">invalid email</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="phone-num" name="phone-num" placeholder="123-1234" style="background-color: rgba(255, 245, 246, .09);" required>
                                        <label for="phone-num" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">Phone number</label>
                                        <div class="invalid-feedback" style="font-family: glacial, sans-serif;">invalid phone number</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="user-password" name="user-password" placeholder="Password" style="background-color: rgba(255, 245, 246, .09);" required>
                                <label for="user-password" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">Password <small><small><small>must be 8-20 characters long</small></small></small></label>
                                <div class="invalid-feedback" style="font-family: glacial, sans-serif;">invalid password</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="user-password-confirm" placeholder="Password" style="background-color: rgba(255, 245, 246, .09);" required>
                                <label for="user-password-confirm" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">Confirm password</label>
                                <div class="invalid-feedback" style="font-family: glacial, sans-serif;">passwords do not match</div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember-me">
                                <label class="form-check-label" for="remember-me" style="color: rgba(255, 245, 246, .8); font-family: glacial, sans-serif;">
                                    remember me
                                </label>
                            </div>

                            <!--submit button, only add to the classes or add an ID but don't take away any classes please-->
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-light btn-lg mb-3" style="font-family: tide, sans-serif; background-color: rgba(255, 245, 246, 1); color: #2c2a27;">Sign-Up</button>
                            </div>
                        </form>
                        <h3 class="text-center" style="font-size: .8em; margin-top: 3em;">Already a Member? <a href="<?= base_url('login') ?>" style="color: #ef3267;" >Log-in</a></h3>
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

        <!--script for form validaton, the form validation won't look cute without it but it is optional-->
        <script>
            document.getElementById("signUpForm").addEventListener("submit", function(event) {
            if (!this.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            this.classList.add('was-validated'); // This class is a Bootstrap one that will show the validation errors n stuff
            });
        </script>
    </body>
</html>
<!--et la fin-->