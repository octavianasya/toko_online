 <?php

 class Kategori extends CI_Controller{
 	public function tshirtvol1()
 	{
 		$data['tshirtvol1'] = $this->model_kategori->data_tshirtvol1()->result();
 		$this->load->view('templates/header');
 		$this->load->view('templates/sidebar');
 		$this->load->view('tshirtvol1', $data);
 		$this->load->view('templates/footer');
 	}

 	public function shirt()
 	{
 		$data['shirt'] = $this->model_kategori->data_shirt()->result();
 		$this->load->view('templates/header');
 		$this->load->view('templates/sidebar');
 		$this->load->view('shirt', $data);
 		$this->load->view('templates/footer');
 	}
 }