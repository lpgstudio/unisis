<?php

session_start();
requireValidSession();

$id = $_SESSION['user']->id;

if(count($_POST) > 0){

    $erros = [];

    $salarioConfig = ["options" => ["decimal" => ',']];
    if(!filter_var($_POST['valor-venda'], FILTER_VALIDATE_FLOAT, $salarioConfig) && !filter_var($_POST['valor-custo'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
        $erros['salario'] = "Salário inválido. Use , para separar os valores.";
        addErrorMsg('Valor do produto inválido.');
    }
}

$dados['id'] = filter_var(@$_POST['produto_id'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['user_id'] = $id;
$dados['marca'] = filter_var(@$_POST['marca'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['nome'] = filter_var(@$_POST['nome'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['ean'] = filter_var(@$_POST['codigo-de-barras'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['estoque'] = filter_var(@$_POST['estoque'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['estoque_min'] = filter_var(@$_POST['estoque_min'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);
$dados['valor_custo'] = str_replace(",", ".", $_POST['valor-custo']);
$dados['valor_venda'] = str_replace(",", ".", $_POST['valor-venda']);
$dados['data_compra'] = filter_var(@$_POST['data-compra'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['validade'] = filter_var(@$_POST['data-validade'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
$dados['estimativa'] = filter_var(@$_POST['estimativa'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);


// print_r($dados);

$prod_id = $dados['id'];
try{
    $cadastrar = Produto::upDateProduct($id, $prod_id, $dados);
    header('Location: ../dashboard.php');
}catch(Exception $e){
    echo $e->getMessage();
    $erro = $e->getMessage();
}
// loadTemplateView('dashboard' , ['produtos' => $dados]);
