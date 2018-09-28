
<?php
error_reporting(0);
	$usr = $_POST['username'];
	$psw = $_POST['password'];

	$user = array(
		"user" => 'aji',
		"pass" => '28039'
	);

if (isset($_POST['submit'])) {

	if ($usr == $user['user']&& $psw==$user['pass']){

	echo"<form method='post'>

	
					
					<input type='checkbox' name='hobby[]'' value='Makan'>Makan
					<input type='checkbox' name='hobby[] value='Tidur'>Tidur
					<input type='checkbox' name='hobby[]' value='Belajar'>Belajar<br>
					<input type='checkbox' name='hobby[]' value='Berenang'>Berenang
					<input type='checkbox' name='hobby[]' value='Basket'>Basket
					<input type='checkbox' name='hobby[]' value='Nonton'>Nonton
				<br>
				<br>
					<label>Upload Foto :</label>
				<br>
				<br>
					<input type='file' name='foto'>
				<br>
				<br>
					<input type='submit' name='submit2' value='submit'>
			
		</form>";
	}
	else{ "username atau password yang anda masukan salah";
}
?>

		<?php

		if(isset($_POST['submit2'])){
			$data = $_POST['hobby'];
			echo "Hobby : ";
			foreach ($data as $nilai) {
				echo "$nilai, ";

			}
			echo "gambar : <br>";
			echo "<img src =>";
		}
}		
?>


