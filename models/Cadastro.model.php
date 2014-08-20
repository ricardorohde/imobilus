<?php 
	/*
		Model da classe de Cadastro de Usuários do Site
		@autor: Jordã França
	*/	
	class Cadastro extends Conexao {
		private $intCodigo;
		private $strLogin;
		private $strSenha;
		private $intCreci;
		private $strEmail;
		private $strNome;
		private $strHash;
		private $boolConfirmacao;
		
		
		public function getIntCodigo() {
			return $this->intCodigo;
		}
		public function setIntCodigo($intCodigo) {
			$this->intCodigo = $intCodigo;
		}
		public function getStrLogin() {
			return $this->strLogin;
		}
		public function setStrLogin($strLogin) {
			$this->strLogin = $strLogin;
		}
		public function getStrSenha() {
			return $this->strSenha;
		}
		public function setStrSenha($strSenha) {
			$this->strSenha = $strSenha;
		}
		public function getIntCreci() {
			return $this->intCreci;
		}
		public function setIntCreci($intCreci) {
			$this->intCreci = $intCreci;
		}
		public function getStrEmail() {
			return $this->strEmail;
		}
		public function setStrEmail($strEmail) {
			$this->strEmail = $strEmail;
		}
		public function getStrNome() {
			return $this->strNome;
		}
		public function setStrNome($strNome) {
			$this->strNome = $strNome;
		}
		public function getStrHash() {
			return $this->strHash;
		}
		public function setStrHash($strHash) {
			$this->strHash = $strHash;
		}
		public function getBoolConfirmacao() {
			return $this->boolConfirmacao;
		}
		public function setBoolConfirmacao($boolConfirmacao) {
			$this->boolConfirmacao = $boolConfirmacao;
		}
		
		public function Inserir() {
			$objConexao = Cadastro::getConexao();
			$objInsert = $objConexao->prepare("INSERT INTO tb_cadastros (
										  DSC_LOGIN,
										  DSC_SENHA,
										  NUM_CRECI,
										  DSC_EMAIL,
										  NOM_USUARIO,
										  DSC_HASH) VALUES
										  (:login, :senha , :creci, :email, :nome, :hash)");
			
			$objInsert->bindValue("login", self::getStrLogin(), PDO::PARAM_STR);
			$objInsert->bindValue("senha", self::getStrSenha(), PDO::PARAM_STR);
			$objInsert->bindValue("creci", self::getIntCreci(), PDO::PARAM_INT);
			$objInsert->bindValue("email", self::getStrEmail(), PDO::PARAM_STR);
			$objInsert->bindValue("nome", self::getStrNome(), PDO::PARAM_STR);
			$objInsert->bindValue("hash", self::getStrHash(), PDO::PARAM_STR);
			
			parent::Create($objInsert);
			
		}
		
		public function getCadastro() {
			$objConexao = Cadastro::getConexao();
			$objConsulta = $objConexao->prepare("SELECT  DSC_LOGIN,
										  DSC_SENHA,
										  NUM_CRECI,
										  DSC_EMAIL,
										  NOM_USUARIO,
										  DSC_HASH
										  FROM 
										  tb_cadastros
										  WHERE COD_CADASTRO = :cod_cadastro
			");
			$objConsulta->bindValue("cod_cadastro", $this->getIntCodigo(), PDO::PARAM_INT);
			$objRetorno = parent::Read($objConsulta);
			if($objRetorno->rowCount() > 0) {
				foreach ($objRetorno->fetchAll() as $arrResult) {
					self::setIntCreci($arrResult['NUM_CRECI']);
					self::setStrEmail($arrResult['DSC_EMAIL']);
					self::setStrHash($arrResult['DSC_HASH']);
					self::setStrLogin($arrResult['DSC_LOGIN']);
					self::setStrNome($arrResult['NOM_USUARIO']);
					self::setStrSenha($arrResult['DSC_SENHA']);
				}
				return true;
			}
			else 
				return false;
		}
		
		private static function getConexao() {
			return Conexao::$objPDO;
		}

	}
?>