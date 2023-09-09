    	<form action="<?php echo base_url(); ?>Vendor/user_status_changed" method="post"> 
	     	 <div class="modal-content">

		        <div class="modal-header" style="height: 150px;">

		          	<h4 style="margin-top: 50px;text-align: center;">Are you sure, do you change user status?</h4>

					<input type="hidden" name="id" id="user_id12" value="">
					<input type="hidden" name="status" id="user_status123" value="">

		        </div>

		        <div class="modal-footer">

		            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">No</button>

		            <button type="submit" name="submit" class="btn btn-success">Yes</button>

		        </div>

	        </div>

        </form>
