<?php include ROOT . '/views/header.php';?>

<div class="row mb-3 mt-3" style="max-width: 700px; margin: auto;">
<h1 class="h2 font-weight-normal col-sm-8 mb-0 text-left">Школьный журнал</h1>
<a href="/add" class="btn btn-lg btn-primary col-sm-4">Добавить ученика</a>
</div>
<table class="table text-left" style="max-width: 700px; margin: auto;">
  <thead class="thead-light">
    <tr>
      <th scope="col">ФИО</th>
      <th scope="col">День рождения</th>
      <th scope="col">Возраст</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($result as $student): ?>
        <tr>
            <td><?=$student['surname'] . ' ' . ' ' . $student['name'] . ' ' . $student['patronymic']?></td>
            <td><?php echo date("d.m.Y", strtotime($student['birthday'])); ?></td>
            <td><?php echo calculate_age($student['birthday']); ?></td>
            <td>
                    <a href="/edit?id=<?=$student['id']?>" class="btn btn-secondary btn-sm">Изменить</a>
            </td>
            <td>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?=$student['id']?>">
                    <input type="submit" name="delete" class="btn btn-secondary btn-sm" value="Удалить">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
  </tbody>
</table>
<?php include ROOT . '/views/footer.php';?>