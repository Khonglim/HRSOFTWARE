<!doctype html>
<html lang="th">
<head>
    <title>Smart Wizard - a JavaScript jQuery Step Wizard plugin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('dist/css/smart_wizard.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/smart_wizard_theme_circles.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/smart_wizard_theme_arrows.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/smart_wizard_theme_dots.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">  
       <style>
body {
    font-family: 'Prompt', sans-serif;
  
}
  </style>
</head>
<body>
        <main >
                @yield('content')
            </main>

</body>
    
<script src="{{ asset('dist/js/jquery.smartWizard.min.js') }}" defer></script>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include jQuery Validator plugin -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


    <!-- Include SmartWizard JavaScript source -->
   

    <script type="text/javascript">
        $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Save')
                                             .addClass('btn btn-info')
                                             .on('click', function(){
                                                    if( !$(this).hasClass('disabled')){
                                                        var elmForm = $("#myForm");
                                                        if(elmForm){
                                                            elmForm.validator('validate');
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                alert('คุณทำรายการยังไม่ครบ');
                                                                return false;
                                                            }else{
                                                                alert('ยืนกันการทำรายการ');
                                                                elmForm.submit();
                                                                return false;
                                                            }
                                                        }
                                                    }
                                                });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){
                                                    $('#smartwizard').smartWizard("reset");
                                                    $('#myForm').find("input, textarea").val("");
                                                });



            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'dots',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });

            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);
                // stepDirection === 'forward' :- this condition allows to do the form validation
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                    }
                }
                return true;
            });

            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 4){
                    $('.btn-finish').removeClass('disabled');
                }else{
                    $('.btn-finish').addClass('disabled');
                }
            });

        });
    </script>
</body>
</html>