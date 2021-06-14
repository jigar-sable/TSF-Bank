<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/fav.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<style>
table{
    font-size: 1.5rem;
    margin-top: 10rem;
    background: #fff;
}
thead th{
    background: #012970;
    font-family: "Roboto", sans-serif;
    color: #fff;
    letter-spacing: 0.1rem;
}
tbody td{
    font-family: "Roboto", sans-serif;
    text-transform: none;
    font-size: 1.8rem;
    font-weight: 500;
}
</style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-3">ID</th>
                            <th scope="col" class="text-center py-3">Name</th>
                            <th scope="col" class="text-center py-3">E - Mail</th>
                            <th scope="col" class="text-center py-3">Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-3 text-center"><?php echo $rows['id'] ?></td>
                        <td class="py-3 text-left"><?php echo $rows['name']?></td>
                        <td class="py-3 text-left"><?php echo $rows['email']?></td>
                        <td class="py-3 text-center">&#8377; <?php echo $rows['balance']?></td>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>