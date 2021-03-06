<?php

mysqli_report(MYSQLI_REPORT_STRICT);    // APENAS RETORNA SE HOUVE ALGUM ERRO (QUALQUER ERRO)

// Abrir a conexão com o database
function open_database()
{
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

// Fechar database
function close_database($conn)
{
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


/**
 * Pesquisa um Registro pelo ID em uma Tabela
 */
function find($table = null, $id = null)
{

    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {

            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);

                /* Metodo alternativo
            $found = array();
            while ($row = $result->fetch_assoc()) {
            array_push($found, $row);
            } */
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $found;
}


/**
 * Pesquisa Todos os Registros de uma Tabela
 */
function find_all($table)
{
    return find($table);
}


/**
 * Insere um registro no BD
 */
function save($table = null, $data = null)
{
    $database = open_database();
    $columns = null;
    $values = null;
    //print_r($data);

    /* formatação para poder inserir os valores */
    foreach ($data as $key => $value) {
        $columns .= trim($key, "'") . ",";
        $values .= "'$value',";
    }
    // remove a ultima virgula
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');

    $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
    try {
        $database->query($sql);
        $_SESSION['message'] = 'Registro cadastrado com sucesso.';
        $_SESSION['type'] = 'success';
    } catch (Exception $e) {

        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

/**
 * Atualiza um registro em uma tabela, por ID
 */
function update($table = null, $id = 0, $data = null)
{
    $database = open_database();
    $items = null;
    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }
    // remove a ultima virgula
    $items = rtrim($items, ',');
    $sql = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE id=" . $id . ";";
    try {
        $database->query($sql);
        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

/**
 * Remove uma linha de uma tabela pelo ID do registro
 */
function remove($table = null, $id = null)
{
    $database = open_database();
    try {
        if ($id) {
            $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            if ($result = $database->query($sql)) {
                $_SESSION['message'] = "Registro Removido com Sucesso.";
                $_SESSION['type'] = 'success';
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

function validarUser($user,$pass){
    $database = open_database();
    $usuario = $database->real_escape_string($user);
    $senha = $database->real_escape_string($pass);
    $senha = md5($senha);
    $sql = "SELECT * FROM usuario WHERE usuario='$usuario' && senha='$senha' LIMIT 1";
    $result = $database->query($sql);
    $resultado = $result->fetch_assoc();

    if(empty($resultado)){
        $_SESSION['loginErro'] = "Usuário ou senha inválidos";
        header("Location: login.php");
    }elseif(isset($resultado)){
        $_SESSION['usuario'] = $resultado['usuario'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        header("Location: index.php");
    }
}