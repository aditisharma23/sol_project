 <template>
   <form class="needs-validation" novalidate="">
      <div class="row">
         <div class="col-md-6 mb-3">
            <label for="fullName">Name <span class="text-muted">*</span></label>
            <input type="text" class="form-control" id="fullName" placeholder="" value="" required="">
            <div class="invalid-feedback">
               Valid full name is required.
            </div>
         </div>
         <div class="col-md-6 mb-3">
            <label for="PhoneNumber">Phone <span class="text-muted">*</span></label>
            <input type="text" class="form-control" id="PhoneNumber" placeholder="(905) xxx-xxxx" value="" required="">
            <div class="invalid-feedback">
               Valid Phone Number is required.
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 mb-3">
            <label for="EmailAddress">Email <span class="text-muted">*</span></label>
            <input type="email" class="form-control" id="EmailAddress" placeholder="test@example.com" value="" required="">
            <div class="invalid-feedback">
               Valid Email is required.
            </div>
         </div>
         <div class="col-md-6 mb-3">
            <label for="feedback">Type of Feedback <span class="text-muted">*</span></label>
            <select class="custom-select d-block w-100" id="feedback" required="">
               <option value="">Choose...</option>
               <option>Technical Support</option>
               <option>Billing</option>
               <option>Question</option>
               <option>Estimate</option>
               <option>Other</option>
            </select>
            <div class="invalid-feedback">
               Please select an option.
            </div>
         </div>
         <div class="col-md-12 mb-3">
            <label for="comments">Comments <span class="text-muted">*</span></label>
            <textarea class="form-control" id="comments"></textarea>
            <div class="invalid-feedback">
               Please enter details
            </div>
         </div>
      </div>
      <hr class="mb-4">
      <button class="btn btn-primary btn-lg" type="submit">Submit Feedback</button>
   
   </form>
</template>


