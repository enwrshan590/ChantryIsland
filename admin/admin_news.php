<?php
	require_once("phpscripts/init.php");

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$type = 1;
	$popForm = getNews($type);

	if(isset($_POST['submitNews'])) {
		$newsTitle = trim($_POST['newsTitle']);
		$newsImg = $_FILES['news_image']['name'];
		$newsContent = trim($_POST['newsContent']);

		$result = addNews($type, $newsTitle, $newsImg, $newsContent);
		$message = $result;
	}

	$tbl = "tbl_news";
	$col = "news_type";
	$id = 1;
	$title = getSingle($tbl, $col, $id);

	if(isset($_GET['id'])) {
		$tbl = "tbl_news";
		$col = "news_type";
		$id = $_GET['id'];
		$getSingle = getSingle($tbl, $col, $id);
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
			            <li class="tabs-title is-active"><a href="#panel1">ADD NEWS STORY</a></li>
			            <li class="tabs-title"><a href="#panel2">EDIT/DELETE NEWS STORY</a></li>
			          </ul>

			          <div class="tabs-content" data-tabs-content="collapsing-tabs">
			            <div class="tabs-panel is-active row" id="panel1">
			              <form action="admin_news.php" method="post" enctype="multipart/form-data">
									<p><?php if(!empty($message)){echo $message;} ?></p>
									<label><b>Title:</b></label>
									<input type="text" name="newsTitle" value="">
									<label><b>Image (JPG files only):</b></label>
									<input type="file" name="news_image" value="">
									<label><b>Content:</b></label>
									<textarea name="newsContent"></textarea>
									<input type="submit" name="submitNews" value="Add">
								</form>
			            </div>

			            <div class="tabs-panel row" id="panel2">
			              <div class="small-12 medium-12 large-12 columns">
			                <form action="admin_news.php" method="post" enctype="multipart/form-data">
									<label><b>Current Stories:</b></label>
									<select name="newsTitle">
										<option value="">Select</option>
										<?php
											while($row = mysqli_fetch_array($title)) {
												echo "<option value=".$row['news_id'].">".$row['news_title']."</option>";
											}
										?>

										<?php 
											if(!is_string($getSingle)){
												$row = mysqli_fetch_array($getSingle);
													echo "<h2>{$row['news_title']}</h2><br>
														<img src=\"images/{$row['news_image']}\" alt=\"{$row['news_title']}\">
														 <p>{$row['news_content']}</p>";
												
											}else{
												echo "<p>{$getSingle}</p>";	
											}
										?>
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