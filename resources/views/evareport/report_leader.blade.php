<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<title>ผลการประเมิน360</title>

<style type="text/css">
 body {
    font-family : "THSarabunNew";
           font-size: 14px;
       }
       .page-break {
           page-break-after: always;
       }
       table {
           border-collapse: collapse;
           width: 100%;
           font-size: 14px;
       }
       td,
       th {
           border: 1px solid;
       }
       .font {
           font-size: 25px;
       }
       .pop {
           text-align: center;
       }
</style>

</head>
 
            <?php    $i=0; $count=0; $count2=0;  $j=0; $k=0; $p1=0;  $p2=0; $p3=0;  $p4=0; $p5=0; $p1final=0;  $p2final=0; $p3final=0;  $p4final=0; $p5final=0; $a='ชื่อ ผู้ประเมิน'; $b='';  $c=''; $d='';  $e=''; $f=''; $totle=0; $tester='';  $data1 = array(); $data2 = array();$data3 = array();$data4 = array();$data5 = array(); $istest=''; $change=''; $change2=0;$data1change = array(); $data2change = array();$data3change = array();$data4change = array();$data5change = array(); $comment1 = array();$comment2 = array();$comment3 = array();$comment4 = array();$comment5 = array(); $commentcount=0; $commenttemp=''; ?>
<body>
                                 @foreach($partof as $part)

                                 @switch($part->id_part)
                                    @case(1)
                                      <?php $b=$part->part;?>
                                        @break
                                    @case(2)
                                     <?php $c=$part->part;?>
                                        @break
                                    @case(3)
                                      <?php $d=$part->part;?> 
                                        @break
                                    @case(4)
                                      <?php $e=$part->part;?>  
                                        @break
                                   @case(5)
                                      <?php $f=$part->part;?> 
                                        @break
                                @endswitch

                                
                        
                                 @endforeach 
                    <br><br>           
 <div class="container">
                 <table>
                        <thead>
                          <tr >
                            <th style="text-align: center;width: 10%;height: 70px;" >
                              {{$a}}
                            </th>
                            <th style="text-align: center;width: 10%;height: 70px;" >
                              {{$b}}
                            </th>
                            <th style="text-align: center;width: 10%;height: 70px;" >
                              {{$c}}
                            </th  >
                            <th style="text-align: center;width: 10%;height: 70px;" >
                              {{$d}}
                            </th>
                            <th style="text-align: center;width: 10%;height: 70px;" >
                              {{$e}}
                            </th>
                            <th style="text-align: center;width: 10%;height: 70px;" >
                              {{$f}}
                            </th >
                           
                          </tr>
                        </thead>
                          <tbody>
                          @foreach($ngg_employee as $ngg_emp)
                            @if( $ngg_emp->nem_id== $idtest)
                            <?php  $istest=$ngg_emp->nem_thai_firstname; ?>
                            @endif
                          @endforeach

                          @foreach($point as $pointt)
                          <?php $i++; $j+=$pointt->nes_q_point;?>

                            @if($i==8)
                             <?php  $j=($j/40)*10; $p1=number_format($j, 2);  ?>
                             
                            @endif
                            @if($i==12)
                             <?php   $j=$j-$p1; $j=($j/20)*35;$p2=number_format($j, 2);  ?>
                             
                            @endif
                            @if($i==16)
                             <?php  $j=$j-$p2; $j=($j/35)*35; $p3=number_format($j, 2);  ?>
                             
                            @endif
                            @if($i==19)
                             <?php  $j=$j-$p3; $j=($j/15)*10; $p4=number_format($j, 2); ?>
                             
                            @endif
                            @if($i==21)
                             <?php  $j=$j-$p4; $j=($j/10)*10; $p5=number_format($j, 2);  ?>
                             
                            @endif

                            @if($i==24)
                             <?php $change2++; $j=0; $i=0; $change= $pointt->nem_thai_firstname; ?>
                      @foreach($ngg_evaresult_comment as $ngg_comment )

                    @if($pointt->nes_evaluate_employee_id == $ngg_comment->nec_evaluate_employee_id)
                                  <?php $commentcount++;  $commenttemp = $ngg_comment->nec_comment; ?>
                          @switch($commentcount)
                                      @case($commentcount==1)
                                      <?php array_push($comment1, $change2,$commenttemp); ?>
                                     
                                          @break
                                      @case($commentcount==2)  
                                      <?php array_push($comment2, $change2,$commenttemp); ?>
                                      
                                          @break
                                      @case($commentcount==3)
                                      <?php array_push($comment3, $change2,$commenttemp); ?>
                                      
                                          @break
                                      @case($commentcount==4)
                                      <?php array_push($comment4, $change2,$commenttemp); ?>
                                      
                                          @break
                                      @case($commentcount==5)
                                      <?php array_push($comment5, $change2,$commenttemp); 
                                      $commentcount =0;
                                      ?>

                                          @break
                                  @endswitch

                    @endif

                @endforeach
                             
                            <tr>
                            <td style="width: 10%;height: 40px;">{{Form::label('nee_id1',$change)}}</td>
                            <td  style="width: 10%;height: 40px;">{{$p1}}<?php  $p1final+=$p1;?></td>
                            <td  style="width: 10%;height: 40px;">{{$p2}}<?php  $p2final+=$p2;?></td>
                            <td  style="width: 10%;height: 40px;">{{$p3}}<?php  $p3final+=$p3;?></td>
                            <td  style="width: 10%;height: 40px;">{{$p4}}<?php  $p4final+=$p4;?></td>
                            <td  style="width: 10%;height: 40px;">{{$p5}}<?php  $p5final+=$p5;?></td>
                            </tr>
                            

                                             
                            <?php $i=0;$count++;
                                  array_push($data1, $change,$p1);
                                  array_push($data2, $change,$p2);
                                  array_push($data3, $change,$p3);
                                  array_push($data4, $change,$p4);
                                  array_push($data5, $change,$p5);

                                  array_push($data1change, $change2,$p1);
                                  array_push($data2change, $change2,$p2);
                                  array_push($data3change, $change2,$p3);
                                  array_push($data4change, $change2,$p4);
                                  array_push($data5change, $change2,$p5);
                                 

                            ?>
                            @endif
                          @endforeach
                        </tbody>

                      </table>

                      @if($p1final!=0)
                      <?php  
                      $p1final=number_format($p1final/$count, 2);
                      $p2final=number_format($p2final/$count, 2); 
                      $p3final=number_format($p3final/$count, 2); 
                      $p4final=number_format($p4final/$count, 2); 
                      $p5final=number_format($p5final/$count, 2); 
                      $totle= $p1final+$p2final+$p3final+$p4final+$p5final; ?>

                       @switch($totle)
                                      @case($totle>90)
                                        <h2 style="text-align: center;">ผลการประเมินของคุณ {{$istest}} </h2>
                                        <h1 style="text-align: center;">เกรด A+ </h1>
                                        <h2 style="text-align: center;">ระดับศักยภาพ: ดีเลิศ</h2>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>80 && $totle<91)
                                        <h2 style="text-align: center;">ผลการประเมินของคุณ {{$istest}} </h2>
                                        <h1 style="text-align: center;">เกรด A </h1>
                                        <h2 style="text-align: center;">ระดับศักยภาพ: ดีเยี่ยม</h2>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>70 && $totle<81)
                                        <h2 style="text-align: center;">ผลการประเมินของคุณ {{$istest}} </h2>
                                        <h1 style="text-align: center;">เกรด B+ </h1>
                                        <h2 style="text-align: center;">ระดับศักยภาพ: ดีมาก</h2>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>60 && $totle<71)
                                        <h2 style="text-align: center;">ผลการประเมินของคุณ {{$istest}} </h2>
                                        <h1 style="text-align: center;">เกรด B </h1>
                                        <h2 style="text-align: center;">ระดับศักยภาพ: ดี</h2>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>50 && $totle<61)
                                        <h2 style="text-align: center;">ผลการประเมินของคุณ {{$istest}} </h2>
                                        <h1 style="text-align: center;">เกรด C+ </h1>
                                        <h2 style="text-align: center;">ระดับศักยภาพ: พอใช้</h2>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>40 && $totle<51)
                                        <h2 style="text-align: center;">ผลการประเมินของคุณ {{$istest}} </h2>
                                        <h1 style="text-align: center;">เกรด C </h1>
                                        <h2 style="text-align: center;">ระดับศักยภาพ: พอใช้</h2>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>30 && $totle<41)
                                        <h2 style="text-align: center;">ผลการประเมินของคุณ {{$istest}} </h2>
                                        <h1 style="text-align: center;">เกรด D+ </h1>
                                        <h2 style="text-align: center;">ระดับศักยภาพ: ควรปรับปรุง</h2>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>20 && $totle<31)
                                        <h2 style="text-align: center;">ผลการประเมินของคุณ {{$istest}} </h2>
                                        <h1 style="text-align: center;">เกรด D </h1>
                                        <h2 style="text-align: center;">ระดับศักยภาพ: ควรปรับปรุง</h2>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle<21)
                                        <h2 style="text-align: center;">ผลการประเมินของคุณ {{$istest}} </h2>
                                        <h1 style="text-align: center;">เกรด E </h1>
                                        <h2 style="text-align: center;">ระดับศักยภาพ: ไม่มีประสิทธิภาพ</h2>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                         @break
                                  @endswitch
                                  </div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart1);

                        function drawChart1() {
                          var data = google.visualization.arrayToDataTable([
                            ['{{$b}}', 'คะเเนน'],
                             ['คะแนนเต็ม',10],
                              <?php
                            for ($x=1; $x <count($data1) ; $x+=2) { 
                              
                                echo  "['".$data1[$x-1]."', '".$data1[$x]."'],";
                            }
                              ?>
                           
                          ]);

                          var options = {
                            height: 400,
                            chart: {
                              title: '{{$b}}',
                               
                            }
                          };
                         data.sort([{column: 1}, {column: 0}]);
                            var chart = new google.charts.Bar(document.getElementById('columnchart_material_p1'));
                              chart.draw(data, google.charts.Bar.convertOptions(options));
                        $(window).resize(function(){
                                  drawChart1();
                        });

                          
                        }

                      </script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart2);

                        function drawChart2() {
                          var data = google.visualization.arrayToDataTable([
                           ['{{$c}}', 'คะเเนน'],
                           ['คะเเนนเต็ม', 35],
                              <?php
                            for ($x=1; $x <count($data2) ; $x+=2) { 
                              
                                echo  "['".$data2[$x-1]."', '".$data2[$x]."'],";
                            }
                             
                              ?>
                            
                          ]);

                          var options = {
                            height: 400,
                            chart: {
                              title: '{{$c}}'
                             
                            }
                          };
                          data.sort([{column: 1}, {column: 0}]);
                          var chart = new google.charts.Bar(document.getElementById('columnchart_material_p2'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                          $(window).resize(function(){
                                  drawChart2();
                        });
                        }

                      </script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart3);

                        function drawChart3() {
                          var data = google.visualization.arrayToDataTable([
                           ['{{$d}}', 'คะเเนน'],
                           ['คะเเนนเต็ม', 35],
                              <?php
                            for ($x=1; $x <count($data3) ; $x+=2) { 
                              
                                echo  "['".$data3[$x-1]."', '".$data3[$x]."'],";
                            }
                             
                              ?>
                            
                          ]);

                          var options = {
                            height:400,
                            chart: {
                              title: '{{$d}}'
                              
                            }
                          };
                          data.sort([{column: 1}, {column: 0}]);
                          var chart = new google.charts.Bar(document.getElementById('columnchart_material_p3'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                          $(window).resize(function(){
                                  drawChart3();
                        });
                        }

                      </script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart4);

                        function drawChart4() {
                          var data = google.visualization.arrayToDataTable([
                           ['{{$e}}', 'คะเเนน'],
                           ['คะเเนนเต็ม', 10],
                              <?php
                            for ($x=1; $x <count($data4) ; $x+=2) { 
                              
                                echo  "['".$data4[$x-1]."', '".$data4[$x]."'],";
                            }
                             
                              ?>
                            
                          ]);

                          var options = {
                            height:400,
                            chart: {
                              title: '{{$e}}'
                             
                            }
                          };
                      data.sort([{column: 1}, {column: 0}]);
                          var chart = new google.charts.Bar(document.getElementById('columnchart_materialp4'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                          $(window).resize(function(){
                                  drawChart4();
                        });
                        }

                      </script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart5);

                        function drawChart5() {
                          var data = google.visualization.arrayToDataTable([

                           ['{{$f}}', 'คะเเนน'],
                           ['คะเเนนเต็ม', 10],
                              <?php
                            for ($x=1; $x <count($data5) ; $x+=2) { 
                              
                                echo  "['".$data5[$x-1]."', '".$data5[$x]."'],";
                            }
                             
                              ?>
                            
                          ]);

                          var options = {
                            height:400,
                            chart: {
                              title: '{{$f}}'
                            
                            }
                          };
                         data.sort([{column: 1}, {column: 0}]);
                          var chart = new google.charts.Bar(document.getElementById('columnchart_material_p5'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                          $(window).resize(function(){
                                  drawChart5();
                        });
                        }

                      </script>
                 

                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                       <script type="text/javascript">
                                      google.charts.load('current', {'packages':['corechart']});
                                      google.charts.setOnLoadCallback(drawChart);

                                      function drawChart() {

                                        var data = google.visualization.arrayToDataTable([
                                          ['part', 'คะเเนน'],
                                          ['{{$b}}',{{$p1final}} ],
                                          ['{{$c}}',{{$p2final}} ],
                                          ['{{$d}}',{{$p3final}} ],
                                          ['{{$e}}',{{$p4final}} ],
                                          ['{{$f}}',{{$p5final}} ]
                                        ]);

                                        var options = {
                                          height:400,
                                          title: 'คะเเนนสุทธิ'
                                        };

                                         function resize() {
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                          chart.draw(data, options);
                              }
                      window.onload = resize();
                      window.onresize = resize;
                                      }
                                    </script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                            ['ผลสรุปรวม', 'คะเเนนเต็ม', 'คะเเนนประเมิน'],
                            
                            ['ด้านที่1', 10, {{$p1final}}],
                            ['ด้านที่2', 35, {{$p2final}}],
                            ['ด้านที่3', 35, {{$p3final}}],
                            ['ด้านที่4', 10, {{$p4final}}],
                            ['ด้านที่5', 10, {{$p5final}}],
                            ['คะเนนรวม', 100, {{$totle}}],
                          ]);

                          var options = {
                            height:400,
                            chart: {
                              title: 'การประเมินประจำปี',
                              subtitle: 'ผลการประเมินประจำปี',
                            }
                          };
                          var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                          $(window).resize(function(){
                                  drawChart();
                        });
                        }

                      </script>
                      <br><br>

<div class="container">
  <div class="row">
  <div class="col-md-7">
    <div id="columnchart_material_p1" class="chart" style="width: 550px; height: 400px;" ></div>
  </div>
  <div class="col-md-4">
    <div id="columnchart_material_p2" class="chart" style="width: 550px; height: 400px;" ></div>
  </div> 
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
  <div class="col-md-7">
    <div id="columnchart_material_p3" class="chart" style="width: 550px; height: 400px;" ></div>
  </div>
  <div class="col-md-4">
    <div id="columnchart_materialp4" class="chart" style="width: 550px; height: 400px;" ></div>
  </div> 
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
  <div class="col-md-7">
    <div id="columnchart_material_p5" class="chart" style="width: 550px; height: 400px;" ></div>
  </div>
  <div class="col-md-4">
    <div id="columnchart_material" class="chart" style="width: 550px; height: 400px;" ></div>
  </div> 
  </div>
</div>
<br><br><br><br>
<div class="container">
  <div class="row">
  <div class="col-md-7">
    <div id="piechart" class="chart" style="width: 550px; height: 400px;" ></div>
  </div>
  </div>
</div>
<div class="container">
<input type="button" value="ปริ้นเฉพาะใน divprint" onclick="javascript:this.style.display='none';window.print();">
</div>
                    @else
              <h1> ยังไม่มีข้อมูล</h1>
                   @endif
                  


</body>
</html>