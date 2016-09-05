<?php

if(ISSET($Get['nombre']))
{
	echo $_get['nombre'];
}
else
{ ?>

<form action="destino.php" method="post">
<label> nombre </label>
<input type = "text" name = "nombre">
<input type="text" name = "numero">

<input type="submit">
</form>

<?php
}

?>
