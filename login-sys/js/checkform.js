function nmCheck() {
  if(document.getElementById("uname").value=="")
    document.getElementById("nmerror").innerHTML = "Please a Enter a Valid Username";
  else
    document.getElementById("nmerror").innerHTML = "";
}

function pwCheck(){
  if(document.getElementById("pwd").value.search(/^\d{6}$/))
    document.getElementById("pwerror").innerHTML = "Please Enter your 6 Digit Numerical Pin";
  else
    document.getElementById("pwerror").innerHTML = "";
}

function fCheck(){
  if(document.getElementById("uname").value=="Enter Username"||document.getElementById("uname").value=="a"){
    alert("No Value");
    return false;
  }
}
