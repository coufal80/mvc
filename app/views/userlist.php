<table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
		<th>id</th>
			<td><?php echo $this->content[0]['id']; ?></td>
		<th>name</th>
			<td><?php echo $this->content[0]['first_name']; ?></td>
	  </tr>
	  <tr>
		<th>email</th>
			<td><?php echo $this->content[0]['email']; ?></td>
		<th>contact</th>
			<td><?php echo $this->content[0]['phone']; ?></td>
	  </tr>	
    </tbody>
</table>


<!-- <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
	<a href="#"><strong><span class="fa fa-dashboard"></span> User List</strong></a>
	<hr>		
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10">
				<h3 class="panel-title"></h3>
			</div>
			<div class="col-md-2" align="right">
				<button type="button" name="add" id="addUser" class="btn btn-success btn-xs">Add</button>
			</div>
		</div>
	</div>
	<table id="userList" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Role</th>					
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>
</div>
<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="userForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="firstname" class="control-label">First Name*</label>
						<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>							
					</div>
					<div class="form-group">
						<label for="lastname" class="control-label">Last Name</label>							
						<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">							
					</div>	   	
					<div class="form-group">
						<label for="lastname" class="control-label">Email*</label>							
						<input type="text" class="form-control"  id="email" name="email" placeholder="Email" required>							
					</div>	 
					<div class="form-group" id="passwordSection">
						<label for="lastname" class="control-label">Password*</label>							
						<input type="password" class="form-control"  id="password" name="password" placeholder="Password" required>							
					</div>
					<div class="form-group">
						<label for="gender" class="control-label">Gender</label>							
						<label class="radio-inline">
							<input type="radio" name="gender" id="male" value="male" required>Male
						</label>;
						<label class="radio-inline">
							<input type="radio" name="gender" id="female" value="female" required>Female
						</label>							
					</div>	
					<div class="form-group">
						<label for="lastname" class="control-label">Mobile</label>							
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">							
					</div>	 
					<div class="form-group">
						<label for="lastname" class="control-label">Designation</label>							
						<input type="text" class="form-control" id="designation" name="designation" placeholder="designation">							
					</div>	
					<div class="form-group">
						<label for="gender" class="control-label">Status</label>							
						<label class="radio-inline">
							<input type="radio" name="status" id="active" value="active" required>Active
						</label>;
						<label class="radio-inline">
							<input type="radio" name="status" id="pending" value="pending" required>Pending
						</label>							
					</div>
					<div class="form-group">
						<label for="user_type" class="control-label">User Type</label>							
						<label class="radio-inline">
							<input type="radio" name="user_type" id="general" value="general" required>General
						</label>;
						<label class="radio-inline">
							<input type="radio" name="user_type" id="administrator" value="administrator" required>Administrator
						</label>							
					</div>	
				</div>
				<div class="modal-footer">
					<input type="hidden" name="userid" id="userid" />
					<input type="hidden" name="action" id="action" value="updateUser" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div> -->