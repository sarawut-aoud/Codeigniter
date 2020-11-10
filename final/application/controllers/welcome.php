<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id = null)
	{
        $this->save_item();
		$this->load->view('welcome_message',[
            'items'=>$this->info->get_items(),
            'item'=>$this->info->get_item_by_id($id)
        ]);
	}



	public function delete($id)
    {
        $this->info->delete_item($id);
        redirect(base_url('/'));
    }



    private function save_item()
    {
        $input=$this->input->post();
        if(!empty($input)){
            if(empty($input['id']))
            {
                $this->info->create_item($input);
            }
            else
            {
                $this->info->update_item($input['id'],$input);
            }

            redirect(base_url('/'));
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */