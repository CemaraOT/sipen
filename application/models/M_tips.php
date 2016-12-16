<?php
class M_tips extends CI_Model {
    //property
	private $id_tips;
	private $id_kategori;
	private $judul;
	private $sumber;
	private $deskripsi;
	private $gambar;
	private $tgl_post;
	
    //setter
	public function set_id_tips($value) {
        $this->id_tips = $value; }
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
	public function get_id_tips() {
        return $this->id_tips; }
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
	public function tampil_tips() {
        $sql = "select * from tbl_tips
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_tips.id_kategori
				order by tbl_tips.id_tips desc";
        return $this->db->query($sql);
    }
	
	public function tampil_tips_desc_limit_3() {
        $sql = "select * from tbl_tips
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_tips.id_kategori
				order by tbl_tips.id_tips desc limit 3";
        return $this->db->query($sql);
    }
	
	public function tampil_tips_desc_limit_1() {
        $sql = "select * from tbl_tips order by id_tips desc limit 1";
        return $this->db->query($sql);
    }
	
	public function tampil_tips_group_by_id_kategori() {
        $sql = "select * from tbl_tips
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_tips.id_kategori
				group by tbl_tips.id_kategori
				order by tbl_tips.id_tips desc";
        return $this->db->query($sql);
    }
	
	public function tampil_tips_by_id_tips() {
        $sql = "select * from tbl_tips
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_tips.id_kategori
				where tbl_tips.id_tips = '".$this->get_id_tips()."'";
        return $this->db->query($sql);
    }
	
	public function tampil_tips_by_id_kategori() {
        $sql = "select * from tbl_tips
				inner join tbl_kategori on tbl_kategori.id_kategori = tbl_tips.id_kategori
				where tbl_tips.id_kategori = '".$this->get_id_kategori()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_tips() {
        $sql = "insert into tbl_tips (id_kategori,judul,deskripsi,sumber,tgl_post)
					values
					('".$this->get_id_kategori()."','".$this->get_judul()."','".$this->get_deskripsi()."','".$this->get_sumber()."','".$this->get_tgl_post()."')";
        return $this->db->query($sql);
    }
	
	public function ubah_tips() {
		$sql = "update tbl_tips set
				judul = '".$this->get_judul()."',
				deskripsi = '".$this->get_deskripsi()."',
				sumber = '".$this->get_sumber()."'
				where
				id_tips = '".$this->get_id_tips()."'";
		return $this->db->query($sql);
	}
	
	public function ubah_gambar_tips() {
		$sql = "update tbl_tips set
				gambar = '".$this->get_gambar()."'
				where
				id_tips = '".$this->get_id_tips()."'";
		return $this->db->query($sql);
	}
	
	public function hapus_tips() {
		$sql = "delete from tbl_tips where id_tips = '".$this->get_id_tips()."'";
		return $this->db->query($sql);
	}
}
?>