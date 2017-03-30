<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

  	$id = "about_id";
	$popForm = getAbout($id);
  	$tbl = "tbl_about";
  	$col = "about_id";
  	$about = getSingle($tbl, $col, $id);

	if(isset($_POST['submit'])) {
		$title = trim($_POST['aboutTitle']);
		$content = trim($_POST['aboutContent']);

		$result = editAbout($id, $title, $content);
		$message = $result;
	}

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>About Page</h4>
	      		<p><b>Edit the text sections and the tab sections on the about page.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p><br>
					<p><?php if(!empty($message)){echo $message;} ?></p>
	      		<div class="small-12 medium-12 large-12 columns">
		          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
		            <li class="tabs-title is-active"><a href="#1">ISLAND</a></li>
		            <li class="tabs-title"><a href="#2">LIGHTHOUSE</a></li>
		            <li class="tabs-title"><a href="#3">BIRD SANCTUARY</a></li>
		          </ul>
		          <div class="tabs-content" data-tabs-content="collapsing-tabs">
		          <form action="admin_about.php" method="post">
		            <?php
		              while($row = mysqli_fetch_array($about)) {
		                echo "<div class=\"tabs-panel row\" id=\"{$row['about_id']}\">";
		                echo "<div class=\"small-12 medium-12 large-12 columns\"><br>";
		                echo "<input type=\"text\" name=\"aboutTitle\" value=\"{$row['about_title']}\">";
		                echo "<textarea name=\"aboutContent\">{$row['about_content']}</textarea>";
		                echo "</div>";
		                echo "</div>";
		              }
		            ?>
		            <input type="submit" name="submit" value="Make Changes">
		           </form>
		          </div>
		        </div>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>