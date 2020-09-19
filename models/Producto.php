<?php
  class Producto extends Database{
    public function showCategory($cate, $order){
      try {
        $r = parent::connect()->prepare("SELECT * FROM productos WHERE idCate = ? ORDER BY ?");
        $r->bindParam(1, $cate, PDO::PARAM_INT);
        $r->bindParam(2, $order, PDO::PARAM_STR);
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Usuario->showCategory()" . $e->getMesagge());
      }
    }

    public function showOrder($order){
      try {
        $r = parent::connect()->prepare("SELECT * FROM productos ORDER BY ?");
        $r->bindParam(1, $order, PDO::PARAM_STR);
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Usuario->showCategory()" . $e->getMesagge());
      }
    }

    public function showTotal($cate){
      try {
        $r = parent::connect()->prepare("SELECT COUNT(*) AS total FROM productos WHERE idCate = ?");
        $r->bindParam(1, $cate, PDO::PARAM_INT);
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Usuario->showCategory()" . $e->getMesagge());
      }
    }

    public function show(){
      try {
        $r = parent::connect()->prepare("SELECT * FROM productos INNER JOIN categoria ON productos.idCate=categoria.idCate");
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Producto->show()" . $e->getMessage());
      }
    }

    public function searchData($dato){
      $r = parent::connect()->prepare("SELECT * FROM productos INNER JOIN categoria ON productos.idCate=categoria.idCate WHERE NomProd LIKE :term OR NomCate LIKE :term OR PrecEnt LIKE :term OR PrecSal LIKE :term OR Cant LIKE :term");
      $r->bindValue('term', '%'.$dato.'%');
      $r->execute();
      return $r->fetchAll();
    }

    public function register($data, $location){
      try {
        $r = parent::connect()->prepare("INSERT INTO productos (NomProd,idCate,PrecEnt,PrecSal,Cant,linkImg) VALUES(?,?,?,?,?,?)");
        $r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
        $r->bindParam(2, $data['categoria'], PDO::PARAM_STR);
        $r->bindParam(3, $data['precioe'], PDO::PARAM_INT);
        $r->bindParam(4, $data['precios'], PDO::PARAM_INT);
        $r->bindParam(5, $data['cantidad'], PDO::PARAM_INT);
        $r->bindParam(6, $location, PDO::PARAM_STR);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Producto->register()" . $e->getMessage());
      }
    }

    public function avoid_repetition($data){
      try {
        $r = parent::connect()->prepare("SELECT * FROM productos WHERE NomProd=? AND idCate=? AND PrecEnt=? AND PrecSal=? AND Cant=? AND linkImg=?");
        $r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
        $r->bindParam(2, $data['categoria'], PDO::PARAM_STR);
        $r->bindParam(3, $data['precioe'], PDO::PARAM_INT);
        $r->bindParam(4, $data['precios'], PDO::PARAM_INT);
        $r->bindParam(5, $data['cantidad'], PDO::PARAM_INT);
        $r->bindParam(6, $location, PDO::PARAM_STR);
        $r->execute();
        return $r->rowCount();
      } catch (Exception $e) {
        die("Error en Producto->avoid_repetition()" . $e->getMessage());
      }
    }

    public function find($id){
      try {
        $r = parent::connect()->prepare("SELECT * FROM productos INNER JOIN categoria ON productos.idCate=categoria.idCate WHERE productos.IdProd = ?");
        $r->bindParam(1, $id, PDO::PARAM_INT);
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Producto->find()" . $e->getMessage());
      }
    }

    public function update_register($data, $location){
      try {
        $r = parent::connect()->prepare("UPDATE productos SET NomProd = ?, idCate = ?,
          PrecEnt = ?, PrecSal = ?, Cant = ?, linkImg = ? WHERE IdProd = ?");
        $r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
        $r->bindParam(2, $data['categoria'], PDO::PARAM_STR);
        $r->bindParam(3, $data['precioe'], PDO::PARAM_INT);
        $r->bindParam(4, $data['precios'], PDO::PARAM_INT);
        $r->bindParam(5, $data['cantidad'], PDO::PARAM_INT);
        $r->bindParam(6, $location, PDO::PARAM_STR);
        $r->bindParam(7, $data['idpro'], PDO::PARAM_INT);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Producto->update_register()" . $e->getMessage());
      }
    }

    public function delete_register($id){
      try {
        $r = parent::connect()->prepare("DELETE FROM productos WHERE IdProd = ?");
        $r->bindParam(1, $id, PDO::PARAM_INT);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Producto->delete_register()" . $e->getMessage());
      }
    }
  }

?>
