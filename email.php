<html>
    <body>
        <?php
            if(isset($_POST['Nome']) && !empty($_POST['Nome'])){
                    $nome = addslashes($_POST['Nome']);
                    $email = addslashes($_POST['Email']);
                    $telefone = addslashes($_POST['Telefone']);

                    $to = "test@gmail.com";
                    //gessonacionalsp@hotmail.com
                    $subuject = "Contato para Orçamento Gesso nacional";

                    $corpoDoEmail = "Nome" + $nome + "\r\n" + "Email" + $email + "\r\n" + "Telefone" + $telefone;

                    $header = "From:contato@gessonacionalsp.com" + "\r\n" + "Reply-to:" + $email + "\r\n" + "X=mailer:PHP" + phpversion();

             if(mail($to, $subuject, $corpoDoEmail ,$header)){
                    echo ("<h3>Email enviado com sucesso</h3>" + "\r\n");
                }else{
                     echo ("Email não enviado, tente novamente")
        
                    <a href="index.html">Voltar</a>
                    }
            }
        ?>
    </body>
</html>
