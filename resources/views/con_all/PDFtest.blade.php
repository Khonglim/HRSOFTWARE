<html>
<head>
    <style>
        body {
            font-family: 'examplefont', sans-serif;
            font-size: 18px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid;
        }

    </style>
    
</head>
<body>
    
    
        <?php $resultArray=array();  ?>
        <?php $d=0;  ?>
      <?php $i=0; ?>
        @foreach ($inter_sup as $inter )
        @if (	$inter->id_personal == $personal->id &&  $inter->chioce <= '20' )
        
            <?php array_push($resultArray,$inter->score);?> 
        @endif
        @endforeach

    
  <div class="page-break"> 
        <table class="table table-bordered">
            <thead>
              <tr>
                <th colspan="3" style="text-align:center">สรุปผลการประเมินพนักงาน</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center"><b>ชื่อ:</b> {{$personal->fronname}} {{$personal->name}} {{$personal->lastname}}</td>
                <td style="text-align:center"><b>ตำแหน่ง:</b> {{$personal->positionngg}}

                 <?php $s=0;  ?>
                  @foreach ($comment_sup as $conm )
                
                  @if (	$conm->id_posinal == $personal->id && $conm->chioce > '20' )  
                  @if($conm->chioce == '101')
                  <?php $s++;  ?>
                  @if($s == '1')
                 {{ $conm->comment_interview }} 
                 @endif
                  @endif

                @endif
                   @endforeach

             @foreach ($comment_interview as $conm )
                
                  @if (	$conm->id_posonal == $personal->id && $conm->chioce > '20' )  
                  @if($conm->chioce == '101')
                  <?php $s++;  ?>
                  @if($s == '1')
                 {{ $conm->comment_interview }} 
                 @endif
                  @endif

                @endif
                   @endforeach

                  
                </td>
                <td style="text-align:center"><b>บริษัท: </b>..................................................</td>
              </tr>
              <tr>
                <td colspan="3"><b>วันที่สมัคร:</b> {{$personal->created_at}} น.</td>
               
              </tr>
              <tr>
                <td colspan="3" style="text-align:center"><b>ผลสรุปการทดสอบ MBTI </b></td>
               
              </tr>

              <tr>
                  <td colspan="3">  
                    @forelse ($testmbti as  $testmbtis )
                      @if ($testmbtis->id_personal == $personal->id )
                      <b>ผลสรุปการทดสอบ MBTI  </b><br>
                     
                      <b>  ผลสรุป  </b> {{ $testmbtis->conclude }} 
                         {{  $testmbtis->meaning }} <br>
                        
                      <b> ผลสรุป ด้านการคิด </b><br>
                       
                         {{  $testmbtis->meaningtwo  }} <br>
                        
                         
                  @endif
                  @empty
                 
                  <center>        ไม่มีข้อมูลในส่วนนี้!    </center>  
                 
                    @endforelse  
                 
                
          
                </td>
              </tr>
              <tr>
                  <td colspan="3" style="text-align:center"><b>ผลสรุปการทดสอบ DISC</b></td>
                 
                </tr>

                <tr>
                    <td colspan="3"> 
                      @forelse ($testdisc as $testdis )
                            @if (	$testdis->id_personal == $personal->id)
                        
                    
                                <b>ผลสรุปการทดสอบ DISC</b><br>
                                {{ $testdis->meaning }} <br>
                    
                             
                    
                        @endif
                        @empty
                  
                <center>        ไม่มีข้อมูลในส่วนนี้!    </center>  
                        
                          @endforelse 
                      </td>
                </tr>

            </tbody>
          </table>
  </div> 


  <table >
    <thead>
      <tr>
        <th colspan="6" style="text-align:center">คะแนนประเมิน ระดับบังคับบัญชาขึ้นไป (Supervisory Level)</th>
      </tr>
    </thead>
    <tbody> 
    <?php  $col=6; $u=0; $v=0;  ?>   
    @forelse($inter_sup as $inter )
    @if (	$inter->id_personal == $personal->id &&  $inter->chioce > '20' &&  $inter->chioce != '102'
    
    &&  $inter->chioce != '103'
    &&  $inter->chioce != '104'
    &&  $inter->chioce != '105'
    &&  $inter->chioce != '106'
    )
      @if($u==0) 
    <?php echo "<tr align=center>"; ?>
        @endif
        <?php $u++; ?>
                    @if($u <=  $col) 
                  
                    <td>
                            
                            
                        @if($inter->chioce == '232')
                        
                     บุคลิกลักษณะได้<br> {{ $inter->score }} คะแนน
                         @endif
                       
                        
                         @if($inter->chioce == '233')
                         
                       คุณสมบัติได้ {{ $inter->score }} คะแนน
                          @endif
                        
                         
                          @if($inter->chioce == '234')
                          
                        สมรรถณะความสามารถได้ <br>{{ $inter->score }} คะแนน
                           @endif
                          
                           
                           @if($inter->chioce == '235')
                           
                         คามรู้เกี่ยวกับบริษัท และตำแหน่งงานได้ <br>{{ $inter->score }} คะแนน
                            @endif
                           
                            @if($inter->chioce == '236')
                           
                          ความเหมาะสมกับ<br>วัฒนธรรมองค์กร <br>{{ $inter->score }} คะแนน

                              @endif

                              @if($inter->chioce == '107')
                       
                      รวมทั้งหมด {{ $inter->score }} คะแนน
                        @endif
         
               </td>
                   @endif
                   @if($u==$col)
                                 <?php $u=0; ?>
                 <?php echo "</tr>"; ?>
                @endif
     
      @endif
      @empty
      <tr>
      <td colspan="6" style="text-align:center" >ไม่มีข้อมูลในส่วนนี้!</td>
      </tr>
      
    </tbody>
    @endforelse
  </table>
      <br>
    <table>
        <thead>
          <tr>
            <th  colspan="4" style="text-align:center">ความคิดเห็นจากผู้ประเมินระดับบังคับบัญชาขึ้นไป (Supervisory Level) </th>
          </tr>
        </thead>
        <tbody>
          
        <?php  $col3=5; $p=0;?>   
        @forelse ($comment_sup as $conm )
           @if (	$conm->id_posinal == $personal->id && $conm->chioce > '20'  &&  $conm->chioce != '101' )  
           @if($p==0) 
           <?php echo "<tr align=center>"; ?>
               @endif
               <?php $p++; ?>
               @if($p <=  $col3) 
                         <td>
                               @if($conm->chioce == '100')
   
                                 คำแนะนำ  {{ $conm->comment_interview }} 
             
                              @endif
                  
            
             
                  @if($conm->chioce == '199')
                
                  ความคิดเห็น  {{ $conm->comment_interview }} 
             
                   @endif
             
                   @if($conm->chioce == '200')
                
                  วันที่ {{ $conm->comment_interview }} 
                    @endif

                    @if($conm->chioce == '320')
                   ชื่อผู้ประเมิน {{ $conm->comment_interview }} 
                     @endif
               </td>
               @endif
                        @if($p==$col3)
                               <?php $p=0; ?>
                               <?php echo "</tr>"; ?>
                              @endif

          @endif


          @empty
          <tr>
            <td colspan="4" style="text-align:center" >ไม่มีข้อมูลในส่วนนี้!</td>
            </tr>
        @endforelse
        </tbody>
      </table>

<br><br>
        <table>
                <thead>
                  <tr>
                    <th colspan="6" style="text-align:center">คะแนนประเมิน ระดับปฎิบัติการ (Operational Level)</th>
                  </tr>
                </thead>
                <tbody>
                    <?php  $col4=6; $e=0;?>      
                     @forelse($con_interview as $coni )
                            @if (	$coni->id_personal == $personal->id &&  $coni->chioce > '20'  && $coni->chioce != '105'  && $coni->chioce != '106' 
                            
                            && $coni->chioce != '107'  && $coni->chioce != '108'  && $coni->chioce != '109'
                            
                            )
                             @if($e==0) 
                             <?php echo "<tr align=center>"; ?>
                                 @endif
                                 <?php $e++; ?>
                                 @if($e <=  $col4) 
                    <td>
                            
                            
                             @if($coni->chioce == '232')
                             
                          บุคลิกลักษณะได้<br> {{ $coni->score }} คะแนน
                              @endif
                            
                             
                              @if($coni->chioce == '233')
                              
                            คุณสมบัติได้ {{ $coni->score }} คะแนน
                               @endif
                             
                              
                               @if($coni->chioce == '234')
                               
                             สมรรถณะความสามารถได้ <br>{{ $coni->score }} คะแนน
                                @endif
                               
                                
                                @if($coni->chioce == '235')
                                
                              คามรู้เกี่ยวกับบริษัท และตำแหน่งงานได้ <br>{{ $coni->score }} คะแนน
                                 @endif
                                
                                 @if($coni->chioce == '236')
                                
                               ความเหมาะสมกับ<br>วัฒนธรรมองค์กร <br>{{ $coni->score }} คะแนน

                                   @endif

                                   @if($coni->chioce == '102')
                            
                           รวมทั้งหมด {{ $coni->score }} คะแนน
                             @endif
              
                    </td>
                    @endif
                    @if($e==$col4)
                           <?php $e=0; ?>
                           <?php echo "</tr>"; ?>
                          @endif
                  @endif




                  @empty
                  <tr>
                  <td colspan="6" style="text-align:center" >ไม่มีข้อมูลในส่วนนี้!</td>
                  </tr>
                    @endforelse
                </tbody>
              </table>
         <br> <br>



              <table>
                <thead>
                  <tr>
                    <th colspan="5" style="text-align:center">ความคิดเห็น ระดับปฎิบัติการ (Operational Level)</th>
                  </tr>
                </thead>
                <tbody>
                    <?php  $col5=5; $q=0;?>       
                     
                    @forelse ($comment_interview as $conm  )
        @if (	$conm->id_posinal == $personal->id && $conm->chioce > '20' )   
        @if($q==0) 
        <?php echo "<tr align=center>"; ?>
            @endif
            <?php $q++; ?>
            @if($q <=  $col5) 
<td>
            @if($conm->chioce == '103')
           
           คำแนะนำ  {{ $conm->comment_interview }} 

            @endif

            @if($conm->chioce == '101')
           
            ตำแหน่ง  {{ $conm->comment_interview }} 

             @endif

             @if($conm->chioce == '169')
           
             ความคิดเห็น  {{ $conm->comment_interview }} 

              @endif

              @if($conm->chioce == '123')
           
             วันที่ {{ $conm->comment_interview }} 

               @endif



               @if($conm->chioce == '320')
           
              ชื่อผู้ประเมิน {{ $conm->comment_interview }} 

                @endif



    </td>
    @endif
    @if($q==$col5)
    <?php $q=0; ?>
    <?php echo "</tr>"; ?>
   @endif
   @endif
  @empty
  <tr>
  <td colspan="5"  style="text-align:center">ไม่มีข้อมูลในส่วนนี้!</td>
  </tr>
    @endforelse
                </tbody>
              </table>

            

              


    
</body>
</html>