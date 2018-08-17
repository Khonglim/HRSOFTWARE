<script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
	$(document).ready(function() {
		$('#SelectionReset').click(function(){$(".uniqueSelection option").show();});

		$(".uniqueSelection").change(function(){
			var indx = $(".uniqueSelection").index(this);
			var currentVal = $("option:selected",this).val();
			
			$(".uniqueSelection").each(function(index,val){
				if(indx != index){
					$(this).find("option[value='"+currentVal+"']").hide();
				}
			});
		});
	});
  </script>

One:<select name="listOne" id="listOne" class="uniqueSelection">
	<option value=''>กรุณาเลือก</option>
	<option value='Steve Jobs'>Steve Jobs</option>
	<option value='Roger Federuer'>Roger Federuer</option>
	<option value='Tiger Woods'>Tiger Woods</option>
  </select><br />
Second:<select name="listSecond" id="listSecond" class="uniqueSelection">
	<option value=''>กรุณาเลือก</option>
	<option value='Steve Jobs'>Steve Jobs</option>
	<option value='Roger Federuer'>Roger Federuer</option>
	<option value='Tiger Woods'>Tiger Woods</option>
  </select><br />
Third:<select name="listThird" id="listThird" class="uniqueSelection">
	<option value=''>กรุณาเลือก</option>
	<option value='Steve Jobs'>Steve Jobs</option>
	<option value='Roger Federuer'>Roger Federuer</option>
	<option value='Tiger Woods'>Tiger Woods</option>
  </select><br />
  <input type='reset' value='Reset' id='SelectionReset' />