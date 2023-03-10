
  function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
  }
  function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
  }

///////////////الشروط والمتابعة//////////////////
let showMeNow = function(){
  let overme = document.getElementById("overme");

  overme.style.display="block";
}
function validate(){
    var chk = document.getElementById("mycheck").checked;
    var vaild = false;
    if(chk){
      vaild = true;
    }
    if(vaild){
  return showMeNow();
    }else{
  
      alert("يرجى الموافقة على الإحكام والشروط للمتابعة");
      return false;
    }
  }
  


/////////////////////////////////