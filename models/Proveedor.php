<?php
  class Proveedor extends Database{
    public function show(){
      try {
        $r = parent::connect()->prepare("SELECT * FROM proveedor");
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Proveedor->show()" . $e->getMessage());
      }
    }

    public function searchData($dato){
      $r = parent::connect()->prepare("SELECT * FROM proveedor WHERE NomProve LIKE :term OR ApelProve LIKE :term OR TelProve LIKE :term OR EmailProve LIKE :term");
      $r->bindValue('term', '%'.$dato.'%');
      $r->execute();
      return $r->fetchAll();
    }

    public function register($data){
      try {
        $r = parent::connect()->prepare("INSERT INTO proveedor (NomProve,ApelProve,TelProve,EmailProve) VALUES(?,?,?,?)");
        $r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
        $r->bindParam(2, $data['apellido'], PDO::PARAM_STR);
        $r->bindParam(3, $data['telefono'], PDO::PARAM_STR);
        $r->bindParam(4, $data['correoe'], PDO::PARAM_STR);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Proveedor->register()" . $e->getMessage());
      }
    }

    public function avoid_repetition($data){
      try {
        $r = parent::connect()->prepare("SELECT * FROM proveedor WHERE NomProve=? AND ApelProve=? AND TelProve=? AND EmailProve=?");
        $r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
        $r->bindParam(2, $data['apellido'], PDO::PARAM_STR);
        $r->bindParam(3, $data['telefono'], PDO::PARAM_STR);
        $r->bindParam(4, $data['correoe'], PDO::PARAM_STR);
        $r->execute();
        return $r->rowCount();
      } catch (Exception $e) {
        die("Error en Proveedor->avoid_repetition()" . $e->getMessage());
      }
    }

    public function find($id){
      try {
        $r = parent::connect()->prepare("SELECT * FROM proveedor WHERE IdProve = ?");
        $r->bindParam(1, $id, PDO::PARAM_INT);
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Proveedor->find()" . $e->getMessage());
      }
    }

    public function update_register($data){
      try {
        $r = parent::connect()->prepare("UPDATE proveedor SET NomProve = ?, ApelProve = ?, TelProve = ?, EmailProve = ? WHERE IdProve = ?");
        $r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
        $r->bindParam(2, $data['apellido'], PDO::PARAM_STR);
        $r->bindParam(3, $data['telefono'], PDO::PARAM_STR);
        $r->bindParam(4, $data['correoe'], PDO::PARAM_STR);
        $r->bindParam(5, $data['proveedor'], PDO::PARAM_INT);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Proveedor->update_register()" . $e->getMessage());
      }
    }

    public function delete_register($id){
      try {
        $r = parent::connect()->prepare("DELETE FROM proveedor WHERE IdProve = ?");
        $r->bindParam(1, $id, PDO::PARAM_INT);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Proveedor->delete_register()" . $e->getMessage());
      }
    }
  }

?>
