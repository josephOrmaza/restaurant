<?php
class ClienteData {
	public static $tablename = "clientes";


	public function ClienteData(){
		$this->nombres = "";
		$this->apellidos = "";
		$this->codigo = "";
		$this->sexo = "";
		$this->direccion = "";
		$this->fecha_nac = "";
		$this->cedula = "";
		$this->tipo_cliente = "";
		$this->email = "";
		$this->celular = "";
		
	}

	public function add_cliente(){
		$sql = "insert into clientes (nombres,apellidos,codigo,sexo,direccion,fecha_nac,cedula,tipo_cliente,email,celular) ";
		$sql .= "value (\"$this->nombres\",\"$this->apellidos\",\"$this->codigo\",\"$this->sexo\",$this->direccion,\"$this->fecha_nac\",\"$this->cedula\",$this->tipo_cliente,\"$this->email\",\"$this->celular)";
		Executor::doit($sql);
	}
	public function add_admin(){
		$sql = "insert into clientes (name,lastname,clientesname,password,is_admin,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->clientesname\",\"$this->password\",1,$this->created_at)";
		Executor::doit($sql);
	}

	public function add_cajero(){
		$sql = "insert into user (name,lastname,username,password,is_cajero,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->username\",\"$this->password\",1,$this->created_at)";
		Executor::doit($sql);
	}

	public function add_mesero(){
		$sql = "insert into user (name,lastname,username,password,is_mesero,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->username\",\"$this->password\",1,$this->created_at)";
		Executor::doit($sql);
	}

	public function add_tesorero(){
		$sql = "insert into user (name,lastname,username,password,is_tesorero,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->username\",\"$this->password\",1,$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",lastname=\"$this->lastname\",username=\"$this->username\",image=\"$this->image\",password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ClienteData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->nombres = $r['nombres'];
			$data->apellidos = $r['apellidos'];
			$data->codigo = $r['codigo'];
			$data->sexo = $r['sexo'];
			$data->direccion = $r['direccion'];
			$data->fecha_nac = $r['fecha_nac'];
			$data->cedula = $r['cedula'];
			$data->tipo_cliente = $r['tipo_cliente'];
			$data->email = $r['email'];
			$data->celular = $r['celular'];



			$found = $data;
			break;
		}
		return $found;
	}

	public static function getByMail($username){
		$sql = "select * from ".self::$tablename." where username=\"$username\"";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->username = $r['username'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new ClienteData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombres = $r['nombres'];
			$array[$cnt]->apellidos = $r['apellidos'];
			$array[$cnt]->codigo = $r['codigo'];
			$array[$cnt]->sexo = $r['sexo'];

			$array[$cnt]->direccion = $r['direccion'];
			$array[$cnt]->fecha_nac = $r['fecha_nac'];
			$array[$cnt]->cedula = $r['cedula'];
			$array[$cnt]->tipo_cliente = $r['tipo_cliente'];
			$array[$cnt]->email = $r['email'];
			$array[$cnt]->celular = $r['celular'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllMeseros(){
		$sql = "select * from ".self::$tablename." where is_mesero=1";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->username = $r['username'];
			$array[$cnt]->password = $r['password'];

			$array[$cnt]->is_admin = $r['is_admin'];
			$array[$cnt]->is_mesero = $r['is_mesero'];
			$array[$cnt]->is_cajero = $r['is_cajero'];
			$array[$cnt]->is_tesorero = $r['is_tesorero'];

			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->username = $r['username'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


}

?>