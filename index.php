<?php 

	//include header file
	include ('include/header.php');
	

?>


<div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">Donate the blood, save the life</h1>
				<p class="text-center">Donate the blood to help the others.</p>
			</div>


			<h1 class="text-center">Search The Donors</h1>
			<hr class="white-bar text-center">

			<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center justify-content-center">

					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default"
						required>
						<option value="">-- Select --</option>
						<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup>
				<option value="Visakhapatnam">Visakhapatnam</option>
				<option value="Vijayawada">Vijayawada</option>
				<option value="Guntur">Guntur</option>
				<option value="Nellore">Nellore</option>
				<option value="Kurnool">Kurnool</option>
				<!-- Add more cities from Andhra Pradesh here -->

				<optgroup title="Assam" label="&raquo; Assam"></optgroup>
				<option value="Guwahati">Guwahati</option>
				<option value="Silchar">Silchar</option>
				<option value="Dibrugarh">Dibrugarh</option>
				<option value="Jorhat">Jorhat</option>
				<option value="Nagaon">Nagaon</option>
				<!-- Add more cities from Assam here -->
				<!-- Andhra Pradesh -->
				<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup>
				<option value="Visakhapatnam">Visakhapatnam</option>
				<option value="Vijayawada">Vijayawada</option>
				<option value="Guntur">Guntur</option>
				<option value="Nellore">Nellore</option>
				<option value="Kurnool">Kurnool</option>
				<option value="Kakinada">Kakinada</option>
				<option value="Rajahmundry">Rajahmundry</option>
				<option value="Tirupati">Tirupati</option>
				<option value="Kadapa">Kadapa</option>
				<option value="Anantapur">Anantapur</option>
				<option value="Vizianagaram">Vizianagaram</option>
				<option value="Eluru">Eluru</option>
				<option value="Ongole">Ongole</option>

				<!-- Assam -->
				<optgroup title="Assam" label="&raquo; Assam"></optgroup>
				<option value="Guwahati">Guwahati</option>
				<option value="Silchar">Silchar</option>
				<option value="Dibrugarh">Dibrugarh</option>
				<option value="Jorhat">Jorhat</option>
				<option value="Nagaon">Nagaon</option>
				<option value="Tezpur">Tezpur</option>
				<option value="Sivasagar">Sivasagar</option>
				<option value="Tinsukia">Tinsukia</option>
				<option value="Goalpara">Goalpara</option>
				<option value="Karimganj">Karimganj</option>
				<option value="Hailakandi">Hailakandi</option>
				<option value="Diphu">Diphu</option>

				<!-- Bihar -->
				<optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
				<option value="Patna">Patna</option>
				<option value="Gaya">Gaya</option>
				<option value="Bhagalpur">Bhagalpur</option>
				<option value="Muzaffarpur">Muzaffarpur</option>
				<option value="Darbhanga">Darbhanga</option>
				<option value="Arrah">Arrah</option>
				<option value="Begusarai">Begusarai</option>
				<option value="Chhapra">Chhapra</option>
				<option value="Katihar">Katihar</option>
				<option value="Purnia">Purnia</option>
				<option value="Bihar Sharif">Bihar Sharif</option>
				<option value="Hajipur">Hajipur</option>
				<option value="Siwan">Siwan</option>

				<!-- Gujarat -->
				<optgroup title="Gujarat" label="&raquo; Gujarat"></optgroup>
				<option value="Ahmedabad">Ahmedabad</option>
				<option value="Surat">Surat</option>
				<option value="Vadodara">Vadodara</option>
				<option value="Rajkot">Rajkot</option>
				<option value="Bhavnagar">Bhavnagar</option>
				<option value="Jamnagar">Jamnagar</option>
				<option value="Junagadh">Junagadh</option>
				<option value="Gandhinagar">Gandhinagar</option>
				<option value="Anand">Anand</option>
				<option value="Bharuch">Bharuch</option>

				<optgroup title="Chhattisgarh" label="&raquo; chhattisgarh"></optgroup>
				<option value="Bhilai">Bhilai</option>
				<option value="Durg">Durg</option>
				<option value="Raipur">Raipur</option>
				<option value="Kumhari">Kumhari</option>
				<option value="Bilaspur">Bilaspur</option>
				<option value="Raigarh">Raigarh</option>

				<!-- Add more states and cities here -->


					</select>
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
						class="form-control demo-default text-center margin10px">

						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>

					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="submit" class="btn btn-lg btn-danger">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
			<hr class="white-bar">
			<p class="text-center pera-text">
			Donating blood can help other people to maintain good health or allow them to stay alive. There may also be benefits of blood donation for the donor.
			 However, a person may wish to discuss the possible risks before giving blood.
			 For many people, blood donation offers many health benefits with few risks.
			  The strict regulation of blood banks means that a donor can give their blood or plasma safely in the United States.
			</p>
			<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
		</div>
	</div>
</div>
<!-- end doante section -->


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vission</h3>
				<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
				Donatetheblood Center will be recognized for saving and improving lives in our community .We believe we must always be open and honest in 
				each of our personal and corporate relationships. We will adhere to the policies, 
				 and guidelines of all applicable federal, state and local agencies

				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
				We will increase our active donor base and collection levels.
We will conduct regular in-service training, evaluation and continuous education programs to improve the professional skill of our personnel.
We will manage our resources effectively and responsibly.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
				To enhance the well being of patients in our service area by assuring a reliable and economical supply of 
				the safest possible blood, by providing innovative hemotherapy services, 
				and by promoting research and education programs in transfusion medicine.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>