<form action="" method="POST">
  <label>ФИО:</label>
  <input name="fio" />
  <div></div>
  <label>mail:</label>
  <input class="email" name="email">
  <div></div>
  <label for="">Дата рождения:</label>
  <select name="year">
    <?php
    for ($i = 1900; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  <div></div>
  <label for="">Пол:</label>
  <span><input type="radio" checked="checked" name="sex" value="0" />Мужской</span>
  <span><input type="radio" name="sex" value="1" />Женский</span>
  <div></div>
  <label for="">Количество конечностей:</label>
  <span><input type="radio" checked="checked" name="arms" value="1" />1</span>
  <span><input type="radio" name="arms" value="2" />2</span>
  <span><input type="radio" name="arms" value="3" />3</span>
  <span><input type="radio" name="arms" value="4" />4</span>
  <span><input type="radio" name="arms" value="5" />5</span>
  <div></div>
  <div>Автобиография:</div>
  <textarea name="biografy" id="" cols="20" rows="40"></textarea>
  <div></div>
  <input type="submit" value="ok" />
</form>
