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
			-webkit-column-count: 1 !important;
			-moz-column-count: 1 !important;
			column-count: 1 !important;
			-webkit-column-width: initial !important;
			-moz-column-width: initial !important;
			column-width: initial !important;
		}
		</style>
	", 'isHTML' => true];
	}
}
 ?> 
 
 
		