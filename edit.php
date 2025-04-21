<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/backbtn.html")?>
        <h1 id="main-title">Editando contato</h1>
        <form action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="name" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone'] ?>" required>
            </div>
            <div class="form-group">
                <label for="observations">Observação do contato:</label>
                <textarea type="text" class="form-control" id="name" name="observations" placeholder="Insira uma descrição" rows="3"><?= $contact['observations'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php")
?>