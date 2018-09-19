<?php

class C_public extends CI_Controller {
	
	function __construct()	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('public/front');
	}

	function submitted(){
		//Deklarasi dan penetapan nilai variabel
		$operasi = $this->input->post('operasi');
		$num1 = $this->input->post('num1');
		$num2 = $this->input->post('num2');
		//Penetapan kondisi untuk memanggil fungsi 
		if($operasi=='1'){
			$hasil = $this->tambah($num1,$num2);
		}else
		if($operasi=='2'){
			$hasil = $this->kurang($num1,$num2);
		}else
		if($operasi=='3'){
			$hasil = $this->kali($num1,$num2);
		}else
		{
			$hasil = $this->bagi($num1,$num2);
		}

		//passing parameter data yang akan ditampilkan
		$data["result"] = $hasil;
		$data["terbilang"] = $this->terbilang($hasil);
		$this->load->view('public/front',$data);
	}

	//fungsi operasi penjumlahan
	function tambah($num1,$num2)
	{
		return $hasil = $num1+$num2;
	}

	//fungsi operasi pengurangan
	function kurang($num1,$num2)
	{
		return $hasil = $num1-$num2;
	}

	//fungsi operasi perkalian
	function kali($num1,$num2)
	{
		return $hasil = $num1*$num2;
	}

	//fungsi operasi pembagian
	function bagi($num1,$num2)
	{
		return $hasil = $num1/$num2;
	}

	//fungsi menentukan pembilangan angka berdasarkan digit / posisi angka
	function kekata($x) {
        $x = abs($x);             
        $angka = array("", "satu", "dua", "tiga", "empat", "lima","enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($x <12) {
            $temp = " ". $angka[$x];
        } else if ($x <20) {
            $temp = $this->kekata($x - 10). " belas";
        } else if ($x <100) {
            $temp = $this->kekata($x/10)." puluh". $this->kekata($x % 10);
        } else if ($x <200) {
            $temp = " seratus" . $this->kekata($x - 100);
        } else if ($x <1000) {
            $temp = $this->kekata($x/100) . " ratus" . $this->kekata($x % 100);
        } else if ($x <2000) {
            $temp = " seribu" . $this->kekata($x - 1000);
        } else if ($x <1000000) {
            $temp = $this->kekata($x/1000) . " ribu" . $this->kekata($x % 1000);
        } else if ($x <1000000000) {
            $temp = $this->kekata($x/1000000) . " juta" . $this->kekata($x % 1000000);
        } else if ($x <1000000000000) {
            $temp = $this->kekata($x/1000000000) . " milyar" . $this->kekata(fmod($x,1000000000));
        } else if ($x <1000000000000000) {
        	$temp = $this->kekata($x/1000000000000) . " trilyun" . $this->kekata(fmod($x,1000000000000));
        }     
            return $temp;
        }
                                     
        //fungsi penyusunan kata untuk terbilang                       
        function terbilang($x) 
        {
        	if($x<0) {
            	$hasil = "minus ". trim($this->kekata($x));
            } else {
                $hasil = trim($this->kekata($x));
            }           
            $hasil = ucwords($hasil); 
            return $hasil;
        }
} ?>