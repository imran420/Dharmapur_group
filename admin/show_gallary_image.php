<?php
     session_start();
     if(!isset($_SESSION['usrnm'])){
        header("Location:login.html");
     }

?>

<?php  

include_once 'dbconnect.php';
    $connect = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

 // $connect = mysqli_connect("localhost", "root", "", "dcl");    
 ?>  





 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Insert and Display Gallary Images</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style type="text/css">
            body
            {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              /*background-color: #B5D77E;*/
              background-color: lightblue;
            }
            .upload
            {
              height: 600px;
              width: 1000px;
              /*background-color: red;*/
              position: fixed;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
            }

            .logo
            {
              width: 100%;
              height: 150px;
              text-align: center;
              padding: 0;
              margin-top: 60px;
              /*background-color: green;*/
            }

            .logo img
            {
              width: 150px;
              height: 150px;
              margin: auto;
              display: block;
              border-radius: 15px;
            }
            .text
            {
              width: 100%;
              height: 40px;
              /*background-color: green;*/
              padding-top: 30px;
            }
            .text h1
            {
              font-family: 'Poppins', sans-serif;
              font-size: 26px;
              text-align: center;
              color: black;
              margin: 0;
            }
            .text p
            {
              font-family: 'Alfa Slab One', cursive;
              font-size: 38px;
              text-align: center;
              color: black;
              margin: 0;
              letter-spacing: 1px;
            }
            .button
            {
              display: flex;
              flex-wrap: wrap;
              justify-content: center;
            }
            .box
            {
              width: 28%;
              height: 100px;
              /*background-color: blue;*/
              margin-top: 120px;
            }

            .btn:link,
            .btn:visited
            {
              text-decoration: none;
              font-family: 'Poppins', sans-serif;
              position:relative;
              font-size: 16px;
              top:0;
              left:0;
              padding:20px 40px;
              border-radius:100px;
              display:inline-block;
              transition: all .5s;
            }

            .btn-white
            {
              /*background:#6195FF;*/
              background: rgb(131,24,221);
              background: linear-gradient(90deg, rgba(131,124,221,1) 0%, rgba(198,11,216,1) 38%, rgba(131,24,221,1) 100%);
              color:#000;
            }

            .btn:hover
            {
               box-shadow:0px 10px 10px rgba(0,0,0,0.2);
               transform : translateY(-3px);
            }

            .btn:active
            {
              box-shadow:0px 5px 10px rgba(0,0,0,0.2)
              transform:translateY(-1px);
            }

            .btn-bottom-animation-1
            {
              animation:comeFromBottom 1s ease-out .8s;
            }

            .btn::after
            {
              content:"";
              text-decoration: none;
              text-transform:uppercase;
              position:absolute;
              width:100%;
              height:100%;
              top:0;
              left:0;
              border-radius:100px;
              display:inline-block;
              z-index:-1;
              transition: all .5s;
            }

            .btn-white::after 
            {
                background: #fff;
            }

            .btn-animation-1:hover::after 
            {
                transform: scaleX(1.4) scaleY(1.6);
                opacity: 0;
            }

            @keyframes comeFromBottom
            {
              0%
              {
                opacity:0;
                transform:translateY(40px);
              } 
              100%
              {
                opacity:1;
                transform:translateY(0);
              }
            }

            }
           a:link, a:visited {
          background-color: #f44336;
          color: white;
          padding: 14px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          transform: translateX(400px);
        }

        a:hover, a:active {
          background-color: white;
        }
            </style>

      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:1500px;">  
                <h1 align="center">Display Gallary Images</h3>  
                 <a href="upload.html" class="btn btn-white btn-animation-1"><span>Go TO HomePage</span></a> 
                  <div class="selection"> 
                          <div class="container">
                          <div class="row side_padding">    
                     
                      <h1>Office</h1><br>        
                      <?php  
                      $query = "SELECT * FROM tbl_images WHERE category='Office'";  
                      $result = mysqli_query($connect, $query);  
                       $delete="delete";
                      while($row = mysqli_fetch_array($result))  
                      {  echo '<div class="col-sm-3">';
                           echo ' 
                            <td><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                                    </td>
                                    ';
                            echo "<div><td></td><td><a href='delete_imp.php?id=".$row['id']."'>".$delete."</a></td></tr></div>";
 
                            echo '</div>';  
                      }  
                      ?>  
                    </div>
                  </div>
                </div>
                  <div class="selection"> 
                          <div class="container">
                          <div class="row side_padding">    
                     
                                <h1>Factory</h1><br>  
                          
                            
                      <?php  
                      $query = "SELECT * FROM tbl_images WHERE category='Factory'";  
                      $delete="delete";
                      $result = mysqli_query($connect, $query);  
                      while($row = mysqli_fetch_array($result))  
                      { 
                        echo '<div class="col-sm-3">';
                           echo ' 
                            <td><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                                    </td>
                                    ';
                            echo "<div><td></td><td><a href='delete_imp.php?id=".$row['id']."'>".$delete."</a></td></tr></div>";
 
                            echo '</div>';
                      }  
                      ?>  
                    </div>
                  </div>
                </div>
                  
                  <div class="selection"> 
                          <div class="container">
                          <div class="row side_padding">    
                     
                                <h1>Ocation</h1><br>  
                          
                            
                      <?php  
                      $query = "SELECT * FROM tbl_images WHERE category='Ocation'";  
                      $result = mysqli_query($connect, $query);  
                      $delete="delete";
                      while($row = mysqli_fetch_array($result))  
                      { 
                        echo '<div class="col-sm-3">';
                           echo ' 
                            <td><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                                    </td>
                                    ';
                            echo "<div><td></td><td><a href='delete_imp.php?id=".$row['id']."'>".$delete."</a></td></tr></div>";
 
                            echo '</div>';
                      }  
                      ?>  
                    </div>
                  </div>
                </div>
                  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  