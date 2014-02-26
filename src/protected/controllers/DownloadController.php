<?php

/**
 * Handles download-related actions
 *
 * @author Geoffrey Bonneville <geoffrey.bonneville@gmail.com>
 * @copyright Copyright &copy; Geoffrey Bonneville 2013-
 * @license https://www.gnu.org/licenses/gpl.html The GNU General Public License v3.0
 */
class DownloadController extends Controller
{

        /**
         * Renders an iframe from HTPC-Manager
         */
	public function actionIndex()
	{
                $this->render('index');
	}

}
