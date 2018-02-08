<?php  
	if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	
	function tgl_indo($tgl){
			$ubah = gmdate($tgl, time()+60*60*8);
			$pecah = explode("-",$ubah);
			$tanggal = $pecah[2];
			$bulan = bulan($pecah[1]);
			$tahun = $pecah[0];
    	return $tanggal.' '.$bulan.' '.$tahun;
	}

	function tgldikit($tgl){
 
        $inttime=date('Y-m-d H:i:s',$tgl);
 
        $arr_bulan=array("","Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");
        $tglBaru=explode(" ",$inttime);
        $tglBaru1=$tglBaru[0];$tglBaru2=$tglBaru[1];
        $tglBarua=explode("-",$tglBaru1);
        $tgl=$tglBarua[2]; $bln=$tglBarua[1]; $thn=$tglBarua[0];
        if(substr($bln,0,1)=="0") $bln=substr($bln,1,1);
        $bln=substr($arr_bulan[$bln],0,10);
        $ubahTanggal="$tgl $bln $thn";
 
     return $ubahTanggal;
	}

	function rupiah($nilai, $pecahan = 0){
	   return number_format($nilai, $pecahan, ',', '.');
	}

	function rupiah2($harga)
	{
		$a=(string)$harga; //membuat $harga menjadi string
		$len=strlen($a); //menghitung panjang string $a
	 
		if ( $len <=18 )
		{
			$ratril=$len-3-1;
			$ramil=$len-6-1;
			$rajut=$len-9-1; //untuk mengecek apakah ada nilai ratusan juta (9angka dari belakang)
			$juta=$len-12-1; //untuk mengecek apakah ada nilai jutaan (6angka belakang)
			$ribu=$len-15-1; //untuk mengecek apakah ada nilai ribuan (3angka belakang)
	 
			$angka='';
			for ($i=0;$i<$len;$i++)
			{
				if ( $i == $ratril )
				{
					$angka=$angka.$a[$i].".";
				}
				else if ($i == $ramil )
				{
					$angka=$angka.$a[$i].".";
				}
				else if ( $i == $rajut )
				{
					$angka=$angka.$a[$i]."."; //meletakkan tanda titik setelah 3angka dari depan
				}
				else if ( $i == $juta )
				{
					$angka=$angka.$a[$i]."."; //meletakkan tanda titik setelah 6angka dari depan
				}
				else if ( $i == $ribu )
				{
					$angka=$angka.$a[$i]."."; //meletakkan tanda titik setelah 9angka dari depan
				}
				else
				{
					$angka=$angka.$a[$i];
				}
			}
		}
		echo "Rp ".$angka."";
	}
	
	
	function number_to_words($number)
	{
		$before_comma = trim(to_word($number));
		$after_comma = trim(comma($number));
		return ucwords($results = $before_comma.' koma '.$after_comma);
	}

	function to_word($number)
	{
		$words = "";
		$arr_number = array(
		"",
		"satu",
		"dua",
		"tiga",
		"empat",
		"lima",
		"enam",
		"tujuh",
		"delapan",
		"sembilan",
		"sepuluh",
		"sebelas");

		if($number<12)
		{
			$words = " ".$arr_number[$number];
		}
		else if($number<20)
		{
			$words = to_word($number-10)." belas";
		}
		else if($number<100)
		{
			$words = to_word($number/10)." puluh ".to_word($number%10);
		}
		else if($number<200)
		{
			$words = "seratus ".to_word($number-100);
		}
		else if($number<1000)
		{
			$words = to_word($number/100)." ratus ".to_word($number%100);
		}
		else if($number<2000)
		{
			$words = "seribu ".to_word($number-1000);
		}
		else if($number<1000000)
		{
			$words = to_word($number/1000)." ribu ".to_word($number%1000);
		}
		else if($number<1000000000)
		{
			$words = to_word($number/1000000)." juta ".to_word($number%1000000);
		}
		else
		{
			$words = "undefined";
		}
		return $words;
	}

	function comma($number)
	{
		$after_comma = stristr($number,',');
		$arr_number = array(
		"nol",
		"satu",
		"dua",
		"tiga",
		"empat",
		"lima",
		"enam",
		"tujuh",
		"delapan",
		"sembilan");

		$results = "";
		$length = strlen($after_comma);
		$i = 1;
		while($i<$length)
		{
			$get = substr($after_comma,$i,1);
			$results .= " ".$arr_number[$get];
			$i++;
		}
		return $results;
	}


if ( ! function_exists('tgl_indo'))
{
	function tgl_indo($tgl)
	{
		$ubah = gmdate($tgl, time()+60*60*8);
		$pecah = explode("-",$ubah);
		$tanggal = $pecah[2];
		$bulan = bulan($pecah[1]);
		$tahun = $pecah[0];
		return $tanggal.' '.$bulan.' '.$tahun;
	}
}

if ( ! function_exists('bulan'))
{
	function bulan($bln)
	{
		switch ($bln)
		{
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
}


if ( ! function_exists('hitung_mundur'))
{
	function hitung_mundur($wkt)
	{
		$waktu=array(	365*24*60*60	=> "tahun",
						30*24*60*60		=> "bulan",
						7*24*60*60		=> "minggu",
						24*60*60		=> "hari",
						60*60			=> "jam",
						60				=> "menit",
						1				=> "detik");

		$hitung = strtotime(gmdate ("Y-m-d H:i:s", time () +60 * 60 * 8))-$wkt;
		$hasil = array();
		if($hitung<5)
		{
			$hasil = 'kurang dari 5 detik yang lalu';
		}
		else
		{
			$stop = 0;
			foreach($waktu as $periode => $satuan)
			{
				if($stop>=6 || ($stop>0 && $periode<60)) break;
				$bagi = floor($hitung/$periode);
				if($bagi > 0)
				{
					$hasil[] = $bagi.' '.$satuan;
					$hitung -= $bagi*$periode;
					$stop++;
				}
				else if($stop>0) $stop++;
			}
			$hasil=implode(' ',$hasil).' yang lalu';
		}
		return $hasil;
	}
}


if ( ! function_exists('tanggal'))
{
	function tanggal($tgl)
	{
		$tanggal = date("d-m-Y", strtotime($tgl));
		return $tanggal;
	}
}

if ( ! function_exists('tanggalmiring'))
{
	function tanggalmiring($tgl)
	{
		$tanggal = date("m/d/Y", strtotime($tgl));
		return $tanggal;
	}
}

if ( ! function_exists('tanggalawal'))
{
	function tanggalawal($tgl)
	{
		$tanggal = date("Y-m-d", strtotime($tgl));
		return $tanggal;
	}
}

