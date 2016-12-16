<?php
class M_forum extends CI_Model {
    //property
	private $id_forum;
	private $id_kategori;
	private $judul;
	private $deskripsi;
	private $tgl_post;
	
    //setter
	public function set_id_forum($value) {
        $this->id_forum = $value; }
	public function set_id_kategori($value) {
        $this->id_kategori = $value; }
	public function set_judul($value) {
        $this->judul = $value; }
	public function set_deskripsi($value) {
        $this->deskripsi = $value; }
	public function set_tgl_post($value) {
        $this->tgl_post = $value; }
		
    //getter
	public function get_id_forum() {
        return $this->id_forum; }
	public function get_id_kategori() {
        return $this->id_kategori; }
	public function get_judul() {
        return $this->judul; }
	public function get_deskripsi() {
        return $this->deskripsi; }
	public function get_tgl_post() {
        return $this->tgl_post; }
		
	//query
	public function tampil_forum() {
        $sql = "select * from tbl_forum
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_forum.id_kategori
				order by tbl_forum.id_forum desc";
        return $this->db->query($sql);
    }
	
	public function tampil_forum_group_by_id_kategori() {
        $sql = "select * from tbl_forum
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_forum.id_kategori
				group by tbl_forum.id_kategori
				order by tbl_forum.id_forum desc";
        return $this->db->query($sql);
    }
	
	public function tampil_forum_by_id_kategori() {
        $sql = "select * from tbl_forum
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_forum.id_kategori
				where tbl_forum.id_kategori = '".$this->get_id_kategori()."'";
        return $this->db->query($sql);
    }
	
	public function tampil_forum_desc_limit_1() {
        $sql = "select * from tbl_forum order by id_forum desc limit 1";
        return $this->db->query($sql);
    }
	
	public function tampil_forum_by_id_forum() {
        $sql = "select * from tbl_forum
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_forum.id_kategori
				where tbl_forum.id_forum = '".$this->get_id_forum()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_forum() {
        $sql = "insert into tbl_forum (id_kategori,judul,deskripsi,tgl_post)
					values
					('".$this->get_id_kategori()."','".$this->get_judul()."','".$this->get_deskripsi()."','".$this->get_tgl_post()."')";
        return $this->db->query($sql);
    }
	
	public function ubah_forum() {
		$sql = "update tbl_forum set
				judul = '".$this->get_judul()."',
				deskripsi = '".$this->get_deskripsi()."'
				where
				id_forum = '".$this->get_id_forum()."'";
		return $this->db->query($sql);
	}
	
	public function hapus_forum() {
		$sql = "delete from tbl_forum where id_forum = '".$this->get_id_forum()."'";
		return $this->db->query($sql);
	}
}
?>