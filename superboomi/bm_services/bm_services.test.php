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
		//error.
	}
	curl_close($ch);
	return $ret_data;
}

// $register_data = json_post("http://yangchenglank.local/test_service/user/simple_register", array(
// 	'mail' => 'jziwenchen3@gmail.com',
// ));

// print_r($register_data);


// $node_data = json_post("http://yangchenglank.local/test_service/node/simple_create", array(
// 	'uid' => '1',
// 	'title' => 'picture'
// ), array(
// 	'field_boomi_image' => '@/home/jacky/Pictures/U2285P52T40D41457F1289DT20090619145101.jpg',
// ));

// print_r($node_data);

$pictures_data = json_post("http://yangchenglank.local/test_service/node/simple_retrieve", array());

print_r($pictures_data);