<!-- appointment/class boking form thingy -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="assets/imgs/line logo.png">
        <title>WeFit | Bookings</title>
        <!--the bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/sass/styles.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body>
        <div>
            <a href="<?= base_url() ?>">
                <img src="assets/imgs/line logo.png" alt="WeFit logo" style="position: fixed; top: 1em; left: 1em; height: 2em;">
            </a>
            <!--NEW BUTTON, takes you to member-dash (cause they're the only ones who book appointments)-->
            <a href="<?= base_url('club_member_dash') ?>">
                <img src="assets/imgs/dash-icon.png" alt="add appointment icon" style="position: fixed; top: 4em; left: 1.3em; height: 1.25em;">
            </a>
            <img src="assets/imgs/s x a.png" alt="Satiya x Anais" style="position: fixed; right: 0.5em; height: 3em;">
        </div>

        <!--prepare yourself, there's a lotta nesting-->
        <div class="container-sm" data-aos="zoom-in-up" data-aos-duration="700" >
            <div class="row justify-content-center">
                <div class="col-md-5 col-8">
                    <div style="display:block; padding-top: 2em;">
                        <h2 class="text-center mb-4">make an appointment</h2>
                    </div>

                    <!--this form is a little special, so lets chat about it-->
                    <!--the form is broken into sections, its in the div IDs-->
                    <!--the cards for the types of services are radio buttons that check and uncheck by clicking on any part of the card, the radio itself is hidden-->
                    <!--these cards have javascript associated with them, I'll explain at the bottom-->
                    <form class="floating-label" id="booking" action="<?= base_url('appointments/bookAppointment') ?>" method="post">
                        <div class="text-center">
                            <h2><small><small>consultations</small></small></h2>
                        </div>

                        <div id="section1" class="mb-3">
                            <!--here is one of the card/radios, the radio is in the card-body and its label acts as the title of the card-->
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType1" name="classType" value="membership-consult" style="display: none;">
                                    <label for="classType1" style="font-family: tide, sans-serif;">Membership Consultation</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>Free / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>
                            
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType2" name="classType" value="nutrition-consult" style="display: none;">
                                    <label for="classType2" style="font-family: tide, sans-serif;">Nutritionist Consultation</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$300 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>

                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType3" name="classType" value="fitness-consult" style="display: none;">
                                    <label for="classType3" style="font-family: tide, sans-serif;">Fitness Consultation</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$300 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>

                            <div class="text-center">
                                <h2><small><small>classes</small></small></h2>
                            </div>
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType4" name="classType" value="ashtanga" style="display: none;">
                                    <label for="classType4" style="font-family: tide, sans-serif;">Ashtanga vinyasa</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$100 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType5" name="classType" value="beach-vinyasa" style="display: none;">
                                    <label for="classType5" style="font-family: tide, sans-serif;">beach vinyasa</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$100 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType6" name="classType" value="pilates-classic" style="display: none;">
                                    <label for="classType6" style="font-family: tide, sans-serif;">Classic Pilates</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$125 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType7" name="classType" value="pilates-reformer" style="display: none;">
                                    <label for="classType7" style="font-family: tide, sans-serif;">Reformer Pilates</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$160 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType8" name="classType" value="spin-hiit" style="display: none;">
                                    <label for="classType8" style="font-family: tide, sans-serif;">Spin || hiit</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$150 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType9" name="classType" value="spin-endure" style="display: none;">
                                    <label for="classType9" style="font-family: tide, sans-serif;">Spin || endure</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$150 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType10" name="classType" value="barre-ballet" style="display: none;">
                                    <label for="classType10" style="font-family: tide, sans-serif;">Barre || ballet</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$100 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>
                            <div class="card mb-3" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6;">
                                <div class="card-body">
                                    <input type="radio" id="classType11" name="classType" value="barre-flex" style="display: none;">
                                    <label for="classType11" style="font-family: tide, sans-serif;">barre || flex</label>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif;"><small>$100 / 60mins</small></p>
                                    <p class="card-text" style="font-family: glacial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!--welcome to section 2, here we have the date and time of the appointment.-->
                        <!--the time isnt actually a time input but a 'select' that has time values in military form, you can change the value to reflect the way it would be stored in the db-->
                        <div id="section2" class="mb-3">
                            <div class="text-center">
                                <h2><small><small>date & time</small></small></h2>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="date" class="form-control mb-3" id="dateInput" name="dateInput" placeholder="Select a date" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6; font-family: glacial, sans-serif;">
                                </div>
                                <div class="col">
                                    <select class="form-select" id="timeSelect" name="timeSelect" aria-label="select appointment time" style="background-color: rgba(255, 245, 246, .09); color: #fff5f6; font-family: glacial, sans-serif;">
                                        <option selected>pick a time</option>
                                        <option value="0800">8:00 am</option>
                                        <option value="0900">9:00 am</option>
                                        <option value="1000">10:00 am</option>
                                        <option value="1100">11:00 am</option>
                                        <option value="1200">12:00 noon</option>
                                        <option value="1300">1:00 pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--section 3, nothing special or required here except the submit button (which is pretty special and required actually)-->
                        <div id="section3">
                            <div class="text-center">
                                <h2><small><small>notes & book</small></small></h2>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control mb-3 focus-ring-light" placeholder="Leave a comment here" id="floatingTextarea" name="floatingTextarea" style="background-color: rgba(255, 245, 246, .09);"></textarea>
                                <label for="floatingTextarea" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">Provide any additional notes</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control focus-ring" id="discount" placeholder="0000fw" style="background-color: rgba(255, 245, 246, .09); --bs-focus-ring-color: rgba(239, 50, 103, .25)">
                                <label for="discount" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .8);">Referral or discount code</label>
                            </div>
                            <!--submit button, only add to the classes or add an ID but don't take away any classes please-->
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-light btn-lg mb-5" style="font-family: tide, sans-serif; background-color: rgba(255, 245, 246, 1); color: #2c2a27;">submit booking</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <footer>
            <h1 class="text-center"><small><small><small>WeFit</small></small></small></h1>
        </footer>
        
        <!--the bootstrap javascript CDN, AOS CDN, and AOS initiation-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!--here's that javascript for the cards I mentioned,  it just asscoiates the card being clicked with the hidden radio. This is integral to the form working so PLEASE leave it alone I beg ʘ‿ʘ-->
        <!--there's scss for the animation when it's clicked, its a sublt kind of glowing pulse-->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var cards = document.querySelectorAll('.card');

                cards.forEach(function(card) {
                    card.addEventListener('click', function() {
                    // Find the hidden radio button inside the clicked card
                        var radio = card.querySelector('input[type="radio"]');
                    // Remove 'selected' class from all cards
                    cards.forEach(function(c) {
                        c.classList.remove('selected');
                    });
                    // If a radio button is found, select it and add 'selected' class to the card
                    if (radio) {
                        radio.checked = true;
                        card.classList.add('selected');
                    }
                });
            });
        });
        </script>
    </body>
</html>
<!--et la fin-->