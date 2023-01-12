<?php
include_once 'functions.php';
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Todo List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row mt-3">
      <div class="col offset-2">
        <h1>Mes Tâches</h1>
        <h4>by SAOUCI Sofian, Made with ♥</h4>
      </div>
    </div>

    <form class="row mt-3" id="formAddTask">
        <input type="hidden" name="action" value="add_task">
        <div class="col-6 offset-2">
          <label for="inputTaskName" class="visually-hidden">Tâche</label>
          <input type="text" name="taskName" class="form-control" id="inputTaskName" placeholder="Met ta tâche sinon j'te bute" required>
        </div>

        <div class="col-4">
          <button type="submit" class="btn btn-primary mb-3">Ajouter une tâche</button>
        </div>
    </form>

    <div class="row">
      <div class="col-7 offset-2">
        <table class="table table-bordered table-striped table-hover">
          <thead>
              <th>Fait</th>
              <th>Nom</th>
          </thead>
          <tbody>
          <?php
          foreach ($tasks as $task)
          {
                ?>
                <td class="test-center" style="width: 10%;">
                    <input type="checkbox" class="form-check-input" data-id="<?= $task['id'] ?>" <?= $task['checked'] ?>>
                </td>
                <td><?= $task['name'] ?></td>
                <?php
          }
          ?>
          </tbody>
        </table>
      </div>
    </div>
    
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<script src="script.js"></script>
</body>
</html>
