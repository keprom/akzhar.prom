<?php
$r=$r->row();
echo form_open("billing/schetfactura");
echo "<input type=hidden name=firm_id value=".$firm_id." >";
echo "<input type=checkbox name=html  ><br>";
echo "Выдать актом выполненых работ <input type=checkbox name=akt_vypolnenyh_rabot><br>";
echo "Без номера договора <input type=checkbox name=schetfact><br>";
echo "Выдача накладной <input type=checkbox name=nakladnaya><br>";
echo "<input type=hidden name=period_id value=".$period_id." >";
?>
Другая дата выдачи: <input name=data_schet value='<?php echo $r->data_schet;?>' > <br><br>
Другой номер счетфактуры: <input name=schet2 value='<?php echo $r->schet2; ?>' > <br><br>
Последний номер счета-фактуры <input type="text" disabled value="<?php echo $max_schet_number; ?>"><br><br>
Условия оплаты по договору: <input name=edit1 value='<?php echo $firm->edit1; ?>' > <br><br>
Пункт назначения поставляемых товаров (работ, услуг): <input name=edit2 value='<?php echo $firm->edit2; ?>'> <br> <br>
Поставка товаров осуществлена по доверености: <input name=edit3 value='<?php echo $firm->edit3; ?>'> <br> <br>
Способ отправления: <input name=edit4  value='<?php echo $firm->edit4; ?>'> <br> <br>
Грузоотправитель:<input name=edit5  value='<?php echo $firm->edit5; ?>'> <br> <br>
Грузополучатель:<input name=edit6  value='<?php echo $firm->edit6; ?>'> <br> <br>
Другой договор:<input name=dog2  value='<?php echo $firm->dog2; ?>'> <br> <br>
Электроэнергия надпись изменить:<input name=electric  value='<?php echo $firm->electric; ?>'> <br> <br>


<?php

echo "<input type=submit value='Открыть счетфактуру' />";
echo "</form>";


?>