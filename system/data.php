<?php
if(isset($_POST['email'])){
$ngGet = file_get_contents("../codexlaha/data.json");
$data = json_decode($ngGet,true);
$data['email'] = $_POST['email'];
$data['totals'] = 0;
$ngResult = json_encode($data);
$ngFile = fopen('../codexlaha/data.json','w');
           fwrite($ngFile,$ngResult);
           fclose($ngFile);
echo "Sukses";
}
if(isset($_POST['nama'])){
$ngGet = file_get_contents("../codexlaha/data.json");
$data = json_decode($ngGet,true);
$data['nama'] = $_POST['nama'];
$ngResult = json_encode($data);
$ngFile = fopen('../codexlaha/data.json','w');
           fwrite($ngFile,$ngResult);
           fclose($ngFile);
echo "Sukses";
}
