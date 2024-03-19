<?php
session_start();

if (!isset($_GET['cod_Agenda'])) {
    header('Location: admin.php');
    exit();
}

include_once('../models/conexao.php');

$cod_Agenda = htmlspecialchars($_GET['cod_Agenda']);

$sql = "SELECT * FROM tb_agenda WHERE cod_Agenda = '$cod_Agenda'";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 0) {
    header('Location: admin.php');
    exit();
}

$dados_show = mysqli_fetch_assoc($resultado);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar item agenda</title>
    <link rel="stylesheet" href="./CSS/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
</head>
<body>

    <div class="container">
    <h1>Administração</h1>
    <h2>Alterar show existente</h2>
    <div>
        <!-- formulário para alterar show -->
        <form class="add_show" action="../controllers/alterarShow.php" method="POST">
            <label>Data:</label>
            <input class="date" type="date" name="data" value="<?php echo isset($dados_show['data_Show']) ? date('Y-m-d', strtotime($dados_show['data_Show'])) : ''; ?>" required>
            <label>Estado:</label>
            <select class="local" type="text" name="estado" required>
                <option value="AC" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'AC') ? 'selected' : ''; ?>>AC</option>
                <option value="AL" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'AL') ? 'selected' : ''; ?>>AL</option>
                <option value="AP" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'AP') ? 'selected' : ''; ?>>AP</option>
                <option value="AM" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'AM') ? 'selected' : ''; ?>>AM</option>
                <option value="BA" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'BA') ? 'selected' : ''; ?>>BA</option>
                <option value="CE" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'CE') ? 'selected' : ''; ?>>CE</option>
                <option value="DF" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'DF') ? 'selected' : ''; ?>>DF</option>
                <option value="ES" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'ES') ? 'selected' : ''; ?>>ES</option>
                <option value="GO" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'GO') ? 'selected' : ''; ?>>GO</option>
                <option value="MA" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'MA') ? 'selected' : ''; ?>>MA</option>
                <option value="MT" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'MT') ? 'selected' : ''; ?>>MT</option>
                <option value="MS" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'MS') ? 'selected' : ''; ?>>MS</option>
                <option value="MG" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'MG') ? 'selected' : ''; ?>>MG</option>
                <option value="PA" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'PA') ? 'selected' : ''; ?>>PA</option>
                <option value="PB" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'PB') ? 'selected' : ''; ?>>PB</option>
                <option value="PR" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'PR') ? 'selected' : ''; ?>>PR</option>
                <option value="PE" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'PE') ? 'selected' : ''; ?>>PE</option>
                <option value="PI" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'PI') ? 'selected' : ''; ?>>PI</option>
                <option value="RJ" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'RJ') ? 'selected' : ''; ?>>RJ</option>
                <option value="RN" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'RN') ? 'selected' : ''; ?>>RN</option>
                <option value="RS" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'RS') ? 'selected' : ''; ?>>RS</option>
                <option value="RO" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'RO') ? 'selected' : ''; ?>>RO</option>
                <option value="RR" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'RR') ? 'selected' : ''; ?>>RR</option>
                <option value="SC" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'SC') ? 'selected' : ''; ?>>SC</option>
                <option value="SP" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'SP') ? 'selected' : ''; ?>>SP</option>
                <option value="SE" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'SE') ? 'selected' : ''; ?>>SE</option>
                <option value="TO" <?php echo (isset($dados_show['estado']) && $dados_show['estado'] == 'TO') ? 'selected' : ''; ?>>TO</option>
            </select>
            <label>Cidade:</label>
            <input class="cidade" type="text" name="cidade" value="<?php echo $dados_show['cidade']; ?>" required>
            <div class="botoes">
                <input type="hidden" name="cod_Agenda" value="<?php echo $cod_Agenda; ?>">
                <button type="submit" name="alterar">Alterar show</button>
                <a href="admin.php"><button type="button">Voltar</button></a>
            </div>
        </form>
        <div>
    </div>
    <a href="../controllers/logout.php"><button class="sair" type="submit" name="logout">Sair</button></a>
</body>
</html>
