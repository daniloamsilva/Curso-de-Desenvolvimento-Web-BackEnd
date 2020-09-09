<?php

	require "../../app_lista_tarefas/tarefa.model.php";
	require "../../app_lista_tarefas/tarefa.service.php";
	require "../../app_lista_tarefas/conexao.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if( $acao == 'inserir'){
		$tarefa = new Tarefa();
		$tarefa->__set('tarefa', $_POST['tarefa']);

		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->inserir();

		header('location: nova_tarefa.php?inclusao=1');
	} elseif ($acao == 'recuperar') {
		
		$tarefa = new Tarefa();
		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefas = $tarefaService->recuperar();

	} elseif ($acao == 'atualizar') {

		$tarefa = new Tarefa();
		$tarefa->id = $_POST['id'];
		$tarefa->tarefa = $_POST['tarefa'];

		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		if ($tarefaService->atualizar()){
			header('location: todas_tarefas.php');
		}

	}

?>