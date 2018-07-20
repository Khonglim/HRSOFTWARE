
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Organization Chart Plugin</title>
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="css/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/css/jquery.orgchart.css">
  <link rel="stylesheet" href="css/css/style.css">
  <style type="text/css">
    .orgchart { background: #fff; }
    .orgchart td.left, .orgchart td.right, .orgchart td.top { border-color: #aaa; }
    .orgchart td>.down { background-color: #aaa; }
    .orgchart .middle-level .title { background-color: #006699; }
    .orgchart .middle-level .content { border-color: #006699; }
    .orgchart .product-dept .title { background-color: #009933; }
    .orgchart .product-dept .content { border-color: #009933; }
    .orgchart .rd-dept .title { background-color: #993366; }
    .orgchart .rd-dept .content { border-color: #993366; }
    .orgchart .pipeline1 .title { background-color: #996633; }
    .orgchart .pipeline1 .content { border-color: #996633; }
    .orgchart .frontend1 .title { background-color: #cc0066; }
    .orgchart .frontend1 .content { border-color: #cc0066; }

.center {
    margin: auto;
    width: 90%;
    height: 45%;
    border: 10px solid #f2ef3a;
    padding: 15px;
    top: 10%;

}

  </style>
</head>
<body>
  <div class="center">
  <div id="chart-container"></div>
</div>
 <script type="text/javascript" src="js/js/jquery.min.js"></script>
  <script type="text/javascript" src="js/js/jquery.orgchart.js"></script>

             @forelse($company as $l)

                @if($l['enable']==1)

                @if(isset($l)) 
                 <script type="text/javascript">
    $(function() {

    var datascource = {
      'name': '{{$l->company_Name}}',
      'title': '{{$l->remark}}',
      'children': [ {} ]
    };

    $('#chart-container').orgchart({
      'data' : datascource,
      'nodeContent': 'title'
    });

  });
  </script>

                

                @else
              
                {{$l->company_Name}}

                @endif

                @else

                @endif

              @empty
                    <tr>
                    <td colspan="6" > No data !!</td>
                    </tr>
              @endforelse


 
 
  

  </body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Organization Chart Plugin</title>
  <link rel="icon" href="img/avatar/1.png">
  <link rel="stylesheet" href="css/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/css/jquery.orgchart.css">
  <link rel="stylesheet" href="css/css/style.css">
  <style>
.center {
    margin: auto;
    width: 65%;
    border: 10px solid #f2ef3a;
    padding: 15px;
    top: 10%;

}
</style>
</head>
<body>
  <div class="center">
  <div id="chart-container"></div>
  </div>
  <script type="text/javascript" src="js/js/jquery.min.js"></script>
  <script type="text/javascript" src="js/js/jquery.mockjax.min.js"></script>
  <script type="text/javascript" src="js/js/jquery.orgchart.js"></script>
  <script type="text/javascript">
    $(function() {
    
      $.mockjax({
        url: '/orgchart/initdata',
        responseTime: 1000,
        contentType: 'application/json',
        responseText: {
          'name': 'Lao Lao',
          'title': 'general manager',
          'children': [
            { 'name': 'Bo Miao', 'title': 'department manager' },
            { 'name': 'Su Miao', 'title': 'department manager',
              'children': [
                { 'name': 'Tie Hua', 'title': 'senior engineer' },
                { 'name': 'Hei Hei', 'title': 'senior engineer',
                  'children': [
                    { 'name': 'Pang Pang', 'title': 'engineer' },
                    { 'name': 'Xiang Xiang', 'title': 'UE engineer' }
                  ]
                }
              ]
            },
            { 'name': 'Yu Jie', 'title': 'department manager' },
            { 'name': 'Yu Li', 'title': 'department manager' },
            { 'name': 'Hong Miao', 'title': 'department manager' },
            { 'name': 'Yu Wei', 'title': 'department manager' },
            { 'name': 'Chun Miao', 'title': 'department manager' },
            { 'name': 'Yu Tie', 'title': 'department manager' }
          ]
        }
      });

      $('#chart-container').orgchart({
        'data' : '/orgchart/initdata',
        'nodeContent': 'title'
      });

    });
  </script>
  </body>
</html> -->