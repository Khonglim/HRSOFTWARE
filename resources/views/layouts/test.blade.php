<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Prompt">
<style>
body {
  font-family: 'Prompt', sans-serif;
 
}
</style>
</head>
<body>
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/') }}">กลับหน้าแรก</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">แบบทดสอบ</a></li>
                  
                    
                  </ul>
                </div>
              </nav>
                


        <main>
                @yield('content')
            </main>

            <script src="{{ asset('js/jquery.simple.timer.js') }}" defer></script>
            <style>
                .jst-hours {
                  float: left;
                }
                .jst-minutes {
                  float: left;
                }
                .jst-seconds {
                  float: left;
                }
                .jst-clearDiv {
                  clear: both;
                }
                  </style>
                
                  <!-- แก้ไขรูปแบบของกรอบข้อความได้ที่ด้านล่างนี้ครับ -->
                <style type="text/css">
                  #topbar{
                  position:absolute;
                  border: 1px solid black;
                  padding: 2px;
                  background-color: lightyellow;
                  width: 120px;
                  visibility: hidden;
                  z-index: 100;
                  }
                  </style>
                  <!-- สิ้นสุดการแก้ไขรูปแบบของกรอบข้อความ --> 
                  <script type="text/javascript">
                  
                  var persistclose=0 // ให้ใส่เป็น 0 หรือไม่ก็ 1 (โดย 0 หมายถึง เมื่อกดปิดแล้ว กด REFRESH กรอบข้อความจะขึ้นมาอีก แต่ถ้า 1 กรอบข้อความจะไม่ขึ้นมาอีกแล้ว)
                  var startX = 600 // ตำแหน่งแสดงกรอบข้อความ นับจากด้านซ้าย
                  var startY = 300 // ตำแหน่งแสดงกรอบข้อความ นับจากด้านบน
                  
                  function iecompattest(){
                  return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
                  }
                  
                  function get_cookie(Name) {
                  var search = Name + "="
                  var returnvalue = "";
                  if (document.cookie.length > 0) {
                  offset = document.cookie.indexOf(search)
                  if (offset != -1) {
                  offset += search.length
                  end = document.cookie.indexOf(";", offset);
                  if (end == -1) end = document.cookie.length;
                  returnvalue=unescape(document.cookie.substring(offset, end))
                  }
                  }
                  return returnvalue;
                  }
                  
                  var verticalpos="fromtop"
                  
                  function closebar(){
                  if (persistclose)
                  document.cookie="remainclosed=1"
                  document.getElementById("topbar").style.visibility="hidden"
                  }
                  
                  function staticbar(){
                  
                    var ns = (navigator.appName.indexOf("Netscape") != -1);
                    var d = document;
                    function ml(id){
                      var el=d.getElementById(id);
                      if (!persistclose || persistclose && get_cookie("remainclosed")=="")
                      el.style.visibility="visible"
                      if(d.layers)el.style=el;
                      el.sP=function(x,y){this.style.left=x+"px";this.style.top=y+"px";};
                      el.x = startX;
                      if (verticalpos=="fromtop")
                      el.y = startY;
                      else{
                      el.y = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
                      el.y -= startY;
                      }
                      return el;
                    }
                    window.stayTopLeft=function(){
                      if (verticalpos=="fromtop"){
                      var pY = ns ? pageYOffset : iecompattest().scrollTop;
                      ftlObj.y += (pY + startY - ftlObj.y)/8;
                      }
                      else{
                      var pY = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
                      ftlObj.y += (pY - startY - ftlObj.y)/8;
                      }
                      ftlObj.sP(ftlObj.x, ftlObj.y);
                      setTimeout("stayTopLeft()", 10);
                    }
                    ftlObj = ml("topbar");
                    stayTopLeft();
                  }
                  
                  if (window.addEventListener)
                  window.addEventListener("load", staticbar, false)
                  else if (window.attachEvent)
                  window.attachEvent("onload", staticbar)
                  else if (document.getElementById)
                  window.onload=staticbar
                  </script>



<script>
    $(function () {
     $("#showTime").startTimer({
      
       onComplete:function(){

         alert("หมดเวลาทำแบบทดสอบแล้วค่ะ.")
         if(document.getElementById('radio1').checked  == true &&
         document.getElementById('radio2').checked  == true &&
         document.getElementById('radio3').checked  == true &&
         document.getElementById('radio4').checked  == true &&
         document.getElementById('radio5').checked  == true &&
         document.getElementById('radio6').checked  == true &&
         document.getElementById('radio7').checked  == true &&
         document.getElementById('radio8').checked  == true &&
         document.getElementById('radio9').checked  == true &&
         document.getElementById('radio10').checked  == true &&
         document.getElementById('radio11').checked  == true &&
         document.getElementById('radio12').checked  == true &&
         document.getElementById('radio13').checked  == true &&
         document.getElementById('radio14').checked  == true &&
         document.getElementById('radio15').checked  == true &&
         document.getElementById('radio16').checked  == true &&
         document.getElementById('radio17').checked  == true &&
         document.getElementById('radio18').checked  == true &&
         document.getElementById('radio19').checked  == true &&
         document.getElementById('radio20').checked  == true 
         ){
         $("#test1").submit();
        }
         if(document.getElementById('radio1').checked  == false||
         document.getElementById('radio2').checked  == false||
         document.getElementById('radio3').checked  == false||
         document.getElementById('radio4').checked  == false||
         document.getElementById('radio5').checked  == false||
         document.getElementById('radio6').checked  == false||
         document.getElementById('radio7').checked  == false||
         document.getElementById('radio8').checked  == false||
         document.getElementById('radio9').checked  == false||
         document.getElementById('radio10').checked  == false||
         document.getElementById('radio11').checked  == false||
         document.getElementById('radio12').checked  == false||
         document.getElementById('radio13').checked  == false||
         document.getElementById('radio14').checked  == false||
         document.getElementById('radio15').checked  == false||
         document.getElementById('radio16').checked  == false||
         document.getElementById('radio17').checked  == false||
         document.getElementById('radio18').checked  == false||
         document.getElementById('radio19').checked  == false||
         document.getElementById('radio20').checked  == false
          )
      {
          alert('คุณตอบคำถามไม่ครบ!!!! เราจะเพิ่มเวลาให้คุณ 30 ');
          $("#showTime2").startTimer({

  onComplete:function(){
    $("#test1").submit();
   
  }           
}) 
  } 
   }  
     })



$("#showTimeDisc").startTimer({
  onComplete:function(){

alert("หมดเวลาทำแบบทดสอบแล้วค่ะ.")
if(document.getElementById("chioe0").value != "0"  &&
document.getElementById("chioe1").value != "0" &&
document.getElementById("chioe2").value != "0" &&
document.getElementById("chioe3").value != "0" &&
document.getElementById("chioe4").value != "0" &&
document.getElementById("chioe5").value != "0" &&
document.getElementById("chioe6").value != "0" &&
document.getElementById("chioe7").value != "0" &&
document.getElementById("chioe8").value != "0" &&
document.getElementById("chioe9").value != "0" &&
document.getElementById("chioe10").value != "0" &&
document.getElementById("chioe11").value != "0" &&


document.getElementById("chioe15").value != "0" &&
document.getElementById("chioe16").value != "0" &&
document.getElementById("chioe17").value != "0" &&
document.getElementById("chioe18").value != "0" &&
document.getElementById("chioe19").value != "0" &&
document.getElementById("chioe20").value != "0" &&
document.getElementById("chioe21").value != "0" &&
document.getElementById("chioe22").value != "0" &&
document.getElementById("chioe23").value != "0" &&
document.getElementById("chioe24").value != "0" &&
document.getElementById("chioe25").value != "0" &&
document.getElementById("chioe26").value != "0" &&

document.getElementById("chioe30").value != "0" &&
document.getElementById("chioe31").value != "0" &&
document.getElementById("chioe32").value != "0" &&
document.getElementById("chioe33").value != "0" &&
document.getElementById("chioe34").value != "0" &&
document.getElementById("chioe36").value != "0" &&
document.getElementById("chioe37").value != "0" &&
document.getElementById("chioe38").value != "0" &&
document.getElementById("chioe39").value != "0" &&
document.getElementById("chioe40").value != "0" &&
document.getElementById("chioe41").value != "0" &&
document.getElementById("chioe42").value != "0" &&



document.getElementById("chioe45").value != "0" &&
document.getElementById("chioe46").value != "0" &&
document.getElementById("chioe47").value != "0" &&
document.getElementById("chioe48").value != "0" &&
document.getElementById("chioe49").value != "0" &&
document.getElementById("chioe50").value != "0" &&
document.getElementById("chioe51").value != "0" &&
document.getElementById("chioe52").value != "0" &&
document.getElementById("chioe53").value != "0" &&
document.getElementById("chioe54").value != "0" &&
document.getElementById("chioe55").value != "0" &&
document.getElementById("chioe56").value != "0" 

){
$("#testdisc").submit();
}
else
{
 alert('คุณตอบคำถามไม่ครบ!!!! เราจะเพิ่มเวลาให้คุณ 30 ');
 $("#showTimeDisc2").startTimer({

onComplete:function(){
$("#testdisc").submit();

}           
}) 
} 
}  
})














 });

</script>
 </body>
</html>