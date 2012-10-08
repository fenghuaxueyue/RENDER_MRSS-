<?php
//Get json data from array
	$feedArray = json_decode( file_get_contents('feed.json') , true);
//	print_r($feedArray);
	$i = 1;
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Media RSS Feed</title>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/AccordionMenus.js"></script>
	</head>
	<body>
		<div id="header">VODO ALL WORKS</div>
		<div id="AccorionBox">
			<div id="AccordionContainer" class="AccordionContainer">
				<?php //Render json data into html ?>
				<?php foreach($feedArray as $feed):?>
				<div>
					<div class="<?php if($i%2 == 1) {echo 'AccordionTitle';} else {echo 'AccordionTitleAlter';}?>" onclick="runAccordion(<?php echo $i; ?>);" onselectstart="return false;">
						<?php echo $feed['entry']['title'][0]; ?>
					</div>
				</div>
				<div id="Accordion<?php echo $i; ?>Content" class="AccordionContent">
					<h2 class="innerHeader">Detail Information</h2>
					<?php 
						if(isset($feed['entry']['name'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Author:&nbsp;&nbsp; </span>' . $feed['entry']['name'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['detailLink'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Details: &nbsp;&nbsp; </span><a href="' . $feed['entry']['detailLink'][0] . '">' . $feed['entry']['detailLink'][0] . '</a></p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['torrentLink'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Torrent: &nbsp;&nbsp; </span><a href="' . $feed['entry']['torrentLink'][0] . '">' . $feed['entry']['torrentLink'][0] . '</a></p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['published'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Published: &nbsp;&nbsp; </span>' . $feed['entry']['published'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['id'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">ID: &nbsp;&nbsp; </span>' . $feed['entry']['id'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['rights'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Rights: &nbsp;&nbsp; </span>' . $feed['entry']['rights'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['content'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Description: &nbsp;&nbsp; </span>' . $feed['entry']['content'][0] . '</p>';
						}
					?>
					<h2 class="innerHeader">Media Information</h2>
					<?php 
						if(isset($feed['entry']['size'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Size: &nbsp;&nbsp; </span>' . $feed['entry']['size'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['duration'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Duration: &nbsp;&nbsp; </span>' . $feed['entry']['duration'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['video_codec'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Video_codec: &nbsp;&nbsp; </span>' . $feed['entry']['video_codec'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['framerate'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Framerate: &nbsp;&nbsp; </span>' . $feed['entry']['framerate'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['video_bitrate'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Video_bitrate: &nbsp;&nbsp; </span>' . $feed['entry']['video_bitrate'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['width'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Width: &nbsp;&nbsp; </span>' . $feed['entry']['width'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['height'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Height:  &nbsp;&nbsp; </span>' . $feed['entry']['height'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['pixel_aspect_ratio'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Pixel_aspect_ratio: &nbsp;&nbsp; </span>' . $feed['entry']['pixel_aspect_ratio'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['audio_codec'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Audio_codec: &nbsp;&nbsp; </span>' . $feed['entry']['audio_codec'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['samplerate'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Samplerate: &nbsp;&nbsp; </span>' . $feed['entry']['samplerate'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['channels'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Channels: &nbsp;&nbsp; </span>' . $feed['entry']['channels'][0] . '</p>';
						}
					?>
					<?php 
						if(isset($feed['entry']['audio_bitrate'][0])) {
							echo '<p class="innerContent"><span class="innerSpan">Audio_bitrate: &nbsp;&nbsp; </span>' . $feed['entry']['audio_bitrate'][0] . '</p>';
						}
					?>
					
					
				</div>
				  
				<?php $i++; endforeach; ?>
			</div>
		</div>
		
	</body>
	
</html>