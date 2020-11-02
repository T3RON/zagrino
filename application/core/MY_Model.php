<?php


class MY_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function select($table) {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    

    function select_two_orderBy($table,$field_order_by_one,$type_order_by_one,$field_order_by_two,$type_order_by_two) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($field_order_by_one,$type_order_by_one);
        $this->db->order_by($field_order_by_two,$type_order_by_two);
        $query = $this->db->get();
        return $query->result();
    }

    function select_limit($table,$limit) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }

    function select_limit_where($table,$limit,$field_where,$where,$field_order_by,$type_order_by) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field_where, $where);
        $this->db->limit($limit);
        $this->db->order_by($field_order_by,$type_order_by);
        $query = $this->db->get();
        return $query->result();

    }


    function join_one($table,$table_join,$orderby_type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_join, $table.'.'.$table_join.'_id = '.$table_join.'.'.$table_join.'_id');
        $this->db->order_by($table.'_id', $orderby_type);
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_one($table,$table_join,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_join, $table.'.'.$table_join.'_id = '.$table_join.'.'.$table_join.'_id');
        $this->db->where($table.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

	function join_one_withOrderBy($table,$table_join,$field_order_by_one,$type_order_by_one,$field_order_by_two,$type_order_by_two) {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table_join, $table.'.'.$table_join.'_id = '.$table_join.'.'.$table_join.'_id');
		$this->db->order_by($field_order_by_one,$type_order_by_one);
		$this->db->order_by($field_order_by_two,$type_order_by_two);
		$query = $this->db->get();
		return $query->result();
	}


    function join_two($table,$table_one,$table_two) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $query = $this->db->get();
        return $query->result();
    }

	function join_two_withOrderBy($table,$table_one,$table_two,$field_order_by_one,$type_order_by_one,$field_order_by_two,$type_order_by_two) {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
		$this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
		$this->db->order_by($field_order_by_one,$type_order_by_one);
		$this->db->order_by($field_order_by_two,$type_order_by_two);
		$query = $this->db->get();
		return $query->result();
	}

    function show_join_two($table,$table_one,$table_two,$table_where,$table_w,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->where($table_where.'.'.$table_w.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function join_three($table,$table_one,$table_two,$table_three) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $query = $this->db->get();
        return $query->result();
    }

	function join_three_withOrderBy($table,$table_one,$table_two,$table_three,$field_order_by_one,$type_order_by_one,$field_order_by_two,$type_order_by_two) {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
		$this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
		$this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
		$this->db->order_by($field_order_by_one,$type_order_by_one);
		$this->db->order_by($field_order_by_two,$type_order_by_two);
		$query = $this->db->get();
		return $query->result();
	}



    function show_join_three($table,$table_one,$table_two,$table_three,$table_where,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function join_four($table,$table_one,$table_two,$table_three,$table_four,$orderby_field,
                        $orderby_type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->order_by($orderby_field, $orderby_type);
        $query = $this->db->get();
        return $query->result();
    }

	function join_four_withOrderBy($table,$table_one,$table_two,$table_three,$table_four,$field_order_by_one,$type_order_by_one,$field_order_by_two,$type_order_by_two) {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
		$this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
		$this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
		$this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
		$this->db->order_by($field_order_by_one,$type_order_by_one);
		$this->db->order_by($field_order_by_two,$type_order_by_two);
		$query = $this->db->get();
		return $query->result();
	}

    function show_join_four($table,$table_one,$table_two,$table_three,$table_four,$table_where, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }


    function join_five($table,$table_one,$table_two,$table_three,$table_four,$table_five,$orderby_field, $orderby_type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->order_by($orderby_field, $orderby_type);
        $query = $this->db->get();
        return $query->result();
    }

	function join_five_withOrderBy($table,$table_one,$table_two,$table_three,$table_four,$table_five,$field_order_by_one,$type_order_by_one,$field_order_by_two,$type_order_by_two) {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
		$this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
		$this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
		$this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
		$this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
		$this->db->order_by($field_order_by_one,$type_order_by_one);
		$this->db->order_by($field_order_by_two,$type_order_by_two);
		$query = $this->db->get();
		return $query->result();
	}

    function show_join_five($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_where, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }


    function join_six($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_six,$orderby_field, $orderby_type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->join($table_six, $table.'.'.$table_six.'_id = '.$table_six.'.'.$table_six.'_id');
        $this->db->order_by($orderby_field, $orderby_type);
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_six_with_order($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_six,$orderby_field, $orderby_type,$table_where, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->join($table_six, $table.'.'.$table_six.'_id = '.$table_six.'.'.$table_six.'_id');
        $this->db->order_by($orderby_field, $orderby_type);
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_six($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_six,$table_where, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->join($table_six, $table.'.'.$table_six.'_id = '.$table_six.'.'.$table_six.'_id');
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }



    function join_seven($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_six,$table_seven,$orderby_field, $orderby_type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->join($table_six, $table.'.'.$table_six.'_id = '.$table_six.'.'.$table_six.'_id');
        $this->db->join($table_seven, $table.'.'.$table_seven.'_id = '.$table_seven.'.'.$table_seven.'_id');
        $this->db->order_by($orderby_field, $orderby_type);
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_seven_with_order($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_six,$table_seven,$orderby_field, $orderby_type,$table_where, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->join($table_six, $table.'.'.$table_six.'_id = '.$table_six.'.'.$table_six.'_id');
        $this->db->join($table_seven, $table.'.'.$table_seven.'_id = '.$table_seven.'.'.$table_seven.'_id');
        $this->db->order_by($orderby_field, $orderby_type);
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_seven($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_six,$table_seven,$table_where, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->join($table_six, $table.'.'.$table_six.'_id = '.$table_six.'.'.$table_six.'_id');
        $this->db->join($table_seven, $table.'.'.$table_seven.'_id = '.$table_seven.'.'.$table_seven.'_id');
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }


    
    function join_eight($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_six,$table_seven,$table_eight,$orderby_field, $orderby_type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->join($table_six, $table.'.'.$table_six.'_id = '.$table_six.'.'.$table_six.'_id');
        $this->db->join($table_seven, $table.'.'.$table_seven.'_id = '.$table_seven.'.'.$table_seven.'_id');
        $this->db->join($table_eight, $table.'.'.$table_eight.'_id = '.$table_eight.'.'.$table_eight.'_id');
        $this->db->order_by($orderby_field, $orderby_type);
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_eight_with_order($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_six,$table_seven,$table_eight,$orderby_field, $orderby_type,$table_where, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->join($table_six, $table.'.'.$table_six.'_id = '.$table_six.'.'.$table_six.'_id');
        $this->db->join($table_seven, $table.'.'.$table_seven.'_id = '.$table_seven.'.'.$table_seven.'_id');
        $this->db->join($table_eight, $table.'.'.$table_eight.'_id = '.$table_eight.'.'.$table_eight.'_id');
        $this->db->order_by($orderby_field, $orderby_type);
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function show_join_eight($table,$table_one,$table_two,$table_three,$table_four,$table_five,$table_six,$table_seven,$table_eight,$table_where, $id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table_one, $table.'.'.$table_one.'_id = '.$table_one.'.'.$table_one.'_id');
        $this->db->join($table_two, $table.'.'.$table_two.'_id = '.$table_two.'.'.$table_two.'_id');
        $this->db->join($table_three, $table.'.'.$table_three.'_id = '.$table_three.'.'.$table_three.'_id');
        $this->db->join($table_four, $table.'.'.$table_four.'_id = '.$table_four.'.'.$table_four.'_id');
        $this->db->join($table_five, $table.'.'.$table_five.'_id = '.$table_five.'.'.$table_five.'_id');
        $this->db->join($table_six, $table.'.'.$table_six.'_id = '.$table_six.'.'.$table_six.'_id');
        $this->db->join($table_seven, $table.'.'.$table_seven.'_id = '.$table_seven.'.'.$table_seven.'_id');
        $this->db->join($table_eight, $table.'.'.$table_eight.'_id = '.$table_eight.'.'.$table_eight.'_id');
        $this->db->where($table_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }










    function select_single($table,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($table.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function select_single_where($table,$tble_where,$id) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($tble_where.'_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

	function select_single_where_limit($table,$tble_where,$id,$limit) {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($tble_where.'_id', $id);
		$this->db->limit($limit);
		$query = $this->db->get();
		return $query->result();
	}

    function insert ($data,$table) {
        $this->db->insert($data, $table);
        return ($this->db->affected_rows() != 1) ? false : true;
    
    }

    function update ($table,$id,$data) {
    
        $this->db->where($table.'_id', $id);
        return $this->db->update($table, $data);
    }

    function upload($fileName,$types,$max) {
        $config['upload_path'] = './assets/uploads/img/';
        $config['allowed_types'] = $types;//'jpg|png'
        $config['max_size'] = $max;//5024
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($fileName)) {
            return $this->upload->display_errors();
        } else {
            $fileData = $this->upload->data();
            return $fileData['file_name'];
        }
    }

    function delete($table,$id) {
        $this->db->where($table.'_id', $id);
        return $this->db->delete($table);
    }

    function get_count($table,$where_field,$where) {
        $this->db->select('count(*)');
        $this->db->where($where_field,$where);
        $query = $this->db->get($table);
        $cnt = $query->row_array();
        return $cnt['count(*)'];
    }

    function g_count($table) {
        $this->db->select('count(*)');
        $query = $this->db->get($table);
        $cnt = $query->row_array();
        return $cnt['count(*)'];
    }

    function g_count_where($table,$where_name,$where_value) {
        $this->db->select('count(*)');
        $this->db->where($where_name,$where_value);
        $query = $this->db->get($table);
        $cnt = $query->row_array();
        return $cnt['count(*)'];
    }

    
    function check_login ($mobile,$password) {
        $this->db->where('account_mobile',$mobile);
        $this->db->limit(1);
        $login_query = $this->db->get('accounts');
        if ($login_query->num_rows() > 0) {
            $row = $login_query->row();
         
            if ($row) {
                $session_data = array(
                    'accounts_id'=> $row->accounts_id,
                    'account_fn'=> $row->account_fn,
                    'account_ln'=> $row->account_ln,
                    'account_mobile'=> $row->account_mobile,
                    'account_avatar'=> $row->account_avatar,
                    'state_id'=> $row->state_id,
                    'logged_in'=> TRUE
                );

                $this->session->sess_expiration = '14400';
                $this->session->set_userdata($session_data);
        
                return password_verify($password,$row->account_pass);


            }

        }else {
            return false;
        }
    }
  
}
