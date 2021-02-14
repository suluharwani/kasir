<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_dashboard extends CI_Model {

	function jumlah_transaksi_hari_ini(){
		$tanggal = date('Y/m/d');
		$query = $this->db->get_where('daftar_penjualan', array('DATE(tanggal_transaksi)'=>$tanggal, 'status_bayar'=>1));
		return $query;
	}
	function jumlah_kasir_hari_ini(){
		$tanggal = date('Y/m/d');
		$this->db->select('distinct(nama_admin)');
		$query = $this->db->get_where('daftar_penjualan', array('DATE(tanggal_transaksi)'=>$tanggal, 'status_bayar'=>1));
		return $query;
	}
	function laporan_jangka($mulai, $selesai){
		$this->db->select('*,tanggal_beli.harga as nilai_jual, tanggal_beli.potongan as potongan_jual, tanggal_beli.jumlah_bayar as jumlah_pembayaran ');
		$this->db->from('penjualan_barang');
		$this->db->join('tanggal_beli', 'penjualan_barang.nomor_faktur = tanggal_beli.faktur', 'left');
		$this->db->where('DATE(tanggal_buat) >=', $mulai);
		$this->db->where('DATE(tanggal_buat) <=', $selesai);
		$this->db->where('status', 1);
		return $this->db->get();
	}
	function jumlah_barang(){
		$jumlah = 0;
		$this->db->select('jumlah');
		$this->db->from('produk');
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			$jumlah  +=$row->jumlah; 
		}
		return $jumlah;
	}
	function jumlah_barang_terjual(){
		$jumlah = 0;
		$this->db->select('jumlah');
		$this->db->from('produk');
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			$jumlah  +=$row->jumlah; 
		}
		return $jumlah;
	}
	function nominal_terjual(){
		$jumlah = 0;
		$this->db->select('jumlah_bayar');
		$this->db->from('tanggal_beli');
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			$jumlah  +=$row->jumlah_bayar; 
		}
		return $jumlah;
	}
	function terjual(){
		$jumlah = 0;
		$this->db->select('jumlah');
		$this->db->from('daftar_penjualan');
		$this->db->where('status_bayar', 1);
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			$jumlah  +=$row->jumlah; 
		}
		return $jumlah;
	}
	function laba(){
		$this->db->select('harga, disc_1, disc_2, disc_3,potongan,harga_jual, jumlah, sub_jumlah1,sub_jumlah2');
		$this->db->from('daftar_penjualan');
		$this->db->where('status_bayar', 1);
		$query = $this->db->get();
		$harga_jual = 0;
		$harga = 0;
		foreach ($query->result() as $row) {

			$harga_jual  +=($row->jumlah*$row->sub_jumlah1*$row->sub_jumlah2)*($row->harga_jual-($row->harga_jual*$row->disc_1/100)-(($row->harga_jual-($row->harga_jual*$row->disc_1/100))*$row->disc_2/100)-(($row->harga_jual-($row->harga_jual*$row->disc_1/100)-(($row->harga_jual-($row->harga_jual*$row->disc_1/100))*$row->disc_2/100))*$row->disc_3/100)-$row->potongan); 
			$harga +=($row->jumlah*$row->sub_jumlah1*$row->sub_jumlah2)*$row->harga; 
		}
		return ($harga_jual - $harga);
		// return $harga_jual;
	}

}

/* End of file Mdl_dashboard.php */
/* Location: ./application/models/Mdl_dashboard.php */