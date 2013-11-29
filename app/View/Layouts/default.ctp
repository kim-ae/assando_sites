<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		
		//echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=false&amp;language=en');
		echo $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCUNt1av3TcTCgTf76eR2tC_InucGAB7Ps&sensor=false');
		echo $this->Html->script('jquery-1.10.2.js');
		echo $this->Html->script('gmap3.min.js');
		echo $this->Html->script('google-maps.js');
		echo $this->Html->css('estilo');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('dropdown');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Primeiro Congresso X Brasileiro</h1>
		</div>
		<div id="content">

			<?php echo $this->element('menu',array('itens'=>array('home','evento','como chegar'))); ?>
			<hr>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>