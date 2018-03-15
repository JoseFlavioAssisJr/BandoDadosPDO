<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servidor_mysql = 'localhost';
        $nome_banco = 'livraria';
        $usuario = 'root';
        $senha = '';
        
        $conn = new PDO("mysql:host=$servidor_mysql;dbname=$nome_banco","$usuario","$senha");
        
        $conn->query("insert into livros values('3-19089-795-4', 'PHP CES/JF', 1, 2016, 'Livro usado na disciplina', 36)");
        
        echo "Realizado com sucesso!";
?>
    </body>
</html>
