<?php 
/**
 * Main view of the DMP Develop project
 *
 * This is the main view of the DMP Develop Project.  This is the Base of the program.  
 *
 * @copyright 2015 Datse Multimedia Productions
 * @license GNU General Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@dmp-develop.com>
 * @version 0.0.1
 * 
 * @pacakge DMP-Develop/base/view
 * 
 */

require_once("view/header.php");
echo '
		<h1>DMP Development - Fun Stuff</h1>
		<p>If you\'re here and seeing this, you\'ve got here too soon</p>

		<h2>PHP Version</h2>
		<p>This will only show up if the PHP version is enabled.</p>
		<p>Even if this is showing up, it\'s still too early</p>

		<h2>Issue/Bug trackers</h2>
		<p>We currently have 3 issue/bug trackers which we are using to keep track of the issues/bugs which we see as they develop on this site.  They are:

		<ul>
			<li><a href="http://bugzilla.dmp-develop.com/buglist.cgi?component=Base&list_id=19&product=DMP%20Develop&resolution=---">Bugzilla</a></li>
			<li><a href="http://trac.dmp-develop.com/report/1">Trac</a></li>
			<li><a href="https://github.com/Datse-Multimedia-Productions/dmp-develop-base/issues">GitHub</a></li>
		</ul>


';

$views = scandir('view');

echo "
		<p>Views:</p>

		<ul>
";

foreach ($views as $view) {
  switch ($view) {
    case ".":
    case "..":
    case "header.php";
    case "footer.php";
      break;
    default:
      echo '
		<li><a href="view/'.$view.'">'.$view.'</a></li>
';
  }
}

echo "
		</ul>

		<p>end of controllers</p>
"; 

require_once("view/footer.php");
?>
