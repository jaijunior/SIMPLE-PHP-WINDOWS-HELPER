<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/base.css">
    <title>Suporte</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li>INÍCIO</li>
                <li>SUPORTE</li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>----------------------------</h1>

        
    
        <form action="" method="post">
            <select id="" name='opcao'>
                <option value="1"> IP RELEASE/RENEW </option>
                <option value="2"> IP FLUSH DNS </option>
                <option value="3"> IMPRESSORAS </option>
                <option value="4"> CHKDSK /F </option>
            </select>

            <input type="password" name="passwd" id="passwd" class="passwd"> <br/>
            <input type="submit" value="CONFIGURAR">
        </form>
        <?php
           // $senha = $_POST['senha'];
            $opcao = $_POST['opcao'];
            echo memory_get_usage();


            if ($opcao == '1'){
                echo '<pre>';
                echo shell_exec("ipconfig/release");
                echo '<br>';
                echo shell_exec("ipconfig/renew");
            }elseif ($opcao == '2'){
                    echo '<pre>';
                    echo shell_exec('calc.exe');               
            }elseif ($opcao == '3'){
                echo '<script>window.alert("Clicou no 3")</script>';
                echo shell_exec('wusa /uninstall /kb:5005565');
                echo shell_exec('wusa /uninstall /kb:50006670');
            }elseif ($opcao == '4'){
                //echo shell_exec('runas /savecred /user:%username% notepad');
                echo '<script>window.alert("Clicou no 4")</script>';
            }else{
                echo "<h2> ERRO </h2>";
            }

        ?>
    </main>

    <footer>
            
    </footer>

</body>
</html>