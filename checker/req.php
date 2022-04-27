<?php 

	 function v_list_user_ips($vst_hostname,$vst_username,$vst_password,$username,$format){
		$vst_command = 'v-list-user-ips';
		$postvars = array(
			'user' => $vst_username,
			'password' => $vst_password,
			'cmd' => $vst_command,
			'arg1' => $username,
			'arg2' => $format
		);
		$postdata = http_build_query($postvars);

		// Send POST query via cURL
		$postdata = http_build_query($postvars);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'https://' . $vst_hostname . ':8083/api/');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
		$answer = curl_exec($curl);

		// Parse JSON output
		return $data = json_decode($answer, true);

	}
	
	function curl($url,$data = null){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		if(!empty($data)){
			 curl_setopt($ch, CURLOPT_POST, 1);
			 curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
		}
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec($ch);
		curl_close ($ch);
		return $server_output;
	}
?>