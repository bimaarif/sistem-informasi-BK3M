<?php

	$domain = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/bk3m/";
	
	// Fungsi untuk mengambil Data Asset, seperti gambar, JS, atau CSS
	function asset($path) {

		$path = trim($path);

		global $domain;

		if( $path != "") {

			$path = ltrim($path, '/');	

			return $domain . $path;

		}

		return $domain;
	}

	// Fungsi untuk menentukan URL
	function url($path) {

		$path = trim($path);

		global $domain;

		if( $path != "") {

			$path = ltrim($path, '/');	

			return $domain . $path;

		}

		return $domain;
	}


	function unik_key($jumlah_char = 8) {
		$string = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";

		// Acak
		$string = str_shuffle( $string . time() );

		// Potong
		return $string = substr($string, 0, $jumlah_char);
	}

    function remove_column($exceptions_column, $column_database, $tipe = "register")
    {
    	for ($i=0; $i < count($exceptions_column); $i++) {
        	if(array_key_exists($exceptions_column[$i], $column_database))
        	{
        		unset($column_database[$exceptions_column[$i]]);
        	}
        }
        return $column_database;
    }

    // Menghilangkan Caracter dari String
    function remove_caracter($string, $caracter, $replace = "") {
    	if(!is_array($caracter)) {
    		$caracter = [$caracter];
    	}
    	for ($i=0; $i < count($caracter); $i++) { 
    		$string = str_replace($caracter[$i], $replace, $string);
    	}
    		
    	return $string;
    }

    //Method Mengubah Angka Menjadi Nama Bulan
	function changeNumberToMonth($number, $type = 'full', $region = 'indonesia'){
		$number = intval($number);
		$data_month = [
				'1' => [
							'full' => ['indonesia' => 'Januari', 'english' => 'January'],
							'med' => ['indonesia' => 'Jan', 'english' => 'Jan']
						],
				'2' => [
							'full' => ['indonesia' => 'Februari', 'english' => 'February'],
							'med' => ['indonesia' => 'Feb', 'english' => 'Feb']
						],
				'3' => [
							'full' => ['indonesia' => 'Maret', 'english' => 'March'],
							'med' => ['indonesia' => 'Mar', 'english' => 'Mar']
						],
				'4' => [
							'full' => ['indonesia' => 'April', 'english' => 'April'],
							'med' => ['indonesia' => 'April', 'english' => 'April']
						],
				'5' => [
							'full' => ['indonesia' => 'Mei', 'english' => 'May'],
							'med' => ['indonesia' => 'Mei', 'english' => 'May']
						],
				'6' => [
							'full' => ['indonesia' => 'Juni', 'english' => 'June'],
							'med' => ['indonesia' => 'Jun', 'english' => 'Jun']
						],
				'7' => [
							'full' => ['indonesia' => 'Juli', 'english' => 'July'],
							'med' => ['indonesia' => 'Jul', 'english' => 'Jul']
						],
				'8' => [
							'full' => ['indonesia' => 'Agustus', 'english' => 'August'],
							'med' => ['indonesia' => 'Agustus', 'english' => 'August']
						],
				'9' => [
							'full' => ['indonesia' => 'September', 'english' => 'September'],
							'med' => ['indonesia' => 'September', 'english' => 'September']
						],
				'10' => [
							'full' => ['indonesia' => 'Oktober', 'english' => 'October'],
							'med' => ['indonesia' => 'Oktober', 'english' => 'October']
						],
				'11' => [
							'full' => ['indonesia' => 'November', 'english' => 'November'],
							'med' => ['indonesia' => 'November', 'english' => 'November']
						],
				'12' => [
							'full' => ['indonesia' => 'Desember', 'english' => 'December'],
							'med' => ['indonesia' => 'Desember', 'english' => 'December']
						]
			];
		
		$month_name = "-";
		if( array_key_exists($number, $data_month) ) {
			$month_name = $data_month[$number][$type][$region];
		}
		
		return $month_name;
	}

	function convert_to_romawi($angka)
	{
		$romawi = [
			"", "I", "II", "III", "IV", "V", 
			"VI", "VII", "VIII", "IX", "X",
			"XI", "XII", "XIII", "XIV", "XV",
			"XVI", "XVII", "XVIII", "XIX", "XX",
			"XXI", "XXII", "XXIII", "XXIV", "XXV",
			"XXVI", "XXVII", "XXVIII", "XXIX", "XXX",
		];

		$angka_romawi = "-";
		if(array_key_exists($angka, $romawi)) {
			$angka_romawi = $romawi[$angka];
		}

		return $angka_romawi;
	}


	function fix_digit($angka, $number_of_digit = 2, $replace_with = "0") {
		if( strlen($angka) < $number_of_digit ) {
			$extend = "";
			for ($i=strlen($angka); $i < $number_of_digit; $i++) { 
				$extend .= $replace_with;
			}
			$angka = $extend.$angka;
		}
		return $angka;
	}

	//Fungsi Mengambil Tanggal
	function currentDate(){
		date_default_timezone_set("Asia/Jakarta");
		$dateNow	= getdate();

		//Tanggal
		$year		= $dateNow['year'];
		$month		= fix_digit($dateNow['mon']);
		$day		= fix_digit($dateNow['mday']);

		$currentDate 	= $year."-".$month."-".$day;
		
		return $currentDate;
	}

	function changeDateStyle1($date, $type = 'full', $region = 'indonesia'){
		$ubahDate 	= explode("-", $date);
		$year 	= @$ubahDate[0];
		$mon 	= fix_digit(@$ubahDate[1]);
		$day 	= fix_digit(@$ubahDate[2]);

		$nameMonth 	= changeNumberToMonth($mon, $type, $region);

		$curentDate 	= $day ." ". $nameMonth ." ".$year;
		return $curentDate;
	}

	function changeDateStyle2($date){
		$ubahDate 	= explode("-", $date);
		$year 	= @$ubahDate[0];
		$mon 	= fix_digit(@$ubahDate[1]);
		$day 	= fix_digit(@$ubahDate[2]);

		$curentDate 	= $day ." - ". $mon ." - ".$year;
		return $curentDate;
	}

	//Fungsi Mengambil Tanggal dan Waktu
	function currentTimeStamp(){
		date_default_timezone_set("Asia/Jakarta");
		$dateNow	= getdate();

		//Tanggal
		$year		= $dateNow['year'];
		$month		= fix_digit($dateNow['mon']);
		$day		= fix_digit($dateNow['mday']);

		//Waktu
		$hour		= fix_digit($dateNow['hours']);
		$minute		= fix_digit($dateNow['minutes']);
		$second		= fix_digit($dateNow['seconds']);

		$currTimeStamp 	= $year."-".$month."-".$day." ".$hour.":".$minute.":".$second;
		
		return $currTimeStamp;
	}

	//Menamplkan WAktu dari TimeStamp
	function timeStampStyle1($dateTime){
		$cur_date = currentTimeStamp();
		$now 	 = new DateTime($cur_date);
		$search= new DateTime($dateTime);

		$year = $search->diff($now)->format('%y');
		$mon = $search->diff($now)->format('%m');
		$day = $search->diff($now)->format('%a');

		$hour = $search->diff($now)->format('%h');
		$min = $search->diff($now)->format('%i');
		$sec = $search->diff($now)->format('%s');
		
		if($year == 0){
			if($mon == 0){
				if($day == 0){
					if($hour == 0){
						if($min == 0){
							if($sec == 0){
								$result = "Beberapa detik lalu......";
							}else{
								if($sec >= 15){
									$result = "Beberapa detik lalu......";
								}else{
									$result = $sec." detik lalu";
								}
							}
						}else{
							if($min >= 15){
								$result = "Beberapa menit lalu......";
							}else{
								$result = $min." menit lalu";
							}
						}
					}else{
						if($hour >= 15){
							$result = "Beberapa jam lalu......";
						}else{
							$result = $hour." jam lalu";
						}
					}
				}else{
					if($day >= 15){
						$result = "Beberapa hari lalu......";
					}else{
						$result = $day." hari lalu";
					}
				}
			}else{
				if($mon >= 15){
					$result = "Beberapa bulan lalu......";
				}else{
					$result = $mon." bulan lalu";
				}
			}
		}else{
			if($year >= 15){
				$result = "Beberapa tahun lalu......";
			}else{
				$result = $year." tahun lalu";
			}
		}

		return $result;
	}
	
	//Menamplkan WAktu dari TimeStamp
	function timeStampStyle2($dateTime){
		$changeData 	= explode(" ", $dateTime);

		$changeDate 	= explode("-", $changeData[0]);
		$changeTime 	= explode(":", $changeData[1]);

		$date 		= $changeDate[2];
		$mon 		= changeNumberToMonth($changeDate[1]);
		$year		= $changeDate[0];

		$minute = $changeTime[1];
		$hour 	= $changeTime[0];

		$resultChange 	= "$date $mon $year Pukul $hour : $minute";

		return $resultChange;
	}
	
	//Menamplkan WAktu dari TimeStamp
	function timeStampStyle3($dateTime){
		$changeData 	= explode(" ", $dateTime);

		$changeDate 	= explode("-", $changeData[0]);
		$changeTime 	= explode(":", $changeData[1]);

		$date 	= $changeDate[2];
		$mon 	= fix_digit($changeDate[1]);
		$year	= fix_digit($changeDate[0]);

		$minute = $changeTime[1];
		$hour 	= $changeTime[0];

		$resultChange 	= "$date/$mon/$year;$hour:$minute";

		return $resultChange;
	}


	function thumb_photo($folder ,$file, $newwidth = 50, $extnew = "png")
    {
		$pecah_file = explode("/", $file);
		$photo = last($pecah_file);
		$pecah_photo = explode(".", $photo);
		$extensi = strtolower(last($pecah_photo));
		$nama_file = $pecah_photo[0];
		$img_new= $folder.$nama_file."-thumb";

        if($extensi == "jpg" || $extensi == "jpeg")
        {
            $source = imagecreatefromjpeg($file);
            $img_new .= '.jpg';
        }elseif($extensi == "png")
        {
            $source = imagecreatefrompng($file);
            $img_new .= '.png';
        }else{
            return false;
        }

        $src_width = imageSX($source);
        $src_height = imageSY($source);

        $newheight = ($newwidth/$src_width)*$src_height;

        $thumb = imagecreatetruecolor( $newwidth, $newheight );
        imagesavealpha($thumb, true);
        $color = imagecolorallocatealpha($thumb, 0, 0, 0, 127);
        imagefill($thumb, 0, 0, $color);

        imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $src_width, $src_height);
        if($extensi == "jpg" || $extensi == "jpeg")
        {
            imagejpeg($thumb,$img_new,100);
        }elseif($extensi == "png")
        {
            imagepng($thumb,$img_new,9);
        }
    }

    function cek_tanggal_akhir_bulan($bulan, $tahun) {
    	if($bulan%2 == 0){
    		if($bulan == 2) {
    			// Cek Tahun Kabisat
    			if($tahun%4 == 0) {
    				$tanggal_akhir_bulan = 29;
    			}else{
    				$tanggal_akhir_bulan = 28;	
    			}
    		}else{
        		$tanggal_akhir_bulan = 30;
    		}
        }else{
        	$tanggal_akhir_bulan = 31;
        }

        return $tanggal_akhir_bulan;
    }
    
    // Menghapus Thumbnail
    function delete_thumbnail($thumbnail, $dimension_size = [50, 100]) {
		//Cek Jika Thumbnail dari Dalam Server
		if(stristr($thumbnail, url('/')) || (!stristr($thumbnail, 'https') && !stristr($thumbnail, 'http') ) ) {
			$thumbnail = str_replace(url('/'), '', $thumbnail);
			$thumbnail = ltrim($thumbnail, '/');
			// Cek Jika Thumbnail bukan Thumbnail default
			if(!stristr($thumbnail, 'no_thumbnail')) {
				if(is_file($thumbnail)) {
					unlink($thumbnail);

		    		// Menghapus File Ukuran Lain
		    		$file_name = explode(".", $thumbnail);
		    		$name = "";
		    		for ($i=0; $i < count($file_name)-1; $i++) { 
		    			$name .= $file_name[$i];
		    		}
		    		$extensi = $file_name[count($file_name) - 1];

		    		foreach($dimension_size as $key => $dimension) {
			    		if(file_exists( $name."_size".$dimension.".".$extensi )) {
			    			unlink( $name."_size".$dimension.".".$extensi );
			    		}
		    		}
				}
			}
		}
    }


?>