<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SmartIntern</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

      html {
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
  </head>

  <body class="leading-normal tracking-normal text-indigo-400 m-6 bg-cover bg-fixed" style="background-image: url('header.png');">
    <div class="h-full">
      <!--Nav-->
      <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between">
          <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="index.php">
            Smart<span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Intern</span>
          </a>

          
        </div>
         
           
              
            </a>
          </div>
        </div>
      </div>

      <!--Main-->
      <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
  
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
              Certificate Holder Details
            </span>
          
          </h1>
          
           <?php
include('connect.php');


 $reg= $_POST['reg'];
  

$sql="SELECT * FROM student where studentcode='".$reg."' limit 1";
$result = $conn->query($sql);

if($result->num_rows >= 1)
{
  


 while($row = mysqli_fetch_row($result))
 {
    echo '<form class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">';
     echo  '<div class="mb-4">';
       echo   '<label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">Name:'; 
         
         echo "$row[0]";
            echo "</label>" ;
             echo '<label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">Training name:'; 
              echo "$row[2]";
              echo "</label>";
              echo '<label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">College name:';
              echo "$row[1]";
              echo "</label>";
              echo '<label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress"> Date of Certification:';
              echo "$row[3]";
              echo "</label>";
              
            echo "</div>";

            
          echo "</form>";
     


     

 }

}


else{

 echo '<form class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4" action="verifypage.php">';
     echo  '<div class="mb-4">';
       echo   '<label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">';
       echo " No Certificate details found with given Certificate ID";
       echo "</label>";
         echo   '<label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">';
       echo " Kindly Check Certificate ID and try again";
       echo "</label>";
       echo '<a href="verifypage.php">';
       echo ' <button
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                type="submit"
              >';
          echo "Retry";    
             echo  "</button></a>";
              echo "</div>";

            
          echo "</form>";
     

}









$conn->close();

?>


          
        </div>
 <!--Right Col-->
        <div class="w-full xl:w-3/5 p-12 overflow-hidden">
          <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="macbook.svg" />
        </div>
       

         

       
        
        <!--Footer-->
        <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
          <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; SmartIntern Technologies OPC Private Limited.</a>
        
         
        </div>
      </div>
    </div>
  </body>
</html>
