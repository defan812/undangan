<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sofyan & Desy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico"/> -->
	<link href="assets/img/favicon.ico" rel="icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title mt-5">
						Wedding Invitation </br>
					</span>
					<!-- <span class="login101-form-title mt-2">
						Ahad, 17 Oktober 2021
					</span> -->
					<div class="row">
                        <div class="col-md-12 align-self-center">
                            <div class="countdown mb-4 mt-3" data-aos="fade-up">
                                <div class="text-center login101-form-title" data-aos="zoom-in">
                                    <span class="time" id="day"></span> :
                                    <span class="time" id="hour"></span> :
                                    <span class="time" id="minute"></span> :
                                    <span class="time" id="second"></span>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="text-center">
						<img src="assets/img/weding2.webp" class="img-fluid mb-3" width="65%" alt="">
					</div>

					<span class="login102-form-title mb-5">
						Bapak / Ibu / Saudara </br>
						Di Tempat
					</span>

					<div class="container-login100-form-btn mb-5">
						<div class="col-md-8">
							<a href="dashboard.php" id="bukaTombol" class="login100-form-btn">
								Buka Undangan
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>

	<script>
        // Set the date we're counting down to
        var countDownDate = new Date("Oct 17, 2021 08:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("day").innerHTML = days;
            document.getElementById("hour").innerHTML = hours;
            document.getElementById("minute").innerHTML = minutes;
            document.getElementById("second").innerHTML = seconds;

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("day").innerHTML = "00";
                document.getElementById("hour").innerHTML = "00";
                document.getElementById("minute").innerHTML = "00";
                document.getElementById("second").innerHTML = "00";
            }
        }, 1000);
    </script>
</body>
</html>