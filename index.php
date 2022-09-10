<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aula - Foreach </title>
</head>
<body>
    <?php
        //Array Simples
        $alunos = ['Cassio', 'Beatriz', 'Larissa', 'Renato', 'Leticia', 'Robinson', 'Eugênio', 'Maria', 'Danilo', 'João'];
        foreach ($alunos as $aluno)
        {
            echo $aluno . "<br>";
        }
        echo "<hr>";
        //Array Indexado
        $rms = [
            '08285' => 'Cassio',
            '08293' => 'Valéria',
            '08278' => 'Laura',
            '08271' => 'Felipe',
            '08320' => 'Maria Gabriela',
            '08297' => 'Marcos',
            '08385' => 'Almir',
            '08284' => 'Yohans',
            '08295' => 'Arthur',
            '08272' => 'Willian'
        ];
        foreach ($rms as $rm => $aluno)
        {
            echo "O RM $rm Pertence O(A) Aluno(A) $aluno . <br>";
        }
    ?>
</body>
</html>