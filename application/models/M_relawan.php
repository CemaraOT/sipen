<?php
class M_relawan extends CI_Model {
    //property
	private $id_relawan;
	private $nama;
	private $alamat;
	private $email;
	private $no_telp;
	private $jenis_kelamin;
	private $tempat_lahir;
	private $tgl_lahir;
	private $kota;
	
    //setter
	public function set_id_relawan($value) {
        $this->id_relawan = $value; }
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
	public function set_tempat_lahir($value) {
        $this->tempat_lahir = $value; }
	public function set_tgl_lahir($value) {
        $this->tgl_lahir = $value; }
	public function set_kota($value) {
        $this->kota = $value; }
		
    //getter
	public function get_id_relawan() {
        return $this->id_relawan; }
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
	public function get_tempat_lahir() {
        return $this->tempat_lahir; }
	public function get_tgl_lahir() {
        return $this->tgl_lahir; }
	public function get_kota() {
        return $this->kota; }
		
	//query
	public function tampil_relawan() {
        $sql = "select * from tbl_relawan";
        return $this->db->query($sql);
    }
	
	public function tampil_relawan_by_id_relawan() {
        $sql = "select * from tbl_relawan
				where id_relawan = '".$this->get_id_relawan()."'";
        return $this->db->query($sql);
    }
	
	public function tampil_relawan_by_email() {
        $sql = "select * from tbl_relawan
				where email = '".$this->get_email()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_relawan() {
        $sql = "insert into tbl_relawan (nama,alamat,email,no_telp,jenis_kelamin,,tempat_lahir,tgl_lahir,kota)
					values
					('".$this->get_nama()."','".$this->get_email()."','".$this->get_alamat()."','".$this->get_no_telp()."','".$this->get_jenis_kelamin()."','".$this->get_tempat_lahir()."','".$this->get_tgl_lahir()."','".$this->get_kota()."')";
        return $this->db->query($sql);
    }
	
	public function ubah_relawan() {
		$sql = "update tbl_relawan set
				nama = '".$this->get_nama()."',
				alamat = '".$this->get_alamat()."',
				no_telp = '".$this->get_no_telp()."',
				jenis_kelamin = '".$this->get_jenis_kelamin()."',
				tempat_lahir = '".$this->get_tempat_lahir()."',
				tgl_lahir = '".$this->get_tgl_lahir()."',
				kota = '".$this->get_kota()."'
				where
				id_relawan = '".$this->get_id_relawan()."'";
		return $this->db->query($sql);
	}
	
	public function hapus_relawan() {
		$sql = "delete from tbl_relawan where id_relawan = '".$this->get_id_relawan()."'";
		return $this->db->query($sql);
	}
}
?>