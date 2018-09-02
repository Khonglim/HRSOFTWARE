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
           
            width: 100%;
        }
        td,th{
           
        }
    </style>
</head>
<body>
        

    <table >
        <thead>
          <tr>
            <th>คะแนนประเมิน ระดับบังคับบัญชาขึ้นไป (Supervisory Level)</th>
          </tr>
        </thead>
        @forelse($inter_sup as $inter )
        @if (	$inter->id_personal == $personal->id &&  $inter->chioce > '20' )
        <tbody>
              
          
              
          <tr>
            <td>
                  
                    @if($inter->chioce == '102')
                    
                   ผลรวมจากการเลือก 5 ได้ {{ $inter->score }} คะแนน
                     @endif
                    
              
                     
                     @if($inter->chioce == '103')
                     
                    ผลรวมจากการเลือก 4 ได้ {{ $inter->score }} คะแนน
                      @endif
                    
                     
                      @if($inter->chioce == '104')
                      
                     ผลรวมจากการเลือก 3 ได้ {{ $inter->score }} คะแนน
                       @endif
                     
                      
                       @if($inter->chioce == '105')
                       
                      ผลรวมจากการเลือก 2 ได้ {{ $inter->score }} คะแนน
                        @endif
                       
                        
                        @if($inter->chioce == '106')
                        
                       ผลรวมจากการเลือก 1 ได้ {{ $inter->score }} คะแนน
                         @endif
                        
                         @if($inter->chioce == '107')
                        
                         ผลรวม  {{ $inter->score }} คะแนน
                           @endif
            </td>
          </tr>
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
            <th>ความคิดเห็น ระดับบังคับบัญชาขึ้นไป (Supervisory Level) </th>
          </tr>
        </thead>
        <tbody>
              
                @forelse ($comment_sup as $conm )
                @if (	$conm->id_posinal == $personal->id && $conm->comment_interview != '' &&  $conm->chioce != '100'  &&  $conm->chioce != '101'  &&  $conm->chioce != '199'   &&  $conm->chioce != '200'  &&  $conm->chioce != '320' )
          <tr>
            <td>
                    ข้อ {{ $conm->chioce }} จากการประเมิน
                    มีความคิดเห็น  {{ $conm->comment_interview }}
            </td>
          </tr>
          @endif
@endforeach
@foreach ($comment_sup as $conm )
@if (	$conm->id_posinal == $personal->id && $conm->chioce > '20' )   
<tr>
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
</tr>
@endif
@empty
<tr>
<td colspan="6" >ไม่มีข้อมูลในส่วนนี้!</td>
</tr>
@endforelse
        </tbody>
      </table>

<br>

     
        <table>
                <thead>
                  <tr>
                    <th>คะแนนประเมิน ระดับปฎิบัติการ (Operational Level)</th>
                     
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
              <br>
              <table>
                <thead>
                  <tr>
                    <th>ความคิดเห็น ระดับปฎิบัติการ (Operational Level)</th>
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