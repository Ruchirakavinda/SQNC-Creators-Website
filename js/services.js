function long()
{
    document.getElementById("line").style.width="50%";
    document.getElementById("line").style.transition="1s";
}
function longout()
{
    document.getElementById("line").style.width="10%";
    document.getElementById("line").style.transition="1s";
}
window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
  };
  
  function mdl1(){ 
    $(document).ready(function(){
        $("#myModal1x").modal('show');
    });}
  
  
  
  function mdl2(){ 
    $(document).ready(function(){
        $("#myModal2x").modal('show');
    });}
    
    
  
  function mdl3(){ 
    $(document).ready(function(){
        $("#myModal3x").modal('show');
    });}

function mdl4(){
    $(document).ready(function(){$("#myModal4x").modal('show');});
}
