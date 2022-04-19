<?php  
 

        session_start();
$con=mysqli_connect('127.0.0.1','root','123');
mysqli_select_db($con,'library_management');
 $name=$_POST['name'];
$id=$_POST['id'];
$number=$_POST['number'];
 $email=$_POST['email'];
 $book_id=$_POST['book_id'];
 $book_name=$_POST['book_name'];
 $book_author=$_POST['book_author'];
$s="select * from lib where book_id='$book_id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
    }
if($num ==1){
    function_alert("oops!!!,already entered");
}
else
{
    $reg="INSERT INTO lib(name,id,number,email,book_id,book_name,book_author)
    values ('$name','$id','$number','$email','$book_id','$book_name','$book_author')";
    mysqli_query($con,$reg);
    function_alert("successfully entered");
}

        
        
?> 