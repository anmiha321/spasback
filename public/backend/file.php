<?php
	class Files {
		//Функция сжатия фото при загрузке
		public static function resizeImg($image, $w_o = false, $h_o = false) {
			if (($w_o < 0) || ($h_o < 0)) {echo "Некорректные входные параметры";return false;}
			list($w_i, $h_i, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
			$types = array("", "gif", "jpeg", "png", "jpg"); // Массив с типами изображений
			$ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
			if ($ext) {
			  $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
			  $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
			} else {
			  echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
			  return false;
			}
			/* Если указать только 1 параметр, то второй подстроится пропорционально */
			if (!$h_o) $h_o = $w_o / ($w_i / $h_i);
			if (!$w_o) $w_o = $h_o / ($h_i / $w_i);
			$img_o = imagecreatetruecolor($w_o, $h_o); // Создаём дескриптор для выходного изображения
			imagecopyresampled($img_o, $img_i, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i); // Переносим изображение из исходного в выходное, масштабируя его
			//imagecharup 
			$func = 'image'.$ext; // Получаем функция для сохранения результата
			return $func($img_o, $image); // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
		}
	}

	if ($_FILES['file']) {

		$path_file = null;
		if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/uploads/tmp/')) {
			echo '000';die();
		}

		$name = $_FILES['file']['name'];
		$temp_name = $_FILES['file']['tmp_name'];
		$size = $_FILES['file']['size'];
		$ext_file = pathinfo($name, PATHINFO_EXTENSION);

		switch($ext_file) {
			case 'jpeg':
			case 'jpg':
			case 'png':
			case 'tiff':
				break;
			default: echo '9';die();
		}

		$data = date("Ymd"); 
		$time = (date("His")); // Определяем дату и время, для вставки в новое имя файла
		$type = strtolower(substr($name, 1+strrpos($name,"."))); // Определяем расширение файла, переводим его в нижний регистр
		$new_name = $data.'-'.$time.'.'.$type; // Определяем новое имя файла
		$path_file = $_SERVER['DOCUMENT_ROOT'].'/uploads/tmp/'.$new_name;
		move_uploaded_file($temp_name, $path_file);

		Files::resizeImg($_SERVER['DOCUMENT_ROOT'].'/uploads/tmp/'.$new_name, 150);

		echo $new_name;
	}

	if($_POST['file_del']) {
        unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/tmp/'.$_POST['file_del'].'');
    }
?>