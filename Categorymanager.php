<?php

class Categorymanager {
    public static function onParserFirstCallInit( $parser ) {
        $parser->setFunctionHook( 'mag_catformat', [ self::class, 'categoryFormat' ] );
		MWDebug::init();
		MWDebug::log('Blaaaa');
        return true;
    }

    public static function categoryFormat( $parser) {
		MWDebug::init();
		MWDebug::log('Bliii');
		return ["
		<style>
		div#mw-subcategories h2, div#mw-subcategories p, div#mw-pages h2, div#mw-pages p{
			display: none;
		}
		
		.mw-category {
			-webkit-column-count: 1;
			-moz-column-count: 1;
			column-count: 1;
			-webkit-column-width: initial;
			-moz-column-width: initial;
			column-width: initial;
		}
		</style>
	", 'isHTML' => true];
	}
}
 ?> 
 
 
		