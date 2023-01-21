<?php
header("Content-Type: application/json");

$photo = 'Photo';
$Name = 'Name';
$Position ='Position';
$Term = 'Term';
$Purok ='Purok';
$Status ='Status';

$option = $_POST['option'];




 $data = [];

$data[0] =    array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);

$data[1] = array(
    'Photo' => ' $photo',
    'Name' => '$Name',
    'Position' => '$Position',
    'Term' => '$Term',
    'Purok' => '$Purok',
    'Status' => '$Status'
);
$data[2] =  array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);
$data[3] =  array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);
$data[4] =  array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);
$data[5] =  array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);
$data[6] =  array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);
$data[7] =  array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);
$data[8] =  array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);
$data[9] =  array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);
$data[10] =  array(
    'Photo' => $photo,
    'Name' => $Name,
    'Position' => $Position,
    'Term' => $Term,
    'Purok' => $Purok,
    'Status' => $Status
);

if($option == "get"){
get($data);
}


function get($data)
{
    echo json_encode($data);
}
    // echo json_encode(array('Photo' => $photo,
    //             'Name' => $Name,
    //             'Position' => $Position,
    //             'Term' => $Term,
    //             'Purok' => $Purok,
    //             'Status' =>$Status));
