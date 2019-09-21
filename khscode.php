<?php 
echo "URL Host : ";
$trueurl = trim(fgets(STDIN));
echo "Username : ";
$username = trim(fgets(STDIN));
echo "Password : ";
$password = trim(fgets(STDIN));



	// Jangan ada yang diganti lagi wan, linknya aja
	
	$anu        = "?login_only=1";
	$idhaam69uid= "&user=".$username;
	$idhaam69upw= "&pass=".$password;
	$data = $anu.$idhaam69upw.$idhaam69uid;
	function logintrue($trueurl,$data){
		$fp = fopen("idhaam69.txt", "w");
		fclose($fp);
		$idhaamganteng = curl_init();
		curl_setopt($idhaamganteng, CURLOPT_COOKIEJAR, "idhaam69.txt");
		curl_setopt($idhaamganteng, CURLOPT_COOKIEFILE, "idhaam69.txt");
		curl_setopt($idhaamganteng, CURLOPT_TIMEOUT, 40000);
		curl_setopt($idhaamganteng, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($idhaamganteng, CURLOPT_URL, $trueurl);
		curl_setopt($idhaamganteng, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($idhaamganteng, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($idhaamganteng, CURLOPT_POST, TRUE);
		curl_setopt($idhaamganteng, CURLOPT_POSTFIELDS, $data);
		ob_start();
		return curl_exec($idhaamganteng);
		ob_end_clean();
		curl_close ($idhaamganteng);
		unset($idhaamganteng);
	}
	
	$hasiltruenya = logintrue($trueurl,$data);
	if(preg_match('#The login is invalid.#', $hasiltruenya)) {
		echo "The Login Is Invalid";
	} else {
		echo "Login Successfull. Redirecting...";
	}
?>
