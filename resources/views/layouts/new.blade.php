<!DOCTYPE html>
<html lang="th">
 <head>
<title>Ngg</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
<style>
        body{ 
             
            font-family: 'Prompt', sans-serif;
        }
        
        .stepwizard-step p {
            margin-top: 10px;
        }
        
        .stepwizard-row {
            display: table-row;
        }
        
        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }
        
        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }
        
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
        
        }
        
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        
        .btn-circle {
          width: 30px;
          height: 30px;
          text-align: center;
          padding: 6px 0;
          font-size: 12px;
          line-height: 1.428571429;
          border-radius: 15px;
        }
        </style>
</head>
<body>
                <nav class="navbar navbar-inverse">
                                <div class="container-fluid">
                                  <div class="navbar-header">
                                        <a class="navbar-brand" href="{{url('/') }}">กลับหน้าแรก</a>
                                  </div>
                        
                                </div>
                          </nav> 
                          
                          

                          <main>
                                @yield('content')
                            </main>





<!-- Footer -->
<footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 NGG:
          <a href="#"> version1.0</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->
                          <script>

                                $(document).ready(function () {
                                
                                    var navListItems = $('div.setup-panel div a'),
                                            allWells = $('.setup-content'),
                                            allNextBtn = $('.nextBtn');
                                
                                    allWells.hide();
                                
                                    navListItems.click(function (e) {
                                        e.preventDefault();
                                        var $target = $($(this).attr('href')),
                                                $item = $(this);
                                
                                        if (!$item.hasClass('disabled')) {
                                            navListItems.removeClass('btn-primary').addClass('btn-default');
                                            $item.addClass('btn-primary');
                                            allWells.hide();
                                            $target.show();
                                            $target.find('input:eq(0)').focus();
                                        }
                                    });
                                
                                    allNextBtn.click(function(){
                                        var curStep = $(this).closest(".setup-content"),
                                            curStepBtn = curStep.attr("id"),
                                            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                                            curInputs = curStep.find("input[type='text'],input[type='url'],input[type='file'],input[type='date'],input[type='email'],select,textarea"),
                                            isValid = true;
                                
                                        $(".form-group").removeClass("has-error");
                                        for(var i=0; i<curInputs.length; i++){
                                            if (!curInputs[i].validity.valid){
                                                isValid = false;
                                                $(curInputs[i]).closest(".form-group").addClass("has-error");
                                            }
                                        }
                                
                                        if (isValid)
                                            nextStepWizard.removeAttr('disabled').trigger('click');
                                    });
                                
                                    $('div.setup-panel div a.btn-primary').trigger('click');
                                });
                                
                                </script>
                        
                        <script>
                                        $('#form_setchange1').change(function() {
                                          var $check = $(this);
                                          if ($check.prop('checked')) {
                                            $("#primary").removeAttr("disabled"); 
                                            $("#year1").removeAttr("disabled"); 
                                            $("#year2").removeAttr("disabled"); 
                                            $("#gpa").removeAttr("disabled"); 
                                            $("#degree1").removeAttr("disabled"); 
                                            $("#major").removeAttr("disabled");  
                                           
                                
                                          } else {
                                          $("#primary").val('');
                                            $("#primary").attr("disabled", "disabled"); 
                                
                                             $("#year1").val('');
                                            $("#year1").attr("disabled", "disabled"); 
                                
                                             $("#year2").val('');
                                            $("#year2").attr("disabled", "disabled"); 
                                
                                     
                                             $("#gpa").val('');
                                            $("#gpa").attr("disabled", "disabled"); 
                                
                                
                                            $("#degree1").val('');
                                            $("#degree1").attr("disabled", "disabled"); 
                                
                                
                                             $("#major").val('');
                                            $("#major").attr("disabled", "disabled");  
                                          }
                                       });
                                       
                                       
                                       
                                       
                                       
                                       
                                       $('#form_setchange2').change(function() {
                                          var $check = $(this);
                                          if ($check.prop('checked')) {
                                            $("#secondary").removeAttr("disabled"); 
                                            $("#year3").removeAttr("disabled"); 
                                            $("#year4").removeAttr("disabled"); 
                                            $("#gpas").removeAttr("disabled"); 
                                            $("#degree2").removeAttr("disabled"); 
                                            $("#majors").removeAttr("disabled");  
                                           
                                
                                          } else {
                                          $("#secondary").val('');
                                            $("#secondary").attr("disabled", "disabled"); 
                                
                                             $("#year3").val('');
                                            $("#year3").attr("disabled", "disabled"); 
                                
                                             $("#year4").val('');
                                            $("#year4").attr("disabled", "disabled"); 
                                
                                     
                                             $("#gpas").val('');
                                            $("#gpas").attr("disabled", "disabled"); 
                                
                                
                                            $("#degree2").val('');
                                            $("#degree2").attr("disabled", "disabled"); 
                                
                                
                                             $("#majors").val('');
                                            $("#majors").attr("disabled", "disabled");  
                                          }
                                       });
                                       
                                       
                                       
                                       
                                       
                                       $('#form_setchange3').change(function() {
                                          var $check = $(this);
                                          if ($check.prop('checked')) {
                                            $("#vocation").removeAttr("disabled"); 
                                            $("#year5").removeAttr("disabled"); 
                                            $("#year6").removeAttr("disabled"); 
                                            $("#gpav").removeAttr("disabled"); 
                                            $("#degree3").removeAttr("disabled"); 
                                            $("#majorv").removeAttr("disabled");  
                                           
                                
                                          } else {
                                          $("#vocation").val('');
                                            $("#vocation").attr("disabled", "disabled"); 
                                
                                             $("#year5").val('');
                                            $("#year5").attr("disabled", "disabled"); 
                                
                                             $("#year6").val('');
                                            $("#year6").attr("disabled", "disabled"); 
                                
                                     
                                             $("#gpav").val('');
                                            $("#gpav").attr("disabled", "disabled"); 
                                
                                
                                            $("#degree3").val('');
                                            $("#degree3").attr("disabled", "disabled"); 
                                
                                
                                             $("#majorv").val('');
                                            $("#majorv").attr("disabled", "disabled");  
                                          }
                                       });
                                       
                                       
                                       
                                       
                                       
                                       
                                       $('#form_setchange4').change(function() {
                                          var $check = $(this);
                                          if ($check.prop('checked')) {
                                            $("#diploma").removeAttr("disabled"); 
                                            $("#year7").removeAttr("disabled"); 
                                            $("#year8").removeAttr("disabled"); 
                                            $("#gpad").removeAttr("disabled"); 
                                            $("#degree4").removeAttr("disabled"); 
                                            $("#majord").removeAttr("disabled");  
                                           
                                
                                          } else {
                                          $("#diploma").val('');
                                            $("#diploma").attr("disabled", "disabled"); 
                                
                                             $("#year7").val('');
                                            $("#year7").attr("disabled", "disabled"); 
                                
                                             $("#year8").val('');
                                            $("#year8").attr("disabled", "disabled"); 
                                
                                     
                                             $("#gpad").val('');
                                            $("#gpad").attr("disabled", "disabled"); 
                                
                                
                                            $("#degree4").val('');
                                            $("#degree4").attr("disabled", "disabled"); 
                                
                                
                                             $("#majord").val('');
                                            $("#majord").attr("disabled", "disabled");  
                                          }
                                       });
                                       
                                       
                                       
                                       
                                       $('#form_setchange5').change(function() {
                                          var $check = $(this);
                                          if ($check.prop('checked')) {
                                            $("#bachelor").removeAttr("disabled"); 
                                            $("#year9").removeAttr("disabled"); 
                                            $("#year10").removeAttr("disabled"); 
                                            $("#gpab").removeAttr("disabled"); 
                                            $("#degree5").removeAttr("disabled"); 
                                            $("#majorb").removeAttr("disabled");  
                                           
                                
                                          } else {
                                          $("#bachelor").val('');
                                            $("#bachelor").attr("disabled", "disabled"); 
                                
                                             $("#year9").val('');
                                            $("#year9").attr("disabled", "disabled"); 
                                
                                             $("#year10").val('');
                                            $("#year10").attr("disabled", "disabled"); 
                                
                                     
                                             $("#gpab").val('');
                                            $("#gpab").attr("disabled", "disabled"); 
                                
                                
                                            $("#degree5").val('');
                                            $("#degree5").attr("disabled", "disabled"); 
                                
                                
                                             $("#majorb").val('');
                                            $("#majorb").attr("disabled", "disabled");  
                                          }
                                       });
                                       
                                       
                                       
                                         
                                       $('#form_setchange6').change(function() {
                                          var $check = $(this);
                                          if ($check.prop('checked')) {
                                            $("#master").removeAttr("disabled"); 
                                            $("#year11").removeAttr("disabled"); 
                                            $("#year12").removeAttr("disabled"); 
                                            $("#gpam").removeAttr("disabled"); 
                                            $("#degree6").removeAttr("disabled"); 
                                            $("#majorm").removeAttr("disabled");  
                                           
                                
                                          } else {
                                          $("#master").val('');
                                            $("#master").attr("disabled", "disabled"); 
                                
                                             $("#year11").val('');
                                            $("#year11").attr("disabled", "disabled"); 
                                
                                             $("#year12").val('');
                                            $("#year12").attr("disabled", "disabled"); 
                                
                                     
                                             $("#gpam").val('');
                                            $("#gpam").attr("disabled", "disabled"); 
                                
                                
                                            $("#degree6").val('');
                                            $("#degree6").attr("disabled", "disabled"); 
                                
                                
                                             $("#majorm").val('');
                                            $("#majorm").attr("disabled", "disabled");  
                                          }
                                       });
                                       
                                       
                                       $('#form_setchange7').change(function() {
                                          var $check = $(this);
                                          if ($check.prop('checked')) {
                                            $("#otherE").removeAttr("disabled"); 
                                            $("#year13").removeAttr("disabled"); 
                                            $("#year14").removeAttr("disabled"); 
                                            $("#gpao").removeAttr("disabled"); 
                                            $("#degree7").removeAttr("disabled"); 
                                            $("#majoro").removeAttr("disabled");  
                                           
                                
                                          } else {
                                          $("#otherE").val('');
                                            $("#otherE").attr("disabled", "disabled"); 
                                
                                             $("#year13").val('');
                                            $("#year13").attr("disabled", "disabled"); 
                                
                                             $("#year14").val('');
                                            $("#year14").attr("disabled", "disabled"); 
                                
                                     
                                             $("#gpao").val('');
                                            $("#gpao").attr("disabled", "disabled"); 
                                
                                
                                            $("#degree7").val('');
                                            $("#degree7").attr("disabled", "disabled"); 
                                
                                
                                             $("#majoro").val('');
                                            $("#majoro").attr("disabled", "disabled");  
                                          }
                                       });
                                       
                                       
                                       $('#form_setchange7').change(function() {
                                          var $check = $(this);
                                          if ($check.prop('checked')) {
                                            $("#otherE").removeAttr("disabled"); 
                                          } else {
                                          $("#otherE").val('');
                                            $("#otherE").attr("disabled", "disabled"); 
                                          }
                                       });
                                       
                                
                                
                                
                                
                                
                                
                                
                                
                                        </script>
                                
                                        <script>
                                 $('input[name=crash1]').change(function() {
                                
                                if( crash1[0].checked ){
                                                  
                                    $("#compd").attr("disabled", "disabled"); 
                                    $("#compa").attr("disabled", "disabled"); 
                                                }
                                                if( crash1[1].checked ){
                                
                                  $("#compd").removeAttr("disabled"); 
                                  $("#compa").removeAttr("disabled"); 
                                                }
                                               
                                
                                
                                      });
                                
                                
                                 $('input[name=exitwork]').change(function() {
                                
                                if( exitwork[0].checked ){
                                  $("#because").removeAttr("disabled"); 
                                                  
                                   
                                    
                                                }
                                                if( exitwork[1].checked ){
                                                    $("#because").attr("disabled", "disabled"); 
                                                }
                                               
                                
                                
                                      });
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                 </script>                          
</body>  
</html>           