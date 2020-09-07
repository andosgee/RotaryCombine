<?php include "inc/add_mem_script.php";?>
<!-- Form to add a user -->


<form method="POST" name="add_member_form" class="form column">
  <label for="add_mem_name" class="form__label">Name</label>
  <div class="row">
    <input name="add_mem_name_f" class="form__input" placeholder="First Name" required>
    <input name="add_mem_name_s" class="form__input" placeholder="Surname" required>
  </div>

  <label for="add_mem_email" class="form__label">Email</label>
  <div class="row">
    <input type="email" name="add_mem_email" class="form__input" placeholder="sample@sample.com" required>
  </div>

  <label for="add_mem_phone" class="form__label">Phone Number</label>
  <div class="row">
    <input type="tel" name="add_mem_phone" class="form__input" placeholder="123456789" required>
  </div>

  <label for="add_mem_username" class="form__label">Username</label>
  <div class="row">
    <input name="add_mem_username" class="form__input" placeholder="Username" required>
  </div>

  <label for="add_mem_address" class="form__label">Address</label>
  <div class="column">
    <div class="row">
      <input name="add_mem_add_num" class="form__input" placeholder="Street Number">
      <input name="add_mem_add_unit" class="form__input" placeholder="Unit">
      <input name="add_mem_add_streName" class="form__input" placeholder="Street Name">
    </div>

    <input name="add_mem_add_city" class="form__input" placeholder="City">

    <div class="row">
      <input name="add_mem_add_sub" class="form__input" placeholder="Suburb">
      <input type="number" name="add_mem_add_postcode" class="form__input" placeholder="Post Code">
    </div>
  </div>

  <button name="add_mem_sub" type="submit" class="form__submit">Add User</button>
</form>

<?php include "inc/new_user_info.php"; ?>
