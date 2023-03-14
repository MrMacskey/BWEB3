<form action="" method="POST">
  <label"> фио: </label>
  <input name="fio" />
  <div></div>
  <div></div>
  <label>email:</label>
  <input calss="email" name="email">
  <div></div>
  <div></div>
  <label>год рождения:</label>
  <select name="year">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  <div></div>
  <div></div>
  <label>пол:</label>
  <span><input type="radio" checked="checked" name="gender" value="Мужской" />Мужской</span>
  <span><input type="radio" name="gender" value="Женский" />Женский</span>
  <input type="submit" value="ok" />
  <p></p>
</form>
