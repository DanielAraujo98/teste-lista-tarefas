<?php
require 'includes/header.php';

if (isset($_POST['save'])) {
    if (insert($_POST) == 1) {
        return header('Location: index.php');
    } else {
        return "error";
    }
}
?>

<div class="container my-4">
    <div class="row">
        <div class="col col-4 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center">Criar Nova tarefa</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Descricao</label>
                            <input type="text" name="descricao" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Usuário/Responsável</label>
                            <input type="text" name="usuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Data da Tarefa</label>
                            <input type="date" name="data_tarefa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Data realização</label>
                            <input type="text" name="data_realizacao" class="form-control">
                        </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-around">
                        <a href="index.php" class="btn btn-danger btn-sm">Cancelar</a>
                        <button type="submit" name="save" class="btn btn-primary btn-sm">Salvar</button>
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