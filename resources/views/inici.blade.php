<strong>Proyecto Laravel</strong><br>
<strong>Base de datos conectada: </strong>
<?php
	try{
		\DB::connection()->getPDO();
		echo \DB::connection()->getDatabaseName();
		} catch (\Exception $e) {
		echo 'Ninguna';
}
?>
