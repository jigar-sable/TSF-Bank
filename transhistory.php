<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/fav.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
    font-size: 1.7rem;
    font-weight: 500;
}
</style>
</head>

<body>
<?php
  include 'navbar.php';
?>

	<div class="container">
    <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="py-3 text-center">S.No.</th>
                <th class="py-3 text-center">Sender</th>
                <th class="py-3 text-center">Receiver</th>
                <th class="py-3 text-center">Amount</th>
                <th class="py-3 text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';
            $sql ="select * from transactions";
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
            <td class="py-3 text-center"><?php echo $rows['sno']; ?></td>
            <td class="py-3 text-left"><?php echo $rows['sender']; ?></td>
            <td class="py-3 text-left"><?php echo $rows['receiver']; ?></td>
            <td class="py-3 text-left">&#8377;<?php echo $rows['balance']; ?> </td>
            <td class="py-3 text-center"><?php echo $rows['datetime']; ?> </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    </div>
</div>

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>