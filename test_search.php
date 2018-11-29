<?php
include("config.php");

$output = '';
if(isset($_GET['q']) && $_GET['q'] !== ' '){
   $searchq = $_GET['q'];
  $q = mysqli_query("SELECT * FROM search WHERE keywords LIKE '%$searchq%' OR title LIKE '%$searchq%'") or die(mysqli_error());
  $count = mysqli_count_rows($q);

  if($count == 0){
            $output = 'No search results for <b>"' . $searchq. '"</b>';
                } 
                else{
                    while($row = mysqli_fetch_array($q)){
                      $id = $row['id'];
                      $title = $row['title'];
                      $description = $row['description'];
                      $link = $row['link'];

                      $output .= '<href="' . $link . '"><h3>' . $title . '</h3><p>' . $description . '</p></a>';
                      print("$output");
                    }
                  }
   
    print("$output");
    mysqli_close("config.php");
  }
?>