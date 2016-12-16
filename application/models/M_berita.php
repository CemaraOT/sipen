<?php
class M_berita extends CI_Model {
    //property
	private $id_berita;
	private $id_kategori;
	private $judul;
	private $sumber;
	private $deskripsi;
	private $gambar;
	private $tgl_post;
	
    //setter
	public function set_id_berita($value) {
        $this->id_berita = $value; }
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
	public function set_tgl_post($value) {
        $this->tgl_post = $value; }
		
    //getter
	public function get_id_berita() {
        return $this->id_berita; }
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
	public function get_tgl_post() {
        return $this->tgl_post; }
		
	//query
	public function tampil_berita() {
        $sql = "select * from tbl_berita
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_berita.id_kategori
				order by tbl_berita.id_berita desc";
        return $this->db->query($sql);
    }
	
	public function tampil_berita_desc_limit_1() {
        $sql = "select * from tbl_berita order by id_berita desc limit 1";
        return $this->db->query($sql);
    }
	
	public function tampil_berita_by_id_berita() {
        $sql = "select * from tbl_berita
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_berita.id_kategori
				where tbl_berita.id_berita = '".$this->get_id_berita()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_berita() {
        $sql = "insert into tbl_berita (id_kategori,judul,deskripsi,sumber,tgl_post)
					values
					('".$this->get_id_kategori()."','".$this->get_judul()."','".$this->get_deskripsi()."','".$this->get_sumber()."','".$this->get_tgl_post()."')";
        return $this->db->query($sql);
    }
	
	public function ubah_berita() {
		$sql = "update tbl_berita set
				judul = '".$this->get_judul()."',
				deskripsi = '".$this->get_deskripsi()."',
				sumber = '".$this->get_sumber()."'
				where
				id_berita = '".$this->get_id_berita()."'";
		return $this->db->query($sql);
	}
	
	public function ubah_gambar_berita() {
		$sql = "update tbl_berita set
				gambar = '".$this->get_gambar()."'
				where
				id_berita = '".$this->get_id_berita()."'";
		return $this->db->query($sql);
	}
	
	public function hapus_berita() {
		$sql = "delete from tbl_berita where id_berita = '".$this->get_id_berita()."'";
		return $this->db->query($sql);
	}
}
?>