<?php
class M_peta extends CI_Model {
    //property
	private $id_peta;
	private $id_kategori;
	private $judul;
	private $sumber;
	private $deskripsi;
	private $gambar;
	
    //setter
	public function set_id_peta($value) {
        $this->id_peta = $value; }
	public function set_id_kategori($value) {
        $this->id_kategori = $value; }
	public function set_judul($value) {
        $this->judul = $value; }
	public function set_sumber($value) {
        $this->sumber = $value; }
	public function set_deskripsi($value) {
        $this->deskripsi = $value; }
	public function set_gambar($value) {
        $this->gambar = $value; }
		
    //getter
	public function get_id_peta() {
        return $this->id_peta; }
	public function get_id_kategori() {
        return $this->id_kategori; }
	public function get_judul() {
        return $this->judul; }
	public function get_sumber() {
        return $this->sumber; }
	public function get_deskripsi() {
        return $this->deskripsi; }
	public function get_gambar() {
        return $this->gambar; }
		
	//query
	public function tampil_peta() {
        $sql = "select * from tbl_peta
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_peta.id_kategori
				order by tbl_peta.id_peta desc";
        return $this->db->query($sql);
    }
	
	public function tampil_peta_desc_limit_1() {
        $sql = "select * from tbl_peta order by id_peta desc limit 1";
        return $this->db->query($sql);
    }
	
	public function tampil_peta_by_id_peta() {
        $sql = "select * from tbl_peta
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_peta.id_kategori
				where tbl_peta.id_peta = '".$this->get_id_peta()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_peta() {
        $sql = "insert into tbl_peta (id_kategori,judul,deskripsi,sumber)
					values
					('".$this->get_id_kategori()."','".$this->get_judul()."','".$this->get_deskripsi()."','".$this->get_sumber()."')";
        return $this->db->query($sql);
    }
	
	public function ubah_peta() {
		$sql = "update tbl_peta set
				judul = '".$this->get_judul()."',
				deskripsi = '".$this->get_deskripsi()."',
				sumber = '".$this->get_sumber()."'
				where
				id_peta = '".$this->get_id_peta()."'";
		return $this->db->query($sql);
	}
	
	public function ubah_gambar_peta() {
		$sql = "update tbl_peta set
				gambar = '".$this->get_gambar()."'
				where
				id_peta = '".$this->get_id_peta()."'";
		return $this->db->query($sql);
	}
	
	public function hapus_peta() {
		$sql = "delete from tbl_peta where id_peta = '".$this->get_id_peta()."'";
		return $this->db->query($sql);
	}
}
?>