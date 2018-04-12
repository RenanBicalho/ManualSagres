<?php
require_once("confBD.php");
require_once("criaArvore.php");

try
{
  // instancia objeto PDO, conectando no mysql
	$conexao = conn_mysql();

	// instrução SQL básica (sem restrição de nome)
	$SQLSelect = 'SELECT * FROM nodo';

	//prepara a execução da sentença
	$operacao = $conexao->prepare($SQLSelect);

	//executa a sentença SQL com o valor passado por parâmetro
	$pesquisar = $operacao->execute();

	//captura TODOS os resultados obtidos
	$resultados = $operacao->fetchAll();

	// fecha a conexão (os resultados já estão capturados)
	$conexao = null;

	// se há resultados, cria arvore
	if (count($resultados)>0){
		echo "<ul id='my-tree' class='tf-tree'>";
		$f = array();
		$f[0] = 0;
		criaArvore($resultados, 0, $f, 0);
		echo "</ul>";
	}
	else{
		echo "<h1>Não foram encontrados dados</h1>";
	}

	die();
}

catch (PDOException $e)
{
    // caso ocorra uma exceção, a exibe na tela
    echo "Erro!: " . $e->getMessage() . "<br>";
    die();
}

?>
