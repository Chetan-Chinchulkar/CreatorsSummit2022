<style>
	.hero-text-block{
		float: right;
		margin-right: 5vw;
		background-color: rgba(186, 29, 96, 0.7);
		backdrop-filter: blur(5px);
		border-radius: 25px;
		padding: 20px;
	}

	.countdown-box{
		font-size: 24px;
	}

</style>

<div id="hero-block" class="hero-block">
		<div id="hero-carousel" class="hero-carousel carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item-1 carousel-item active">
				</div>
				<div class="carousel-item-2 carousel-item">
				</div>
				<div class="carousel-item-3 carousel-item">
				</div>
			</div>
		</div>
		<div class="hero-block-mask"></div>
		<div class="container">
			<div class="hero-text-block">
				<h2 class="hero-heading mb-2 text-white">G Plus <br> Creators Summit</h2>
				<hr>
				<div class="hero-meta mb-3" style="font-weight:100">25 September, 2022</div>
				<div class="hero-meta mb-3" style="font-weight:100">Guwahati</div>
				<hr>

				<div class="event-countdown text-center mb-3">		   
				<div id="countdown-box" class="countdown-box text-white"></div>
				</div><!--//event-countdown-->
				<br>
				<div class="hero-cta"><a class="btn btn-primary btn-lg" style="width: 100% !important;background:white;color:#BA1D60;" href="#" target="_blank">Register Now</a></div>
				
			</div><!--//hero-text-block-->
		</div>

	</div><!--//hero-block-->
	

<script>

	/* ======= Countdown ========= */
	// set the date we're counting down to
	var target_date = new Date("Aug 15, 2022").getTime();
	
	function update_countdown() {
	// variables for time units
		var days, hours, minutes;
		
		// get tag element
		var countdown =  document.getElementById("countdown-box");
		// display day hours and mins remaining in single line
		var new_date = new Date();
		var current_date = new_date.getTime();
		var seconds_left = (target_date - current_date) / 1000;

		seconds_left--;
		days = parseInt(seconds_left / 86400);
		seconds_left = seconds_left % 86400;
		hours = parseInt(seconds_left / 3600);
		seconds_left = seconds_left % 3600;
		minutes = parseInt(seconds_left / 60);
		// seconds = parseInt(seconds_left % 60);
		
		// format countdown string + set tag value
		countdown.innerHTML = "<b>" + days + "</b> Days : <b>" + hours + "</b> Hours : <b>"+ minutes + "</b> Mins" ;
		// + seconds + " Secs";
		
		// check if we're done
		if (seconds_left <= 0) {
			countdown.innerHTML = "EXPIRED";
		}
	}

	// update the countdown every 1 second
	setInterval(update_countdown, 1000);

	// var days_span = document.createElement("SPAN");
	// days_span.className = 'days';
	// countdown.appendChild(days_span);
	// var hours_span = document.createElement("SPAN");
	// hours_span.className = 'hours';
	// countdown.appendChild(hours_span);
	// var minutes_span = document.createElement("SPAN");
	// minutes_span.className = 'minutes';
	// countdown.appendChild(minutes_span);
	
	// // update the tag with id "countdown" every 1 second
	// setInterval(function () {
	
	// 	// find the amount of "seconds" between now and target
	// 	var current_date = new Date().getTime();
	// 	var seconds_left = (target_date - current_date) / 1000;
	
	// 	// do some time calculations
	// 	days = parseInt(seconds_left / 86400);
	// 	seconds_left = seconds_left % 86400;
		
	// 	hours = parseInt(seconds_left / 3600);
	// 	seconds_left = seconds_left % 3600;
		
	// 	minutes = parseInt(seconds_left / 60);
	// 	// format countdown string + set tag value.
	// 	days_span.innerHTML =  days + 'Days';
	// 	hours_span.innerHTML =  hours + 'Hours';
	// 	minutes_span.innerHTML =  minutes + 'Mins';
	
	// }, 1000);
 
</script>
