<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class base extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	
	
	public function index() {
		
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
				  $ip=$_SERVER['HTTP_CLIENT_IP'];
			}
			elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
			}
			else{
				$ip=$_SERVER['REMOTE_ADDR'];
			}
			$hostname=$_SERVER['HTTP_USER_AGENT'];
			$hostnamezzz = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			 

		// id	"1"
		// timestamp	"7/12/2023 9:13:26"
		// nama	"Zainal Pratama Sapta Yananda, S.Kom."
		// nip	"199109022020121004"
		// satuan_kerja	"Pengadilan Agama Kaimana"
		// posisi_yang_dipilih	"System / Business Analyst"
		// bahasa_pemrograman_yang_dikuasai	"PHP"
		// framework_bahasa_pemrograman_yang_dikuasai	"CodeIgniter, Laravel"
		// database_yang_dikuasai	"MySQL"
		// tools_yang_dikuasai	"Visual Studio"
		// pernah_membuat_mobile_apps	"Tidak"
		
		
		$data_rekrutmen = $this->CallAPI(
			'GET', 
			"http://103.226.55.159/json/data_rekrutmen.json",
			false);

		$a['data'] = $data_rekrutmen;

		$data_attribut = $this->CallAPI(
			'GET', 
			"http://103.226.55.159/json/data_attribut.json",
			false);

		$a['data_attribut'] = $data_attribut;


		$a['page']	= "l_base";
		$this->load->view('admin/home_menu', $a);
	}
	
	function CallAPI($method, $url, $data = false)
	{
		$curl = curl_init();

		switch ($method)
		{
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);

				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_PUT, 1);
				break;
			default:
				if ($data)
					$url = sprintf("%s?%s", $url, http_build_query($data));
		}

		// Optional Authentication:
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, "username:password");

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		$result = curl_exec($curl);

		curl_close($curl);

		return $result;
	}


}
