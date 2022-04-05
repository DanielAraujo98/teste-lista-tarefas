<?php
require 'includes/header.php';

$getUrl = $_SERVER['REQUEST_URI'];
$uri = explode('/', $getUrl);
if ($uri[2] == '' || $uri[2] == 'index.php') {
    $tasks = getAll('cad_tarefas');
}
?>

<div class="container my-4">
    <h3>Lista de tarefas | TESTE DANIEL</h3>


    <div class="row custom-alert d-none">
        <div class="col">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Usuário/Responsável</th>
                                <th scope="col">Data da Tarefa</th>
                                <th scope="col">Data de realização</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $key => $task) : ?>
                                <tr>
                                    <th scope="row"><?= $key + 1 ?></th>
                                    <td><?= $task['descricao'] ?></td>
                                    <td><?= $task['usuario'] ?></td>
                                    <td><?= $task['data_tarefa'] ?></td>
                                    <td><?= $task['data_realizacao'] ?></td>
                                    <td>
                                        <a href="update.php?id=<?= $task['id'] ?>" class="btn btn-primary shadow"><img src="icon/pencil.svg" width="20"></a>
                                        <a href="delete.php?id=<?= $task['id'] ?>" class="btn btn-danger shadow" onclick="return confirm('Deseja realmente excluir esta tarefa?')"><img src="icon/trash.svg" width="20"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col col-2 text-center side-navbar">
            <div class="card shadow">
                <div class="card-body">
                    <a href="create.php" class="btn btn-primary btn-sm">Criar tarefa</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'includes/footer.php';
?>