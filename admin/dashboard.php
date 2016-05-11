<?php
  /* include('session.php'); */
$dbcon = new MySQLi("localhost","root","","duolextest");
?>


<!--
This file is part of Duolex.
Duolex is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
Duolex is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with Duolex.  If not, see <http://www.gnu.org/licenses/>.
-->

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Duolex Dashboard</title>

	<!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.1/foundation.min.css">
	<link href="css/dashboard.css" rel="stylesheet" type="text/css">
	<link href="css/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css">
	<!-- Compressed JavaScript -->
    <script src="ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"> </script>
    <script src="js/content-loader.js" type="text/javascript"> </script>
	<script src="https://cdn.jsdelivr.net/foundation/6.1.1/foundation.min.js"></script>

    </head>
    <body>


	<div>
	    <div id="header-dashboard">

		<span class="title-bar-title">Duolex Dashboard</span>

        <div class="account_dropdown">
          <ul class="dropdown menu" data-dropdown-menu>
            <li>
              <a href="#"></a>
              <ul class="menu">
                <li><a href="#">Item 1A</a></li>
              </ul>
            </li>
          </ul>
        </div>


	    </div>
	</div>



        <div class="off-canvas-wrapper">
	    <div class="off-canvas-wrapper-inner" id="content-body" data-off-canvas-wrapper>
		<div class="off-canvas position-left reveal-for-large" style="position:absolute" id="my-info" data-off-canvas data-position="left">
		    <div id="sidemenu-tools" class="row column">
			<br>

			<!-- MENU START -->
			<ul class="menu vertical" data-accordion-menu style="max-width: 250px;">


        <?php
        // Section
        for ($i=1; $i <= 4; $i++) {
        $res=$dbcon->query("SELECT * FROM mainadmin_menu WHERE m_menu_section =" .$i);
        while($row=$res->fetch_array())
        {
         ?>
         <li class="menuside"><a href="<?php echo $row['m_menu_link']; ?>"><i class="<?php echo $row['m_menu_icon']; ?>"></i> <?php echo $row['m_menu_name']; ?></a>

         <?php
         $res_pro=$dbcon->query("SELECT * FROM subadmin_menu WHERE m_menu_id=".$row['m_menu_id']);
         ?>
                <ul class="menu menuaccordionside vertical">
          <?php
          while($pro_row=$res_pro->fetch_array())
          {
           ?><li class="menuside"><a href="<?php echo $pro_row['s_menu_link']; ?>"><?php echo $pro_row['s_menu_name']; ?></a></li><?php
          }
          ?>
         </ul>
         </li>

            <?php
        }
        ?>

          <span><hr></span>
          <?php
          }
        ?>




			    <br>
			    <div >
				<a href="#"><img id="DuolexLogo" src="img/Duolex_Logo.png" alt="Duolex_Logo" height="auto" width="85"> </a>
			    </div>
			    <br>
			</ul>
			<br>

		    </div>
		</div>


		<!-- MENU END -->


		<!-- CONTENT START -->
		<div class="off-canvas-content" data-off-canvas-content>
		    <div class="title-bar hide-for-large">
			<div class="title-bar-left">
			    <button class="menu-icon" type="button" data-open="my-info"></button>
			    <span class="title-bar-title">Menu</span>
			</div>
		    </div>

         			  <div id=content>
          			  </div>

		</div>
	    </div>
	    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
	    <script>
		    $(document).foundation();
	    </script>

    </body>
</html>
