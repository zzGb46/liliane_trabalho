<?php

class Professor extends Model
{


    public function buscarProf($email){
        $sql = "SELECT * FROM tb_professor WHERE email_professor = :email AND status_professor = 'ativo'";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



}
