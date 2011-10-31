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

</script>

<style type="text/css">
.light-white-bg .innertable tr td .white-bg tr td table tr td div table tr td table tr th div {
}
.light-white-bg .innertable tr td .white-bg tr td table tr td div table tr td table {
}
.adad {	font-weight: bold;
}
.asa {	text-align: right;
}
.dqd {	text-align: right;
}
.dw {	font-weight: bold;
}
.light-white-bg .innertable tr td .white-bg tr td table tr td div table {
	color: #030303;
}
</style>
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
<form name="form" action="metrics.php" method="POST" onSubmit="return docheck()">
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

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

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

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center" class="text2"><a href="measurement.php" class="text2">Measurement</a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-over">

                  <tr>

                    <td align="center"class="text1"><a href="metrics.php" class="text1">Metrics</a></td>

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

                      <td colspan="2" align="left" class="heading1">METRICS </td>

                    </tr>

                    <tr>

                      <td height="15" colspan="2"><img src="images/line.jpg" width="579" height="2" /></td>

                    </tr>
          <tr>
<!--Create table for this webpage-->
            <td align="left" valign="top" ><div align="left">
  <table width="90%" border="0">
    <tr>
      <td width="50%" height="276"><div align="left">
      
      
      
      <table>
<tr>
<td>Gage Name</td><td> :
<select name="gn" style="width:60mm">
<option value=""> - SELECT -</option>
<?php
//select all gage name available in gage database

$sql = "SELECT DISTINCT GageName FROM measureloop2";
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


/////////////////////////////////////////////////////////////////////////////////////////////////////
/*Statement for Rdbar*/

$sql = "SELECT * FROM requirement WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$a=$myrow["Appraiser"];

} while ($myrow = mysql_fetch_array($result));
} else {}

$Rval=0;
$sql = "SELECT * FROM measureloop2 WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$Rval=$Rval+$myrow["Ra"];
$Rdbar=$Rval/$a;

} while ($myrow = mysql_fetch_array($result));
} else {}


/////////////////////////////////////////////////////////////////////////////////////////////////////
/*Statement for UCLR*/

$sql = "SELECT * FROM requirement WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$a=$myrow["Appraiser"];
$t=$myrow["Trial"];
$p=$myrow["SampleSize"];

} while ($myrow = mysql_fetch_array($result));
} else {}



$sql = "SELECT D4 FROM formula WHERE Number=$t";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$d4=$d4+$myrow["D4"];


} while ($myrow = mysql_fetch_array($result));
} else {}

/////////////////////////////////////////////////////////////////////////////////////////////
/* Statement for Rp*/


$sql = "SELECT MAX(Mean) AS maximum FROM measureloop3 WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){

$max_mean=$myrow["maximum"];

} 

$sql = "SELECT MIN(Mean) AS minimum FROM measureloop3 WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){

$min_mean=$myrow["minimum"];

} 

$Rp=$max_mean-$min_mean;
//////////////////////////////////////////////////////////////////////////////////////////////
/* Statement for XDiff*/


$sql = "SELECT MAX(Xa) AS maxX FROM measureloop2 WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){

$max_diff=$myrow["maxX"];

} 

$sql = "SELECT MIN(Xa) AS minX FROM measureloop2 WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){

$min_diff=$myrow["minX"];

} 

$XDiff=$max_diff-$min_diff;

/////////////////////////////////////////////////////////////////////////////////////////////////////
/*Statement for UCL AND LCL*/

$sql = "SELECT Xa FROM measureloop2 WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$X_val=$X_val+$myrow["Xa"];
$Xbar=$X_val/$a;
} while ($myrow = mysql_fetch_array($result));
} else {}

$sql = "SELECT A2 FROM formula WHERE Number=$p";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$a2=$a2+$myrow["A2"];
} while ($myrow = mysql_fetch_array($result));
} else {}

/////////////////////////////////////////////////////////////////////////////////////////////////////
/*Statement for EV*/

$sql = "SELECT K1 FROM formula WHERE Number=$t";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$k1=$k1+$myrow["K1"];
} while ($myrow = mysql_fetch_array($result));
} else {}

/////////////////////////////////////////////////////////////////////////////////////////////////////
/*Statement for PV*/
$sql = "SELECT K3 FROM formula WHERE Number=$p";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$k3=$k3+$myrow["K3"];
} while ($myrow = mysql_fetch_array($result));
} else {}

/////////////////////////////////////////////////////////////////////////////////////////////////////
/*Statement for AV*/
$sql = "SELECT K2 FROM formula WHERE Number=$a";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$k2=$k2+$myrow["K2"];
} while ($myrow = mysql_fetch_array($result));
} else {}

?>

</select></td>
<td><input type="submit" name="load" value="LOAD"></td></table>
        <table width="72%" border="1">
     
          <tr>
            <td width="51%" class="adad"  style="text-align: center">R (d-bar)</td>
                       
     
            <td width="49%" class="asa">
              <input type="text" name="rdbar" value="<?php printf("%s",$Rdbar); ?>"disabled="disabled"><input type="hidden" name="rdbar" value="<?php printf("%s",$Rdbar); ?>"></td>

        
        
          <tr>
            <td class="adad" style="text-align: center">UCLR</td>
<?php

$UCLR=$Rdbar*$d4;
?>                         
   
            <td class="asa">
              <input type="text" name="uclr" value="<?php printf("%s",$UCLR); ?>"disabled="disabled"><input type="hidden" name="uclr" value="<?php printf("%s",$UCLR); ?>"></td>
            

          <tr>
            <td class="adad" style="text-align: center">Rp</td>

            <td class="asa">
              <input type="text" name="rrp" value="<?php printf("%s",$Rp); ?>"disabled="disabled"><input type="hidden" name="rrp" value="<?php printf("%s",$Rp); ?>"></td> 
        
 
    
          <tr>
            <td class="adad" style="text-align: center">X Diff</td>
          
            <td class="asa">
              <input type="text" name="diff" value="<?php printf("%s",$XDiff); ?>"disabled="disabled"><input type="hidden" name="diff" value="<?php printf("%s",$XDiff); ?>"></td> 
    

          <tr>
            <td class="adad" style="text-align: center">UCL </td>
 <?php
$UCL=$Xbar+($Rdbar*$a2);


?>     
            <td class="asa">
              <input type="text" name="ucl" value="<?php printf("%s",$UCL); ?>"disabled="disabled"><input type="hidden" name="ucl" value="<?php printf("%s",$UCL); ?>"></td>
    



          <tr>
            <td class="adad" style="text-align: center">LCL</td>
<?php
$LCL=$Xbar-($Rdbar*$a2);
?>            
            <td class="asa">
              <input type="text" name="lcl" value="<?php printf("%s",$LCL); ?>"disabled="disabled"><input type="hidden" name="lcl" value="<?php printf("%s",$LCL); ?>"></td>  




          <tr>
            <td class="adad" style="text-align: center">EV</td>
<?php
$EV=$Rdbar*$k1;
?>       
            <td class="asa">
              <input type="text" name="ev" value="<?php printf("%s",$EV); ?>"disabled="disabled"><input type="hidden" name="ev" value="<?php printf("%s",$EV); ?>"></td>    



          <tr>
            <td class="adad" style="text-align: center"><span class="dw" style="text-align: center">AV</span></td>
<?php
if($t!=0){
$calc1=$XDiff*$k2;
$calc2=pow($calc1,2);
$calc3=(pow($EV,2))/($p*$t);

$AV=sqrt($calc2-$calc3);
}
?>  
            <td class="asa">
              <input type="text" name="av" value="<?php printf("%s",$AV); ?>"disabled="disabled"><input type="hidden" name="av" value="<?php printf("%s",$AV); ?>"></td>   
            </span></td>
            </tr>
        </table>
      </div></td>
      <td width="50%"><div align="left">
      <br>
      
        <table width="72%" border="1">
          <tr>
            <td width="51%" class="dw" style="text-align: center"><span class="dw" style="text-align: center">R&amp;R</span></td>
            
<?php
$count1=(pow($EV,2))+(pow($AV,2));
$RNR=sqrt($count1);
?>  
            <td width="49%" class="dqd"><input type="text" name="rnr"value="<?php printf("%s",$RNR); ?>"disabled="disabled"><input type="hidden" name="rnr" value="<?php printf("%s",$RNR); ?>"></td>  

          <tr>
            <td class="dw" style="text-align: center"><span class="dw" style="text-align: center">PV</span></td>
<?php
$PV=$Rp*$k3;
?>  
            <td class="dqd"><input type="text" name="pv" value="<?php printf("%s",$PV); ?>"disabled="disabled"><input type="hidden" name="pv" value="<?php printf("%s",$PV); ?>"></td>  

          <tr>
            <td class="dw" style="text-align: center"><span class="dw" style="text-align: center">TV</span></td>
<?php
$count2=(pow($RNR,2))+(pow($PV,2));
$TV=sqrt($count2);

?>  
            <td class="dqd"><input type="text" name="tv" value="<?php printf("%s",$TV); ?>"disabled="disabled"><input type="hidden" name="tv" value="<?php printf("%s",$TV); ?>"></td> 

          <tr>
            <td class="dw" style="text-align: center">%EV</td>
<?php
if($TV!=0){
$EV2=(100*($EV/$TV));
}
?>  
            <td class="dqd"><input type="text" name="ev2"value="<?php printf("%s",$EV2); ?>"disabled="disabled"><input type="hidden" name="ev2" value="<?php printf("%s",$EV2); ?>"></td>  
   
   
   
          <tr>
            <td class="dw" style="text-align: center">%AV</td>
<?php
if($TV!=0){
$AV2=100*($AV/$TV);
}
?>  
            <td class="dqd"><input type="text" name="av2" value="<?php printf("%s",$AV2); ?>"disabled="disabled"><input type="hidden" name="av2" value="<?php printf("%s",$AV2); ?>"></td>

          <tr>
            <td class="dw" style="text-align: center">%R&amp;R</td>
<?php
if($TV!=0){
$RNR2=100*($RNR/$TV);
}
?>  
            <td class="dqd"><input type="text" name="rnr2"value="<?php printf("%s",$RNR2); ?>"disabled="disabled"><input type="hidden" name="rnr2" value="<?php printf("%s",$RNR2); ?>"></td> 




          <tr>
            <td class="dw" style="text-align: center"><span class="dw" style="text-align: center">%PV</span></td>
<?php
if($TV!=0){
$PV2=100*($PV/$TV);
}
?>  
            <td class="dqd"><input type="text" name="pv2"value="<?php printf("%s",$PV2); ?>"disabled="disabled"><input type="hidden" name="pv2" value="<?php printf("%s",$PV2); ?>"></td>   
    



          <tr>
            <td class="dw" style="text-align: center">'ndc</td>
<?php
if($RNR!=0){
$NDC=1.41*($PV/$RNR);
}
?>  
            <td class="dqd"><input type="text" name="ndc"value="<?php printf("%s",$NDC); ?>"disabled="disabled"><input type="hidden" name="ndc" value="<?php printf("%s",$NDC); ?>"></td>
            </tr>
        </table>
      </div></td>
    </tr>
    <td><input type="submit" name="save" value="Save">
  </table>
  <form id="form1" name="form1" method="post" action="">
    <label for="AVf"></label>
  </form>
</div></td>

            <td width="0%" align="center" valign="top">&nbsp;</td>

      </tr>

    </table></td>
    <br />
    
<tr>


</tr>


<br>
  <tr>
<!--Creating footer for the webpage-->
    <td  valign="top" >

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="footerbg">

          <tr>

            <td width="1%" rowspan="2">&nbsp;</td>

            <td width="46%" rowspan="2" class="text5">Copyrights  &copy; MIMOS Berhad 2011. All Rights Reserved. </td>

            <td width="52%" align="right" class="link2">

			<a href="home.php">Home </a>&nbsp; |  &nbsp; 

			<a href="requirement.php">Requirement </a> &nbsp; |    &nbsp; 

			<a href="measurement.php">Measurement </a> &nbsp; |  &nbsp; 

			<a href="metrics.php">Metrics </a> &nbsp; |  &nbsp; 

			<a href="reporting.php">Reporting </a> &nbsp; |  &nbsp; 

			<a href="help.php">Help </a></td>

            <td width="1%" rowspan="2" class="link1">&nbsp;</td>

          </tr>

 

        </table></td>

  </tr>

</table>

</body>

</html>
<!--Insert data into database-->
<?php

if ($_POST['save'])
{

$sql="INSERT INTO metrics
(GageName,Rdbar,UCLR,Rp,XDiff,UCL,LCL,EV,AV,RnR,PV,TV,pEV,pAV,pRnR,pPV,ndc)
VALUES
('$_POST[gn]','$Rdbar','$UCLR','$Rp','$XDiff','$UCL','$LCL','$EV','$AV','$RNR','$PV','$TV','$EV2','$AV2','$RNR2','$PV2','$NDC')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
}
		
?>













