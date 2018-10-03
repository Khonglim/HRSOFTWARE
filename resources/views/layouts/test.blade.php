<!DOCTYPE html>
<html lang="en">
<head>
  <title>NGG @yield('title')</title>
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
          alert('คุณตอบคำถามไม่ครบ!!!! เราจะเพิ่มเวลาให้คุณ 30 วินาที');
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
if(document.getElementById("chioe0").value != ''  &&
document.getElementById("chioe1").value != '' &&
document.getElementById("chioe2").value != '' &&
document.getElementById("chioe3").value != '' &&
document.getElementById("chioe4").value != '' &&
document.getElementById("chioe5").value != '' &&
document.getElementById("chioe6").value != '' &&
document.getElementById("chioe7").value != '' &&
document.getElementById("chioe8").value != '' &&
document.getElementById("chioe9").value != '' &&
document.getElementById("chioe10").value != '' &&
document.getElementById("chioe11").value != '' &&


document.getElementById("chioe15").value != '' &&
document.getElementById("chioe16").value != '' &&
document.getElementById("chioe17").value != '' &&
document.getElementById("chioe18").value != '' &&
document.getElementById("chioe19").value != '' &&
document.getElementById("chioe20").value != '' &&
document.getElementById("chioe21").value != '' &&
document.getElementById("chioe22").value != '' &&
document.getElementById("chioe23").value != '' &&
document.getElementById("chioe24").value != '' &&
document.getElementById("chioe25").value != '' &&
document.getElementById("chioe26").value != '' &&

document.getElementById("chioe30").value != '' &&
document.getElementById("chioe31").value != '' &&
document.getElementById("chioe32").value != '' &&
document.getElementById("chioe33").value != '' &&
document.getElementById("chioe34").value != '' &&
document.getElementById("chioe36").value != '' &&
document.getElementById("chioe37").value != '' &&
document.getElementById("chioe38").value != '' &&
document.getElementById("chioe39").value != '' &&
document.getElementById("chioe40").value != '' &&
document.getElementById("chioe41").value != '' &&
document.getElementById("chioe42").value != '' &&



document.getElementById("chioe45").value != '' &&
document.getElementById("chioe46").value != '' &&
document.getElementById("chioe47").value != '' &&
document.getElementById("chioe48").value != '' &&
document.getElementById("chioe49").value != '' &&
document.getElementById("chioe50").value != '' &&
document.getElementById("chioe51").value != '' &&
document.getElementById("chioe52").value != '' &&
document.getElementById("chioe53").value != '' &&
document.getElementById("chioe54").value != '' &&
document.getElementById("chioe55").value != '' &&
document.getElementById("chioe56").value != '' 

){
$("#testdisc").submit();
}
else
{
 alert('คุณตอบคำถามไม่ครบ!!!! เราจะเพิ่มเวลาให้คุณ 30 วินาที ');
 $("#showTimeDisc2").startTimer({

onComplete:function(){
    alert('หมดเวลาทำข้อสอบกรุณากดส่งคำตอบ');

}           
}) 
} 
}  
})














 });

</script>


<script type="text/javascript">
  function fncSubmit()
  {
      if(document.getElementById('chioe0').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "น่าเกรงขาม"');
          return false;
      }

   if(document.getElementById('chioe1').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ทำงานเชิงรุก"');
          return false;
      }

if(document.getElementById('chioe2').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "พูดตรงไปตรงมา"');
          return false;
      }

if(document.getElementById('chioe3').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ไม่ยอมแพ้"');
          return false;
      }

if(document.getElementById('chioe4').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "โลดโผน"');
          return false;
      }
      if(document.getElementById('chioe5').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ชอบแข่งขัน"');
          return false;
      }

if(document.getElementById('chioe6').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "กล้าเสี่ยง"');
          return false;
      }

if(document.getElementById('chioe7').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ชอบโต้แย้ง"');
          return false;
      }

if(document.getElementById('chioe8').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "กล้าหาญ"');
          return false;
      }

if(document.getElementById('chioe9').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ชอบควบคุม"');
          return false;
      }


if(document.getElementById('chioe10').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "เปิดเผิย"');

          return false;
      }





if(document.getElementById('chioe15').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "มีชีวิตชีวา"');
          return false;
      }

if(document.getElementById('chioe16').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "อ่อนไหว"');
          return false;
      }

if(document.getElementById('chioe17').value  == " "  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ร่าเริง"');
          return false;
      }

if(document.getElementById('chioe18').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ชอบเข้าสังคม"');
          return false;
      }



if(document.getElementById('chioe19').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ตัดสินใจด้วยอารมณ์"');
          return false;
      }




if(document.getElementById('chioe20').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ชอบแสดงออก');
          return false;
      }



if(document.getElementById('chioe21').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ชอบพูดคุย"');
          return false;
      }


if(document.getElementById('chioe22').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "สนุกสนาน"');
          return false;
      }


if(document.getElementById('chioe23').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ใช้สัญชาตญาณ"');
          return false;
      }



if(document.getElementById('chioe24').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "มองโลกในเเง่ดี"');
          return false;
      }



if(document.getElementById('chioe25').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "สดใส"');
          return false;
      }



if(document.getElementById('chioe26').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "กระตือรือร้น"');
          return false;
      }




if(document.getElementById('chioe30').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ถ่อมตน"');
          return false;
      }

if(document.getElementById('chioe31').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "โอนอ่อนผ่อน"');
          return false;
      }

if(document.getElementById('chioe32').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ให้ความร่วมมือ"');
          return false;
      }

if(document.getElementById('chioe33').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "อ่อนโยน"');
          return false;
      }



if(document.getElementById('chioe34').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ใจดี"');
          return false;
      }




if(document.getElementById('chioe35').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ชอบช่วยเหลือ"');
          return false;
      }



if(document.getElementById('chioe36').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "คิดถึงจิตใจคนอื่น"');
          return false;
      }


if(document.getElementById('chioe37').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "อดทน"');
          return false;
      }


if(document.getElementById('chioe38').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ไม่ชอบความเปลี่ยนแปลง"');
          return false;
      }



if(document.getElementById('chioe39').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "รักสงบ"');
          return false;
      }



if(document.getElementById('chioe40').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "จงรักภัคดี"');
          return false;
      }



if(document.getElementById('chioe41').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "เป็นผู้ฟังที่ดี"');
          return false;
      }




if(document.getElementById('chioe45').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "มีไหวพริบดี"');
          return false;
      }

if(document.getElementById('chioe46').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "คงเส้นคงวา"');
          return false;
      }

if(document.getElementById('chioe47').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ถูกต้องแม่นยำ"');
          return false;
      }

if(document.getElementById('chioe48').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "ชอบความสมบูรณ์แบบ"');
          return false;
      }



if(document.getElementById('chioe49').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "รอบคอบ"');
          return false;
      }




if(document.getElementById('chioe50').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ " ชอบดูรายละเอียด"');
          return false;
      }



if(document.getElementById('chioe51').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "มองข้อเท็จจริง"');
          return false;
      }


if(document.getElementById('chioe52').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "มีเหตุมีผล"');
          return false;
      }


if(document.getElementById('chioe53').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "มีระเบียบ"');
          return false;
      }



if(document.getElementById('chioe54').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "มีสติ"');
          return false;
      }



if(document.getElementById('chioe55').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "จริงจัง"');
          return false;
      }



if(document.getElementById('chioe56').value  == "0"  )
      {
          alert('คุณยังไม่ระบุคะแนนของ "มาตรฐานสูง"');
          return false;
      }





  }
  </script>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 NGG:
        <a href="#"> version1.0</a>
       
        <p class="text-danger">ทางบริษัทกำลังพัฒนา(ขออภัยในความไม่สะดวกหากเกิดผิดพลาดของเว็บค่ะ)</p>
      </div>
      <!-- Copyright -->
 </body>
</html>