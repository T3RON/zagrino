<?php
include_once(APPPATH.'core/CI_Panel.php');
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class BankMashaghelVizheForm extends CI_Panel {
    function __construct()
    {
        parent::__construct();
        $this->load->library('Jdf');
        $this->load->model('MY_Model');
    }

    function index()
    {
        $output['menu_top'] = $this->MY_Model->select('menu');
        $output['menu_middel'] = $this->MY_Model->select('secend_menu');
        $output['footer_menu'] = $this->MY_Model->select('footer_menu');
        $output['slider'] = $this->MY_Model->select('slider');
        $output['text'] = $this->MY_Model->select('text');
        $output['site'] = $this->MY_Model->select_single('site','1');
		$output['jobs_cate'] = $this->MY_Model->select('jobs_cate');
		$output['ostan'] = $this->MY_Model->select('ostan');

        $this->load->vars(array(
            'home_page' => TRUE
        ));
        $output['title'] = "كاربران";
        $output['des'] = "مديريت و بررسي كاربران";
        $output['timeStamp'] = $this->jdf->jdate('l, j F Y',time(),'','GMT');
        $this->load->view('site/BankMashaghelVizheForm', $output);
    }

	function register() {



		$data = array(

			'jobs_cate_id' =>$this->input->post('jobs_cate_id'),
			'jobs_sub_cate_id' =>$this->input->post('jobs_sub_cate_id'),
			'accounts_id' =>1,
			'ostan_id' =>$this->input->post('ostan_id'),
			'city_id' =>$this->input->post('city_id'),
			'jobs_title' =>$this->input->post('jobs_title'),
			'jobs_shoar' =>$this->input->post('jobs_shoar'),
			'jobs_shobe' =>$this->input->post('jobs_shobe'),
			'jobs_count_namayandegi' =>$this->input->post('jobs_count_namayandegi'),
			'jobs_count_namayandegi_in_city' =>$this->input->post('jobs_count_namayandegi_in_city'),
			'jobs_content' =>$this->input->post('jobs_content'),
			'jobs_mobile' =>$this->input->post('jobs_mobile'),
			'jobs_tell' =>$this->input->post('jobs_tell'),
			'jobs_email' =>$this->input->post('jobs_email'),
			'jobs_code_posti' =>$this->input->post('jobs_code_posti'),
			'jobs_instagram' =>$this->input->post('jobs_instagram'),
			'jobs_telegram' =>$this->input->post('jobs_telegram'),
			'jobs_address' =>$this->input->post('jobs_address'),
			'jobs_latitude' =>$this->input->post('jobs_latitude'),
			'jobs_longitude' =>$this->input->post('jobs_longitude'),
			'jobs_sharayet' =>$this->input->post('jobs_sharayet'),
			'jobs_mojavez' =>$this->input->post('jobs_mojavez'),
			'jobs_video' =>$this->MY_Model->upload('jobs_video','mp4|mpeg|wmv',10024),
			'register_date' =>$this->jdf->jdate('l, j F Y',time(),'','GMT'),
			'update_date' =>$this->jdf->jdate('l, j F Y',time(),'','GMT'),
			'state_id' =>2,
			'img1' =>$this->MY_Model->upload('img1','jpg|png',5024),
			'img2' =>$this->MY_Model->upload('img2','jpg|png',5024),
			'img3' =>$this->MY_Model->upload('img3','jpg|png',5024),
			'img4' =>$this->MY_Model->upload('img4','jpg|png',5024),
			'img5' =>$this->MY_Model->upload('img5','jpg|png',5024),
			'img6' =>$this->MY_Model->upload('img6','jpg|png',5024),
			'jobs_logo' =>$this->MY_Model->upload('jobs_logo','jpg|png',5024),
			'price_id' =>0,
			'days' =>30,
			'expire' =>time() + (30 * 86400)
		);



		$this->form_validation->set_rules('jobs_cate_id','دسته بندي','required');
		$this->form_validation->set_rules('jobs_sub_cate_id','زير دسته بندي','required');
		$this->form_validation->set_rules('ostan_id','استان','required');
		$this->form_validation->set_rules('city_id','شهرستان','required');
		$this->form_validation->set_rules('jobs_latitude','موقعيت','required',array('required' => '%s خود را روي نقشه مشخص كنيد'));


		if($this->form_validation->run() == FALSE){
			$array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال شغل بوجود آمده','type'=>'error');
			$this->session->set_flashdata('msg',$array_msg);
			$this->index();


		}
		else{
			$jobs = $this->MY_Model->insert('jobs',$data);

			if($jobs) {
				$array_msg = array('title'=>'تبريك','text'=>'شغل شما با موفقيت درج گرديد','type'=>'success');
				$this->session->set_flashdata('msg',$array_msg);
				redirect('site/work/BankMashaghelVizheForm/index');
			}else {
				$array_msg = array('title'=>'خطا','text'=>'مشكلي در ارسال شغل بوجود آمده','type'=>'error');
				$this->session->set_flashdata('msg',$array_msg);
				redirect('site/work/BankMashaghelVizheForm/index');

			}

		}




	}

	function get_sub_cate() {
		$jobs_cate_id = $this->input->post('id',TRUE);
		$data = $this->MY_Model->select_single_where('jobs_sub_cate','jobs_cate',$jobs_cate_id);
		echo json_encode($data);
	}

	function get_city() {
		$ostan_id = $this->input->post('id',TRUE);
		$data = $this->MY_Model->select_single_where('city','ostan',$ostan_id);
		echo json_encode($data);
	}
}
