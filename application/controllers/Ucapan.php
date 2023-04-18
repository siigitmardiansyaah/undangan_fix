<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ucapan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        $nama = $this->input->post('nama');
        $nama1 = $this->input->post('nama1');
		$ucapan = $this->input->post('comment');
		$hadir = $this->input->post('hadir');
        $nama1 = str_replace(' & ','_',$nama1);

        $data = array(
            'nama' => $nama,
			'hadir' => $hadir,
            'ucapan' => $ucapan,
    );
    
        $query = $this->db->insert('ucapan', $data);
        
        redirect("welcome/$nama1");
}
}
