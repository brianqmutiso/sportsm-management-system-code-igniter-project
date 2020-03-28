<?php
class commerce extends CI_Controller{
	public function _Construct(){
$this->load->library("form_validation");
	}
	function index(){
		$this->load->helper("url");
$this->load->library("session");
$name=$this->session->username;
$this->load->helper("form");
		$this->load->view("commerce/index.php",$name);
	}
	function getall(){
		$this->load->library("session");
		$res=$this->load->model("hospital/hos1");
		$data['all']=$this->hos1->getall();
		$this->load->helper("url");
		
$this->load->view("commerce/fixtures.php",$data);
if (isset($_GET['id'])) {
	$res=$this->hos1->deletes($_GET['id']);
	?>
	<script type="text/javascript">alert("<?php echo $res; ?>");

</script>

	<?php
	header("location:getall");
	$this->load->library('pagination');
	
}

		
	}
	function update_deta(){
		$this->load->model("hospital/hos1");
		$ret=$this->hos1->update_details();
		$this->load->helper("url");
		
		if ($ret) {

			?>
			<script type="text/javascript">alert("data updated");
			location.href="getall";
		</script>

			<?php
		}
		else{
?><script type="text/javascript">alert("data not updated try again");
location.href="getall";
</script><?php

		}//header("location:getall");


	}
	function add_fixtures(){
		$this->load->model("hospital/hos1");
		$res=$this->hos1->add_fix();
		if ($res) {

			?>
			<script type="text/javascript">alert("data successfully added");
			location.href="getall";
		</script>

			<?php
		}
		else{
?><script type="text/javascript">alert("data not updated try again");
location.href="getall";
</script><?php

		}
	}
	function add_user(){
		$this->load->library("form_validation");
		$this->load->library("session");
		//echo "hello";
		$this->load->helper("url");
		$this->form_validation->set_rules("username","username","required");
		$this->form_validation->set_rules("password","password","required");
		$this->form_validation->set_rules("confirm_password","confirm_passwords","required|matches[password]");
		if ($this->form_validation->run()==TRUE) {
			$this->load->model("hospital/hos1");
			if ($this->hos1->register_user()) {
				?>
				<script type="text/javascript">alert("account registered successfully");</script>
				<?php
				$data['data']="login";
				$this->load->view("commerce/index",$data);
			}
			# code...
		}
		else{
			$data['data']="error";
			$this->load->view("commerce/index",$data);
		}

	}
	function welcome(){
	$alls=$this->load->model("hospital/hos1");
	$data['all']=$this->hos1->welcome();
		print_r($data);
		//$this->load->view("commerce/welcome");
	}
	function login(){
		$this->load->helper("url");
		$this->load->library("form_validation");
		$this->load->library("session");
		$this->load->model("hospital/hos1");
		
		if (count($this->hos1->auth())>0) {
			$ar=($this->hos1->auth());
	$email= $ar[0]['email'];
			$arr=array("email"=>$ar[0]['email'],"logge_in"=>TRUE,"first_name"=>$ar[0]['firstname'],"second_name"=>$ar[0]['secondname']);
			$this->session->set_userdata($arr);
			$this->load->view("commerce/index");
			?>
<script type="text/javascript">alert("Welcome ");</script>
			<?php
			
		}else{
				?>
<script type="text/javascript">alert("details are wrong");</script>

			<?php 
			$data['data']="login";
				$this->load->view("commerce/index",$data);

		}
	}
	function results(){

		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("hospital/hos1");
		if ($this->input->get("id")) {
			$this->hos1->deleteres($_GET['id']);
			# code...
		}
		$data['all']=$this->hos1->getresults();
		$this->load->view("commerce/results.php",$data);
	}
	function add_results(){
		$this->load->model("hospital/hos1");
		if ($this->hos1->add_results()) {
			header("location:results");
		}
		else
		{

		}
	}
	function logout(){
		$this->load->library("session");
		$this->session->sess_destroy();
		header("location:index");
	}
	
}


?>