<?php
kirby()->routes(array(
	array(
		'pattern' => 'robots.txt',
		'action' => function() {
			if(c::get('robots.txt')) {
				return new Response(trim(c::get('robots.txt')), 'text/plain', 200);
			}
			return site()->visit(site()->errorPage());
		}
	)
));