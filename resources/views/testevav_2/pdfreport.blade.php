<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="row"> 
    <h1 style="text-align: center; color: red;">Register Form</h1>
  </div>
  <br>
<div class="row">
    <div class="container">
      <div class="col-md-6">
         <div class="form-group">
         ระหัสนักศึกษา (13หลัก)::
          <input type="text" id="name">
        </div>
      </div>
    </div>
</div>
<br>
<div class="row">
    <div class="container">
      <div class="col-md-3">
       คำนำหน้า::
       <select>
          <option value="นาย">นาย</option>
          <option value="นาง">นาง</option>
          <option value="นางสาว">นางสาว</option>
        </select>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          ชื่อ::
          <input type="text" id="หname">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          สกุล::
          <input type="text" id="lastname">
        </div>
      </div>
    </div>
</div>
<br>
<div class="row">
    <div class="container">
      <div class="col-md-3">
      ห้อง::
       <select>
          <option value="1">1</option>
          <option value="2">2</option>
          
        </select>
      </div>
      <div class="col-md-3">
       แขนง::
       <select>
          <option value="EnEt1">EnEt-I</option>
          <option value="EnEt2">EnEt-B</option>
          <option value="EnEt3">EnEt-T</option>
          <option value="EnEt4">EnEt-C</option>
        </select>
      </div>
    </div>
</div>
<br>
<div class="row">
  <div class="container">
    <div class="col-md-3">
      <div class="form-group">
          เกรด::
          <input type="text" id="gpa">
      </div>  
    </div>
    <div class="col-md-3">
      (ทศนิยมสองตำเหน่ง)
        
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="container">
    <div class="col-md-3">
      email::
      <input type="email" id="gpa">
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="container">
    <div class="col-md-6">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" style="text-align: center; width: 100%; height: 30px">
            เขียเอง ขก
            </th>
          </tr>
        
        </thead>
        <tbody>
          <tr>
            <th style="text-align: center; width: 70%; height: 30px">
              เเขนงวิชา
            </th>
            <th style="text-align: center; width:30%; height: 30px">
              ชื่อย่อ
            </th>
          </tr>
          <tr>
            <td>
             1 
            </td>
            <td style="text-align: center; width:30%; height: 30px">
             1 
            </td>
          </tr>
          <tr>
            <td>
              2
            </td>
            <td style="text-align: center; width:30%; height: 30px">
             1 
            </td>
          </tr>
          <tr>
            <td>
              3
            </td>
            <td style="text-align: center; width:30%; height: 30px">
             1 
            </td>
          </tr>
          <tr>
            <td>
              4s
            </td>
            <td style="text-align: center; width:30%; height: 30px">
             1 
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col-md-6">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" style="text-align: center; width: 100%; height: 30px">
            เขียเอง ขก
            </th>
          </tr>
        
        </thead>
        <tbody>
          <tr>
            <th style="text-align: center; width: 70%; height: 30px">
              เเขนงวิชา
            </th>
            <th style="text-align: center; width:30%; height: 30px">
              ชื่อย่อ
            </th>
          </tr>
          <tr>
            <td>
             1 
            </td>
            <td style="text-align: center; width:30%; height: 30px">
             1 
            </td>
          </tr>
          <tr>
            <td>
              2
            </td>
            <td style="text-align: center; width:30%; height: 30px">
             1 
            </td>
          </tr>
          <tr>
            <td>
              3
            </td>
            <td style="text-align: center; width:30%; height: 30px">
             1 
            </td>
          </tr>
          <tr>
            <td>
              4s
            </td>
            <td style="text-align: center; width:30%; height: 30px">
             1 
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row">
  <div class="container">
    <div class="col-md-10">
      <input type="submit" name="" value="เเสดงบนปุ่ม">
    </div>
    <div class="col-md-2">
      <input type="submit" name="" value="เเสดงบนปุ่ม">
    </div>
  </div>
</div>
</body>
</html>
