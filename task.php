<!doctype html>
<html>
<body>
<h1>add</h1>
<form method="POST" action="">
<label>enter a number A</label>
<input type="number" name="a" >
<label>enter a number B</label>
<input type="number" name="b">
<input type="submit" name="submit">
</form>
</body>
<?php
if(isset($_POST['submit']))
{
include('conn.php');   
$a=$_POST['a'];
$b=$_POST['b'];
$sql="select op from task";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
$op=$row['op'];
}
if($op=='+')
{
$c=$a-$b;
$op='-';
}
elseif($op=='-')
{
$c=$a*$b;
$op='*';
}
elseif($op=='*')
{
$c=$a/$b;
$op='/';
}
elseif($op=='/')
{
$c=$a+$b;
$op='+';
}
$query="insert into task(a,b,c,op) values($a,$b,$c,'$op')";
$r=mysqli_query($con,$query);
if($r)
{
echo "data stored";
}
else
{
echo"not stored";
}
}
?>
</html>













