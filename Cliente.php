<?php 

require_once 'Tables.php';

class Cliente extends Tables
{
	function __construct(int $id = NULL, string $nome = NULL, string $email = NULL, string $senha = NULL)
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
	}
	/**
	* O required serve para informar se o atributo é obrigatório

	* @name=id;
	* @required=false;


	*/
	protected $id;
	/**
	* @name=nome;
	* @required=true;
	*/
	protected $nome;
	/**
	* @name=email;
	* @required=true;
	*/
	protected $email;
	/**
	* @name=senha;
	* @required=true;
	*/
	protected $senha;

	




}

 ?>