<?php
include_once("templates/header.php");
?>
<div>
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Editar Contato</h1>
  <form action="<?= $BASE_URL ?>config/process.php" id="edit-form" method="post">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $contact['id'] ?>">

    <div class="form-group">
      <label for="name">Nome do Contato:</label>
      <input class="form-control" type="text" name="name" id="name" value="<?= $contact['name'] ?>">
    </div>
    <div class="form-group">
      <label for="phone">Telefone do Contato:</label>
      <input class="form-control" type="text" name="phone" id="phone" value="<?= $contact['phone'] ?>">
    </div>
    <div class="form-group">
      <label for="observations">Observações:</label>
      <textarea class="form-control" type="text" name="observations" id="observations">
      <?= $contact['observations'] ?>
      </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </form>
</div>
<?php
include_once("templates/footer.php");
?>