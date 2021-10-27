<?php

$conn = new mysqli("localhost", "root", "", "curso_senac");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// consulta
$sql = "SELECT * FROM clientes";  // apenas retorna todos os campos da tabela. o * indica que é pra ser apresentado todas as colunas. Se quisesse apenas uma ou outra coluna, tem que soubstituir o asterisco pelos nomes das colunas, separado por ,
$resultado = $conn->query($sql); // armazena o resultado
//$row = $resultado->fetch_assoc(); //retorna as linhas da tabela

if ($resultado->num_rows > 0) { //se a quantidadade de linhas for maior que 0

    // Primeira forma de fazer a tabela:

    /* echo "<table><tr><th>Nome</th><th>Sobrenome</th><th>Email</th><th>Telefone</th><th>Cidade</th></tr> ";
    while ($linha = $resultado->fetch_assoc()){ // percorrer a tabela
        echo "<tr><td>".$linha['nome']."</td><td>".$linha['sobrenome'] ."</td><td>".$linha['email'] ."</td><td>".$linha['telefone'] ."</td><td>".$linha['cidade'] ."</td></tr>";
    }
    echo "</table>";  */

    // Segunda forma de fazer a tabela:

?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php
        while ($linha = $resultado->fetch_assoc()) { // percorrer a tabela
        ?>
            <tr class="border-bottom">
                <td><?php echo $linha['nome'] ?></td>
                <td><?php echo $linha['sobrenome'] ?></td>
                <td><?php echo $linha['email'] ?></td>
                <td><?php echo $linha['telefone'] ?></td>
                <td>
                    <i class="fas fa-eye"></i> |
                    <i class="fas fa-user-edit"></i> |
                    <i class="fas fa-user-times"></i>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>

<?php

} else {
    echo "Nenhum registro foi encontrado";
}

// Deletar regigistro

$sql = "DELETE FROM clientes WHERE id = 7";
if($conn->query($sql) === true){
    echo "O registro foi deletado!";
}else
{
    echo ("Erro ao deletar: ".$conn->error);
}

// Atualizar registro

$sql = "UPDATE clientes SET nome='João', sobrenome='da Silva' WHERE id = 8";
if($conn->query($sql) === true){
    echo "<br>O registro foi atualizado!";
}else
{
    echo ("<br>Erro ao atualizar: ".$conn->error);
}

$conn->close();


// criar banco de dados:

 /* $sql = "CREATE TABLE banco_teste";
if($conn->query($sql) === TRUE){
    echo "Banco criado com sucesso";
}else{
    echo "Erro na criação do banco de dados" . $conn->error;
} 

// Criar tabela:

$sql = "CREATE TABLE Alunos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    sobrenome VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if($conn->query($sql) === TRUE){
    echo "Tabela criada com sucesso";
}else{
    echo "Erro na criação da tabela" . $conn->error;
} */

// Inserção de valores na tabela:

/* $sql = "INSERT INTO clientes (nome,sobrenome,email,telefone,cidade) values ('Caio','Oliveira','caio@oliveira','54345','br')";
if($conn->query($sql) === TRUE){
    echo "valores inseridos com sucesso";
}else{
    echo "Erro na inserção dos dados" . $conn->error;
} 

//Inserção de múltiplos valores na tabela:

$sql = "INSERT INTO clientes (nome,sobrenome,email,telefone,cidade) values ('Caio','Oliveira','caio@oliveira','54345','br');";
$sql .= "INSERT INTO clientes (nome,sobrenome,email,telefone,cidade) values ('Caio','Oliveira','caio@oliveira','54345','br');";
$sql .= "INSERT INTO clientes (nome,sobrenome,email,telefone,cidade) values ('Caio','Oliveira','caio@oliveira','54345','br');";
if($conn->multi_query($sql) === TRUE){
    echo "valores inseridos com sucesso";
}else{
    echo "Erro na inserção dos dados" . $conn->error;
}

*/
