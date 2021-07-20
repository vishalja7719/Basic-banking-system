 <?php
    include 'connection.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($con, $sql);
    ?>  

  

<!DOCTYPE html>
<html>
<head>
    <title>Customer</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">


     <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="stylesheets/customer.css">
     
</head>
<body>
     
   <?php
    include 'navbar.php';
    ?>

    <br>
       
      <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-danger">
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email-ID</th>
                        <th scope="col">Balance</th>
                    </tr>
                </thead>

      <?php
      while ($rows = mysqli_fetch_assoc($result)) {
           ?>
                <tbody>
                <tr class="table-light">
                 <td class="py-2"><?php echo $rows['id'] ?></td>
                 <td class="py-2"><?php echo $rows['cname'] ?></td>
                 <td class="py-2"><?php echo $rows['email'] ?></td>
                 <td class="py-2"><?php echo $rows['balance'] ?></td>
              </tr></tbody>
                <?php } ?>
                
            </table>
        </div>
      </div>



</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

</body>
</html>