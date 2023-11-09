<?php
session_start();
include_once('config.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: reservechoice.php');
    exit;
}

$logado = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $turma = $_POST['turma'];
    $date = $_POST['date'];
    $periodo = $_POST['periodo'];
    $horario = $_POST['horario'];
    $lab = $_POST['lab'];

    // Cria uma conexão com o banco de dados 
    $connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

    if (!$connection) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Recupera o ID do usuário logado
    $query = "SELECT ID_Usuario FROM Usuarios WHERE Email = '$logado'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $ID_Usuario = $row['ID_Usuario'];

        // Laboratório selecionado existe na tabela Laboratorios
        $query = "SELECT ID_Laboratorio FROM Laboratorios WHERE Nome = '$lab'";
        $result = mysqli_query($connection, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row !== null && isset($row['ID_Laboratorio'])) {
                $ID_Laboratorio = $row['ID_Laboratorio'];

                // Prepare a consulta SQL para inserir dados na tabela reservas_laboratorios
                $sql = "INSERT INTO reservas_laboratorios (ID_Usuario, ID_Laboratorio, Turma, Data, Periodo, Horario, Status, Nome_Professor)
                        VALUES ('$ID_Usuario', '$ID_Laboratorio', '$turma', '$date', '$periodo', '$horario', 'Reservado', '$logado')";

                if (mysqli_query($connection, $sql)) {
                    echo "<script>alert('Reserva feita com sucesso!');</script>"; 
                } else {
                    echo "Erro ao fazer a reserva: " . mysqli_error($connection);
                }
            } else {
                echo "Laboratório selecionado: $lab não existe na tabela Laboratorios.";
            }
        } else {
            echo "Erro ao verificar o laboratório: " . mysqli_error($connection);
        }
    } else {
        echo "Erro ao recuperar o ID do usuário: " . mysqli_error($connection);
    }

    // Feche a conexão com o banco de dados
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form cadastro/assets/css/form.css">
    <title>Cadastre-se</title>
</head>

<body>
    </nav>
  <div class="container">
    <div class="form-image">
        <img src="form cadastro/assets/css/img2/undraw_education_f8ru.svg" alt="">
    </div>
        <div class="form">
            <form method="post" action="#">
                <div class="form-header">
                    <div class="title">
                        <?php
                            echo "<h1>Bem vindo $logado</h1>";
                        ?>
                        <br>
                        <h1>Reserva de Laboratórios</h1>
                    </div>
                    <div class="d-flex">
                    <input class="inputSubmit2" type="submit" onclick="sair(); return false" value="Sair">
        </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="turma">Turma</label>
                        <input id="turma" type="text" name="turma" placeholder="Exemplo: 3ºano A" required>
                    </div>
                    <div class="input-box">
                        <label for="date">Data</label>
                        <input id="date" type="date" name="date" required>
                    </div>
<div class="campo">
    <label for="periodo"><strong>Período</strong></label>
    <select id="periodo" name="periodo" required> <!-- Adicione name="periodo" aqui -->
        <option selected disabled value="">Selecione</option>
        <option value="Manhã">Manhã</option>
        <option value="Tarde">Tarde</option>
        <option value="Noite">Noite</option>
    </select>
</div>
<div class="horario">
    <label for="horario"><strong>Horário</strong></label>
    <select id="horario" name="horario" required> <!-- Adicione name="horario" aqui -->
        <option selected disabled value="">Selecione</option>
        <option value="1ª Aula">1ª Aula</option>
        <option value="2ª Aula">2ª Aula</option>
        <option value="3ª Aula">3ª Aula</option>
        <option value="4ª Aula">4ª Aula</option>
        <option value="5ª Aula">5ª Aula</option>
        <option value="6ª Aula">6ª Aula</option>
    </select>
</div>
<div class="lab">
    <label for="lab"><strong>Sala</strong></label>
    <select id="lab" name="lab" required> <!-- Adicione name="lab" aqui -->
        <option selected disabled value="">Selecione</option>
        <option value="Dell">Dell</option>
        <option value="Positivo">Positivo</option>
        <option value="Notebooks">Notebooks</option>
        <option value="Lab. Ciências">Lab. Ciências</option>
    </select>
</div>
                <div class="continue-button">
                    <input type="submit" value="Reservar">
                </div>
            </form>
        </div>
    </div>
    <script>
        function sair(){
                location.href = "sair.php";
        }
    </script>
</body>

</html>