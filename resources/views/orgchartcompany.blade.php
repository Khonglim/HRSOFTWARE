
<!DOCTYPE HTML>

<html>
    <head>
        <title>Org Chart</title>
        <link href="{{ asset('css/jquery.orgchart.css') }}" rel="stylesheet">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{ asset('js/jquery.orgchart.js') }}" defer></script>
        <script src="{{ asset('js/jquery.orgchart.min.js') }}" defer></script>
        <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
        <style type="text/css">

            .center {
    margin: auto;
    width: 90%;
    height: 90%;
    border: 6px solid #f2ef3a;
    padding: 10px;
    top: 20%;
    position: relative;
   

                    }
div.body{
  background-color: #fbcece;
}          

.orgChart {
    font-size: 1.3em;


}
div.orgChart div.node.level1 {
    background-color: #fbcece;
}
div.orgChart div.node.level1.special {
    background-color: white;
}
div.orgChart div.node.level2 {
    background-color: #cefbce;
}
div.orgChart div.node.level3 {
    background-color: #e0cefb;
}

.filterDiv {
  float: left;
  background-color: #2196F3;
  color: #000000;
  width: 99%;
  height: 30%;
  line-height: 80px;
  text-align: center;
  position: relative;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 19px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
.dropbtn {
    background-color: #9db7f9;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #18357c;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
        </style>
    </head>

    <body>


 



 
                  

        <div id="content" style="text-align: center;" >
        
            <h1>Company Organizational chart</h1>
<div id="myBtnContainer">
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Company</button>
  <div id="myDropdown" class="dropdown-content">
    <a><button class="btn active" onclick="filterSelection('all')"> Show all</button></a>
   @foreach($company as $l) 
 <a><button class="btn" onclick="filterSelection('{{$l['id']}}')">{{$l['company_Name']}}</button></a>
    @endforeach
  </div>
</div>
</div>


<div class="container" id="center">
    @foreach($company as $l) 
    
        <div class="filterDiv {{$l['id']}}" id="{{$l['id']}}" >
            {{$l['company_Name']}}
        </div>
 
    @endforeach
  
</div>

@foreach($company as $l)
  
              
    <script>
        $(function() {
            $("#{{$l['company_Name']}}").orgChart({container: $("#{{$l['id']}}"), interactive: true, fade: true, speed: 'fast'});
        });
        </script>

            <ul id="{{$l['company_Name']}}" style="display: none;">
                <li>
                    @foreach($company as $li) 

                            @if($l['id']<$li['id'])
                                {{$li['company_Name']}}
                            @break
                            @elseif($l['id']==$li['id'])
                             {{$li['company_Name']}}
                            @break
                            @else
                                {{$l['company_Name']}}
                            @break
                            @endif
                    
                    @endforeach
                    <ul>
                        @foreach($department as $li)
                            @if($l['id']==$li['company_id']&&$li['department_head_id']==0) 
                        <li>
                            {{$li['department_name']}} 
                           <ul>
                                @foreach($department as $la)
                     
                                    @if($li['id']==$la['department_head_id']&&$la['department_head_id']>0) 
                                            <li>
                                                {{$la['department_name']}} 

                                                    <ul>
                                                        @foreach($position as $lb) 
                                                            @if($la['id']==$lb['Department_ID'])
                                                            <li>
                                                                {{$lb['position_name']}} 
                                                                  
                                                            </li> 
                                                            @endif

                                                           
                                                        @endforeach
                                                    </ul>


                                            </li>   
                                       
         
                                    @endif
                                @endforeach

                           </ul>
                        </li>  
                        @endif
                       @endforeach
                    </ul>
                   
                </li>


 
            </ul>

 @endforeach
      
        
        </div>
  </body>

</html>
