<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <title>Pampa Corte +</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Solicitar acesso ao sistema</h2><hr>
        <form method="post" action="index.php">


            <h4>Nome:</h4>
            <td>

                <input type="text" name="nome" placeholder="Informe seu nome completo">

                <h4>E-mail:</h4>

                <input type="text" name="email"  placeholder="Informe seu e-mail">

                <h4>Telefone:</h4>
                <input type="text" name="telefone" placeholder="Informe seu telefone">

                <h4>Endereço:</h4>
                <input type="text" name="endereco" placeholder="Informe seu endereço">

                <h4>Atuação:</h4>
                <input type="text" maxlength="60" name="atuacao" placeholder="Informe sua área de atuação">

                <h4> Selecione um tipo de acesso</h4>

                <input type="radio" name="tipo " value="administrador">Administrador
                <br>
                <input type="radio" name="tipo" value="estudante">Estudante
                <br>
                <input type="radio" name="tipo" value="produtor">Produtor
                <br>
                <input type="radio" name="tipo" value="professor">Professor
                <br>
                <input type="radio" name="tipo" value="tecnico">Técnico
                <br>
                <input type="radio" name="tipo" value="visitante">Visitante


                <h4>Estado:</h4>

                <select name="estado">
                    <option value="">Selecione um estado</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                </select>
                <br>
                <br>

                <input type="submit" value="Solicitar acesso">

                <?php
                if ($_POST) {

                    //imprime tudo que estiver dentro do array(vetor)
                    //print_r($_GET);

                    @$nome = $_POST['nome']; //$matricula = int matricula(em c)
                    @$email = $_POST['email'];
                    @$telefone = $_POST['telefone'];
                    @$endereco = $_POST['endereco'];
                    @$tipo = $_POST['tipo'];
                    @$estado = $_POST['estado'];

                    //|| - ou
                    //&& - e

                   

                        //se todos os campos estiverem preenchidos
                        //nomecompleto = nome + sobrenome; //concarenacao de strings    
                        $result = "nome; " . $nome . "<br>Email:" . $email . "<br>Telefone:" . $telefone . "<br>Telefone:" . $telefone . "<br>Endereco:" . $endereco . "<br>Estado:" . $estado;
                        echo($result);
                    }
                
                ?>

        </body>
</html>