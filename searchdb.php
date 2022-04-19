<html>
    <head>
        <title>
            book entry
        </title>
       
    </head>
    <style>

body{
   
   background-image:url("image/home.jpg");
background-position: center;
background-size: cover;
}
.head{
   
   background-color: #dbf7a68e;
margin: 40px;
padding: 40px;
margin-top: 40px;

}
.head h1{
   font-size: 50px;
}
.container{
    padding: 50px;
    
}


h1{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: 50px;
    text-align: center;
   
    font-size: xx-large;
}


.tt{
    padding: 50px;
   width: 100%;
    text-align: center;
    font-family: cursive;
    font-size: 20px;
}
tr,td,th{
    border: 1px solid black;
    padding-top: 12px;
  padding-bottom: 12px;
 
 

}
td,  th {
  border: 1px solid #ddd;
  background-color: #581845cb;
  color: white;
  padding: 8px;
}

 tr:nth-child(odd){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}
.sea{
    padding: 50px;
  
    width: 40%;
    margin: 40px;

}
.topnav {
  overflow: hidden;
  background-color: #dbf7a63b;

}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #581845;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 0px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 0px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
    </style>
    <body>
    <div class="topnav">
    <a class="active" href="index.html">Home</a>
    
    
  </div>
        <div class='container'>
  <div class="head">
  <center><h1>Book Details</h1></center>
  <?php  
 

 session_start();
$con=mysqli_connect('127.0.0.1','root','123');
mysqli_select_db($con,'library_management');

$book_id=$_POST['book_id'];
$book_name=$_POST['book_name'];

$s="select * from lib where book_id='$book_id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

function function_alert($msg) {
echo "<script type='text/javascript'>alert('$msg');</script>";
}
if($num ==1){
function_alert("book is available");

if($resul = mysqli_query($con, $s)){
 if(mysqli_num_rows($resul) > 0){
     echo "<table class='tt'>";
         echo "<tr>";
             echo "<th><h3>book_id</h3></th>";
             echo "<th><h3>book_name</h3></th>";
             echo "<th><h3>book_author</h3></th>";
             
         echo "</tr>";
     while($row = mysqli_fetch_array($resul)){
         echo "<tr>";
             echo "<td><h3>" . $row['book_id'] . "</h3></td>";
             echo "<td><h3>" . $row['book_name'] . "</h3></td>";
             echo "<td><h3>" . $row['book_author'] . "</h3></td>";
             
         echo "</tr>";
     }
     echo "</table>";
     // Free result set
     mysqli_free_result($resul);
 }
} 

}
else
{
function_alert("oops!!!,book is not available");


}

 
 
?> 
  </div>
        </div>
 
    </body>
</html>