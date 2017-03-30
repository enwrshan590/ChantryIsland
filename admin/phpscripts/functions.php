<?php
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function getHomepage($id) {
		include('connect.php');
		$pagestring = "SELECT * FROM `tbl_pages` WHERE pages_id = {$id}";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
		mysql_close($link);
	}

	function editHomepage($id, $secOne, $secTwo) {
		include('connect.php');

		$updatestring = "UPDATE tbl_pages SET pages_sectionone=\"{$secOne}\", pages_sectiontwo=\"{$secTwo}\" WHERE pages_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			$message = "<i>Your page has successfully been updated.</i>";
			return $message;
		} else {
			$message = "<i>There was a problem changing this information.</i>";
			return $message;
		}
		mysqli_close($link);
	}

	function getNews($type) {
		include('connect.php');
		$newsstring = "SELECT * FROM `tbl_news` WHERE news_type = {$type}";
		$newsquery = mysqli_query($link, $newsstring);

		if ($newsquery) {
			$found_news = mysqli_fetch_array($newsquery, MYSQLI_ASSOC);
			return $found_news;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

		function addNews($type, $newsTitle, $newsImg, $newsContent) {
			include('connect.php');
			$newsImg = mysqli_real_escape_string($link,$newsImg); //cleans file name - should be done anytime something is inserted to the DB

			
			$date = date('o-m-d');


				$updatenews = "INSERT INTO tbl_news VALUES(NULL, '{$type}', '{$newsTitle}', '{$date}', 'default.jpg', '{$newsContent}')";
				$updateFinal = mysqli_query($link, $updatenews);

				$message = "<i>Your news story has successfully been added.</i>";
					return $message;

		
			if($_FILES['news_image']['type'] == "image/jpg" || $_FILES['news_image']['type'] == "image/jpeg") {
				
				$targetpath = "../images/news/{$newsImg}";

				if(move_uploaded_file($_FILES['news_image']['tmp_name'],$targetpath)) {
				
					$orig = "../images/news/".$newsImg;
					
					$updatenews = "INSERT INTO tbl_news VALUES(NULL, '{$type}', '{$newsTitle}', '{$date}', '{$newsImg}', '{$newsContent}')";
					$updateFinal = mysqli_query($link, $updatenews);

					$message = "<i>Your news story has successfully been added.</i>";
					return $message;
				}
			}
			mysqli_close($link);
		}

	function dynamicNews($tbl, $col, $id) {
		include('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col}={$id} ORDER BY news_id DESC";
		$runSingle = mysqli_query($link, $querySingle);
		
		if($runSingle){
			return $runSingle;	
		}else{
			$error =  "<i>There was an error accessing this information. Please contact your admin.</i>";
			return $error;
		}
	}

		function editNews($id, $newsTitle, $newsImg, $newsContent) {
			include('connect.php');

			$updatestring = "UPDATE tbl_news SET news_title=\"{$newsTitle}\", news_content=\"{$newsContent}\" WHERE news_type={$type}";
			$updatequery = mysqli_query($link, $updatestring);

			if($updatequery) {
				$message = "<i>Your page has successfully been updated.</i>";
				return $message;
			} else {
				$message = "<i>There was a problem changing this information.</i>";
				return $message;
			}
		mysqli_close($link);
	}

	function getContact() {
		include('connect.php');
		$contactstring = "SELECT * FROM tbl_contact";
		$contactquery = mysqli_query($link, $contactstring);

		if ($contactquery) {
			$found_contact = mysqli_fetch_array($contactquery, MYSQLI_ASSOC);
			return $found_contact;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

	function editContact($address, $phone, $tollphone) {
			include('connect.php');

			$updatestring = "UPDATE tbl_contact SET contact_address=\"{$address}\", contact_phone=\"{$phone}\", contact_tollphone=\"{$tollphone}\"";
			$updatequery = mysqli_query($link, $updatestring);

			if($updatequery) {
				$message = "<i>Your contact information has successfully been updated.</i>";
				return $message;
			} else {
				$message = "<i>There was a problem changing this information.</i>";
				return $message;
			}
		mysqli_close($link);
	}

	function getRestore() {
		include('connect.php');
		$pagestring = "SELECT * FROM tbl_restoration";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
		mysql_close($link);
	}

	function editRestore($volunteers, $visitors, $partners) {
			include('connect.php');

			$updatestring = "UPDATE tbl_restoration SET restoration_volunteers=\"{$volunteers}\", restoration_visitors=\"{$visitors}\", restoration_partners=\"{$partners}\"";
			$updatequery = mysqli_query($link, $updatestring);

			if($updatequery) {
				$message = "<i>Your page has successfully been updated.</i>";
				return $message;
			} else {
				$message = "<i>There was a problem changing this information.</i>";
				return $message;
			}
		mysqli_close($link);
	}


	function getRates($id) {
		include('connect.php');
		$pagestring = "SELECT * FROM `tbl_schedule` WHERE schedule_id = {$id}";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
		mysql_close($link);
	}

	function editRates($id, $textSec, $rates) {
		include('connect.php');

		$updatestring = "UPDATE tbl_schedule SET schedule_text=\"{$textSec}\", schedule_rates=\"{$rates}\" WHERE schedule_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			$message = "<i>Your page has successfully been updated.</i>";
			return $message;
		} else {
			$message = "<i>There was a problem changing this information.</i>";
			return $message;
		}
		mysqli_close($link);
	}

	function getDonate() {
		include('connect.php');
		$pagestring = "SELECT * FROM tbl_donation";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

	function editDonate($textSec, $shipmate, $lifesaving, $assistant, $lighthouse, $captain, $queen) {
			include('connect.php');

			$updatestring = "UPDATE tbl_donation SET donation_text=\"{$textSec}\", donation_shipmate=\"{$shipmate}\", donation_lifesaving=\"{$lifesaving}\", donation_assistant=\"{$assistant}\", donation_lighthouse=\"{$lighthouse}\", donation_captain=\"{$captain}\", donation_queen=\"{$queen}\"";
			$updatequery = mysqli_query($link, $updatestring);

			if($updatequery) {
				$message = "<i>Your page has successfully been updated.</i>";
				return $message;
			} else {
				$message = "<i>There was a problem changing this information.</i>";
				return $message;
			}
		mysqli_close($link);
	}

	function getBooking() {
		include('connect.php');
		$pagestring = "SELECT * FROM tbl_booking";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

	function editBooking($booking) {
		include('connect.php');

		$updatestring = "UPDATE tbl_booking SET booking_info=\"{$booking}\"";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			$message = "<i>Your page has successfully been updated.</i>";
			return $message;
		} else {
			$message = "<i>There was a problem changing this information.</i>";
			return $message;
		}
		mysqli_close($link);
	}

	function getVolunteers() {
		include('connect.php');
		$newsstring = "SELECT * FROM tbl_volunteers";
		$newsquery = mysqli_query($link, $newsstring);

		if ($newsquery) {
			$found_news = mysqli_fetch_array($newsquery, MYSQLI_ASSOC);
			return $found_news;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
			mysql_close($link);
	}

		function addVolunteer($name, $volImg, $role) {
			include('connect.php');
			$volImg = mysqli_real_escape_string($link, $volImg);

				$updatenews = "INSERT INTO tbl_volunteers VALUES(NULL, 'avatar.jpg', '{$name}', '{$role}')";
				$updateFinal = mysqli_query($link, $updatenews);

				$message = "<i>Your new volunteer has successfully been added.</i>";
					return $message;

		
			if($_FILES['volunteers_image']['type'] == "image/jpg" || $_FILES['volunteers_image']['type'] == "image/jpeg") {
				
				$target = "../images/volunteers/{$volImg}";

				if(move_uploaded_file($_FILES['volunteers_image']['tmp_name'],$target)) {
					
					$updatenews = "INSERT INTO tbl_volunteers VALUES(NULL, '{$volImg}', '{$name}', '{$role}')";
					$updateFinal = mysqli_query($link, $updatenews);

					$message = "<i>Your new volunteer has successfully been added.</i>";
					return $message;
				}
			}
			mysqli_close($link);
		}

		function getAbout($id) {
		include('connect.php');
		$pagestring = "SELECT * FROM `tbl_about` WHERE about_id = {$id}";
		$pagequery = mysqli_query($link, $pagestring);

		if ($pagequery) {
			$found_page = mysqli_fetch_array($pagequery, MYSQLI_ASSOC);
			return $found_page;
		} else {
			$message = "<i>There was a problem gathering this information.</i>";
			return $message;
		}
		mysql_close($link);
	}

	function editAbout($id, $textSec, $title, $content) {
		include('connect.php');

		$updatestring = "UPDATE tbl_about SET about_maintext=\"{$textSec}\", about_title=\"{$title}\", about_content=\"{$content}\" WHERE about_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			$message = "<i>Your page has successfully been updated.</i>";
			return $message;
		} else {
			$message = "<i>There was a problem changing this information.</i>";
			return $message;
		}
		mysqli_close($link);
	}

?>