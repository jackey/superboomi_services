<?php

function json_post($url, $data, $files = array()) {
	$content_type = 'Content-Type:application/json';
	if (!empty($files) && is_array($files)) {
		$data = array_merge($data, $files);
		$content_type = 'Content-Type:multipart/form-data';
	}
	else {
		$data = json_encode($data);
	}
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array($content_type));
	$ret_data = curl_exec($ch);
	if (!curl_errno($ch)) {
		$info = curl_getinfo($ch);
	}
	else {
		print_r('error');
		//error.
	}
	curl_close($ch);
	return $ret_data;
}

// Server
//$base_url = 'http://tianzifang.cn/superboomi/superboomi_service/';
// test server
//superboomi_service/user/simple_register
//$base_url = 'http://hmu064240.chinaw3.com/superboomi_service/';
//production
//$base_url = 'http://www.superboomi.com/';
// Local
$base_url = 'http://drupal7.local/?q=superboomi_service/';

//====================================================================================================
// $api_register = 'user/simple_register';

// $register_data = json_post($base_url. $api_register, array(
// 	'mail' => 'jziwenchen1@gmail.com',
// ));

// print_r($register_data);

//====================================================================================================
// $api_login = 'user/login';

// $login_data = json_post($base_url. $api_login, array(
// 	'username' => 'admin', 'password' => 'admin'
// ));

// print_r($login_data);


//====================================================================================================
// $api_post_picture = 'node/simple_crop';

// $node_data = json_post($base_url. $api_post_picture, array(
// 	'nid' => 130,
// 	'width' => '200',
// 	'height' => '200',
// 	'x' => '60',
// 	'y' => '60'
// ));

// print_r($node_data);

//====================================================================================================
// $api_retrieve = "node/simple_retrieve";

// $pictures_data = json_post($base_url. $api_retrieve, array());

// print_r($pictures_data);

//====================================================================================================
// $api_login = 'user/simple_login';

// $login_data = json_post($base_url. $api_login, array(
// 	'mail' => 'jziwenchen@gmail.com',
// ));

// print_r($login_data);

//====================================================================================================
// $api_user_create = 'user/simple_create';

// $login_data = json_post($base_url. $api_user_create, array(
// 	'mail' => 'jziwenchen14@gmail.com','name' => 'admin1111', 'pass' => 'admin'
// ));

// print_r($login_data);

//====================================================================================================
// $api_user_lostpassword = 'user/simple_lostpassword';

// $user_lostpassword_data = json_post($base_url. $api_user_lostpassword, array(
// 	'mail' => 'jziwenchen@gmail.com'
// ));

// print_r($user_lostpassword_data);

// $api_user_update = 'user/simple_update';
// $api_user_update_data = json_post($base_url.$api_user_update, array(
// 	'pass' => 'adminadmin', 'uid' => 10
// ));

// print_r($api_user_update_data);


////////////////////////////////////// comment action ///////////////////////////////////////////

// create
$api_post_comment = 'comment/simple_create';
$new_comment = array(
	'uid' => 1,
	'nid' => 3,
	'subject' => 'hello, api',
	'body' => 'hello, api again',
);
$api_post_comment_data = json_post($base_url.$api_post_comment, $new_comment);

print_r($api_post_comment_data);

// list comment
// $api_list_comment = 'comment/list';
// $data = array(
// 	'nid' => 51,
// );
// $api_list_comment_data = json_post($base_url.$api_list_comment, $data);

// print_r($api_list_comment_data);
