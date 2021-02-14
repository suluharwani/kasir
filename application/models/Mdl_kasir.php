<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_kasir extends CI_Model {
	function pembelian_data(){
		$this->db->select('*, penjualan_barang.id as id_faktur, customer_data.nama as nama_customer');
		$this->db->from('penjualan_barang');
		$this->db->join('admin', 'penjualan_barang.id_admin = admin.id', 'left');
		$this->db->join('customer_data', 'penjualan_barang.id_customer = customer_data.id', 'left');
		$this->db->order_by('status', 'desc');
		$this->db->order_by('metode', 'desc');
		$this->db->order_by('tanggal_buat', 'desc');
		$query = $this->db->get();
		return $query;
	}
	function customer_data(){
		$this->db->select('* ,customer_data.id as id_customer, provinces.name as provinsi, regencies.name as kabupaten, districts.name as kecamatan');
		$this->db->from('customer_data');
		$this->db->join('customer_info', 'customer_data.id = customer_info.customer_data_id', 'left');
		$this->db->join('provinces', 'customer_info.provinsi_id = provinces.id', 'left');
		$this->db->join('regencies', 'kabupaten_id = regencies.id', 'left');
		$this->db->join('districts', 'kecamatan_id = districts.id', 'left');
		$query = $this->db->get();
		return $query;
	}
	

}

/* End of file Mdl_kasir.php */
/* Location: ./application/models/Mdl_kasir.php */