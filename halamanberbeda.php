<?php session_start() ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        username anda adalah <?php echo $_SESSION['username']; ?>(<?php echo strlen($_SESSION['username']); ?>)  dan password anda adalah <?php echo $_SESSION['password']; ?>(<?php echo strlen($_SESSION['password']);?>)
    </p>
    <?php
	function getIndexString($string) {
	  $stringArr = str_split($string); // buat stringnya menjadi array
	  
	  // perulangan string bersama dengan indexnya
	  foreach ($stringArr as $index => $word) {
	   // kalau mau indexnya mulai dari 1, nyalakan baris dibawah
	   // $index++;
	    $index++;
        echo "<p>$index : $word </p>\n";
	  }
	}
	
	$username = $_SESSION['username']; // nanti kamu ambil dari inputan
	$password = $_SESSION['password']; // nanti kamu ambil dari inputan
	
	echo 'username anda:' . PHP_EOL; // PHP_EOL itu untuk enter kebawah
	getIndexString($username);
	
	echo 'password anda:' . PHP_EOL;
	getIndexString($password);
?>
</body>
</html>