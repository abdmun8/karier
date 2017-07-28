<?php
session_start();
if(!isset(  $_SESSION['namauser'],  $_SESSION['passuser'])) {
header("Location: ../index.php?ke=flogin");
} else {
?>
<html>
<head>
<title>Halaman Admin</title>
<link rel="stylesheet" href="../inc/body.css" type="text/css">
<link rel="shortcut icon" href="../img/smk.ico" />
</head>
<body class="bg_main">
<a name="top"></a>
<table id="outer" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><div id="main_inner">
        <!-- top areas begin-->
      <div id="logo"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <!-- top areas end-->
        <div class="clear"> </div>
        <!-- Path begin-->
        <div id="can_pathway"> <span class="pathway">Home - <a href="#">News</a></span></div>
        <!-- Path end-->
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="171" valign="top"><div id="rightmain">
                      <table cellpadding="0" cellspacing="0" class="moduletable">
                        <tr>
                          <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td><a href="index.php" class="mainlevel">Home</a></td>
                              </tr>
                              <tr>
                                <td><a href="index.php?op=pakar" class="mainlevel">Pakar</a></td>
                              </tr>
                              <tr>
                                <td><a href="index.php?op=user" class="mainlevel">User</a></td>
                              </tr>
                              <tr>
                                <td><a href="../inc/logout.php" class="mainlevel">Logout</a></td>
                              </tr>
                            </table>
                          <br><div align="center">
						  <table width="100%" border="0" cellpadding="1" cellspacing="1">
							<tr>
    						  <td height="25" align="center">&nbsp;</td>
  							</tr>
						  </table>
						  </div>
						  </td>
                        </tr>
                      </table>
                    </div></td>
                  <td width="10" style="width:1px;">&nbsp;</td>
                  <td width="571" valign="top"><div class="left_edge">
                      <div class="right_edge">
                        <div class="top_edge">
                          <div class="top_lcorner">
                            <div class="top_rcorner"> </div>
                          </div>
                        </div>
                        <div class="corner_inner">
                          <div id="main_body">
                            <table cellpadding="0" cellspacing="0" align="center">
                              <tr>
                                <td valign="top"><div>
                                    <table class="contentpaneopen" align="center">
                                      <tr>
                                        <td valign="top" colspan="2">
										<div align="center">
										 <?php
											require_once"isi.php";
											?>
										  </div>									  
			                            </td>
                                      </tr>
                                    </table></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <div class="bottom_edge">
                          <div class="bot_lcorner">
                            <div class="bot_rcorner"> </div>
                          </div>
                        </div>
                      </div>
                    </div></td>
                </tr>
              </table>
            </div>
            <!-- main end-->
            <div class="clear"> </div>
        <!-- bottom begin-->
        <div class="clear"> </div>
        <div class="bottomcontainer">
        </div>
        <div class="clear"> </div>
        <div id="footer">  
        </div>
        <!-- bottom end-->
    </td>
  </tr>
</table>
</body>
</html>
<?php
}
?>