<!doctype html>
<body>
<h1>operation</h1>
<form method="POST" >
<labe>enter a number A</label>
<input type="number" name="a" >
<labe>enter a number B</label>
<input type="number" name="b" >
<input type="submit" name="submit">
</form>
<?php

if(isset($_POST['submit']))
{
	include('conn.php');
$a=$_POST['a'];
$b=$_POST['b'];
$c;
$s="select op from task";
$q=mysqli_query($con,$s);
while($row=mysqli_fetch_assoc($q))
{
$op= $row['op'];
}
if($op=='+')
{
$c=$a+$b;
$op='+';
}
elseif($op=='-')
{
$c=$a-$b;
$op='-';
}
elseif($op=='*')
{
	
$c=$a*$b;
$op='*';
}
elseif($op=='/')
{
$c=$a/$b;
$op='/';
}
$sql="INSERT INTO task(a,b,c,op) values($a,$b,$c,'$op')";
$r=mysqli_query($con,$sql);
if($r)
{
echo"data stored";
}
else
{
echo" not stored";
}
}
?>
</body>
</html>

