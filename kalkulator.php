<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Informatika A</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<marquee>
	<h1><font color="green">Selamat datang di tools kalkulator kami</font></h1>
</marquee>
<?php
	if(isset($_POST['itung'])){
		$ang1 = $_POST['ang1'];
		$ang2 = $_POST['ang2'];
		$operator = $_POST['operator'];
		switch ($operator){
			case 'plus':
				$kal = $ang1+$ang2;
				break;
			case 'minus':
				$kal = $ang1-$ang2;
				break;
			case 'bagi':
				$kal = $ang1/$ang2;
				break;
			case 'kalian':
				$kal = $ang1*$ang2;
				break;
			

		}
	}
?>
<div align="center" class="kalkulator">
	<h3 class="judul">Tools Kalkulator</h3>
	<a class="brand" href="https://darklord14com.wordpress.com">https://darklord14com.wordpress.com</a>
	<form method="post" action="kalkulator.php">
		<input type="text" name="ang1" class="kal" autocomplete="off" placeholder="Masukkan angka pertama">
		<input type="text" name="ang2" class="kal" autocomplete="off" placeholder="Masukkan angka kedua">
		<select class="opr" name="operator">
			<option value="plus">+</option>
			<option value="minus">-</option>
			<option value="bagi">/</option>
			<option value="kalian">x</option>
			
		</select>
				<input type="submit" name="itung" value="total" class="tombol">
			</form>
				<?php if(isset($_POST['itung'])) ?>
				 	<input  type="text" value="<?php echo $kal ;?>" class="angk">;
				 <?php echo "<?php }else { ?>"; ?>
				<input type="text" value="<?php echo 0; ?>" class="angk">;
				<?php echo '}'; ?>

</div>

</body>
</html>
