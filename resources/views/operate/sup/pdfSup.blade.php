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
     
    @foreach ( $personal as $item)
        @if(  $item->id  ==    $operate_sup->id_posinal )
       {{  $item->name  }}   {{  $item->lastname  }}
  @endif
    @endforeach
    
    {{   $operate_sup->id_employ  }}
    
</body>
</html>