<template>
<div class="card-body p-rem-b">
	   <form class="needs-validation" novalidate>
	      <div class="form-group row">
	         <label for="OldPassword" class="col-12 col-sm-3 col-form-label text-sm-right">Old Password<span class="required">*</span></label>
	         <div class="col-12 col-sm-8 col-lg-6">
	            <input type="text" required="" id="OldPassword" placeholder="First Name" class="form-control">
	            <div class="invalid-feedback">
	               Please enter your old password.
	            </div>
	         </div>
	      </div>
	      <div class="form-group row">
	         <label for="NewPassword" class="col-12 col-sm-3 col-form-label text-sm-right">New Password<span class="required">*</span></label>
	         <div class="col-12 col-sm-8 col-lg-6">
	            <input type="password" required="" id="Newpassword" placeholder="Last Name" class="form-control">
	            <!--ENTER PASSWORD STRENGTH METER-->
	            <div class="invalid-feedback">
	               Please provide a new password.
	            </div>
	         </div>
	      </div>
	        <div class="form-group row">
	         <label for="Newpasswordconfirm" class="col-12 col-sm-3 col-form-label text-sm-right">Repeat Password<span class="required">*</span></label>
	         <div class="col-12 col-sm-8 col-lg-6">
	            <input type="password" required="" id="Newpasswordconfirm" data-parsley-equalto="#Newpassword" placeholder="" class="form-control">
	            <div class="invalid-feedback">
	               This field does not match the previous password entered.
	            </div>
	         </div>
	      </div>
	      <div class="form group row">
	         <label class="col-12 col-sm-3 col-form-label text-sm-right">&nbsp;</label>
	         <div class="col-12 col-sm-8 col-lg-6">
	            <button class="btn btn-primary" type="submit">Update Password</button>
	         </div>
	      </div>
	</form>
</div>
</template>