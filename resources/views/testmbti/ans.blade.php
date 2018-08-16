@extends('layouts.main')
@section('content')

<style>
table{
            border-collapse: collapse;
            width: 100%;
            font-size: 18px;
        }
</style>

<?php   $i=0;  $j=0;  $k=0;  $f=0; $o=0;  $w=0;  $h=0;  $p=0; 

$a=1;
$x=0;
$r=1;

?>


        @foreach($_POST as $choice => $answer)
        @if($choice != '_token'&& $choice != 'name'  && $choice != 'lastname'  && $choice != 'ID')
             @if(($choice == 'question2' && $answer == 'ก' ) || ($choice == 'question6' && $answer == 'ก')
             || ($choice == 'question11' && $answer == 'ก' )|| ($choice == 'question15' && $answer == 'ข') 
             || ($choice == 'question19' && $answer == 'ข') || ($choice == 'question22' && $answer == 'ก') 
             || ($choice == 'question27' && $answer == 'ข') || ($choice == 'question32' && $answer == 'ข'))
             <?php    $i++ ;?>
              @endif 
              @if(($choice == 'question2' && $answer == 'ข' )|| ($choice == 'question6' && $answer == 'ข')
              || ($choice == 'question11' && $answer == 'ข' )|| ($choice == 'question15' && $answer == 'ก') 
              || ($choice == 'question19' && $answer == 'ก') || ($choice == 'question22' && $answer == 'ข') 
              || ($choice == 'question27' && $answer == 'ก') || ($choice == 'question32' && $answer == 'ก'))
              <?php    $j++; ?>
               @endif 

               @if(($choice == 'question1' && $answer == 'ข' )|| ($choice == 'question10' && $answer == 'ข')
               || ($choice == 'question13' && $answer == 'ก' )|| ($choice == 'question16' && $answer == 'ก') 
               || ($choice == 'question17' && $answer == 'ก') || ($choice == 'question21' && $answer == 'ก') 
               || ($choice == 'question28' && $answer == 'ข') || ($choice == 'question30' && $answer == 'ข'))
               <?php    $k++ ;?>
                @endif 
                @if(($choice == 'question1' && $answer == 'ก' )|| ($choice == 'question10' && $answer =='ก')
                || ($choice == 'question13' && $answer == 'ข' )|| ($choice == 'question16' && $answer == 'ข') 
                || ($choice == 'question17' && $answer == 'ข') || ($choice == 'question21' && $answer == 'ข') 
                || ($choice == 'question28' && $answer == 'ก') || ($choice == 'question30' && $answer == 'ก'))
                <?php    $f++; ?>
                 @endif 

                 @if(($choice == 'question3' && $answer == 'ก' )|| ($choice == 'question5' && $answer =='ก')
                 || ($choice == 'question12' && $answer == 'ก' )|| ($choice == 'question14' && $answer == 'ข') 
                 || ($choice == 'question20' && $answer == 'ก') || ($choice == 'question24' && $answer == 'ข') 
                 || ($choice == 'question25' && $answer == 'ก') || ($choice == 'question29' && $answer == 'ข'))
                 <?php    $o++; ?>
                  @endif
                  @if(($choice == 'question3' && $answer == 'ข' ) || ($choice == 'question5' && $answer =='ข')
                  || ($choice == 'question12' && $answer == 'ข' )|| ($choice == 'question14' && $answer == 'ก') 
                  || ($choice == 'question20' && $answer == 'ข') || ($choice == 'question24' && $answer == 'ก') 
                  || ($choice == 'question25' && $answer == 'ข') || ($choice == 'question29' && $answer == 'ก'))
                  <?php    $w++; ?>
                   @endif  
              

                   @if(($choice == 'question4' && $answer == 'ก' )|| ($choice == 'question7' && $answer =='ก')
                   || ($choice == 'question8' && $answer == 'ข' )|| ($choice == 'question9' && $answer == 'ก') 
                   || ($choice == 'question18' && $answer == 'ข') || ($choice == 'question23' && $answer == 'ข') 
                   || ($choice == 'question26' && $answer == 'ก') || ($choice == 'question31' && $answer == 'ก'))
                   <?php    $h++; ?>
                    @endif
                    @if(($choice == 'question4' && $answer == 'ข' )|| ($choice =='question7' && $answer =='ข')
                    || ($choice == 'question8' && $answer == 'ก' )|| ($choice == 'question9' && $answer == 'ข') 
                    || ($choice == 'question18' && $answer == 'ก') || ($choice == 'question23' && $answer == 'ก') 
                    || ($choice == 'question26' && $answer == 'ข') || ($choice == 'question31' && $answer == 'ข'))
                    <?php    $p++; ?>
                     @endif  


           @endif
         @endforeach

         @if($i == $j && $i !=0 && $j != 0)
         @foreach($_POST as $choice => $answer)
         @if($choice == 'question11' && $answer == 'ข' )
         <?php    $j--; ?>
         @elseif($choice == 'question11' && $answer == 'ก' )
         <?php    $i--; ?>
         @endif
         @endforeach
         @endif


         @if($k == $f && $k !=0 && $f != 0)
         @foreach($_POST as $choice => $answer)
         @if($choice == 'question16' && $answer == 'ข' )
         <?php    $k--; ?>
         @elseif($choice == 'question16' && $answer == 'ก' )
         <?php    $f--; ?>
         @endif
         @endforeach
         @endif

         @if($o == $w && $o !=0 && $w != 0)
         @foreach($_POST as $choice => $answer)
         @if($choice == 'question24' && $answer == 'ข' )
         <?php    $o--; ?>
         @elseif($choice == 'question24' && $answer == 'ก' )
         <?php    $w--; ?>
         @endif
         @endforeach
         @endif

         @if($h == $p && $h !=0 && $p != 0)
         @foreach($_POST as $choice => $answer)
         @if($choice == 'question23' && $answer == 'ข' )
         <?php    $h--; ?>
         @elseif($choice == 'question23' && $answer == 'ก' )
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
            {{Form::open(['url'=>'mbti',])}}
              <div class="box-body">
                  <div class ="form-group">
                      <div class="row"> 
                          <div class="col-md-2">
                              <div class="form-group">  
                      @isset($_POST['ID'])
                      <label> ไอดี::</label> {{Form::text("ID",$ide= $_POST['ID'],['class'=>'form-control','readonly'])}}  
                      <input type="text"  hidden/>
                      @endisset
                               </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group"> 
                      @isset($_POST['name'])
                      <label> ชื่อ::</label> {{Form::text("name",$name= $_POST['name'],['class'=>'form-control','readonly'])}}  
                      @endisset
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group"> 
                      @isset($_POST['lastname'])
                      <label> นามสกุล::</label> {{Form::text("lastname",$lastname= $_POST['lastname'],['class'=>'form-control','readonly'])}}  
                      @endisset
                    </div>
                  </div>
                    </div>
                      @foreach($_POST as $choice => $answer)
                      @if($choice != '_token'&& $choice != 'name'  && $choice != 'lastname'  && $choice != 'ID')
                      <?php    $x++; ?>
                      &emsp;  <input type="radio" name="question{{$r++}}"  value="{{$answer}}" checked  hidden/>ข้อ: {{$a++}}  ตอบ {{$answer}}&emsp;
                      @if($x == '10')
                      <br>
                      <?php    $x='0'; ?>
                        @endif
                      @endif
                    @endforeach
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
                          <td align= "center">คุณได้คะแนน {{$i}} คะแนน</td>
                          <td align= "center">คุณได้คะแนน {{$j}} คะแนน</td>
                          <td align= "center">คุณได้คะแนน {{$k}} คะแนน</td>
                          <td align= "center">คุณได้คะแนน {{$f}} คะแนน</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class ="form-group">
                    @if($i>$j)

                          <h4>ท่านได้คะแนน "I" กับ "E" อย่างไหนมากกว่ากันตอบ &emsp; "I" </h4>

                    @else
                    
                          <h4>ท่านได้คะแนน "I" กับ "E" อย่างไหนมากกว่ากันตอบ &emsp; "E" </h4>
                    
                    @endif 
                          &emsp;&emsp;หมายเหตุ:ถ้าได้คะแนน "I" เท่ากับ "E" จะไม่นับคะแนนข้อ 11<br>

                    @if($k>$f)

                            <h4>ท่านได้คะแนน "S" กับ "N" อย่างไหนมากกว่ากันตอบ &emsp; "S" </h4>

                    @else
                           <h4>ท่านได้คะแนน "S" กับ "N" อย่างไหนมากกว่ากันตอบ &emsp; "N" </h4>
                      
                    @endif 
                      
                          &emsp;&emsp;หมายเหตุ:ถ้าได้คะแนน "S" เท่ากับ "N" จะไม่นับคะแนนข้อ 16

                    </div>
                  <div class ="form-group">
                    <table class="table table-bordered">
                        <thead >
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
                            <td align= "center">คุณได้คะแนน {{$o}} คะแนน</td>
                            <td align= "center">คุณได้คะแนน {{$w}} คะแนน</td>
                            <td align= "center">คุณได้คะแนน {{$h}} คะแนน</td>
                            <td align= "center">คุณได้คะแนน {{$p}} คะแนน</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class ="form-group">
                        @if($o>$w)
                          <h4>ท่านได้คะแนน "T" กับ "F" อย่างไหนมากกว่ากันตอบ &emsp; "T" </h4>
                        @else  
                          <h4>ท่านได้คะแนน "T" กับ "F" อย่างไหนมากกว่ากันตอบ &emsp; "F" </h4>
                        @endif 
                        &emsp;&emsp;
                        หมายเหตุ:ถ้าได้คะแนน "T" เท่ากับ "F" จะไม่นับคะแนนข้อ 11
                        @if($h>$p)
                        <h4>ท่านได้คะแนน "J" กับ "P" อย่างไหนมากกว่ากันตอบ &emsp; "J" </h4>
                        @else
                        <h4>ท่านได้คะแนน "J" กับ "P" อย่างไหนมากกว่ากันตอบ &emsp; "P" </h4>
                        @endif 
                           &emsp;&emsp;
                           หมายเหตุ:ถ้าได้คะแนน "J" เท่ากับ "P" จะไม่นับคะแนนข้อ 16
                        </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  {{ Form::submit('บันทึก',['class'=> 'btn btn-primary'])}}
            {{Form::close()}}
          {{ Html::link('mbti','เสร็จสิ้น',array('class ' => 'btn btn-primary')) }}
              </div>
              <!-- /.box-footer -->
          </div>
        </div> 
@endsection