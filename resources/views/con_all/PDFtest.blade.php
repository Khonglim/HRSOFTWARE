<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: "THSarabunNew";
            font-size: 20px;
        }
        table{
          border-collapse: collapse;
            width: 100%;
        }
        td,th{
          border:1px solid;
         
           
        }

         body { width: 100%; height: 100%; }  


.page-break {
    page-break-after: always;
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
                <td><b>ชื่อ:</b> {{$personal->fronname}} {{$personal->name}} {{$personal->lastname}}</td>
                <td><b>ตำแหน่ง:</b>

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
                </td>
                <td><b>บริษัท: </b>..................................................</td>
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
                 
                  ไม่มีข้อมูลในส่วนนี้!
                 
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
                 
                        ไม่มีข้อมูลในส่วนนี้!
                       
                          @endforelse 
                      </td>
                </tr>

            </tbody>
          </table>
  </div> 


  <table >
    <thead>
      <tr>
        <th colspan="5" style="text-align:center">คะแนนประเมิน ระดับบังคับบัญชาขึ้นไป (Supervisory Level)</th>
      </tr>
    </thead>
    <tbody> 
    <?php  $col=5; $u=0; $v=0;  ?>   
    @forelse($inter_sup as $inter )
    @if (	$inter->id_personal == $personal->id &&  $inter->chioce <= '20' )
      @if($u==0) 
    <?php echo "<tr align=center>"; ?>
        @endif
        <?php $u++; ?>
                    @if($u <=  $col) 
                  
                            <td>
                            @if(  $inter->group == '2' )
                         
                               
                            {{ $inter->score  }}
                           
                            
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
      <td colspan="6" >ไม่มีข้อมูลในส่วนนี้!</td>
      </tr>
      
    </tbody>
    @endforelse
  </table>
      <br>
    <table>
        <thead>
          <tr>
            <th  colspan="5" style="text-align:center">ความคิดเห็นจากผู้ประเมินระดับบังคับบัญชาขึ้นไป (Supervisory Level) </th>
          </tr>
        </thead>
        <tbody>
          
        <?php  $col3=5; $p=0;?>   
        @forelse ($comment_sup as $conm )
           @if (	$conm->id_posinal == $personal->id && $conm->chioce > '20' )  
           @if($p==0) 
           <?php echo "<tr align=center>"; ?>
               @endif
               <?php $p++; ?>
               @if($p <=  $col3) 
                         <td>
                               @if($conm->chioce == '100')
   
                                 คำแนะนำ  {{ $conm->comment_interview }} 
             
                              @endif
                  
                 @if($conm->chioce == '101')
                
                 ตำแหน่ง  {{ $conm->comment_interview }} 
             
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
            <td colspan="6" >ไม่มีข้อมูลในส่วนนี้!</td>
            </tr>
        @endforelse
        </tbody>
      </table>

<br><br>
        <table>
                <thead>
                  <tr>
                    <th colspan="6">คะแนนประเมิน ระดับปฎิบัติการ (Operational Level)</th>
                  </tr>
                </thead>
                <tbody>
                      
                     @forelse($con_interview as $coni )
                            @if (	$coni->id_personal == $personal->id &&  $coni->chioce > '20' )
                  <tr>
                    <td>
                            @if($coni->chioce == '105')
                            
                           ผลรวมจากการเลือก 5 ได้ {{ $coni->score }} คะแนน
                             @endif
                            
                             @if($coni->chioce == '106')
                             
                            ผลรวมจากการเลือก 4 ได้ {{ $coni->score }} คะแนน
                              @endif
                            
                             
                              @if($coni->chioce == '107')
                              
                             ผลรวมจากการเลือก 3 ได้ {{ $coni->score }} คะแนน
                               @endif
                             
                              
                               @if($coni->chioce == '108')
                               
                              ผลรวมจากการเลือก 2 ได้ {{ $coni->score }} คะแนน
                                @endif
                               
                                
                                @if($coni->chioce == '109')
                                
                               ผลรวมจากการเลือก 1 ได้ {{ $coni->score }} คะแนน
                                 @endif
                                
                                 @if($coni->chioce == '102')
                                
                                 ผลรวม  {{ $coni->score }} คะแนน
                                   @endif
                    </td>
                  </tr>
                  @endif
                  @empty
                  <tr>
                  <td colspan="6" >ไม่มีข้อมูลในส่วนนี้!</td>
                  </tr>
                    @endforelse
                </tbody>
              </table>
            </div>
              <table>
                <thead>
                  <tr>
                    <th colspan="6">ความคิดเห็น ระดับปฎิบัติการ (Operational Level)</th>
                  </tr>
                </thead>
                <tbody>
                      
                        @forelse ($comment_interview as $conm )
                        @if (	$conm->id_posinal == $personal->id && $conm->comment_interview != '' &&  $conm->chioce != '103'  &&  $conm->chioce != '101'  &&  $conm->chioce != '123'   &&  $conm->chioce != '169'  &&  $conm->chioce != '320' )
                  <tr>
                    <td>
                            ข้อ {{ $conm->chioce }} จากการประเมิน
                            มีความคิดเห็น  {{ $conm->comment_interview }}
                    </td>
                  </tr>
                  @endif
        @endforeach
        @foreach ($comment_interview as $conm  )
        @if (	$conm->id_posinal == $personal->id && $conm->chioce > '20' )   
  <tr>
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
  </tr>
  @endif
  @empty
  <tr>
  <td colspan="6" >ไม่มีข้อมูลในส่วนนี้!</td>
  </tr>
    @endforelse
                </tbody>
              </table>

            

              


    
</body>
</html>