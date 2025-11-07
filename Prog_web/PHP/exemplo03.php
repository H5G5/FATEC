<?php
$data=date("d/m/Y", time()); //retorna a data atual no formato dia/mes/ano
$hora=date("H:i:s", time()); //retorna a hora atual no formato hora :minuto:segundo
?>
<html>
    <body>
        <p ling="center">
            <strong>
                <font color="#000ff"> Hoje é dia </font> 
                <?php echo $data; ?>
                <font color="#ff000"> e agora são </font>
                <?php echo $hora; ?>
            </strong>
    </body>
</html>