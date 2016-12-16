<?php
class M_kategori extends CI_Model {
    //property
	private $id_kategori;
	private $nama_kategori;

    //setter
	public function set_id_kategori($value) {
        $this->id_kategori = $value; }
	public function set_nama_kategori($value) {
        $this->nama_kategori = $value; }

    //getter
	public function get_id_kategori() {
        return $this->id_kategori; }
	public function get_nama_kategori() {
        return $this->nama_kategori; }
		
	//query
	public function tampil_kategori() {
        $sql = "select * from tbl_kategori";
        return $this->db->query($sql);
    }
	
	public function tampil_kategori_by_id_kategori() {
        $sql = "select * from tbl_kategori where id_kategori = '".$this->get_id_kategori()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_kategori() {
        $sql = "insert into tbl_kategori (nama_kategori)
					values
					('".$this->get_nama_kategori()."')";
        return $this->db->query($sql);
    }
	
	public function ubah_kategori() {
		$sql = "update tbl_kategori set
				nama_kategori = '".$this->get_nama_kategori()."'
				where
				id_kategori = '".$this->get_id_kategori()."'";
		return $this->db->query($sql);
	}
	
	public function hapus_kategori() {
        $sql = "delete from tbl_kategori where id_kategori = '".$this->get_id_kategori()."'";
        return $this->db->query($sql);
    }
}
?>