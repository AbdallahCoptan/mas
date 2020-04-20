	<!--address-starts-->
	<div class="address">
		<div class="container">
			<div class="address-top">
				<div class="col-md-6 add-left">
				<center> 
				<?php 
					if ($address)
					echo "<span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span>
					<p align=\"left\"><label>IREDI.</label>
						$address</p>";
					?>
					</center>
				</div>
				<div class="col-md-6 add-left">
				<center>
				<?php
					if($phone1)
					{
					echo "<span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></span>
					<p align=\"left\">$phone1";
					if($phone2) 
					echo ",<br>$phone2</p>";
					}
					?>
					</center>
				</div>
				<div class="clearfix"></div>
				<br />
				<div class="col-md-6 add-left">
				<center>
				<?php
					if($IBAN && $BIC)
					echo "<span class=\"glyphicon glyphicon-euro\" aria-hidden=\"true\"></span>
					<p align=\"left\"><strong>IBAN : </strong>$IBAN<br />
					   <strong>BIC &nbsp&nbsp&nbsp: </strong>$BIC</p>";
					?>
					</center>
				</div>
				<div class="col-md-6 add-left">
				<center>
				<?php
					if($mail)
					echo "<span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span>
					<p align=\"left\"><a href=\"contact.php\">$shortmail1 </a><br /><a href=\"contact.php\"> $shortmail2</a></p>";
					?>
					</center>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--address-end-->
    <!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<a href="index.php"><h3>I.R.E.D.I.</h3></a>
				<p>© 2016 IREDI. All Rights Reserved | Design by  <a href="/MAS/index.html" target="_blank">MAS Technology</a> </p>
				<a href="#home" class="scroll"><img src="images/top-arrow.png" alt="" /></a>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>