<?php
include 'backend/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Business Application Form</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
</head>
<body>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Users</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>SL NO</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
						<th>Gender</th>
						<th>DATA OF BIRTH</th>
						<th>PHONE</th>
						<th>ALTERNATE PHONE NO.</th>
						<th>TALUKA</th>
						<th>DISTRICT</th>
						<th>STATE</th>
						<th>AADHAAR CARD NO.</th>
						<th>COMPLETE ADDRESS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM crud");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["gender"]; ?></td>
					<td><?php echo $row["birthday"]; ?></td>
					<td><?php echo $row["phone"]; ?></td>
					<td><?php echo $row["aphone"]; ?></td>
					<td><?php echo $row["taluka"]; ?></td>
					<td><?php echo $row["district"]; ?></td>
					<td><?php echo $row["state"]; ?></td>
					<td><?php echo $row["aadhaar"]; ?></td>
					<td><?php echo $row["address"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							data-name="<?php echo $row["name"]; ?>"
							data-email="<?php echo $row["email"]; ?>"
							data-gender="<?php echo $row["gender"]; ?>"
							data-birthday="<?php echo $row["birthday"]; ?>"
							data-phone="<?php echo $row["phone"]; ?>"
							data-aphone="<?php echo $row["aphone"]; ?>"
							data-taluka="<?php echo $row["taluka"]; ?>"
							data-district="<?php echo $row["district"]; ?>"
							data-state="<?php echo $row["state"]; ?>"
							data-aadhaar="<?php echo $row["aadhaar"]; ?>"
							data-address="<?php echo $row["address"]; ?>"
]							title="Edit">&#xE254;</i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete">&#xE872;</i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" id="email" name="email" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>DATA OF BIRTH</label>
							<input type="data" id="birthday" name="birthday" class="form-control" required>
						</div>
						<div class="form-group">
							<label>GENDER</label>
							<input type="select" id="gender" name="gender" class="form-control" required>
						</div>

						<div class="form-group">
							<label>PHONE NO.</label>
							<input type="phone" id="phone" name="phone" class="form-control" required>
						</div>

						<div class="form-group">
							<label>ALTERNATE PHONE NO. :</label>
							<input type="phone" id="aphone" name="aphone" class="form-control" required>
						</div>

						<div class="form-group">
							<label>TALUKA</label>
							<input type="text" id="taluka" name="taluka" class="form-control" required>
						</div>

                        <div class="form-group">
							<label>DISTRICT</label>
							<input type="text" id="district" name="district" class="form-control" required>
						</div>

						<div class="form-group">
							<label>STATE</label>
							<input type="text" id="state" name="state" class="form-control" required>
						</div>

						<div class="form-group">
							<label>AADHAAR CARD NO.</label>
							<input type="number" id="aadhaar" name="aadhaar" class="form-control" required>
						</div>

						<div class="form-group">
							<label>COMPLETE ADDRESS</label>
							<input type="text" id="address" name="address" class="form-control" required>
						</div>

					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="name_u" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email_u" name="email" class="form-control" required>
						</div>
											
						<div class="form-group">
							<label>Gender</label>
							<input type="select" id="gender_u" name="gender" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Data of birth</label>
							<input type="data" id="birthday_u" name="birthday" class="form-control" required>
						</div>	

						<div class="form-group">
							<label>Phone no.</label>
							<input type="number" id="phone_u" name="phone" class="form-control" required>
						</div>		

						<div class="form-group">
							<label>Alternate Phone no.</label>
							<input type="number" id="aphone_u" name="aphone" class="form-control" required>
						</div>

                        <div class="form-group">
							<label>Taluka</label>
							<input type="text" id="taluka_u" name="taluka" class="form-control" required>
						</div>	

						<div class="form-group">
							<label>District</label>
							<input type="text" id="district_u" name="district" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>State</label>
							<input type="text" id="state_u" name="state" class="form-control" required>
						</div>	

						<div class="form-group">
							<label>Aadhaar card no.</label>
							<input type="text" id="aadhaar_u" name="aadhaar" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Complete Address</label>
							<input type="text" id="address_u" name="address" class="form-control" required>
						</div>	

					</div>
					<div class="modal-footer">
						<input type="hidden" value="2" name="type" />
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>

					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>                                		                            