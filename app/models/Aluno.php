<?php

class Aluno extends Model
{

    public function buscarAluno($email)
    {

        $sql = "SELECT * FROM tb_aluno WHERE email_aluno = :email AND status_aluno = 'Ativo';";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
   
   
    }
}
