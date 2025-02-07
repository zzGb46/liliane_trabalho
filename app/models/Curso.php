<?php



class Curso extends Model{


public function getCursos($limite = 3){

    $sql = "SELECT * FROM tb_curso ORDER BY RAND() LIMIT :limite";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limite', (int)$limite, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

}


}