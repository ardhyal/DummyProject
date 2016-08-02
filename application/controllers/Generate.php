<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/third_party/PHPExcel.php"; 
class Generate extends CI_Controller {
    
    function __construct() {
        parent::__construct();
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
    
         
	function index()
	{
		$this->load->view('v_generate');
	}
        
        function upload()
        {
            $filename = date('Y-m-d').'_'.$_FILES['file']['name'];
            $config['upload_path']      = './file/';
            $config['file_name']        = $filename;
            $config['allowed_types']    = 'xls|xlsx|csv';
            $config['max_size']         = 20000;

            $this->load->library('upload');
            $this->upload->initialize($config);
            
            if(!$this->upload->do_upload('file'))
            {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                redirect(site_url('generate'), '');
                echo '<pre>';
                print_r($data);
                echo '</pre>';
            }
        }
        
        function baca() {
        $file = './file/2016-08-03_02types.xlsx';

//load the excel library
        $this->load->library('PHPExcel');

//read file from path
        $objPHPExcel = PHPExcel_IOFactory::load($file);

//get only the Cell Collection
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

//extract to a PHP readable array format
        foreach ($cell_collection as $cell) {
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();

            //header will/should be in row 1 only. of course this can be modified to suit your need.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            } else {
                $arr_data[$row][$column] = $data_value;
            }
        }

//send the data in an array format
        $data['header'] = $header;
        $data['values'] = $arr_data;
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

}
