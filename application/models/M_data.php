<?php 
 
class M_data extends CI_Model{
 function data($number,$offset){
    $this->db->order_by('IDARTIKEL','DESC');
 return $query = $this->db->get_where('tartikel_md', array(),$number,$offset)->result(); 
 }
 
 function jumlah_data(){
 return $this->db->get_where('tartikel_md',array())->num_rows();
 }

 function data_home($number,$offset){
    $this->db->order_by('IDARTIKEL','DESC');
 return $query = $this->db->get_where('tartikel_md', array('KATEGORI'=>'informasi'),$number,$offset)->result(); 
 }
 
 function jumlah_data_home(){
 return $this->db->get_where('tartikel_md',array('KATEGORI'=>'informasi'))->num_rows();
 }

 function jumlah_data_cari($where){
 return $this->db->get_where('tartikel_md',$where)->num_rows();
 }
 function dataCari($number,$offset, $where){
    $this->db->order_by('IDARTIKEL','DESC');
 return $query = $this->db->get_where('tartikel_md', $where,$number,$offset)->result(); 
 }


 function jumlahData($table){
 return $this->db->get_where($table,array())->num_rows();
 }

 function vdata($table,$number,$offset){
 return $query = $this->db->get_where($table, array(),$number,$offset)->result(); 
 }
}

