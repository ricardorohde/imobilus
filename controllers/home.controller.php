<?php

	class HomeController extends Page{
		public function index() {
			require("views/home/home.view.php");
		}
		
		public function add() {
			$objCadastro = new Cadastro();
			$objCadastro->setIntCreci($_POST['creci']);
			$objCadastro->setStrEmail($_POST['email']);
			$objCadastro->setStrNome($_POST['nome']);
			$objCadastro->setStrLogin(Helpers::sha512($_POST['creci'] . $_POST['login']));
			$objCadastro->setStrSenha(Helpers::sha512($_POST['creci'] . $_POST['senha']));
			$objCadastro->setStrHash($strHash = Helpers::sha512(Helpers::geraSenha()));
			
			$objCadastro->Inserir();
			$objEmail = new Email();
			$objEmail->confirmaCadastro($_POST['email'], $_POST['nome'], $strHash);
			
		}
		
		public function cadastrar() {
			require("views/cadastro/cadastro.view.php");
		}
		
		public function consultarId () {
			$objCadastro = new Cadastro();
			$objCadastro->setIntCodigo($_POST['id']);
			$objCadastro->getCadastro();
		}
		
		public function error() {
			require("views/erro/erro.view.php");
		}
		
	}
	
	//Verifica Metodo na classe
	$objClass = new HomeController();
	Helpers::getMetodo($objClass, $strMetodo);