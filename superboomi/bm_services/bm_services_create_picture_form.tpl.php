
<?php global $user;?>

<form id="bm_services_upload_picture_form" action="/?q=superboomi_service/node/simple_create" method="POST" enctype="multipart/form-data">
	<div>
		<label>title:</label>
		<input type="text" name="title" />
	</div>
	<div>
		<label>Terms:</label>
		<select name="field_boomi_terms">
			<?php foreach ($terms as $id => $term_name):?>
				<option value="<?php print $id?>"><?php print $term_name?></option>
			<?php endforeach;?>
		</select>
	</div>
	<div>
		<label>File:</label>
		<input type="file" name="field_boomi_image" /> 
	</div>
	<div>
		<input type="hidden" name="uid" value="<?php print $user->uid;?>"/>
	</div>
	<input type="submit" value="submit" id="bm_services_upload_picture"/>
</form>