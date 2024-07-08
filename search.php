<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size {
		min-height: 0px;
		padding: 60px 0 40px 0;

	}

	.loader {
		display: none;
		width: 69px;
		height: 89px;
		position: absolute;
		top: 25%;
		left: 50%;
		padding: 2px;
		z-index: 1;
	}

	.loader .fa {
		color: #e74c3c;
		font-size: 52px !important;
	}

	.form-group {
		text-align: left;
	}

	h1 {
		color: white;
	}

	h3 {
		color: #e74c3c;
		text-align: center;
	}

	.red-bar {
		width: 25%;
	}

	span {
		display: block;
	}

	.name {
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}

	.donors_data {
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center center-aligned">
					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default"
						required>
						<option value="">Select</option>
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
				<option value="bhilai">Ahmedabad</option>
				<option value="Durg">Durg</option>
				<option value="Raipur">Raipur</option>
				<option value="Kumhari">Kumhari</option>
				<option value="Bilaspur">Bilaspur</option>
				<option value="Raigarh">Raigarh</option>
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
					<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">
		<?php
if((isset($_GET['city']) && !empty($_GET['city'])) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))){
	$city = $_GET['city'];
	$blood_group = $_GET['blood_group'];
	$sql = "select * from donate where city = '$city' or blood_group = '$blood_group'";
	$result = mysqli_query($connection, $sql);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			if($row['save_life_date']=='0'){
				echo '
				<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
				<span class="name">'.$row['name'].'</span>
				<span>'.$row['city'].'</span>
				<span>'.$row['blood_group'].'</span>
				<span>'.$row['gender'].'</span>
				<span>'.$row['email'].'</span>
				<span>'.$row['contact_no'].'</span>
				</div>
								';
			}else{

				echo '
<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
<span class="name">'.$row['name'].'</span>
<span>'.$row['city'].'</span>
<span>'.$row['blood_group'].'</span>
<span>'.$row['gender'].'</span>
<h4 class="name text-center">Donated</h4>
</div>
				';
			}
		}
	}else{
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data not found</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
	}
}
?>
		<!-- Display The Search Result -->
	</div>
</div>
<!-- <div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div> -->
<?php 

	//include footer file
	include ('include/footer.php');

?>
<script type="text/javascript">
	$(function () {
		$("#search").on('click', function () {

			var city = $("#city").val();
			var blood_group = $("#blood_group").val();

			$.ajax({
				type: 'GET',
				url: 'ajaxsearch.php',
				data: { city: city, blood_group: blood_group },
				success: function (data) {

					if (!data.error) {
						$("#data").html(data);
						console.log("hello sir");
					} else {
						console.log("an error occured");
					}
				}
			});
		});
	});
</script>