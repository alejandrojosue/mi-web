<?php
$folder = 'b';

if(!is_dir($folder)){
	mkdir($folder);
	echo "Creado";
}else{
	echo "Ya existe!";
	if(!empty('b')){
		//$a = getFilesFromDir('b');
		#echo $a;
	}
	//rmdir('b');
}
/*
if(file_exists('../../assets/archives/me.jpg')){
	echo "Ya existe archivo!";
	unlink('../../assets/archives/me.jpg');
}else{
	echo "no existe!";
}
*/
?>

<!DOCTYPE html>
<html>
<head>
	<!-- JavaScript -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="../../js/helpers/_messagebox.js"></script>
	<title></title>
</head>
<body>
</body>
</html>