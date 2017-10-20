<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exportproduct extends MY_Controller {


 public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('warehousebig/exportproduct_model');

     if(!isset($_SESSION['owner_id'])){
            header( "location: ".$this->base_url );
        }
        
    }
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		

$data['tab'] = 'exportproduct';
$data['title'] = 'Export product';
		$this->warehousebiglayout('warehousebig/exportproduct',$data);
}




function Getproductlist()
    {

$data = json_decode(file_get_contents("php://input"),true);
echo  $this->exportproduct_model->Getproductlist($data);
        
	}

	function Findproduct()
    {

$data = json_decode(file_get_contents("php://input"),true);
echo  $this->exportproduct_model->Findproduct($data);
        
	}



function Customer()
    {

$data = json_decode(file_get_contents("php://input"),true);
echo  $this->exportproduct_model->Customer($data);
        
	}


	function Gettoday()
    {

$data = json_decode(file_get_contents("php://input"),true);
echo  $this->exportproduct_model->Gettoday($data);
        
	}

	function Getone()
    {

$data = json_decode(file_get_contents("php://input"),true);
echo  $this->exportproduct_model->Getone($data);
        
	}

	

function Deletelist()
    {

$data = json_decode(file_get_contents("php://input"),true); 
if(!isset($data)){
exit();
}       


$resault =  $this->exportproduct_model->Getone2($data);


foreach ($resault as $row)
{

 $data2['product_id'] = $row->product_id;
 $data2['product_price'] = $row->product_price;
  $data2['product_sale_num'] =   $row->product_sale_num;

$this->exportproduct_model->Updateproductaddstock($data2);


    }

 $this->exportproduct_model->Deletelist($data);


	}


function Savesale()
    {

$data = json_decode(file_get_contents("php://input"),true);
if(!isset($data)){
exit();
}		

$header_code = time();

for($i=1;$i<=count($data['listsale']) ;$i++){


$data['sale_runno'] = $header_code;
$data['adddate'] = $header_code;

	if($data['listsale'][$i-1]['product_id']!='' && $data['listsale'][$i-1]['product_sale_num']!='0'){
$data['listsale'][$i-1]['sale_runno'] = $header_code;
$data['listsale'][$i-1]['adddate'] = $header_code;
	
if($this->exportproduct_model->Adddetail($data['listsale'][$i-1])){
	$this->exportproduct_model->Updateproductdeletestock($data['listsale'][$i-1]);
}




if($i==1){
$this->exportproduct_model->Addheader($data);

}

}

}


        
	}


	}

