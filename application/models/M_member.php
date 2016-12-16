<?php
class M_member extends CI_Model {
    //property
	private $id_member;
	private $nama;
	private $alamat;
	private $email;
	private $no_telp;
	private $jenis_kelamin;
	private $tgl_lahir;
	private $password;
	
    //setter
	public function set_id_member($value) {
        $this->id_member = $value; }
	public function set_nama($value) {
        $this->nama = $value; }
	public function set_alamat($value) {
        $this->alamat = $value; }
	public function set_email($value) {
        $this->email = $value; }
	public function set_no_telp($value) {
        $this->no_telp = $value; }
	public function set_jenis_kelamin($value) {
        $this->jenis_kelamin = $value; }
	public function set_tgl_lahir($value) {
        $this->tgl_lahir = $value; }
	public function set_password($value) {
        $this->password = $value; }
		
    //getter
	public function get_id_member() {
        return $this->id_member; }
	public function get_nama() {
        return $this->nama; }
	public function get_alamat() {
        return $this->alamat; }
	public function get_email() {
        return $this->email; }
	public function get_no_telp() {
        return $this->no_telp; }
	public function get_jenis_kelamin() {
        return $this->jenis_kelamin; }
	public function get_tgl_lahir() {
        return $this->tgl_lahir; }
	public function get_password() {
        return $this->password; }
		
	//query
	public function tampil_member() {
        $sql = "select * from tbl_member";
        return $this->db->query($sql);
    }
	
	public function tampil_member_by_id_member() {
        $sql = "select * from tbl_member
				where id_member = '".$this->get_id_member()."'";
        return $this->db->query($sql);
    }
	
	public function tampil_member_by_email() {
        $sql = "select * from tbl_member
				where email = '".$this->get_email()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_member() {
        $sql = "insert into tbl_member (nama,alamat,email,no_telp,jenis_kelamin,tgl_lahir,password)
					values
					('".$this->get_nama()."','".$this->get_email()."','".$this->get_alamat()."','".$this->get_no_telp()."','".$this->get_jenis_kelamin()."','".$this->get_tgl_lahir()."','".$this->get_password()."')";
        return $this->db->query($sql);
    }
	
	public function ubah_member() {
		$sql = "update tbl_member set
				nama = '".$this->get_nama()."',
				alamat = '".$this->get_alamat()."',
				no_telp = '".$this->get_no_telp()."',
				jenis_kelamin = '".$this->get_jenis_kelamin()."',
				tgl_lahir = '".$this->get_tgl_lahir()."'
				where
				id_member = '".$this->get_id_member()."'";
		return $this->db->query($sql);
	}
	
	public function hapus_member() {
		$sql = "delete from tbl_member where id_member = '".$this->get_id_member()."'";
		return $this->db->query($sql);
	}
}
?>