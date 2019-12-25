<?php  
 //  

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 function get_data()  
 {  
      $connect = mysqli_connect("localhost", "root", "", "nammauk");  
      $query = "SELECT * FROM `news`";

   


      $result = mysqli_query($connect, $query);  
      $news_data = array();  

      while($row = mysqli_fetch_array($result))  
      {  
           $news_data[] = array(  
                    'id'          =>     $row["id"], 
                'title'          =>     $row["title"], 
                'img'     =>    'abc.jpg'
           );  


      }
       
      echo json_encode($news_data);  

 }  

 
 get_data();
 ?>