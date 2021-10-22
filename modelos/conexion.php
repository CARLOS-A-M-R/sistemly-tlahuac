<?php 

class Conexion
{

	//private $servidor = "localhost";
	private $db = "hd8dbtyivh8r9p9l";
	//private $port = 3306;
	private $charset = "utf8";
	private $usuario = "svp0qvpgs31vg11d";
	private $contrasena = "oj2lmunza7o1itun";
	//private $unix_socket = "/var/run/mysql/mysql.sock";
	public $pdo = null;
	private $opciones = [PDO::ATTR_CASE => PDO::CASE_LOWER, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
	function __construct()
	{
		$this->pdo = new PDO("mysql:host=uyu7j8yohcwo35j3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306;dbname={$this->db};charset={$this->charset}", $this->usuario, $this->contrasena, $this->opciones);
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
		          $conexion = new PDO("mysql:host=uyu7j8yohcwo35j3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306;dbname=hd8dbtyivh8r9p9l",
		                              "svp0qvpgs31vg11d","oj2lmunza7o1itun");

		          $conexion->exec("set names utf8");
		          
		          return $conexion;
		     }

   
}

               

?>