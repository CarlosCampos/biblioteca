<?php
namespace br\com\carloscampos\biblioteca\entidades
{

	 class Bibliotecario extends Pessoa {
		private $login;
		private $senha;

		public function setLogin(){
			$this->login = $login;}

			public function setSenha(){
				$this->senha = $senha;}

			public function getLogin(){
				return $this->login = $login;
			}

			public function getSenha(){
				return $this->senha = $senha;
			}
	}
}