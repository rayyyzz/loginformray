<?php
    $title='Index';
    require_once 'includes/header.php'
?>
<h1 class="text-center"> REGISTRATION FOR IT CONFERENCE</h1>

<form class="needs-validation" novalidate>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01"></label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name"required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02"></label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
</div>
<div class="col-md-4 mb-3">
  <label for="validationCustom02"></label>
  <input type="date" class="form-control" id="validationCustom02" placeholder="Birthday"required>
</div>
<div class="col-md-4 mb-3">
      <label for="validationCustom02"></label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Specialty"required>
      <div class="valid-feedback">
        Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
      <label for="validationCustom02"></label>
      <input type="email" class="form-control" id="validationCustom02" placeholder="Email"required>
      <div class="valid-feedback">
        Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
      <label for="validationCustom02"></label>
      <input type="number" class="form-control" id="validationCustom02" placeholder="Number"required>
      <div class="valid-feedback">
        Looks good!
</div>
</div>
<?php require_once 'includes/footer.php'?>