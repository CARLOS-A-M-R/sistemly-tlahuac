<?php 

class Conexion
{

	//private $servidor = "localhost";
	private $db = "sistemly";
	//private $port = 3306;
	private $charset = "utf8";
	private $usuario = "DBALILY";
	private $contrasena = "seguridad2021";
	//private $unix_socket = "/var/run/mysql/mysql.sock";
	public $pdo = null;
	private $opciones = [PDO::ATTR_CASE => PDO::CASE_LOWER, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
	function __construct()
	{
		$this->pdo = new PDO("mysql:host=192.168.1.184:3306;dbname={$this->db};charset={$this->charset}", $this->usuario, $this->contrasena, $this->opciones);
	}

		/*public function getServidor():string
	{
		return $this->servidor;
	}*/

		public function getdb():string
	{
		return $this->db;
	}

		/*public function getPort():string
	{
		return $this->port;
	}*/

		public function getCharset():string
	{
		return $this->charset;
	}

		public function getUsuario():string
	{
		return $this->usuario;
	}

		public function getContrasena():string
	{
		return $this->contrasena;
	}

	/*public function getUnixSocket()
	{
		return $thi->unix_socket;
	}*/



		     static public function conectar()
		     {
		          $conexion = new PDO("mysql:host=192.168.1.184:3306;dbname=sistemly",
		                              "DBALILY","seguridad2021");

		          $conexion->exec("set names utf8");
		          
		          return $conexion;
		     }

   
}

               

?>