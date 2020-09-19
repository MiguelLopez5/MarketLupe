<?php
  class Usuario extends Database{
    public function show(){
      try {
        $r = parent::connect()->prepare("SELECT e.*, r.* FROM empleados AS e INNER JOIN roles AS r ON e.IdRol=r.IdRol");
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Usuario->show()" . $e->getMessage());
      }
    }

    public function searchData($dato){
      $r = parent::connect()->prepare("SELECT * FROM empleados INNER JOIN roles ON empleados.IdRol=roles.IdRol WHERE NomEmpl LIKE :term OR ApelEmpl LIKE :term OR Edad LIKE :term OR NumTel LIKE :term OR NomRol LIKE :term");
      $r->bindValue('term', '%'.$dato.'%');
      $r->execute();
      return $r->fetchAll();
    }

    public function registerData($data, $location){
      try {
        $r = parent::connect()->prepare("INSERT INTO empleados (NomEmpl,ApelEmpl,Edad,NumTel,Passw,IdRol,linkFoto) VALUES (?,?,?,?,?,?,?)");
        $r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
        $r->bindParam(2, $data['apellido'], PDO::PARAM_STR);
        $r->bindParam(3, $data['edad'], PDO::PARAM_STR);
        $r->bindParam(4, $data['telefono'], PDO::PARAM_STR);
        $r->bindParam(5, $data['contrasena'], PDO::PARAM_STR);
        $r->bindParam(6, $data['rol'], PDO::PARAM_INT);
        $r->bindParam(7, $location, PDO::PARAM_STR);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Usuario->registerData()" . $e->getMessage());
      }
    }

    public function avoid_repetition($data){
      try {
        $r = parent::connect()->prepare("SELECT * FROM empleados WHERE NomEmpl = ? AND ApelEmpl = ? AND Edad = ? AND NumTel = ? AND Passw = ? AND IdRol = ?");
        $r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
        $r->bindParam(2, $data['apellido'], PDO::PARAM_STR);
        $r->bindParam(3, $data['edad'], PDO::PARAM_INT);
        $r->bindParam(4, $data['telefono'], PDO::PARAM_INT);
        $r->bindParam(5, $data['contrasena'], PDO::PARAM_INT);
        $r->bindParam(6, $data['rol'], PDO::PARAM_STR);
        $r->execute();
        return $r->rowCount();
      } catch (Exception $e) {
        die("Error en Usuario->avoid_repetition()" . $e->getMessage());
      }
    }

    public function find($id){
      try {
        $r = parent::connect()->prepare("SELECT * FROM empleados WHERE IdEmpl = ?");
        $r->bindParam(1, $id, PDO::PARAM_INT);
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Usuario->find()" . $e->getMessage());
      }
    }

    public function updateData($data, $location){
      try {
        $r = parent::connect()->prepare("UPDATE empleados SET NomEmpl = ?, ApelEmpl = ?, Edad=?, NumTel = ?, Passw = ?, IdRol = ?, linkFoto = ? WHERE IdEmpl = ?");
        $r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
        $r->bindParam(2, $data['apellido'], PDO::PARAM_STR);
        $r->bindParam(3, $data['edad'], PDO::PARAM_STR);
        $r->bindParam(4, $data['telefono'], PDO::PARAM_STR);
        $r->bindParam(5, $data['contrasena'], PDO::PARAM_STR);
        $r->bindParam(6, $data['rol'], PDO::PARAM_INT);
        $r->bindParam(7, $location, PDO::PARAM_STR);
        $r->bindParam(8, $data['usuario'], PDO::PARAM_INT);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Usuario->updateData()" . $e->getMessage());
      }
    }

    public function deleteData($id){
      try {
        $r = parent::connect()->prepare("DELETE FROM empleados WHERE IdEmpl = ?");
        $r->bindParam(1, $id, PDO::PARAM_INT);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Usuario->deleteData()" . $e->getMessage());
      }
    }
  }

?>
