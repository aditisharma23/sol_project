<template>
	<div class="card-body p-rem-b">
   <h3>Credit Card Information</h3>
   <p>Manage your credit card information.</p>
   <form class="needs-validation" novalidate>
      <div class="form-group row">
         <label for="CreditNumber" class="col-12 col-sm-3 col-form-label text-sm-right">Credit Card Number<br> <small class="text-muted">9999 9999 9999 9999</small></label>
         <div class="col-12 col-sm-8 col-lg-6">
            <input type="text" class="form-control cc-inputmask" id="cc-mask" im-insert="true">
            <div class="invalid-feedback">
               Please enter your credit card number.
            </div>
         </div>
      </div>
      <div class="form-group row">
         <label for="CardHolder" class="col-12 col-sm-3 col-form-label text-sm-right">Card Holder Name<span class="required">*</span></label>
         <div class="col-12 col-sm-8 col-lg-6">
            <input type="text" required="" id="CardHolder" placeholder="Card Holder Name" class="form-control">
            <!--ENTER PASSWORD STRENGTH METER-->
            <div class="invalid-feedback">
               Please provide a valid cardholder Name.
            </div>
         </div>
      </div>
      <div class="form-group row">
         <label for="ExpiryDate" class="col-12 col-sm-3 col-form-label text-sm-right">Expiry Date<span class="required">*</span></label>
         <div class="col-12 col-sm-8 col-lg-6">
            <input type="text" required="" id="ExpiryDate" placeholder="mm/yy" class="form-control">
            <!--ENTER PASSWORD STRENGTH METER-->
            <div class="invalid-feedback">
               Please provide a valid expiry date.
            </div>
         </div>
      </div>
      <div class="form-group row">
         <label for="SecurityCode" class="col-12 col-sm-3 col-form-label text-sm-right">Security Code<span class="required">*</span></label>
         <div class="col-12 col-sm-8 col-lg-6">
            <input type="text" required="" id="SecurityCode" placeholder="xxx" class="form-control">
            <!--ENTER PASSWORD STRENGTH METER-->
            <div class="invalid-feedback">
               Please provide a valid security code.
            </div>
         </div>
      </div>
      <div class="form group row">
         <label class="col-12 col-sm-3 col-form-label text-sm-right">&nbsp;</label>
         <div class="col-12 col-sm-8 col-lg-6">
            <button class="btn btn-primary" type="submit">Update Credit Card</button>
         </div>
      </div>
</form>
</div>

</template>