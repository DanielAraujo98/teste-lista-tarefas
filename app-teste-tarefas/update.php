<?php
require 'includes/header.php';

if (isset($_GET['id'])) {
    $data = getById($_GET['id']);
}

if (isset($_POST['update'])) {
    var_dump($_POST);
    $update = update($_POST);
    if ($update == 1) {
        return header('Location: index.php');
    }
}

?>

<div class="container my-4">
    <div class="row">
        <div class="col col-4 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center">Edição de tarefa</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="form-group">
                            <label for="">Descricao</label>
                            <input type="text" name="descricao" class="form-control" value="<?= $data['descricao'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Usuário Responsável</label>
                            <input type="text" name="usuario" class="form-control" value="<?= $data['usuario'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Data da tarefa</label>
                            <input type="text" name="data_tarefa" class="form-control " value="<?= $data['data_tarefa'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Realizado em</label>
                            <input type="text" name="data_realizacao" class="form-control" value="<?= $data['data_realizacao'] ?>">
                        </div>

                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-around">
                        <a href="index.php" class="btn btn-danger btn-sm">Cancelar</a>
                        <button type="submit" name="update" class="btn btn-primary btn-sm">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'includes/footer.php';
?>