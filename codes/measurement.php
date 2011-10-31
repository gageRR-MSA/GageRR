<!--GAGE R&R - Measurement Analysis Tool
 * Copyright (C) 2011 Ashok Sivaji (ashok.sivaji at mimos dot my)
 * Copyright (C) 2011Pavithra P.Manogaran (pavithra.manogaran at mimos dot my)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 -->
<html>
<head>
<!--Set connection to the database-->
<?php
$con = mysql_connect("localhost","root","ROOT");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("gage",$con);
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Gage R & R</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript">



function MM_preloadImages() { 

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}



function MM_swapImgRestore() {

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}



function MM_findObj(n, d) {

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_swapImage() {

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}



</script>
</head>
<body>
<!--Create validation for this page-->
<script>
    function docheck(){
        if(document.form.gn.value==""){
        alert("Please select a gage name!");
        return false;
        }
    }
</script>
<!--Return value for validation-->
<form name="form" action="measurement.php" method="POST" onSubmit="return docheck()">
<!--Create header for this webpage-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="outertable">

  <tr>

    <td  valign="top" class="black-bg" height="98"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="innertable">

      <tr>

        <td><table width="100%" border="0" cellspacing="0" cellpadding="0"  height="99">

          <tr>

            <td width="30%" class="logotext">Gage R & R </td>

            <td width="70%" valign="top" align="right"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-over">

                  <tr>

                    <td align="center" class="text2"><a href="home.php" class="text2">Home</a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center" class="text2"><a href="requirement.php" class="text2">Requirement </a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-over">

                  <tr>

                    <td align="center" class="text1"><a href="measurement.php" class="text1">Measurement</a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center"class="text2"><a href="metrics.php" class="text2">Metrics</a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center" class="text2"><a href="reporting.php" class="text2">Reporting</a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center"class="text2"><a href="help.php" class="text2">Help</a> </td>

                  </tr>

                </table></td>

              </tr>

            </table></td>

          </tr>

        </table></td>

      </tr>

    </table></td>

  </tr>

  <tr>

    <td  valign="top" class="light-white-bg"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="innertable">

  <tr>

     

      </tr>


  <tr>



        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white-bg">

                <tr>

            <td width="100%" align="center">&nbsp;</td>

            <td width="0%">&nbsp;</td>

          </tr>


                

                    <tr>

                      <td colspan="2" align="left" class="heading1">MEASUREMENT</td><br />
                  </tr>

                    <tr>

                      <td height="15" colspan="2"><img src="images/line.jpg" width="579" height="2" /></td>

                    </tr>
          <tr>
<!--Create table for this webpage-->
            <td align="left" valign="top" ><div align="left">
  <table width="90%" border="0">
  
                    </tr>
<table>
<tr>
<td>Gage Name</td><td> :
<select name="gn" style="width:60mm">
<option value=""> - SELECT -</option>
<?php
//select all gage name available in gage database

$sql = "SELECT GageName FROM requirement";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {
	if($_POST["gn"]==$myrow["GageName"]){
?>

	<option value="<?php printf("%s",$myrow["GageName"]); ?>" selected><?php printf("%s",$myrow["GageName"]); ?></option>
<?php
	}else{
?>
	<option value="<?php printf("%s",$myrow["GageName"]); ?>"><?php printf("%s",$myrow["GageName"]); ?></option>
<?php
}
} while ($myrow = mysql_fetch_array($result));
} else {
	
}
?>

</select></td>
<td><input type="submit" name="load" value="LOAD"></td></table>

<?php
$appraiser=3;
$sql = "SELECT * FROM requirement WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$appraiser=$myrow["Appraiser"];

} while ($myrow = mysql_fetch_array($result));
} else {}



$trial=3;
$sql = "SELECT * FROM requirement WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$trial=$myrow["Trial"];

} while ($myrow = mysql_fetch_array($result));
} else {}


$part=10;
$sql = "SELECT * FROM requirement WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$part=$myrow["SampleSize"];

} while ($myrow = mysql_fetch_array($result));
} else {}

?>
<table>
<tr><td width="53"></td>
<?php
//display table first row base on gage requirement
for($a=1;$a<=$appraiser;$a++){
?>
<td bgcolor="#339900"> <div align="center"><strong>Appraiser <?php printf("%s",$a); ?></strong></div></td>


<?php
}
?>
<td width="200"bgcolor="#339900" rowspan="2"><div align="center"><strong><u>X</u></strong></div></td></tr>

<tr><td bgcolor="#339900"><div align="center"><strong>Operator</strong></div></td>
<?php
//display table first row base on gage requirement
for($a=1;$a<=$appraiser;$a++){
	?>
    <td bgcolor="#339900">
    <?php
for($t=1;$t<=$trial;$t++){
?>
<label style="width:10mm" style="text-align:center"><strong><?php printf("%s",$t); ?></strong></label>

<?php
}
?>

<label style="width:10mm"><strong>Range</strong></label>
<label style="width:10mm"><strong>AVG</strong></label></td>
<?php
}
?>


</tr>
<?php

//3 for loop to set the text input field base on $appraiser
$totalrange[]=0;
$totalavg[]=0;
$totalsum[]=0;
$calmean[]=0;
for($p=1;$p<=$part;$p++){
?>
<tr>
<td><strong>Part <?php printf("%s",$p); ?></strong></td>
<?php
$sum=0;
$calmean[$p]=0;
for($a=1;$a<=$appraiser;$a++){
	?>
    <td>
    <?php
	$avg=0;
	$sum=0;
	$range=0;
	$comparemax=0;
	$comparemin=10000;
	for($t=1;$t<=$trial;$t++){

	?>
    <input type="text" style="width:10mm" style="text-align:right" name="r<?php printf("%s%s%s",$p,$a,$t); ?>" value="<?php printf("%s",$_POST["r$p$a$t"]); ?>">
    
    <?php
	$comparemax=max($comparemax, $_POST["r$p$a$t"]);
	$comparemin=min($comparemin, $_POST["r$p$a$t"]);
	$sum=$sum+$_POST["r$p$a$t"];
	
	
	
	}
	$range=$comparemax-$comparemin;
	$totalrange[$a]=$totalrange[$a]+$range;
	
	$totalsum[$a]=$totalsum[$a]+$sum;

	$avg=$sum/$trial;
	$totalavg[$a]=$totalavg[$a]+$avg;
	
	
?>
  <input type="text" style="text-align:right"style="width:10mm" name="s<?php printf("%s%s%s",$p,$a,$t); ?>5" value="<?php printf("%s",$range); ?>">
  <input type="text" style="text-align:right"style="width:10mm" name="a<?php printf("%s%s%s",$p,$a,$t); ?>3" value="<?php printf("%s",$avg); ?>"></td>


<?php
	
	$calmean[$p]=$calmean[$p]+$avg;
}
$calmean[$p]=$calmean[$p]/$appraiser;

?>
<td><input type="text" style="text-align:right"style="width:54mm" name="mean<?php printf("%s%s",$p,$a,$t); ?>" value="<?php printf("%s",$calmean[$p]); ?>" disabled="disabled"></td>
</tr>
<?php
}
?>

<!--2 for loop to set the total-->
<tr>
<td><strong>Total </strong></td>

<?php
for($a=1;$a<=$appraiser;$a++){
	
?>
<td>
<?php
//for($t=1;$t<=$trial;$t++){
$size=$trial*11;
?>

<input type="text" style="text-align:right"style="width:<?php printf("%s",$size); ?>mm" name="total<?php printf("%s",$a); ?>" value="<?php printf("%s",$totalsum[$a]); ?>" disabled="disabled">

<?php
//}
$Xa[$a]=$totalavg[$a]/$part;
$Ra[$a]=$totalrange[$a]/$part;

?>


<input type="text" style="text-align:right"style="width:10mm" name="midrange<?php printf("%s",$a); ?>" value="<?php printf("%s",$Ra[$a]); ?>" disabled="disabled">
<input type="text" style="text-align:right"style="width:10mm" name="midavg<?php printf("%s",$a); ?>" value="<?php printf("%s",$Xa[$a]); ?>" disabled="disabled"></td>
<?php
}
?>




</table>

<p><input type="submit" name="save" value="SAVE" /></p> 

</form>
 <tr>

                <td>&nbsp;</td>

              </tr>

 

              <tr>

                <td>&nbsp;</td>

              </tr>

              <tr>


          </tr>

          <tr>

            <td height="8" ></td>

            </tr>

		  

        </table></td>

      </tr>

    </table></td>

  </tr>

  <tr>
<!--Creating footer for the webpage-->
    <td  valign="top" >

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="footerbg">

          <tr>

            <td width="1%" rowspan="2">&nbsp;</td>

            <td width="52%" rowspan="2" class="text5">Copyrights  &copy; MIMOS Berhad 2011. All Rights Reserved. </td>

            <td width="46%" align="right" class="link2">

			<a href="home.php">Home </a>&nbsp; |  &nbsp; 

			<a href="requirement.php">Requirement </a> &nbsp; |    &nbsp; 

			<a href="measurement.php">Measurement </a> &nbsp; |  &nbsp; 

			<a href="metrics.php">Metrics </a> &nbsp; |  &nbsp; 

			<a href="reporting.php">Reporting </a> &nbsp; |  &nbsp; 

			<a href="help.php">Help </a></td>

            <td width="1%" rowspan="2" class="link1">&nbsp;</td>

          </tr>

   

      </table></td>

</body>

</html>

<?php

if ($_POST['save'])
{

//validation on input field after press save button
$errmessage="Field are mandatory for input field ";
for($p=1;$p<=$part;$p++){
for($a=1;$a<=$appraiser;$a++){
for($t=1;$t<=$trial;$t++){
$answer=$_POST["r$p$a$t"];

//generate error message
if($answer==""){

$errmessage=$errmessage.",P".$p."A".$a."T".$t;
$storing="wrong";
}}}}

if($storing=="wrong"){
?>
<script>
var whatever = "<?php printf("%s",$errmessage); ?>";
alert(whatever);
</script>
<?php
}else{

for($p=1;$p<=$part;$p++){
for($a=1;$a<=$appraiser;$a++){
for($t=1;$t<=$trial;$t++){

$answer=$_POST["r$p$a$t"];

$sql="INSERT INTO measureloop (GageName,Part,Appraiser,Trial,answer)
VALUES
('$_POST[gn]','$p','$a','$t','$answer')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
}
}

 $sql="INSERT INTO measureloop3 (GageName,Part,Mean)
VALUES
('$_POST[gn]','$p','$calmean[$p]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  } 
  
}

for($a=1;$a<=$appraiser;$a++){
	
$sql="INSERT INTO measureloop2 (GageName,Appraiser,TotalSum,Ra,Xa)
VALUES
('$_POST[gn]','$a','$totalsum[$a]','$Ra[$a]','$Xa[$a]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

}

}
}
?>