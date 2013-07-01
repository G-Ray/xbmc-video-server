<?php

/* @var $this TvShowController */

$showUrl = $this->createUrl('details', array('id'=>$data->tvshowid));

// Determine which artwork to display
if (isset($data->art->poster))
	$thumbnailPath = $data->art->poster;
else
	$thumbnailPath = $data->thumbnail;

$thumbnailUrl = $this->createUrl('thumbnail/get', 
		array('path'=>$thumbnailPath, 'size'=>Thumbnail::SIZE_MEDIUM, 'type'=>Thumbnail::TYPE_VIDEO));

$this->renderPartial('//videoLibrary/_gridItem', array(
	'label'=>$data->label,
	'itemUrl'=>$showUrl,
	'thumbnailUrl'=>$thumbnailUrl,
));