<!DOCTYPE html>
<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <style>
                    @font-face {
                        font-family: 'THSarabunNew';
                        font-style: normal;
                        font-weight: normal;
                        src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
                    }
                    @font-face {
                        font-family: 'THSarabunNew';
                        font-style: normal;
                        font-weight: bold;
                        src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
                    }
                    @font-face {
                        font-family: 'THSarabunNew';
                        font-style: italic;
                        font-weight: normal;
                        src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
                    }
                    @font-face {
                        font-family: 'THSarabunNew';
                        font-style: italic;
                        font-weight: bold;
                        src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
                    }
             
                    body {
                        font-family: "THSarabunNew";
                    }
                </style>
            </head>

   
<body>
        <table>
            <tr>
                <td>ชื่อบริษัท</td>
            </tr>
            @foreach ($company as $c )
            <tr>
                <td>{{$c->company_Name}}</td>
            </tr> 
            @endforeach
        </table>

</body>
</html>