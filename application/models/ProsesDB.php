<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : mediadigitalofficial
 * | Email           : admin@mediadigitalofficial.com
 * | Filename        : Barang.php
 * | Instagram       : @mediadigitalofficial
 * | Blog            : http://www.mediadigitalofficial.com
 * | Info            : http://info.mediadigitalofficial.com
 * | Demo            : http://demo.mediadigitalofficial.com
 * | Youtube         : http://youtube.com/mediadigitalofficial
 * | File Created    : Thursday, 12th March 2020 9:33:56 pm
 * | Last Modified   : Thursday, 12th March 2020 9:54:10 pm
 * |==============================================================|
 */

class ProsesDB extends CI_Model{

  private $_table = "tusr_md";

   public $USERNAME;
    public $full_name;
    public $password;
    public $email;

    function simpan_upload($judul,$image){
    $data = array(
            'JDL' => $judul,
            'GAMBAR' => $image
          );  
      $result= $this->db->insert('tbl_galeri',$data);
      return $result;
  }
  function get_user()
  {
    // $this->db->select('*');
    // $this->db->from($this->_table);
    // $this->db->where('STATUS=1');
    // $query = $this->db->get();
    // return $query->result();
    return $this->db->get_where('tusr_md', array('STATUS' => 1));

  }
  
  
  function get_user_id($u,$p)
  {
        return $this->db->get_where('tusr_md', array('USERNAME' => $u,'PASSWORD'=> $p))->result();
  }
  function getData($table, $where)
  {
        return $this->db->get_where($table, $where);
  }

  function get_user_id_satu($id)
  {
        return $this->db->get_where('tusr_md', array('USERNAME' => $id))->result();
  }

  function get_lembaga($id)
  {
    if(empty($id))
        return $this->db->get('tlembaga_md')->result();
    else
        return $this->db->get_where('tlembaga_md', array('NPSN' => $id))->result();

  }
  function get_user_login($p,$q)
  {
    return $this->db->get_where('tusr_md', array('USERNAME' => $p,'PASSWORD' => $q))->result();

  }
  function get_Slide($id)
  {
    if(empty($id))
        return $this->db->get('tslide_md')->result();
    else
        return $this->db->get_where('tslide_md', array('STATUSSLIDE' => $id))->result();

  }
  function get_Slide_id($id)
  {
    if(empty($id))
        return $this->db->get('tslide_md')->result();
    else
        return $this->db->get_where('tslide_md', array('IDSLIDE' => $id))->result();

  }
  function get_artikel()
  {
        return $this->db->get('tartikel_md')->result();

  }
  function get_next($jdl,$ida)
  {
        return $this->db->get_where('tartikel_md', array('IDARTIKEL' => $ida,'LINK' => $jdl))->result();

  }
  function get_artikel_rinci($jdl,$ida)
  {
        return $this->db->get_where('tartikel_md', array('IDARTIKEL' => $ida,'LINK' => $jdl))->result();

  }
  function get_artikel_acak()
  {
    $this->db->order_by('rand()');
    $this->db->limit(5);
    return $this->db->get('tartikel_md')->result();

  }
  function get_artikel_cari()
  {
    $this->db->limit(20);
    return $this->db->get('tartikel_md', array())->result();

  }
  function get_artikel_PrevNext()
  {
    $this->db->order_by('rand()');
    $this->db->limit(2);
    return $this->db->get('tartikel_md')->result();

  }
  function get_artikel_prev()
  {
    $this->db->order_by('rand()');
    $this->db->limit(5);
    return $this->db->get('tartikel_md')->result();

  }

  function get_artikel_id($id)
  {
    if(empty($id))
        return $this->db->get('tartikel_md')->result();
    else
        return $this->db->get_where('tartikel_md', array('IDARTIKEL' => $id))->result();

  }
  
  function get_tags()
  {
        return $this->db->get('ttags_md')->result();

  }
  
  function get_tags_id($id)
  {
        return $this->db->get_where('ttags_md', array('IDTAG' =>$id))->result();

  }
  function get_sejarah()
  {
        return $this->db->get('tsejarah_md')->result();

  }
  function get_sambutan()
  {
        return $this->db->get('tsambutan_md')->result();

  }

  function get_visimisi()
  {
        return $this->db->get('tvisimisi_md')->result();

  }

  function get_prodi()
  {
        return $this->db->get('tprodi_md')->result();

  }

  function get_prodi_rinci($ida)
  {
        return $this->db->get_where('tprodi_md', array('IDPRODI' => $ida))->result();

  }
  function get_struktur_id()
  {
        return $this->db->get('tstruktur_md')->result();

  }
  
  function get_struktur_aktif()
  {
        return $this->db->get_where('tstruktur_md', array('STATUSSTRUKTUR' => 1))->result();

  }
  
  function get_profil()
  {
      $this->db->limit(13);
        return $this->db->get('tprofil_md')->result();

  }
  
  function get_profilku()
  {
    $this->db->order_by('IDPROFIL ASC');
      $this->db->limit(13);
        return $this->db->get('tprofil_md')->result();

  }
  
  function get_saran($id)
  {
   if(empty($id)){
    $this->db->order_by('IDSARAN DESC');
        return $this->db->get('tsaran_md')->result();

   }
    else{
      $this->db->where('IDSARAN='.$id);
        $this->db->update('tsaran_md',array('STATUSSARAN'=>0));
       return $this->db->get_where('tsaran_md', array('IDSARAN' => $id))->result();
    }
       

  }
  function get_eksul_id($ida)
  {
        return $this->db->get_where('textra_md', array('IDEXTRA' => $ida))->result();

  }
  

  function insert_data($user, $table)
  {
    $this->db->insert($table,$user);
  }
  function delete_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
    return $this->db->affected_rows();
  }
       

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    } 
  public function doLogin($id){
    $post = $this->input->post();
    $pp = password_verify($post["password"], PASSWORD_DEFAULT);

        // cari user berdasarkan email dan username
        //$this->db->where('USERNAdME', $post["username"])->or_where('PASSWORD', $post["password"]);
        $user =  $this->db->get_where('tusr_md', array('USERNAME' => $id, 'STATUS' =>1))->row();
        //$user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
          if($isTruePassword = password_verify($post["password"], $user->PASSWORD));
          $hashed = $user->PASSWORD;
           echo $hashed;
          if (password_verify($post['password'], $hashed)) {

            $this->session->set_userdata(['user_logged' => $user]);
            $this->session->set_userdata('U', $user->USERNAME);
            $this->session->set_userdata('P', $user->PASSWORD);
            $this->session->set_userdata('N', $user->NAMA);
            $this->session->set_userdata('L', $user->LEVEL);
            $this->session->set_userdata('S', $user->STATUSLOGIN);
            $this->session->set_userdata('G', $user->GAMBAR);
            $this->_updateLastLogin($user->USERNAME);
             // echo 'Password is valid!';
            return true;
          }
          
      return false;
            }
      return false;
        }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET STATUSLOGIN=now() WHERE USERNAME='{$user_id}'";
        $this->db->query($sql);
    }

  // public function login_user($username,$password){

    // Mengetahui IP Pengunjung
    // function get_client_ip() {
    //     $ipaddress = '';
    //     if (getenv('HTTP_CLIENT_IP'))
    //         $ipaddress = getenv('HTTP_CLIENT_IP');
    //     else if(getenv('HTTP_X_FORWARDED_FOR'))
    //         $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    //     else if(getenv('HTTP_X_FORWARDED'))
    //         $ipaddress = getenv('HTTP_X_FORWARDED');
    //     else if(getenv('HTTP_FORWARDED_FOR'))
    //         $ipaddress = getenv('HTTP_FORWARDED_FOR');
    //     else if(getenv('HTTP_FORWARDED'))
    //        $ipaddress = getenv('HTTP_FORWARDED');
    //     else if(getenv('REMOTE_ADDR'))
    //         $ipaddress = getenv('REMOTE_ADDR');
    //     else
    //         $ipaddress = 'IP tidak dikenali';
    //     return $ipaddress;
    // }
       
       
    // // Mengetahui web browser yang digunakan pengunjung
    // function get_client_browser() {
    //     $browser = '';
    //     if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
    //         $browser = 'Netscape';
    //     else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
    //         $browser = 'Firefox';
    //     else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
    //         $browser = 'Chrome';
    //     else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
    //         $browser = 'Opera';
    //     else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
    //         $browser = 'Internet Explorer';
    //     else
    //         $browser = 'Other';
    //     return $browser;
    // }
    
  //  $query = $this->db->get_where('tusr_md',array('USERNAME'=>$username));
  //       if($query->num_rows() > 0)
  //       {
  //         $ip = get_client_ip().get_client_browser().$_SERVER['HTTP_USER_AGENT'];
  //           $data_user = $query->row();
  //           $nm=$data_user->NAMA;
  //           if (password_verify($password, $data_user->PASSWORD)) {
  //               $this->session->set_userdata('USERNAME',$username);
  //               $this->session->set_userdata('NAMA',$nm);
  //               $this->session->set_userdata('IP',$ip);

  //               $this->session->set_userdata('is_login',TRUE);
  //               return TRUE;
  //           } 
  //           else {
  //               return FALSE;
  //           }
  //       }
  //       else
  //       {
  //           return FALSE;
  //       }
  //   }
    function get_data(){
      $this->db->select('*');
      $result = $this->db->get('tdatasiswa_md');
      return $result;
  }
}

	
        