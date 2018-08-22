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
    </style>
</head>
<body>
    คุณ: {{$testdisc->name}} {{$testdisc->lastname}}
              <h3 class="box-title">รายงานผลการทดสอบ</div>
                <table class="table table-striped">
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
                        ข้อ 1: ตอบ {{$testdisc->answer1}}	
                        </td>

                        <td align ="center">
                        ข้อ 2: ตอบ	{{$testdisc->answer2}}
                        </td>
                        <td align ="center">
                        ข้อ 3: ตอบ {{$testdisc->answer3}}
                        </td>
                        <td align ="center">
                        ข้อ 4: ตอบ	{{$testdisc->answer4}}
                        </td>
                   </tr>
                   
                    <tr>
                            <td align ="center">
                        ข้อ	5: ตอบ		{{$testdisc->answer5}}	
                            </td>

                            <td align ="center">
                                    ข้อ 6: ตอบ		{{$testdisc->answer6}}
                            </td>
                            <td align ="center">
                                    ข้อ	7: ตอบ		{{$testdisc->answer7}}
                            </td>
                            <td align ="center">
                                    ข้อ		8: ตอบ	{{$testdisc->answer8}}
                            </td>
                    </tr>
                    
                    <tr>
                            <td align ="center">
                                    ข้อ	9: ตอบ	{{$testdisc->answer9}}	
                            </td>

                            <td align ="center">
                                    ข้อ	10: ตอบ	{{$testdisc->answer10}}
                            </td>
                            <td align ="center">
                                    ข้อ	11: ตอบ		{{$testdisc->answer11}}
                            </td>
                            <td align ="center">
                                    ข้อ	12: ตอบ	{{$testdisc->answer12}}
                            </td>
                       </tr>
                       
                      <tr>
                            <td align ="center">
                                    ข้อ	13: ตอบ	 {{$testdisc->answer13}}	
                            </td>

                            <td align ="center">
                                    ข้อ	14: ตอบ	 {{$testdisc->answer14}}
                            </td>
                            <td align ="center">
                                    ข้อ	15: ตอบ	 {{$testdisc->answer15}}
                            </td>
                            <td align ="center">
                                    ข้อ	16: ตอบ	 {{$testdisc->answer16}}
                            </td>
                      </tr>
                      
                    <tr>
                            <td align ="center">
                                    ข้อ	17: ตอบ	{{$testdisc->answer17}}	
                            </td>

                            <td align ="center">
                                    ข้อ	18: ตอบ	{{$testdisc->answer18}}
                            </td>
                            <td align ="center">
                                    ข้อ	19: ตอบ	{{$testdisc->answer19}}
                            </td>
                            <td align ="center">
                                    ข้อ	20: ตอบ	{{$testdisc->answer20}}
                            </td>
                    </tr>
                    
                
                     <tr>
                            <td align ="center">
                                    ข้อ	21: ตอบ		{{$testdisc->answer21}}	
                            </td>

                            <td align ="center">
                                    ข้อ	22: ตอบ		{{$testdisc->answer22}}
                            </td>
                            <td align ="center">
                                    ข้อ	23: ตอบ			{{$testdisc->answer23}}
                            </td>
                            <td align ="center">
                                    ข้อ	24: ตอบ	{{$testdisc->answer24}}
                            </td>
                    </tr>

                     <tr>
                            <td align ="center">
                                    ข้อ	25: ตอบ		{{$testdisc->answer25}}	
                            </td>

                            <td align ="center">
                                    ข้อ	26: ตอบ		{{$testdisc->answer26}}
                            </td>
                            <td align ="center">
                                    ข้อ	27: ตอบ			{{$testdisc->answer27}}
                            </td>
                            <td align ="center">
                                    ข้อ	28: ตอบ	{{$testdisc->answer28}}
                            </td>
                        </tr>

                        <tr>
                                <td align ="center">
                                        ข้อ	29: ตอบ		{{$testdisc->answer29}}	
                                </td>

                                <td align ="center">
                                        ข้อ	30: ตอบ		{{$testdisc->answer30}}
                                </td>
                                <td align ="center">
                                        ข้อ	31: ตอบ			{{$testdisc->answer31}}
                                </td>
                                <td align ="center">
                                        ข้อ	32: ตอบ	{{$testdisc->answer32}}
                                </td>
                            </tr>

                            
                            <tr>
                                    <td align ="center">
                                            ข้อ 33: ตอบ    {{$testdisc->answer33}}	
                                    </td>

                                    <td align ="center">
                                            ข้อ	34: ตอบ	  {{$testdisc->answer34}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	35: ตอบ{{$testdisc->answer35}}
                                    </td>
                                    <td align ="center">
                                            ข้อ	36: ตอบ	{{$testdisc->answer36}}
                                    </td>
                                </tr>
                                <tr>
                                        <td align ="center">
                                                ข้อ	37: ตอบ		{{$testdisc->answer37}}	
                                        </td>

                                        <td align ="center">
                                                ข้อ	38: ตอบ		{{$testdisc->answer38}}
                                        </td>
                                        <td align ="center">
                                                ข้อ	39: ตอบ			{{$testdisc->answer39}}
                                        </td>
                                        <td align ="center">
                                                ข้อ	40: ตอบ	{{$testdisc->answer40}}
                                        </td>
                                    </tr>
                                    <tr>
                                            <td align ="center">
                                                    ข้อ 41: ตอบ		{{$testdisc->answer41}}	
                                            </td>

                                            <td align ="center">
                                                    ข้อ 42: ตอบ		{{$testdisc->answer42}}
                                            </td>
                                            <td align ="center">
                                                    ข้อ 43: ตอบ			{{$testdisc->answer43}}
                                    </td>
                                            <td align ="center">
                                                    ข้อ 44: ตอบ	{{$testdisc->answer44}}
                                            </td>
                                         </tr> 
                                         <tr>
                                                <td align ="center">
                                                        ข้อ 45: ตอบ		{{$testdisc->answer45}}	
                                                </td>

                                                <td align ="center">
                                                        ข้อ 46: ตอบ		{{$testdisc->answer46}}
                                                </td>
                                                <td align ="center">
                                                        ข้อ 47: ตอบ			{{$testdisc->answer47}}
                                        </td>
                                                <td align ="center">
                                                        ข้อ 48: ตอบ	{{$testdisc->answer48}}
                                                </td>
                                             </tr>                 
<tr>
<td align ="center">
    รวม {{$testdisc->scoreD}} คะแนน
</td>

<td align ="center">
        รวมคะแนน {{$testdisc->scoreI}} คะแนน
</td>
<td align ="center">
        รวมคะแนน {{$testdisc->scoreS}} คะแนน
</td>

<td align ="center">
        รวมคะแนน {{$testdisc->scoreC}} คะแนน
</td>
</tr>  


                        

</tbody>
            </table>

            สรุปผลคือ 
                {{$testdisc->meaning}}



</body>
</html>