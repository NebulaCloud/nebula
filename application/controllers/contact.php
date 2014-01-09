<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
		public function index($page = 'contact') {
		
			if ( ! file_exists('application/views/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
		
			$data['title'] = ucfirst($page); // Capitalize the first letter
		
			$this->load->view('templates/header.php', $data);
			$this->load->view($page, $data);
			$this->load->view('templates/footer.php', $data);
		
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */