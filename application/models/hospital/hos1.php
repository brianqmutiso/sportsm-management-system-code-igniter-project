<?php
class hos1 extends CI_Model{
function _construct(){
	
}
function getall(){
	$this->load->database("db1",TRUE);

if ($this->input->post("search")!==null) {
	$name=$this->input->post("search");
	$sql=$this->db->query("select * from fixtures where  away like '%$name%' or home like '%$name%'");
}
else{
	$sql=$this->db->query("select * from fixtures");
}
return $sql->result_array();
}
function deletes($id){
$this->load->database("db1",TRUE);
$sql=$this->db->query("delete from fixtures where id='$id'");
if ($sql) {
	return "deleted successfully";
}
else{
	return "data could not be deleted try again";
}
}
function update_details(){
$this->load->database("db1",TRUE);
$data=array('away'=>$this->input->post("away"),'home'=>$this->input->post("home"),'date'=>$this->input->post("date"));
$where="id=".$this->input->post("des");
$sql=$this->db->update('fixtures',$data,$where);
if ($sql) {
	return true ;
	# code...
}
else{
	return false;
}
}
function add_fix(){
	$this->load->database("db1",TRUE);
	$data=array("home"=>$this->input->post("home"),"away"=>$this->input->post("away"),"date"=>$this->input->post("date"));
	$sql=$this->db->insert("fixtures",$data);
	return $sql;
}
function welcome(){
	$this->load->database("db1",TRUE);
	$sel=$this->db->get("fixtures");
	return $sel->result_array();
}
function register_user(){
	$password=md5($this->input->post("password"));
	$data=array("email"=>$this->input->post("username"),"password"=>$password);
	$this->load->database("db1",TRUE);
	$res=$this->db->insert("accounts",$data);
	return $res;
}
function auth(){
	$this->load->database("db1",TRUE);
	$username=$this->input->post("username");
	$password=md5($this->input->post("password"));
	$where="email='$username' and password='$password'";
	$re=$this->db->query("select * from accounts where email='$username' and password='$password'");
	return $re->result_array();
}
function getresults(){
	$this->load->database("db1",TRUE);
	if ($this->input->post("search1")!==null) {
	$name=$this->input->post("search1");
	$sel=$this->db->query("select * from results where  away like '%$name%' or home like '%$name%'");
}
else{
	$sel=$this->db->get("results");
}
	

	return $sel->result_array();
}
function add_results(){
	$data=array("home"=>$this->input->post("home"),"away"=>$this->input->post("away"),"home_score"=>$this->input->post("home_score"),"away_score"=>$this->input->post("away_score"));
	$this->load->database("db1",TRUE);
	$sel=$this->db->insert("results",$data);
	return $sel;
}
function deleteres($ids){
	$this->load->database("db1",TRUE);
	$id=$ids;
	$this->db->query("delete from results where id='$id'");
}
}


?>