<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="reg.css">
    <title>member registration</title>

   
</head>
<body>
<div class="row">
  <section class="section">
    <header>
      <h3>Membership Registration System</h3>
      <h4>Please fill your information bellow</h4>
    </header>
    <main>
      <form>
        <div class="form-item box-item">
          <input type="text" name="first_name" placeholder="First Name" data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>
        <div class="form-item box-item">
          <input type="text" name="last_name" placeholder="Last Name" data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>
        <div class="form-item box-item">
          <input type="email" name="email" placeholder="Email" data-email data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
          <small class="errorEmail"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label"> 
              <label class="label">Gender</label>
            </div>
            <div class="form-item"> 
              <input id="Male" type="radio" name="gender" value="Male" data-once>
              <label for="Male">Male</label>
            </div>
            <div class="form-item"> 
              <input id="Female" type="radio" name="gender" value="Female" data-once>
              <label for="Female">Female</label>
            </div>
          </div>
          <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
          </div>
          <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
        </div>
        </div>
        <div class="form-item box-item">
          <input type="text" name="phone" placeholder="Phone" data-required data-number data-count="10">
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
          <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
          <small class="errorChar"><i class="fa fa-asterisk" aria-hidden="true"></i> must be 10 digits</small>
        </div>
        <div class="form-item-double box-item">
          <div class="form-item ">
            <input type="text" name="location" placeholder="Location" data-required data-number>
            <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
            <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
          </div>
          <div class="form-item">
            <input type="text" name="region" placeholder="Region" data-required data-number>
            <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
            <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
          </div>
        <div class="form-item">
          <span id="submit" class="submit">Submit</span>
        </div>
      </form>
    </main>
    
    <i class="wave"></i>
  </section>
</div>
</body>
</html>