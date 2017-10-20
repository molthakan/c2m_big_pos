<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salelist extends MY_Controller {


 public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('sale/salelist_model');

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
		

$data['tab'] = 'salelist';
$data['title'] = 'Sale List';
		$this->salelayout('sale/salelist',$data);
}




function Get()
    {

$data = json_decode(file_get_contents("php://input"),true);
echo  $this->salelist_model->Get($data);
        
	}

function Getone()
    {

$data = json_decode(file_get_contents("php://input"),true);
echo  $this->salelist_model->Getone($data);
        
	}

function Deletelist()
    {

$data = json_decode(file_get_contents("php://input"),true); 
if(!isset($data)){
exit();
}       


$resault =  $this->salelist_model->Getone2($data);


foreach ($resault as $row)
{

 $data2['product_id'] = $row->product_id;
 $data2['product_price'] = $row->product_price;
  $data2['product_sale_num'] =   $row->product_sale_num;

$this->salelist_model->Updateproductaddstock($data2);


    }

 $this->salelist_model->Deletelist($data);


	}


	}

