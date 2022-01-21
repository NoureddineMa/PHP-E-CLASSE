<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link font style from google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap"
      rel="stylesheet"
    />

    <!-- link font awesome  -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <!-- link bootstrap -->
    <link
      rel="stylesheet"
      href="assets/bootstrap-5.1.3-dist/css/bootstrap.css"
    />
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Payment</title>
  </head>


  <body>

        <!-- start side bar -->
    <!-- include navbar.php -->
    <?php include 'sidebar.php' ;?>  
                 <!-- end side bar -->

            <!-- start nav bar  -->
<!-- <div class="col col-sm-10 flex-column-sm h-sm-50 my-2 ">
                <nav class="navbar ">
                    <div class="container-fluid">
                        <a href="#" class="fal fa-caret-circle-left text-decoration-none text-muted "></a>
                            <form class="d-flex align-items-center">
                                <div class="position">
                                    <input class="form-control  " type="search" placeholder="Search..." aria-label="Search">
                                    <a href="#">
                                    <i class="far fa-search position-a text-muted"></i>
                                </div>
                                </a>
                               
                                    <i class="fal fa-bell ms-2 text-muted"></i>
                            </form>
                    </div>       
                </nav> -->
                <!-- include navbar.php -->
        <?php include 'navbar.php' ;?>       
           
         <!-- end nav bar -->

         <div class="bg-light py-2  ">
            <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
                <h5 class=" fw-bolder d-none d-sm-block mx-3">Payment Details</h5>
                <div class="d-flex align-items-center">
                    <i class="far fs-6 fa-sort me-3 text-info d-sm-block"></i>
                </div>
            </div>
        <hr>
        <main class="row">
            <div class="container ">
                <div class="table-responsive-sm table-responsive-md px-4">
        <table class="table align-middle table-borderless ">
            <thead>
              <tr>
                <th scope="col" class="text-muted h6 ">Name</th>
                <th scope="col" class="text-muted h6 " >Payment Schedule</th>
                <th scope="col" class="text-muted h6 ">Bill Number</th>
                <th scope="col" class="text-muted h6 ">Amount Paid</th>
                <th scope="col" class="text-muted h6 ">Balance amount</th>
                <th scope="col" class="text-muted h6 ">Date </th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr class=" bg-white">
                <th scope="row" >maher</th>
                <td>First</td>
                <td>00012223</td>
                <td>DHS 100,000</td>
                <td>DHS 500,000</td>
                <td>05-Jan, 2022</td>
                <td><i class="fal fa-eye text-info"></i></td>
                </tr>
                <tr>
                    <th scope="row" >maher</th>
                    <td>First</td>
                    <td>00012223</td>
                    <td>DHS 100,000</td>
                    <td>DHS 500,000</td>
                    <td>05-Jan, 2022</td>
                    <td><i class="fal fa-eye text-info"></i></td>
                    </tr>
                    <tr class=" bg-white">
                        <th scope="row" >maher</th>
                        <td>First</td>
                        <td>00012223</td>
                        <td>DHS 100,000</td>
                        <td>DHS 500,000</td>
                        <td>05-Jan, 2022</td>
                        <td><i class="fal fa-eye text-info"></i></td>
                        </tr>
                        <tr >
                            <th scope="row" >maher</th>
                            <td>First</td>
                            <td>00012223</td>
                            <td>DHS 100,000</td>
                            <td>DHS 500,000</td>
                            <td>05-Jan, 2022</td>
                            <td><i class="fal fa-eye text-info"></i></td>
                            </tr>
              
            </tbody>
          </table>
         
</div>


  </body>
</table>
</div>
</div>  
</html>
