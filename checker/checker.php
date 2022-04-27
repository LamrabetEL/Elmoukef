<?php
		include "vendor/autoload.php";
		include "req.php";
		$ips = array("51.38.243.211", "51.38.250.45", "51.38.250.255", "51.68.10.114", "51.68.10.160", "51.68.10.201", "51.68.50.100", "51.68.50.155", "51.68.50.209", "51.68.50.255", "51.68.97.20", "51.68.97.21", "51.68.97.30", "51.68.97.85", "51.68.50.125", "51.68.10.109");

		

	for ($i = 1; $i <= 5; $i++) {	
		foreach($ips as $ip){

						$getemails = curl("http://cleaner.prixnova.com/administration/get/get_last_email/");

						$email_info = json_decode($getemails);

						if($email_info != false){

							if(!empty($email_info->email)){
								
								

								$ve = new hbattat\VerifyEmail($email_info->email, "samireamoi@free.fr");

								$validation = $ve->verify($ip);

								$result = $ve->get_debug();
								
								
								$result["email"] = $email_info->email;

								$result["id_email"] = $email_info->id_email;

								$result["id_liste"] = $email_info->id_liste;

								$result["id_user"] = $email_info->id_user;

								echo curl("http://cleaner.prixnova.com/administration/post/verifier_email",$result);


							}else{

								echo false;

							}

						}else{

							echo false;

						}	

}						
	}
?>