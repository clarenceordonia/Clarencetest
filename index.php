<!DOCTYPE>
<html>
<body bgcolor="black" text="white">
	<center> <font face="tahoma"> <p> College of Information Technology and Computer Science <br>DITCC3 – Advanced IT Systems Architecture<br><br><br>Determined whether the input number is ODD or EVEN.<br><br> </p>
<script type="text/javascript">
var num1=0;
var num2=0;
var i = 0;
var y = 0;
var x = 0;
var z = 0;
var ans1 = 0;

num1 = prompt("How many number/s do you want",0);

y = parseInt( num1 );
for (i=1;i<=y;i++)
	{
	num2 = prompt("Enter Number",0);
	x = parseInt( num2 );
		if(x%2==0)
			{
			document.write(x, " is an Even Number <br>")
			}
			else
			{
			document.write(x, " is an Odd Number <br>")
			}
	}

</script>
<p> Copyright 2022-CLARENCE S. ORDONIA </p>
</font></center>
</body>
</html>
