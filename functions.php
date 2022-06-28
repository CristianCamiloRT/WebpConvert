<?php 
    if (isset($_POST['convert'])) {
        clearFolder('uploads');
        clearFolder('converts');
        $source = 'uploads/';
        $destination = 'converts/' . pathinfo(basename($_FILES['uploadedfile']['name']), PATHINFO_FILENAME) . '.webp';
        $source = $source . md5(uniqid(date('d/m/Yh:i:sA'), true)) . basename($_FILES['uploadedfile']['name']);
        move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $source);
        convertImageToWebP($source, $destination, $_POST['quality']);
    }

    function clearFolder($folder){
        $files = glob($folder.'/*');
        foreach($files as $file){
            if(is_file($file))
            unlink($file);
        }
    }

    function convertImageToWebP($source, $destination, $quality) {
        $extension = pathinfo($source, PATHINFO_EXTENSION);  	
        if ($extension == 'jpeg' || $extension == 'jpg')   		
        $image = imagecreatefromjpeg($source);  	
        elseif ($extension == 'gif')   		
        $image = imagecreatefromgif($source);  	
        elseif ($extension == 'png')   		
        $image = imagecreatefrompng($source);  	
        imagewebp($image, $destination, $quality);  
        imagedestroy($image);	
        
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($destination));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($destination));
        ob_clean();
        flush();
        readfile($destination);
    }
?>