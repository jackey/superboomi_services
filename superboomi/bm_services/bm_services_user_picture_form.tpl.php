
<?php global $user;?>

<form id="bm_services_ajax_submit_form" action="/?q=bm_services_update_user_picture" method="POST" enctype="multipart/form-data">
	<div>
		<label>File:</label>
		<input type="file" name="files[picture_upload]" /> 
	</div>
	<div>
		<input type="hidden" name="uid" value="<?php print $user->uid;?>"/>
	</div>
	<input type="submit" value="submit" id="bm_services_upload_picture"/>
</form>