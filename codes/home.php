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

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Gage Repeatability & Reproducability</title>

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
<!--Creating header for the webpage-->
</head>
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

                    <td align="center" class="text1"><a href="home.php" class="text1">Home</a></td>

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

        <td><img src="images/cal4.jpg" width="900" height="200" /></td>

      </tr>

      <tr>

        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white-bg">

          <tr>

            <td width="66%" align="center">&nbsp;</td>

            <td width="34%">&nbsp;</td>

          </tr>

          <tr>

            <td align="center" style="border-right:1px dotted #CCCCCC;"><table width="581" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td align="left" ><table width="581" border="0" cellspacing="0" cellpadding="0">

                    <tr>

                      <td colspan="2" align="left" class="heading1">WELCOME TO OUR WEBSITE </td>

                    </tr>

                    <tr>

                      <td height="15" colspan="2"><img src="images/line.jpg" width="579" height="2" /></td>

                    </tr>

                    <tr>

                      <td width="124" height="82" align="left" valign="top"><img src="images/wel-img.jpg" width="110" height="73" class="border1" /></td>
<!--Content of the webpage-->
                      <td width="457" align="left" class="text4">
                        <p>R&amp;R, GR&amp;R, or gauge R &amp; R is a concept to   insure stabile measurements where a single person gets the exact same results   each and every time they measure and/or collect data measurements. This can be   necessary to ensure data consistency and stability. There are different ways to   perform this. The following is an abbreviated explanation using the method   recommended by the <a href="http://www.aiag.org/" target="_blank">AIAG,   (Automotive Industry Action Group)</a>. It is used in most quality plans   including <a href="sixsigma-6Sigma.html">six sigma</a> and <a href="ISO-9000-ISO9000.html">ISO9000</a>.</p>
                        <p>This will give you an approximation of the <a href="variation.html">variation</a> and percent of <a href="process.html">process</a> variation for the total measurement system and   its component's repeatability, reproducibility and part to part variations. The   formulas to do this analysis and the proper sequence to follow is   below.</p></td>

                    </tr>



                </table></td>

              </tr>

            </table></td>

            <td width="34%" align="center" valign="top"><table width="247" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td><table width="250" border="0" cellspacing="0" cellpadding="0">

                  <tr>

                    <td colspan="2"><img src="images/clients-top.jpg" width="250" height="25" /></td>

                  </tr>

                  <tr>

                    <td width="117" height="20"></td>

                    </tr>
<!--Details about MIMOS clients-->
                  <tr>

                    <td><img src="images/clients-img.jpg" width="112" height="112" /></td>

                    <td width="133"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                      <tr>

                        <td width="14%" align="center"><img src="images/arrow1.jpg" width="5" height="8" /></td>

                        <td width="86%" align="left" class="text4">&nbsp;</td>

                      </tr>

                      <tr>

                        <td align="center"><img src="images/arrow1.jpg" width="5" height="8" /></td>

                        <td align="left" class="text4">&nbsp;</td>

                      </tr>

                      <tr>

                        <td align="center"><img src="images/arrow1.jpg" width="5" height="8" /></td>

                        <td align="left" class="text4">&nbsp;</td>

                      </tr>

                      <tr>

                        <td align="center"><img src="images/arrow1.jpg" width="5" height="8" /></td>

                        <td align="left" class="text4">&nbsp;</td>

                      </tr>

                      <tr>

                        <td align="center"><img src="images/arrow1.jpg" width="5" height="8" /></td>

                        <td align="left" class="text4">&nbsp;</td>

                      </tr>

                      <tr>

                        <td align="center"><img src="images/arrow1.jpg" width="5" height="8" /></td>

                        <td align="left" class="text4">&nbsp;</td>

                      </tr>

                    </table></td>

                    </tr>

                </table></td>

              </tr>

              <tr>

                <td>&nbsp;</td>

              </tr>

              <tr>

                <td><img src="images/line2.jpg" width="247" height="2" /></td>

              </tr>

              <tr>

                <td>&nbsp;</td>

              </tr>

              <tr>

                <td><table width="247%" border="0" cellspacing="0" cellpadding="0" class="contactus-bg">

                  <tr>

                    <td width="80" rowspan="2">&nbsp;</td>

                    <td width="167" height="33">&nbsp;</td>

                  </tr>
<!--Mimos contact-->
                  <tr>

                    <td align="left" valign="top"class="text6"><strong>Tel : 603 8995 5000<br />

                      Fax       :  603 8996 2755<br />

                      E-mail :<span class="link1"> <a href="mailto:info@mimos.com" class="link1">info@mimos.my</a></span></strong></td>

                  </tr>

                </table></td>

              </tr>

            </table></td>

          </tr>

          <tr>

            <td height="8" ></td>

            </tr>

		  

        </table></td>

      </tr>

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

			<a href="grsph.php">Reporting </a> &nbsp; |  &nbsp; 

			<a href="help.php">Help </a></td>

            <td width="1%" rowspan="2" class="link1">&nbsp;</td>

          </tr>

   

        </table></td>

  </tr>

</table>

</body>

</html>