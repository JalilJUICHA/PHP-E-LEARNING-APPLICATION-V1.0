<?php

$payment = [
    [
       'Name' => 'Joe1',
       'PaymentShedule' => 'First1',
       'BillNumber' => '01234567',
       'AmountPaid' => '242354DHS',
       'BalancePaid' => '433DHS',
       'Date' => '5-Jan,2022',
       'Icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'
    ],
    [
        'Name' => 'Joe2',
        'PaymentShedule' => 'First2',
        'BillNumber' => '3453344',
        'AmountPaid' => '335655DHS',
        'BalancePaid' => '345DHS',
        'Date' => '5-Jan,2022',
        'Icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'
    ],
    [
        'Name' => 'Joe3',
        'PaymentShedule' => 'First2',
        'BillNumber' => '774844',
        'AmountPaid' => '3876DHS',
        'BalancePaid' => '35474DHS',
        'Date' => '5-Jan,2022',
        'Icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'
    ],
    [
        'Name' => 'Joe4',
        'PaymentShedule' => 'First2',
        'BillNumber' => '346467',
        'AmountPaid' => '353464DHS',
        'BalancePaid' => '43654DHS',
        'Date' => '5-JAN,2022',
        'Icon' => '<i class="fa fa-eye" aria-hidden="true"></i>'
    ]
    
]


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /Payment</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="container-fluid">
        <div class="row">
          <?php include "include/sideBar.php"  ?>

          
          
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-12">

            <?php include "include/navBar.php" ?>

                <!-- ============================= -->
                <div class="row mt-5 flex-row">
                    <div class="title col-lg-4 col-md-6 col-sm-12">
                        <h2>Payements Details</h2>
                    </div>
                    <div class="d-flex gap-2 align-items-center justify-content-end col-lg-8 col-md-6 col-sm-12">
                        <div style="font-size: 1.5rem;">
                            <i class="fa fa-chevron-up fs-6 "  aria-hidden="true"></i>
                        </div>
                    </div>
                    <hr class="m-auto" style="width: 97%;">
                </div>
                <div class="row mt-2 px-5">
                    <table class="table">
                        <thead>
                            <tr class="">
                                <th scope="col">Name</th>
                                <th scope="col">Payment Shedule</th>
                                <th scope="col">Bill Number</th>
                                <th scope="col">Amounts Paid</th>
                                <th scope="col">Balance Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="flex-column">
                            
                        <?php 
                            foreach ($payment as $value) {                           
                         ?>
                            <tr class="mt-1">
                                <td class="align-middle "><?php echo $value['Name'] ?></td>
                                <td class="align-middle "><?php echo $value['PaymentShedule'] ?></td>
                                <td class="align-middle "><?php echo $value['BillNumber'] ?></td>
                                <td class="align-middle "><?php echo $value['AmountPaid'] ?></td>
                                <td class="align-middle "><?php echo $value['BalancePaid'] ?></td>
                                <td class="align-middle "><?php echo $value['Date'] ?></td>
                                <td class="align-middle "><?php echo $value['Icon'] ?></td>
                                  
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