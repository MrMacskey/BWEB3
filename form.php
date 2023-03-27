<form action="" method="POST">
    <label>ФИО:</label>
    <input name="fio" />
  <div> 
    <label>Email:</label>
    <input class="email" name="email">
  </div>
  <div> 
    <label for="">Дата рождения:</label>
    <select name="year">
      <?php
      for ($i = 1922; $i <= 2022; $i++) {
        printf('<option value="%d">%d год</option>', $i, $i);
      }
      ?>
    </select>
  </div> 
  <div>
    <label for="">Пол:</label>
    <span><input type="radio" checked="checked" name="sex" value="0" />Мужской</span>
    <span><input type="radio" name="sex" value="1" />Женский</span>
  </div>
  <div>
    <label for="">Конечности:</label>
    <span><input type="radio" checked="checked" name="arms" value="1" />1</span>
    <span><input type="radio" name="arms" value="2" />2</span>
    <span><input type="radio" name="arms" value="3" />3</span>
    <span><input type="radio" name="arms" value="4" />4</span>
    <span><input type="radio" name="arms" value="5" />5</span>
  </div>
  <div>
    <select name="ability[]" multiple="multiply">
      <option select="selected" value="0">нет</option>
      <option value="1">невидимость</option>
      <option value="2">телепортация</option>
      <option value="3">прохождение сквозь стены</option>
      <option value="4">5 по дисмату</option>
    </select>
  </div>
  <div>Биография:</div>
  <div>
    <textarea name="biografy" id="" cols="20" rows="20"></textarea>
  </div>
    <input type="submit" value="ok" />
</form>
