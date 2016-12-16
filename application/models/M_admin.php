<?php
class M_admin extends CI_Model {
    //property
	private $username;
	private $password;

    //setter
	public function set_username($value) {
        $this->username = $value; }
	public function set_password($value) {
        $this->password = $value; }

    //getter
	public function get_username() {
        return $this->username; }
	public function get_password() {
        return $this->password; }
		
	//query
	public function tampil_admin() {
        $sql = "select * from tbl_admin";
        return $this->db->query($sql);
    }
	
	public function tampil_admin_by_username() {
        $sql = "select * from tbl_admin where username = '".$this->get_username()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_admin() {
        $sql = "insert into tbl_admin (username,password)
					values
					('".$this->get_username()."','".$this->get_password()."')";
        return $this->db->query($sql);
    }
	
	public function ubah_password() {
		$sql = "update tbl_admin set
				password = '".$this->get_password()."'
				where
				username = '".$this->get_username()."'";
		return $this->db->query($sql);
	}
	
	public function hapus_admin() {
        $sql = "delete from tbl_admin where username = '".$this->get_username()."'";
        return $this->db->query($sql);
    }
}
?>