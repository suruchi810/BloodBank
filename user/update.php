<?php 
	include 'include/header.php';
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
	$user = $_SESSION['user_id'];
	$sql = "SELECT * FROM donate where id = '$user'";
	$result = mysqli_query($connection,$sql);
	while ($row = mysqli_fetch_assoc($result)) {
		$userID = $row['id'];
		$name = $row['name'];
		$blood_group = $row['blood_group'];
		$city = $row['city'];
		$gender = $row['gender'];
		$date = $row['dob'];
		$contact_no = $row['contact_no'];
		$email = $row['email'];
		$dbPassword = $row['password'];
		} 	
		if(isset($_POST['submit'])){
			  if(isset($_POST['name']) && !empty($_POST['name'])){
					  $name = $_POST['name'];
				  }else{
				  $nameError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Please fill the name field</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			  }
			  if(isset($_POST['gender']) && !empty($_POST['gender'])){
				  $gender = $_POST['gender'];
			  }else{
				  $genderError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>select your gender</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			  }
			  if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
				  $blood_group = $_POST['blood_group'];
			  }else{
				  $blood_groupError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>please select blood group</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			  }
			  if(isset($_POST['city']) && !empty($_POST['city'])){
				  $city = $_POST['city'];
			  }else{
				  $cityError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>please select city</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			  }
			  if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
				  $contact_no = $_POST['contact_no'];
			  }else{
				  $contact_noError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>please enter your contact no</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			  }
			  if(isset($_POST['dob']) && !empty($_POST['dob'])){
				  $dob = $_POST['dob'];
			  }else{
				  $dobError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>please enter your dob.</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			  }
			  if(isset($_POST['email']) && !empty($_POST['email'])){
				$email = $_POST['email']; 
			  }else{
				  $emailError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>please enter a valid email</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			  }
	  
			  ////////////////insertion into database//////////////////
			  
	  
	  
			
			  if(isset($name) && isset($email) && isset($date) && isset($gender) && isset($city) && isset($contact_no) || isset($blood_group)){
				$user = $_SESSION['user_id'];
				  $sql = "update `donate` set `name`= '$name',`email`='$email', `gender`= '$gender', `city`='$city', `dob`='$dob', `contact_no`= '$contact_no', `blood_group`= '$blood_group' where id = '$user'";
				  if(mysqli_query($connection, $sql)){
					$updateSuccess ='<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Password updated.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
?>
					<script>
						function myFunction(){
							location.reload();
						}
					</script>
	
				 <?php  }
				  else{
					  $updateError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Data not updated.Please try again.</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			  }
			  }else{
				$updateError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Data not updated.Please try again.</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			  }
		  }
		  if(isset($_POST['update_pass'])){

			if(isset($_POST['old_password']) && !empty($_POST['old_password']) && isset($_POST['new_password']) && !empty($_POST['new_password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])){
				

					$oldpassword = $_POST['old_password'];
					if($oldpassword == $dbPassword){
						if(strlen($_POST['new_password'])>=6){
						   if($_POST['new_password'] == $_POST['c_password']){
							$password = $_POST['new_password'];
						   }
						   else{
							 $passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
					         <strong>passwords are not same</strong>
					         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					         <span aria-hidden="true">&times;</span>
					         </button>
				             </div>';
							}
					    }else{
							$passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>the password should consists of 6 haracters</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>';
						}
					}else{
						$passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Please enter valid password</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>';
					}
				}else{
				$passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>set the password</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
			if(isset($password)){
				$sql = "update donate set password = '$password' where id = '$userID'";
			if(mysqli_query($connection, $sql)){
				$updatepasswordsuccess ='<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Password updated.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
				?>
					<script>
						function myFunction(){
							location.reload();
						}
					</script>
	
				 <?php 

			}else{
				$passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data not inserted Try again</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
			}
			}
		  }
		  if(isset($_POST['delete_account'])){
			$account_password = $_POST['account_password'];
			
			if(isset($_POST['account_password']) && !empty($_POST['account_password'])){
				if($account_password == $dbPassword){
					$showform = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Are you sure you want to delete you account?</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form target="" method="post">
			<br>
			<input type="hidden" name="userID" value="'.$_SESSION['user_id'].'">
			<button type="submit" name="delete" class="btn btn-danger">Yes</button>

			<button type="button" class="btn btn-info" data-dismiss="alert">
			<span aria-hidden="true">Oops! No </span>
			</button>      
		</form>
 		</div>';
				}else{
					$deleteAccountError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please enter valid password.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
				}
				
			}else{
				$deleteAccountError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please enter your password.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
			}
		  }
		  if(isset($_POST['userID'])){
			$sql = "DELETE FROM donate where id = '$userID'";
			echo $userID;
			if(mysqli_query($connection, $sql)){
				header("location:logout.php");
			}else{
				$deletesubmitError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Account not deleted.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		  }
		  include 'include/sidebar.php';
?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	
				<?php 
					if(isset($updateError))echo $updateError;
					if(isset($updateSuccess)) echo $updateSuccess;
				?>

					<form class="form-group" action="" method="post" novalidate="">
				<div class="form-group">
					<label for="fullname">Full Name</label>
					<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+"
						title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name)) echo $name; ?>">
				</div><!--full name-->
				<?php if(isset($nameError)) echo $nameError; ?>
				<div class="form-group">
					<label for="name">Blood Group</label><br>
					<select class="form-control demo-default" id="blood_group" name="blood_group" required>
						<option value="">---Select Your Blood Group---</option>
						<?php if(isset($blood_group)) echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>'?>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O+</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
				</div><!--End form-group-->
				<?php
						if(isset($blood_groupError)) echo $blood_groupError;
					?>
				<div class="form-group">
					<label for="gender">Gender</label><br>
					Male<input type="radio" name="gender" id="gender" value="Male"
						style="margin-left:10px; margin-right:10px;" checked>
					Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">
				</div><!--gender-->
				<?php
						if(isset($genderError)) echo $genderError;
					?>
				<div class="form-inline">
					<label for="name">Date of Birth</label><br>
					<input type="date" class="ml-4" name="dob" id="dob" value="<?php if(isset($date)) echo $date; ?>">
					
					<!-- <select class="form-control demo-default" id="date" name="date" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select> -->
				</div><!--End form-group-->
				<?php
						if(isset($dobError)) echo $dobError;
					?>
				<div class="form-group">
					<label for="fullname">Email</label>
					<input type="text" name="email" id="email" placeholder="Email"
						pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"
						class="form-control" value="<?php if(isset($email)) echo $email; ?>">
				</div>
				<?php
						if(isset($emailError)) echo $emailError;
					?>
				<div class="form-group">
					<label for="contact_no">Contact No</label>
					<input type="text" name="contact_no" placeholder="91+******" class="form-control Contact"
						required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10" value="<?php if(isset($contact_no)) echo $contact_no; ?>">
				</div><!--End form-group-->
				<?php
						if(isset($contact_noError)) echo $contact_noError;
					?>
				<div class="form-group">
					<label for="city">City</label>
					<select name="city" id="city" class="form-control demo-default" required>
						<option value="">-- Select --</option>
						<?php if(isset($city)) echo '<option selected="" value="'.$city.'">'.$city.'</option>'?>
						
						<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup>
						<option value="Visakhapatnam">Visakhapatnam</option>
						<option value="Vijayawada">Vijayawada</option>
						<option value="Guntur">Guntur</option>
						<option value="Nellore">Nellore</option>
						<option value="Kurnool">Kurnool</option>
						<option value="Kadapa">Kadapa</option>
						<option value="Rajahmundry">Rajahmundry</option>
						<option value="Tirupati">Tirupati</option>
						<option value="Vizianagaram">Vizianagaram</option>
						<option value="Eluru">Eluru</option>
						</optgroup>
						<optgroup title="Arunachal Pradesh" label="&raquo; Arunachal Pradesh"></optgroup>
						<option value="Itanagar">Itanagar</option>
						<option value="Naharlagun">Naharlagun</option>
						<option value="Pasighat">Pasighat</option>
						<option value="Tawang">Tawang</option>
						<option value="Ziro">Ziro</option>
						<option value="Bomdila">Bomdila</option>
						<option value="Roing">Roing</option>
						<option value="Tezu">Tezu</option>
						<option value="Along">Along</option>
						<option value="Daporijo">Daporijo</option>
						</optgroup>
						<optgroup title="Assam" label="&raquo; Assam"></optgroup>
						<option value="Guwahati">Guwahati</option>
						<option value="Silchar">Silchar</option>
						<option value="Dibrugarh">Dibrugarh</option>
						<option value="Jorhat">Jorhat</option>
						<option value="Nagaon">Nagaon</option>
						<option value="Tinsukia">Tinsukia</option>
						<option value="Tezpur">Tezpur</option>
						<option value="Bongaigaon">Bongaigaon</option>
						<option value="Goalpara">Goalpara</option>
						<option value="Lakhimpur">Lakhimpur</option>
						</optgroup>
						<optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
						<option value="Patna">Patna</option>
						<option value="Gaya">Gaya</option>
						<option value="Bhagalpur">Bhagalpur</option>
						<option value="Muzaffarpur">Muzaffarpur</option>
						<option value="Darbhanga">Darbhanga</option>
						<option value="Arrah">Arrah</option>
						<option value="Begusarai">Begusarai</option>
						<option value="Chapra">Chapra</option>
						<option value="Purnia">Purnia</option>
						<option value="Katihar">Katihar</option>
						</optgroup>
						<optgroup title="Chhattisgarh" label="&raquo; Chhattisgarh"></optgroup>
					</select>
				</div><!--city end-->
				
				<?php
						if(isset($cityError)) echo $cityError;
					?>
				<div class="form-group">
					<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned"
						style="margin-top: 20px;">Update</button>
				</div>
			</form>
	
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<?php if(isset($passwordError)) echo $passwordError;?>
					<?php if(isset($updatepasswordsuccess)) echo $updatepasswordsuccess;?>
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password"  name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password"  name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password"  name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					<?php if(isset($deleteAccountError)) echo $deleteAccountError;
					if(isset($showform)) echo $showform; 
					if(isset($deletesubmitError)) echo $deletesubmitError;?>
					<!-- Display Message -->

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword"
								>Password</label>
								<input type="password" name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
}else{
	header("location: ../index.php");
}
include 'include/footer.php'; 
 ?>