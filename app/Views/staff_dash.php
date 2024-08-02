<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="assets/imgs/line logo.png">
        <title>WeFit | Staff Dashboard</title>
        <!--the bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/sass/styles.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body>
        <div>
            <a href="<?= base_url() ?>">
                <img src="/assets/imgs/line logo.png" alt="WeFit logo" style="position: fixed; top: 1em; left: 1em; height: 2em;">
            </a>
            <img src="/assets/imgs/s x a.png" alt="Satiya x Anais" style="position: fixed; right: 0.5em; height: 3em;">
        </div>
        
        <div class="container-sm" data-aos="zoom-in-up" data-aos-duration="700">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="mb-2" style="padding-top: 2em; border-bottom: .08em solid #fff5f6;">
                        <h2 class="mb-2"><small><small>Hi, <?= $firstName ?></small></small></h2>
                        <h2 class="mb-2">employee dashboard</h2>
                    </div>
                    <div class="mb-2" style="padding-bottom: 1em; border-bottom: .08em solid #fff5f6;">
                        <div>
                            <h2 class="mb-2"><small><small>Upcoming appointments</small></small></h2>
                        </div>
                        <div>
                            <!-- loop through appointments-->
                            <?php foreach ($viewAppointments as $appointment): ?>
                            <div class="card mb-3" id="appt-card" style="background-color: rgba(255, 245, 246, .01); color: #fff5f6; border: .05em solid #fff5f6 ;">
                                <!--card body holds everything and has automatic and unchangable padding (its changable but I'm not that picky and neither are you)-->
                                <div class="card-body">
                                    <!--title, change 'appointment type' to wte the appointment is actually for-->
                                    <h4 class="card-title mb-1" style="font-family: tide, sans-serif;"><small><small><?= $appointment['ServiceName'] ?></small></small></h4>
                                    <!--subtitle, in this case its for the member the appointment is for, change it accordingly-->
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .75);"><small>with: <?= $appointment['FirstName'] ?></small></p>
                                    <!--text for the appointment time slot-->
                                    <p class="card-text mb-0" style="font-family: glacial, sans-serif;"><?= $appointment['AppointmentTime'] ?></p>
                                    <!--text for appintment date-->
                                    <p class="card-text mb-1" style="font-family: glacial, sans-serif;"><?= $appointment['AppointmentDate'] ?></p>
                                    <!--this is the card footer, it has a button group (a bootstrap thing that connects two separate buttons)-->
                                    <div class="card-footer" style="border-top: .02em solid #fff5f6;">
                                        <!--here's that button group, its like a list. to add one just follow the pattern and add some id's-->
                                        <div class="btn-group mt-2" role="group" aria-label="appointment actions">
                                            <button type="button" class="btn btn-outline-light" style="font-family: glacial, sans-serif;">reschedule</button>
                                            <button type="button" class="btn btn-outline-light" style="font-family: glacial, sans-serif;">cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div><!--end of first card-->
                        <div>
                            <div class="card mb-3" id="lunch-card" style="background-color: rgba(255, 245, 246, .05); color: #fff5f6; border: .05em solid #fff5f6; border-left: .5em solid rgba(239, 50, 103, .8);">
                                <div class="card-body">
                                    <!--static title-->
                                    <h4 class="card-title mb-1" style="font-family: tide, sans-serif;"><small><small>Lunch Break</small></small></h4>
                                    <!--time of lunch break-->
                                    <p class="card-text mb-0" style="font-family: glacial, sans-serif;">11:00am - 12:00pm</p>
                                    <p class="card-text mb-1" style="font-family: glacial, sans-serif;">everyday</p>
                                </div>
                            </div>
                        </div><!--end of lunch card-->
                    </div>
                    <div class="mb-2" >
                        <div>
                            <h2 class="mb-2"><small><small>past appointments</small></small></h2>
                        </div>
                        <div>
                            <div class="card mb-3" id="past-appt-card" style="background-color: rgba(255, 245, 246, .01); color: #fff5f6; border: .05em solid #fff5f6 ;">
                                <div class="card-body">
                                    <h4 class="card-title mb-1" style="font-family: tide, sans-serif;"><small><small>Appointment type</small></small></h4>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .75);"><small>with: Amaris Mills</small></p>
                                    <p class="card-text mb-0" style="font-family: glacial, sans-serif;">8:00am - 9:00am</p>
                                    <p class="card-text mb-1" style="font-family: glacial, sans-serif;">dd/mm/yyyy</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card mb-3" id="past-appt-card" style="background-color: rgba(255, 245, 246, .01); color: #fff5f6; border: .05em solid #fff5f6 ;">
                                <div class="card-body">
                                    <h4 class="card-title mb-1" style="font-family: tide, sans-serif;"><small><small>Appointment type</small></small></h4>
                                    <p class="card-subtitle" style="font-family: glacial, sans-serif; color: rgba(255, 245, 246, .75);"><small>with: Amaris Mills</small></p>
                                    <p class="card-text mb-0" style="font-family: glacial, sans-serif;">8:00am - 9:00am</p>
                                    <p class="card-text mb-1" style="font-family: glacial, sans-serif;">dd/mm/yyyy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
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
    </body>
</html>
