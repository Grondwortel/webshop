<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
    function __construct() {
        $this->userTbl = 'users';
        $this->rolesUsr = 'roles_users';
    }
    /*
     * get rows from the users table
     */
    function getRolesForUserID($params = array()) { // 1/ FUNCTION GET ROLESBYUSERid AANGEMAAKT --> 
        $this->db->select('role_id');               // kolom role_id selecteren
        $this->db->from($this->rolesUsr);    // varibl rolesUsr = table roles_users
        
        if(array_key_exists("id",$params)){  // Argument id is gezet selecteren van roles_id.
            $this->db->where('user_id',$params['id']); // User_id het opgegeven id is.
            $query = $this->db->get();
            $roles = $query->result_array();
        }else{
            // niks. foutmelding?
            //$roles = error?;
        }       
             
        //echo $this->db->count_all_results($roles);
        //var_dump($roles); //
        //foreach ($roles as $role) {
        //    echo $role["role_id"];
        //}

        return $roles;
    }

    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
    
    /*
     * Insert user information
     */
    public function insert($data = array()) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }

}