<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // pegando os dados do formulário
        $salary = $_GET['salary'];

        // definindo o salário mínimo
        $minSalary = 1_412.00;
    ?>

    <main>
        <h1>Informe seu salário</h1>
            <!-- Enviando os dados para o próprio arquivo -->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salary">Salário (R$)</label>
            <input type="number" name="salary" id="salary" value="<?=$salary?>" step="0.01">
    
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minSalary, 2, ",", ".")?></strong></p>
    
            <input type="submit" value="Calcular">
        </form>

        <section>
            <h2>Resultado final</h2>
            <?php 

                // realizando a divisão inteira do salário pelo salário mínimo
                $totalSalary = intdiv($salary, $minSalary);

                // definindo o resto que sobra entre o salário e o salário mínimo
                $rest = $salary / $minSalary;

                echo "<p>Quem ganha um salário de <strong>R\$". number_format($salary, 2, ",", ".") ."</strong> ganha $totalSalary salários mínimos + <strong>R\$ ". number_format($rest, 2, ",", ".") ."</strong></p>"
            ?>
        </section>
    </main>
</body>
</html>