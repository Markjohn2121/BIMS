<?php
class FileUpload
{



    function  upload($option, $FILE, $path)
    {


        $fileDir = "../uploads/officials/";
        $fileName = "official" . uniqid();
      

      
            // if ($option == "create") {  //upload file in create

            //     while (file_exists($fileDir . $fileName)) {
            //         $fileName = "official" . uniqid();
            //     }

            //     move_uploaded_file($FILE['tmp_name'], $fileDir . $fileName . ".$ext");
            //     clearstatcache();
            //     return "./uploads/officials/" . $fileName . ".$ext"; // path



            // }
        


        // if img is not empty

        if ($option == "create") {  //upload file in create


            if ($_FILES['photo']['size'] == 0 && $_FILES['photo']['error'] == 4) {

                return "ewan"; //"../../assets/ui-user-profile.svg";

            } else{

                $extension = pathinfo($FILE['name']);
                $ext = $extension['extension'];

                while (file_exists($fileDir . $fileName)) {
                    $fileName = "official" . uniqid();
                }
    
                move_uploaded_file($FILE['tmp_name'], $fileDir . $fileName . ".$ext");
                clearstatcache(true,"./uploads/officials/" . $fileName .".$ext");
                return "./uploads/officials/" . $fileName . ".$ext"; // path

            }



        

        } else if ($option == "update") { // update file

            if ($_FILES['photo']['size'] == 0 && $_FILES['photo']['error'] == 4) {
                return  $path;

            } else {

                $extension = pathinfo($FILE['name']);
                $ext = $extension['extension'];

                if (strpos($path, "./uploads/officials/official") !== false) { // same

                    unlink("." . $path);

                    while (file_exists($fileDir . $fileName)) {
                        $fileName = "official" . uniqid();
                    }
                    
                    move_uploaded_file($FILE['tmp_name'], $fileDir . $fileName . ".$ext");
                    clearstatcache(true);
                    return "./uploads/officials/" . $fileName . ".$ext"; // path

                } else {

                    while (file_exists($fileDir . $fileName)) {
                        $fileName = "official" . uniqid();
                    }
                    
                    move_uploaded_file($FILE['tmp_name'], $fileDir . $fileName . ".$ext");
                    clearstatcache(true);
                    return "./uploads/officials/" . $fileName . ".$ext"; // path


                }
            }
        } else if ($option == "delete") {


        }
    }
}
