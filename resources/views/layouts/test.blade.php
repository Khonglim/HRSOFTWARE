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


         $("#test1").submit();
       }
     })


$("#showTimeDisc").startTimer({
      
      onComplete:function(){
        alert("หมดเวลาทำแบบทดสอบแล้วค่ะ.")
        $("#testdisc").submit();
      }
    })

 });

</script>
 </body>
</html>