

<div class="box">
			<div class="box-title">
				<h3>
					<i class="glyphicon-user_add"></i>
						Add New User
				</h3>
			</div>
			<div class="box-content">
				<form action="<?php echo Uri::create('admin/register')?>" method="POST" class="form-horizontal form-validate" id="bb" novalidate="novalidate">
					<div class="control-group">
						<label for="username" class="control-label">Username</label>
						



						<div class="controls">
							<div class="input-append">
								<input type="text" id="username" class="username-check" autocomplete="off" data-rule-required="true" data-rule-minlength="5">
								<a href="#" class="btn add-on username-check-force"><i class="icon-refresh"></i></a>
							</div>
							<span class="help-block">
								Please enter a username
							</span>
						</div>



					</div>
					<div class="control-group">
						<label for="email" class="control-label">Email</label>
						<div class="controls">
							<input type="text" name="email" id="email" class="input-xlarge" data-rule-email="true" data-rule-required="true">
						</div>
					</div>
					<div class="control-group">
						<label for="password" class="control-label">Password</label>
						<div class="controls">
							<input type="password" name="password" id="password" class="input-xlarge" data-rule-required="true">
						</div>
					</div>
					<div class="control-group">
						<label for="confirmfield" class="control-label">Confirm password</label>
						<div class="controls">
							<input type="password" name="confirmfield" id="confirmfield" class="input-xlarge" data-rule-equalto="#password" data-rule-required="true">
						</div>
					</div>
					
					<div class="form-actions">
						<input type="submit" class="btn btn-primary" value="Submit">
						<button type="button" class="btn">Cancel</button>
					</div>
				</form>
			</div>
		</div>