<?php

$student = [
    [
        'Name' => 'Joe',
        'Email' => 'Joe@gmail.com',
        'Phone' => '061234567',
        'Enrollnumber' => '3453653',
        'Dateofadmission' => '26-Nov-21'
    ],

    [
        'Name' => 'Joe',
        'Email' => 'Joe@gmail.com',
        'Phone' => '061234567',
        'Enrollnumber' => '3453653',
        'Dateofadmission' => '26-Nov-21'
    ],

    [
        'Name' => 'Joe',
        'Email' => 'Joe@gmail.com',
        'Phone' => '061234567',
        'Enrollnumber' => '3453653',
        'Dateofadmission' => '26-Nov-21'
    ],

    [
        'Name' => 'Joe',
        'Email' => 'Joe@gmail.com',
        'Phone' => '061234567',
        'Enrollnumber' => '3453653',
        'Dateofadmission' => '26-Nov-21'
    ],

    [
        'Name' => 'Joe',
        'Email' => 'Joe@gmail.com',
        'Phone' => '061234567',
        'Enrollnumber' => '3453653',
        'Dateofadmission' => '26-Nov-21'
    ]

]


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /Students</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="container-fluid">
        <div class="row flex-nowrap">
           <?php include "include/sideBar.php"  ?>
          
           <div class="col-10">

            <?php include "include/navBar.php" ?>


                <!-- ============================= -->
                <div class="row mt-5 flex-row">
                    <div class="col-10  d-flex flex-nowrap justify-content-between w-100">
                        <h2>Students List</h2>
                        <div style="font-size: 1.3rem;">
                            <i class="fa fa-chevron-up fs-6 "  aria-hidden="true"></i>

                            <a href="#" class="btn btn-primary text-uppercase">add new student</a>
                        </div>
                    </div>
                    <hr class="m-auto" style="width: 100%;">
                </div>
                <div class="row mt-2 px-2 table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="">
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Enroll number</th>
                                <th scope="col">Date of admission</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        
                        <?php 
                            foreach ($student as $value) {                           
                         ?>
                            <tr>
                                <td class="align-middle "><?php echo $value['Name'] ?></td>
                                <td class="align-middle "><?php echo $value['Email'] ?></td>
                                <td class="align-middle "><?php echo $value['Phone'] ?></td>
                                <td class="align-middle "><?php echo $value['Enrollnumber'] ?></td>
                                <td class="align-middle "><?php echo $value['Dateofadmission'] ?></td>
                            </tr>

                        <?php    

                            }      
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>