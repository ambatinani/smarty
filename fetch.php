 <?php
include('connect.php');


 $reg= $['reg'];
  

$sql="SELECT * FROM student where studentcode='".$reg."' limit 1";
$result = $conn->query($sql);

if($result->num_rows >= 1)
{
  


 while($row = mysqli_fetch_row($result))
 {
   
      echo "$row[0]";
      echo "$row[1]";
      echo "$row[2]";
      echo "$row[3]";
   



     

 }

}


else{
echo "NO Details Found";
}









$conn->close();

?>
