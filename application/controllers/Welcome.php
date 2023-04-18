<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		if($this->uri->segment(2) == null || $this->uri->segment(2) == '') {
			$nama = 'Tamu';
		}else{
			$nama = $this->uri->segment(2);
			$nama = str_replace('_',' & ',$nama);
		}
		
		$data['tamu'] = $this->db->query("SELECT * FROM ucapan order by jam desc")->result();
		$data['title'] = 'Widi & Sigit Wedding ♥';
		$data['nama'] = $nama;
		$this->load->view('welcome_message',$data);
	}

	
}
