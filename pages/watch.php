<?php

if(isset($_GET['vid'])) {
	$video = Video::get(htmlentities($_GET['vid']));
	$title = $video->getTitle();
	if($title) {
		$id = $video->getId();
		$desc = $video->getDescription();
		$views = $video->getViews();
		$likes = $video->getLikes();
		$dislikes = $video->getDislikes();
		$path = $video->getPath();
		$author = User::getNameById($video->getUserId());
	}
	else
		die('Error occurred while loading the video !');
}
else {
	header("Location: ./");
}

?>