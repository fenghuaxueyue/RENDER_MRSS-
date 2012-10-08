<?php
//Load the website
$xml = simplexml_load_file("http://vodo.net/feeds/public");
$arrFeeds = array();
$itemRSS = array();
//Save the information from the website into json data
foreach ($xml->entry as $entry) {
	$itemRSS['entry'] = array(
		'title' => $entry->title,
		'detailLink' => $entry->link[0]->attributes()->href,
		'torrentLink' => $entry->link[1]->attributes()->href,
		'published' => $entry->published,
		'id' => $entry->id,
		'rights' => $entry->rights,
		'name' => $entry->author->name,
		'content' => $entry->content,
		'size' => $entry->format->size,
		'duration' => $entry->format->duration,
		'video_codec' => $entry->format->video_codec,
		'framerate' => $entry->format->framerate,
		'video_bitrate' => $entry->format->video_bitrate,
		'width' => $entry->format->width,
		'height' => $entry->format->height,
		'pixel_aspect_ratio' => $entry->format->pixel_aspect_ratio,
		'audio_codec' => $entry->format->audio_codec,
		'samplerate' => $entry->format->samplerate,
		'channels' => $entry->format->channels,
		'audio_bitrate' => $entry->format->audio_bitrate
	);
	array_push($arrFeeds, $itemRSS);
}
//Encode json and save the result to file

$json = json_encode($arrFeeds);

$file = "feed.json";

file_put_contents($file, $json);
//Direct to show page
header('Location: show.php');

?>