<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Ngg</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Prompt">
  <style>
  body {
	font-family: 'Prompt', sans-serif;
   
  }
  </style>

        <link rel="stylesheet"  type="text/css" href="{{ asset('all/jquery-ui.css') }}" />
		<link rel="stylesheet" media="all" type="text/css" href="{{ asset('all/jquery-ui-timepicker-addon.css') }}" />
		<script type="text/javascript" src="{{ asset('all/jquery-ui.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('all/jquery-ui-timepicker-addon.js') }}"></script>
		<script type="text/javascript" src="{{ asset('all/jquery-ui-sliderAccess.js') }}"></script>

	
   <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Prompt">
  <style>
  body {
    font-family: 'Prompt', sans-serif;
   
  }
  </style>

<script type="text/javascript">

	$(function(){
		$("#totolDay_60").datepicker({
			dateFormat: 'dd/M/yy'
		});
	});
	
	</script>

<script type="text/javascript">

	$(function(){
		$("#totolDay_90").datepicker({
			dateFormat: 'dd/M/yy'
		});
	});
	
	</script>




	
	<script type="text/javascript">

		$(function(){
		
			var startDateTextBox = $('#dateStart');
			var endDateTextBox = $('#dateEnd');
		
			startDateTextBox.datepicker({ 
				dateFormat: 'dd/M/yy',
				
				onClose: function(dateText, inst) {
					if (endDateTextBox.val() != '') {
						var testStartDate = startDateTextBox.datetimepicker('getDate');
						var testEndDate = endDateTextBox.datetimepicker('getDate');
						if (testStartDate > testEndDate)
							endDateTextBox.datetimepicker('setDate', testStartDate);
					}
					else {
						endDateTextBox.val(dateText);
					}
					displayDateDiff();
				},
				onSelect: function (selectedDateTime){
					endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate') );
				}
			});
			endDateTextBox.datepicker({ 
				dateFormat: 'dd-M-yy',
				onClose: function(dateText, inst) {
					if (startDateTextBox.val() != '') {
						var testStartDate = startDateTextBox.datetimepicker('getDate');
						var testEndDate = endDateTextBox.datetimepicker('getDate');
						if (testStartDate > testEndDate)
							startDateTextBox.datetimepicker('setDate', testEndDate);
					}
					else {
						startDateTextBox.val(dateText);
					}
					displayDateDiff();
				},
				onSelect: function (selectedDateTime){
					startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
				}
			});
		
		});
		
		function displayDateDiff()
		{
			if($('#dateStart').val() != "" && $('#dateEnd').val() != "")
			{
						var dateStart = new Date($("#dateStart").val());
						var dateEnd =  new Date($("#dateEnd").val())
						var timeDiff = Math.abs(dateEnd.getTime() - dateStart.getTime());
						
						var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
						diffDays = diffDays + 1;
                        


						$("#totolDay").val(diffDays);
			}
		}
		
		</script>
		<script type="text/javascript">

			$(function(){
			
				var startDateTextBox = $('#dateStart2');
				var endDateTextBox = $('#dateEnd2');
			
				startDateTextBox.datepicker({ 
					dateFormat: 'dd/M/yy',
					
					onClose: function(dateText, inst) {
						if (endDateTextBox.val() != '') {
							var testStartDate = startDateTextBox.datetimepicker('getDate');
							var testEndDate = endDateTextBox.datetimepicker('getDate');
							if (testStartDate > testEndDate)
								endDateTextBox.datetimepicker('setDate', testStartDate);
						}
						else {
							endDateTextBox.val(dateText);
						}
						displayDateDiff();
					},
					onSelect: function (selectedDateTime){
						endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate') );
					}
				});
				endDateTextBox.datepicker({ 
					dateFormat: 'dd/M/yy',
					onClose: function(dateText, inst) {
						if (startDateTextBox.val() != '') {
							var testStartDate = startDateTextBox.datetimepicker('getDate');
							var testEndDate = endDateTextBox.datetimepicker('getDate');
							if (testStartDate > testEndDate)
								startDateTextBox.datetimepicker('setDate', testEndDate);
						}
						else {
							startDateTextBox.val(dateText);
						}
						displayDateDiff();
					},
					onSelect: function (selectedDateTime){
						startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
					}
				});
			
			});
			
			function displayDateDiff()
			{
				if($('#dateStart2').val() != "" && $('#dateEnd2').val() != "")
				{
							var dateStart = new Date($("#dateStart2").val());
							var dateEnd =  new Date($("#dateEnd2").val())
							var timeDiff = Math.abs(dateEnd.getTime() - dateStart.getTime());
							
							var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
							diffDays = diffDays + 1;
							
	
	
							$("#totolDay2").val(diffDays);
				}
			}
			
			</script>
</body>

</html>