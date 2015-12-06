<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form role="form" action="postpush.php" enctype="multipart/form-data" method="post">

<label>Title</label><br>
<input type="text" name="title"   id="title" >
<br>
<label>File 1</label><br>
<input type="file" name="uploadedimage"  >
<br>
<label>Tech</label><br>





                                      <select name="technology"  >
									  <option selected="selected" "" disabled="disabled" </option>
                                          <?php
                                          include 'dbdrivers.php';


									    $sql="select * from technologies " ;
  										$result=mysql_query($sql) or die(mysql_error());
  										$count=mysql_num_rows($result);
											$i=0;
											for($i=0;$i<$count; $i++)
											{
												$opt=mysql_result($result,$i,"tech");

												echo("<option>$opt</option>");


											}

										?>
                                      </select>





<br>
<label>Git Fork</label><br>
<input type="text" name="fork"   id="fork" >
<br>
<label>Git Link</label><br>
<input type="text" name="git_link"   id="git_link" >
<br>
<label>Git Clone</label><br>
    <input type="text" name="git_clone"   id="git_clone" >
<br>
<label>Image 2</label><br>
<br>
<input type="file" name="uploadedimage2"  >

<input type="submit" name="submit" id="submit" value="submit">
</form>
</body>
</html>
