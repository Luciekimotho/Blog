<html>
  <head>
      <title> Lucie's Blog</title>
      <a href="index.html">Home</a>
      <a href="post.php">Submit blogs</a>
      <a href="display.php">Display blogs</a>
  </head>
    
    <body>
        <h3> Blogs</h3>
        <?php
          $conn = new mysqli("localhost","root","connekta", "Blog") ;
	      if ($conn -> connect_errno){
		   die("Failed to connect ");
       }else
           $query2 = ("SELECT * FROM blogdata ORDER BY id DESC");
	       $ret = $conn->query($query2);
           while ($row = mysqli_fetch_array($ret)){
                $title = $row['title'];
                $category = $row['category'];
                $content = $row['content'];
          ?>     
        <!--<table border="1">
            <tr><td> <?php echo $title; ?> </td></tr>
            <tr><td> <?php echo $category; ?> </td></tr>
            <tr><td> <?php echo $content; ?> </td></tr>         
        </table> -->
    
          <center><h4><?php echo $title; ?></h4>
          <h5><?php echo $category; ?> </h5></center>
           <?php echo $content; ?><br>
            <hr>    
        <?php
            }
                ?>
  </body>  
</html>