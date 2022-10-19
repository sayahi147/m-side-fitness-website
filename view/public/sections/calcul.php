	<!-- Calculate Section Two -->
	<section class="calculate-section">

		<div class="auto-container">

			<div class="row clearfix">

				

				<!-- Form Column -->

				<div class="form-column col-lg-6 col-md-12 col-sm-12">

					<div class="inner-column">

						<!-- Sec Title -->

						<div class="sec-title">

							<div class="title">Body mass index</div>

							<h2>What is your <br> Bmi</h2>

						</div>

						

						<!-- Default Form -->

						<div class="default-form">

							

							<!-- Default Form -->

							<form method="post" action="https://expert-themes.com/html/gym/contact.html">

								<div class="row clearfix">

								

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">

										<input type="text" name="cm" placeholder="185 Cm" required id="num1">

									</div>

									

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">

										<input type="text" name="weight" placeholder="Weight / kg" required id="num2">

									</div>

									

									<div class="col-lg-6 col-md-6 col-sm-12 form-group">

										<input type="text" name="age" placeholder="Age" required id="num3">
                                        
									</div>

									

									<div class="form-group col-lg-6 col-md-6 col-sm-12">

										<select class="custom-select-box">

											<option>Gender</option>

											<option>Male</option>

											<option>Female</option>

										</select>

									</div>

									

									<div class="form-group col-lg-12 col-md-12 col-sm-12">

										<select class="custom-select-box">

											<option>Select an activity factor</option>

											<option>no exercise</option>

											<option>light exercise/sports 1-3 days/week</option>
											<option>moderate exercise/sports 3-5 days/week</option>
											<option>hard exercise/sports 6-7 days/week</option>

										</select>

									</div>

									

									<div class="form-group col-lg-12 col-md-12 col-sm-12">

										<div class="btn-two-outer"><button class="theme-btn btn-style-two" type="button" onclick="calc()"><span class="txt">Calculate</span></button></div>
                                        <input type="text" placeholder="Your BMI" class="col-lg-6 col-md-6 col-sm-12 form-group" id="bmi" readonly="readonly"/>

									</div>

									

								</div>

							</form>

							

							<!--End Default Form -->

						</div>

						

					</div>

				</div>

				

				<!-- Info Column -->

				<div class="info-column col-lg-6 col-md-12 col-sm-12">

					<div class="inner-column">

						

						<div class="table-outer">

							<div class="table-boxed">

								<div class="table-content">

									<!-- Title -->

									<div class="title clearfix">

										<div class="col">BMI</div>

										<div class="col">WEIGHT STATUS</div>

									</div>

									<ul>

										<li class="clearfix"><span>Below 18.5</span>Underweight</li>

										<li class="clearfix"><span>18.5-24.9</span>Healthy</li>

										<li class="clearfix"><span>25.0-29.9</span>Overweight</li>

										<li class="clearfix"><span>30.0-and Above</span>Obese</li>

									</ul>

								</div>

							</div>

							<div class="info-list">

								<div class="table-name"><span>BMR</span> - Metabolic Rate</div>

								<div class="table-name"><span>BMI</span> - Body Mass Index</div>

							</div>

						</div>

						

					</div>

				</div>

				

			</div>

		</div>

	</section>
<script>
    function calc() {
        let num1 = Number(document.querySelector("#num1").value)/100;
        let num2 = Number(document.querySelector("#num2").value);
        let bmi = num2 /(num1*num1);
		bmi=parseFloat(bmi).toFixed(2)
        document.getElementById("bmi").value = bmi;
    }
</script>
	<!-- End Calculate Section Two -->