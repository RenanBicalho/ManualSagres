<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, target-densitydpi=medium-dpi"> -->

	<title>HelpDesk Cartorial</title>

	<link type="text/css" rel="stylesheet" href="lorem.css">
	<!-- <link href='http://fonts.googleapis.com/css?family=roboto:400,300,700' rel='stylesheet' type='text/css'> -->

	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous|Satisfy|Dawning+of+a+New+Day|Encode+Sans+Expanded:800|Ubuntu" rel="stylesheet">

  <link type='text/css' rel='stylesheet' href='jquery.treefilter.css?version=1111'>

	<style>
		/* body		{background:#ddd; } */
		body		{background: url('bg_raissa.png'), #ddd; }
		/* .container	{font-family:"roboto"; font-size:16px; background:#fff; border-radius:3px;
					border:1px solid #ddd;} */
		/* .container{ position: absolute; z-index: 100;} */
		h1	{font-weight:10; font-size:64px; margin-top:0px; z-index: -1;}

		.titulo	{text-shadow: -1px 0 #ddd, 0 1px white, 1px 0 #ddd, 0 -1px #ddd; font-family: 'Righteous', cursive; font-weight:500; font-size:37px; padding-top: 10px; padding-left: 200px; padding-right: 0px; float: left;}
		/* .fred	{font-family: 'Dawning of a New Day', cursive; font-weight:10; font-size:33px; padding-top: 0px; padding-left: 380px; color: #bbb; margin: 0px;} */

		.ms1	{float: left; padding: 80px 0px 0px 0px;}
		/* .ms2	{outline:none; z-index: 100; float: left; padding: 5px 180px 5px 50px; } */
		.ms3	{z-index: 100; float: left; padding: 0px 0px 0px 900px; top: 0; }
		/* .ms4	{float: left; padding: 5px 0px 5px 80px; z-index: 100; }
		.ms5	{float: left; padding: 5px 0px 5px 2px; z-index: 100; } */

		#my-search { font-size:15px; color: slategray; z-index: 100; padding: 0px 10px; height: 35px; width: 120%; border-radius: 50px; background: #ddd;}
		/* #my-search2 { z-index: 100; padding: 0px 10px; height: 75%; width: 150%; } */
		#my-search3 { font-size:15px; color: slategray; width: 19%; height: 35px; padding: 0px 10px; border-radius: 50px; position: fixed; background: #ddd; float: left;}

		ul#my-tree	{ position: absolute; margin: 1px; left: 0; padding:120px 20px; color: solid black; z-index: -1; background-color: #ccc; width: 24%; }
		ul#my-tree	li { margin:22px 1px; font-size: 20px; background-color: #ccc; font-family: 'Righteous', cursive; }

		.header{
		 padding: 10px 10px;
		 height: 10%;
		 width: 100%;
		 /* background: darkgray; */
		 background: #bbb;
		 position: fixed;
		 top: 0px;
		 left: 0px;
		 border-radius: 0px;
		}

		#img{
			width: 10%;
			height: auto;
			top: 0;
			padding-top: 0px;
			padding-left: 15px;
			padding-right: 0px;
			float: left;
			cursor: pointer;
			vertical-align: middle;
		}

		#home{
			padding-top: 200px;
			padding-left: 280px;
			font-weight: 100;
			font-size: 33px;
			font-family: 'Satisfy', cursive;
			position: fixed;
		}

		#logo{
			padding-left: 370px;
			padding-top: 250px;
			position: fixed;
		}

		mark {
		  background: yellow;
		}

		mark.current {
		  background: yellow;
		}

		#bt1{
		  height: 30px;
		  width: 30px;
		  cursor: pointer;
		  /* float: left; */
		}

		<?php
			for($c=1; $c<=11; $c++){
				echo ".content.L".$c;
				if($c<11)
					echo ",";
			}

			echo "{ z-index: -1;
					  padding-top: 30px;
					  padding-right: 0px;
						padding-bottom: 20px;
						margin-left: 200px;
					  width: 60%;
					  text-align: justify;
			}";
		?>

		#clear{clear:both;}
		/* #footer{ */
		/* background-color: #fff; */
			/* color: #fff; */
			/* display: inline; */
			/* z-index: -1; */
			/* padding-top: 500px; */
		/* } */

		#texto{
			padding-left: 35px;
		}

		h2{	font-family: 'Encode Sans Expanded', cursive;	padding-top: 50px; font-size: 20px; }
		p {	font-family: 'Ubuntu', sans-serif; }
		/* a {	font-family: 'Ubuntu', sans-serif; background-color: #fff; border-radius: 20px; width: 200px;} */

	</style>

</head>
<body>
	<h1></h1>

	<!-- /////////////////////////////////// ARVORE DE TOPICOS /////////////////////////////////////////////// -->
	<div class="container" id="topo">

		<div class="header">
      <!-- ///// Searches //// -->
			<!-- <div class="ms2"><input type="search" id="my-search2" placeholder="Palavra-Chave em Tópico.."></div> -->
			<div class="img">
				<img onclick="window.location.reload()" id="img" src='logo.png'></img>
			</div>

			<div class="titulo" onclick="window.location.reload()" onclick="window.scrollTo(0,0)" style="cursor:pointer;">
					HelpDesk ▸ Sistema Cartorial
			</div>

			<div class="ms3"><input type="search" id="my-search3" placeholder="Palavra-Chave em Tópico/Documento.." title="Pesquisar Documentos por Palavras-Chave"></div>
			<!-- <div class="fred" onclick="window.open('fred.jpg')" style="cursor:pointer;">
					9
			</div> -->


			<!-- <div class="ms4"><button data-search="next" id="bt1" title="Próximo">&darr;</button></div>
			<div class="ms5"><button data-search="prev" id="bt1" title="Anterior">&uarr;</button></div> -->
    </div>

		<div class="ms1"><input type="search" id="my-search" placeholder="Pesquisar Tópico.." title="Pesquisar Tópico pelo Nome"></div>


		<!-- <ul id="my-tree"> -->

			<?php
				require_once("banco/confBD.php");

				echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>";
				echo "<script src='src/jquery.treefilter.js?version=7	'></script>";
				echo "<script src='jquery.mark.min.js'></script>";

				echo "<script>
								function teste(div) {
									$('.content').css('display', 'none');
									$(div).css('display', 'inline');
									window.scrollTo(0,0);
								}
							</script>";

				echo "<script>
								$(function() {
									var tree = new treefilter($('#my-tree'), {
										searcher : $('input#my-search'),
										multiselect : false
									});
								});
							</script>";

				echo "<script>
								$(function() {

							    var \$input = $('input#my-search3'),
								  \$content = $('.content'),
									\$results,
									currentClass = 'current',
							    offsetTop = 80,
									currentIndex = 0;

									\$input.on('input', function() {
							    	var searchVal = this.value, j;
							     	\$content.unmark({
							       	 done: function() {
							         \$content.mark(searchVal, {
							           separateWordSearch: true,
							           done: function() {
							             \$results = \$content.find('mark');
							             currentIndex = 0;
							           }
							         });
							       }
							     });
							    });
							  });
							</script>";

				echo "<script>
								$(function() {

							    var \$input = $('input#my-search3');

									\$input.on('input', function() {
							    	var searchVal = this.value.toLowerCase();

										function pesquisa(\$val){
											var j=1, k=0;

											while (j <= 11) {

												if (\$val) {

													var i = $('.L'+j).text().toLowerCase().indexOf(searchVal);

													if (i != -1) {
														$('li#L'+j).addClass('tf-open');
														$('li#L'+j).addClass('tf-search-result');
														k=1;
													}
													else {
														if(k == 0){
															$('li.tf-search-result').removeClass('tf-open');
															$('li.tf-search-result').removeClass('tf-search-result');
														}
													}
												}
												else {
													k=0;
													$('.tf-search-result').removeClass('tf-open');
													$('.tf-search-result').removeClass('tf-search-result');
													j=11;
												}
												j++;
											}
										}
										pesquisa(searchVal);
							    });
							  });
							</script>";

			?>

			<?php
				function criaArvore($arg, $i, $f, $cp){
					if ($i == count($arg)) {
						return;
					}
					else {
						echo '<li id='.utf8_decode($arg[$i]['docNome']).'><div><span onclick="teste(\''.'.'.$arg[$i]['docNome'].'\');">'.html_entity_decode($arg[$i]['titulo']).'</span></div>';
						$f[$cp] -= 1;

						if ($arg[$i]['numFilhos'] == 0) {
							echo "</li>";
							$i++;
						}
						else {
							$cp = $arg[$i]['codP'];
							$f[$cp] = $arg[$i]['numFilhos'];
							echo "<ul>";
							$i++;
						}

						if ($f[$cp] == 0) {
							echo "</ul>";
							echo "</li>";

							$f[$cp] = -1;
							$cp--;

							while($f[$cp] == 0 || $f[$cp] == -1) {
								if ($f[$cp] == 0) {
									echo "</ul>";
									echo "</li>";
									$f[$cp] = -1;
								}
								if ($cp == 0) {
									break;
								}
								$cp--;
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

						echo "<div id='home' class='content'>

											Bem Vindo!

							    </div>";

						echo "<div id='logo' class='content'>
										<img src='logo.png'></img>
									</div>";

						echo "<footer style='background-color: black; z-index: 100;'>
											<p>&copy; 2018 Sagres Informática e Comunicação LTDA. Todos os direitos reservados. </p>
									</footer>";

						echo "<div class='content L1' hidden=true>
							<h2> Ajustes </h2>
							<div id='texto'>
								<p>
					        Ajustes Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#topo' class='btn btn-default' role='button'>Voltar ao topo</a>

				    </div>";

						echo "<div class='content L2' hidden=true>
							<h2> Indicador Pessoal </h2>
							<div id='texto'>
								<p>
					        Indicador Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						echo "<div class='content L3' hidden=true>
							<h2> Matrícula </h2>
							<div id='texto'>
								<p>
					        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						echo "<div class='content L4' hidden=true>
							<h2> Transcrição </h2>
							<div id='texto'>
								<p>
					        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						echo "<div class='content L5' hidden=true>
							<h2> Registro Auxiliar </h2>
							<div id='texto'>
								<p>
					        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						echo "<div class='content L6' hidden=true>
							<h2> Loteamento </h2>
							<div id='texto'>
								<p>
					        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						echo "<div class='content L7' hidden=true>
							<h2> Balcão de Atendimento </h2>
							<div id='texto'>
								<p>
					        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						echo "<div class='content L8' hidden=true>
							<h2> Financeiro </h2>
							<div id='texto'>
								<p>
					        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						echo "<div class='content L9' hidden=true>
							<h2> Consultas </h2>
							<div id='texto'>
								<p>
					        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						echo "<div class='content L10' hidden=true>
							<h2> Janela </h2>
							<div id='texto'>
								<p>
					        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						echo "<div class='content L11' hidden=true>
							<h2> Ajuda </h2>
							<div id='texto'>
								<p>
					        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin felis eros, tincidunt vitae scelerisque sit amet, dictum nec ante. Praesent tincidunt ac lacus nec elementum. Vivamus sed gravida purus, sed efficitur tortor. Nulla non molestie arcu. Sed tincidunt consectetur ligula sed lobortis. In non sapien
					        ac urna lacinia placerat sed nec lacus. Aenean lobortis tincidunt sapien a hendrerit. Quisque eu turpis accumsan nisl blandit efficitur.
					      </p>

					      <p>
					        Nam sit amet pellentesque est. Sed ligula turpis, ultricies sit amet mattis elementum, tristique non risus. Phasellus at congue ex. Proin nisi leo, vestibulum vitae accumsan in, imperdiet id dolor. Quisque at blandit nisl. Class aptent taciti sociosqu
					        ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eget metus augue. Morbi faucibus venenatis sapien, fermentum porttitor felis pharetra a. Nam interdum nibh tortor, quis maximus turpis blandit eget. Praesent in feugiat neque, sed
					        vulputate quam. Curabitur erat quam, efficitur et congue quis, iaculis euismod libero. Quisque odio sapien, efficitur non mauris ac, tincidunt condimentum turpis.
					      </p>
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
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
							</div>
							<h2> Paragrafo </h2>
							<div id='texto'>
					      <p>
					        Proin vel hendrerit nulla. Vivamus vehicula nibh nec lorem blandit, quis aliquam ipsum suscipit. Nulla at vestibulum felis. Aenean ac nibh eget enim molestie pulvinar. Duis nulla justo, tristique id nulla nec, faucibus imperdiet arcu. In vel pretium dui,
					        at lobortis sapien. Phasellus ullamcorper id enim eget dictum. Ut imperdiet rutrum est a rutrum. Curabitur eget dignissim tellus. Fusce tempus leo nisl, vitae auctor diam feugiat sit amet. Vestibulum accumsan justo eget odio imperdiet, consectetur
					        efficitur ex dapibus.
					      </p>

					      <p>
					        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
					        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
					      </p>

					      <p>
					        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
					        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
					        metus. Donec lobortis eros quis vestibulum vulputate opa.
					      </p>
							</div>
							<a href='#top'>Voltar ao topo.</a>

				    </div>";

						// echo "<button class='Danger' onclick='window.location('#topo')'>Voltar ao topo.</button>";
						// echo "<a href='#topo' style='padding-top: 80px;'>Voltar ao topo.</a>";

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



	</div>

<!-- //////////////////////////////////////////// LOREM  PAGE ///////////////////////////////////////////////////// -->
		  <!-- <div class="content L1" hidden=true id="not">
	      <p>
	        Lorem1 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
	        Sedulse pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
	        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
	      </p>

	      <p>
	        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
	        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
	        metus. Donec lobortis eros quis vestibulum vulputate opa.
	      </p>
	    </div>

			<div class="content L2" hidden=true id="not">
	      <p>
	        Lorem2 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
	        metus. In ultricies sed tortor non pellentesque. Mauris quis tempor neque. Donec nec sagittis magna. Integer fringilla posuere metus eu mollis. Ut ac porta metus. Duis sed lacinia metus. Nunc malesuada iaculis risus vitae bibendum.
	      </p>

				<p> <button type="button" name="button">botao</button> </p>

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
	        Sedulso pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
	        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
	      </p>

	      <p>
	        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
	        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
	        metus. Donec lobortis eros quis vestibulum vulputate opa.
	      </p>
	    </div>

			<div class="content L3" hidden=true id="not">
	      <p>
	        Lorem3 ipsum dolor bota sit amet, consectetur adipiscing elit. Duis eu ullamcorper orci, eget porttitor justo. Aliquam id sollicitudin elit. Nulla in sodales ipsum. Donec vulputate venenatis magna. Vestibulum sit amet leo lacinia, cursus lectus in, gravida
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
	        Sedulsa pharetra odio a nibh pharetra rutrum. Suspendisse ut ullamcorper lectus. Donec ipsum mauris, congue et lobortis sit amet, ultricies ac tellus. Sed nisi risus, condimentum at varius quis, condimentum ac velit. In condimentum, magna sed ornare eleifend,
	        dolor nulla mollis felis, quis feugiat elit turpis non ipsum. Etiam aliquam est imperdiet dolor rutrum, at varius leo sodales. Morbi quis iaculis metus.
	      </p>

	      <p>
	        Maecenas auctor nec ligula ac luctus. Nam sit amet euismod mauris. Donec et diam sit amet eros efficitur tempor. Mauris non erat sit amet nunc interdum pulvinar. Sed luctus hendrerit justo eget pulvinar. Cras non arcu sed ligula faucibus pulvinar. Sed
	        egestas risus nisl. Duis quis arcu tempus, cursus erat ac, gravida enim. Cras et condimentum ante. Nullam eleifend egestas velit, quis semper est imperdiet non. Donec quis purus varius, placerat mi et, dictum lorem. Sed quis finibus nisi, vitae molestie
	        metus. Donec lobortis eros quis vestibulum vulputate opa.
	      </p>
	    </div> -->

</body>

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="src/jquery.treefilter.js"></script> -->

<!-- <script src="jquery.min.js"></script> -->
<!-- <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jquery.mark.min.js"></script> -->

<!-- <script>

  //TOPIC TREE FUCTION
	$(function() {
		var tree = new treefilter($("#my-tree"), {
			searcher : $("input#my-search"),
			multiselect : false
		});
	});
</script>

<script type="text/javascript">

	// SHOW CONTENT FUNCTION
	function teste(div) {
		$('.content').css('display', 'none');
		$(div).css('display', 'inline');
	} -->

	<!-- // MY-SEARCH3 FUNCTION
	$(function() {

    // the input field
    var $input = $("input#my-search3"),
      // clear button
      // $clearBtn = $("button[data-search='clear']"),
      // prev button
      $prevBtn = $("button[data-search='prev']"),
      // next button
      $nextBtn = $("button[data-search='next']"),
      // the context where to search
      $content = $(".content"),
      // jQuery object to save <mark> elements
      $results,
      // the class that will be appended to the current
      // focused element
      currentClass = "current",
      // top offset for the jump (the search bar)
      offsetTop = 80,
      // the current index of the focused element
      currentIndex = 0;

    /**
     * Searches for the entered keyword in the
     * specified context on input
    */
			$input.on("input", function() {
      var searchVal = this.value, j;
      $content.unmark({
        done: function() {
          $content.mark(searchVal, {
            separateWordSearch: true,
            done: function() { -->
              <!-- $results = $content.find("mark");
              currentIndex = 0;
              // jumpTo();
            }
          });
        }
      });

			for (j = 1; j <= 2; j++) {

				if (searchVal) {

					var i = $(".L"+j).text().toLowerCase().indexOf(searchVal);

					if (i != -1) { //palavra encontrada
						$("li#"+'L'+j).addClass("tf-search-result");
						$("li.tf-search-result").parent().addClass("tf-search-result");
					}
					else {
						$("li.tf-search-result").removeClass("tf-search-result");
					}
				}
				else {
					$(".tf-search-result").removeClass("tf-search-result");
					// $("input#my-search").val("");
					// memoria("out", status);
				}
			}

    });
  });

</script> -->

</html>
