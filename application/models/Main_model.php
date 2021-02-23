<?php  

/**
 * Main_model
 */
class Main_model extends CI_Model
{
	
	public function userLogin($values)
	{
		# code...
		$userDetails = $this->db->select(array('userstatus','userid','userrole'))->from('users')->where($values)->get()->row();
		return $userDetails;
	}

	// public function updateAllData($table,$data){
	// 	$query = $this->db->update($table,$data);
	// 	return true;
	// }

	public function updateData($table,$where,$data){
		$query = $this->db->where($where)->update($table,$data);
		return true;
	}

	public function deleteDataWhere($table,$where)
	{
		# code...
		$this->db->delete($table,$where);
		return true;
	}

	public function getDataColumnWhere($table,$where,$column)
	{
		$result = $this->db->select($column)->from($table)->where($where)->get()->row();
		return $result;
	}
	public function getDataColumnWhereMore($table,$where,$column)
	{
		$result = $this->db->select($column)->from($table)->where($where)->get()->result();
		return $result;
	}

	public function getAllData($table)
	{
		# code...
		$result = $this->db->select('*')->from($table)->get()->result();
		return $result;
	}

	public function getAllDataWhere($table,$where){
		$result = $this->db->select('*')->from($table)->where($where)->get()->row();
		return $result;
	}
	public function getAllDataWhereMore($table,$where){
		$result = $this->db->select('*')->from($table)->where($where)->get()->result();
		return $result;
	}
	public function getRecordCount($table){
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		if($query){
		    return $query->num_rows();
		}else{
		    return false;
		}
	}
}

?>