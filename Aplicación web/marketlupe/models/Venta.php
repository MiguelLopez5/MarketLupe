<?php
  class Venta extends Database{
    public function show(){
      try {
        $r = parent::connect()->prepare("SELECT * FROM ventas AS v INNER JOIN empleados AS e ON v.IdEmpl=e.IdEmpl");
        $r->execute();
        return $r->fetchAll();
      } catch (Exception $e) {
        die("Error en Venta->show()" . $e->getMessage());
      }
    }

    public function searchData($dato){
      $r = parent::connect()->prepare("SELECT * FROM ventas INNER JOIN empleados ON ventas.IdEmpl=empleados.IdEmpl WHERE NomEmpl LIKE :term OR FechaVen LIKE :term OR PrecTotal LIKE :term OR IdCli LIKE :term");
      $r->bindValue('term', '%'.$dato.'%');
      $r->execute();
      return $r->fetchAll();
    }

    public function register($data){
      try {
        $r = parent::connect()->prepare("INSERT INTO ventas (IdEmpl,FechaVen,PrecTotal,IdCli) VALUES(?,?,?,?)");
        $r->bindParam(1, $data['empleado'], PDO::PARAM_INT);
        $r->bindParam(2, $data['fechav'], PDO::PARAM_STR);
        $r->bindParam(3, $data['preciot'], PDO::PARAM_INT);
        $r->bindParam(4, $data['cliente'], PDO::PARAM_INT);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Venta->register()" . $e->getMessage());
      }
    }

    public function delete_register($id){
      try {
        $r = parent::connect()->prepare("DELETE FROM ventas WHERE IdVenta = ?");
        $r->bindParam(1, $id, PDO::PARAM_INT);
        return $r->execute();
      } catch (Exception $e) {
        die("Error en Venta->delete_register()" . $e->getMessage());
      }
    }
  }

?>
