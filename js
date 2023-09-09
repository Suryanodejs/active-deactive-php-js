<script>
$(document).on('click','.user_status12',function(){

		var id = $(this).attr('uid'); //get attribute value in variable
		var status = $(this).attr('ustatus'); //get attribute value in variable
        
		$('#user_id12').val(id); //pass attribute value in ID
		$('#user_status123').val(status);  //pass attribute value in ID

		$('#modal_popup').modal({backdrop: 'static', keyboard: true, show: true}); //show modal popup

	});
</script>
