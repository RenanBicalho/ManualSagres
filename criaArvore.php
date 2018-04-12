<?php
// include "criabanco.php";
// require_once("menu30.php");
require_once("confBD.php");

// function criaArvore($arg, $i, $tam, $f, $cp, $cf){
//
// 	if($f == 0){
// 		echo "&ensp; fecha ul <br/>";
// 		criaArvore($arg, $i, $tam, -1, $cp, $cf);
// 	}
//
// 	if ($i != 0) {
// 			if($i == $tam){
// 				$arg[$i]['codF'] = -1;
// 			}
// 			if ($cf !== $arg[$i]['codF'] || $cp !== $arg[$i]['codF']) {
// 				echo "&ensp; fecha ul <br/>";
// 			}
// 	}
//
// 	else{
//
// 		// echo "<li id=".utf8_decode($arg[$i]['docNome'])."><div><span onclick=teste(".utf8_decode($arg[$i]['docNome']).")>".utf8_decode($arg[$i]['docNome'])."</span></div>";
// 		echo "&emsp; abre li id='".utf8_decode($arg[$i]['docNome'])."' div span onclick=teste('".utf8_decode($arg[$i]['docNome'])."')".utf8_decode($arg[$i]['docNome'])." span div <br/>";
// 		$f--;
//
// 		if($arg[$i]['numFilhos'] == 0){
// 			echo "&emsp; fecha li <br/>";
// 			$cf = $arg[$i]['codF'];
// 			$i++;
// 			criaArvore($arg, $i, $tam, $f, $cp, $cf);
// 		}
// 		else{
// 			$f = $arg[$i]['numFilhos'];
// 			$cp = $arg[$i]['codP'];
// 			$cf = $arg[$i]['codF'];
// 			echo "&ensp; abre ul <br/>";
// 			$i++;
// 			criaArvore($arg, $i, $tam, $f, $cp, $cf);
// 		}
// 	}
// }

function criaArvore($arg, $i, $f, $cp){
	if ($i == count($arg)) {
		return;
	}
	else {
		echo '<li style="padding-left: 20px;" class="tf-child-true" id='.utf8_decode($arg[$i]['docNome']).'><div><span onclick="teste(\''.'.'.$arg[$i]['docNome'].'\');">'.utf8_decode($arg[$i]['codDoc']).'</span></div>';
		// echo "<li id=".utf8_decode($arg[$i]['docNome'])."><div><span onclick="teste(".'.'.utf8_decode($arg[$i]['docNome']).")">".utf8_decode($arg[$i]['codDoc'])."</span></div>";
		// echo "<li id=".utf8_decode($arg[$i]['docNome'])."><div><span onclick=teste(".utf8_decode($arg[$i]['docNome']).")>".utf8_decode($arg[$i]['codDoc'])."</span></div>";
		$f[$cp] -= 1;

		if ($arg[$i]['numFilhos'] == 0) {
			echo "</li>";
			$i++;
			// criaArvore($arg, $i, $f, $cp, $cf);
		}
		else {
			$cp = $arg[$i]['codP'];
			$f[$cp] = $arg[$i]['numFilhos'];
			// $cf = $i;
			echo "<ul>";
			$i++;
			// criaArvore($arg, $i, $f, $cp, $cf);
		}

		if ($f[$cp] == 0) {
			// $cp = $arg[$cf]['codP'];
			echo "</ul>";
			echo "</li>";
			// $cp = 0;
			// while($f[$cp] == 0){
			$f[$cp] = -1;
			$cp--;
			// }
			// if ($f[$cp] == 0) {
			//  	echo "</ul>";
			//  	echo "</li>";
			// }
			while($f[$cp] == 0 || $f[$cp] == -1) {
				if ($f[$cp] == 0) {
					echo "</ul>";
					echo "</li>";
					$f[$cp] = -1;
				}
				$cp--;
				if ($cp == 0) {
					break;
				}
			}
		}

		criaArvore($arg, $i, $f, $cp);
	}
}

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

<!-- <div class="lorem">
	<div class="content L1" hidden=true id="not">
			<p>
				Lorem1 ipsum sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
				metus. In ultricies sed tortor non pellentesque. Mauris quis tempor neque. Donec nec sagittis magna. Integer fringilla posuere metus eu mollis. Ut ac porta metus. Duis sed lacinia metus. Nunc malesuada iaculis risus vitae bibendum.
			</p>
			<p>
				Vivamus posuere condimentum leo eu hendrerit. Pellentesque placerat iaculis ante a rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu ipsum ac magna congue congue sed maximus tortor. Vivamus id odio elementum, vehicula nunc
				ut, efficitur felis. Nullam hendrerit velit libero, gravida porttitor tortor ullamcorper eu. Ut ut lectus non enim sagittis aliquam quis in orci. Donec a arcu eu eros cursus cursus. Donec dictum dignissim tellus, dictum egestas purus pellentesque
				sed.
			</p>

			<p>
				Vestibulum eu ornare urna, nec aliquam lectus. Phasellus eu odio sapien. Vestibulum eu turpis at lorem sagittis posuere. Quisque tellus nunc, facilisis id lacus nec, ornare rhoncus elit. Vivamus vehicula eros a condimentum venenatis. Sed orci massa, pulvinar
				sed erat nec, pellentesque suscipit leo. Mauris lobortis tincidunt nunc, sed tempus ex congue vitae. Curabitur lobortis mauris in ex malesuada, quis vehicula neque lobortis. Curabitur aliquam porttitor tellus eget tempus. Donec maximus tempus tristique.
				Aliquam tincidunt odio dictum, scelerisque ipsum ut, facilisis quam. Ut nec malesuada neque.
			</p>

			<p>
				Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
				ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
			</p>

			<p>
				Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
				ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
				vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
			</p>

			<p>
				Maecenas dapibus aliquam vehicula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent convallis viverra leo quis porta. Sed sit amet porttitor quam. Fusce nec risus non augue consectetur ultricies. Aliquam
				elit lorem, tincidunt ac dolor vel, vulputate consectetur ex. In hac habitasse platea dictumst. Sed eget nisl aliquam, cursus odio nec, commodo lorem. Nulla mollis tortor eu odio rutrum vulputate. Donec condimentum molestie mauris, nec sodales nisi
				volutpat aliquam. Nulla mollis libero sed nibh volutpat, ac mollis elit tincidunt. Vestibulum cursus velit vitae felis aliquam ultricies. Donec vehicula dictum feugiat. Vestibulum volutpat sollicitudin sagittis.
			</p>

			<p>
				Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
				at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
				efficitur ex dapibus.
			</p>

			<p>
				Aliquam consequat, diam eu ullamcorper porta, diam eros rhoncus turpis, in rutrum sem diam a risus. Duis lacinia velit sed ante feugiat venenatis. Aenean orci leo, dictum non finibus nec, dignissim quis eros. Nullam sit amet orci ac purus blandit commodo
				sit amet eget neque. Sed pellentesque dictum tortor. Ut dui erat, tempus in odio in, aliquet convallis mi. Morbi efficitur justo ante, quis ultricies turpis suscipit ac. Sed sit amet nisl rutrum, laoreet mauris id, ullamcorper orci. In facilisis nisi
				eget fringilla imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ut ultricies dui. Pellentesque elit urna, imperdiet sed congue eget, hendrerit sed urna.
			</p>

			<p>
				Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
				at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
				efficitur ex dapibus.
			</p>

			<p>
				Sed pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
				dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
			</p>

			<p>
				Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
				egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
				metus. Donec lobortis eros quis vestibulum vulputate opa.
			</p>
		</div>
</div> -->

<!-- <script>
function teste(div) {
		$('.content').css('display', 'none');
		$(div).css('id', 'not');
		$(div).prop('id', 'ok');
		$(div).css('display', 'inline');
		// $content = $(div);
	}
</script> -->
