<?php


class RoomModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllRoom()
    {
        $sql = "SELECT * FROM phong p inner join loaiphong l on p.loai_phong_id = l.id_loaiphong ";
        return $this->db->select($sql);
    }

    public function getById($id){
        $sql = "SELECT * FROM phong WHERE id_phong = :id";
        $data = [
            "id" => $id,
        ];
        return $this->db->selectById($sql, $data);
    }

    public function update($data, $id)
    {
        $idUpdate = " id_loaiphong = " . $id;
        return $this->db->update("loaiphong", $data, $idUpdate);
    }

    public function delete($id)
    {
        $idDelete = "id_phong = " . $id;
        return $this->db->delete("phong", $idDelete);
    }

    public function insert($data)
    {
        return $this->db->insert("phong", $data);
    }

    public function selectLatest() {
        return $this->db->selectLatest("phong", "id_phong");
    }
}

?>