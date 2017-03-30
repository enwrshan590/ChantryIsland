<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$popVol = getVolunteers();

	if(isset($_POST['submit'])) {
		$name = trim($_POST['name']);
		$volImg = $_FILES['volunteers_image']['name'];
		$role = trim($_POST['role']);

		$result = addVolunteer($name, $volImg, $role);
		$message = $result;
	}

  require_once("../includes/admin_header.php");
?>

			<div class="holder">
	      	<div class="small-12 medium-12 large-12 columns homeBox">
	      		<h4>News Page</h4>
	      		<p><b>Edit, add and delete stories on the news page.</b><br>
	      		<i>If you want to make a line break in your paragraph, add in "< br >" without the quotations marks and spaces.</i></p>

					<div class="row" id="tabsSec">
			        <div class="small-12 medium-12 large-12 columns">
			          <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
			            <li class="tabs-title is-active"><a href="#panel1">ADD VOLUNTEER</a></li>
			            <li class="tabs-title"><a href="#panel2">EDIT/DELETE VOLUNTEERS</a></li>
			          </ul>

			          <div class="tabs-content" data-tabs-content="collapsing-tabs">
			            <div class="tabs-panel is-active row" id="panel1">
			              <form action="admin_volunteers.php" method="post" enctype="multipart/form-data">
							<p><?php if(!empty($message)){echo $message;} ?></p>
									<label><b>Image (JPG files only):</b></label>
									<input type="file" name="volunteers_image" value="">
									<label><b>First and Last Name:</b></label>
									<input type="text" name="name" value="">
									<label><b>Role:</b></label>
									<input type="text" name="role" value="">
									<input type="submit" name="submit" value="Add">
								</form>
			            </div>

			            <div class="tabs-panel row" id="panel2">
			              <div class="small-12 medium-12 large-12 columns">
			                <form action="admin_news.php" method="post" enctype="multipart/form-data">
									<label><b>Current Volunteers:</b></label>
									<select name="newsTitle">
										<option value="">Select</option>
										<?php
											while($row = mysqli_fetch_array($title)) {
												echo "<option value=".$row['volunteers_id'].">".$row['volunteers_name']."</option>";
											}
										?>

										<!-- <?php 
											if(!is_string($getSingle)){
												$row = mysqli_fetch_array($getSingle);
													echo "<h2>{$row['news_title']}</h2><br>
														<img src=\"images/{$row['volunteers_image']}\" alt=\"{$row['news_title']}\">
														 <p>{$row['news_content']}</p>";
												
											}else{
												echo "<p>{$getSingle}</p>";	
											}
										?> -->
									</select>
									<input type="submit" name="submitNews" value="Make Changes">
								</form>
			              </div>
			            </div>


					<br>
					<p><?php if(!empty($message)){echo $message;} ?></p>
	      	</div>
			</div>

<?php
  require_once("../includes/admin_footer.php");
?>