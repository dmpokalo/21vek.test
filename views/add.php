<?php include ROOT . '/views/header.php';?>
<form action="" method="POST" class="mt-3" style="max-width: 320px; margin: auto;">
  <h1 class="h3 mb-3 font-weight-normal">Добавить ученика</h1>
  
  <label for="inputEmail" class="sr-only">Фамилия</label>
  <input type="text" name="surname" class="form-control" placeholder="Фамилия" required autofocus pattern="[А-Яа-яЁё]{2,32}">
  <br>
  
  <label for="inputPassword" class="sr-only">Имя</label>
  <input type="text" name="name" class="form-control" placeholder="Имя" required pattern="[А-Яа-яЁё]{2,32}">
  <br>
  
  <label for="inputEmail" class="sr-only">Отчество</label>
  <input type="text" name="patronymic" class="form-control" placeholder="Отчество" required pattern="[А-Яа-яЁё]{2,32}">
  <br>
  
  <label for="inputPassword" class="sr-only">День рождения</label>
  <input type="text" name="birthday" class="form-control" placeholder="День рождения" onfocus="(this.type='date')" required pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}">
  <br>
  
  <button class="btn btn-lg btn-primary" name="submit" type="submit">Сохранить</button>
  <button onclick="location.href='/'" class="btn btn-lg btn-secondary right" type="reset">Отменить</button>
  
</form>
<?php include ROOT . '/views/footer.php';?>