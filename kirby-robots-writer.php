<?php
kirby()->routes(array(
	array(
		'pattern' => 'robots.txt',
		'action' => function() {
			header("Content-Type: text/plain");

			switch( c::get('plugin.robots.writer.type', 'snippet') ) {
				case 'snippet' :
					$content = snippet( c::get('plugin.robots.writer.snippet.name', 'snippet'), [], true);
					break;
				case 'site' :
					$content = site()->{ c::get('plugin.robots.writer.field.name', 'robots') }();
					break;
				case 'page' :
					$content = page( c::get('plugin.robots.writer.page.uri') )->{ c::get('plugin.robots.writer.field.name', 'robots') }();
					break;
			}
			echo $content;
			die;
        }
    )
));