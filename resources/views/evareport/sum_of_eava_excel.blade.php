<!DOCTYPE html>
<html>
<head>
	<title>convers to excel</title>
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
	<br>
	<table>
		<thead>
	    <tr>
	        <th style="width: 50%;">อันดับ</th>
	        <th style="width: 50%;">ID</th>
	    </tr>
	    </thead>

		<tbody>
			@foreach($use as $us)
			<tr>
				<td style="width: 50%;">
				{{$us->id}}
				</td>
				<td style="width: 50%;">
				{{$us->name}}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>