@extends('layouts.main')
@section('content')
 <style>
#myDIV {
}
#swapname {
    position: absolute;
    top: 48px;
    right: 15px;
}
.chart {
  width: 100%; 
  min-height: 400px;
}
.row {
  margin:0 !important;
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
   <script src='https://www.google.com/jsapi'></script>
<div class="content-wrapper">
  <section class="content" >
    <div class="row">
      <div class="col-xs-12,col-md-6,col-ms-3" >
        <div class="box"  style="background-color: #edf9ff;">
          <div class="box-header" style=" text-align: center;">
            <h2 class="box-title" >ผลการประเมิน</h2>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <?php    $i=0; $count=0; $count2=0;  $j=0; $k=0; $p1=0;  $p2=0; $p3=0;  $p4=0; $p5=0; $p1final=0;  $p2final=0; $p3final=0;  $p4final=0; $p5final=0; $a='ชื่อ ผู้ประเมิน'; $b='';  $c=''; $d='';  $e=''; $f=''; $totle=0; $tester='';  $data1 = array();
            $data2 = array();$data3 = array();$data4 = array();$data5 = array(); $istest=''; $change=''; $change2=0;$data1change = array();
            $data2change = array();$data3change = array();$data4change = array();$data5change = array(); $comment1 = array();$comment2 = array();$comment3 = array();$comment4 = array();$comment5 = array(); $commentcount=0; $commenttemp=''; ?>
             
   
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
                          <div id="swapname"> <a href="{{'evareportblindnamev2_officer'}}" class="btn btn-primary btn-lg" ><i class="fa fa-eye-slash fa-6" aria-hidden="true"></i></a></div>
        
                          <button  type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="myFunction()" >ตารางแสดงผล</button>

                        <div id="myDIV" style="display: none;">
                           <div class=" row">
                            <div  class="table-responsive">
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
                  @if($ngg_emp->nem_id == $idtest)
                   <?php  $istest=$ngg_emp->nem_thai_firstname; ?>
                   @foreach($timeattendant as $timeatten)
                              @if($timeatten->net_employee_id == $ngg_emp->nem_id)

                                <?php 
                              $sick_leave =number_format( $timeatten->net_sick_leave*0.2, 2);
                              $personal_leave = number_format($timeatten->net_personal_leave*0.4, 2);
                              $late = number_format($timeatten->net_late*0.25, 2);
                              $miss_work = number_format($timeatten->net_miss_work*3, 2);
                              $annual_leave = number_format($timeatten->net_annual_leave*0.1, 2);
                              $totle_atten = $sick_leave+$personal_leave+$late+$miss_work+$annual_leave;
                              $p5=number_format($totle_atten, 2);
                                ?>
                            
                                @endif
                             @endforeach
                  @endif
                       @if($ngg_emp->nem_id == $emp->nee_is_employee  )

                                  <?php  $k=$ngg_emp->nem_id;  $i++; $j+=$ngg_eva->nes_q_point;?>
                                   
                             @switch($i)
                                      @case($i==8)
                                      
                                      <?php  $j=($j/50)*15; $p1=number_format($j, 2);  ?>
                                     
                                      <?php $j=0;?>
                                          @break
                                      @case($i==13)
                                     
                                      <?php  $j=($j/25)*25;$p2=number_format($j, 2); ?>
                                         
                                      <?php  $j=0;?>
                                          @break
                                      @case($i==18)
                                     
                                      <?php  $j=($j/25)*25; $p3=number_format($j, 2);?>
                                      
                                      <?php $j=0;?>
                                          @break
                                      @case($i==23)
                                     
                                      <?php  $j=($j/30)*20; $p4=number_format($j, 2);?>
                                      
                                     <?php $j=0;?>
                                          @break
                                  @endswitch

                                  
                           
                            @if($i==23)


                            <?php  $change = $ngg_emp->nem_thai_firstname; $change2++;?>

                              @foreach($ngg_evaresult_comment as $ngg_comment )

                    @if($ngg_eva->nes_evaluate_employee_id == $ngg_comment->nec_evaluate_employee_id)
                                  <?php $commentcount++;  $commenttemp = $ngg_comment->nec_comment; ?>
                          @switch($commentcount)
                                      @case($commentcount==1)
                                      <?php array_push($comment1, $change,$commenttemp); ?>
                                     
                                          @break
                                      @case($commentcount==2)  
                                      <?php array_push($comment2, $change,$commenttemp); ?>
                                      
                                          @break
                                      @case($commentcount==3)
                                      <?php array_push($comment3, $change,$commenttemp); ?>
                                      
                                          @break
                                      @case($commentcount==4)
                                      <?php array_push($comment4, $change,$commenttemp); ?>
                                      
                                          @break
                                      @case($commentcount==5)
                                      <?php array_push($comment5, $change,$commenttemp); 
                                      $commentcount =0;
                                      ?>

                                          @break
                                  @endswitch

                    @endif

                @endforeach

                            <td>{{Form::label('คุณ','คุณ')}}{{Form::label('nee_id1',$change)}}</td>
                            
                            <td>{{$p1}}<?php  $p1final+=$p1;?></td>
                            <td>{{$p2}}<?php  $p2final+=$p2;?></td>
                            <td>{{$p3}}<?php  $p3final+=$p3;?></td>
                            <td>{{$p4}}<?php  $p4final+=$p4;?></td>
                            <td>{{$p5}}<?php  $p5final+=$p5;?></td>

                                             
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

                          </tr>



                                @endif
                     
                  @endforeach 
                   @endif  
                @endforeach
              @endforeach

                        </tbody>

                      </table>
                      </div> 
                      </div> 
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

                <div class="col-md-12">

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
              </div>
              </div>
                  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart1);

                        function drawChart1() {
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
                            height: 400,
                            chart: {
                              title: '{{$b}}',
                               
                            }
                          };

                           
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
                              <?php
                            for ($x=1; $x <count($data2) ; $x+=2) { 
                              
                                echo  "['".$data2[$x-1]."', '".$data2[$x]."'],";
                            }
                             
                              ?>
                            ['คะเเนนเต็ม', 20]
                          ]);

                          var options = {
                            height: 400,
                            chart: {
                              title: '{{$c}}'
                             
                            }
                          };

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
                              <?php
                            for ($x=1; $x <count($data3) ; $x+=2) { 
                              
                                echo  "['".$data3[$x-1]."', '".$data3[$x]."'],";
                            }
                             
                              ?>
                            ['คะเเนนเต็ม', 20]
                          ]);

                          var options = {
                            height:400,
                            chart: {
                              title: '{{$d}}'
                              
                            }
                          };

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
                              <?php
                            for ($x=1; $x <count($data4) ; $x+=2) { 
                              
                                echo  "['".$data4[$x-1]."', '".$data4[$x]."'],";
                            }
                             
                              ?>
                            ['คะเเนนเต็ม', 25]
                          ]);

                          var options = {
                            height:400,
                            chart: {
                              title: '{{$e}}'
                             
                            }
                          };

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
                              <?php
                            for ($x=1; $x <count($data5) ; $x+=2) { 
                              
                                echo  "['".$data5[$x-1]."', '".$data5[$x]."'],";
                            }
                             
                              ?>
                            ['คะเเนนเต็ม', 15]
                          ]);

                          var options = {
                            height:400,
                            chart: {
                              title: '{{$f}}'
                            
                            }
                          };

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
                            ['ด้าน', 'คะเเนนเต็ม', 'คะเเนนประเมิน'],
                            ['ด้านที่1', 50, {{$p1final}}],
                            ['ด้านที่2', 40, {{$p2final}}],
                            ['ด้านที่3', 30, {{$p3final}}],
                            ['ด้านที่4', 30, {{$p4final}}],
                            ['ด้านที่5', 25, {{$p5final}}],
                            ['คะเนนรวม', 100, {{$totle}}]
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
                <div>
               <div class="row">
          <div class="col-md-6" >
                <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info" >
            <div class="box-header with-border">
              <h3 class="box-title">{{$b}}</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div id="columnchart_material_p1" class="charts"></div> 

            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
               <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">ข้อคิดเห็นเพิ่มเติม</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
             <h5>
                              <?php
                            for ($x=1; $x <count($comment1) ; $x+=2) { 
                              
                                echo  $comment1[$x-1]."&nbsp;:&nbsp;".$comment1[$x]."<br><br>";
                            }
                             
                              ?>
               </h5>                 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
              
                             
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div> 
        <!-- /.col -->
 

        <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info" >
            <div class="box-header with-border">
              <h3 class="box-title">{{$c}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
                       <div id="columnchart_material_p2" class="charts"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">

                   <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">ข้อคิดเห็นเพิ่มเติม</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <h5>
                              <?php
                            for ($x=1; $x <count($comment2) ; $x+=2) { 
                              
                                echo  $comment2[$x-1]."&nbsp;:&nbsp;".$comment2[$x]."<br><br>";
                            }
                             
                              ?>
               </h5>     
                     
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
            
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>

        <div class=" row"> 
        <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info" >
            <div class="box-header with-border">
              <h3 class="box-title">{{$d}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
              <div id="columnchart_material_p3" class="charts"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">ข้อคิดเห็นเพิ่มเติม</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <h5>
                              <?php
                            for ($x=1; $x <count($comment3) ; $x+=2) { 
                              
                                echo  $comment3[$x-1]."&nbsp;:&nbsp;".$comment3[$x]."<br><br>";
                            }
                             
                              ?>
               </h5>    
                     
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
            
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info" >
            <div class="box-header with-border">
              <h3 class="box-title">{{$e}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
                        <div id="columnchart_materialp4" class="charts"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
             <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">ข้อคิดเห็นเพิ่มเติม</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <h5>
                              <?php
                            for ($x=1; $x <count($comment4) ; $x+=2) { 
                              
                                echo  $comment4[$x-1]."&nbsp;:&nbsp;".$comment4[$x]."<br><br>";
                            }
                             
                              ?>
               </h5>    
                     
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
            
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
        <div class="row">
        <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info" >
            <div class="box-header with-border">
              <h3 class="box-title">{{$f}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <div id="columnchart_material_p5" class="charts"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">ข้อคิดเห็นเพิ่มเติม</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <h5>
                            <?php
                            for ($x=1; $x <count($comment5) ; $x+=2) { 
                              echo  $comment5[$x-1]."&nbsp;:&nbsp;".$comment5[$x]."<br><br>"; 
                            }?>
             </h5>   
                     
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
              
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->  
      </div>
      
      <div class="row">
         <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info" >
            <div class="box-header with-border">
              <h3 class="box-title">คะเเนนสุทธิ</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                         
                           <div id="piechart"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
             
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
          <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info" >
            <div class="box-header with-border">
              <h3 class="box-title">คะเเนนสุทธิ</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                       
                         <div id="columnchart_material" class="charts"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
             
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>
        </div>

              @else
              <h1> ยังไม่มีข้อมูล</h1>
                   @endif
          
        </div>
      </div>
    </div>
  </section>
</div>
    
   
  @endsection