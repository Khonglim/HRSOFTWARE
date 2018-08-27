@extends('layouts.main')
@section('content')
 <style>
#myDIV {
}
</style>

<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header" style=" text-align: center;">
            <h2 class="box-title" >ผลการประเมิน</h2>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php    $i=0; $count=0; $count2=0;  $j=0; $k=0; $p1=0;  $p2=0; $p3=0;  $p4=0; $p5=0; $p1final=0;  $p2final=0; $p3final=0;  $p4final=0; $p5final=0; $a='ชื่อ พนักงาน'; $b='';  $c=''; $d='';  $e=''; $f=''; $totle=0; $tester='';  $data1 = array();
            $data2 = array();$data3 = array();$data4 = array();$data5 = array(); ?>
             
   
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
                    
                         <button onclick="myFunction()" >ตารางแสดงผล</button>

                        <div id="myDIV" style="display: none;">
                            <table  class="table table-bordered table-striped">
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
                           @foreach($employeetotests as $emp)

                @foreach($ngg_evaluate_results as $ngg_eva)



                  @if( $ngg_eva->nes_evaluate_employee_id == $emp->nee_id )
                @foreach($ngg_employee as $ngg_emp)

                   
                     
                       @if($ngg_emp->nem_id == $emp->nee_is_employee  )


                                  <?php  $k=$ngg_emp->nem_id;  $i++; $j+=$ngg_eva->nes_q_point;?>
                                 
                          
                               @switch($i)
                                      @case($i==10)
                                      
                                      <?php  $j=($j/50)*10; $p1=number_format($j, 2);  ?>
                                      <?php $j=0;?>
                                          @break
                                      @case($i==18)
                                     
                                      <?php  $j=($j/40)*20;$p2=number_format($j, 2); ?>
                                          
                                      <?php  $j=0;?>
                                          @break
                                      @case($i==24)
                                     
                                      <?php  $j=($j/30)*20; $p3=number_format($j, 2);?>
                                      <?php $j=0;?>
                                          @break
                                      @case($i==30)
                                     
                                      <?php  $j=($j/30)*25; $p4=number_format($j, 2);?>
                                     <?php $j=0;?>
                                          @break
                                      @case($i==35)
                                     
                                      <?php  $j=($j/25)*15; $p5=number_format($j, 2);?>
                                      <?php $j=0;?>
                                          @break
                                  @endswitch

                                  
                           <tr>
                            @if($i==35)

                            <td> {{Form::label('nee_id1',$ngg_emp->nem_nickname)}}</td>
                            <td  >{{$p1}}<?php  $p1final+=$p1;?></td>
                            <td > {{$p2}}<?php  $p2final+=$p2;?></td>
                            <td > {{$p3}}<?php  $p3final+=$p3;?></td>
                            <td >{{$p4}}<?php  $p4final+=$p4;?></td>
                            <td>{{$p5}}<?php  $p5final+=$p5;?></td>

                                             
                            <?php $i=0;$count++;
                                  array_push($data1, $ngg_emp->nem_nickname,$p1);
                                  array_push($data2, $ngg_emp->nem_nickname,$p2);
                                  array_push($data3, $ngg_emp->nem_nickname,$p3);
                                  array_push($data4, $ngg_emp->nem_nickname,$p4);
                                  array_push($data5, $ngg_emp->nem_nickname,$p5);

                            ?>
                        
                            @endif

                          </tr>



                                @endif
                     
                  @endforeach 
                   @endif  
                @endforeach
              @endforeach

                        </tbody>

                      </table>

                        </div>            
                   @if($p1final!=0)  
                   <?php  
                      $p1final=number_format($p1final/$count, 2);
                      $p2final=number_format($p2final/$count, 2); 
                      $p3final=number_format($p3final/$count, 2); 
                      $p4final=number_format($p4final/$count, 2); 
                      $p5final=number_format($p5final/$count, 2); 
                      $totle= $p1final+$p2final+$p3final+$p4final+$p5final; ?>

                      <br><br>

                      <div class="row">

                <div class="col-md-100">

                   @switch($totle)
                                      @case($totle>90)
                                        <h1 style="text-align: center;">เกรด A+ </h1>
                                        <h3 style="text-align: center;">ระดับสักยภาพ: ดีเลิศ</h3>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>80 && $totle<91)
                                        <h1 style="text-align: center;">เกรด A </h1>
                                        <h3 style="text-align: center;">ระดับสักยภาพ: ดีเยี่ยม</h3>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>70 && $totle<81)
                                        <h1 style="text-align: center;">เกรด B+ </h1>
                                        <h3 style="text-align: center;">ระดับสักยภาพ: ดีมาก</h3>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>60 && $totle<71)
                                        <h1 style="text-align: center;">เกรด B </h1>
                                        <h3 style="text-align: center;">ระดับสักยภาพ: ดี</h3>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>50 && $totle<61)
                                        <h1 style="text-align: center;">เกรด C+ </h1>
                                        <h3 style="text-align: center;">ระดับสักยภาพ: พอใช้</h3>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>40 && $totle<51)
                                        <h1 style="text-align: center;">เกรด C </h1>
                                        <h3 style="text-align: center;">ระดับสักยภาพ: พอใช้</h3>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>30 && $totle<41)
                                        <h1 style="text-align: center;">เกรด D+ </h1>
                                        <h3 style="text-align: center;">ระดับสักยภาพ: ควรปรับปรุง</h3>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle>20 && $totle<31)
                                        <h1 style="text-align: center;">เกรด D </h1>
                                        <h3 style="text-align: center;">ระดับสักยภาพ: ควรปรับปรุง</h3>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                          @break
                                      @case($totle<21)
                                        <h1 style="text-align: center;">เกรด E </h1>
                                        <h3 style="text-align: center;">ระดับสักยภาพ: ไม่มีประสิทธิภาพ</h3>
                                        <h2 style="text-align: center;">คะเเนนเต็ม100 ได้ทั้งหมด {{$totle}}คะแนน</h2>
                                         @break
                                  @endswitch
                                  

                </div>
              </div>
<br>
              <div class="row">
                <div class="col-md-6">
                  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                            ['{{$b}}', 'คะเเนน'],
                              <?php
                            for ($x=1; $x <count($data1) ; $x+=2) { 
                              
                                echo  "['".$data1[$x-1]."', '".$data1[$x]."'],";
                            }
                             
                              ?>
                            ['คะเเนนเต็ม',10]
                          ]);

                          var options = {
                            chart: {
                              title: '{{$b}}'
                              
                            }
                          };

                          var chart = new google.charts.Bar(document.getElementById('columnchart_material_p1'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                        }

                      </script>
                       <div id="columnchart_material_p1" style="width: 800px; height: 500px;"></div>
                </div>
                <br>
                 <div class="col-md-5">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                           ['{{$c}}', 'คะเเนน'],
                              <?php
                            for ($x=1; $x <count($data2) ; $x+=2) { 
                              
                                echo  "['".$data2[$x-1]."', '".$data2[$x]."'],";
                            }
                             
                              ?>
                            ['คะเเนนเต็ม', 20]
                          ]);

                          var options = {
                            chart: {
                              title: '{{$c}}'
                             
                            }
                          };

                          var chart = new google.charts.Bar(document.getElementById('columnchart_material_p2'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                        }

                      </script>
                       <div id="columnchart_material_p2" style="width: 800px; height: 500px;"></div>
                </div>
              </div>  
 <br>
              <div class="row">
                <div class="col-md-6">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                           ['{{$d}}', 'คะเเนน'],
                              <?php
                            for ($x=1; $x <count($data3) ; $x+=2) { 
                              
                                echo  "['".$data3[$x-1]."', '".$data3[$x]."'],";
                            }
                             
                              ?>
                            ['คะเเนนเต็ม', 20]
                          ]);

                          var options = {
                            chart: {
                              title: '{{$d}}'
                              
                            }
                          };

                          var chart = new google.charts.Bar(document.getElementById('columnchart_material_p3'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                        }

                      </script>
                       <div id="columnchart_material_p3" style="width: 800px; height: 500px;"></div>
                </div>
                 <br>
                 <div class="col-md-5">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                           ['{{$e}}', 'คะเเนน'],
                              <?php
                            for ($x=1; $x <count($data4) ; $x+=2) { 
                              
                                echo  "['".$data4[$x-1]."', '".$data4[$x]."'],";
                            }
                             
                              ?>
                            ['คะเเนนเต็ม', 25]
                          ]);

                          var options = {
                            chart: {
                              title: '{{$e}}'
                             
                            }
                          };

                          var chart = new google.charts.Bar(document.getElementById('columnchart_materialp4'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                        }

                      </script>
                       <div id="columnchart_materialp4" style="width: 800px; height: 500px;"></div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([

                           ['{{$f}}', 'คะเเนน'],
                              <?php
                            for ($x=1; $x <count($data5) ; $x+=2) { 
                              
                                echo  "['".$data5[$x-1]."', '".$data5[$x]."'],";
                            }
                             
                              ?>
                            ['คะเเนนเต็ม', 15]
                          ]);

                          var options = {
                            chart: {
                              title: '{{$f}}'
                            
                            }
                          };

                          var chart = new google.charts.Bar(document.getElementById('columnchart_material_p5'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                        }

                      </script>
                       <div id="columnchart_material_p5" style="width: 800px; height: 500px;"></div>
                </div>
              </div>            
          
           
 
       
                 
 <div class="row"> 
           <div class="col-md-6">

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
                                          title: 'คะเเนนสุทธิ'
                                        };

                                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                        chart.draw(data, options);
                                      }
                                    </script>
                     <div id="piechart" style="width: 900px; height: 500px;"></div>
                
                     


                </div>
                <div class="col-md-5">
                      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                          var data = google.visualization.arrayToDataTable([
                            ['ด้าน', 'คะเเนนเต็ม', 'คะเเนนประเมิน'],
                            ['ด้านที่1', 50, {{$p1final}}],
                            ['ด้านที่2', 40, {{$p2final}}],
                            ['ด้านที่3', 30, {{$p3final}}],
                            ['ด้านที่4', 30, {{$p4final}}],
                            ['ด้านที่5', 25, {{$p5final}}],
                            ['คะเนนรวม', 100, {{$totle}}]
                          ]);

                          var options = {
                            chart: {
                              title: 'การประเมินประจำปี',
                              subtitle: 'ผลการประเมินประจำปี',
                            }
                          };

                          var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                          chart.draw(data, google.charts.Bar.convertOptions(options));
                        }

                      </script>
                       <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
                  </div>
              </div>
              @else
              <h1> ยังไม่มีข้อมูล</h1>
                   @endif
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
         
     
  @endsection