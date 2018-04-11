<?php

class registroModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function checkEmail($email) {
        $result = $this->_db->prepare("SELECT * FROM usuarios WHERE email = :email;");
        $result->bindParam(":email", $email, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetch()) {
            return true;
        }

        return false;
    }

    public function checkUser($user) {
        $result = $this->_db->prepare("SELECT * FROM usuarios WHERE usuario = :user;");
        $result->bindParam(":user", $user, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetch()) {
            return true;
        }

        return false;
    }

    public function addUser($name, $user, $pass, $email, $imagen) {
        $statement = $this->_db->prepare("CALL agregarUsuario(:name,:user,:imagen,:pass,:email);");
        $clave = Cifrado::getHash("sha1", $pass, HASH_KEY);
        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":user", $user, PDO::PARAM_STR);
        $statement->bindParam(":pass", $clave, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":imagen", $imagen, PDO::PARAM_STR);


        $statement->execute();
    }

    public function editUser($img,$name, $user, $email, $phone, $sexo, $estado,$ocupacion, $id = false) {
        if (!$id) {
            $id = Session::get("id");
        }
        // echo $estado;exit;
        $statement = $this->_db->prepare("CALL modificarUsuario(:img,:name,:user,:email,:phone,:sexo,:estadoCivil,:ocupacion,:id);");
        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":user", $user, PDO::PARAM_STR);
        $statement->bindParam(":img", $img, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":ocupacion", $ocupacion, PDO::PARAM_STR);
        $statement->bindParam(":phone", $phone, PDO::PARAM_STR);
        $statement->bindParam(":sexo", $sexo, PDO::PARAM_STR);
        $statement->bindParam(":estadoCivil", $estado, PDO::PARAM_STR);
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        

        $statement->execute();
    }

    public function getUserById($id) {

        $strt = $this->_db->prepare("SELECT * FROM usuarios WHERE id = :id");
        $strt->bindParam(":id", $id, PDO::PARAM_STR);
        $strt->execute();
        $result = $strt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}
