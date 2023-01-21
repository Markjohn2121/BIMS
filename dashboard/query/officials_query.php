<?php
header("Content-Type: application/json");
include_once("./dbConnection.php");
include_once("./fileConfig.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['auth'] == "admin") {



    // for getting data from officials
    if ($_POST['option'] === "get") {
        $getOfficials_data = "SELECT * FROM `officails_data`";

        try {
            $officails = [];
            $data = $conn->query($getOfficials_data);

            if ($data->rowCount() > 0) {

                $officialsNum = 0;
                while ($row = $data->fetch()) {
                    $officails[$officialsNum] =    array(
                        'Id' => $row['officails_id'],
                        'Photo' => $row['officails_photo'],
                        'Name' => $row['officails_name'],
                        'Position' => $row['officails_position'],
                        'Term' => $row['officails_term'],
                        'Purok' => $row['officails_purok'],
                        'Status' => $row['officails_status'],
                        'Age' => $row['officails_age'],
                        'CivilStatus' => $row['officails_civil_status'],
                        'Gender' => $row['officails_gender'],
                        'BirtDate' => $row['officails_birth_date'],
                        'Contact' => $row['officails_contact']
                    );
                    $officialsNum++;
                }
            }

            echo json_encode($officails);
            unset($data);
        } catch (PDOException $th) {
            die("ERROR: Could not able to execute $getOfficials_data." . $th->getMessage());
        }


        // Update officail Data =================
    } else if ($_POST['option'] === "update") {
        $updateFile = new FileUpload();
$updatedPhoto = $updateFile->upload("update" ,$_FILES['photo'],$_POST['path']);

        $updateOfficials_data = "UPDATE `officails_data` SET officails_photo = ?, officails_name= ?,officails_position=?,officails_term=?,officails_purok=?,officails_status=?,officails_age=?,officails_civil_status=?,officails_gender=?,officails_birth_date=?,officails_contact=? WHERE officails_id = ?";

        try {
            $editdata = $conn->prepare($updateOfficials_data);
            $nma = "php";
            $editdata->bindParam(1, $updatedPhoto, PDO::PARAM_STR);
            $editdata->bindParam(2, $_POST['name'], PDO::PARAM_STR);
            $editdata->bindParam(3, $_POST['position'], PDO::PARAM_STR);
            $editdata->bindParam(4, $_POST['term'], PDO::PARAM_STR);
            $editdata->bindParam(5, $_POST['purok'], PDO::PARAM_STR);
            $editdata->bindParam(6, $_POST['status'], PDO::PARAM_STR);
            $editdata->bindParam(7, $_POST['age'], PDO::PARAM_INT);
            $editdata->bindParam(8, $_POST['civilstatus'], PDO::PARAM_STR);
            $editdata->bindParam(9, $_POST['gender'], PDO::PARAM_STR);
            $editdata->bindParam(10, $_POST['birthdate'], PDO::PARAM_STR);
            $editdata->bindParam(11, $_POST['contact'], PDO::PARAM_STR);
            $editdata->bindParam(12, $_POST['id'], PDO::PARAM_INT);
            $editdata->execute();
            echo json_encode(array('updated' => "updated"));
            unset($editdata);
        } catch (PDOException $th) {
            die("ERROR: Could not able to execute $updateOfficials_data." . $th->getMessage());
            
        }

        // delete officail query

    } else if ($_POST['option'] === "delete") {


        // $deleteFile = new FileUpload();
        
        $DeleteOfficials_data = "DELETE FROM `officails_data` WHERE officails_id = ?";

        try {
            $deletedata = $conn->prepare($DeleteOfficials_data);


            $deletedata->bindParam(1, $_POST['id'], PDO::PARAM_INT);

            $deletedata->execute();
            echo json_encode(array('deleted' => true));
            
            if(unlink("./filee")){
                
            }
            unset($deletedata);
        } catch (PDOException $th) {

            die("ERROR: Could not able to execute $DeleteOfficials_data." . $th->getMessage());
        }


        // Create
    } else if ($_POST['option'] === "create") {

        $createFile = new FileUpload();
    $photoPath   = $createFile->upload("create" ,$_FILES['photo'],"./../assets/ui-user-profile.svg");


        $createOfficials_data = "INSERT INTO `officails_data`  (officails_photo , officails_name,officails_position,officails_term,officails_purok,officails_status,officails_age,officails_civil_status,officails_gender,officails_birth_date,officails_contact) VALUE(?,?,?,?,?,?,?,?,?,?,?)";

        try {
            $editdata = $conn->prepare($createOfficials_data);
          
            $editdata->bindParam(1, $photoPath, PDO::PARAM_STR);
            $editdata->bindParam(2, $_POST['name'], PDO::PARAM_STR);
            $editdata->bindParam(3, $_POST['position'], PDO::PARAM_STR);
            $editdata->bindParam(4, $_POST['term'], PDO::PARAM_STR);
            $editdata->bindParam(5, $_POST['purok'], PDO::PARAM_STR);
            $editdata->bindParam(6, $_POST['status'], PDO::PARAM_STR);
            $editdata->bindParam(7, $_POST['age'], PDO::PARAM_INT);
            $editdata->bindParam(8, $_POST['civilstatus'], PDO::PARAM_STR);
            $editdata->bindParam(9, $_POST['gender'], PDO::PARAM_STR);
            $editdata->bindParam(10, $_POST['birthdate'], PDO::PARAM_STR);
            $editdata->bindParam(11, $_POST['contact'], PDO::PARAM_STR);
            $editdata->execute();

            echo json_encode(array('created' => $photoPath));

            unset($editdata);
        } catch (PDOException $th) {
            // echo json_encode(array('created'=> true));
            die("ERROR: Could not able to execute $createOfficials_data." . $th->getMessage());
        }
    }
} else {
    echo json_encode(array('created' => true));
}
