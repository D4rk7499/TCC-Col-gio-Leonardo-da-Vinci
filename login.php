<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="Login Page\dark light form\assets\css\style.css">
    
    <title>Login</title>
</head>
<body>   
    <main id="container">
    <form id="login_form" action="testLogin.php" method="POST">
            <div id="form_header">
                <h1>Login</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>
            </div>
                <div class="input-box">
                    <label for="email">
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                    </label>
                </div>
                
                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="senha">
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" name="senha" placeholder="Senha">
                        </div>
                    </label>
                </div>
            </div>

            <!-- LOGIN BUTTON -->
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <input class="inputSubmit2" type="submit" onclick="voltar(); return false" value="Voltar">
        </form>
    </main>
    </div>
    <script>
        function voltar(){
                location.href = "index.php";
        } 
    </script>
    <script type="text/javascript" src="Login Page\dark light form\assets\js\script.js"></script>
</body>
</html>