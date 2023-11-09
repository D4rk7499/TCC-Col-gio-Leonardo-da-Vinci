<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE ID_Usuario LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY ID_Usuario DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY ID_Usuario DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cards</title>
    <style>
:root {
    /* Light */
    --color-light-50: #f8fafc;

    /* Dark */
    --color-dark-50: #797984;
    --color-dark-100: #312d37;
    --color-dark-900: #000;

    /* Purple */
    --color-purple-50: #081603;
    --color-purple-100: #13581d;
    --color-purple-200: #033105;

    /* Gradient */
    --color-gradient: linear-gradient(90deg, var(--color-purple-50), var(--color-purple-100), var(--color-purple-200));
}

/* General */
* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#container {
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: var(--color-gradient);
}

#login_form {
    display: flex;
    flex-direction: column;
    height: fit-content;
    background-color: var(--color-light-50);
    padding: 60px 150px;
    border-radius: 8px;
    gap: 30px;
    box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.336);
    animation: dark-to-light-background 0.3s ease-in-out;
}

/* Form Header */
#form_header {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

#form_header h1 {
    font-size: 80px;
    position: relative;
}

#form_header h1::before {
    position: absolute;
    content: '';
    width: 40%;
    height: 3px;
    background-color: var(--color-purple-50);
    bottom: 10px;
    border-radius: 5px;
}

#mode_icon {
    cursor: pointer;
    font-size: 20px;
}

#social_media img:hover {
    transform: scale(1.2);
}

/* Inputs */
#inputs {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 20px;
}

.input-box>label {
    font-size: 14px;
    color: var(--color-dark-50);
}

.input-field {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 3px;
    border-bottom: 1px solid var(--color-purple-50);
    cursor: text;
}

.input-field i {
    font-size: 18px;
    cursor: text;
    color: var(--color-dark-900);
} 

.input-field input {
    border: none;
    width: 260px;
    background-color: transparent;
    font-size: 18px;
    padding: 0px 5px;
}

.input-field input:focus {
    outline: none;
}

/* Forgot password */
#forgot_password a {
    text-decoration: none;
    color: var(--color-dark-50);
    font-size: 12px;
}

#forgot_password a:hover {
    color: var(--color-purple-50);
}

/* Login Button */
.inputSubmit{
    background: var(--color-gradient);
    border: none;
    padding: 7px;
    border-radius: 3px;
    color: var(--color-light-50);
    font-weight: bold;
    font-size: 18px;
    cursor: pointer;
    
}
.inputSubmit:hover{
    transform: scale(1.05);
}
.inputSubmit2{
    background: var(--color-gradient);
    border: none;
    padding: 7px;
    border-radius: 3px;
    color: var(--color-light-50);
    font-weight: bold;
    font-size: 18px;
    cursor: pointer;
    
}
.inputSubmit2:hover{
    transform: scale(1.05);
}

/* Dark Mode */
.dark#login_form {
    color: var(--color-light-50);
    background-color: var(--color-dark-100);
    animation: light-to-dark-background 0.3s ease-in-out;
}

.dark#login_form .input-field input,
.dark#login_form .input-field i {
    color: var(--color-light-50);
}

@keyframes dark-to-light-background {
    0% {
        background-color:var(--color-dark-100);
    }
    100.0% {
        background-color:var(--color-light-50);
    }
}

@keyframes light-to-dark-background {
    0% {
        background-color:var(--color-light-50);
    }
    100.0% {
        background-color:var(--color-dark-100); 
    }
}
</style>
<title>Reservas</title>
</head>
<body>   
    <main id="container">
    <form id="login_form" action="testLogin.php" method="POST">
            <div id="form_header">
                <h1>Reservas</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>
            </div>
            <!-- LOGIN BUTTON -->
            <input class="inputSubmit2" type="submit" onclick="suasreservas(); return false" value="Suas Reservas">
            <input class="inputSubmit2" type="submit" onclick="novareserva(); return false" value="Nova Reserva">
            <input class="inputSubmit2" type="submit" onclick="salasreservadas(); return false" value="Salas Reservadas">
            <input class="inputSubmit2" type="submit" onclick="voltar(); return false" value="Voltar">
        </form>
    </main>
    </div>
    <script>
        function voltar(){
                location.href = "sair.php";
        }
        function suasreservas(){
                location.href = "x.php";
        } 
        function novareserva(){
                location.href = "form.php";
        }
        function salasreservadas(){
                location.href = "sistemareserva.php";
        } 
    </script>
</body>
</html>