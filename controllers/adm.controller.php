<?php

	class AdmController extends Page{
		public function index() {
			require("views/adm/cadastro.view.php");
		}
		
		public function painel() {
			require("../views/adm/painel.view.php");
		}
		
		public function error() {
			require("views/adm/erro.view.php");
		}
	}
	
	//Verifica Metodo na classe
	$objClass = new AdmController();
	Helpers::getMetodo($objClass, $strMetodo);