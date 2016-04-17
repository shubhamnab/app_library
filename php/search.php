<?php

	$data = json_decode(file_get_contents("php://input"));
    $areaSelected = $data->area;
    $serviceSelected = $data->service;
echo $areaSelected;
   
?>