<?php
class UserData {
	public static $tablename = "user";


	public function Userdata(){
		$this->name = "";
		$this->lastname = "";
		$this->username = "";
		$this->image = "";
		$this->password = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into user (name,lastname,username,password,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->username\",\"$this->password\",$this->created_at)";
		Executor::doit($sql);
	}
	public function add_admin(){
		$sql = "insert into user (name,lastname,username,password,is_admin,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->username\",\"$this->password\",1,$this->created_at)";
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
		$data = new UserData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->lastname = $r['lastname'];
			$data->username = $r['username'];
			$data->password = $r['password'];
			$data->created_at = $r['created_at'];

			$data->is_admin = $r['is_admin'];
			$data->is_cajero = $r['is_cajero'];
			$data->is_mesero = $r['is_mesero'];
			$data->is_tesorero = $r['is_tesorero'];


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