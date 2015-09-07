<html>
    <head>
      <title> Lucie's Blog</title>
      <a href="index.html">Home</a>
      <a href="post.php">Submit blogs</a>
      <a href="display.php">Display blogs</a>
  </head>
    
    <body>
        <h3> Submitting Blogs</h3>
<?php
$conn = new mysqli("localhost","root","connekta", "Blog") ;
	   if ($conn -> connect_errno){
		   die("Failed to connect ");
       }
	   else
           if(isset($_POST['submit'])){
           $title = $_POST['title'];
           $category = $_POST['category'];
           $content = $_POST['content'];
           
           $query = ("INSERT INTO `blogdata`(`title`, `category`, `content`) VALUES ('$title','$category','$content')");
           $res = $conn ->query($query);

       }else{
?>

<form action ="post.php" method = "post">
   Title:<input  name ="title" ><br>
   Category: <input  name= "category"><br>
   Content: <textarea  name= "content"></textarea><br>
   <input type=submit name = "submit" value="Post">
</form>
 <?php
    }
?>
    </body>
</html>