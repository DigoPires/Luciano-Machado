<?php
include_once ('../models/conexao.php');
?>

<?php
session_start();

if (!isset ($_SESSION['login']) || empty ($_SESSION['login'])) {
    header('Location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="stylesheet" href="./CSS/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

</head>

<body>
    <div class="container">
        <h1>Administração</h1>
        <h2>Adicionar Novo Show</h2>
        <div>

        <!-- formulario para add show -->
            <form class="add_show" action="../controllers/addShow.php" method="POST">
                <label>Data:</label>
                <input class="date" type="date" name="data" required>
                <label>Estado:</label>
                <select class="local" type="text" name="local" required>
                <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
                <label>Cidade:</label>
                <input class="cidade" type="text" name="cidade" required>
                <div class="botoes">
                    <button type="submit" name="submit">Adicionar Show</button>
                </div>

                <!-- MENSAGEM DE SUCESSO USANDO SWEETALERT -->
                <?php if (isset ($_SESSION['mensagem'])): ?>
        <div class="mensagem">
            <p> <?php echo $_SESSION['mensagem']; ?></p>
        </div>
                <?php unset($_SESSION['mensagem']); ?>
                <?php endif; ?>
            </form>

            <!-- BOTÃO DE LOGOUT -->
            <a href="../controllers/logout.php"><button class="sair" type="submit" name="logout">Sair</button></a>
        </div>
    </div>

    <h2 class="title-show-existente">Shows Existentes</h2>
    <div class="shows-existentes">

    <!-- PHP PARA O SELECT -->
    <div class="shows-existentes">
        <?php
        $sql = "SELECT cod_Agenda, DATE_FORMAT(data_Show, '%d/%m/%Y') AS data, estado, cidade FROM tb_agenda";
        $resultado = mysqli_query($conexao, $sql);

        while ($dados = mysqli_fetch_array($resultado)) {
            ?>
    <!-- LISTA DE SHOWS NO SELECT DO BANCO -->
                <div class="show">
                <div class="lista-shows">
                    <div>Data: <?php echo $dados['data']; ?></div>
                    <div>Estado: <?php echo $dados['estado']; ?></div>
                    <div>Cidade: <?php echo $dados['cidade']; ?></div>
                </div>

                <!-- BOTÃO DE EXCLUIR O SHOW -->
                
                <form id="form-excluir-<?php echo $dados['cod_Agenda']; ?>" action="../controllers/excluirShow.php" method="POST">
                    <input type="hidden" name="excluir">
                    <input type="hidden" name="cod_Agenda" value="<?php echo $dados['cod_Agenda']; ?>">
                    <button type="button" class="excluir" onclick="confirmarExclusao(<?php echo $dados['cod_Agenda']; ?>)">Excluir</button>
                    
                    <!-- BOTÃO DE EDITAR -->
                </form>
                <form action="../views/alterar.php" method="GET">
                    <input type="hidden" name="cod_Agenda" value="<?php echo $dados['cod_Agenda']; ?>">
                    <button type="submit" class="editar">Editar</button>
                </form>
            </div>
            <?php
            }
            ?>
    </div>


<script src="./JS/admin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

</body>

</html>
