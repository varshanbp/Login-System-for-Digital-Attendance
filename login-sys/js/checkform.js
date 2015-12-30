function nmCheck() {
  if(document.getElementById("uname").value=="")
    document.getElementById("nmerror").innerHTML = "No Value";
  else
    document.getElementById("nmerror").innerHTML = "";
}

function pwCheck(){
  if(document.getElementById("pwd").value.search(/^\d{6}$/))
    document.getElementById("pwerror").innerHTML = "Please Enter your 6 Digit Pin";
  else
    document.getElementById("pwerror").innerHTML = "";
}
