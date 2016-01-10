<!DOCTYPE html>
<html>
<title>DA Data Processing :: Digtal Attendance by JSSV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">

<!-- ADD NEW STUDENT - Modal 2 - START -->
<div id="id02" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id02').style.display='none'"
      class="w3-closebtn">x</span>
      <h2>Enter Details to Add New Student</h2>
    </header>
    <div class="w3-container w3-padding-32">
      <div style="text-align: center;">
        <i class="material-icons w3-xxxlarge">add_circle_outline</i><i class="material-icons w3-xxxlarge">account_circle</i>
        <!-- FORM - START -->
          <form action="../digi-attend/processor.php" method="POST" class="w3-container">
            <p style="text-align: left;"><label>First Name*</label>
            <input class="w3-input" type="text" placeholder="Please Enter as per Capitalization" required></p>

            <p style="text-align: left;"><label>Last Name*</label>
            <input class="w3-input" type="text" name="ln" placeholder="Please Enter as per Capitalization" required></p>

            <p style="text-align: left;"><label>DOB*</label>
            <input class="w3-input" type="date" required></p>

            <p style="text-align: left;"><label>Email</label>
            <input class="w3-input" type="email" placeholder="xxxxxxx@xxx.xx"></p>

            <p style="text-align: left;"><label>Phone Number</label>
            <input class="w3-input" type="text" placeholder="Dont Use +, Add Country Code. 91 for India" maxlength="15" size="15"></p>

            <p><input class="w3-btn w3-light-green" type="submit">
            <input class="w3-btn w3-red" type="reset">
            <button class="w3-btn w3-green" onclick="document.getElementById('id02').style.display='none'">Cancel</button></p>
          </form>
        <!-- FORM - END -->
        <!--button class="w3-btn w3-red" onclick="logout()">Logout Now</button-->
      </div>
    </div>
    <footer class="w3-container w3-teal">
      <p style="text-align:center;">&copy; 2016 JSSV under Attribution Assurance License. All rights reserved</p>
    </footer>
  </div>
</div>
<!-- ADD NEW STUDENT - Modal 2 - END -->

<!-- ADD NEW STUDENT - Modal 3 - START -->
<div id="id03" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id03').style.display='none'"
      class="w3-closebtn">x</span>
      <h2>Are You Sure and Want to Logout Now ?</h2>
    </header>
    <div class="w3-container w3-padding-32">
      <div style='text-align: center;'><i class='material-icons w3-jumbo'>power_settings_new</i>
      <p style='text-align: center;'>NOTE : You will be logged out automatically after 30 Minutes of Login.</p>
      <button class="w3-btn w3-red" onclick="logout()">Logout Now</button>
      <button class="w3-btn w3-green" onclick="document.getElementById('id03').style.display='none'">Cancel</button>
      </div>
    </div>
    <footer class="w3-container w3-teal">
      <p style="text-align:center;">&copy; 2016 JSSV under Attribution Assurance License. All rights reserved</p>
    </footer>
  </div>
</div>
<!-- ADD NEW STUDENT - Modal 2 - END -->
