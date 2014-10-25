var error=0;
function PasswordChk() {
var tab="                   azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789_-$&#@";
var login=document.getElementById('login').value;
var password=document.getElementById('password').value;
var nblog=login.length;
var nbpass=password.length;
var n=Math.max(nblog,nbpass);
sum=1;
for (i=0;i<n;i++) {
  var index1=tab.indexOf(login.substring(i,i+1))+10;
  var index2=tab.indexOf(password.substring(i,i+1))+10;
  sum=sum+(index1*n*(i+1))*(index2*(i+1)*(i+1));
}

if (sum==45846481) {
        window.location="purchase"+index1+index2+"check.php";
}

else {
    error++;
    alert("Wrong login or password");
    if (error>2) {
      alert("You made three incorrect attempts, you will be redirected.");
      window.location="index.php";
    }
  }
}
function Password() {
  PasswordChk()
  }