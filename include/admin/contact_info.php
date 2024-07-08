<!-- if(isset($_POST['contact_no']) && !empty($_POST['contact_no']) && isset($_POST['email']) && !empty($_POST['email'])){ -->
<?php 
	include 'include/config.php';
    include 'admin-nav.php';
    // session_start();
		if(isset($_SESSION['user_id']) && !empty(isset($_SESSION['user_id']))){
			if(isset($_POST['contact_no']) && !empty($_POST['contact_no']) && isset($_POST['email']) && !empty($_POST['email'])){
				if(isset($_POST['update_contact'])){
                    $showform = 
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Are you sure to update your record?</strong>
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
                    echo "something went wrong please try again later this monrning we neet ";
                }
                if(isset($_POST['userID'])){
                $email = $_POST['email'];
                $contact_no = $_POST['contact_no'];
                $sql = "update contact set contact_no = '$contact_no' and email = '$email'";
			    if(mysqli_query($connection, $sql)){
					$updatepasswordsuccess ='<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Password updated.succsessfully and we have to manage the project and we will try our best</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  		<span aria-hidden="true">&times;</span>
					</button>
		  			</div>';
				}else{
					$passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Data not inserted Try again phe th ejhl jghaogji ahgoj hau ah </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  		<span aria-hidden="true">&times;</span>
					</button>
		  			</div>';
				}					
				}
		// 		else{
		// 		$passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// 		<strong>set the password</strong>
		// 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 		  <span aria-hidden="true">&times;</span>
		// 		</button>
		// 	  </div>';
			
		// }
		 }
?>

<style>
	.form-group{
		text-align: left;
        margin-left:150px;
	}
	.form-container{

		padding: 20px 10px 20px 30px;
	}
    .fom{
        margin-left:250px;     
    }
</style>
					

					<!-- Messages -->
                    
						<form action="" method="post" class="form-group form-container" >
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email"  name="email" placeholder="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="contact_no">Contact No:</label>
								<input type="contact_no"  name="contact_no" placeholder="contact_no" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_contact">Update</button>
							</div>
						</form>
					</div>
				</div>
				<div class="fom">
					<?php if(isset($showform)) echo $showform;
					if(isset($updatepasswordsuccess)) echo $updatepasswordsuccess;
					?>	
					<?php if(isset($passwordError)) echo $passwordError; ?>
							
                      </div>
                  
<?php
        }else{
            echo "something wrong please try again later this is the most important concept in loop";
        }
	
//include 'include/footer.php'; 
 ?>