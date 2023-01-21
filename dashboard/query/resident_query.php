<?php
header("Content-Type: application/json");
include_once("./dbConnection.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['auth'] == "admin") {

    // for getting data from officials
    if ($_POST['option'] === "get") {
        $getResident_data = "SELECT * FROM `resident_data`";

        try {
            $resident = [];
            $data = $conn->query($getResident_data);

            if ($data->rowCount() > 0) {

                $Resident_num = 0;
                while ($row = $data->fetch()) {
                    $resident[$Resident_num] =    array(
                        'Id' => $row['resident_id'],
                        'Photo' => $row['resident_photo'],
                        'Name' => $row['resident_name'],
                        'Ethnicity' => $row['resident_ethnicity'],
                        'CivilStatus' => $row['resident_civilstatus'],
                        'Age' => $row['resident_age'],
                        'Gender' => $row['resident_gender'],
                        'BirtDate' => $row['resident_birthdate'],
                        'Contact' => $row['resident_contact'],
                        'Purok' => $row['resident_purok'],
                    );
                    $Resident_num++;
                }
            }

            echo json_encode($resident);
            unset($data);
        } catch (PDOException $th) {
            die("ERROR: Could not able to execute $getResident_data." . $th->getMessage());
        }


        // Update officail Data =================
    } else if ($_POST['option'] === "update") {



        $updateResident_data = "UPDATE `resident_data` SET resident_photo = ?, resident_name= ?,resident_purok=?,resident_civilstatus=?,resident_gender=?,resident_birthdate=?,resident_contact=?,resident_age=?, resident_ethnicity=? WHERE resident_id = ?";

        try {
            $updateResident = $conn->prepare($updateResident_data);

            $updateResident->bindParam(1, $_POST['Photo'], PDO::PARAM_STR);
            $updateResident->bindParam(2, $_POST['Name'], PDO::PARAM_STR);
            $updateResident->bindParam(3, $_POST['Purok'], PDO::PARAM_STR);
            $updateResident->bindParam(4, $_POST['CivilStatus'], PDO::PARAM_STR);
            $updateResident->bindParam(5, $_POST['Gender'], PDO::PARAM_STR);
            $updateResident->bindParam(6, $_POST['BirthDate'], PDO::PARAM_STR);
            $updateResident->bindParam(7, $_POST['Contact'], PDO::PARAM_STR);
            $updateResident->bindParam(8, $_POST['Age'], PDO::PARAM_INT);
            $updateResident->bindParam(9, $_POST['Ethnicity'], PDO::PARAM_STR);
            $updateResident->bindParam(10, $_POST['Id'], PDO::PARAM_INT);


            $updateResident->execute();
            echo json_encode(array('updated' => true));
            unset($updateResident);
        } catch (PDOException $th) {

            die("ERROR: Could not able to execute $updateResident_data." . $th->getMessage());
        }

        // delete officail query

    } else if ($_POST['option'] === "delete") {

        $DeleteResident_data = "DELETE FROM `resident_data` WHERE resident_id = ?";

        try {
            $updateResident = $conn->prepare($DeleteResident_data);


            $updateResident->bindParam(1, $_POST['Id'], PDO::PARAM_INT);

            $updateResident->execute();
            echo json_encode(array('deleted' => true));
            unset($updateResident);
        } catch (PDOException $th) {

            die("ERROR: Could not able to execute $DeleteResident_data." . $th->getMessage());
        }


        // Create
    } else if ($_POST['option'] === "create") {
        $createResident_data = "INSERT INTO `resident_data` (resident_photo , resident_name, resident_purok,resident_civilstatus,resident_gender,resident_birthdate,resident_contact,resident_age,resident_etnicity)     VALUE(?,?,?,?,?,?,?,?,?)";

        try {
            $createResident = $conn->prepare($createResident_data);

            $createResident->bindParam(1, $_POST['Photo'], PDO::PARAM_STR);
            $createResident->bindParam(2, $_POST['Name'], PDO::PARAM_STR);
            $createResident->bindParam(3, $_POST['Purok'], PDO::PARAM_STR);
            $createResident->bindParam(4, $_POST['CivilStatus'], PDO::PARAM_STR);
            $createResident->bindParam(5, $_POST['Gender'], PDO::PARAM_STR);
            $createResident->bindParam(6, $_POST['BirthDate'], PDO::PARAM_STR);
            $createResident->bindParam(7, $_POST['Contact'], PDO::PARAM_STR);
            $createResident->bindParam(8, $_POST['Age'], PDO::PARAM_INT);
            $createResident->bindParam(9, $_POST['Ethnicity'], PDO::PARAM_STR);

            $createResident->execute();
            echo json_encode(array('created' => true));
            unset($createResident);
        } catch (PDOException $th) {
            echo json_encode(array('erorr' => $th->getMessage));
            die("ERROR: Could not able to execute $createResident_data." . $th->getMessage());
        }
    }
}
