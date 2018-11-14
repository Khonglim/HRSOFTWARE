<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Operate</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
      <style>
      body {
        font-family: 'Prompt', sans-serif;
       
      }
      </style>
  <link href="{{ asset('signaturepad/assets/jquery.signaturepad.css') }}" rel="stylesheet">
  

    </head>
<body>
      <div class="container">
      <style>
            #customers {
                font-family:'Prompt', sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
    
            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #customers tr:nth-child(even){background-color: #F6B7AE;}
    
            #customers tr:hover {background-color: #99ffff;}
    
            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #E96060;
                color: white;
            }
            </style>
    
    <div class="container-fluid">
            <div class="card">
                        <div class="card-header">การประเมินผลการทดลองงาน</div>
                        <div class="card-body">
                        <div class="form-group">
                        <div class="row">
                                    <div class="col-md-4 ">
                                                <div class="form-group ">
                                                    <label class="control-label ">ชื่อ-สกุล:</label>
                                                   
                                                <input type="text" class="form-control"  readonly value="{{$operate->first_name}}">
                                                   </div>
                                
                                            </div>
                                            <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                          <label class="control-label">รหัสพนักงาน:</label>
                                                      <input type="text" class="form-control" name="id_employ"  readonly  value="{{$operate->new_id_employ}}">
                                                
                                                         </div>
                                      
                                                  </div>
                                                  <div class="col-md-4 ">
                                                            <div class="form-group ">
                                                                <label class="control-label">ตำแหน่ง:</label>
                                                                <input type="text" class="form-control" name="position" readonly value="{{$operate->new_position}}" >
                                                      
                                                               </div>
                                            
                                                        </div>
                              </div>
                              <div class="row">
                                          <div class="col-md-4 ">
                                                      <div class="form-group ">
                                                          <label class="control-label ">แผนก/ฝ่าย:</label>
                                                          <input type="text" class="form-control" name="department"   readonly value="{{$operate->new_department}}" >
                                                
                                                         </div>
                                      
                                                  </div>
                                                  <div class="col-md-4 ">
                                                            <div class="form-group ">
                                                                <label class="control-label">วันเริ่มงาน:</label>
                                                            <input type="text" name="dateStart2" id="dateStart2" class="form-control" readonly value="{{$operate->starttime}}">
                                                      
                                                               </div>
                                            
                                                        </div>
                                                        <div class="col-md-4 ">
                                                                  <div class="form-group ">
                                                                      <label class="control-label">ครบการทดลองงาน:</label>
                                                                  <input type="text" name="dateEnd2" id="dateEnd2"  class="form-control" readonly value="{{$operate->endtime}}">
                                                            
                                                                     </div>
                                                  
                                                              </div>
                                    </div>
                                    <div class="row">
                                                <div class="col-md-4 ">
                                                            <div class="form-group ">
                                                                <label class="control-label ">จำนวนวัน:</label>
                                                            <input type="text" name="totolDay2" id="totolDay2"   readonly class="form-control" readonly value="{{$operate->numberMN}}"/>
                                                      
                                                               </div>
                                            
                                                        </div>
                                                        <div class="col-md-4 ">
                                                                  <div class="form-group ">
                                                                      <label class="control-label">ระดับ:</label>
                                                                  <input type="text" name="degree" id="degree"  class="form-control"  readonly value="{{$operate->degree}}" />
                                                            
                                                                     </div>
                                                  
                                                              </div>
                                                              <div class="col-md-4 ">
                                                                        <div class="form-group ">
                                                                            <label class="control-label">ประเมินครั้งที่ 1 : วันที่ :</label>
                                                                            <input type="text" name="totolDay_60" id="totolDay_60"   class="form-control" readonly value="{{$operate->date_60}}"/>
                                                                  
                                                                           </div>
                                                        
                                                                    </div>
                                          </div>

                                          <div class="row">
                                                      <div class="col-md-4 ">
                                                                  <div class="form-group ">
                                                                      <label class="control-label ">ประเมินครั้งที่ 2 : วันที่:</label>
                                                                      <input type="text" name="totolDay_90" id="totolDay_90"  class="form-control"  readonly value="{{$operate->date_90}}"/>
                                                            
                                                                     </div>
                                                  
                                                              </div>
                                                  
                                                </div>
                                             
                        </div>
                   


                        {{Form::open(['route'=>['Operate.update',$operate->id],'method'=>'PUT','files' => true])}}
                        @csrf
<div class="form-group">
      <div class="col-sm-12">
                  <div class="alert alert-danger">
                              <strong>โปรดทราบ!</strong> แต่ละหัวข้อเลือกคะแนนเพียงช่องเดียว
                            </div>
              <div  class="table-wrapper-scroll-y">        
          <table id="customers">
              <tr>
                <th COLSPAN="4" style="text-align:center">เฉพาะผู้จัดการฝ่าย เป็นผู้ประเมิน(100 คะแนน )</th>
              </tr>
              <tr>
                <td style="text-align:center">หัวข้อการประเมิน</td>
                <td style="text-align:center">10-8
                      ดี
                      </td>
                <td style="text-align:center">7-5
                      พอใช้
                      </td>
                <td style="text-align:center">4-1
                      ปรับปรุง
                      </td>

              </tr>
              <?php $a = 1;
              $b = 50;
              $c = 100;
              ?>
          @foreach ($manager as $managers)

              <tr>
                      <td  style="width:43%"  > {{  $managers->manager  }} </td>
                      <td style="text-align:center">

                      <select name="staaff_one{{$a++}}"      style="text-align:center">

                              <option value="0" >เลือก</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>

                                    </select>


                      </td>
                      <td style="text-align:center" >

                      <select name="staaff_one{{$b++}}"   style="text-align:center">

                              <option value="0" >เลือก</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>

                                    </select>

                          </td>
                          <td style="text-align:center">

                          <select    name="staaff_one{{$c++}}"     style="text-align:center" >

                                          <option value="0">เลือก</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                        </select>

                              </td>
              </tr>




          @endforeach

          <tr>

                  <td style="text-align:center" >
      รวมคะแนน

                  </td>
                  <td  COLSPAN="3" style="text-align:center">

                      <input type="text" name="sum_chioce_suitability10"  id="sum_chioce_suitability10" style="width:50px" style="text-align:center" >
                      </td>

           </tr>

            </table>
              </div>


      </div>
  </div>

  <div class="form-group">

          <label  class="col-sm-2 control-label">ความคิดเห็นเพิ่มเติม: <br>(สำหรับผู้ประเมิน)</label>
          <div class="col-sm-6">

          <textarea class="form-control" rows="3" name="comment_suitability10" required></textarea>
          </div>


  </div>



  <div class="form-group">

          <label  class="col-sm-2 control-label"></label>
          <div class="col-sm-6">

          <div class="checkbox">
                  <label><input type="checkbox"  name="ok_suitability"   value="อนุมัติตามผู้บังคับบัญชาเสนอ">อนุมัติตามผู้บังคับบัญชาเสนอ </label>
                </div>



                      <div class="checkbox">
                              <label><input type="checkbox" name="other_suitability" value="อื่นๆ">อื่นๆ</label><textarea class="form-control" rows="3" name="other_com_suitability"></textarea>
                            </div>

          </div>
  </div>

  <div class="form-group">
          <label  class="col-sm-2 control-label">ชื่อผู้จัดการฝ่าย:</label>

          <div class="col-sm-4">
              <input type="text"  name="namerate_suitability" id="namerate_suitability"  class="form-control">
          </div>



  </div>
  <div class="form-group">
          <div class="col-sm-3"></div>
          <div class="col-sm-5">
                  <div class="sigPad">
                          <ul class="sigNav">
                            <li class="drawIt"><a href="#draw-it">ลายเซ็น</a></li>
                            <li class="clearButton"><a href="#clear">Clear</a></li>
                          </ul>
                          <div class="sig sigWrapper">
                            <div class="typed"></div>
                            <canvas class="pad" width="220" height="70"></canvas>
                            <input type="hidden" name="signa2" class="output">

                          </div>
                        </div>
      </div>
  </div>
  <center><button type="submit" class="btn btn-info pull-right">ตกลง</button></center>  
  {{Form::close()}}
                            

                                      












                        </div>
                        </div>
                              

                        
                      </div>
    </div>


                     

















    
    
     
    
    
    
    
    
    
    
    
    
    
    
    </div>






      </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('signaturepad/jquery.signaturepad.js') }}"></script>
  <script type="text/javascript" src="{{ asset('signaturepad/assets/json2.min.js') }}"></script>

@if( $operate->degree_enable == 1)


@else


<script>
    $(document).ready(function() {
      $('.sigPad').signaturePad({drawOnly:true});
             
    });
  </script>

<script type='text/javascript'>
      var add_value = [];
      var pont = 0 ;
        $('select').change(function(){

            add_value[this.name] = this.value;
            var pont = 0 ;


            for(var key in add_value){
               pont=parseInt(pont)+parseInt(add_value[key]);


            }
            if(pont >100){
                alert("คุณกรอกคะแนนเกิน 100 กรุณาตรวจสอบ");
            }
            $('#sum_chioce_suitability10').val(pont);
            $('#scoremp').val(pont);
        });
    </script>
           @endif







          
</body>
</html>