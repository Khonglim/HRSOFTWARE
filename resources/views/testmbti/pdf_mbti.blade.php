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
            font-size: 16px;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td,th{
            border:1px solid;
        }

.page-break {
    page-break-after: always;
}

    </style>
</head>
<body>
<div class="page-break">
<p style="text-align:center;"><img src="{{ public_path('img/NGG-10.png') }}" width="100px" height="100px"></p>
    คุณ: {{$testmbti->name}} {{$testmbti->lastname}}
                           
        <h3>คำตอบที่คุณเลือก:</h3>
       
                        <table>
                                <thead>
                                    <tr>
                                        <th style="text-align:center">M</th>
                                        <th style="text-align:center">B</th>
                                        <th style="text-align:center">T</th>
                                        <th style="text-align:center">I</th>
                                    </tr>
                                </thead>
                                <tbody>
                           <tr>
                                <td align ="center">
                                ข้อ 1: ตอบ {{$testmbti->answer1}}	
                                </td>

                                <td align ="center">
                                ข้อ 2: ตอบ	{{$testmbti->answer2}}
                                </td>
                                <td align ="center">
                                ข้อ 3: ตอบ {{$testmbti->answer3}}
                                </td>
                                <td align ="center">
                                ข้อ 4: ตอบ	{{$testmbti->answer4}}
                                </td>
                           </tr>
                           
                            <tr>
                                    <td align ="center">
                                ข้อ	5: ตอบ		{{$testmbti->answer5}}	
                                    </td>

                                    <td align ="center">
                                            ข้อ 6: ตอบ		{{$testmbti->answer6}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	7: ตอบ		{{$testmbti->answer7}}
                                    </td>
                                    <td align ="center">
                                            ข้อ		8: ตอบ	{{$testmbti->answer8}}
                                    </td>
                            </tr>
                            
                            <tr>
                                    <td align ="center">
                                            ข้อ	9: ตอบ	{{$testmbti->answer9}}	
                                    </td>

                                    <td align ="center">
                                            ข้อ	10: ตอบ	{{$testmbti->answer10}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	11: ตอบ		{{$testmbti->answer11}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	12: ตอบ	{{$testmbti->answer12}}
                                    </td>
                               </tr>
                               
                              <tr>
                                    <td align ="center">
                                            ข้อ	13: ตอบ		{{$testmbti->answer13}}	
                                    </td>

                                    <td align ="center">
                                            ข้อ	14: ตอบ		{{$testmbti->answer14}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	15: ตอบ			{{$testmbti->answer15}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	16: ตอบ	{{$testmbti->answer16}}
                                    </td>
                              </tr>
                              
                            <tr>
                                    <td align ="center">
                                            ข้อ	17: ตอบ		{{$testmbti->answer17}}	
                                    </td>

                                    <td align ="center">
                                            ข้อ	18: ตอบ		{{$testmbti->answer18}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	19: ตอบ			{{$testmbti->answer19}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	20: ตอบ	{{$testmbti->answer20}}
                                    </td>
                            </tr>
                            
                        
                             <tr>
                                    <td align ="center">
                                            ข้อ	21: ตอบ		{{$testmbti->answer21}}	
                                    </td>

                                    <td align ="center">
                                            ข้อ	22: ตอบ		{{$testmbti->answer22}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	23: ตอบ			{{$testmbti->answer23}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	24: ตอบ	{{$testmbti->answer24}}
                                    </td>
                            </tr>

                             <tr>
                                    <td align ="center">
                                            ข้อ	25: ตอบ		{{$testmbti->answer25}}	
                                    </td>

                                    <td align ="center">
                                            ข้อ	26: ตอบ		{{$testmbti->answer26}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	27: ตอบ			{{$testmbti->answer27}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	28: ตอบ	{{$testmbti->answer28}}
                                    </td>
                                </tr>

                                <tr>
                                        <td align ="center">
                                                ข้อ	29: ตอบ		{{$testmbti->answer29}}	
                                        </td>

                                        <td align ="center">
                                                ข้อ	30: ตอบ		{{$testmbti->answer30}}
                                        </td>
                                        <td align ="center">
                                                ข้อ	31: ตอบ			{{$testmbti->answer31}}
                                        </td>
                                        <td align ="center">
                                                ข้อ	32: ตอบ	{{$testmbti->answer32}}
                                        </td>
                                    </tr>

                                    
                                     
                                </tbody>
                            
                            </table>
<br><br><br><br>
     <table>
            <thead>
                <tr>
                        <th style="text-align:center">คะแนนสำหรับ "I"</th>
                        <th style="text-align:center">คะแนนสำหรับ "E"</th>
                        <th style="text-align:center">คะแนนสำหรับ "S"</th>
                        <th style="text-align:center">คะแนนสำหรับ "N"</th>
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
                    <td align= "center">คุณได้คะแนน {{$testmbti->scoreI}}  คะแนน</td>
                    <td align= "center">คุณได้คะแนน{{$testmbti->scoreE}}  คะแนน</td>
                    <td align= "center">คุณได้คะแนน {{$testmbti->scoreS}} คะแนน</td>
                    <td align= "center">คุณได้คะแนน{{$testmbti->scoreN}}  คะแนน</td>
                </tr>
            </tbody>
        </table>

       <b> ท่านได้คะแนน "I" กับ "E" อย่างไหนมากกว่ากันตอบ "{{$testmbti->answerIE}}"  </b><br>
                  หมายเหตุ:ถ้าได้คะแนน "I" เท่ากับ "E" จะไม่นับคะแนนข้อ 11  <br>
                  <b>ท่านได้คะแนน "S" กับ "N" อย่างไหนมากกว่ากันตอบ  "{{$testmbti->answerSN}}" </b><br>
                 หมายเหตุ:ถ้าได้คะแนน "S" เท่ากับ "N" จะไม่นับคะแนนข้อ 16

</div>


        <table>
                <thead >
                    <tr>
                            <th style="text-align:center">คะแนนสำหรับ "T"</th>
                            <th style="text-align:center">คะแนนสำหรับ "F"</th>
                            <th style="text-align:center">คะแนนสำหรับ "J"</th>
                            <th style="text-align:center">คะแนนสำหรับ "P"</th>
                        
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
                        <td align= "center">คุณได้คะแนน {{$testmbti->scoreI}} คะแนน</td>
                        <td align= "center">คุณได้คะแนน {{$testmbti->scoreF}} คะแนน</td>
                        <td align= "center">คุณได้คะแนน {{$testmbti->scoreJ}} คะแนน</td>
                        <td align= "center">คุณได้คะแนน {{$testmbti->scoreP}} คะแนน</td>
                    </tr>
                </tbody>
            </table>
        
      
                
                <b>  ท่านได้คะแนน "T" กับ "F" อย่างไหนมากกว่ากันตอบ "{{$testmbti->answerTF}}"  </b> <br>

                   หมายเหตุ:ถ้าได้คะแนน "T" เท่ากับ "F" จะไม่นับคะแนนข้อ 11 <br>
            
                   <b>   ท่านได้คะแนน "J" กับ "P" อย่างไหนมากกว่ากันตอบ  "{{$testmbti->answerJP}}"   </b> <br>
                
            
                    หมายเหตุ:ถ้าได้คะแนน "J" เท่ากับ "P" จะไม่นับคะแนนข้อ 16<br>
            
              
                    <b>  สรุปผลคือ  </b>	{{$testmbti->conclude}}   <br>
                    
                        {{$testmbti->meaning}}

                      
                 สรุปผลการคิด คือ  	{{$testmbti->meaningtwo}}   
                                                                               





</body>
</html>