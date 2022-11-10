<?php
namespace app\models;

class Profile extends \app\core\Model{
	public function __toString(){
		return "$this->fullname";
	}

	public function getAll(){
		$SQL = "SELECT * FROM profile";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetchAll();
	}

	public function get($profile_id){
		$SQL = "SELECT * FROM profile WHERE profile_id=:profile_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO profile(fullname, address, city, zipcode, state, country) VALUES (:fullname, :address, :city, :zipcode, :state, :country)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['fullname'=>$this->fullname,
						'address'=>$this->address,
						'city'=>$this->city,
						'zipcode'=>$this->zipcode,
                        'state'=>$this->state,
                        'country'=>$this->country]);
		return self::$_connection->lastInsertId();
	}

	public function update(){
		$SQL = "UPDATE profile SET fullname=:fullname, address=:address, city=:city, zipcode=:zipcode, state=:state, country=:country 
        WHERE profile_id=:profile_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['fullname'=>$this->fullname,
						'address'=>$this->address,
						'city'=>$this->city,
						'zipcode'=>$this->zipcode,
                        'state'=>$this->state,
                        'country'=>$this->country]);
	}
}