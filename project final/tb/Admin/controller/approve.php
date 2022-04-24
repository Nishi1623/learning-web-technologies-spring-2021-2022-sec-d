<?php

    require_once('../services/userService.php');

        $id = $_POST['id'];



        $approvalParam = [     
            'id'	=> $id
        ];

       $status = approve($approvalParam);
        
        if($status){


            echo "Job post Approved";


        }
  


?>