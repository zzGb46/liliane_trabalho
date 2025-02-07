<?php



class Depoimento extends Model
{
    public function getTodosDepoimentos()
    {

        $sql = "SELECT nome_cliente, descricao_depoimento, nota_depoimento, foto_cliente, alt_foto_cliente 
        FROM tb_depoimento d
        INNER JOIN tb_cliente a ON d.id_cliente = a.id_cliente
        WHERE status_depoimento = 'Aprovado'
        ORDER BY nota_depoimento DESC, nome_cliente ASC;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDepoimentoPositivo()
    {
        $sql = "SELECT COUNT(id_depoimento) AS qtde_depoimento FROM tb_depoimento WHERE nota_depoimento >= 4";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
