
@extends('layouts.main')
@section('content')

<?php 
$i=0;
$j=0;
$k=0;
$f=0;

$o=0;
$w=0;
$h=0;
$p=0;
?>
        @foreach($_POST as $choice => $answer)
           @if($choice != '_token')
             @if(($choice == '2' && $answer == '1' ) || ($choice == '6' && $answer == '1')
             || ($choice == '11' && $answer == '1' )|| ($choice == '15' && $answer == '2') 
             || ($choice == '19' && $answer == '2') || ($choice == '22' && $answer == '1') 
             || ($choice == '27' && $answer == '2') || ($choice == '32' && $answer == '2'))
             <?php    $i++ ;?>
              @endif 
              @if(($choice == '2' && $answer == '2' ) || ($choice == '6' && $answer == '2')
              || ($choice == '11' && $answer == '2' )|| ($choice == '15' && $answer == '1') 
              || ($choice == '19' && $answer == '1') || ($choice == '22' && $answer == '2') 
              || ($choice == '27' && $answer == '1') || ($choice == '32' && $answer == '1'))
              <?php    $j++; ?>
               @endif 

               @if(($choice == '1' && $answer == '2' ) || ($choice == '10' && $answer == '2')
               || ($choice == '13' && $answer == '1' )|| ($choice == '16' && $answer == '1') 
               || ($choice == '17' && $answer == '1') || ($choice == '21' && $answer == '1') 
               || ($choice == '28' && $answer == '2') || ($choice == '30' && $answer == '2'))
               <?php    $k++ ;?>
                @endif 
                @if(($choice == '1' && $answer == '1' ) || ($choice == '10' && $answer =='1')
                || ($choice == '13' && $answer == '2' )|| ($choice == '16' && $answer == '2') 
                || ($choice == '17' && $answer == '2') || ($choice == '21' && $answer == '2') 
                || ($choice == '28' && $answer == '1') || ($choice == '30' && $answer == '1'))
                <?php    $f++; ?>
                 @endif 

                 @if(($choice == '3' && $answer == '1' ) || ($choice == '5' && $answer =='1')
                 || ($choice == '12' && $answer == '1' )|| ($choice == '14' && $answer == '2') 
                 || ($choice == '20' && $answer == '1') || ($choice == '24' && $answer == '2') 
                 || ($choice == '25' && $answer == '1') || ($choice == '29' && $answer == '2'))
                 <?php    $o++; ?>
                  @endif
                  @if(($choice == '3' && $answer == '2' ) || ($choice == '5' && $answer =='2')
                  || ($choice == '12' && $answer == '2' )|| ($choice == '14' && $answer == '1') 
                  || ($choice == '20' && $answer == '2') || ($choice == '24' && $answer == '1') 
                  || ($choice == '25' && $answer == '2') || ($choice == '29' && $answer == '1'))
                  <?php    $w++; ?>
                   @endif  
              

                   @if(($choice == '4' && $answer == '1' ) || ($choice == '7' && $answer =='1')
                   || ($choice == '8' && $answer == '2' )|| ($choice == '9' && $answer == '1') 
                   || ($choice == '18' && $answer == '2') || ($choice == '23' && $answer == '2') 
                   || ($choice == '26' && $answer == '1') || ($choice == '31' && $answer == '1'))
                   <?php    $h++; ?>
                    @endif
                    @if(($choice == '4' && $answer == '2' ) || ($choice == '7' && $answer =='2')
                    || ($choice == '8' && $answer == '1' )|| ($choice == '9' && $answer == '2') 
                    || ($choice == '18' && $answer == '1') || ($choice == '23' && $answer == '1') 
                    || ($choice == '26' && $answer == '2') || ($choice == '31' && $answer == '2'))
                    <?php    $p++; ?>
                     @endif  


           @endif
         @endforeach

         @if($i == $j && $i !=0 && $j != 0)
         @foreach($_POST as $choice => $answer)
         @if($choice == '11' && $answer == '2' )
         <?php    $j--; ?>
         @elseif($choice == '11' && $answer == '1' )
         <?php    $i--; ?>
         @endif
         @endforeach
         @endif


         @if($k == $f && $k !=0 && $f != 0)
         @foreach($_POST as $choice => $answer)
         @if($choice == '16' && $answer == '2' )
         <?php    $k--; ?>
         @elseif($choice == '16' && $answer == '1' )
         <?php    $f--; ?>
         @endif
         @endforeach
         @endif

         @if($o == $w && $o !=0 && $w != 0)
         @foreach($_POST as $choice => $answer)
         @if($choice == '24' && $answer == '2' )
         <?php    $o--; ?>
         @elseif($choice == '24' && $answer == '1' )
         <?php    $w--; ?>
         @endif
         @endforeach
         @endif

         @if($h == $p && $h !=0 && $p != 0)
         @foreach($_POST as $choice => $answer)
         @if($choice == '23' && $answer == '2' )
         <?php    $h--; ?>
         @elseif($choice == '23' && $answer == '1' )
         <?php    $p--; ?>
         @endif
         @endforeach
         @endif
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-11">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">การให้คะแนน: นับ 1 คะแนน สำหรับแต่ละคำตอบของท่านในแบบเฉลยต่อไปนี้</h3>
            </div>
        
              <div class="box-body">
                  <div class ="form-group">
               คะแนนของคุณ: {{ $name =  $_POST["name"]   }} 
              </div>
              <div class ="form-group">
                   <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>คะแนนสำหรับ "I"</th>
                            <th>คะแนนสำหรับ "E"</th>
                            <th>คะแนนสำหรับ "S"</th>
                            <th>คะแนนสำหรับ "N"</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td align= "center">2 ก<br>6 ก<br>11 ก<br>15 ข<br>19 ข<br>22 ก<br>27 ข<br>32 ข</td>
                            <td align= "center">2 ข<br>6 ข<br>11 ข<br>15 ก<br>19 ก<br>22 ข<br>27 ก<br>32 ก</td>
                            <td align= "center">1 ข<br>10 ข<br>13 ก<br>16 ก<br>17 ก<br>21 ก<br>28 ข<br>30 ข</td>
                            <td align= "center">1 ก<br>10 ก<br>13 ข<br>16 ข<br>17 ข<br>21 ข<br>28 ก<br>30 ก</td>
                        </tr>
                        <tr>
                          <td>คุณได้คะแนน {{$i}} คะแนน</td>
                          <td>คุณได้คะแนน {{$j}} คะแนน</td>
                          <td>คุณได้คะแนน {{$k}} คะแนน</td>
                          <td>คุณได้คะแนน {{$f}} คะแนน</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class ="form-group">
                    ท่านได้คะแนน "I" กับ "E" อย่างไหนมากกว่ากันตอบ @if($i>$j) "I" @else "E" @endif หมายเหตุ:ถ้าได้คะแนน "I" เท่ากับ "E" จะไม่นับคะแนนข้อ 11<br>
                    ท่านได้คะแนน "S" กับ "N" อย่างไหนมากกว่ากันตอบ @if($k>$f) "S" @else "N" @endif หมายเหตุ:ถ้าได้คะแนน "S" เท่ากับ "N" จะไม่นับคะแนนข้อ 16
                    </div>
                  <div class ="form-group">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                              <th>คะแนนสำหรับ "T"</th>
                              <th>คะแนนสำหรับ "F"</th>
                              <th>คะแนนสำหรับ "J"</th>
                              <th>คะแนนสำหรับ "P"</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td align= "center">3 ก<br>5 ก<br>12 ก<br>14 ข<br>20 ก<br>24 ข<br>25 ก<br>29 ข</td>
                          <td align= "center">3 ข<br>5 ข<br>12 ข<br>14 ก<br>20 ข<br>24 ก<br>25 ข<br>29 ก</td>
                          <td align= "center">4 ก<br>7 ก<br>8 ข<br>9 ก<br>18 ข<br>23 ข<br>26 ก<br>31 ก</td>
                          <td align= "center">4 ข<br>7 ข<br>8 ก<br>9 ข<br>18 ก<br>23 ก<br>26 ข<br>31 ข</td>
                            
                          </tr>
                          <tr>
                            <td>คุณได้คะแนน {{$o}} คะแนน</td>
                            <td>คุณได้คะแนน {{$w}} คะแนน</td>
                            <td>คุณได้คะแนน {{$h}} คะแนน</td>
                            <td>คุณได้คะแนน {{$p}} คะแนน</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class ="form-group">
                        ท่านได้คะแนน "T" กับ "F" อย่างไหนมากกว่ากันตอบ @if($o>$w) "T" @else "F" @endif หมายเหตุ:ถ้าได้คะแนน "T" เท่ากับ "F" จะไม่นับคะแนนข้อ 11<br>
                        ท่านได้คะแนน "J" กับ "P" อย่างไหนมากกว่ากันตอบ @if($h>$p) "J" @else "P" @endif หมายเหตุ:ถ้าได้คะแนน "J" เท่ากับ "P" จะไม่นับคะแนนข้อ 16
                        </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">ExportPDF</button>
              </div>
              <!-- /.box-footer -->
            
          </div>
        </div> 
         
</div>
  </div>
 
  @endsection
