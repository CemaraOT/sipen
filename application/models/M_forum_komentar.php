<?php
class M_forum_komentar extends CI_Model {
    //property
	private $id_forum_komentar;
	private $id_forum;
	private $id_member;
	private $komentar;
	private $tgl_komentar;
	
    //setter
	public function set_id_forum_komentar($value) {
        $this->id_forum_komentar = $value; }
	public function set_id_forum($value) {
        $this->id_forum = $value; }
	public function set_id_member($value) {
        $this->id_member = $value; }
	public function set_komentar($value) {
        $this->komentar = $value; }
	public function set_tgl_komentar($value) {
        $this->tgl_komentar = $value; }
		
    //getter
	public function get_id_forum_komentar() {
        return $this->id_forum_komentar; }
	public function get_id_forum() {
        return $this->id_forum; }
	public function get_id_member() {
        return $this->id_member; }
	public function get_komentar() {
        return $this->komentar; }
	public function get_tgl_komentar() {
        return $this->tgl_komentar; }
		
	//query
	public function tampil_forum_komentar() {
        $sql = "select * from tbl_forum_komentar
				inner join tbl_forum on tbl_forum.id_forum = tbl_forum_komentar.id_forum
				inner join tbl_member on tbl_member.id_member = tbl_forum_komentar.id_member";
        return $this->db->query($sql);
    }
	
	public function tampil_forum_komentar_by_id_forum_komentar() {
        $sql = "select * from tbl_forum_komentar
				inner join tbl_forum on tbl_forum.id_forum = tbl_forum_komentar.id_forum
				inner join tbl_member on tbl_member.id_member = tbl_forum_komentar.id_member
				where tbl_forum_komentar.id_forum_komentar = '".$this->get_id_forum_komentar()."'";
        return $this->db->query($sql);
    }
	
	public function tampil_forum_komentar_by_id_forum() {
        $sql = "select * from tbl_forum_komentar
				inner join tbl_forum on tbl_forum.id_forum = tbl_forum_komentar.id_forum
				inner join tbl_member on tbl_member.id_member = tbl_forum_komentar.id_member
				where tbl_forum_komentar.id_forum = '".$this->get_id_forum()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_forum_komentar() {
        $sql = "insert into tbl_forum_komentar (id_forum,id_member,komentar,tgl_komentar)
					values
					('".$this->get_id_forum()."','".$this->get_komentar()."','".$this->get_id_member()."','".$this->get_tgl_komentar()."')";
        return $this->db->query($sql);
    }
	
	public function hapus_forum_komentar() {
		$sql = "delete from tbl_forum_komentar where id_forum_komentar = '".$this->get_id_forum_komentar()."'";
		return $this->db->query($sql);
	}
}
?>