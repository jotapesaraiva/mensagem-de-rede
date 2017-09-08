<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>

    <select name="month">
    <?php foreach(range('1', '12') as $m) : ?>
        <option value="<?php echo $m; ?>" <?php if (date('n') == $m) { echo 'selected="selected"'; } ?>>
            <?php echo $m ?>
         </option>
    <?php endforeach; ?>
    </select>

<br>
<br>

<b>Mês anterior</b>
    <select name="mes" class="select" onchange='this.form.submit()'>
        <? for ($i = 1; $i <= 12; $i++): ?>
            <option value="<?= $i ?>" <?= (date('n') == $i) ? "selected" : "" ?>> <?= get_mes($i) ?> </option>
        <? endfor; ?>
    </select>
<br>
<?php echo date('Y')?>

</html>