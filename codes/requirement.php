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
<body onload="MM_preloadImages('images/more-over.jpg')">
<!--Create validation for this page-->
<script>
    function docheck(){

        if(document.form.gn.value==""){
        alert("Please enter a gage name!");
        return false;
        }
		if(document.form.gt.value==""){
        alert("Please enter a gage type!");
        return false;
        }
		if(document.form.gno.value==""){
        alert("Please enter a gage number!");
        return false;
        }
		if(document.form.dt.value==""){
        alert("Please enter a date!");
        return false;
        }
		
		if(document.form.apa.value==""){
        alert("Please enter appraiser name!");
        return false;
        }
		if(document.form.apb.value==""){
        alert("Please enter appraiser name!");
        return false;
        }
		
    }
</script>
<!--Return value for validation-->
<form name="form" action="requirement.php" method="POST" onSubmit="return docheck()">

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

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-over">

                  <tr>

                    <td align="center" class="text1"><a href="requirement.php" class="text1">Requirement </a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center" class="text2"><a href="measurement.php" class="text2">Measurement</a></td>

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

    <td  valign="top" class="light-white-bg"><table width="200%" border="0" cellspacing="0" cellpadding="0" class="innertable">

      <tr>



      </tr>

      <tr>

        <td><table width="100%" height="366" border="0" cellpadding="0" cellspacing="0" class="white-bg">

          <tr>

            <td width="74%" align="center">&nbsp;</td>

            <td width="26%">&nbsp;</td>

          </tr>

          <tr>
          

            <td align="center" valign="top" style="border-right:0px #CCCCCC; color: #030303;"><table width="581" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td colspan="2" align="left" ><table width="581" border="0" cellspacing="0" cellpadding="0">

                    <tr>

                      <td colspan="2" align="left" class="heading1">REQUIREMENT </td>

                    </tr>

                    <tr>

                      <td height="15" colspan="2"><img src="images/line.jpg" width="579" height="2" /></td>

                    </tr>

                    </td>
</tr>
<tr>
<td bgcolor="#CCFFFF">Gage Name</td>
<td>: <input type="text" name="gn" style="width:60mm" ></td>
</tr>

<tr>
<td bgcolor="#CCFFFF">Gage Type</td>
<td >: <input type="text" name="gt" style="width:60mm" ></td>
</tr>
<tr>
<td bgcolor="#CCFFFF">Gage No</td>
<td>: <input type="text" name="gno" style="width:60mm" ></td>
</tr>
<tr>
<td bgcolor="#CCFFFF">Date</td>
<td>: <input type="text" name="dt" style="width:60mm" ></td>
</tr>
<tr>
 <td bgcolor="#CCFFFF">Trial</td> 
<td>: <input type="radio" name="trial"  value="2" checked/>
        2
        <input type="radio" name="trial"  value="3" />
        3
 
   
       </td>
</tr>

<tr>
<td bgcolor="#CCFFFF">Appraiser</td>
<td>: <select name="app" style="width:10mm">
<option value="1" >1 </option>
          <option value="2" >2</option>
          <option value="3" >3</option>
         
          </select></td>
</tr>

<tr>
<td bgcolor="#CCFFFF">Appraiser 1</td>
<td>: <input type="text" name="apa" style="width:60mm" ></td>
</tr>
<tr>
<td bgcolor="#CCFFFF">Appraiser 2</td>
<td>: <input type="text" name="apb" style="width:60mm" ></td>
</tr>
<tr>
<td bgcolor="#CCFFFF">Appraiser 3</td>
<td>: <input type="text" name="apc" style="width:60mm" ></td>
</tr>
<tr>
<td bgcolor="#CCFFFF">Sample Size</td>
<td>: <select name="sms" style="width:10mm">
<option value="1">1 </option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
    
          </select></td>
</tr>

<tr>
<td><br/></td>
<td> </td>
</tr>
<tr>
<td><input type="submit" name="save" value="Save">
<input type="submit" name="delete" value="Delete">
<input type="submit" name="print" value="Print"/>
</tr>


 
                </table>

             

              <tr>

                <td colspan="2">&nbsp;</td>

              </tr>

              <tr>

                <td colspan="2">&nbsp;</td>

              </tr>

            </table>

            <td width="26%" align="center" valign="top"><table width="247" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td></td>

              </tr>

              <tr>
                
                <td></td>
                
              </tr>

            </table></td>

          </tr>

          <tr>

            <td height="8" ></td>

            </tr>

		  

        </table>

     

    </table></td>

  </tr>
<!--Creating footer for the webpage-->
  <tr>

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
        </form>




</body>
</html>
<!--Insert data into database-->
<?php

if ($_POST['save'])
{

$sql="INSERT INTO requirement (GageName,GageType,GageNo,Date,Trial,Appraiser,AppraiserA,AppraiserB,AppraiserC,SampleSize)
VALUES
('$_POST[gn]','$_POST[gt]','$_POST[gno]','$_POST[dt]','$_POST[trial]','$_POST[app]','$_POST[apa]','$_POST[apb]','$_POST[apc]','$_POST[sms]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  ?>
  <script>alert("Successful!");</script>
  <?php
}
		
?>