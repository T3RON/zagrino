<?php


class Model_Api extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->library('session');

	}

    function Insert($table,$data) {
        $this->db->insert($table, $data);
    }


	function update_profile($name_family,$code_meli,$phone_number,$people_id) {
		$this->db->where('people_id', $people_id);
		$this->db->set('name_family', $name_family);
		$this->db->set('code_meli', $code_meli);
		$this->db->set('phone_number', $phone_number);
		$this->db->update('people');
	}


    function Select($table) {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

	function Select_Limit($table,$limit) {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->limit($limit);
		$query = $this->db->get();
		return $query->result();
	}

    function Select_Single($table,$where_name,$where_value) {
        $this->db->select('*');
        $this->db->from($table);
        //$this->db->join('movie_link', 'movie_link.movie_id = movie.movie_id');
        //$this->db->order_by('movie_year', 'ASC');
        $this->db->where($where_name, $where_value);
        $query = $this->db->get();
        return $query->result();
    }
    
    function Select_Single_jalase($table,$where_name,$where_value) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('morabi', 'morabi.morabi_id = jalase.morabi_id');
        //$this->db->order_by('movie_year', 'ASC');
        $this->db->where($where_name, $where_value);
        $query = $this->db->get();
        return $query->result();
    }
    
    function Select_list_jalase($where_name,$where_value) {
        $this->db->select('*');
        $this->db->from('jalase');
        $this->db->join('morabi', 'morabi.morabi_id = jalase.morabi_id');
        //$this->db->order_by('movie_year', 'ASC');
        $this->db->where($where_name, $where_value);
        $query = $this->db->get();
        return $query->result();
    }



     public function Select_images_introduction ($introduction_id) {
        $this->db->select('img_url');
        $this->db->from('intro_images');
        $this->db->join('introduction', 'introduction.introduction_id = intro_images.introduction_id');
        $this->db->where('intro_images.introduction_id', $introduction_id);
        $query = $this->db->get();
        return $query->result();
    }

 public function Select_video_jalase ($jalase_id) {
        $this->db->select('video_url');
        $this->db->from('jalase_video');
        $this->db->join('jalase', 'jalase.jalase_id = jalase_video.jalase_id');
        $this->db->where('jalase_video.jalase_id', $jalase_id);
        $query = $this->db->get();
        return $query->result();
    }






    function add_director($data_director) {
        $this->db->insert('director', $data_director);
    }

    function add_movie_director($data_movie_director) {
        $this->db->insert('movie_director', $data_movie_director);
    }

    function add_series_director($data_series_director) {
        $this->db->insert('series_director', $data_series_director);
    }

    function del_director($director_id) {
        $this->db->delete('director', array('director_id' => $director_id));
    }

    function update_director($new_director_name,$new_director_sex,$director_id,$director_image) {
        $this->db->set('director_name', $new_director_name);
        $this->db->set('director_sex', $new_director_sex);
        $this->db->set('director_image', $director_image);
        $this->db->where('director_id', $director_id);
        $this->db->update('director');
    }

	function update_phone_active($numbers,$active_number) {
		$this->db->set('phone_active', $active_number);
		$this->db->where('phone_number', $numbers);
		$this->db->update('people');
	}

	function logins($numbers) {
		$this->db->where('phone_number',$numbers);
		$this->db->limit(1);
		$login_query = $this->db->get('people');
		if ($login_query->num_rows() > 0) {
			//$row = $login_query->row();
			return true;
		}else {
			return false;
		}
	}

	function check_profile($people_id) {
		$this->db->where('people_id',$people_id);
		$this->db->limit(1);
		$login_query = $this->db->get('people');
		if ($login_query->num_rows() > 0) {
			$row = $login_query->row();
			if (!empty($row->name_family && $row->code_meli && $row->address)) {
				return true;
			}else {
				return false;
			}

		}else {
			return false;
		}
	}

	function check_active_code($active_code) {
		$this->db->where('phone_active',$active_code);
		$this->db->limit(1);
		$login_query = $this->db->get('people');
		if ($login_query->num_rows() > 0) {
			$row = $login_query->row();
			if ($row->phone_active == $active_code) {
				$session_data = array(
					'people_id'  => $row->people_id,
					'phone_number'     => $row->phone_number,
					'logged_in' => TRUE
				);

				$this->session->set_userdata($session_data);
				return true;
			}

		}else {
			return false;
		}
	}

	function check_people_in_jalase($people_id) {
		$this->db->where('people_id',$people_id);
		$this->db->limit(1);
		$login_query = $this->db->get('register');
		if ($login_query->num_rows() > 0) {
			return true;
		}else {
			return false;
		}
	}


	function getRows($params = array()){
		$this->db->select('*');
		$this->db->from('news');

		if(array_key_exists("where", $params)){
			foreach($params['where'] as $key => $val){
				$this->db->where($key, $val);
			}
		}

		if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
			$result = $this->db->count_all_results();
		}else{
			if(array_key_exists("news_id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){
				if(!empty($params['news_id'])){
					$this->db->where('news_id', $params['news_id']);
				}
				$query = $this->db->get();
				$result = $query->row_array();
			}else{
				$this->db->order_by('news_id', 'desc');
				if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
					$this->db->limit($params['limit'],$params['start']);
				}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
					$this->db->limit($params['limit']);
				}

				$query = $this->db->get();
				$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
			}
		}

		// Return fetched data
		return $result;
	}

	function getRowsGKN($params = array()){
		$this->db->select('*');
		$this->db->from('good_to_know');

		if(array_key_exists("where", $params)){
			foreach($params['where'] as $key => $val){
				$this->db->where($key, $val);
			}
		}

		if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
			$result = $this->db->count_all_results();
		}else{
			if(array_key_exists("good_id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){
				if(!empty($params['good_id'])){
					$this->db->where('good_id', $params['good_id']);
				}
				$query = $this->db->get();
				$result = $query->row_array();
			}else{
				$this->db->order_by('good_id', 'desc');
				if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
					$this->db->limit($params['limit'],$params['start']);
				}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
					$this->db->limit($params['limit']);
				}

				$query = $this->db->get();
				$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
			}
		}

		// Return fetched data
		return $result;
	}

	function getRowsMorabi($params = array()){
		$this->db->select('*');
		$this->db->from('morabi');

		if(array_key_exists("where", $params)){
			foreach($params['where'] as $key => $val){
				$this->db->where($key, $val);
			}
		}

		if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
			$result = $this->db->count_all_results();
		}else{
			if(array_key_exists("morabi_id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){
				if(!empty($params['morabi_id'])){
					$this->db->where('morabi_id', $params['morabi_id']);
				}
				$query = $this->db->get();
				$result = $query->row_array();
			}else{
				$this->db->order_by('morabi_id', 'desc');
				if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
					$this->db->limit($params['limit'],$params['start']);
				}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
					$this->db->limit($params['limit']);
				}

				$query = $this->db->get();
				$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
			}
		}

		// Return fetched data
		return $result;
	}


	function update_state_request($people_id,$where_name,$where_val,$state_id,$table) {
		$this->db->set('state_id', '2');
		$this->db->where('people_id', $people_id);
		$this->db->where($where_name,$where_val);
		$this->db->where('state_id', $state_id);
		$this->db->update($table);
	}

	function update_kavenegar($api) {
		$this->db->set('set_value', $api);
		$this->db->where('set_id', '1');
		$this->db->update('settings');
	}

	function update_merchentid($merchentid) {
		$this->db->set('set_value', $merchentid);
		$this->db->where('set_id', '2');
		$this->db->update('settings');
	}

	//get data from database
	function get_data(){
		$this->db->select('survey_id');
		$result = $this->db->get('survey_temp');
		return $result;
	}

}
