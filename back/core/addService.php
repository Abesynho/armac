<?php
include('../controller_back/service_C.php');
include ('../model_back/service.php');

$service_C =new service_C();

$type=$_POST['type'];
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$desc=$_POST['description'];


$service=new service($type,$nom,$prix,$desc);

$service_C->ajouterService($service,$service_C->conn);
if($service_C->conn)
    ?>
    <script type="text/javascript">
        alert('ADDED SUCCESSFULLY !');
    </script>
    <?php
header('Location: ../view_back/Service.php');


?>





