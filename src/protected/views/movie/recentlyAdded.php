<?php

/* @var $dataProvider LibraryDataProvider */
$this->pageTitle = 'Films récemment ajoutés';

?>

<h2>Films récemment ajoutés</h2>

<?php

switch ($this->getDisplayMode())
{
	case MediaController::DISPLAY_MODE_GRID:
		$this->widget('ResultGrid', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_movieGridItem',
		));
		break;
	case MediaController::DISPLAY_MODE_LIST:
		$this->widget('ResultListMovies', array(
			'dataProvider'=>$dataProvider,
		));
		break;
}