<!DOCTYPE html>
<html lang="en">
<head>
  <title>HelpDesk Cartorial</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon.ico"/>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Righteous|Satisfy|Arima+Madurai|Encode+Sans+Expanded:800|Ubuntu|Poppins" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link type='text/css' rel='stylesheet' href='src/jquery.treefilter.css?version=444'>

  <!-- <link type="text/css" rel="stylesheet" href="lorem.css"> -->
  <!-- <link type='text/css' rel='stylesheet' href='src/jquery.treefilter.css?version=33'> -->

  <style>

    body	{ background: url('bg_raissa.png'), #d1d1d1; border-radius: 8px; }

    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content { height: 750px; }

    /* Set gray background color and 100% height */
    .sidenav {
      /* border: solid #a1a1a1; */
      border-radius: 40px 0 0 40px;
      margin-top: 71px;
      /* background-color: #eeeeeeee; */
      background-color: #c1c1c1c1;
      height:85.5vh;
      width: 23%;
      overflow: auto;
      position: fixed;
      margin-left: 1042px;
    }

    /* .sidenav:hover{
      box-shadow: -1px -1px 2px 5px rgba(0, 0, 0, 0.2);
    } */

    /* width */
    ::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 20px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: darkgray;
        border-radius: 20px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: gray;
    }

    /* Set black background color, white text and some padding */
    .footer {
      background-color: #555;
      color: slategray;
      padding: 4px 10px;
      height: 4%;
      width: 100%;
      margin-top: 671px;
      /* background: darkgray; */
      background: #c1c1c1;
      position: fixed;
      left: 0px;
      z-index: 1000;
      text-align: center;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: 100%;
        padding: 15px;
      }
      .row.content {height: auto;}
    }

    /* .titulo	{text-shadow: -1px 0 #ddd, 0 1px white, 1px 0 #ddd, 0 -1px #ddd; font-family: 'Righteous', cursive; font-weight:500; font-size:32px; float: left; z-index: 100; margin-top: 5px; margin-left: 250px; } */
    .titulo	{font-family: 'Poppins', cursive; font-weight:100; font-size:30px; float: left; z-index: 100; margin-top: 7px; margin-left: 250px; }
		/* .fred	{font-family: 'Dawning of a New Day', cursive; font-weight:10; font-size:33px; padding-top: 0px; padding-left: 380px; color: #bbb; margin: 0px;} */

		.ms1	{ padding: 25px 0px 0px 10px; z-index: 100; position: fixed;}
		/* .ms2	{outline:none; z-index: 100; float: left; padding: 5px 180px 5px 50px; } */

		.ms3	{ float: left; padding: 100px 0px 0px 9px; top: 0; display: none; }
		/* .ms4	{float: left; padding: 5px 0px 5px 80px; z-index: 100; }
		.ms5	{float: left; padding: 5px 0px 5px 2px; z-index: 100; } */

		#my-search { font-size:15px; color: slategray; z-index: 100; padding: 0px 10px; height: 35px; width: 120%; border-radius: 50px; background: #ddd;}
		/* #my-search2 { z-index: 100; padding: 0px 10px; height: 75%; width: 150%; } */
		#my-search3 { font-size:15px; color: slategray; width: 120%; height: 35px; padding: 0px 10px; border-radius: 50px; background: #eeeeeeee; float: left;}

		ul#my-tree	{ position: absolute; margin: 0px; left: 0; padding: 55px 20px; color: solid black; z-index: 0; height: auto; }
		ul#my-tree	li { margin:25px 0px; font-size: 20px; font-family: 'Righteous', cursive; }

    .header{
  		 padding: 7px 10px;
  		 height: 10%;
  		 width: 100%;
  		 /* background: darkgray; */
  		 background: #c1c1c1;
  		 position: fixed;
  		 left: 0px;
       z-index: 1000;
		}

    #img{
			width: 8%;
			height: auto;
      margin-top: -19px;
			padding-top: 14px;
			margin-left: 50px;
			padding-right: 0px;
			float: left;
			cursor: pointer;
			vertical-align: middle;
      position:fixed;
      z-index: 10000;
		}

		#home{
			padding-top: 110px;
			padding-left: 25px;
			font-weight: 600;
			font-size: 24px;
			font-family: 'Arima Madurai', cursive;
			position: fixed;
		}

		#logo{
      margin-left: 1px;
			/* padding-left: 100px;
			padding-top: 200px; */
			position: fixed;
      margin-left: 137px;
      margin-top: 170px;
		}

    #logo:hover{
      box-shadow: 5px 5px 5px 5px grey;
    }

		mark {
		  background: yellow;
		}

		mark.current {
		  background: yellow;
		}

		.content3 {
      z-index: 100;
			padding-top: 120px;
			padding-right: 0px;
			padding-left: 70px;
			/* margin-left: 0px; */
			width: 90%;
			text-align: justify;
		}

		#texto{padding-left: 35px; text-align: justify;}
    #texto2{padding-left: 35px; text-align: justify;}
    #texto3{padding-left: 35px; text-align: justify;}
    #texto4{padding-left: 35px; text-align: justify;}
    #texto5{padding-left: 35px; text-align: justify;}
    #texto6{padding-left: 35px; text-align: justify;}
    #texto7{padding-left: 35px; text-align: justify;}
    #texto8{padding-left: 35px; text-align: justify;}

		h2{	font-family: 'Encode Sans Expanded', cursive;	padding-top: 40px; padding-bottom: 5px; font-size: 20px; cursor: pointer; }
		p {	font-family: 'Ubuntu', sans-serif; font-size: 16px;  text-align: justify;}

    h2:hover{text-decoration: underline;}

    .btn{
      margin-left: 20px;
      margin-top: 610px;
      display: none; /* Hidden by default*/
      position: fixed; /* Fixed/sticky position */
      z-index: 100;
      border-radius: 100000px;
      border: solid #aaa;
    }

    #tplink{
      padding-left: 15px;
      font-size: 18px;
      padding-top: 10px;
    }

    #AltTop{
      top: 1px;
      padding-bottom: 20px;
      font-size: 22px;
    }

    #link{
      color: dimgray;
    }

  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">

    <div class="col-sm-9">
      <div class="header">
        <div class="img">
  				<img onclick="window.location.reload()" id="img" src='logo.png'></img>
  			</div>

  			<div class="titulo" onclick="window.location.reload()" onclick="window.scrollTo(0,0)" style="cursor:pointer; position:fixed;">
  					HelpDesk ▸ Cartorial - Sistema de Automação para Cartórios
  			</div>
      </div>

      <div class="footer">
          © 2018
          <a href='http://www.sagres.com.br' target="_blank" id="link"> Sagres Informática e Comunicação LTDA.  </a>
          Todos os direitos reservados.
      </div>

      <div id='home' class='content1'>
              <span class="glyphicon glyphicon-home"></span>
              &nbsp;&nbsp;Bem Vindo! Clique na Tela abaixo ou utilize o Menu lateral para começar
      </div>

      <div id='logo' class='content1' onclick="testeFilho('.L0')" style="cursor: pointer;">
          <!-- <img src='logo.png'></img> -->
          <img src="Prints Sagres/TelaInicial.png" alt="Tela Inicial">
      </div>

      <div class="ms3"><input type="search" id="my-search3" placeholder="Palavra-Chave.." title="Pesquisar Documentos por Palavras-Chave"></div>

      <a class='btn btn-default' id="btn" role='button' title="Voltar ao Topo" onclick="topFunction()"><span class="glyphicon glyphicon-chevron-up"></a>

      <div class="content3">
<!-- Cartorial -->
      <div class='content2 L0' hidden=true>
        <h2 id="AltTop" onclick="fechapesq('.content1')" style="cursor: pointer;"> Sistema Cartorial </h2>


        <h2 id="tplink" onclick="testeFilho('.L1')" style="cursor: pointer;"> ▸ Ajustes </h2>
        <div id='texto'>
          Ajustes do Sistema.
        </div>

        <h2 id="tplink" onclick="testeFilho('.L103')" style="cursor: pointer;"> ▸ Indicador Pessoal </h2>
        <div id='texto'>
          Cadastro e Pesquisa de Pessoas.
        </div>

        <h2 id="tplink" onclick="testeFilho('.L106')" style="cursor: pointer;"> ▸ Matrícula </h2>
        <div id='texto'>
          Cadastro e Pesquisa de Matrículas de Imóveis.
        </div>

        <h2 id="tplink" onclick="testeFilho('.L110')" style="cursor: pointer;"> ▸ Transcrição </h2>
        <div id='texto'>
          Cadastro e Pesquisa de Transcrições de Imóveis.
        </div>

        <h2 id="tplink" onclick="testeFilho('.L113')" style="cursor: pointer;"> ▸ Registro Auxiliar </h2>
        <div id='texto'>
          Cadastro e Pesquisa de Registros Auxiliares.
        </div>

        <h2 id="tplink" onclick="testeFilho('.L116')" style="cursor: pointer;"> ▸ Loteamento </h2>
        <div id='texto'>
          Cadastro e Pesquisa de Loteamento de Imóveis.
        </div>

        <h2 id="tplink" onclick="testeFilho('.L119')" style="cursor: pointer;"> ▸ Balcão de Atendimento </h2>
        <div id='texto'>
          Operações de Balcão de Atendimento, como Pedidos e Protocolos.
        </div>

        <h2 id="tplink" onclick="testeFilho('.L128')" style="cursor: pointer;"> ▸ Processos </h2>
        <div id='texto'>

        </div>

        <h2 id="tplink" onclick="testeFilho('.L142')" style="cursor: pointer;"> ▸ Financeiro </h2>
        <div id='texto'>
          Operações do Setor Financeiro, como Abertura de Caixa e Lançamentos.
        </div>

        <h2 id="tplink" onclick="testeFilho('.L153')" style="cursor: pointer;"> ▸ Consultas </h2>
        <div id='texto'>
          Consultas de dados cadastrados no Sistema.
        </div>
      </div>

<!-- Ajustes -->
        <div class='content2 L1' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Ajustes </h2>

          <!-- <img src="ConsultaRapida.png" alt="Consulta Rápida"> -->

          <h2 id="tplink" onclick="testeFilho('.L2')" style="cursor: pointer;"> ▸ Cadastro </h2>
          <div id='texto'>
            Cadastrar ou alterar Dados a serem utilizados no Sistema.
          </div>
          <!-- <a href='#top' class='btn btn-default' id="btn" role='button'>Voltar ao topo</a> -->

          <h2 id="tplink" onclick="testeFilho('.L105')" style="cursor: pointer;"> ▸ Trocar de Usuario </h2>
          <div id='texto'>
            Realizar LogOff no Sistema para realizar um Login de outro Usuário.
          </div>

        </div>
<!-- Cadastro -->
        <div class='content2 L2' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L1')" style="cursor: pointer;"> Ajustes ▸ Cadastro </h2>

          <h2 id="tplink" onclick="testeFilho('.L3')" style="cursor: pointer;"> ▸ Tabelas Internas </h2>
          <div id='texto'>
            <p>
              Consistem em tabelas auxiliares do Sistema, contendo dados de apoio aos cadastros de
              do Sistema, como Pessoa e Funcionário, tendo como finalidade facilitar e agilizar tais operações.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L88')" style="cursor: pointer;"> ▸ Dados do Cartório </h2>
          <div id='texto'>
            <p>
              Exibe os dados do Cartório cadastrado, podendo realizar um novo cadastro de Cartório,
              alterar ou excluir o já cadastrado no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L89')" style="cursor: pointer;"> ▸ Links Importantes </h2>
          <div id='texto'>
            <p>
              Exibe os 'Links' cadastrados no sistema, podendo realizar cadastrar um novo 'Link',
              alterar ou excluir os já cadastrados.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L90')" style="cursor: pointer;"> ▸ Pessoa </h2>
          <div id='texto'>
            <p>
              Exibe as 'Pessoas' cadastradas no sistema, podendo cadastrar uma nova Pessoa,
              alterar ou excluir as já cadastradas.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L91')" style="cursor: pointer;"> ▸ Funcionários </h2>
          <div id='texto'>
            <p>
              Exibe os 'Funcionários' cadastrados no sistema, podendo cadastrar um novo,
              alterar ou excluir os já cadastrados.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L92')" style="cursor: pointer;"> ▸ Contrato </h2>
          <div id='texto'>
            <p>
              Exibe os 'Contratos' cadastrados no sistema, podendo cadastrar um novo,
              alterar ou excluir os já cadastrados.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L93')" style="cursor: pointer;"> ▸ Veículo </h2>
          <div id='texto'>
            <p>
              Exibe os 'Veículos' cadastrados no sistema, podendo cadastrar um novo,
              alterar ou excluir os já cadastrados.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L94')" style="cursor: pointer;"> ▸ Permissões de Acesso </h2>
          <div id='texto'>
            <p>
              Exibe as 'Permissões de Acesso' cadastradas no sistema, podendo cadastrar uma nova,
              alterar ou excluir as já cadastradas.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L97')" style="cursor: pointer;"> ▸ Usuários </h2>
          <div id='texto'>
            <p>
              Exibe os Usuários cadastradas no sistema, podendo cadastrar um novo,
              alterar ou excluir os já cadastrados. Também permite a alteração da senha de acesso
              e das preferências dos mesmos.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L101')" style="cursor: pointer;"> ▸ Consulta Rápida </h2>

        </div>
<!-- TabelasInternas -->
        <div class='content2 L3' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Tabelas Internas </h2>

          <h2 id="tplink" onclick="testeFilho('.L4')" style="cursor: pointer;"> ▸ Cartório </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos ao Cartório, como Departamentos e Feriados, a serem utilizados no
              cadastro de um Cartório. Permite realizar novos cadastros
              de tais dados, assim como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L9')" style="cursor: pointer;"> ▸ Características da Pessoa </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos a uma Pessoa, como Nacionalidade e Estado Civil. Permite realizar novos cadastros
              de tais dados, assim como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L23')" style="cursor: pointer;"> ▸ Serviços </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos aos Serviços realizados pelo Cartório. Permite realizar novos cadastros
              de tais dados, assim como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L39')" style="cursor: pointer;"> ▸ Ato/Registro </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos aos Registros realizados pelo Cartório. Permite realizar novos cadastros
              de tais dados, assim como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L45')" style="cursor: pointer;"> ▸ Financeiro </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos ao Financeiro do Cartório, como Contas Bancárias. Permite realizar novos cadastros
              de tais dados, assim como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L54')" style="cursor: pointer;"> ▸ Imóveis </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos aos Imóveis cadastrados pelo Cartório. Permite realizar novos cadastros
              de tais dados, assim como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L58')" style="cursor: pointer;"> ▸ Endereçamento </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos ao Endereçamentos utlizados pelo Sistema, como Países e Cidades.
              Permite realizar novos cadastros de tais dados, assim como alterar ou excluir os já cadastrados
              no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L66')" style="cursor: pointer;"> ▸ DETRAN </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos aos Veiculos que poder ser cadastrados pelo Sistema.
              Permite realizar novos cadastros de tais dados, assim como alterar ou excluir os já
              cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L73')" style="cursor: pointer;"> ▸ GED </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos à Geração Eletrônica de Documentos (GED). Permite realizar novos cadastros
              de tabelas e dados das mesmas, assim como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L76')" style="cursor: pointer;"> ▸ Papel DOI </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos aos Papéis de Partes Envolvidas e o Tipo de Registro correspondente. Permite realizar novas relações
              de Papéis com o Tipo de Registro, assim como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L77')" style="cursor: pointer;"> ▸ Outros </h2>
          <div id='texto'>
            <p>
              Exibe dados relativos aos Tipos de Arquivo, Certidão, Retorno de Contrato, Penhor e Relatórios.
              Permite realizar cadastros de tais dados, assim como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>
<!-- Cartorio -->
        <div class='content2 L4' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ Cartório </h2>

          <h2 id="tplink" onclick="testeFilho('.L5')" style="cursor: pointer;"> ▸ Departamentos da Empresa </h2>
          <div id='texto'>
            <p>
              Exibe os Departamentos cadastrados, podendo cadastrar um novo Departamento do Cartório,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L6')" style="cursor: pointer;"> ▸ Feriados </h2>
          <div id='texto'>
            <p>
              Exibe os Feriados cadastrados, podendo cadastrar um novo Feriado,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L7')" style="cursor: pointer;"> ▸ Livros de Registro </h2>
          <div id='texto'>
            <p>
              Exibe os dados dos Livros de Registro cadastrados, podendo cadastrar um novo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L8')" style="cursor: pointer;"> ▸ Ramos Cartoriais </h2>
          <div id='texto'>
            <p>
              Exibe os Ramos Cartoriais cadastrados, podendo cadastrar um novo Ramo,
              bem como alterar ou excluir os já cadastrados no Sistema..
            </p>
          </div>

        </div>

        <div class='content2 L5' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L4')" style="cursor: pointer;"> Cartório ▸ Departamentos da Empresa </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Departamentos da Empresa', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Departamentos cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Departamentos cadastrados no Sistema.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Departamento cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Departamento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Departamento, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Departamento.

              <br><br>Também é possível excluir um Departamento cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Departamento em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Cartorio/DptoEmpresa.png" alt="Departamentos da Empresa" style="padding-left: 110px;">
            <figcaption style="padding-left: 300px;">Tela Departamentos Empresa</figcaption>
          </figure>
        </div>

        <div class='content2 L6' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L4')" style="cursor: pointer;"> Cartório ▸ Feriados </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Feriados', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem numérica do Código, dos Feriados cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Feriados cadastrados no Sistema.
              Serão exibidos na tela dados como: Descrição do mesmo, Data, Tipo e Observações.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Feriado cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Feriado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Feriado, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Feriado.

              <br><br>Também é possível excluir um Feriado cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Feriado em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Cartorio/Feriados.png" alt="Feriados" style="padding-left: 70px;">
            <figcaption style="padding-left: 390px;">Tela Feriados</figcaption>
          </figure>

        </div>

        <div class='content2 L7' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L4')" style="cursor: pointer;"> Cartório ▸ Livros de Registro </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Livros de Registro', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Livros de Registro cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Livros cadastrados no Sistema.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Livro cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Livro de Registro, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Livro, sendo que o Código do mesmo é gerado sequencialmente.
              <br>O <a onclick="testeFilho('.L8')" style="cursor: pointer;">Ramo Cartorial</a>, deve estar cadastrado,
              bastando selecionar um já cadastrado ou criar um novo, clicando no botão à direita do campo do Ramo.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Livro.

              <br><br>Também é possível excluir um Livro cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Livro de Registro em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Cartorio/Livros.png" alt="Livros de Registro">
            <figcaption style="padding-left: 340px;">Tela Livros de Registro</figcaption>
          </figure>
        </div>

        <div class='content2 L8' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L4')" style="cursor: pointer;"> Cartório ▸ Ramos Cartoriais </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Ramos Cartoriais', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem numérica do Código, dos Ramos Cartoriais cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Ramos cadastrados no Sistema.
              Serão exibidas uma Descrição e Observação do mesmo na tela.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Ramo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Ramo Cartorial, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Ramo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Ramo Cartorial.

              <br><br>Também é possível excluir um Ramo Cartorial cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Ramo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Cartorio/Ramos.png" alt="Ramos Cartoriais" style="padding-left: 70px;">
            <figcaption style="padding-left: 340px;">Tela Ramos Cartoriais</figcaption>
          </figure>

        </div>
<!-- Características -->
        <div class='content2 L9' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ Características da Pessoa </h2>

          <h2 id="tplink" onclick="testeFilho('.L10')" style="cursor: pointer;"> ▸ Tipos de Documentos </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Documentos cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L11')" style="cursor: pointer;"> ▸ Tipos de Telefone </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Telefone cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L12')" style="cursor: pointer;"> ▸ Provedor de Email </h2>
          <div id='texto'>
            <p>
              Exibe os Provedores de Email cadastrados, podendo incluir um novo Provedor,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L13')" style="cursor: pointer;"> ▸ Grau de Instrução </h2>
          <div id='texto'>
            <p>
              Exibe os Graus de Instrução cadastrados, podendo incluir um novo Grau,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L14')" style="cursor: pointer;"> ▸ Grau de Relacionamento </h2>
          <div id='texto'>
            <p>
              Exibe os Graus de Relacionamento cadastrados, podendo incluir um novo Grau,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L15')" style="cursor: pointer;"> ▸ Nacionalidade </h2>
          <div id='texto'>
            <p>
              Exibe as Nacionalidades cadastradas, podendo incluir uma nova Nacionalidade,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L16')" style="cursor: pointer;"> ▸ Estado Civil </h2>
          <div id='texto'>
            <p>
              Exibe os Estados Civis cadastrados, podendo incluir um novo Estado,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L17')" style="cursor: pointer;"> ▸ Regime Matrimônio </h2>
          <div id='texto'>
            <p>
              Exibe os Regimes Matrimoniais cadastrados, podendo incluir um novo Regime,
              bem como alterar ou excluir os já cadastrados no Sistema..
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L18')" style="cursor: pointer;"> ▸ Ocupação </h2>
          <div id='texto'>
            <p>
              Exibe as Ocupações cadastradas, podendo incluir uma nova Ocupação,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L19')" style="cursor: pointer;"> ▸ Classificação Pessoa Jurídica </h2>
          <div id='texto'>
            <p>
              Exibe as Classificações de Pessoa Jurídica cadastrados, podendo incluir uma nova Classificação,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L20')" style="cursor: pointer;"> ▸ Vínculo Empregatício </h2>
          <div id='texto'>
            <p>
              Exibe os Vínculos Empregatícios cadastrados, podendo incluir um novo Vínculo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L21')" style="cursor: pointer;"> ▸ Jornada de Trabalho </h2>
          <div id='texto'>
            <p>
              Exibe as Jornadas de Trabalho cadastradas, podendo incluir ua nova Jornada,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L22')" style="cursor: pointer;"> ▸ Cargo Funcional </h2>
          <div id='texto'>
            <p>
              Exibe os Cargos Funcionais cadastrados, podendo incluir um novo Cargo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L10' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Tipos de Documento </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Documento', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Tipos de Documento cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Tipos de Documento cadastrados no Sistema.
              Serão exibidos o Código do mesmo, e o tipo de Pessoa.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Documento cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Documento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo de Documento, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Documento.

              <br><br>Também é possível excluir um Tipo de Documento cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo de Documento em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/TiposDoc.png" alt="Tipos de Documento" style="padding-left: 100px;">
            <figcaption style="padding-left: 340px;">Tela Tipo de Documento</figcaption>
          </figure>

        </div>

        <div class='content2 L11' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Tipos de Telefone </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Telefone', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Tipos de Telefone cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Tipos de Telefone cadastrados no Sistema.
              Serão exibidos o Código e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Telefone cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Telefone, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo de Telefone, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Telefone.

              <br><br>Também é possível excluir um Tipo de Telefone cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo de Telefone em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/TiposTel.png" alt="Tipos de Telefone" style="padding-left: 100px;">
            <figcaption style="padding-left: 340px;">Tela Tipo de Telefone</figcaption>
          </figure>
        </div>

        <div class='content2 L12' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Provedor de Email </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Provedor de Email', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Provedores de Email cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Provedores cadastrados no Sistema.
              Serão exibidos o Código e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Provedor de Email cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Provedor de Email, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Provedor, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Provedor de Email.

              <br><br>Também é possível excluir um Provedor de Email cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Provedor em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/ProvEmail.png" alt="Provedor de Email" style="padding-left: 100px;">
            <figcaption style="padding-left: 340px;">Tela Tipo de Telefone</figcaption>
          </figure>
        </div>

        <div class='content2 L13' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Grau de Instrução </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Grau de Instrução', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem numérica do Código, dos Graus de Instrução cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Graus de Instrução cadastrados no Sistema.
              Serão exibidos o Código e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Grau de Instrução cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Grau de Instrução, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Grau de Instrução, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Grau de Instrução.

              <br><br>Também é possível excluir um Grau de Instrução cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Grau de Instrução em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/GrauInst.png" alt="Grau de Instrução" style="padding-left: 100px;">
            <figcaption style="padding-left: 340px;">Tela Grau de Instrução</figcaption>
          </figure>
        </div>

        <div class='content2 L14' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Grau de Relacionamento </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Grau de Relacionamento', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem numérica do Código, dos Graus de Relacionamento cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Graus de Relacionamento cadastrados no Sistema.
              Serão exibidos o Código e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Grau de Relacionamento cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Grau de Relacionamento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Grau de Relacionamento, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Grau de Relacionamento.

              <br><br>Também é possível excluir um Grau de Relacionamento cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Grau de Relacionamento em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/GrauRel.png" alt="Grau de Relacionamento" style="padding-left: 100px;">
            <figcaption style="padding-left: 340px;">Tela Grau de Relacionamento</figcaption>
          </figure>
        </div>

        <div class='content2 L15' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Nacionalidade </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Nacionalidade', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem numérica do Código, das Nacionalidades cadastradas. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre as Nacionalidades cadastradas no Sistema.
              Serão exibidos a Nacionalidade e o
              <a onclick="testeFilho('.L59')" style="cursor: pointer;">País</a>
              do mesmo, que deve estar cadastrado.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Nacionalidade cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Nacionalidade, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Nacionalidade, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Nacionalidade.

              <br><br>Também é possível excluir uma Nacionalidade cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Nacionalidade em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/Nacionalidade.png" alt="Nacionalidade"  style="padding-left: 100px;">
            <figcaption style="padding-left: 340px;">Tela Nacionalidade</figcaption>
          </figure>
        </div>

        <div class='content2 L16' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Estado Civil </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Estado Civil', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem numérica do Código, dos Estados Civis cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Estados Civis cadastrados no Sistema.
              Serão exibidos o Estado Civil e Código do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Estado Civil cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Estado Civil, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Estado Civil, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Estado Civil.

              <br><br>Também é possível excluir um Estado Civil cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Estado Civil em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/EstCivil.png" alt="Estado Civil" style="padding-left: 20px;">
            <figcaption style="padding-left: 390px;">Tela Estado Civil</figcaption>
          </figure>
        </div>

        <div class='content2 L17' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Regime Matrimônio </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Regime Matrimônio', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Regimes Matrimoniais cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Regimes Matrimoniais cadastrados no Sistema.
              Serão exibidos o Código, Descrição e Observação do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Regime Matrimonial cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Regime Matrimonial, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Regime Matrimonial, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Regime Matrimonial.

              <br><br>Também é possível excluir um Regime Matrimonial cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Regime Matrimonial em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/RegMatri.png" alt="Regime Matrimônio" style="padding-left: 20px;">
            <figcaption style="padding-left: 390px;">Tela Regime Matrimonial</figcaption>
          </figure>
        </div>

        <div class='content2 L18' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Ocupação </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Ocupação', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, das Ocupações cadastradas. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre as Ocupações cadastradas no Sistema.
              Serão exibidos o Código, Descrição, Carga Horária e Observação do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Ocupação cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Ocupação, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Ocupação, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Ocupação.

              <br><br>Também é possível excluir uma Ocupação cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Ocupação em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/Ocupacao.png" alt="Ocupação" style="padding-left: 80px;">
            <figcaption style="padding-left: 340px;">Tela Regime Matrimonial</figcaption>
          </figure>
        </div>

        <div class='content2 L19' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Classificação Pessoa Jurídica </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Classificação Pessoa Jurídica', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, das Classificações de Pessoa Jurídica cadastradas.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Classificações
              cadastradas no Sistema.
              Serão exibidos o Código, Descrição, e Observações do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Classificação cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Classificação, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Classificação, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Classificação.

              <br><br>Também é possível excluir uma Classificação cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Classificação em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/ClassPessJur.png" alt="Classificação Pessoa Jurídica" style="padding-left: 110px;">
            <figcaption style="padding-left: 330px;">Tela Regime Matrimonial</figcaption>
          </figure>
        </div>

        <div class='content2 L20' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Vínculo Empregatício </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Vínculo Empregatício', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, dos Vínculos Empregatícios cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Vínculos
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, e Observações do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Vínculo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Vínculo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Vínculo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Vínculo.

              <br><br>Também é possível excluir um Vínculos cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Vínculo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/VinculoEmp.png" alt="Vínculo Empregatício" style="padding-left: 90px;">
            <figcaption style="padding-left: 370px;">Tela Vínculos</figcaption>
          </figure>
        </div>

        <div class='content2 L21' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Jornada de Trabalho </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Jornada de Trabalho', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, das Jornadas de Trabalho cadastradas.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Jornadas
              cadastradas no Sistema.
              Serão exibidos o Código, Descrição, e Carga Horária da mesma.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Jornada cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Jornada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Jornada, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Jornada de Trabalho.

              <br><br>Também é possível excluir uma Jornada cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Jornada em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/JornTrabalho.png" alt="Jornada de Trabalho" style="padding-left: 50px;">
            <figcaption style="padding-left: 370px;">Tela Jornadas de Trabalho</figcaption>
          </figure>
        </div>

        <div class='content2 L22' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L9')" style="cursor: pointer;"> Características da Pessoa ▸ Cargo Funcional </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Cargo Funcional', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem numérica do Código, dos Cargos Funcionais cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Cargos
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, e Observações do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Cargo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Cargo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Cargo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Cargo.

              <br><br>Também é possível excluir um Cargo Funcional cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Cargo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/CaracPessoa/CargoFun.png" alt="Cargo Funcional" style="padding-left: 50px;">
            <figcaption style="padding-left: 370px;">Tela Cargo Funcional</figcaption>
          </figure>
        </div>
<!-- Serviços -->
        <div class='content2 L23' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ Serviços </h2>

          <h2 id="tplink" onclick="testeFilho('.L24')" style="cursor: pointer;"> ▸ Faixa de Valores </h2>
          <div id='texto'>
            <p>
              Exibe as Faixas de Valores cadastradas, podendo incluir uma nova Faixa,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L25')" style="cursor: pointer;"> ▸ Grupos de Serviços </h2>
          <div id='texto'>
            <p>
              Exibe os Grupos de Serviços cadastrados, podendo incluir um novo Grupo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L26')" style="cursor: pointer;"> ▸ Tabelas </h2>
          <div id='texto'>
            <p>
              Exibe as Tabelas de Atos Extra Judiciais cadastradas, podendo incluir uma nova Tabela,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L27')" style="cursor: pointer;"> ▸ Serviços </h2>
          <div id='texto'>
            <p>
              Exibe as Serviços cadastrados, podendo incluir um novo Serviço,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L28')" style="cursor: pointer;"> ▸ Pacotes de Serviço </h2>
          <div id='texto'>
            <p>
              Exibe os Pacotes de Serviço cadastrados, podendo incluir um novo Pacote,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L29')" style="cursor: pointer;"> ▸ Preço </h2>
          <div id='texto'>
            <p>
              Exibe os dados relativos aos preços das cobranças realizadas pelo Cartório. Permite inserir,
              alterar ou excluir os já inseridos no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L36')" style="cursor: pointer;"> ▸ Origem Registro </h2>
          <div id='texto'>
            <p>
              Exibe as Origens de Registro cadastradas, podendo incluir uma nova Origem,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L37')" style="cursor: pointer;"> ▸ Prioridades (Atendimento) </h2>
          <div id='texto'>
            <p>
              Exibe as Prioridades de Atendimento cadastradas, podendo incluir uma nova Prioridade,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L38')" style="cursor: pointer;"> ▸ Natureza Protocolo </h2>
          <div id='texto'>
            <p>
              Exibe as Naturezas de Protocolo cadastradas, podendo incluir uma nova Natureza,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L24' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L23')" style="cursor: pointer;"> Serviços ▸ Faixa de Valores </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Faixa de Valores', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem numérica do Código, das Faixas de Valores cadastradas.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Faixas
              cadastradas no Sistema.
              Serão exibidos o Código, os Valores, e as Vigências da mesma.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Faixa cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Faixa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Faixa de Valor, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Faixa.

              <br><br>Também é possível excluir uma Faixa de Valor cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Faixa em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/FaixasValores.png" alt="Faixas de Valores" style="padding-left: 90px;">
            <figcaption style="padding-left: 350px;">Tela Faixa de Valor</figcaption>
          </figure>
        </div>

        <div class='content2 L25' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L23')" style="cursor: pointer;"> Serviços ▸ Grupos de Serviços </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Grupos de Serviços', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, dos Grupos de Serviços cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Grupos
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, e Observações do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Grupo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Grupo de Serviço, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Grupo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Grupo.

              <br><br>Também é possível excluir um Grupo de Serviço cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Cargo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/GrupoServ.png" alt="Grupos de Serviços" style="padding-left: 60px;">
            <figcaption style="padding-left: 310px;">Tela Grupo de Serviço</figcaption>
          </figure>
        </div>

        <div class='content2 L26' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L23')" style="cursor: pointer;"> Serviços ▸ Tabelas </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tabelas', a tela abaixo será exibida, onde poderá ser
              visualizada a primeira, em ordem alfabética, das Tabelas de Atos Extra Judiciais cadastradas.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre tais Tabelas
              cadastradas no Sistema.
              Serão exibidos o Código, Descrição, Observações, Data de Vigência e os Itens da mesma.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Tabela cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Tabela, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Tabela, sendo que o Código da mesma é gerado sequencialmente.

              <br><br>Para cadastrar um Item na tabela, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/cadastro.png" alt="Cadastro">,
              no canto inferior esquerdo após a janela dos Itens da Tabela.
              <br>Assim, uma janela será exibida, podendo inserir os dados do Item a ser inserido na Tabela.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Tabela.

              <br><br>Também é possível excluir uma Tabela cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Tabela em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Tabelas.png" alt="Tabelas" style="padding-left: 30px;">
            <figcaption style="padding-left: 330px;">Tela Tabelas Atos Extra Judiciais</figcaption>
          </figure>
        </div>

        <div class='content2 L27' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L23')" style="cursor: pointer;"> Serviços ▸ Serviços </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Serviços', a tela abaixo será exibida, onde poderá ser
              visualizada o primeiro, em ordem alfabética, dos Serviços cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, Observações, Data de Vigência, Ramo Cartorial, Grupo
              do Serviço e os Itens do mesmo na tabela abaixo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Serviço cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Serviço, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Serviço, sendo que o Código do mesmo é gerado sequencialmente.

              <br><br>Para inserir um Item de Serviço na tabela do mesmo, basta selecioná-lo no campo
              'Inserir Itens da Tabela', acima da própria tabela.
              <br> Para cadastrar um novo Item, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/itens.png" alt="Itens Serviço">,
              no canto inferior esquerdo após a janela dos Itens do Serviço.
              <br>Assim, uma janela será exibida, podendo visualizar e cadastrar tais Itens.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Serviço.

              <br><br>Também é possível excluir um Serviço cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Serviço em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>

          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Serviços.png" alt="Serviços" width="110%" height="auto">
            <figcaption style="padding-left: 390px;">Tela Serviços</figcaption>
          </figure>

        </div>

        <div class='content2 L28' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L23')" style="cursor: pointer;"> Serviços ▸ Pacotes de Serviço </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Pacotes de Serviços', a tela abaixo será exibida, onde poderá ser
              visualizada o primeiro, em ordem alfabética, dos Pacotes de Serviços cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, Observações e os Itens do mesmo, posicionados no lado
              inferior da tela.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Pacote cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Pacote, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Pacote, sendo que o Código do mesmo é gerado sequencialmente.

              <br><br>Para inserir um Item no Pacote, basta selecioná-lo no campo
              'Serviço', acima da própria tabela, inserir a quantidade do mesmo no
              campo e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/plus.png" alt="Ícone Mais">
              , à direta da tabela.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Pacote.

              <br><br>Também é possível excluir um Pacote cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Pacote em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>

          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/PcteServiço.png" alt="Pacotes de Serviços" style="padding-left: 30px;">
            <figcaption style="padding-left: 390px;">Tela Pacotes Serviços</figcaption>
          </figure>
        </div>
<!-- Preço -->
        <div class='content2 L29' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L23')" style="cursor: pointer;"> Serviços ▸ Preço </h2>

          <h2 id="tplink" onclick="testeFilho('.L30')" style="cursor: pointer;"> ▸ Tipos de Taxas </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Taxas cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L31')" style="cursor: pointer;"> ▸ Taxas </h2>
          <div id='texto'>
            <p>
              Exibe as Taxas cadastradas, podendo incluir uma nova Taxa,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L32')" style="cursor: pointer;"> ▸ Tipos de Impostos </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Impostos cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L33')" style="cursor: pointer;"> ▸ Impostos </h2>
          <div id='texto'>
            <p>
              Exibe os Impostos cadastrados, podendo incluir um novo Imposto,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L34')" style="cursor: pointer;"> ▸ Tipos de Descontos </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Descontos cadastrados, podendo incluir um novo Desconto,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L35')" style="cursor: pointer;"> ▸ Descontos </h2>
          <div id='texto'>
            <p>
              Exibe os Descontos cadastrados, podendo incluir um novo Desconto,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L30' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L29')" style="cursor: pointer;"> Preço ▸ Tipos de Taxas </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Taxas', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, dos Tipos de Taxas cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Tipos
              cadastrados no Sistema.
              Serão exibidos o Código, a Descrição e o Tipo do mesmo, que pode ser Jurídica ou Financeira.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Taxa cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Taxa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo de Taxa, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo.

              <br><br>Também é possível excluir um Tipo de Taxa cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Preço/TiposTaxas.png" alt="Tipos de Taxas" style="padding-left: 120px;">
            <figcaption style="padding-left: 350px;">Tela Tipo de Taxa</figcaption>
          </figure>
        </div>

        <div class='content2 L31' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L29')" style="cursor: pointer;"> Preço ▸ Taxas </h2>
          <div id="texto">
            <p>
              Ao clicar em 'Taxas', a tela abaixo será exibida, onde poderá ser
              visualizado a primeira, em ordem alfabética, das Taxas cadastradas no Sistema.
              Assim, é possível navegar entre elas, através das setas do canto superior esquerdo.
              Serão exibidos o Código, a Descrição, o Tipo da mesma, o Nome abreviado, as Vigências e
              Observações.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Taxa cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Taxa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Taxa, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Taxa.

              <br><br>Também é possível excluir uma Taxa cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Taxa em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>

          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Preço/Taxas.png" alt="Taxas" style="padding-left: 40px;">
            <figcaption style="padding-left: 410px;">Tela Taxas</figcaption>
          </figure>
        </div>

        <div class='content2 L32' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L29')" style="cursor: pointer;"> Preço ▸ Tipos de Impostos </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Impostos', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, dos Tipos de Impostos cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Tipos
              cadastrados no Sistema.
              Serão exibidos o Código, e a Descrição mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Imposto cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Imposto, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo de Imposto, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo.

              <br><br>Também é possível excluir um Tipo de Impostos cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Preço/TiposImpostos.png" alt="Tipos de Impostos" style="padding-left: 120px;">
            <figcaption style="padding-left: 350px;">Tela Tipo de Imposto</figcaption>
          </figure>
        </div>

        <div class='content2 L33' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L29')" style="cursor: pointer;"> Preço ▸ Impostos </h2>

          <div id="texto">
            <p>
              Ao clicar em 'Impostos', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, dos Impostos cadastrados no Sistema.
              Assim, é possível navegar entre eles, através das setas do canto superior esquerdo.
              Serão exibidos o Código, a Descrição, o Tipo do mesmo, o Nome abreviado, as Vigências e
              Observações.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Imposto cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Imposto, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Imposto, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Imposto.

              <br><br>Também é possível excluir um Imposto cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Imposto em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>

          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Preço/Impostos.png" alt="Impostos" style="padding-left: 80px;">
            <figcaption style="padding-left: 390px;">Tela Impostos</figcaption>
          </figure>
        </div>

        <div class='content2 L34' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L29')" style="cursor: pointer;"> Preço ▸ Tipos de Descontos </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Descontos', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, dos Tipos de Descontos cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Tipos
              cadastrados no Sistema.
              Serão exibidos o Código, e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Desconto cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Desconto, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo de Desconto, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo.

              <br><br>Também é possível excluir um Tipo de Desconto cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Preço/TiposDescontos.png" alt="Tipos de Descontos" style="padding-left: 120px;">
            <figcaption style="padding-left: 350px;">Tela Tipo de Desconto</figcaption>
          </figure>
        </div>

        <div class='content2 L35' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L29')" style="cursor: pointer;"> Preço ▸ Descontos </h2>

          <div id="texto">
            <p>
              Ao clicar em 'Descontos', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, dos Descontos cadastrados no Sistema.
              Assim, é possível navegar entre eles, através das setas do canto superior esquerdo.
              Serão exibidos o Código, a Descrição, o Tipo do mesmo, o Nome abreviado, as Vigências e
              Observações.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Desconto cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Desconto, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Desconto, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Desconto.

              <br><br>Também é possível excluir um Desconto cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Desconto em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>

          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Preço/Descontos.png" alt="Descontos" style="padding-left: 80px;">
            <figcaption style="padding-left: 390px;">Tela Descontos</figcaption>
          </figure>
        </div>
<!-- Serviços -->
        <div class='content2 L36' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L23')" style="cursor: pointer;"> Serviços ▸ Origem Registro </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Origem Registro', a tela abaixo será exibida, onde poderá ser
              visualizado a primeira, em ordem alfabética, das Origens de Registro cadastradas.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Origens
              cadastradas no Sistema.
              Serão exibidos o Código, a Descrição e as respectivas áreas onde poderá ser aplicada.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Origem de Registro cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Origem de Registro, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Origem, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Origem.

              <br><br>Também é possível excluir uma Origem de Registro cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Origem em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/OrigemRegistro.png" alt="Origem Registro" style="padding-left: 100px;">
            <figcaption style="padding-left: 390px;">Tela Origem Registro</figcaption>
          </figure>
        </div>

        <div class='content2 L37' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L23')" style="cursor: pointer;"> Serviços ▸ Prioridades (Atendimento) </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Prioridades (Atendimento)', a tela abaixo será exibida, onde poderá ser
              visualizado a primeira, em ordem alfabética, das Prioridades de Atendimento cadastradas.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Prioridades
              cadastradas no Sistema.
              Serão exibidos o Código, a Tabela correspondente ao Serviço, a Descrição e Observações.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Prioridade de Atendimento cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Prioridade de Atendimento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Prioridade, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Prioridade.

              <br><br>Também é possível excluir uma Prioridade de Atendimento cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Prioridade em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Prioridade.png" alt="Prioridades" style="padding-left: 100px;">
            <figcaption style="padding-left: 390px;">Tela Prioridades</figcaption>
          </figure>
        </div>

        <div class='content2 L38' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L23')" style="cursor: pointer;"> Serviços ▸ Natureza Protocolo </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Natureza Protocolo', a tela abaixo será exibida, onde poderá ser
              visualizado a primeira, em ordem numérica do Código, das Naturezas de Protocolo cadastradas.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Naturezas
              cadastradas no Sistema.
              Serão exibidos o Código, a Descrição, Observações e as respectivas prioridades.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Natureza de Protocolo cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Natureza de Protocolo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Natureza, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Natureza.

              <br><br>Também é possível excluir uma Natureza de Protocolo cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Natureza em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/Natureza.png" alt="Natureza" style="padding-left: 100px;">
            <figcaption style="padding-left: 350px;">Tela Natureza Protocolo</figcaption>
          </figure>
        </div>
<!-- AtoRegistro -->
        <div class='content2 L39' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ Ato/Registro </h2>

          <h2 id="tplink" onclick="testeFilho('.L40')" style="cursor: pointer;"> ▸ Classes de Registros </h2>
          <div id='texto'>
            <p>
              Exibe as Classes de Registro cadastrados, podendo incluir uma nova Classe,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L41')" style="cursor: pointer;"> ▸ Registros de Classe </h2>
          <div id='texto'>
            <p>
              Exibe os Registros de Classe cadastrados, podendo incluir um novo Registro,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L42')" style="cursor: pointer;"> ▸ Averbação Indisponibilidade </h2>
          <div id='texto'>
            <p>
              Exibe as Averbações de Indisponibilidades cadastradas, podendo incluir uma nova Averbação,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L43')" style="cursor: pointer;"> ▸ Modelo Exigências </h2>
          <div id='texto'>
            <p>
              Exibe os Modelos de Exigências cadastrados, podendo incluir um novo Modelo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L44')" style="cursor: pointer;"> ▸ Papéis Partes Envolvidas </h2>
          <div id='texto'>
            <p>
              Exibe os Papéis de Partes Envolvidas cadastradas, podendo incluir um novo Papel,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L40' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L39')" style="cursor: pointer;"> Ato/Registro ▸ Classes de Registros </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Classes de Registros', a tela abaixo será exibida, onde poderá ser
              visualizada a primeira, em ordem alfabética, das Classes de Registro cadastradas.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Classes
              cadastradas no Sistema.
              <br>Serão exibidos o Código, a Descrição, o Tipo de Registro, as áreas onde poderá ser aplicada e o Livro correspondente.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Classe de Registro cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Classe de Registro, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Classe, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Classe.

              <br><br>Também é possível excluir uma Classe de Registro cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Classe em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/AtoRegistro/ClasseRegistros.png" alt="Classe Registros" style="padding-left: 70px;">
            <figcaption style="padding-left: 390px;">Tela Classes de Registros</figcaption>
          </figure>

        </div>

        <div class='content2 L41' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L39')" style="cursor: pointer;"> Ato/Registro ▸ Registros de Classe </h2>

          <div id="texto">
            <p>
              Ao clicar em 'Registros de Classe', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, dos Registros de Classe cadastrados no Sistema.
              Assim, é possível navegar entre eles, através da lista de Registros à esquerda da tela,
              podendo ser feita uma pesquisa de Registros no campo logo acima da lista.
              <br>Serão exibidos o Código, a Descrição e a Classe do mesmo.
              <br>No canto inferior direito poderá ser visualizada uma janela com informações padrão da Classe em questão.
              <br>Serão exibidos: Texto Padrão, Itens de Serviço, Requisitos e Partes Envolvidas.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Registro de Classe cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Registro de Classe, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Registro, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Registro.

              <br><br>Também é possível excluir um Registro de Classe cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Registro em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>

          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/AtoRegistro/ModeloRegistro.png" alt="Registros Classe" width="112%" height="auto" style="padding-left: 50px;">
            <figcaption style="padding-left: 390px;">Tela Registros de Classe</figcaption>
          </figure>
        </div>

        <div class='content2 L42' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L39')" style="cursor: pointer;"> Ato/Registro ▸ Averbação Indisponibilidade </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Averbação Indisponibilidade', a tela abaixo será exibida, onde poderão ser
              declaradas indisponibilidades de Registros, Serviços ou Itens de Serviços, em relação ao Proprietário e ao Credor do Imóvel.
              <br><br>Assim, é possível selecionar, dentre os Registros, Classes de Registro, Serviços ou Itens de Serviço
              cadastrados, qual será declarado como Indisponível.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/AtoRegistro/confirma.png" alt="Confirma">
              para finalizar o registro da Indisponibilidade.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/AtoRegistro/AverbIndisp.png" alt="Averbação Indisponibilidade" style="padding-left: 120px;">
            <figcaption style="padding-left: 340px;">Tela Averbação Indisponibilidade</figcaption>
          </figure>
        </div>

        <div class='content2 L43' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L39')" style="cursor: pointer;"> Ato/Registro ▸ Modelo Exigências </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Modelo Exigências', a tela abaixo será exibida, onde poderá ser
              visualizada o primeiro, em ordem alfabética, dos Modelos Exigências de Protocolo cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Modelos
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, Ramo Cartorial, Definições de Situação, Observações e os Itens da Exigência na tabela
              posicionada no lado inferior da tela.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Exigência cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Exigência, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Exigência, sendo que o Código da mesma é gerado sequencialmente.

              <br><br>Para inserir um Item da Exigência, basta inseri-la no campo
              'Descrição do Item da Exigência', acima da própria tabela, e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/plus.png" alt="Ícone Mais">
              , à direta da tabela.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Exigência.

              <br><br>Também é possível excluir uma Exigência cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Exigência em questão será excluída    do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>

          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/AtoRegistro/ModeloExigencias.png" alt="Modelo Exigências" style="padding-left: 30px;">
            <figcaption style="padding-left: 390px;">Tela Modelo Exigências</figcaption>
          </figure>
        </div>

        <div class='content2 L44' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L39')" style="cursor: pointer;" > Ato/Registro ▸ Papéis Partes Envolvidas </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Papéis Partes Envolvidas', a tela abaixo será exibida, onde poderá ser
              visualizado o primeiro, em ordem alfabética, dos Papéis de Partes Envolvidas nos Registros cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Papéis
              cadastradas no Sistema.
              <br>Serão exibidos o Código, a Descrição, a Função, e o tipo de Pessoa correspondente.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Papel de Parte Envolvida cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Papel de Parte Envolvida, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Papel, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Papel.

              <br><br>Também é possível excluir um Papel cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Papel em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/AtoRegistro/Papeis.png" alt="Papéis Partes Envolvidas" style="padding-left: 120px;">
            <figcaption style="padding-left: 300px;">Tela Papéis de Partes Envolvidas</figcaption>
          </figure>
        </div>
<!-- Financeiro -->
        <div class='content2 L45' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ Financeiro </h2>

          <h2 id="tplink" onclick="testeFilho('.L46')" style="cursor: pointer;"> ▸ Banco </h2>
          <div id='texto'>
            <p>
              Exibe os Bancos cadastrados, podendo incluir um novo Banco,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L47')" style="cursor: pointer;"> ▸ Contas Bancárias </h2>
          <div id='texto'>
            <p>
              Exibe as Contas Bancárias cadastradas, podendo incluir uma nova Conta,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L48')" style="cursor: pointer;"> ▸ Convênios Banco / Adm Cartão </h2>
          <div id='texto'>
            <p>
              Exibe os Convênios de Banco/Administrador de Cartão cadastrados, podendo incluir um novo Convênio,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L49')" style="cursor: pointer;"> ▸ Formas de Pagto </h2>
          <div id='texto'>
            <p>
              Exibe as Formas de Pagamento cadastradas, podendo incluir uma nova Forma,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L50')" style="cursor: pointer;"> ▸ Tipos de Lançamento </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Lançamento cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L51')" style="cursor: pointer;"> ▸ Tipos de Movimentos Financeiros </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Movimentos Financeiros cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L52')" style="cursor: pointer;"> ▸ Tipos de Contratos </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Contratos cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L53')" style="cursor: pointer;"> ▸ Tipos de Doc Financeiro </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Documento Financeiro cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L46' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L45')" style="cursor: pointer;"> Financeiro ▸ Bancos </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Bancos', a tela abaixo será exibida, onde poderão ser
              visualizados os Bancos cadastrados no Sistema, sendo possível navegar, através das setas
              do canto superior esquerdo, entre os Bancos cadastrados no Sistema.
              <br>Serão exibidos o Código, Nome, Sigla, Competência e o site correspondente.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Banco cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Banco, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Banco, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Banco.

              <br><br>Também é possível excluir um Banco cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Banco em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Financeiro/Banco.png" alt="Bancos"  style="padding-left: 50px;">
            <figcaption style="padding-left: 360px;">Tela Bancos</figcaption>
          </figure>
        </div>

        <div class='content2 L47' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L45')" style="cursor: pointer;"> Financeiro ▸ Contas Bancárias </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Contas Bancárias', a tela abaixo será exibida, onde poderão ser
              visualizados, em ordem numérica do Código, os Bancos cadastrados no Sistema.
              <br>Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Bancos cadastrados no Sistema.
              <br>Serão exibidos o Código, os Dados da Conta, utilizando um Banco já cadastrado,
              e os dados do Contato também cadastrado, correspondente à Conta Bancária em questão.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Conta Bancária cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Conta Bancária, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Conta, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Conta.

              <br><br>Também é possível excluir uma Conta cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Conta Bancária em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Financeiro/ContaBancaria.png" alt="Contas Bancárias" style="padding-left: 40px;">
            <figcaption style="padding-left: 400px;">Tela Conta Bancária</figcaption>
          </figure>
        </div>

        <div class='content2 L48' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L45')" style="cursor: pointer;"> Financeiro ▸ Convênios Bancos/Adm Cartão </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Convênios Bancos/Adm Cartão', a tela abaixo será exibida, onde poderão ser
              visualizados, em ordem numérica do Código, os Convênios Bancos/Adm Cartão cadastrados no Sistema.
              <br>Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Convênios cadastrados no Sistema.
              <br>Serão exibidos o Código, os Dados do Convênio, utilizando uma Conta Bancária já cadastrada,
              e os dados do Contato também cadastrado, correspondente ao Convênio em questão.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Convênio cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Convênio, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Convênio, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Convênio.

              <br><br>Também é possível excluir um Convênio cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Convênio em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Financeiro/ConvenioBancoAdm.png" alt="Convênios Bancos/Adm Cartão" width="110%" height="auto" style="padding-left: 10px;">
            <figcaption style="padding-left: 350px;">Tela Convênios Bancos/Adm Cartão</figcaption>
          </figure>
        </div>

        <div class='content2 L49' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L45')" style="cursor: pointer;"> Financeiro ▸ Formas de Pagto </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Formas de Pagto', a tela abaixo será exibida, onde poderão ser
              visualizados, em ordem alfabética, as Formas de Pagamento cadastradas no Sistema.
              <br>Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Formas cadastradas no Sistema.
              <br>Serão exibidos o Código, Descrição e dados correspondentes ao pagamento: Parcelas, Prazo de Vencimento
              de parcelas e Valores mínimo e máximo para recebimento.
              <br>Por fim, são apresentadas as datas de Vigência da Forma de Pagamento em questão.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Forma de Pagamento cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Forma de Pagamento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Forma, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Forma de Pagamento.

              <br><br>Também é possível excluir uma Forma de Pagamento clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Forma em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Financeiro/FormasPagto.png" alt="Formas de Pagamento" style="padding-left: 40px;">
            <figcaption style="padding-left: 350px;">Tela Formas de Pagamento</figcaption>
          </figure>
        </div>

        <div class='content2 L50' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L45')" style="cursor: pointer;"> Financeiro ▸ Tipos de Lançamento </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Lançamento', a tela abaixo será exibida, onde poderão ser
              visualizados os Tipos de Lançamentos Financeiros cadastrados no Sistema, sendo possível navegar, através das setas
              do canto superior esquerdo, entre os Tipos cadastrados no Sistema.
              <br>Serão exibidos o Código, Descrição, Sigla, Natureza e Observações.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Lançamento cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Lançamento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Banco.

              <br><br>Também é possível excluir um Tipo de Lançamento cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Financeiro/TiposLançamento.png" alt="Tipos Lançamento" style="padding-left: 100px;">
            <figcaption style="padding-left: 330px;">Tela Tipos de Lançamento</figcaption>
          </figure>
        </div>

        <div class='content2 L51' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L45')" style="cursor: pointer;"> Financeiro ▸ Tipos de Movimentos Financeiros </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Movimentos Financeiros', a tela abaixo será exibida, onde poderão ser
              visualizados, em ordem numérica do Código, os Tipos de Movimentos Financeiros cadastrados no Sistema,
               sendo possível navegar, através das setas do canto superior esquerdo, entre os Tipos cadastrados no Sistema.
              <br>Serão exibidos o Código, Descrição, Sigla, Natureza e Observações.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Movimento cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Movimento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Banco.

              <br><br>Também é possível excluir um Tipo de Movimento cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Financeiro/TipoMovFinanc.png" alt="Tipos Movimentos Financeiros" style="padding-left: 100px;">
            <figcaption style="padding-left: 330px;">Tela Tipos de Movimentos</figcaption>
          </figure>
        </div>

        <div class='content2 L52' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L45')" style="cursor: pointer;"> Financeiro ▸ Tipos de Contratos </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Contratos', a tela abaixo será exibida, onde poderão ser
              visualizados, em ordem numérica do Código, os Tipos de Contratos cadastrados no Sistema,
               sendo possível navegar, através das setas do canto superior esquerdo, entre os Tipos cadastrados no Sistema.
              <br>Serão exibidos o Código, Descrição, Prazo para Faturamento, Dias para Vencimento, Tipo de Documento Financeiro, já
              cadastrado no Sistema, e Observações.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Contrato cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Contrato, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Banco.

              <br><br>Também é possível excluir um Tipo de Contrato cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Financeiro/TiposContratos.png" alt="Tipos Contratos" style="padding-left: 80px;">
            <figcaption style="padding-left: 360px;">Tela Tipos de Contrato</figcaption>
          </figure>
        </div>

        <div class='content2 L53' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L45')" style="cursor: pointer;"> Financeiro ▸ Tipos de Doc Financeiro </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Doc Financeiro', a tela abaixo será exibida, onde poderão ser
              visualizados, em ordem numérica do Código, os Tipos de Documento Financeiro cadastrados no Sistema,
               sendo possível navegar, através das setas do canto superior esquerdo, entre eles.
              <br>Serão exibidos o Código, Descrição, Abreviação, e a Finalidade do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Documento Financeiro cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Documento Financeiro, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Banco.

              <br><br>Também é possível excluir um Tipo de Documento Financeiro cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Financeiro/TipoDocFinanc.png" alt="Tipos Doc Financeiro"  style="padding-left: 100px;">
            <figcaption style="padding-left: 330px;">Tela Tipos Doc Financeiro</figcaption>
          </figure>
        </div>
<!-- Imoveis -->
        <div class='content2 L54' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ Imóveis </h2>

          <h2 id="tplink" onclick="testeFilho('.L55')" style="cursor: pointer;"> ▸ Unidade de Medida </h2>
          <div id='texto'>
            <p>
              Exibe as Unidades de Medida cadastradas, podendo incluir uma nova Medida,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L56')" style="cursor: pointer;"> ▸ Conversão Unidade de Medida </h2>
          <div id='texto'>
            <p>
              Exibe as Conversões de Unidades de Medida cadastradas, podendo incluir uma nova Conversão,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L57')" style="cursor: pointer;"> ▸ Tipo de Imóvel </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Imóvel cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L55' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L54')" style="cursor: pointer;"> Imóveis ▸ Unidade de Medida </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Unidade de Medida', a tela abaixo será exibida, onde poderão ser
              visualizados, em ordem numérica do Código, as Unidades de Medida cadastradas no Sistema.
              <br>Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Unidades cadastradas no Sistema.
              <br>Serão exibidos o Código, Descrição, Sigla e Unidade de Medida Anterior na Escala.
              <br>Por fim, são apresentadas as áreas onde a Unidade em questão poderá ser aplicada.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Unidade de Medida cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Unidade de Medida, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Unidade, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Unidade de Medida.

              <br><br>Também é possível excluir uma Unidade de Medida clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Unidade em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Imoveis/UnidMedida.png" alt="Unidade Medida" style="padding-left: 90px;">
            <figcaption style="padding-left: 350px;">Tela Unidade Medida</figcaption>
          </figure>
        </div>

        <div class='content2 L56' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L54')" style="cursor: pointer;"> Imóveis ▸ Conversão Unidade de Medida </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Conversão Unidade de Medida', a tela abaixo será exibida, onde poderão ser
              visualizados as Conversões de Unidades de Medida cadastradas no Sistema.
              <br>Assim, é possível navegar, através das setas do canto superior esquerdo, entre as Conversões cadastradas no Sistema.
              <br>Serão exibidos o Código, Unidades de Medida de Origem e de Destino, e a Equivalência entre elas.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Conversão de Unidade de Medida cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Conversão, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados da nova Conversão, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Conversão.

              <br><br>Também é possível excluir uma Conversão de Unidade de Medida clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Conversão em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Imoveis/ConvesaoMedidas.png" alt="Conversão Unidade Medida" style="padding-left: 100px;">
            <figcaption style="padding-left: 330px;">Tela Conversão Unidade Medida</figcaption>
          </figure>
        </div>

        <div class='content2 L57' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L54')" style="cursor: pointer;"> Imóveis ▸ Tipo de Imóvel </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipo de Imóvel', a tela abaixo será exibida, onde poderá ser
              visualizada o primeiro, em ordem alfabética, dos Tipos de Imóveis cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Tipos
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, Código de Receita Federal, Abreviação, Unidade de Medida, Gênero,
              Registro de Classe e os Atributos de Características do Tipo de Imóvel, na tabela posicionada no lado inferior da tela.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Imóvel cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Imóvel, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br><br>Para inserir um Atributo de Característica, basta inseri-lo nos campos
              'Atributo', 'Tipo Campo' e 'Valores Possíveis', situados acima da própria tabela de Atributos, e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/plus.png" alt="Ícone Mais">
              , à direta da tabela.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Imóvel.

              <br><br>Também é possível excluir um Tipo de Imóvel cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>

          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Imoveis/TiposImoveis.png" alt="Tipo Imóvel" style="padding-left: 20px;">
            <figcaption style="padding-left: 390px;">Tela Tipo de Imóvel</figcaption>
          </figure>
        </div>
<!-- Endereçamento -->
        <div class='content2 L58' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ Endereçamento </h2>

          <h2 id="tplink" onclick="testeFilho('.L59')" style="cursor: pointer;"> ▸ País </h2>
          <div id='texto'>
            <p>
              Exibe os Países cadastrados, podendo incluir um novo País,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L60')" style="cursor: pointer;"> ▸ Cidades </h2>
          <div id='texto'>
            <p>
              Exibe as Cidades cadastradas, podendo incluir uma nova Cidade,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L61')" style="cursor: pointer;"> ▸ Bairros </h2>
          <div id='texto'>
            <p>
              Exibe os Bairros cadastrados, podendo incluir um novo Bairro,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L62')" style="cursor: pointer;"> ▸ Logradouros </h2>
          <div id='texto'>
            <p>
              Permite pesquisar os Logradouros cadastrados no Sistema, podendo incluir filtros, caso for
              necessário.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L63')" style="cursor: pointer;"> ▸ Tipo Região </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Regiões cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L64')" style="cursor: pointer;"> ▸ Tipo Endereço </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Endereço cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L65')" style="cursor: pointer;"> ▸ Tipo Logradouro </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Logradouro cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L59' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L58')" style="cursor: pointer;"> Endereçamento ▸ País </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'País', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Países cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              Serão exibidos na tela o Código e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um País cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um País, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir a Descrição do novo País, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do País.

              <br><br>Também é possível excluir um País cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o País em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/Pais.png" alt="País" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Países</figcaption>
          </figure>
        </div>

        <div class='content2 L60' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L58')" style="cursor: pointer;"> Endereçamento ▸ Cidades </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Cidades', a tela abaixo será exibida, onde poderá ser visualizada a
              primeira, em ordem alfabética, das Cidades cadastradas no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre elas.
              Serão exibidos na tela o Código, a Descrição e a Unidade Federativa da mesma.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Cidade cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Cidade, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados da nova Cidade, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Cidade.

              <br><br>Também é possível excluir uma Cidade cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Cidade em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/Cidades.png" alt="Cidades" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Cidades</figcaption>
          </figure>
        </div>

        <div class='content2 L61' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L58')" style="cursor: pointer;"> Endereçamento ▸ Bairros </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Bairros', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Bairros cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              Serão exibidos na tela o Código, o Nome, Abreviação, Unidade Federativa, Cidade, já cadastrada, e os Valores de área
              do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Bairro cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Bairro, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Bairro, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Bairro.

              <br><br>Também é possível excluir um Bairro cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Bairro em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/Bairros.png" alt="Bairros" style="padding-left: 110px;">
            <figcaption style="padding-left: 380px;">Tela Bairros</figcaption>
          </figure>
        </div>

        <div class='content2 L62' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L58')" style="cursor: pointer;"> Endereçamento ▸ Logradouros </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Logradouros', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Logradouros cadastrados no Sistema, que serão exibidos em ordem alfabética.

              <br><br>Para realizar uma pesquisa, basta selecionar, dentre os já cadastrados, Município, Bairro, Unidade Federativa e Logradouro.
              <br>Assim, os Logradouros referentes aos dados inseridos serão listados abaixo, em ordem alfabética, onde poderá ser visualizado,
              além dos dados inseridos anteriormente, o CEP do mesmo.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/Logradouros.png" alt="Logradouros">
            <figcaption style="padding-left: 340px;">Tela Logradouros</figcaption>
          </figure>
        </div>

        <div class='content2 L63' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L58')" style="cursor: pointer;"> Endereçamento ▸ Tipo Região </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipo Região', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Tipo de Região cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              Serão exibidos na tela o Código e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Região cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Região, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir a Descrição do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Região.

              <br><br>Também é possível excluir um Tipo de Região cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/TipoRegiao.png" alt="Tipo Região" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Tipo Região</figcaption>
          </figure>
        </div>

        <div class='content2 L64' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L58')" style="cursor: pointer;"> Endereçamento ▸ Tipo Endereço </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipo Endereço', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Tipo de Endereço cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              Serão exibidos na tela o Código e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Endereço cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Endereço, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir a Descrição do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Endereço.

              <br><br>Também é possível excluir um Tipo de Endereço cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/TiposEndereço.png" alt="Tipo Endereço" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Tipo Endereço</figcaption>
          </figure>
        </div>

        <div class='content2 L65' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L58')" style="cursor: pointer;"> Endereçamento ▸ Tipo Logradouro </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipo Logradouro', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Tipo de Endereço cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              Serão exibidos na tela o Código, Descrição e Abreviação do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Logradouro cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Logradouro, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir a Descrição do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Logradouro.

              <br><br>Também é possível excluir um Tipo de Logradouro cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/TiposLogradouro.png" alt="Tipo Logradouro" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Tipo Logradouro</figcaption>
          </figure>
        </div>
<!-- DETRAN -->
        <div class='content2 L66' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ DETRAN </h2>

          <h2 id="tplink" onclick="testeFilho('.L67')" style="cursor: pointer;"> ▸ Tipo Combustível </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Combustível cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L68')" style="cursor: pointer;"> ▸ Tipo Veículo </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Veículo cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L69')" style="cursor: pointer;"> ▸ Marca Veículo </h2>
          <div id='texto'>
            <p>
              Exibe as Marcas de Veículo cadastrados, podendo incluir uma nova Marca,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L70')" style="cursor: pointer;"> ▸ Cor Veículo </h2>
          <div id='texto'>
            <p>
              Exibe as Cores de Veículo cadastradas, podendo incluir uma nova Cor,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L71')" style="cursor: pointer;"> ▸ Tipo Operação Veículo </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Operação de Veículo cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L72')" style="cursor: pointer;"> ▸ Modelos de Veículos </h2>
          <div id='texto'>
            <p>
              Exibe os Modelos de Veículo cadastrados, podendo incluir um novo Modelo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L67' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L66')" style="cursor: pointer;"> DETRAN ▸ Tipo Combustível </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipo Combustível', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Tipos de Combustível cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              Serão exibidos na tela o Código e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Combustível cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Combustível, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir a Descrição do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Combustível.

              <br><br>Também é possível excluir um Tipo de Combustível cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/DETRAN/TiposCombustivel.png" alt="Tipo Combustível" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Tipo Combustível</figcaption>
          </figure>
        </div>

        <div class='content2 L68' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L66')" style="cursor: pointer;"> DETRAN ▸ Tipo Veículo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipo Veículo', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Tipos de Veículo cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              Serão exibidos na tela o Código e a Descrição do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Veículo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Veículo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir a Descrição do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Veículo.

              <br><br>Também é possível excluir um Tipo de Veículo cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/DETRAN/TipoVeiculo.png" alt="Tipo Veículo" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Tipo Veículo</figcaption>
          </figure>
        </div>

        <div class='content2 L69' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L66')" style="cursor: pointer;"> DETRAN ▸ Marca Veículo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Marca Veículo', a tela abaixo será exibida, onde poderá ser visualizada a
              primeira, em ordem alfabética, das Marcas de Veículo cadastradas no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre elas.
              Serão exibidos na tela o Código, Descrição e o País de Origem da mesma, que deve estar cadastrado no Sistema.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Marca de Veículo cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Marca de Veículo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados da nova Marca, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Marca de Veículo.

              <br><br>Também é possível excluir uma Marca de Veículo cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Marca em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/DETRAN/MarcaVeiculo.png" alt="Marca Veículo" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Marca Veículo</figcaption>
          </figure>
        </div>

        <div class='content2 L70' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L66')" style="cursor: pointer;"> DETRAN ▸ Cor Veículo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Cor Veículo', a tela abaixo será exibida, onde poderá ser visualizada a
              primeira, em ordem alfabética, das Cores de Veículo cadastradas no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre elas.
              Serão exibidos na tela o Código, e a Descrição da mesma.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Cor de Veículo cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Cor de Veículo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados da nova Cor, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Cor de Veículo.

              <br><br>Também é possível excluir uma Cor de Veículo cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Cor em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/DETRAN/CorVeiculo.png" alt="Cor Veículo" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Cor Veículo</figcaption>
          </figure>
        </div>

        <div class='content2 L71' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L66')" style="cursor: pointer;"> DETRAN ▸ Tipo Operação Veículo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipo Operação Veículo', a tela abaixo será exibida, onde poderá ser
              visualizada o primeiro, em ordem alfabética, dos Tipos de Operação de Veículo cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Tipos
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, Observação e osPapéis Relacionados, apresentados na tabela posicionada na parte inferior da tela.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Operação de Veículo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Operação de Veículo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Operação de Veículo.
              <br>Assim, a tabela de Papéis será gerada, inicialmente vazia.

              <br><br>Para inserir um Papel Relacionado, basta selecioná-lo, dentre os Papéis cadastrados no Sistema, no campo
              'Papel', situado acima da própria tabela, e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/plus.png" alt="Ícone Mais">
              , à direta da tabela.

              <br><br>Também é possível excluir um Tipo de Operação de Veículo cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>

          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/DETRAN/TiposOperaçoes.png" alt="Operação Veículo" style="padding-left: 20px;">
            <figcaption style="padding-left: 390px;">Tela Tipo Operação Veículo</figcaption>
          </figure>
        </div>

        <div class='content2 L72' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L66')" style="cursor: pointer;"> DETRAN ▸ Modelos de Veículos </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Modelos de Veículos', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Modelos de Veículo cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              Serão exibidos na tela o Código, a Descrição, a Marca, já cadastrada, e o País de Origem do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Modelo de Veículo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Modelo de Veículo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Modelo, sendo que o campo 'País de Origem' é preenchido automaticamente de
              acordo com a Marca selecionada e Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Modelo de Veículo.

              <br><br>Também é possível excluir um Modelo de Veículo cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Modelo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/DETRAN/ModelosVeiculos.png" alt="Modelos Veículos" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Modelos Veículos</figcaption>
          </figure>
        </div>
<!-- GED -->
        <div class='content2 L73' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ GED </h2>

          <h2 id="tplink" onclick="testeFilho('.L74')" style="cursor: pointer;"> ▸ Tabelas GED </h2>
          <div id='texto'>
            <p>
              Exibe as Tabelas de GED cadastradas, podendo incluir uma nova Tabela,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L75')" style="cursor: pointer;"> ▸ Dados Tabelas GED </h2>
          <div id='texto'>
            <p>
              Exibe os Dados de Tabelas GED cadastradas, podendo incluir novos Dados,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L74' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L73')" style="cursor: pointer;"> GED ▸ Tabelas GED </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tabelas GED', a tela abaixo será exibida, onde poderá ser visualizada a
              primeira, em ordem alfabética, das Tabelas de GED cadastradas no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre elas.
              Serão exibidos na tela o Código, a Descrição e Observação da mesma.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma Tabela GED cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma Tabela GED, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados da nova Tabela, sendo que o Código da mesma é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Tabela.

              <br><br>Também é possível excluir uma Tabela cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Tabela em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/GED/TabelasGED.png" alt="TabelasGED" style="padding-left: 130px;">
            <figcaption style="padding-left: 380px;">Tela Tabela GED</figcaption>
          </figure>
        </div>

        <div class='content2 L75' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L73')" style="cursor: pointer;"> GED ▸ Dados Tabelas GED </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Dados Tabelas GED', a tela abaixo será exibida, onde poderá ser visualizada o
              primeiro, em ordem alfabética do nome da Tabela, dos Dados de Tabela GED cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre elos.
              Serão exibidos na tela o Código, a Tabela, Descrição e Observação do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar um Dado de uma Tabela GED cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Dado em uma Tabela GED, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir o novo Dados na Tabela selecionada, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Dado.
              <br>Assim, tal Dado será exibido na lista localizada na parte inferior da tela, juntamente com os já
              Dados cadastrados anteriormente na Tabela em questão, caso existirem.

              <br><br>Também é possível excluir um Dado de Tabela cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Dado em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/GED/DadosTabelaGED.png" alt="Dados Tabelas GED" style="padding-left: 100px;">
            <figcaption style="padding-left: 380px;">Tela Dados Tabelas GED</figcaption>
          </figure>
        </div>
<!-- PapelDOI -->
        <div class='content2 L76' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ Papel DOI </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Papel DOI', a tela abaixo será exibida, onde poderá ser visualizado a
              primeiro, em ordem do Tipo de Registro, das relações entre Papéis de Partes Envolvidas
              e Tipos de Registro DOI cadastradas no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre elas.
              Serão exibidos na tela o Código, o Papel e o Tipo de Registro do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de uma relação cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar uma relação, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta selecionar o Papel e o Tipo de Registro da nova relação, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro de tal relação.

              <br><br>Também é possível excluir uma relação cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a relação em questão será excluída do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/PapelDOI.png" alt="PapelDOI" style="padding-left: 80px;">
            <figcaption style="padding-left: 380px;">Tela PapelDOI</figcaption>
          </figure>
        </div>
<!-- Outros -->
        <div class='content2 L77' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L3')" style="cursor: pointer;"> Tabelas Internas ▸ Outros </h2>

          <h2 id="tplink" onclick="testeFilho('.L78')" style="cursor: pointer;"> ▸ Formato de Arquivos </h2>
          <div id='texto'>
            <p>
              Exibe os Formatos de Arquivos, podendo incluir um novo Formato,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L79')" style="cursor: pointer;"> ▸ Grupo Query Pronta </h2>
          <div id='texto'>
            <p>
              Exibe os Grupos - Query Pronta cadastrados, podendo incluir um novo Grupo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L80')" style="cursor: pointer;"> ▸ Motivos Diversos </h2>
          <div id='texto'>
            <p>
              Exibe os Motivos Diversos cadastrados, podendo incluir um novo Motivo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L81')" style="cursor: pointer;"> ▸ Obrigatoriedade Campos Cadastro </h2>
          <div id='texto'>
            <p>
              Exibe os Campos das Tabelas cadastradas, podendo incluir ou excluir as Obrigatoriedades
              dos mesmos, nas Tabelas já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L82')" style="cursor: pointer;"> ▸ Apresentação Campos Certidão </h2>
          <div id='texto'>
            <p>
              Exibe os Campos das Certidões cadastradas, podendo incluir ou excluir as Obrigatoriedades
              dos mesmos, nas Certidões já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L83')" style="cursor: pointer;"> ▸ Tipos de Certidão </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Certidão cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L84')" style="cursor: pointer;"> ▸ Tipos de Retorno de Contato</h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Retorno de Contato cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L85')" style="cursor: pointer;"> ▸ Tipo de Penhor </h2>
          <div id='texto'>
            <p>
              Exibe os Tipos de Penhor cadastrados, podendo incluir um novo Tipo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L86')" style="cursor: pointer;"> ▸ Configurações </h2>
          <div id='texto'>
            <p>
              Exibe os Relatórios cadastrados, podendo incluir um novo Relatórios,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L78' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L77')" style="cursor: pointer;"> Outros ▸ Formato de Arquivos </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Formato Arquivos', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem de inserção, dos Formatos de Arquivo cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              Serão exibidos na tela o Código, a Descrição, Extensão, Programa Executor e Observação do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Formato de Arquivo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Formato de Arquivo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Formato, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Formato.

              <br><br>Também é possível excluir um Formato cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Formato em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/FormatoArquivos.png" alt="Formato Arquivos" style="padding-left: 70px;">
            <figcaption style="padding-left: 380px;">Tela Formato Arquivos</figcaption>
          </figure>
        </div>

        <div class='content2 L79' hidden=true>
            <h2 id="AltTop" onclick="testeFilho('.L77')" style="cursor: pointer;"> Outros ▸ Grupo Query Pronta </h2>

            <div id='texto'>
              <p>
                Ao clicar em 'Grupo Query Pronta', a tela abaixo será exibida, onde poderá ser visualizado o
                primeiro, em ordem alfabética, dos Grupos cadastrados no Sistema. Assim, é possível navegar,
                através das setas do canto superior esquerdo, entre eles.
                Serão exibidos na tela o Código, a Descrição, e o Período de Vigência do mesmo.

                <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
                <br>Para editar os dados de um Grupo cadastrado, basta clicar em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

                <br>Depois de editado, clique em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
                para salvar as alterações realizadas.

                <br><br>Para cadastrar um Grupo, basta clicar em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
                <br>Assim, basta inserir os dados do novo Grupo, sendo que o Código do mesmo é gerado sequencialmente.

                <br>Feito isso, clique em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
                para finalizar o cadastro do Grupo.

                <br><br>Também é possível excluir um Grupo cadastrado clicando em
                <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
                <br>Assim, o Grupo em questão será excluído do Banco de Dados do Sistema.
              </p>
            </div>
            <br><br>
            <figure>
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/GrupoQueryPronta.png" alt="Grupo Query Pronta" style="padding-left: 120px;">
              <figcaption style="padding-left: 360px;">Tela Grupo Query Pronta</figcaption>
            </figure>
        </div>

        <div class='content2 L80' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L77')" style="cursor: pointer;"> Outros ▸ Motivos Diversos </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Motivos Diversos', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Motivos Diversos cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              <br>Serão exibidos na tela o Código, a Descrição, Observação do mesmo.
              <br>Também será apresentado, na parte inferior da tela, as tarefas em que o Motivo estará habilitado a ser utilizado.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Motivo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Motivo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Motivo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Motivo.

              <br><br>Também é possível excluir um Motivo cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Motivo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/MotivosDiversos.png" alt="Motivos Diversos" style="padding-left: 120px;">
            <figcaption style="padding-left: 360px;">Tela Motivos Diversos</figcaption>
          </figure>
        </div>

        <div class='content2 L81' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L77')" style="cursor: pointer;"> Outros ▸ Obrigatoriedade Campos Cadastro </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Obrigatoriedade Campos Cadastro', a tela abaixo será exibida, onde poderão ser visualizados,
              em ordem alfabética, os Campos das Tabelas cadastradas no Sistema.
              <br>É possível pesquisar uma Tabela, através do campo na parte superior da tela, pela Descrição da mesma.

              <br><br>Assim, serão exibidos na parte de baixo da tela, os dados dos Campos da Tabela resultante da pesquisa,
              incluindo a Obrigatoriedade dos mesmos.

              <br><br>Para editar um Campo cadastrado na Tabela, basta clicar sobre o dado que deseja alterar e inserir a nova informação.
              <br>Também é possível incluir ou excluir a Obrigatoriedade de tal Campo, selecionando, ou não, a "Check Box" correspondente.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/Obrigatoriedade.png" alt="Obrigatoriedade Cadastro" style="padding-left: 40px;">
            <figcaption style="padding-left: 330px;">Tela Obrigatoriedade Campos Cadastro</figcaption>
          </figure>
        </div>

        <div class='content2 L82' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L77')" style="cursor: pointer;"> Outros ▸ Apresentação Campos Certidão </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Apresentação Campos Certidão', a tela abaixo será exibida, onde poderão ser visualizados,
              em ordem alfabética, os Campos das Tabelas de Certidão cadastradas no Sistema.
              <br>É possível pesquisar uma Tabela, através do campo na parte superior da tela, pela Descrição da mesma.

              <br><br>Assim, serão exibidos na parte de baixo da tela, os dados dos campos da Tabela resultante da pesquisa,
              incluindo a Obrigatoriedade dos mesmos.

              <br><br>Para editar um Campo cadastrado na Tabela, basta clicar sobre o dado que deseja alterar e inserir a nova informação.
              <br>Também é possível incluir ou excluir a Obrigatoriedade de tal Campo, selecionando, ou não, a "Check Box" correspondente.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/ApresentaçaoCampos.png" alt="Apresentação Certidão" style="padding-left: 40px;">
            <figcaption style="padding-left: 330px;">Tela Apresentação Certidão</figcaption>
          </figure>
        </div>

        <div class='content2 L83' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L77')" style="cursor: pointer;"> Outros ▸ Tipos de Certidão </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipos de Certidão', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Tipos de Certidão cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              <br>Serão exibidos na tela o Código, Descrição, Indicação de Inteiro Teor, Aviso do Serviço Complementar,
              Objeto da Busca e Observação do mesmo.
              <br>Nas tabelas abaixo destes campos estarão apresentados dados padrão do Tipo em questão: Texto Padrão da Certidão,
              Ato TJ e Serviços.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Certidão cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Certidão, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br><br>Para inserir ou editar um Texto Padrão do Tipo de Certidão, basta selecionar a aba correspondente. A lista dos registros
              cadastrados será exibida. Assim, basta dar um duplo-clique sobre um dos registros da lista, ou clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/plus.png" alt="Ícone Mais"> à direita do texto apresentado.

              <br>Dessa maneira, uma nova janela abrirá, onde o texto poderá ser inserido ou alterado.

              <br><br>Para inserir ou editar um Ato TJ do Tipo de Certidão, basta selecionar a aba correspondente. A tabela dos registros
              cadastrados será exibida.

              <br>Para inserir um Item da tabela em questão, basta preencher os dados do mesmo nos campos logo acima da tabela e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/plus.png" alt="Ícone Mais">, à direita da lista de registros.

              <br>Para excluir um Item da tabela em questão, basta selecionar tal registro e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/delete.png" alt="Ícone Delete">, à direita da lista de registros.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo de Certidão.

              <br><br>Também é possível excluir um Tipo de Certidão cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/TiposCertidao.png" alt="Tipos Certidão" style="padding-left: 20px;">
            <figcaption style="padding-left: 380px;">Tela Tipo Certidão</figcaption>
          </figure>
        </div>

        <div class='content2 L84' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L77')" style="cursor: pointer;"> Outros ▸ Tipos de Retorno de Contato </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipo de Retorno de Contato', a tela abaixo será exibida, onde poderá ser
              visualizada o primeiro, em ordem alfabética, dos Tipos de Retorno de Contato cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Tipos
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, Informação Vinculada e Observação do Tipo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Retorno de Contato cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Retorno de Contato, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo Retorno de Contato.

              <br><br>Também é possível excluir um Tipo de Retorno de Contato cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>

          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/TiposRetorno.png" alt="Tipos Retorno" style="padding-left: 120px;">
            <figcaption style="padding-left: 390px;">Tela Tipo Retorno</figcaption>
          </figure>
        </div>

        <div class='content2 L85' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L77')" style="cursor: pointer;"> Outros ▸ Tipos de Penhor </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tipo de Penhor', a tela abaixo será exibida, onde poderá ser
              visualizada o primeiro, em ordem de inserção, dos Tipos de Penhor cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Tipos
              cadastrados no Sistema.
              Serão exibidos o Código, Descrição, Unidade de Medida, Classe e Observação do Tipo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Tipo de Penhor cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Tipo de Penhor, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Tipo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Tipo Penhor.

              <br><br>Também é possível excluir um Tipo de Penhor cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Tipo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>

          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/TipoPenhor.png" alt="Tipos Penhor" style="padding-left: 20px;">
            <figcaption style="padding-left: 390px;">Tela Tipo Penhor</figcaption>
          </figure>
        </div>
<!-- Configurações -->
        <div class='content2 L86' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L77')" style="cursor: pointer;"> Outros ▸ Configurações </h2>

          <h2 id="tplink" onclick="testeFilho('.L87')" style="cursor: pointer;"> ▸ Relatórios </h2>
          <div id='texto'>
            <p>
              Exibe os Relatórios e os Compenentes dos mesmos, que poderão ser emitidos pelo Sistema.
              Permite cadastrar novos Relatórios, bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L87' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L86')" style="cursor: pointer;"> Configurações ▸ Relatórios </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Relatórios', a tela abaixo será exibida, onde poderá ser
              visualizada o primeiro, em ordem alfabética, dos Relatórios cadastrados.
              Assim, é possível navegar, através das setas do canto superior esquerdo, entre os Relatórios
              cadastrados no Sistema.
              <br>Serão exibidos o Código, Título, Datas de Vigência, e Observação do mesmo.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Relatório cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Relatório, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados do novo Relatório, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Relatório.

              <br><br>Também é possível excluir um Relatório cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Relatório em questão será excluído do Banco de Dados do Sistema.

              <br><br>Para cada Relatório, será exibida, ao final da tela, uma lista dos Modelos do mesmo,
              na ordem de inserção.
              <br>Clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/Configuraçoes/cadastro.png" alt="Cadastro">,
              no canto inferior direto, a tela de Cadastro de Modelos será exibida, onde os mesmos poderão
              ser visualizados, cadastrados, excluidos, editados ou impressos, realizando os mesmos procedimentos
              descritos anteriormente, referentes aos Relatórios.
            </p>
          </div>
          <br><br>

          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Outros/Configuraçoes/Relatorios.png" alt="Relatórios">
            <figcaption style="padding-left: 390px;">Tela Relatórios</figcaption>
          </figure>
        </div>
<!-- DadosCartorio -->
        <div class='content2 L88' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Dados Cartório </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Dados do Cartório', a tela abaixo será exibida, onde poderão ser visualizados os
              dados do Cartório cadastrado no Sistema. Assim, é possível navegar,
              através das abas do canto superior esquerdo, entre os grupos de dados do mesmo.
              <br>Na aba 'Dados Cadastrais' temos os dados particulares do Cartório, como Nome, Endereço, CNPJ e Dados do Titular.
              <br>Na aba 'Parâmetros' temos as Definições do Cartório, em cada grupo cadastrado, para tratamento de operações do mesmo.
              <br>Na aba 'Textos' temos os padrões de textos de documentos utilizados pelo Cartório, como orientações e cabeçalhos.
              <br>Na aba 'CGJ' temos os dados do Selo Eletrônico a ser emitido pelo do Cartório.

              <br><br>
              Como pode ser percebido, os dados do Cartório exibido na tela estarão inativos para edição.

              <br><br>Para editar os dados do Cartório cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar"> e realizar as alterações
              que julgar necessárias.

              <br><br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Também é possível excluir um Departamento cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Departamento em questão será excluído do Banco de Dados do Sistema.
            </p>
            <br><br>
            <figure>
              <img src="Prints Sagres/Ajustes/Cadastro/DadosCartorio.png" alt="DadosCartorio">
              <figcaption style="padding-left: 340px;">Tela Dados Cartório</figcaption>
            </figure>
          </div>
        </div>
<!-- LinksImportantes -->
        <div class='content2 L89' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Links Importantes </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Links Importantes', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética da 'Descrição', dos Links cadastrados. Assim, é possível navegar,
              através da aba 'Todos', no canto superior esquerdo, entre os Links Importantes cadastrado no sistema.
              <br><br>
              Como pode ser percebido, os dados do Link exibido na tela estarão inativos para edição.
              Para editar os dados de um Link cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.
              <br><br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.
              <br><br>
              Para cadastrar um Link, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br><br>Assim, basta inserir os dados do novo Link: Descrição, o Link em questão,
              Observações e a Classificação do mesmo (o Código é gerado sequencialmente).
              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Link.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/LinksImportantes.png" alt="LinksImportantes" style="padding-left: 80px;">
            <figcaption style="padding-left: 370px;">Tela Links Importantes</figcaption>
          </figure>
        </div>
<!-- Pessoa -->
        <div class='content2 L90' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Pessoa </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Pessoa', a tela abaixo será exibida, onde será possível inserir dados de uma nova Pessoa a ser
              cadastrada no sistema.
              Os dados da Pessoa exibidos na tela estarão inativos para edição.

              <br><br>Para cadastrar uma Pessoa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, basta inserir os dados de uma nova Pessoa, como CPF/CNPJ (uma vez selecionado
              o CheckBox), Nome, Email,
              Tipo de Pessoa (Física/Jurídica), Endereço, Telefone, Documento.
              <br><br>Ao cadastrar o Endereço da Pessoa, basta inserir o CEP e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/cep.png" alt="CEP">. Assim, os dados
              do Endereço serão preenchidos automaticamente. Este mesmo botão pode ser pressionado sem realizar
              inserção de CEP, apresentando uma tela onde poderá ser realizada uma pesquisa para encontrar o CEP
              referente ao Endereço da Pessoa em questão.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Pessoa.

              <br><br>Para Consultar ou Alterar os dados de uma Pessoa cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Pesquisar.png" alt="Pesquisar">
              no menu superior.
              <br>Uma janela será exibida e a pesquisa por uma Pessoa poderá ser realizada.
              <br>Assim, ao dar um duplo-clique em
              uma dos resultados da pesquisa, a tela abaixo será exibida com os dados da Pessoa em questão. Basta realizar as
              alterações que desejar e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar.
              <br>Feito isso, será possível Excluir ou Alterar novamente a Pessoa em questão, clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir"> ou
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/Alterar.png" alt="Excluir">.
            </p>

            <br><br>
            <figure>
              <img src="Prints Sagres/Ajustes/Cadastro/Pessoa.png" alt="Pessoa" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Pessoa</figcaption>
            </figure>
          </div>
        </div>
<!-- Funcionarios -->
        <div class='content2 L91' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Funcionários </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Funcionários', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Funcionários cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Funcionários cadastrados no Sistema.
              Serão exibidos os dados pessoais de cada Funcionários, bem como seu Departamento, Cargo e Jornada de Trabalho.

              <br><br>Como pode ser percebido, os dados do Usuário exibido na tela estarão inativos para edição.
              <br>Para editar os dados de um Funcionário cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.
              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.


              <br><br>Para cadastrar um Funcionário, é necessário cadastrá-lo em Pessoa ou ter os dados pessoais salvos em Pessoa.
              <br>Assim, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              e inserir o CPF de uma Pessoa cadastrada.
              <br>Também é possível pesquisar uma pessoa cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Pesquisar.png" alt="Pesquisar">.

              <br>Assim, basta inserir os dados do novo Funcionário, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Funcionário.

              <br><br>Também é possível excluir um Funcionário cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              Assim, o Funcionário em questão será excluído do Banco de Dados do Sistema.
            </p>
            <br><br>
          </div>

          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/Funcionarios.png" alt="Funcionários" style="padding-left: 40px;">
            <figcaption style="padding-left: 390px;">Tela Funcionarios</figcaption>
          </figure>
        </div>
<!-- Contrato -->
        <div class='content2 L92' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Contrato </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Contrato', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem numérica, dos Contratos cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Contratos cadastrados no Sistema.
              Serão exibidos os dados do cliente (Pessoa), de um contato de referência, e do Contrato em questão.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Contrato cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Contrato, é necessário cadastrar o cliente em Pessoa ou ter os dados do mesmo salvos em Pessoa.
              <br>Assim, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              e inserir o CPF de uma cliente cadastrado.
              <br>Também é possível pesquisar uma pessoa cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Pesquisar.png" alt="Pesquisar">.
              <br>Assim, basta inserir os dados do novo Contrato, sendo que o Número do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Contrato.

              <br><br>Também é possível excluir um Contrato cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Contrato em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/Contrato.png" alt="Contrato">
            <figcaption style="padding-left: 390px;">Tela Contrato</figcaption>
          </figure>
        </div>
<!-- Veículo -->
        <div class='content2 L93' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Veículo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Veículo', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem numérica do Código, dos Veículos cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Veículos cadastrados no Sistema.
              Serão exibidos os dados do Veículo e do proprietário do mesmo (Pessoa).

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Veículo cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Veículo, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Veículo, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Veículo.

              <br><br>Também é possível excluir um Veículo cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Veículo em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/Veiculos.png" alt="Veículo" width="110%" height="auto">
            <figcaption style="padding-left: 390px;">Tela Veículo</figcaption>
          </figure>
        </div>
<!-- Permissões de Acesso -->
        <div class='content2 L94' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Permissões de Acesso </h2>

          <h2 id="tplink" onclick="testeFilho('.L95')" style="cursor: pointer;"> ▸ Níveis de Acesso </h2>
          <div id='texto'>
            <p>
              Realizar o Cadastro, Alteração e Exclusão de 'Níveis de Acesso' do Sistema, podendo
              também visualizar os já cadastrados.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L96')" style="cursor: pointer;"> ▸ Menus de Acesso </h2>
          <div id='texto'>
            <p>
              Exibe os 'Níveis de Acesso' e suas correspondentes permissões de acesso ao Sistema, permitindo
              a alteração no cadastro dos mesmos, bem como em suas permissões, exibidas no menu à direita.
            </p>
          </div>
        </div>

        <div class='content2 L95' hidden=true>
          <div id="niveis"></div>
          <h2 id="AltTop" onclick="testeFilho('.L94')" style="cursor: pointer;"> Permissões de Acesso ▸ Níveis de Acesso </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Níveis de Acesso', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Níveis de Acesso cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Níveis de Acesso cadastrados no Sistema.
              Serão exibidos os Nome do mesmo, Observações e as permissões do mesmo nas "Check Boxes" na
              parte inferior da tela.

              <br><br>Como pode ser percebido, os dados exibidos na tela estarão inativos para edição.
              <br>Para editar os dados de um Nível de Acesso cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Nível de Acesso, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">
              <br>Assim, basta inserir os dados do novo Nível de Acesso, sendo que o Código do mesmo é gerado sequencialmente.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Nível de Acesso.

              <br><br>Também é possível excluir um Nível de Acesso cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Nível de Acesso em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/Permissoes/Niveis.png" alt="Níveis de Acesso" style="padding-left: 70px;">
            <figcaption style="padding-left: 340px;">Tela Níveis de Acesso</figcaption>
          </figure>
        </div>

        <div class='content2 L96' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L94')" style="cursor: pointer;"> Permissões de Acesso ▸ Menus de Acesso </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Menus de Acesso', a tela abaixo será exibida, onde poderão ser visualizados os
              Níveis de Acesso cadastrados, em ordem alfabética, à esquerda.
              <br>Para cada Nível é exibida a árvore de menus e as permissões de cada item do menu ilustradas
              pelas "Check Boxes" à esquerda.

              <br><br>Assim, é possível alterar as permissões de determinado Nível de Acesso clicando nas
              "Check Boxes" correspondentes.

              <br><br>Para editar os dados de um Nível de Acesso cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Permissoes/editar.png" alt="Editar">.

              <br>Dessa maneira, o Usuário será direcionado para tela de <a onclick="testeFilho('.L95')" style="cursor: pointer;" >Níveis de Acesso</a>.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/Permissoes/Menus.png" alt="Menus de Acesso" style="padding-left: 30px;">
            <figcaption style="padding-left: 380px;">Tela Níveis de Acesso</figcaption>
          </figure>

        </div>
<!-- Usuarios -->
        <div class='content2 L97' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Usuários </h2>

          <h2 id="tplink" onclick="testeFilho('.L98')" style="cursor: pointer;"> ▸ Cadastro </h2>
          <div id='texto'>
            <p>
              Realizar o Cadastro, Alteração e Exclusão de Usuários do Sistema, podendo
              também visualizar os Usuários já cadastrados, bem como suas permissões de acesso.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L99')" style="cursor: pointer;"> ▸ Alterar Senha Usuário </h2>
          <div id='texto'>
            <p>
              Alterar Senha de Acesso de Usuários já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L100')" style="cursor: pointer;"> ▸ Parâmetros Usuário </h2>
          <div id='texto'>
            <p>
              Alterar as preferências do Cartório para Usuários já cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L98' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L97')" style="cursor: pointer;"> Usuários ▸ Cadastro </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Cadastro', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Usuários cadastrados. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre os Usuários cadastrado no sistema.
              <br>Serão exibidos os dados de cada Usuário, bem como suas permissões de acesso, na janela
              inferior.
              <br><br>Como pode ser percebido, os dados do Usuário exibido na tela estarão inativos para edição.
              <br><br>Para editar os dados de um Usuário cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.


              <br><br>Para cadastrar um Usuário, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              Assim, basta inserir os dados do novo Usuário: Nome, Departamento,
              Nível de Acesso, Login e Senha de acesso ao Sistema (o Código é gerado sequencialmente).
              Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Usuário.
              <br>Assim, as Permissões de Acesso serão geradas automaticamente de acordo com o Departamento e o Nível de Acesso inseridos.

              <br>Também é possível criar um Usuário clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/copiar.png" alt="Copiar">.
              Assim, será possível Cadastrar um Usuário do mesmo Departamento
              e com o mesmo Nível de Acesso do Usuário exibido na tela anteriormente.<br><br>
            </p>
          </div>

          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/Cadastro.png" alt="Cadastro" width="110%" height="auto">
            <figcaption style="padding-left: 360px;">Tela Cadastro Usuarios</figcaption>
          </figure>
        </div>

        <div class='content2 L99' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L97')" style="cursor: pointer;"> Usuários ▸ Alterar Senha </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Alterar Senha Usuário', a tela abaixo será exibida.
              <br>Assim, para alterar a senha de acesso de um Usuário já cadastrado, basta inserir
              o nome do mesmo no campo 'Operador' e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/localizar.png" alt="Localizar">.
              <br>Feito isso, os dados do Usuário em questão serão exibidos e será possível realizar
              a alteração da senha de acesso.
              <br>Por fim, basta inserir a senha atual, a nova senha e a confirmação desta nova senha
              e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar2.png" alt="Alterar">.
              <br>Assim, a senha de acesso de tal Usuário será atualizada.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/AlterarSenha.png" alt="Alterar Senha" style="padding-left: 160px;">
            <figcaption style="padding-left: 340px;">Tela Alterar Senha Usuario</figcaption>
          </figure>
        </div>

        <div class='content2 L100' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L97')" style="cursor: pointer;"> Usuários ▸ Parâmetros </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Parâmetros', a tela abaixo será exibida, onde poderão ser visualizadas as
              preferências do Cartório em relação ao Usuário em questão.
              <br>Assim, será possível definir, através dos grupos e os itens do mesmo, nas tabelas superior e inferior,
              respectivamente, quais ações o Sistema poderá realizar, em cada parte da execução do mesmo, para o Usuário logado
              neste momento.
            </p>
            <br><br>
            <figure>
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/Parametros.png" alt="Parâmetros" style="padding-left: 10px;">
              <figcaption style="padding-left: 340px;">Tela Parâmetros Usuário</figcaption>
            </figure>
          </div>
        </div>

<!-- Consulta Rapida -->
        <div class='content2 L101' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L2')" style="cursor: pointer;"> Cadastro ▸ Consulta Rápida </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Consulta Rápida', a tela abaixo será exibida, onde poderá ser visualizada a
              primeira, em ordem do Código, das Consultas cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre elas.
              <br>Serão exibidos os dados de cada Consulta, bem como o Código SQL da mesma e os parâmetros necessários, na janela
              inferior.
              <br><br>Como pode ser percebido, os dados da Consulta exibida na tela estarão inativos para edição.
              <br><br>Para editar os dados de uma Consulta cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.


              <br><br>Para cadastrar uma Consulta, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              Assim, basta inserir os dados da nova Consulta, o SQL da mesma e os parâmetros.
              Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Consulta.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Ajustes/Cadastro/ConsultaRapida.png" alt="Consulta Rápida" style="padding-left: 30px;">
            <figcaption style="padding-left: 360px;">Tela Consulta Rápida</figcaption>
          </figure>
        </div>

<!-- Dados -->
        <!-- <div class='content2 L102' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L1')" style="cursor: pointer;"> Ajustes ▸ Dados </h2>

          <h2 id="tplink" onclick="testeFilho('.L103')" style="cursor: pointer;"> ▸ Exportação </h2>
          <div id='texto'>
            <p>
              Exportar dados do Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L104')" style="cursor: pointer;"> ▸ Importação </h2>
          <div id='texto'>
            <p>
              Importar dados para o Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L103' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L102')" style="cursor: pointer;"> Dados ▸ Exportação </h2>
          <img src="Prints Sagres/Ajustes/Dados/Exportacao.png" alt="Exportação">
        </div>

        <div class='content2 L104' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L102')" style="cursor: pointer;"> Dados ▸ Importação </h2>
          <img src="Prints Sagres/Ajustes/Dados/Importacao.png" alt="Importação">
        </div> -->

<!-- Trocar Usuario -->
        <div class='content2 L102' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L1')" style="cursor: pointer;"> Ajustes ▸ Trocar de Usuário </h2>
          <div id="texto">
            <p>
              Ao clicar no botão "Trocar de Usuário", todos os processos em execução e as conexões ao Banco de Dados
              serão finalizados, sendo que a sessão do Usuário atual não permanecerá ativa. Assim, o Sistema voltará
              a tela de 'Boas-Vindas', onde outros Usuários poderão efetuar o login.
            </p>

            <figure>
              <img src="Prints Sagres/Ajustes/TrocaUsuario.png" alt="Trocar de Usuário" style="padding: 50px 0 0 230px;">
              <figcaption style="padding-left: 330px;">Tela Sagres</figcaption>
            </figure>
          </div>
        </div>

<!-- Indicador Pessoal -->
        <div class='content2 L103' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Indicador Pessoal </h2>

          <h2 id="tplink" onclick="testeFilho('.L104')" style="cursor: pointer;"> ▸ Cadastro </h2>
          <div id='texto'>
            <p>
              Exibe as 'Pessoas' cadastradas no sistema, podendo cadastrar uma nova Pessoa,
              alterar ou excluir as já cadastradas.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L105')" style="cursor: pointer;"> ▸ Pesquisar </h2>
          <div id='texto'>
            <p>
              Realizar pesquisa de Pessoas cadastradas no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

        </div>

        <div class='content2 L104' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L103')" style="cursor: pointer;"> Indicador Pessoal ▸ Cadastro </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Cadastro', a tela abaixo será exibida, onde será possível inserir dados de uma nova Pessoa a ser
              cadastrada no sistema, uma vez que os dados exibidos na tela estarão ativos para edição.

              <br><br>Assim, basta inserir os dados de uma nova Pessoa, como CPF/CNPJ (uma vez selecionado
              o CheckBox), Nome, Email,
              Tipo de Pessoa (Física/Jurídica), Endereço, Telefone, Documento.
              <br><br>Ao cadastrar o Endereço da Pessoa, basta inserir o CEP e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/cep.png" alt="CEP"> ou pressionar a tecla 'TAB'. Assim, os dados
              do Endereço serão preenchidos automaticamente. Este mesmo botão pode ser pressionado sem realizar
              inserção de CEP, apresentando uma tela onde poderá ser realizada uma pesquisa para encontrar o CEP
              referente ao Endereço da Pessoa em questão.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Pessoa.

              <br><br>Os dados obrigatórios para inserção de uma nova Pessoa são: Nome, Tipo, Gênero e Data de Nascimento (Pessoa Física) ou
              Classificação e Data de Abertura (Pessoa Jurídica).

              <br><br>Feito o Cadastro, a tela será atualizada, exibindo novas abas que apresentarão operações realizadas com a Pessoa em questão,
              como Atos/Registros, Protocolos e Pedidos Balcão. Também será possível inserir dados adicionais da Pessoa, como Emails e Relacionamentos.

              <br><br>Para Consultar ou Alterar os dados de uma Pessoa cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Pesquisar.png" alt="Pesquisar">
              no menu superior.
              <br>Uma janela será exibida e a pesquisa por uma Pessoa poderá ser realizada.
              <br>Assim, ao dar um duplo-clique em
              uma dos resultados da pesquisa, a tela abaixo será exibida com os dados da Pessoa em questão. Basta realizar as
              alterações que desejar e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar.
              <br>Feito isso, será possível Excluir ou Alterar novamente a Pessoa em questão, clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir"> ou
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/Alterar.png" alt="Excluir">.
            </p>

            <br><br>
            <figure>
              <img src="Prints Sagres/Ajustes/Cadastro/Pessoa.png" alt="Pessoa" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Indicador Pessoal</figcaption>
            </figure>
          </div>
        </div>

        <div class='content2 L105' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L103')" style="cursor: pointer;"> Indicador Pessoal ▸ Pesquisar </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Pesquisar', a tela abaixo será exibida, onde será possível realizar a pesquisa de uma Pessoa
              cadastrada no sistema, podendo ser utilizados filtros.

              <br><br>Para pesquisar uma Pessoa, basta selecionar uma 'Opção de Busca', na parte superior da tela, e
              selecionar o filtro que deseja utilizar, em 'Pesquisa por', Nome ou CPF.
              <br>Assim, basta inserir uma expressão, no campo 'Expressão', que as Pessoas correspondentes e seus dados serão exibidos
              automaticamente, caso o campo 'Auto' esteja selecionado.
              <br>Caso contrário, basta clicar em
              <img src="Prints Sagres/Indicador/lupa.png" alt="Lupa">, no canto superior direito.

              <br><br>Feito isso, é possível, com um clique-duplo, acessar e editar as informações da Pessoa em questão.

              <br><br>Caso seja necessário, é possível cadastrar uma nova Pessoa. Basta clicar em
              <img src="Prints Sagres/Indicador/mais.png" alt="Mais">
              no canto superior direito.
              Assim, a janela de <a onclick="testeFilho('.L90')" style="cursor: pointer;">Cadastro de Pessoa</a> será exibida.
            </p>
            <br><br>
            <figure>
              <img src="Prints Sagres/Indicador/Pesquisar.png" alt="Pesquisar" style="padding-left: 60px;">
              <figcaption style="padding-left: 300px;">Tela Indicador Pessoal</figcaption>
            </figure>
          </div>
        </div>

<!-- Matrícula -->
        <div class='content2 L106' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Matrícula </h2>

          <h2 id="tplink" onclick="testeFilho('.L107')" style="cursor: pointer;"> ▸ Rascunho </h2>
          <div id='texto'>
            <p>
              Exibe os Rascunhos de Matrículas de Imóveis cadastrados, podendo incluir um novo Rascunho,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L108')" style="cursor: pointer;"> ▸ Cadastro </h2>
          <div id='texto'>
            <p>
              Exibe as Matrículas de Imóveis cadastradas, podendo incluir uma nova Matrícula,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L109')" style="cursor: pointer;"> ▸ Pesquisar </h2>
          <div id='texto'>
            <p>
              Realizar pesquisa de Imóveis Matriculados no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

        </div>

        <div class='content2 L107' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L106')" style="cursor: pointer;"> Matrícula ▸ Rascunho </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Rascunho', a tela abaixo será exibida, onde será possível realizar um Rascunho de Matrícula de um Imóvel já
              cadastrado no Sistema, uma vez que os campos estarão disponíveis para serem preenchidos.
              <br><br>Assim, basta inserir os dados da Matricula e do Imóvel em questão, em todas as abas apresentadas
              logo abaixo do número do Rascunho(preenchido automaticamente), e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar"> para cadastrar o Rascunho.

              <br><br>Feito o cadastro do Rascunho, novas abas serão exibidas na parte inferior da tela, onde poderão ser cadastrados e visualizados dados
              referentes ao Imóvel em questão, como Proprietários, Credores, Protocolos e Atos. Para realizar o cadastro de tais dados, basta utilizar os
              botões localizados à direita na janela ou abaixo dela e inserir os dados necessários para tal cadastro.

              <br><br>Para efetivar um Rascunho, basta clicar em
              <img src="Prints Sagres/Matricula/matricular.png" alt="Matricular">,
              realizando, de fato, a Matrícula do Imóvel em questão.

              <br><br>Para visualizar os Rascunhos cadastrados no Sistema, basta clicar em
              <img src="Prints Sagres/Matricula/cancelar.png" alt="Cancelar">
              no menu superior.
              <br>Assim, será exibido o primeiro, em ordem do número dos Rascunhos cadastrados, sendo possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              <br>Dessa maneira, os dados de um Rascunho cadastrado podem ser alterados, bastando clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">
              no menu superior.
              <br>Assim, a tela abaixo será exibida com os dados do Rascunho em questão. Basta realizar as
              alterações que desejar e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar.

              <br><br>Também é possível excluir um Rascunho cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              Assim, o Rascunho em questão será excluído do Banco de Dados do Sistema.

            </p>
            <br><br>
            <figure>
              <img src="Prints Sagres/Matricula/Rascunho.png" alt="Rascunho" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Rascunho Matrícula</figcaption>
            </figure>
          </div>
        </div>

        <div class='content2 L108' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L106')" style="cursor: pointer;"> Matrícula ▸ Cadastro </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Cadastro', a tela abaixo será exibida, onde será possível realizar um Cadastro de Matrícula de um Imóvel já
              cadastrado no Sistema, uma vez que os campos estarão disponíveis para serem preenchidos.
              <br><br>Assim, basta inserir os dados da Matricula e do Imóvel em questão, em todas as abas apresentadas
              logo abaixo do número da mesma(preenchido automaticamente), e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar"> para cadastrar a Matricula.

              <br><br>Para visualizar as Matriculas cadastradas no Sistema, basta clicar em
              <img src="Prints Sagres/Matricula/cancelar.png" alt="Cancelar">
              no menu superior.
              <br>Assim, será exibido a primeira, em ordem do número das Matrículas cadastradas, sendo possível navegar,
              através das setas do canto superior esquerdo, entre elas.
              <br>Dessa maneira, os dados da Matrícula cadastrada podem ser alterados, bastando clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">
              no menu superior.
              <br>Assim, a tela abaixo será exibida com os dados da Matrícula em questão. Basta realizar as
              alterações que desejar e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar.

              <br><br>Também é possível excluir uma Matrícula cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              Assim, a Matrícula em questão será excluída do Banco de Dados do Sistema.
            </p>
            <br><br>
            <figure>
              <img src="Prints Sagres/Matricula/Cadastro.png" alt="Cadastro" width="115%" height="auto" style="padding-right: 30px;">
              <figcaption style="padding-left: 340px;">Tela Cadastro Matrícula</figcaption>
            </figure>
          </div>
        </div>

        <div class='content2 L109' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L106')" style="cursor: pointer;"> Matrícula ▸ Pesquisar </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Pesquisar', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Matrículas cadastradas no Sistema, que serão exibidas em ordem dos números das mesmas.

              <br><br>Para realizar uma pesquisa, basta inserir os dados referentes à Matrícula, Imóvel ou Proprietário do mesmo,
              selecionando Endereços e Pessoas, dentre os já cadastrados no Sistema.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">
              <br>Assim, as Matrículas referentes aos dados inseridos serão listados abaixo, em ordem do número das mesmas, onde poderão ser visualizados
              os dados de cada uma.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível cadastrar uma nova Matrícula. Basta clicar em
              <img src="Prints Sagres/Matricula/incluir.png" alt="Incluir">
              no canto superior direito.
              Assim, a janela de <a onclick="testeFilho('.L111')" style="cursor: pointer;">Cadastro de Matrícula</a> será exibida.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Matricula/Pesquisar.png" alt="Pesquisar" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Pesquisa Matrícula</figcaption>
          </figure>
        </div>

<!-- Transcrição -->
        <div class='content2 L110' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Transcrição </h2>

          <h2 id="tplink" onclick="testeFilho('.L111')" style="cursor: pointer;"> ▸ Cadastro </h2>
          <div id='texto'>
            <p>
              Exibe as Transcrições de Imóveis cadastradas, podendo incluir uma nova Transcrição,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L112')" style="cursor: pointer;"> ▸ Pesquisar </h2>
          <div id='texto'>
            <p>
              Realizar pesquisa de Transcrições de Imóveis Matriculados no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>
        </div>

        <div class='content2 L111' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L110')" style="cursor: pointer;"> Transcrição ▸ Cadastro </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Cadastro', a tela abaixo será exibida, onde será possível realizar um Cadastro de Transcrição de um Imóvel já
              cadastrado no Sistema, uma vez que os campos estarão disponíveis para serem preenchidos.
              <br><br>Assim, basta inserir os dados da Transcrição e do Imóvel em questão, em todas as abas apresentadas
              logo abaixo do número da mesma(preenchido automaticamente), e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar"> para cadastrar a Matricula.

              <br><br>Para visualizar as Transcrições cadastradas no Sistema, basta clicar em
              <img src="Prints Sagres/Matricula/cancelar.png" alt="Cancelar">
              no menu superior.
              <br>Assim, será exibido a primeira, em ordem do número das Transcrições cadastradas, sendo possível navegar,
              através das setas do canto superior esquerdo, entre elas.
              <br>Dessa maneira, os dados da Transcrição cadastrada podem ser alterados, bastando clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">
              no menu superior.
              <br>Assim, a tela abaixo será exibida com os dados da Transcrição em questão. Basta realizar as
              alterações que desejar e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar.

              <br><br>Também é possível excluir uma Transcrição cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              Assim, a Transcrição em questão será excluída do Banco de Dados do Sistema.
            </p>

            <br><br>
            <figure>
              <img src="Prints Sagres/Transcricao/Cadastro.png" alt="Cadastro" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Cadastro Transcrição</figcaption>
            </figure>
          </div>
        </div>

        <div class='content2 L112' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L110')" style="cursor: pointer;"> Transcrição ▸ Pesquisar </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Pesquisar', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Transcrições cadastradas no Sistema, que serão exibidas em ordem dos números das mesmas.

              <br><br>Para realizar uma pesquisa, basta inserir os dados referentes à Transcrição, Imóvel ou Proprietário do mesmo,
              selecionando Endereços e Pessoas, dentre os já cadastrados no Sistema.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">
              <br>Assim, as Transcrições referentes aos dados inseridos serão listados abaixo, em ordem do número das mesmas,
              onde poderão ser visualizados os dados de cada uma.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível cadastrar uma nova Transcrição. Basta clicar em
              <img src="Prints Sagres/Matricula/incluir.png" alt="Incluir">
              no canto superior direito.
              Assim, a janela de <a onclick="testeFilho('.L114')" style="cursor: pointer;">Cadastro de Transcrição</a> será exibida.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Transcricao/Pesquisar.png" alt="Pesquisar" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Pesquisa Transcrição</figcaption>
          </figure>
        </div>

<!-- Registro Auxiliar -->
        <div class='content2 L113' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Registro Auxiliar </h2>

          <h2 id="tplink" onclick="testeFilho('.L114')" style="cursor: pointer;"> ▸ Cadastro </h2>
          <div id='texto'>
            <p>
              Exibe os Registros Auxiliares cadastrados, podendo incluir um novo Registro,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L115')" style="cursor: pointer;"> ▸ Pesquisar </h2>
          <div id='texto'>
            <p>
              Realizar pesquisa de Registros Auxiliares cadastrados no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>
        </div>

        <div class='content2 L114' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L113')" style="cursor: pointer;"> Registro Auxiliar ▸ Cadastro </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Cadastro', a tela abaixo será exibida, onde será possível realizar um Cadastro de Registro Auxiliar,
              uma vez que os campos estarão disponíveis para serem preenchidos.
              <br><br>Assim, basta selecionar um título de Registro já cadastrado, sendo que o Texto Padrão do mesmo será preenchido
              automaticamente, e especificar os dados do Penhor, caso houver.
               <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar"> para cadastrar o Registro.

              <br><br>Para visualizar os Registros cadastrados no Sistema, basta clicar em
              <img src="Prints Sagres/Matricula/cancelar.png" alt="Cancelar">
              no menu superior.
              <br>Assim, será exibido o primeiro, em ordem do número dos mesmos, dos Registros cadastrados, sendo possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              <br>Dessa maneira, os dados do Registro cadastrado podem ser alterados, bastando clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">
              no menu superior.
              <br>Assim, a tela abaixo será exibida com os dados do Registro em questão. Basta realizar as
              alterações que desejar e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar.

              <br><br>Também é possível excluir um Registro cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Registro em questão será excluído do Banco de Dados do Sistema.
            </p>
            <br><br>
            <figure>
              <img src="Prints Sagres/RegistroAuxiliar/Cadastro.png" alt="Pesquisar" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Cadastro Registro Auxiliar</figcaption>
            </figure>
          </div>
        </div>

        <div class='content2 L115' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L113')" style="cursor: pointer;"> Registro Auxiliar ▸ Pesquisar </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Pesquisar', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Registros Auxiliares cadastrados no Sistema, que serão exibidos em ordem dos números dos mesmos.

              <br><br>Para realizar uma pesquisa, basta inserir os dados referentes ao Registro, como número e protocolo do mesmo,
              selecionando Títulos de Registro e Penhor, dentre os já cadastrados no Sistema.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">
              <br>Assim, os Registros Auxiliares referentes aos dados inseridos serão listados abaixo, em ordem do número dos mesmos,
              onde poderão ser visualizados os dados de cada um.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível cadastrar um novo Registro. Basta clicar em
              <img src="Prints Sagres/Matricula/incluir.png" alt="Incluir">
              no canto superior direito.
              Assim, a janela de <a onclick="testeFilho('.L117')" style="cursor: pointer;">Cadastro de Registro Auxiliar</a> será exibida.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/RegistroAuxiliar/Pesquisar.png" alt="Pesquisar" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Pesquisa Registro Auxiliar</figcaption>
          </figure>
        </div>

<!-- Loteamento -->
        <div class='content2 L116' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Loteamento </h2>

          <h2 id="tplink" onclick="testeFilho('.L117')" style="cursor: pointer;"> ▸ Cadastro </h2>
          <div id='texto'>
            <p>
              Exibe os Loteamentos cadastrados, podendo incluir um novo Loteamento,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L118')" style="cursor: pointer;"> ▸ Pesquisar </h2>
          <div id='texto'>
            <p>
              Gerar Imóveis a partir de Loteamentos cadastrados no Sistema.
            </p>
          </div>

        </div>

        <div class='content2 L117' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L117')" style="cursor: pointer;"> Loteamento ▸ Cadastro </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Cadastro', a tela abaixo será exibida, onde poderá ser visualizado o
              primeiro, em ordem alfabética, dos Loteamentos cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              <br>Serão exibidos os dados de cada Loteamento, bem como o Imóvel de origem e dados complementares
              nas abas da janela inferior.
              <br><br>Como pode ser percebido, os dados do Loteamento exibido na tela estarão inativos para edição.
              <br><br>Para editar os dados de um Loteamento cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.


              <br><br>Para cadastrar um Loteamento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              Assim, basta inserir os dados do novo Loteamento e do Imóvel de Origem do mesmo, sendo que o Código é gerado sequencialmente.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Loteamento.
              <br>Assim, as tabelas dos dados complementares serão geradas automaticamente, sendo possível incluir itens em cada uma delas.

              <br><br>Também é possível excluir um Loteamento cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Loteamento em questão será excluído do Banco de Dados do Sistema.
            </p>

            <br><br>

            <figure>
              <img src="Prints Sagres/Loteamento/Cadastro.png" alt="Cadastro" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Cadastro Loteamento</figcaption>
            </figure>
          </div>
        </div>

        <div class='content2 L118' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L117')" style="cursor: pointer;"> Loteamento ▸ Gerar Imóvel pelo Loteamento </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Gerar Imóvel pelo Loteamento', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Loteamentos cadastrados no Sistema, que serão exibidos em ordem dos números dos mesmos.

              <br><br>Para realizar uma pesquisa, basta selecionar um, dentre os Loteamentos já cadastrados no Sistema.
              <br>Assim, os Registros Auxiliares referentes aos dados inseridos serão listados abaixo, em ordem do número dos mesmos.
              <br>É possível incluir, se necessário for, filtros referentes à Quadra ou Lote, selecionando as abas correspondentes.

              <br><br>Feito isso, basta selecionar um dos Loteamentos listados e clicar em
              <img src="Prints Sagres/Loteamento/proc.png" alt="Gerar Imóvel">
              , no final da tela, para gerar um Imóvel a partir do Loteamento selecionado.

              <br><br>Para realizar uma nova pesquisa e gerar outro Imóvel, basta repetir as operações descritas acima.

            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Loteamento/Gerar.png" alt="Gerar Imóvel" style="padding-left: 140px;">
            <figcaption style="padding-left: 300px;">Tela Gerar Imóvel pelo Loteamento</figcaption>
          </figure>
        </div>

<!-- Balcão de Atendimento -->
        <div class='content2 L119' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Balcão de Atendimento </h2>

          <h2 id="tplink" onclick="testeFilho('.L120')" style="cursor: pointer;"> ▸ Protocolo </h2>
          <div id='texto'>
            <p>
              Exibe os Protocolos cadastrados, podendo incluir um novo Protocolo,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L121')" style="cursor: pointer;"> ▸ Pedido </h2>
          <div id='texto'>
            <p>
              Consultar Pedidos cadastrados, podendo incluir um novo Pedido,
              bem como alterar, excluir, os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L122')" style="cursor: pointer;"> ▸ Operação Veículo </h2>
          <div id='texto'>
            <p>
              Exibe as Operações com Veículo cadastradas, podendo incluir uma nova Operação,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L123')" style="cursor: pointer;"> ▸ G.E.D </h2>
          <div id='texto'>
            <p>
              Cadastrar/Editar Documentos GED, podendo visualizar os excluídos e bloqueados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L126')" style="cursor: pointer;"> ▸ Indisponibilidade Manual </h2>
          <div id='texto'>
            <p>
              Exibe as Ordens de Indisponibilidade cadastradas, podendo incluir uma nova Ordem,
              bem como alterar ou excluir as já cadastradas no Sistema.
            </p>
          </div>


        </div>

        <div class='content2 L120' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L119')" style="cursor: pointer;"> Balcão de Atendimento ▸ Protocolo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Protocolo', a tela abaixo será exibida, onde será possível realizar um Protocolo de Atendimento,
              uma vez que os campos estarão disponíveis para serem preenchidos.
              <br><br>Assim, basta inserir os dados, já cadastrados no Sistema, referentes ao novo Protocolo: Situação, Solicitante(Pessoa) e Natureza.
              Devem ser inseridos também: Unidade Federativa, Data, Vencimento e Anotações, caso necessário.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar"> para cadastrar o Protocolo.

              <br><br>Para visualizar os Protocolos cadastrados no Sistema, basta navegar através das setas do canto superior esquerdo da tela.
              <br>Assim, a aba 'Todos' poderá ser exibida, onde o primeiro, em ordem do número dos mesmos, dos Protocolos cadastrados, serão
              apresentados.

              <br><br>Os dados do Protocolo cadastrado podem ser alterados, bastando clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">
              no menu superior.
              <br>Assim, a tela abaixo será exibida com os dados do Protocolo em questão. Basta realizar as
              alterações que desejar e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar.

              <br><br>Também é possível excluir um Protocolo cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Protocolo em questão será excluído do Banco de Dados do Sistema.

              <br><br>Feito o Cadastro do Protocolo, uma janela na parte inferior da tela será exibida, onde Atos e Arquivos referentes ao Protocolo
              em questão poderão ser incluídos.
              <br>Na aba 'Atos', basta clicar em <img src="Prints Sagres/Balcao/atosrascunho.png" alt="Atos"> para
              exibir a tela de <a href="#texto2" style="cursor: pointer;">Rascunho de Atos</a>.
              <br>Para visualizar Atos Cadastrados, basta clicar em <img src="Prints Sagres/Balcao/atoscad.png" alt="Atos Cadastrados"> para
              exibir a tela de <a href="#texto2" style="cursor: pointer;">Rascunho de Atos</a>, com os já cadastrados listados no canto superior esquerdo.
              <br>Na aba 'Arquivos', basta clicar nos ícones à direita da janela para inserir ou excluir um Arquivo referente ao Protocolo. Também
              é possível exibir anotações do Arquivo e abrir Documento GED relativo ao mesmo.
            </p>
            <br><br>
            <figure>
              <img src="Prints Sagres/Balcao/Protocolo.png" alt="Protocolo" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Cadastro Protocolo</figcaption>
            </figure>
          </div>

          <br>
          <div id="texto2"></div>
          <br><br><br><br>
          <h2 id="tplink" onclick="testeFilho('.L120')" style="cursor: pointer;"> ▸ Registro de Atos </h2>
          <div id='texto'>
            <br>
            <p>
              Para cadastrar um Rascunho de Ato/Registro, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              <br>Assim, os dados do novo Ato estarão disponíveis para edição, sendo que o Número e a Data são gerados automaticamente.
              <br>No campo 'Registro', ao selecionar o que desejar cadastrar, serão preenchidos o Tipo, a Classe de Registro e o Texto do mesmo.
              <br>Assim, basta incluir as Partes Envolvidas, se necessário, em tal Ato/Registro, através da janela a esquerda da tela.
              <br>Caso o Imóvel em questão tenha um Proprietário cadastrado, o mesmo será incluído como Parte Envolvida do Ato, exibindo uma tela
              de confirmação de tal operação. Para Incluir ou Excluir uma Parte Envolvida, basta clicar nos botões correspondentes à direta da janela
              em questão, sendo que cada Ato possui as devidas associações de Papéis de Partes Envolvidas.
              <br>Ao incluir uma Parte Envolvida, o texto do Ato será atualizado com os Papéis em questão.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Rascunho de Ato.
              Assim, o mesmo será exibido na janela no canto superior esquerdo da tela.
              <br>Para registrá-lo, basta clicar em
              <img src="Prints Sagres/Balcao/registrar.png" alt="Registrar">.
            </p>
          </div>

            <br>

            <figure>
              <img src="Prints Sagres/Balcao/AtoRegistro.png" alt="Rascunho Atos" style="padding-left: 60px;" width="115%" height="auto">
              <figcaption style="padding-left: 450px;">Rascunho Atos</figcaption>
            </figure>
        </div>

        <div class='content2 L121' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L119')" style="cursor: pointer;"> Balcão de Atendimento ▸ Pedido </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Pedido', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Pedidos cadastrados no Sistema, que serão exibidos, na ordem das inclusões mais recentes,
              na tabela localizada na parte inferior da tela.

              <br><br>Para realizar uma pesquisa, basta inserir os filtros que julgar necessário, referentes ao Pedido, como Número e Situação do mesmo,
              podendo selecionar Matrícula, Registro Auxiliar, Transcrição e Pessoa, dentre os já cadastrados no Sistema.
              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">
              <br><br>Assim, os Pedidos referentes aos dados inseridos serão listados abaixo, a partir dos mais recentes,
              onde poderão ser visualizados os dados de cada um.
              <br>Dando um duplo-clique sobre um dos Pedidos listados na tabela, ou ao selecionar um deles e clicar em
              <img src="Prints Sagres/Balcao/selec.png" alt="Selecionar">, será exibida a tela de
              <a href="#texto9" style="cursor: pointer;">Cadastro de Pedido</a>,
              onde os dados do mesmo poderão ser alterados. Também será possível excluí-lo.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível cadastrar um novo Pedido. Basta clicar em
              <img src="Prints Sagres/Balcao/novo.png" alt="Novo Pedido">
              no canto superior direito.
              Assim, a janela de <a href="#texto9" style="cursor: pointer;">Cadastro de Pedido</a>
              será exibida, onde o mesmo poderá ser cadastrado.
            </p>
          </div>
          <br><br><br>
          <figure>
            <img src="Prints Sagres/Balcao/Pedido.png" alt="Pedido" width="110%" height="auto">
            <figcaption style="padding-left: 350px;">Tela Pesquisa Pedido</figcaption>
          </figure>

          <br>
          <div id="texto9"></div>
          <br><br><br><br>
          <h2 id="tplink" onclick="testeFilho('.L121')" style="cursor: pointer;"> ▸ Cadastro de Pedido </h2>
          <div id='texto'>
            <br>
            <p>
              Ao clicar em <img src="Prints Sagres/Balcao/novo.png" alt="Novo Pedido">,
              a tela abaixo será exibida, onde será possível cadastrar um Pedido de Balcão, uma vez que os campos estarão
              disponíveis para serem preenchidos.
              <br><br>Assim, basta inserir os dados, já cadastrados no Sistema, do Apresentante.
              Devem ser inseridos também os Dados do Contato e do Atendimento.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar"> para cadastrar o Pedido.

              <br><br>Uma vez cadastrado, a <a href="#texto3" style="cursor: pointer;">tela de Serviços</a>
              será exibida, onde os Itens dos mesmos poderão ser incluidos no Pedido em questão.

              <br><br>Feito isso, o Pedido pode ser protocolado, selecionando a Natureza do Protocolo, dentre as já cadastradas, no
              campo 'Criando novo Protocolo', após os dados do Atendimento. A data exibida será a do dia em que o Sistema estiver sendo executado,
              podendo ser alterada, caso seja necessário.
              <br>Assim, basta clicar em
              <img src="Prints Sagres/Balcao/protocolar.png" alt="Protocolar"> para protocolar o Pedido em questão.
              <br>Dessa maneira, a tela de
              <a onclick="testeFilho('.L120')" style="cursor: pointer;"> Cadastro de Protocolo </a> será exibida, onde serão apresentados os
              dados do Protocolo em questão, sendo possível incluir Rascunhos de Atos ao cadastro do mesmo.

              <br><br>Registrado o Protocolo, poderão ser inseridos Itens ao mesmo, como: Serviços, Pagamentos e Apontamentos. Tais
              itens estarão exibidos, nas abas correspondentes, na parte inferior da tela em questão.
              <br>Ações correspondentes à cada Item, como inserção e exclusão, poderão ser realizadas através dos Botões
              localizados à direita da aba de cada Item.
              <br>Também será possível navegar entre as abas do Pedido na parte superior da tela, visualizando, inserindo e editando
              etapas do mesmo, como Protocolo e Exigências do mesmo.

              <br><br>Para editar os dados de um Pedido cadastrado, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              Depois de editado, <br>clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Também é possível excluir um Pedido cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              Assim, o Pedido em questão será excluído do Banco de Dados do Sistema.

              <br><br>Feita a gravação do Pedido, estarão disponíveis, no menu lateral à direita da tela, botões onde diversas ações poderão ser realizadas.

              <br><br> O ícone <img src="Prints Sagres/Balcao/situacao.png" alt="Situação">
              indica a Situação do pagamento referente ao Pedido em questão:
              <ul>
                <li>O Cifrão na cor <span style="color: red;">Vermelha</span> indica que o Pagamento ainda não foi realizado;</li>
                <li>O Cifrão na cor <span style="color:yellow;">Amarela</span> indica que apenas uma parte do Pagamento foi realizada,
                  há um Reembolso a ser feito ao Cliente, ou um Crédito a ser utilizado por ele;</li>
                <li>O Cifrão na cor <span style="color:green;">Verde</span> indica que o Pagamento foi concluído.</li>
              </ul>

              <br>Ao clicar em <img src="Prints Sagres/Balcao/anotar.png" alt="Anotar">
              será possível cadastrar anotações junto ao Pedido em questão.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/prot.png" alt="Protocolo">
              a tela de <a onclick="testeFilho('.L120')" style="cursor: pointer;"> Cadastro de Protocolo </a> será exibida.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/transc.png" alt="Transcrição">
              a tela de <a onclick="testeFilho('.L110')" style="cursor: pointer;"> Cadastro de Transcrição </a> será exibida.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/atos.png" alt="Atos">
              a tela de Rascunho de Atos será exibida, descrita em <a onclick="testeFilho('.L120')" style="cursor: pointer;">Protocolo</a>.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/mat.png" alt="Matrícula">
              a tela de <a onclick="testeFilho('.L106')" style="cursor: pointer;"> Cadastro de Matrícula </a> será exibida.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/cert.png" alt="Certidão">
              a tela de <a href="#texto5" style="cursor: pointer;"> Cadastro de Certidão </a> será exibida, onde uma Certidão referente
              ao Pedido poderá ser cadastrada no Sistema.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/tit.png" alt="Título">
              a tela de <a href="#texto6" style="cursor: pointer;"> Cadastro de Título </a> será exibida, onde um Título referente
              ao Pedido poderá ser cadastrado no Sistema.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/exig.png" alt="Exigência">
              a tela de <a href="#texto7" style="cursor: pointer;"> Cadastro de Exigência </a> será exibida, onde uma Exigência referente
              ao Pedido poderá ser cadastrada no Sistema.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/pagto.png" alt="Pagamento">
              a tela de <a href="#texto8" style="cursor: pointer;"> Formas de Pagamento </a> será exibida, onde o Pagamento referente
              aos Serviços do Pedido em questão poderá ser registrado no Sistema.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/ficha.png" alt="Ficha">
              será possível Imprimir o Relatorio referente à Ficha Financeira do Pedido em questão.

              <br><br>Ao clicar em <img src="Prints Sagres/Balcao/recibos.png" alt="Recibos">
              será possível Imprimir o Relatorio referente aos Recibos de Certidões do Pedido em questão.
            </p>
          </div>

            <br><br><br>

            <figure>
              <img src="Prints Sagres/Balcao/CadPedido.png" alt="Cadastro Pedido" style="margin-right: 50px;" width="112%" height="auto">
              <figcaption style="padding-left: 380px;">Tela Cadastro Pedido</figcaption>
            </figure>

            <br><br><br><br>
            <div id="texto3"></div>
            <br><br><br><br>
            <h2 id="tplink" onclick="testeFilho('.L121')" style="cursor: pointer;"> ▸ Serviços </h2>

            <div id="texto">
              <br>
                <p>
                  Para incluir um Serviço ao Pedido basta inserir, no campo de pesquisa no topo da tabela, um termo referente à algum Serviço cadastrado no Sistema.
                  Feito isso, basta selecionar o Serviço que desejar dentre os resultantes da pesquisa, exibindo os Itens do mesmo. Por fim, resta selecionar um
                  dentre os Itens listados para tal Serviço e clicar em <img src="Prints Sagres/Balcao/incluir.png" alt="Incluir"> para inclui-lo no Pedido em questão.
                  <br>Se desejar incluir outro Item de Serviço, basta repetir os procedimentos descritos anteriormente.
                  <br>Caso desejar finalizar a inclusão de Itens de Serviço, basta fechar a janela em questão.
                </p>
              <br>
            </div>

            <figure>
              <img src="Prints Sagres/Balcao/serviços.png" alt="Serviços" style="padding-left: 60px;">
              <figcaption style="padding-left: 390px;">Tela Serviços</figcaption>
            </figure>

            <br><br>

            <!-- <br><br><br><br>
            <div id="texto4"></div>
            <br><br><br><br>
            <h2 id="tplink" onclick="testeFilho('.L121')" style="cursor: pointer;"> ▸ Rascunho Atos </h2>
            <figure>
              <img src="Prints Sagres/Balcao/AtoRegistro.png" alt="Rascunho Atos" style="padding-left: 60px;" width="115%" height="auto">
              <figcaption style="padding-left: 450px;">Rascunho Atos</figcaption>
            </figure>

            <br><br> -->

            <br><br><br><br>
            <div id="texto5"></div>
            <br><br><br><br>
            <h2 id="tplink" onclick="testeFilho('.L121')" style="cursor: pointer;"> ▸ Certidão </h2>
            <br>
            <div id="texto">
              <p>
                Para gerar uma Certidão Inteiro Teor, basta inserir, na janela à esquerda da tela, o Apontamento referente a um Imóvel já registrado no Sistema.
                Dessa maneira, o texto e as imagens da Certidão serão gerados automaticamente, assim como o preço a ser cobrado para registrar a certidão, que será
        			  exibido no rodapé da tela. No canto inferior esquerdo há o botão <img src="Prints Sagres/Balcao/pagamentos.png" alt="Pagamentos">, onde, após gravar
        			  a Certidão, será possível registrar a cobrança do valor tabelado para tal operação.
              </p>
            </div>
            <br>
            <figure>
              <img src="Prints Sagres/Balcao/Certidao.png" alt="Certidão" style="padding-left: 50px;" width="115%" height="auto">
              <figcaption style="padding-left: 450px;">Tela Certidão</figcaption>
            </figure>

            <br><br>

            <br><br><br><br>
            <div id="texto6"></div>
            <br><br><br><br>
            <h2 id="tplink" onclick="testeFilho('.L121')" style="cursor: pointer;"> ▸ Título </h2>

            <div id='texto'>
              <p>
                Ao clicar em 'Título', a tela abaixo será exibida, onde poderá ser cadastrado um
                Título vinculado ao Pedido em questão. Assim, é possível navegar entre eles, através
                das setas do canto superior esquerdo.

                <br><br>Como pode ser percebido, os dados dos Títulos cadastrados estarão inativos para edição.
                <br>Para editar os dados de um Título, basta clicar em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

                <br>Depois de editado, clique em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
                para salvar as alterações realizadas.

                <br><br>Para cadastrar um Título, basta clicar em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
                <br>Assim, basta inserir os dados do novo Título, sendo que o Número e o Pedido do mesmo são preenchidos automaticamente.
                Feito isso, clique em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
                para finalizar o cadastro do Título.

                <br><br>Também é possível excluir um Título cadastrado clicando em
                <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
                <br>Assim, o Título em questão será excluído do Pedido ao qual estava vinculado.
              </p>
            </div>

            <br>
            <figure>
              <img src="Prints Sagres/Balcao/Titulo.png" alt="Título" style="padding-left: 60px;">
              <figcaption style="padding-left: 390px;">Tela Título</figcaption>
            </figure>

            <br><br>

            <br><br><br><br>
            <div id="texto7"></div>
            <br><br><br><br>
            <h2 id="tplink" onclick="testeFilho('.L121')" style="cursor: pointer;"> ▸ Exigências </h2>
            <br>

            <div id='texto'>
              <p>
                Ao clicar em 'Exigência', a tela abaixo será exibida, onde poderá ser cadastrada uma
                Exigência vinculada ao Pedido em questão. Assim, é possível navegar entre elas, através
                das setas do canto superior esquerdo.

                <br><br>Como pode ser percebido, os dados das Exigências cadastradas estarão inativos para edição.
                <br>Para editar os dados de um Exigência, basta clicar em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

                <br>Depois de editado, clique em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
                para salvar as alterações realizadas.

                <br><br>Para cadastrar uma Exigência, basta clicar em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
                <br>Assim, basta inserir os dados da nova Exigência, sendo que o Código da mesma é preenchido automaticamente.
                Feito isso, clique em
                <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
                para gravar o cadastro da Exigência.

                <br><br>Também é possível excluir uma Exigência cadastrada clicando em
                <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
                <br>Assim, a Exigência em questão será excluída do Pedido ao qual estava vinculado.

                <br><br>Cumprida tal Exigência, a mesma poderá ser finalizada, bastando clicar em
                <img src="Prints Sagres/Balcao/finalizar.png" alt="Finalizar">.
              </p>
            </div>

            <br>
            <figure>
              <img src="Prints Sagres/Balcao/Exigencias.png" alt="Exigências" style="padding-left: 60px;">
              <figcaption style="padding-left: 390px;">Tela Exigências</figcaption>
            </figure>

            <br><br>

            <br><br><br><br>
            <div id="texto8"></div>
            <br><br><br><br>
            <h2 id="tplink" onclick="testeFilho('.L121')" style="cursor: pointer;"> ▸ Formas de Pagamento </h2>
            <br>

            <div id="texto">
              <p>
                Ao realizar o Pagamento referente aos Serviços incluídos no Pedido, como Certidões e Atos, a tela abaixo será exibida, onde
                será apresentado o valor total a ser pago por um determinado Pedido no campo 'TOTAL PEDIDO'.
                Assim, basta selecionar a Forma de Pagamento, sendo estas já cadastradas no Sistema, o Convênio (se necessário) e o valor a ser
                pago pelo Cliente. É possível dar um duplo-clique no campo 'Valor' para preenchê-lo automaticamente com o valor total do pedido.
                <br>Feito isso, clique em <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/plus.png" alt="Ícone Mais"> para incluir
                o pagamento. Dessa maneira, o tela de <a onclick="testeFilho('.L140')" style="cursor: pointer;">  Movimento de Caixa </a> será exibida
                para que o valor seja registrado.
                <br>Os demais botões à direita podem ser utilizados para Excluir, Editar e Registrar um Pagamento.
              </p>
            </div>

            <br>
            <figure>
              <img src="Prints Sagres/Balcao/FormasPagamento.png" alt="Formas de Pagamento" style="padding-left: 60px;">
              <figcaption style="padding-left: 390px;">Tela Formas de Pagamento</figcaption>
            </figure>

            <br><br>

        </div>

        <div class='content2 L122' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L119')" style="cursor: pointer;"> Balcão de Atendimento ▸ Operação Veículo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Operação Veículo', a tela abaixo será exibida, onde será possível cadastrar uma Operação de Veículo,
              uma vez que os campos estarão disponíveis para serem preenchidos.
              <br><br>Assim, basta selecionar o Tipo de Operação, dentre os já cadastrados no Sistema, e a Data da Operação.
              Deve ser inserido também a placa de um Veículo cadastrado, sendo que os demais dados do mesmo serão preenchidos
              automaticamente de acordo com a placa inserida.

              <br><br>Por fim, selecione uma Pessoa já cadastrada e associe à ela um Papel de Parte Envolvida na Operação, clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Serviços/plus.png" alt="Ícone Mais">
              para inseri-la na lista de Pessoas envolvidas na Operação.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar"> para cadastrar a Operação.

              <br><br>Para visualizar as Operações cadastradas no Sistema, basta clicar em
              <img src="Prints Sagres/Matricula/cancelar.png" alt="Cancelar">
              no menu superior.
              <br>Assim, será exibido a primeira, em ordem do número das mesmas, das Operações cadastrados, sendo possível navegar entre elas,
              através das setas do canto superior esquerdo.
              <br>Dessa maneira, os dados da Operação cadastrada podem ser alterados, bastando clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">
              no menu superior.
              <br>Assim, a tela abaixo será exibida com os dados da Operação em questão. Basta realizar as
              alterações que desejar e clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar.

              <br><br>Também é possível excluir uma Operação cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              Assim, a Operação em questão será excluída do Banco de Dados do Sistema.
            </p>
            <br><br>
            <figure>
              <img src="Prints Sagres/Balcao/OperacaoVeiculo.png" alt="Operação Veículo" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Operação Veículo</figcaption>
            </figure>
          </div>
        </div>
<!-- GED -->
        <div class='content2 L123' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L119')" style="cursor: pointer;"> Balcão de Atendimento ▸ G.E.D </h2>

          <h2 onclick="testeFilho('.L127')" style="cursor: pointer;"> ▸ Documento </h2>
          <div id='texto'>
            <p>
              Exibe os Documentos GED cadastrados, podendo incluir um novo,
              bem como alterar, excluir, ou pesquisar um dos já cadastrados no Sistema.
            </p>
          </div>

          <h2 onclick="testeFilho('.L128')" style="cursor: pointer;"> ▸ Lixeira </h2>
          <div id='texto'>
            <p>
              Exibe os Documentos GED excluídos, podendo recuperá-los ou excluí-los
              definitivamente do Sistema.
            </p>
          </div>

          <h2 onclick="testeFilho('.L129')" style="cursor: pointer;"> ▸ Bloqueados </h2>
          <div id='texto'>
            <p>

            </p>
          </div>

        </div>

        <div class='content2 L124' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L123')" style="cursor: pointer;"> GED ▸ Documento </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Documento', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Documentos GED cadastrados no Sistema, que serão exibidos, na ordem das inclusões mais recentes,
              na tabela localizada na parte inferior da tela.

              <br><br>Para realizar uma pesquisa, basta inserir os filtros que julgar necessário, referentes ao Documento,
              como Identificador, Título e Responsável do mesmo,
              podendo incluir datas de Assinatura, Criação, Modificação, Vigência, Inclusão e Alteração do Documento.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">
              <br>Assim, os Documentos referentes aos dados inseridos serão listados abaixo, em ordem do número dos mesmos,
              onde poderão ser visualizados os dados de cada um.
              <br>Dando um duplo-clique sobre um dos Documentos listados na tabela, ou clicando em
              <img src="Prints Sagres/Balcao/selec.png" alt="Selecionar">, será exibida a tela de cadastro do Documento,
              onde os dados do mesmo poderão ser alterados. Também será possível excluí-lo, movendo-o para
              <a onclick="testeFilho('.L128')" style="cursor: pointer;">Lixeira</a>.
              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível cadastrar um novo Documento. Basta clicar em
              <img src="Prints Sagres/Balcao/GED/novo.png" alt="Novo Doc">
              no canto superior direito.
              Assim, a janela de Cadastro de Documento será exibida, onde o mesmo poderá ser cadastrado.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Balcao/GED/Documento.png" alt="Documento" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Pesquisa Documento GED</figcaption>
          </figure>
        </div>

        <div class='content2 L125' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L123')" style="cursor: pointer;"> GED ▸ Lixeira </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Lixeira', a tela abaixo será exibida, onde poderão ser visualizados
              os Documentos GED excluidos, que serão exibidos, na ordem das exclusões mais recentes,
              em uma tabela, juntamente com os dados correspondentes. Os dados do Arquivo referente aos
              Documentos listados serão apresentados no final da tela.

              </audio>

              <br><br>Para recuperar um Documento excluído, basta selecioná-lo na tabela e clicar em
              <img src="Prints Sagres/Balcao/GED/recup.png" alt="Recuperar">
              <br>Assim, o Documento em questão retornará aos cadastrados no Sistema.

              <br><br>Para excluir definitivamente um Documento, basta selecioná-lo na tabela e clicar em
              <img src="Prints Sagres/Balcao/GED/excluir.png" alt="Excluir">.
              <br>Assim, o Documento em questão será excluído do Banco de Dados do Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Balcao/GED/Lixeira.png" alt="Lixeira" style="padding-left: 20px;">
            <figcaption style="padding-left: 340px;">Tela Lixeira GED</figcaption>
          </figure>
        </div>

        <div class='content2 L126' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L123')" style="cursor: pointer;"> GED ▸ Bloqueados </h2>
          <img src="Prints Sagres/Balcao/Bloqueados.png" alt="Bloqueados">
        </div>
<!-- Indisponibilidade Manual -->
        <div class='content2 L127' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L119')" style="cursor: pointer;"> Balcão de Atendimento ▸ Indisponibilidade Manual </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Indisponibilidade Manual', a tela abaixo será exibida, onde poderá ser visualizado a
              primeira, em ordem alfabética, das Ordens de Indisponibilidade Manual cadastradas no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre elas.
              <br>Serão exibidos os dados de cada Ordem, bem como as Partes Envolvidas e o Imóvel da Pessoa Indisponibilizada
              nas janelas localizadas ao final da tela.
              <br><br>Como pode ser percebido, os dados da Ordem exibida na tela estão inativos para edição.
              <br><br>Para editar os dados de uma Ordem cadastrada, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.


              <br><br>Para cadastrar uma Ordem, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              Assim, basta inserir os dados da nova Ordem, sendo que o Código é gerado sequencialmente.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro da Ordem.

              <br><br>Também é possível excluir uma Ordem cadastrada clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, a Ordem em questão será excluída do Banco de Dados do Sistema.
            </p>

            <br><br>

            <figure>
              <img src="Prints Sagres/Balcao/Indisponibilidade.png" alt="Indisponibilidade Manual" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Indisponibilidade Manual</figcaption>
            </figure>
          </div>
        </div>


<!-- Processos -->
        <div class='content2 L128' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Processos </h2>

          <h2 id="tplink" onclick="testeFilho('.L129')" style="cursor: pointer;"> ▸ Integrações </h2>
          <div id='texto'>
            <p>

            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L137')" style="cursor: pointer;"> ▸ Atualizar Tabela de Preço </h2>
          <div id='texto'>
            <p>
              Aplicar um aumento percentual na tabela de preços dos Serviços prestados pelo Cartório.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L138')" style="cursor: pointer;"> ▸ Atualizar Atos Bloqueados </h2>
          <div id='texto'>
            <p>
              Exibir e Autorizar Atos Bloqueados pelo Cartório.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L139')" style="cursor: pointer;"> ▸ Matrícula em Lote </h2>
          <div id='texto'>
            <p>
              Pesquisar e Matricular Rascunhos de Imóveis já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L140')" style="cursor: pointer;"> ▸ Selar Itens em Lote </h2>
          <div id='texto'>
            <p>
              Aplicar Selos à Itens de Serviços em Lote ofertados pelo Cartório.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L141')" style="cursor: pointer;"> ▸ Regerar XML Selo Importação </h2>
          <div id='texto'>
            <p>
              Gerar arquivos XML referentes ao Selos a serem emitidos pelo Cartório.
            </p>
          </div>

        </div>
<!-- Integrações -->
        <div class='content2 L129' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L128')" style="cursor: pointer;"> Processos ▸ Integrações </h2>

          <h2 id="tplink" onclick="testeFilho('.L130')" style="cursor: pointer;"> ▸ Central de Indisponibilidade </h2>
          <div id='texto'>
            <p>

            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L131')" style="cursor: pointer;"> ▸ ARISP </h2>
          <div id='texto'>
            <p>

            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L132')" style="cursor: pointer;"> ▸ CGJ </h2>
          <div id='texto'>
            <p>

            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L135')" style="cursor: pointer;"> ▸ Receita Federal </h2>
          <div id='texto'>
            <p>

            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L136')" style="cursor: pointer;"> ▸ INCRA </h2>
          <div id='texto'>
            <p>

            </p>
          </div>

        </div>

        <div class='content2 L130' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L129')" style="cursor: pointer;"> Integrações ▸ Central de Indisponibilidade </h2>

          <div id='texto'>
            <p>

            </p>
          </div>

        </div>

        <div class='content2 L131' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L129')" style="cursor: pointer;"> Integrações ▸ ARISP </h2>

          <div id='texto'>
            <p>

            </p>
          </div>
        </div>
<!-- CGJ -->
        <div class='content2 L132' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L129')" style="cursor: pointer;"> Integrações ▸ CGJ </h2>

          <h2 id="tplink" onclick="testeFilho('.L133')" style="cursor: pointer;"> ▸ Importar Selo </h2>
          <div id='texto'>
            <p>
              Importar Selo já gerado a partir de arquivos XML.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L134')" style="cursor: pointer;"> ▸ Exportar Selo </h2>
          <div id='texto'>
            <p>
              Exportar Selos já gerados em arquivos XML.
            </p>
          </div>

        </div>

        <div class='content2 L133' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L132')" style="cursor: pointer;"> CGJ ▸ Importar Selo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Importar Selo', a tela abaixo será exibida, onde poderão ser importados Selos já gerados em
              <a onclick="testeFilho('.L141')" style="cursor: pointer;">Regerar XML Selo Importação</a>,
              salvos em formato .PRC.
              <br><br>Assim, basta informar o Ramo Cartorial referente ao Selo que está sendo importado e clicar em
              <img src="Prints Sagres/Processos/Integracoes/CGJ/procurar.png" alt="Procurar Arquivo">
              para selecionar um arquivo na máquina em questão, referente à um Selo gerado.
              <br><br>Feito isso, basta clicar em
              <img src="Prints Sagres/Processos/Integracoes/CGJ/importar.png" alt="Importar Arquivo">
              para realizar a Importação do arquivo referente ao Selo em questão.

              <br><br>Na aba 'Histórico' estarão apresentados os Selos já importados pelo Sistema, juntamente com os dados
              referentes às Importações em questão.
            </p>
          </div>

          <br><br>
          <figure>
            <img src="Prints Sagres/Processos/Integracoes/CGJ/ImportarSelo.png" alt="Importação Selo" style="padding-left: 40px;">
            <figcaption style="padding-left: 340px;">Tela Importação Selo</figcaption>
          </figure>

        </div>

        <div class='content2 L134' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L132')" style="cursor: pointer;"> CGJ ▸ Exportar Selo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Exportar Selo', a tela abaixo será exibida, onde poderão ser exportados Selos já importados
              anteriormente no Sistema.

              <br><br>Assim, basta informar o Ramo Cartorial e a Data referentes ao Selo que está sendo exportado e clicar em
              <img src="Prints Sagres/Processos/Integracoes/CGJ/exportar.png" alt="Exportar XML">
              para selecionar o diretório, na máquina em questão, onde o arquivo será salvo, nomeando o mesmo.
              <br><br>Feito isso, será gerado um arquivo em XML referente ao Selo exportado.

              <br><br>Na aba 'Histórico' estarão apresentados os Selos já exportados pelo Sistema, juntamente com os dados
              referentes às Exportações em questão.
            </p>
          </div>

          <br><br>
          <figure>
            <img src="Prints Sagres/Processos/Integracoes/CGJ/ExportarSelo.png" alt="Exportação Selo" style="padding-left: 40px;">
            <figcaption style="padding-left: 380px;">Tela Exportação Selo</figcaption>
          </figure>

        </div>
<!-- Receita Federal -->
        <div class='content2 L135' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L129')" style="cursor: pointer;"> Integrações ▸ Receita Federal </h2>
          <h2 id="tplink"> ▸ Gerar DOI </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Gerar DOI', a tela abaixo será exibida, onde poderão ser gerados arquivos DOI referentes a Receita Federal.

              <br><br>Assim, basta informar os filtros que for necessário, como  Data, Matricula e Situação, para encontrar o "ITEM"
              a partir do qual será gerado o arquivo DOI.
              <br>No campo 'Diretório Padrão' está especificado onde será salvo o arquivo gerado, sendo um padrão que não pode ser modificado.
              <br>Assim, clique em
              <img src="Prints Sagres/Processos/Integracoes/Receita/pesquisar.png" alt="Pesquisar">
              para exibir os resultados da pesquisa em questão.

              <br><br>Feito isso, basta clicar em
              <img src="Prints Sagres/Processos/Integracoes/Receita/gerar.png" alt="Gerar DOI">
              para gerar o arquivo DOI em questão, sendo este salvo no diretório especificado anteriormente.

              <br><br>Na aba 'Histórico' estarão apresentados os arquivos DOI já gerados pelo Sistema, juntamente com os dados
              referentes aos mesmos.
              <br>Para cancelar um DOI, basta clicar em
              <img src="Prints Sagres/Processos/Integracoes/Receita/cancelar.png" alt="Cancelar DOI">
              <br>Assim, o Item referente ao mesmo será apresentado em vermelho, indicando que o mesmo foi cancelado.
            </p>
          </div>
          <br>
          <figure>
            <img src="Prints Sagres/Processos/Integracoes/Receita/GerarDOI.png" alt="Exportação Selo" style="padding-left: 40px;" width="115%" height="auto">
            <figcaption style="padding-left: 410px;">Tela Geração DOI</figcaption>
          </figure>

        </div>
<!-- INCRA -->
        <div class='content2 L136' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L129')" style="cursor: pointer;"> Integrações ▸ INCRA </h2>

          <div id='texto'>
            <p>

            </p>
          </div>
        </div>
<!-- fim Integrações -->
        <div class='content2 L137' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L128')" style="cursor: pointer;"> Processos ▸ Atualizar Tabela de Preço </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Atualizar Tabela de Preço', a tela abaixo será exibida, onde um aumento percentual poderá ser aplicado à
              Tabela de preços referentes aos Serviços prestados pelo Cartório, sendo estes já cadastrados no Sistema.
              <br>Serão exibidas as últimas atualizações realizadas, onde os dados da mesma poderão ser visualizados, assim como
              o Operador responsável pelas mesmas.

              <br><br>Assim, basta selecionar a data de Início de Vigência de tal Atualização e inserir o percentual a ser aplicado.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Processos/processar.png" alt="Processar"> para aplicar a Atualização em questão.
            </p>
          </div>

          <figure>
            <img src="Prints Sagres/Processos/AtualizarPrecos.png" alt="Atualizar Preços" style="padding-left: 50px; padding-top: 30px;">
            <figcaption style="padding-left: 370px; ">Tela Atualizar Preços</figcaption>
          </figure>

        </div>

        <div class='content2 L138' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L128')" style="cursor: pointer;"> Processos ▸ Atualizar Atos Bloqueados </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Atualizar Atos Bloqueados', a tela abaixo será exibida, onde um Ato Bloqueado poderá ser autorizado.
              <br>Serão exibidos os Atos Bloqueados pelo Cartório, onde os dados do mesmo poderão ser visualizados.

              <br><br>Assim, basta selecionar os Atos que desejar autorizar e clicar em.
              <img src="Prints Sagres/Processos/autorizar.png" alt="Autorizar"> para aplicar a autorização do Ato em questão.
            </p>
          </div>

          <figure>
            <img src="Prints Sagres/Processos/AutorizarAtos.png" alt="Atualizar Atos" style="padding-left: 50px; padding-top: 30px;">
            <figcaption style="padding-left: 370px; ">Tela Atualizar Preços</figcaption>
          </figure>
        </div>

        <div class='content2 L139' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L128')" style="cursor: pointer;"> Processos ▸ Matrícula em Lote </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Matrícula em Lote', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Rascunhos de Matrículas cadastradas no Sistema, que serão exibidas em ordem dos números das mesmas.

              <br><br>Para realizar uma pesquisa, basta inserir filtros, se necessário, referentes à Matrícula, Imóvel ou Proprietário do mesmo,
              selecionando Endereços e Pessoas, dentre os já cadastrados no Sistema.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">
              <br>Assim, os Rascunhos referentes aos dados inseridos serão listados abaixo, em ordem do número dos mesmos, onde poderão ser visualizados
              os dados de cada um.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível Matrícular um Rascunho. Basta selecionar os Rascunhos que desejar matricular,
              dentre os resultantes da pesquisa, e clicar em
              <img src="Prints Sagres/Processos/matricular.png" alt="Matricular">
              no canto superior direito.
              Assim, o Rascunho será matriculado no Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Processos/MatriculaLote.png" alt="Matrícula Lote" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Matrícula Lote</figcaption>
          </figure>

        </div>

        <div class='content2 L140' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L128')" style="cursor: pointer;"> Processos ▸ Selar Itens em Lote </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Selar Itens em Lote', a tela abaixo será exibida, onde poderão ser visualizados os Itens de Serviço em Lote realizados pelo Cartório,
              ordenados pelo número do Pedido de Balcão referente ao Item.
              <br><br>Os Itens em questão podem ser filtrados pelo número do Pedido, inserindo, no topo da tela, um intervalo de valores para tal número.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">
              <br>Assim, os Itens correspondentes serão exibidos, os dados de cada um.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Para Selar um Item, basta selecionar pelo menos um, dentre os listados, e clicar em
              <img src="Prints Sagres/Processos/selar.png" alt="Selar">
              para aplicar um Selo, um vez que exista Estoque para tal.

              <br><br>
              <figure>
                <img src="Prints Sagres/Processos/SelarLote.png" alt="Selar Lote" width="110%" height="auto">
                <figcaption style="padding-left: 340px;">Tela Selar Item Lote</figcaption>
              </figure>
          </p>
          </div>
        </div>

        <div class='content2 L141' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L128')" style="cursor: pointer;"> Processos ▸ Regerar XML Selo Importação </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Regerar XML Selo Importação', a tela abaixo será exibida, onde poderão ser gerados arquivos XML referentes aos Selos
              que serão criados pelo Cartório.
              <br><br>Assim, basta inserir os dados referentes ao Pedido, Ato e ao Selo em questão. Por fim, será exibido, no campo 'Arquivo', a pasta onde o
              XML será gravado.

              <br>Feito isso, clique em
              <img src="Prints Sagres/Processos/gerar.png" alt="Gerar">
              <br>Assim, o arquivo correspondente será gerado e gravado, de acordo com os dados inseridos, na pasta exibida anteriormente.

              <br><br>
              <figure>
                <img src="Prints Sagres/Processos/RegerarXML.png" alt="Selar Lote" style="padding-left: 80px;">
                <figcaption style="padding-left: 320px;">Tela Gerar XML Selo Importação</figcaption>
              </figure>
          </p>
          </div>
        </div>


<!-- Financeiro -->
        <div class='content2 L142' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Financeiro </h2>

          <h2 id="tplink" onclick="testeFilho('.L143')" style="cursor: pointer;"> ▸ Caixa </h2>
          <div id='texto'>
            <p>
              Realizar operações de Caixa de determinado Operador.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L148')" style="cursor: pointer;"> ▸ Lançamentos </h2>
          <div id='texto'>
            <p>
              Exibe os Lançamentos Financeiros cadastrados, podendo incluir um novo Lançamento,
              bem como alterar ou excluir os já cadastrados no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L149')" style="cursor: pointer;"> ▸ Reembolso </h2>
          <div id='texto'>
            <p>
              Realizar o Cadastro de Reembolso relativo à um Pedido de Balcão cadastrado no Sistema.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L150')" style="cursor: pointer;"> ▸ Faturar Contrato </h2>
          <div id='texto'>
            <p>
              Faturar Contratos já realizados pelo Cartório.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L151')" style="cursor: pointer;"> ▸ Cobrança Boleto </h2>
          <div id='texto'>
            <p>

            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L152')" style="cursor: pointer;"> ▸ Atos Extra Judiciais </h2>
          <div id='texto'>
            <p>

            </p>
          </div>

        </div>
<!-- Caixa -->
        <div class='content2 L143' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L142')" style="cursor: pointer;"> Financeiro ▸ Caixa </h2>

          <h2 id="tplink" onclick="testeFilho('.L144')" style="cursor: pointer;"> ▸ Abertura </h2>
          <div id='texto'>
            <p>
              Realizar a Abertura de Caixa de determinado Operador.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L145')" style="cursor: pointer;"> ▸ Fechamento </h2>
          <div id='texto'>
            <p>
              Realizar o Fechamento de Caixa de determinado Operador.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L146')" style="cursor: pointer;"> ▸ Movimento </h2>
          <div id='texto'>
            <p>
              Verificar o Movimento de Caixa de determinado Operador, desde o momento da Abertura.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L147')" style="cursor: pointer;"> ▸ Consulta </h2>
          <div id='texto'>
            <p>
              Consultar as operações de Caixa realizadas pelos Operadores.
            </p>
          </div>

        </div>

        <div class='content2 L144' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L143')" style="cursor: pointer;"> Caixa ▸ Abertura </h2>

          <div id='texto'>
            <p>
              Ao clicar em "Abertura", será exibida a tela abaixo, onde o Operador responsável
              fará a abertura do Caixa, inserindo o Saldo Inicial, incluindo anotações que julgar necessárias
              no campo inferior e, por fim, clicando no botão
              <img src="Prints Sagres/Financeiro/Caixa/abertura/btnAbrirCaixa.png" alt="Abrir Caixa">.
            </p>
          </div>

          <figure>
            <img src="Prints Sagres/Financeiro/Caixa/abertura/Abertura.png" alt="Abertura" style="padding-left: 50px; padding-top: 30px;">
            <figcaption style="padding-left: 370px; ">Abertura de Caixa</figcaption>
          </figure>

        </div>

        <div class='content2 L145' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L143')" style="cursor: pointer;"> Caixa ▸ Fechamento </h2>

          <div id='texto'>
            <p>
              Ao clicar em "Fechamento", será exibida a tela abaixo, onde o Operador responsável
              fará o Fechamento do Caixa, onde ele poderá visualizar, nos campos superiores, o Saldo Inicial do Caixa,
              a data e hora da Abertura do Caixa e a quantidade de Recibos. Também serão exibidos, à esquerda da tela,
              os valores de Caixa salvas no Sistema.
              <br><br>A fim de realizar o Fechamento do Caixa, o Operador deverá clicar no botão
              <img src="Prints Sagres/Financeiro/Caixa/fechamento/Travar.png" alt="Travar Caixa">, à direita.<br><br>
              Assim, os campos de "Caixa Operador" serão ativados e poderão ser preenchidos com os valores do caixa
              em questão  (Se desejar cancelar a operação, basta clicar em
              <img src="Prints Sagres/Financeiro/Caixa/fechamento/Liberar.png" alt="Liberar Caixa">, imediatamente abaixo).<br><br>
              Feito isso, o Operador deverá realizar anotações necessárias no campo inferior e, por fim, clicar em
              <img src="Prints Sagres/Financeiro/Caixa/fechamento/confirmo.png" alt="Confirmo">,
              no canto inferior à direita.
              <br><br>
              Assim, clicando em
              <img src="Prints Sagres/Financeiro/Caixa/fechamento/fechar.png" alt="Fechar">
              , o Fechamento do Caixa será concluído.<br><br>
            </p>
          </div>

          <figure>
            <img src="Prints Sagres/Financeiro/Caixa/fechamento/Fechamento.png" alt="Fechamento" width="110%" height="auto">
            <figcaption style="padding-left: 370px; padding-bottom: 80px;">Fechamento de Caixa</figcaption>
          </figure>

            <div id='texto'>
              <p>
                Na aba 'Histórico', ilustrada abaixo, poderão ser visualizadas as operações de Caixa realizadas por cada Operador.
                No topo da tela há um bloco 'Filtro', onde é possível filtrar as operações em relação ao nome
                do Operador, data e tipo da operação.
              </p>
            </div>

          <figure>
            <img src="Prints Sagres/Financeiro/Caixa/fechamento/Historico.png" alt="Histórico" width="110%" height="auto" style="padding-top: 30px;">
            <figcaption style="padding-left: 320px; padding-bottom: 30px;">Histórico de Abertura/Fechamento Caixa</figcaption>
          </figure>

        </div>

        <div class='content2 L146' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L143')" style="cursor: pointer;"> Caixa ▸ Movimento </h2>

          <div id='texto'>
            <p>
              Ao clicar em "Movimento", será exibida a tela abaixo, onde
              poderá ser visualizado o Movimento do Caixa, onde serão apresentados, nas abas superiores, os Pedidos de Balcão
              'À Baixar' e 'Baixados', juntamente com os dados do Apresentante, os Itens e o Operador Responsável de cada Pedido.
              <br>Também serão exibidos, ao final da tela, a data e hora da Abertura do Caixa, o Operador logado no Sistema, e
              o valor total a pagar do Pedido selecionado na lista acima.

              <br><br>A fim de abrir ou fechar do Caixa, o Operador deverá clicar em
              <img src="Prints Sagres/Financeiro/Caixa/abertura/btnAbrirCaixa.png" alt="Abrir Caixa"> ou
              <img src="Prints Sagres/Financeiro/Caixa/fechar.png" alt="Fechar">
              <br>
              Assim, as respectivas telas de <a onclick="testeFilho('.L144')" style="cursor: pointer;">Abertura</a> e
              <a onclick="testeFilho('.L145')" style="cursor: pointer;">Fechamento</a>
              de Caixa serão exibidas, onde tais operações poderão ser realizadas, caso ainda não tenham sido
              processadas.

              <br><br>Ao clicar em
              <img src="Prints Sagres/Financeiro/Caixa/reemb.png" alt="Reembolso">
              a tela de <a onclick="testeFilho('.L149')" style="cursor: pointer;">Reembolso</a>
               será exibida, onde tal operação pode ser realizada.

               <br><br>Ao clicar em
               <img src="Prints Sagres/Financeiro/Caixa/saida.png" alt="Saída"> poderão ser realizadas
               operações de Retirada de Valores do Caixa, descritas
               <a href="#texto3" style="cursor: pointer;">aqui</a>.

               <br><br>A fim de dar Baixa em um Pedido, basta selecioná-lo na listagem de Pedidos e, se for necessário,
               selecionar o Item referente ao mesmo, na lista inferior, para realizar o Recebimento do mesmo.
               <br>Assim, basta clicar em <img src="Prints Sagres/Financeiro/Caixa/receber.png" alt="Receber"> e
               confirmar o valor na janela que será apresentada à direita da tela.

               <br><br>Caso for necessário cancelar a Baixa de um Item, ou de todo o Pedido, basta, na aba 'Baixados',
               selecionar o Pedido e o Item, se houver mais de um, que desejar desfazer a Baixa e clicar em
               <img src="Prints Sagres/Financeiro/Caixa/estItem.png" alt="Estornar Item"> ou
               <img src="Prints Sagres/Financeiro/Caixa/estTudo.png" alt="Estornar Tudo">.

               <br><br>A mesma operação descrita acima poderá ser realizada na aba 'A Baixar'. Assim, o Pedido será retirado
               do Caixa e assim, o pagamento do mesmo poderá ser alterado na tela de
               <a onclick="testeFilho('.L121')" style="cursor: pointer;">Cadastro do Pedido</a>.
            </p>
            <br><br>
          </div>

          <figure>
            <img src="Prints Sagres/Financeiro/Caixa/Movimento.png" alt="Movimento" width="110%" height="auto" style="padding-left: 20px;">
            <figcaption style="padding-left: 370px;">Tela Movimento de Caixa</figcaption>
          </figure>

          <br>

          <div id="texto3"></div>
          <br><br><br><br>
          <h2 id="tplink"> ▸ Saída </h2>
          <div id='texto'>
            <p>
              Ao clicar em
              <img src="Prints Sagres/Financeiro/Caixa/saida.png" alt="Saída">,
              um menu com duas opções será exibido.
              <br><br>A primeira delas, 'Transferência para Outro Caixa', permite a transferência de valores entre Caixas,
              apresentando a tela abaixo.
              <br>Assim, basta selecionar o Caixa de destino, confirmar o mesmo, inserir o Valor a ser transferido e
              Observações, caso necessário.
              <br>Feito isso, clique em 'Ok', ao final da tela, para finalizar a operação.

              <br><br>Ao clicar na segunda opção, 'Retirada', uma janela à direita será exibida, onde um Valor pode ser
              retirado do Caixa.
              <br>Assim, basta inserir, no campo 'Valor Retirada', o Valor que deseja retirar e fazer Observações, caso
              necessário, no campo 'Observação' logo abaixo.
              <br>Feito isso, basta clicar em
              <img src="Prints Sagres/Financeiro/Caixa/efetuar.png" alt="Efetuar Baixa">. Assim, o Valor inserido será
              retirado do Caixa em questão.
              <br>Também é possível limpar os Valores inseridos, clicando em
              <img src="Prints Sagres/Financeiro/Caixa/saidaedit.png" alt="Limpar">.

              <br><br>Para cancelar a Operação de Retirada, basta clicar em
              <img src="Prints Sagres/Financeiro/Caixa/saidaexc.png" alt="Cancelar">.
              <br>Assim, a janela de Retirada será fechada, cancelando tal operação.
            </p>
            <br><br>
          </div>

          <figure>
            <img src="Prints Sagres/Financeiro/Caixa/transf.png" alt="Transferência" style="padding-left: 200px;">
            <figcaption style="padding-left: 360px;">Tela Transferência Caixa</figcaption>
          </figure>

          <br><br>
        </div>

        <div class='content2 L147' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L143')" style="cursor: pointer;"> Caixa ▸ Consulta </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Consulta', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Operações de Caixa realizadas no Sistema, onde serão exibidos, os Operadores, os Caixas que foram abertos e fechados pelo
              determinado Operador, e as operações realizadas por ele em cada Abertura de Caixa.

              <br><br>Para realizar uma pesquisa, basta inserir os filtros que julgar necessário, referentes ao Caixa, como Número, Situação e data
              do mesmo, podendo selecionar um Atendente, dentre os já cadastrados no Sistema, e a Forma de Pagamento utilizada.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">

              <br><br>Assim, os Caixas, Operadores e operações, referentes aos dados inseridos serão listados, em ordem dos Códigos dos mesmos,
              onde poderão ser visualizados os dados de cada um.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível Efetuar Baixa de um Item. Basta selecionar um, dentre os Itens listados, que está na
              situação 'Aguardando Baixa', e clicar em
              <img src="Prints Sagres/Financeiro/Caixa/efetuar.png" alt="Efetuar Baixa">
              à direita da lista de Caixas.
              Assim, basta obter a autorização do Operador responsável que a Baixa do Item será efetuada.

              <br><br>Também à direita da lista de Caixas, é possível realizar outras operações.<br>
              <br>Ao selecionar um Item de Caixa e clicar em
              <img src="Prints Sagres/Financeiro/Caixa/editar.png" alt="Editar">
              uma janela se abrirá, onde será possível Editar os dados da Forma de Pagamento de tal Item.<br>

              <br>Ao selecionar um Caixa ainda Aberto e clicar em
              <img src="Prints Sagres/Financeiro/Caixa/excluir.png" alt="Excluir">
              será possível excluir tal Caixa, bastando confirmar os dados Operador responsável.<br>

              <br>Ao selecionar um Caixa ainda Aberto e clicar em
              <img src="Prints Sagres/Financeiro/Caixa/trocar.png" alt="Trocar">
              será possível trocar o responsável pelo Caixa.<br>

              <br>Ao clicar em
              <img src="Prints Sagres/Financeiro/Caixa/excel.png" alt="Excel">
              será possível gerar uma Planilha Excel com os dados de todos Operadores, Caixas e Itens de Caixa
              registrados no Sistema.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Financeiro/Caixa/Consulta.png" alt="Consulta Caixa" width="110%" height="auto">
            <figcaption style="padding-left: 370px;">Tela Consulta Caixa</figcaption>
          </figure>
        </div>
<!-- fim Caixa -->
        <div class='content2 L148' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L142')" style="cursor: pointer;"> Financeiro ▸ Lançamentos </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Lançamentos', a tela abaixo será exibida, onde poderá ser visualizado o
              primeira, em ordem do Número, dos Lançamentos Financeiros cadastrados no Sistema. Assim, é possível navegar,
              através das setas do canto superior esquerdo, entre eles.
              <br>Serão exibidos os dados de cada Lançamento, bem como os do Favorecido, do Cheque e Histórico.
              <br>Ao final da tela serão exibidos os dados da Baixa do Lançamento em questão, caso tenha sido realizada.

              <br><br>Como pode ser percebido, os dados do Lançamento exibido na tela estão inativos para edição.
              <br><br>Para editar os dados de um Lançamento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/alterar.png" alt="Alterar">.

              <br>Depois de editado, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para salvar as alterações realizadas.

              <br><br>Para cadastrar um Lançamento, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/incluir.png" alt="Incluir">.
              Assim, basta inserir os dados do novo Lançamento, sendo que o Número é gerado sequencialmente.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Ajustes/Cadastro/Usuarios/gravar.png" alt="Gravar">
              para finalizar o cadastro do Lançamento.

              <br><br>Também é possível excluir um Lançamento cadastrado clicando em
              <img src="Prints Sagres/Ajustes/Cadastro/Excluir.png" alt="Excluir">.
              <br>Assim, o Lançamento em questão será excluído do Banco de Dados do Sistema.

              <br><br>Inicialmente serão exibidos os Lançamentos a Baixar. Para alternar entre eles e os Baixados, basta
              utilizar as setas
              <img src="Prints Sagres/Financeiro/setas.png" alt="Setas">
              à direita do menu superior da tela.
            </p>
          </div>
            <br><br>

            <figure>
              <img src="Prints Sagres/Financeiro/Lancamentos.png" alt="Lançamentos" width="110%" height="auto">
              <figcaption style="padding-left: 340px;">Tela Lançamentos</figcaption>
            </figure>

          <br><br><br>

          <div id='texto'>
            <p>
              Para efetuar a Baixa de um Lançamento, basta clicar em
              <img src="Prints Sagres/Financeiro/efetuar.png" alt="Efetuar">, no menu superior.
              <br>Assim, a tela abaixo será exibida, onde deverá ser inseridos os dados de cobrança do Lançamento em questão.
              <br>Feito isso, clique em
              <img src="Prints Sagres/Financeiro/baixar.png" alt="Baixar">
              para finalizar a Baixa de tal Lançamento.
            </p>
          </div>

            <br><br>

            <figure>
              <img src="Prints Sagres/Financeiro/Baixa.png" alt="Baixa" style="padding-left: 60px;">
              <figcaption style="padding-left: 370px;">Tela Baixa Lançamentos</figcaption>
            </figure>

            <br><br>
        </div>

        <div class='content2 L149' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L142')" style="cursor: pointer;"> Financeiro ▸ Reembolso </h2>

          <div id='texto'>
            <p>
              Ao clicar em "Reembolso", será exibida a tela abaixo, onde
              poderá ser visualizado o Pedido do Balcão que originou o Reembolso, onde serão apresentados o Número do mesmo e
              os dados do Apresentante, preenchidos automaticamente.

              <br><br>A fim de registrar o Reembolso, o Operador deverá inserir o Motivo, o Tipo de Documento e o Tipo de Movimento
              Financeiro, ambos já cadastrados no Sistema. Também poderão ser feitas Observações ao final da tela, se for necessário.

              <br><br>Feito isso, o valor do Reembolso, exibido após as observações, poderá ser registrado, bastando clicar em
              'Reembolsar', no canto inferior direto da tela.
            </p>
            <br><br>
          </div>

          <figure>
            <img src="Prints Sagres/Financeiro/Reembolso.png" alt="Reembolso">
            <figcaption style="padding-left: 370px;">Tela Reembolso</figcaption>
          </figure>
        </div>

        <div class='content2 L150' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L142')" style="cursor: pointer;"> Financeiro ▸ Faturar Contrato </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Faturar Contrato', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Contratos a serem faturados pelo Cartório, estando estes já cadastrados no Sistema.

              <br><br>Para realizar uma consulta, basta inserir os filtros que julgar necessário, referentes ao
              Tipo de Contrato, Período a ser Faturado, e Mensalista, selecionando campos já
              cadastrados no Sistema.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtrar">

              <br><br>Assim, os Contratos, referentes aos dados inseridos serão listados,
              onde poderão ser visualizados os dados de cada um, bem como os Itens que possuem, listados
              na janela da parte inferior da tela.

              <br><br>Para Faturar um Contrato, basta selecionar o Tipo de Lançamento e um contrato, dentre os resultantes da consulta, e clicar
              em <img src="Prints Sagres/Financeiro/faturar.png" alt="Faturar">, logo acima da lista de Contratos exibida.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Como pode ser observado abaixo, existe uma aba denominada 'Histórico' que exibe os Contratos
              faturados por cada Operador, bem como os Itens de cada um.
              <br>Para Cancelar um Faturamento, basta selecionar o Contrato que desejar e clicar em
              <img src="Prints Sagres/Financeiro/cancelar.png" alt="Cancelar">,
              no canto superior direto da tela.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Financeiro/FaturarContrato.png" alt="Faturar Contrato" width="112%" height="auto">
            <figcaption style="padding-left: 370px;">Tela Faturar Contrato</figcaption>
          </figure>
        </div>

        <div class='content2 L151' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L142')" style="cursor: pointer;"> Financeiro ▸ Cobrança Boleto </h2>
          <img src="Prints Sagres/Financeiro/CobrancaBoleto.png" alt="Cobrança Boleto" width="110%" height="auto">
        </div>

        <div class='content2 L152' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L142')" style="cursor: pointer;"> Financeiro ▸ Atos Extra Judiciais </h2>
          <img src="Prints Sagres/Financeiro/AtosExtra.png" alt="Atos Extra">
        </div>

<!-- Consultas -->
        <div class='content2 L153' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L0')" style="cursor: pointer;"> Consultas </h2>

          <h2 id="tplink" onclick="testeFilho('.L154')" style="cursor: pointer;"> ▸ Tabela de Preço </h2>
          <div id='texto'>
            <p>
              Realizar Consulta de Preços dos Serviços cadastrados no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L155')" style="cursor: pointer;"> ▸ Estoque Selo </h2>
          <div id='texto'>
            <p>
              Realizar Consulta de Estoque de Selos cadastrados no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L156')" style="cursor: pointer;"> ▸ Protocolos Vencidos/Vencer </h2>
          <div id='texto'>
            <p>
              Realizar Protocolos Vencidos ou a Vencer cadastrados no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L157')" style="cursor: pointer;"> ▸ Atos/Registros </h2>
          <div id='texto'>
            <p>
              Realizar Consulta de Atos/Registros cadastrados no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L158')" style="cursor: pointer;"> ▸ Registro de LOGs do Sistema </h2>
          <div id='texto'>
            <p>
              Realizar Consulta de LOGs do Sistema (Tarefas realizadas por cada Operador), podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L159')" style="cursor: pointer;"> ▸ Indisponibilidades </h2>
          <div id='texto'>
            <p>
              Realizar Consulta de Indisponibilidades cadastradas no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L160')" style="cursor: pointer;"> ▸ Pedidos com Exigências Cumpridas </h2>
          <div id='texto'>
            <p>
              Realizar Consulta de Pedidos Balcão com Exigências Cumpridas cadastrados no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L161')" style="cursor: pointer;"> ▸ Selos Eletrônicos </h2>
          <div id='texto'>
            <p>
              Realizar Consulta de Selos Eletrônicos utilizados no Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L162')" style="cursor: pointer;"> ▸ Dashboard </h2>
          <div id='texto'>
            <p>
                Exibir painéis de indicadores das ações realizadas pelo Cartório em um determinado período.
            </p>
          </div>

          <h2 id="tplink" onclick="testeFilho('.L163')" style="cursor: pointer;"> ▸ Pesquisa a Base de Dados </h2>
          <div id='texto'>
            <p>
              Realizar Consulta à Base de Dados do Sistema, podendo utilizar filtros de pesquisa, se
              for necessário.
            </p>
          </div>

        </div>

        <div class='content2 L154' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Tabela de Preço </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Tabela Preço', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Preços de Serviços realizados pelo Cartório, já cadastrados no Sistema.
              <br>Serão exibidos, em ordem alfabética, os Serviços e seus preços, juntamente com respectivos Taxas e Impostos.

              <br><br>Inicialmente, serão exibidos todos os Serviços prestados pelo Cartório.
              Para realizar uma pesquisa, basta inserir os filtros que julgar necessário, referentes ao Perído de Vigência,
              Serviço e Grupo de Serviço, sendo esses já cadastrados no Sistema.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtrar">

              <br><br>Assim, os Serviços, referentes aos dados inseridos serão listados, em ordem alfabética,
              onde poderão ser visualizados os dados de cada um.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível imprimir a lista de Serviços exibida na tela.
              Basta clicar em
              <img src="Prints Sagres/Consultas/imprimir.png" alt="Imprimir">, acima da lista de Serviços.
              Assim, a tela de impressão será exibida, onde o documento a ser impresso poderá ser visualizado e, posteriormente, a impressão
              poderá ser realizada.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Consultas/ConsTabPrecos.png" alt="Tabela Preço" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Consulta Preços</figcaption>
          </figure>
        </div>

        <div class='content2 L155' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Estoque Selo </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Estoque Selo', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Estoque de Selos de Atos TJ realizados pelo Cartório, já cadastrados no Sistema.
              <br>Serão exibidos, pelo Número, os Atos e Estoques de Selo, juntamente com os Serviços vinculados ao Ato selecionado.

              <br><br>Inicialmente, serão exibidos todos os Atos realizados pelo Cartório.
              Para realizar uma pesquisa, basta inserir os filtros que julgar necessário, referentes ao Ato, Estoque e
              Serviços, sendo esses já cadastrados no Sistema.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">

              <br><br>Assim, os Atos, referentes aos dados inseridos serão listados, ordenados pelos Números,
              onde poderão ser visualizados os Estoques e Serviços de cada um.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Consultas/EstoqueSelo.png" alt="Estoque Selo" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Consulta Estoque Selo</figcaption>
          </figure>
        </div>

        <div class='content2 L156' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Protocolos Vencidos/Vencer </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Protocolos Vencidos/Vencer', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Protocolos Vencidos ou a Vencer, realizados pelo Cartório, e já cadastrados no Sistema.
              <br>Serão exibidos, os Protocolos, juntamente com uma Descrição do mesmo, ao final da tela.
              <br>Os Protocolos Vencidos serão ordenados de acordo com o número de dias existentes após o vencimento.
              <br>Os Protocolos a Vencer serão ordenados de acordo com o número de dias restantes até o vencimento.

              <br><br>Para realizar uma Consulta, selecione o Status do Protocolo que deseja encontrar, Vencido ou a Vencer.
              <br>Inicialmente, serão pesquisados Protocolos com 60 dias até o Vencimento ou após o mesmo. Esse valor pode ser alterado,
              se necessário, no campo correspondente, após os campos de Status.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Consultas/atualizar.png" alt="Atualizar">, para atualizar a consulta.

              <br><br>Assim, os Protocolos, referentes aos filtros inseridos serão listados, ordenados pelos Números,
              onde poderão ser visualizados os dados de cada um.

              <br><br>Para realizar uma nova pesquisa, basta repetir as operações descritas acima.

              <br><br>Para Reprotocolar, Cancelar, Imprimir ou Gerar uma planilha Excel de um dos Protocolo listados, basta selecioná-lo e
              clicar no ícone correspondente, no canto superior esquerdo da tela, sendo, respectivamente:
              <img src="Prints Sagres/Consultas/botoes.png" alt="Botões">.

              <br><br>Para abrir o Pedido ou o próprio Protocolo, dentre os listados, basta selecioná-lo e
              clicar em <img src="Prints Sagres/Consultas/abrir.png" alt="Abrir">,
              no canto inferir direito da tela, e clicar na opção correspondente.
              <br>Assim, as telas de <a onclick="testeFilho('.L124')" style="cursor: pointer;">Pedido</a>
              e <a onclick="testeFilho('.L123')" style="cursor: pointer;">Protocolo</a>
              serão exibidas.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Consultas/ProtocolosVenc.png" alt="Protocolos Vencidos" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Consulta Protocolos</figcaption>
          </figure>
        </div>

        <div class='content2 L157' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Atos/Registros </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Atos/Registros', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Atos e Registros, realizados pelo Cartório, e já cadastrados no Sistema.
              <br>Assim, os nomes ds mesmos serão exibidos, juntamente com os números de Protocolo, ao final da tela.

              <br><br>Para realizar uma Consulta, selecione o que deseja encontrar, Ato ou Rascunho.
              <br>Outros filtros também poderão ser adicionados à pesquisa, como Tipo e Classe de Registro.
              <br>Sendo, necessário, é possível consultar os Atos e Registros referentes à Parte Envolvida, inserindo os dados da mesma,
              que deve ser uma Pessoa já cadastrada no Sistema.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtrar">, para exibir os resultados da consulta.

              <br><br>Assim, os Atos e Registros, referentes aos filtros inseridos serão listados,
              onde poderão ser visualizados os dados de cada um.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Para Imprimir, Gerar uma planilha Excel ou inserir filtros em relação aos Atos e Registros listados,
              basta clicar no ícone correspondente, logo acima dos resultados exibidos, sendo, respectivamente:
              <img src="Prints Sagres/Consultas/iconesAR.png" alt="Botões">.

            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Consultas/AtosRegistros.png" alt="AtosRegistros" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Consulta Atos/Registros</figcaption>
          </figure>
        </div>

        <div class='content2 L158' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Registros de LOGs do Sistema </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Registros de LOGs do Sistema', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de LOGs registrados no Sistema.
              <br>Inicialmente, todos serão exibidos, juntamente com os dados do LOG, como número, versão do Sistema, IP da máquina utilizada e
              número da sessão. Também será possível visualizar os dados do Operador referente ao LOG, bem como as operações realizadas por ele
              durante o acesso ao Sistema.

              <br><br>Para realizar uma Consulta, clique sobre o Nome de um dos dados dos LOGs, no topo da tabela, e insira o valor desse dado,
              referente ao LOG que deseja encontrar, na janela que abrirá.
              <br>Feito isso, clique em 'Ok' ou pressione a tecla 'Enter' do teclado, para exibir o resultado da consulta.

              <br><br>Assim, o primeiro LOGs, referente ao valor do campo inserido será selecionado,
              onde poderá ser visualizados os dados do mesmo, bem como os LOGs semenlhantes em relação ao valor do campo em questão.

              <br><br>Para realizar uma nova pesquisa, basta repetir as operações descritas acima.

              <br><br>Para Gerar uma planilha Excel ou inserir filtros em relação aos LOGs listados,
              basta clicar no ícone correspondente, no topo da tela, sendo, respectivamente:
              <img src="Prints Sagres/Consultas/btnlog.png" alt="Botões">.

            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Consultas/RegistrosLOG.png" alt="Registros LOGs" style="padding-left: 20px;">
            <figcaption style="padding-left: 340px;">Tela Consulta LOGs</figcaption>
          </figure>
        </div>

        <div class='content2 L159' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Indisponibilidades </h2>
          <div id='texto'>
            <p>
              Ao clicar em 'Indisponibilidades', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Ordens de Indisponibilidade realizados pelo Cartório e já cadastrados no Sistema.
              <br>Assim, será exibida a primeira Ordem, de acordo com o número da mesma,
              sendo possível navegar, através das setas do canto superior esquerdo, entre as Ordens cadastradas. Há também a
              possibilidade de visualizá-las em uma lista, localizada na aba 'Lista'.
              <br>Serão exibidos as Ordens e seus respectivos dados, também referentes ao Solicitante e ao Operador.

              <br><br>Para realizar uma pesquisa, basta inserir os filtros necessários, podendo se referirem, dentre outros, ao Protocolo ou ao tipo
              da mesma.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtrar">

              <br><br>Assim, as Ordens, referentes ao filtros inseridos serão listados,
              onde poderão ser visualizados os dados de cada um.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Consultas/Indisponibilidades.png" alt="Indisponibilidades" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Consulta Indisponibilidades</figcaption>
          </figure>
        </div>

        <div class='content2 L160' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Pedidos com Exigências Cumpridas </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Pedidos com Exigências Cumpridas', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Pedidos com Exigências Cumpridas realizados pelo Cartório e já cadastrados no Sistema.
              <br>Serão exibidos, em ordem alfabética, os Pedidos e seus respectivos dados.

              <br><br>Para realizar uma pesquisa, basta inserir as datas referentes ao Perído de cumprimento das Exigências dos Pedidos,
              , sendo essas já cadastrados no Sistema.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtrar">

              <br><br>Assim, os Pedidos, referentes ao período inserido serão listados, em ordem dos números dos mesmos,
              onde poderão ser visualizados os dados de cada um.

              <br><br>Para realizar uma nova pesquisa, basta repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível exibir a tela de cadastro de Pedido.
              Basta dar um duplo-clique sobre o Pedido que desejar, ou selecioná-lo dentre os listados e clicar em
              <img src="Prints Sagres/Consultas/select.png" alt="Selecionar">, acima da tabela de Pedidos.
              Assim, a tela de realização de Pedidos será exibida, onde o mesmo poderá ser visualizado, alterado ou excluído, se for o caso.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Consultas/Exigencias.png" alt="Exigências" width="110%" height="auto">
            <figcaption style="padding-left: 340px;">Tela Consulta Pedidos Exigências</figcaption>
          </figure>
        </div>

        <div class='content2 L161' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Selos Eletrônicos </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Selos Eletrônicos', a tela abaixo será exibida, onde poderão ser realizadas
              pesquisas de Selos Eletrônicos emitidos pelo Cartório, já cadastrados no Sistema.
              <br>Serão exibidos, pelo Número do Pedido, os Selos, juntamente com os dados dos mesmos, bem como o operador que o emitiu.

              <br><br>Para realizar uma pesquisa, basta inserir os filtros que julgar necessário, referentes ao Selo (Número, Período, Lote),
              Pedido e Operador.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtro">

              <br><br>Assim, os Selos, referentes aos dados inseridos serão listados, ordenados pelos Números dos Pedidos,
              onde poderão ser visualizados os dados dos mesmos.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Ajustes/Cadastro/TabelasInternas/Endereçamento/filtro.png" alt="Filtro">
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível imprimir a lista de Selos exibida na tela, referente à pesquisa realizada.
              Basta clicar em 'Imprimir', acima da tabela de Selos.
              Assim, a tela de impressão será exibida, onde o documento a ser impresso poderá ser visualizado e, posteriormente, a impressão
              poderá ser realizada.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Consultas/Selos.png" alt="Selos Eletrônicos">
            <figcaption style="padding-left: 390px;">Tela Consulta Selos</figcaption>
          </figure>
        </div>
<!-- Dashboard -->
        <div class='content2 L162' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Dashboard </h2>

          <h2  id="tplink"onclick="testeFilho('.L163')" style="cursor: pointer;"> ▸ Eventos Cartoriais </h2>
          <div id='texto'>
            <p>
              Exibir um painel com gráficos relativos aos Eventos realizados pelo Cartório em um determinado
              período.
            </p>
          </div>

          <h2  id="tplink"onclick="testeFilho('.L164')" style="cursor: pointer;"> ▸ Financeiro </h2>
          <div id='texto'>
            <p>
              Exibir um painel com gráficos relativos às operações financeiras realizadas pelo Cartório
              em um determinado período.
            </p>
          </div>

        </div>

        <div class='content2 L163' hidden=true>
            <h2 id="AltTop" onclick="testeFilho('.L162')" style="cursor: pointer;"> Dashboard ▸ Eventos Cartoriais </h2>

            <div id="texto">
              <p>
                Ao clicar em 'Eventos Cartoriais', a tela abaixo será exibida, onde poderão ser visualizados gráficos que
                ilustram os Eventos realizados pelo Cartório entre as datas selecionadas no campo 'Período', localizado
                no topo do painel.

                <br><br>Para visualizar os Eventos dentro de um período de datas, basta inserir as datas no campo correspondente,
                ou alternar entre os dias da data em questão através das setas laterais aos campos.
                <br>Feito isso, basta clicar em
                <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtrar">
                para aplicar o filtro inserido e exibir o painel de acordo com o mesmo.

                <br><br>Para cada Evento ilustrado no painel é possível selecionar filtros em relação a aplicação do
                período inserido anteriormente. Assim, as datas podem ser aplicadas à Data de Inclusão, Vencimento ou
                Cancelamento, por exemplo.
                <br>Após a inserção de tais filtros, basta clicar em
                <img src="Prints Sagres/Matricula/filtrar.png" alt="Filtrar">
                para exibir os gráficos de acordo com os filtros inseridos para cada Evento.
              </p>
            </div>
            <br><br>

            <figure>
              <img src="Prints Sagres/Consultas/Dashboards/Eventos.png" alt="Dashboard Eventos" width="110%" height="auto">
              <figcaption style="padding-left: 390px;">Tela Dashboard Eventos</figcaption>
            </figure>
          </div>

        <div class='content2 L164' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L162')" style="cursor: pointer;"> Dashboard ▸ Financeiro </h2>
          <img src="Prints Sagres/Consultas/Dashboard/Financeiro.png" alt="Dashboard Financeiro">
        </div>
<!-- Pesquisa a Base de Dados -->
        <div class='content2 L165' hidden=true>
          <h2 id="AltTop" onclick="testeFilho('.L153')" style="cursor: pointer;"> Consultas ▸ Pesquisa a Base de Dados </h2>

          <div id='texto'>
            <p>
              Ao clicar em 'Pesquisa a Base de Dados', a tela abaixo será exibida, onde poderão ser realizadas
              consultas a Base de Dados do Sistema, sendo estas já cadastradas.
              <br>Serão exibidos, de acordo com o Código, as Consultas, juntamente com os dados das mesmas, bem como o operador que a incluiu.

              <br><br>Para realizar uma pesquisa, basta selecionar, no topo da tela, o Grupo ao qual a Consulta pertence.

              <br><br>Feito isso, clique em
              <img src="Prints Sagres/Consultas/filtrar.png" alt="Filtrar">, no menu superior.

              <br><br>Assim, as Consultas, referentes ao Grupo inserido serão listadas, onde poderão ser visualizados os dados dos mesmos.

              <br><br>Para realizar uma nova pesquisa, basta clicar em
              <img src="Prints Sagres/Consultas/limpf.png" alt="Limpar Filtro">.
              e repetir as operações descritas acima.

              <br><br>Caso seja necessário, é possível realizar uma Consulta, dentre as listadas.
              <br>Para isso, basta selecionar qual deseja executar e clicar em
              <img src="Prints Sagres/Consultas/executar.png" alt="Executar">.
              Assim, os resultados da consulta em questão serão exibidos na aba 'Resultado', onde poderão ser visualizados os dados
              correspondentes à tal consulta.
            </p>
          </div>
          <br><br>
          <figure>
            <img src="Prints Sagres/Consultas/PesquisaBase.png" alt="Pesquisa a Base" width="110%" height="auto">
            <figcaption style="padding-left: 390px;">Tela Consulta Base de Dados</figcaption>
          </figure>
        </div>

        <!-- <div class='content2 L154' hidden=true>
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
        </div>

        <div class='content2 L155' hidden=true>
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
        </div> -->

        <br><br><br><br>

      </div>
      <!-- <footer>
        <p>&copy; 2018 Sagres Informática e Comunicação LTDA. Todos os direitos reservados. </p>
      </footer> -->

    </div>

    <!-- <footer class='page-footer font-small blue pt-4 mt-4'>
        <div class='footer-copyright py-3 text-center'>
          © 2018
          <a href='http://www.sagres.com.br' target="_blank"> Sagres Informática e Comunicação LTDA.  </a>
          Todos os direitos reservados.
        </div>
    </footer> -->

    <div class="col-sm-3 sidenav">

      <div class="ms1"><input type="search" id="my-search" placeholder="Pesquisar Tópico.." title="Pesquisar Tópico pelo Nome"></div>

      <?php
				require_once("banco/confBD.php");

				echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>";
				echo "<script src='src/jquery.treefilter.js?version=99'></script>";
				echo "<script src='jquery.mark.min.js?version=2'></script>";
        // echo "<link type='text/css' rel='stylesheet' href='src/jquery.treefilter.css'>";

        echo "<script>
								function teste(div) {
                  $('.content1').css('display', 'none');
									$('.content2').css('display', 'none');
									$(div).css('display', 'inline');
									// window.scrollTo(0,0);
                  // if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
                  //     window.scrollTo(0,0);
                  // }
                  $('.ms3').css('display', 'inline');
								}
							</script>";

              echo "<script>
      								function fechapesq(div) {
                        $('.content1').css('display', 'none');
                        $('.content2').css('display', 'none');
                        $(div).css('display', 'inline');
                        $('.ms3').css('display', 'none');
      								}
      							</script>";

        echo "<script>
                function testeFilho(div) {
                  $('.content1').css('display', 'none');
      						$('.content2').css('display', 'none');
      						$(div).css('display', 'inline');
      						window.scrollTo(0,0);
                  // $('li.tf-child-false').addClass('tf-selected');
                  $('.ms3').css('display', 'inline');
                }
              </script>";

        echo "<script>
              function testePai(div) {
                $('.content1').css('display', 'none');
                $('.content2').css('display', 'none');
                $(div).css('display', 'inline');
                window.scrollTo(0,0);
                $('li.tf-open').addClass('tf-search-result');
                $('.ms3').css('display', 'inline');
              }
              </script>";

        echo "<script>

              $(document).ready(function(){
                // var document_height = $(document).height();
                var tree_height = $(#my-tree).height();
                var sidenav = $('.sidenav');
                var sidenav_height = sidenav.height();

                if (sidenav_height < tree_height) {
                    sidenav.css('height', tree_height);
                }
              });

            </script>";

        echo "<script>
                  window.onscroll = function() {scrollFunction()};

                  function scrollFunction() {
                    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
                        document.getElementById('btn').style.display = 'block';
                    } else {
                        document.getElementById('btn').style.display = 'none';
                    }
                  }

                  function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
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
								  \$content = $('.content2'),
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

											while (j <= 154) {

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
													j=154;
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
            if ($arg[$i]['codP'] == 1 || $arg[$i]['codP'] == 18 || $arg[$i]['codP'] == 19 || $arg[$i]['codP'] == 20 || $arg[$i]['codP'] == 21
                    || $arg[$i]['codP'] == 22 || $arg[$i]['codP'] == 23 || $arg[$i]['codP'] == 25 || $arg[$i]['codP'] == 28 || $arg[$i]['codP'] == 30 ) {

                      echo '<li class="pai" id='.utf8_decode($arg[$i]['docNome']).'><div><span onclick="teste(\''.'.'.$arg[$i]['docNome'].'\');">'.html_entity_decode($arg[$i]['titulo']).'</span></div>';
						}
            else {
              echo '<li id='.utf8_decode($arg[$i]['docNome']).'><div><span onclick="teste(\''.'.'.$arg[$i]['docNome'].'\');">'.html_entity_decode($arg[$i]['titulo']).'</span></div>';
            }

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
  </div>
</div>
<!--
<footer class="container-fluid">
  <p>Footer Text</p>
</footer> -->

</body>

</html>
