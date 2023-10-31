<?php
$miArray = [1,2,3,4,5];
?>

<select>
    <?php foreach($miArray as $valor)
    {
        echo "<option>$valor</option>";
    }
    ?>
</select>
<br/>
<br/>
<select>
    <?php foreach($miArray as $valor) : ?>
        <option><?= $valor ?></option>
    <?php endforeach; ?>
</select>