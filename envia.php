<html> 
	<head> 
		<title>Envia</title> 
	</head> 

	<body> 
		<?php 
			$uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
			$uploaded_ext  = substr( $uploaded_name, strrpos( $uploaded_name, '.' ) + 1);
			$uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];
			$uploaded_type = $_FILES[ 'uploaded' ][ 'type' ];
			$uploaded_tmp  = $_FILES[ 'uploaded' ][ 'tmp_name' ]; 
			$target_path  = "files/"; 
			$target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] ); 

			// if(){}else{}
			echo "Nome: ".$uploaded_name."<br>";
			echo "Extensao: ".$uploaded_ext."<br>";
			echo "Tamanho: ".$uploaded_size." bytes <br>";
			echo "Tipo: ".$uploaded_type."<br>";
			echo "Nome temporario: ".$uploaded_tmp."<br>";
			echo "Local: ".$target_path."<br>";
			
			copy($uploaded_tmp,"files/$uploaded_name");
			header("Location:index.php");
		?> 
	</body> 
</html>
