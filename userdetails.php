<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.
    $query = mysqli_query($conn,$sql);

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

    // constraint to check input of negative value by user
    if (($amount)<0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred!")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) {
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance!")';  // showing an alert box.
        echo '</script>';
    }
    
    // constraint to check zero values
    else if($amount == 0){
         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred!')";
         echo "</script>";
        }
        else {
            // deducting amount from sender's account
            $newbalance = $sql1['balance'] - $amount;
            mysqli_query($conn,$sql);
            $sql = "UPDATE users set balance=$newbalance where id=$from";
            
            // adding amount to reciever's account
            $newbalance = $sql2['balance'] + $amount;
            $sql = "UPDATE users set balance=$newbalance where id=$to";
            mysqli_query($conn,$sql);
            
            $sender = $sql1['name'];
            $receiver = $sql2['name'];
            $sql = "INSERT INTO transactions(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
            $query=mysqli_query($conn,$sql);
            
            if($query){
                echo "<script> alert('Transaction Successful!');
                window.location='transhistory.php';
                </script>";
            }
            $newbalance= 0;
            $amount =0;
        }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaction User Details</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="img/fav.png"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
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
    font-weight: 600;
}
label{
    font-size: 2.5rem;
    font-weight: 800;
    color: #012970;
    margin-top: 1rem;
}
input{
    font-size: 1.5rem;
    font-weight: 600;
    padding: 0.2rem;
    font-size: 1.7rem;
    color: #333;
    text-transform: capitalize;
    border: .1rem solid rgba(0, 0, 0, 0.3);
    box-shadow: 0 0.5rem 0.5rem 0.2rem rgba(0, 0, 0, 0.1);
    border-radius: .5rem;
    width: 100%;
    height: 4rem;
    margin: 0 1rem 0 1rem;
}
select{
    font-size: 1.5rem;
    font-weight: 600;
    width: 100%;
    margin: 0 1rem 0 1rem;
    height: 4rem;
    border: .1rem solid rgba(0, 0, 0, 0.3);
    box-shadow: 0 0.5rem 0.5rem 0.2rem rgba(0, 0, 0, 0.1);
    border-radius: .5rem;
}
.btn {
  margin-top: 0.2rem;
  line-height: 0;
  padding: 1.4rem 2.5rem;
  border-radius: 0.5em;
  transition: 0.5s;
  color: #fff;
  float: left;
  background: #2437e7;
  box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
}
.btn span {
  font-family: "Nunito", sans-serif;
  font-weight: 700;
  font-size: 1.5rem;
}
.btn i {
  margin-left: 0.3rem;
  font-size: 1.4rem;
  transition: 0.3s;
}
.btn:hover i {
  transform: translate(5px);
}
.btn:hover {
  background: #3e4fe2;
}
.card{
    justify-content: center;
    align-items: center;
    padding: 4rem;
    width: 40%;
    float: center;
    background: #fff;
    box-shadow: 0 .5rem 2rem rgba(0, 0, 0, 0.1);
    border-radius: 1rem;
    border:none;
}
@media(max-width:450px){
  .card {
    width: 100%;
  }
}
</style>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>

	<div class="container">
        <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result) {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
                ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
            <div>
                <table class="table table-striped table-condensed table-bordered">
                <thead>    
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">Balance</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="py-3 text-center"><?php echo $rows['id'] ?></td>
                    <td class="py-3"><?php echo $rows['name'] ?></td>
                    <td class="py-3"><?php echo $rows['email'] ?></td>
                    <td class="py-3">&#8377; <?php echo $rows['balance'] ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <br><br><br>
        <div class="card mx-auto">
        <label>Transfer To :</label>
        <select name="to" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result) {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
                    ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                    <?php echo $rows['name'] ;?> (Balance: &#8377;<?php echo $rows['balance'] ;?>) 
                </option>
                <?php 
                } 
                ?>
            <div>
                </select>
                <label>Amount :</label>
                <input type="number" name="amount" required>   
                <br><br>
                <div>
                <button class="btn" name="submit" type="submit" id="myBtn"><span>Transfer</span>
                <i class="fa fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</div>

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
