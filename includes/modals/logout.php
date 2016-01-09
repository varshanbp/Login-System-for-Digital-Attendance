<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<script>
function logout() {
  up_url=window.location.href;
  if(up_url.match("#")) {
    pr_url=up_url.replace("#","");
    pr_url=pr_url+"&action=lout";
  }
  else
    pr_url=up_url+"&action=lout";
  window.location.assign(pr_url);
}
</script>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-closebtn">x</span>
      <h2>Are You Sure and Want to Logout Now ?</h2>
    </header>
    <div class="w3-container">
      <div style='text-align: center;'><i class='material-icons w3-spin w3-jumbo'>refresh</i></div>
      <p style='text-align: center;'>NOTE : You will be logged out automatically after 30 Minutes of Login.</p>
      <button class="w3-btn w3-red" onclick="logout()">Logout Now</button>
      <button class="w3-btn w3-red" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal Footer</p>
    </footer>
  </div>
</div>
