@foreach ($testmbti as $testmbtio)
      {{$testmbtio['id'] }}
    @endforeach


<?php   $i=0;  $j=0;  $k=0;  $f=0; $o=0;  $w=0;  $h=0;  $p=0; $q=0;$t=1;?>
@for ($u = 0; $u < 32; $u++)

             @if($testmbti->answer2 == 'ก'  && $testmbti->answer6 == 'ก'
             && $testmbti->answer11 == 'ก'&& $testmbti->answer15 == 'ข' 
             && $testmbti->answer19 == 'ข' && $testmbti->answer22 == 'ก' 
             && $testmbti->answer27 == 'ข' && $testmbti->answer32 == 'ข')
             <?php    $i++ ;?>
              @endif 
              @if(($testmbti->answer2 == 'ข' )&& ($testmbti->answer6 == 'ข')
              && ($testmbti->answer11 == 'ข' )&& ($testmbti->answer15 == 'ก') 
              && ($testmbti->answer19 == 'ก') && ($testmbti->answer22 == 'ข') 
              && ($testmbti->answer27 == 'ก') && ($testmbti->answer32 == 'ก'))
              <?php    $j++; ?>
               @endif 

               @if(($testmbti->answer1 == 'ข' )&& ($testmbti->answer10 == 'ข')
               && ($testmbti->answer13 == 'ก' )&& ($testmbti->answer16 == 'ก') 
               && ($testmbti->answer17 == 'ก') && ($testmbti->answer21 == 'ก') 
               && ($testmbti->answer28 == 'ข') && ($testmbti->answer30 == 'ข'))
               <?php    $k++ ;?>
                @endif 
                @if(($testmbti->answer1 == 'ก' )&& ($testmbti->answer10 =='ก')
                && ($testmbti->answer13 == 'ข' )&& ($testmbti->answer16 == 'ข') 
                && ($testmbti->answer17 == 'ข') && ($testmbti->answer21 == 'ข') 
                && ($testmbti->answer28 == 'ก') && ($testmbti->answer30 == 'ก'))
                <?php    $f++; ?>
                 @endif 

                 @if(($testmbti->answer3 == 'ก' )&& ($testmbti->answer5 =='ก')
                 && ($testmbti->answer12 == 'ก' )&& ($testmbti->answer14 == 'ข') 
                 && ($testmbti->answer20 == 'ก') && ($testmbti->answer24 == 'ข') 
                 && ($testmbti->answer25 == 'ก') && ($testmbti->answer29 == 'ข'))
                 <?php    $o++; ?>
                  @endif
                  @if(($testmbti->answer3 == 'ข' ) && ($testmbti->answer5 =='ข')
                  && ($testmbti->answer12 == 'ข' )&& ($testmbti->answer14 == 'ก') 
                  && ($testmbti->answer20 == 'ข') && ($testmbti->answer24 == 'ก') 
                  && ($testmbti->answer25 == 'ข') && ($testmbti->answer29 == 'ก'))
                  <?php    $w++; ?>
                   @endif  
    @endfor   

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