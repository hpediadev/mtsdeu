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

class ProsesClient extends CI_Model{
    public function addData($table, $data)
    {
        $this->db->insert($table,$user);
    }
}