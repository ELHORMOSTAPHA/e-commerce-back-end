<div class="kt-modal" data-kt-modal="true" id="add_user">
   <div class="kt-modal-content max-w-[600px] top-[15%]">
      <div class="kt-modal-header py-4 px-5">
         <h5 class="modal-title">Add New User</h5>
         <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-dim shrink-0" data-kt-modal-dismiss="true">
            <i class="ki-filled ki-cross"></i>
         </button>
      </div>
      <div class="kt-modal-body p-5">
         <form id="add_user_form" method="POST" >
            <div class="mb-4">
               <label for="first_name" class="form-label">First Name</label>
               <input type="text" class="kt-input" id="first_name" name="first_name"  />
            </div>
            <div class="mb-4">
               <label for="last_name" class="form-label">Last Name</label>
               <input type="text" class="kt-input" id="last_name" name="last_name"  />
            </div>
            <div class="mb-4">
               <label for="phone_number" class="form-label">Phone Number</label>
               <input type="tel" class="kt-input" id="phone_number" name="phone_number"  />
            </div>
            <div class="mb-4">
               <label for="profile_image" class="form-label">Profile Image</label>
               <input type="file" class="kt-input" id="profile_image" name="profile_image" accept="image/*"  />
            </div>
            <div class="modal-footer">
               <button type="submit" class="kt-btn kt-btn-primary"  data-kt-modal-dismiss="true">Add User</button>
               <button type="button" class="kt-btn kt-btn-secondary" data-kt-modal-dismiss="true">Cancel</button>
            </div>
         </form>
      </div>
   </div>
</div>