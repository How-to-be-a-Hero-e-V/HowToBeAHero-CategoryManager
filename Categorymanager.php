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
			animation : none !important;
			animation-delay : 0 !important;
			animation-direction : normal !important;
			animation-duration : 0 !important;
			animation-fill-mode : none !important;
			animation-iteration-count : 1 !important;
			animation-name : none !important;
			animation-play-state : running !important;
			animation-timing-function : ease !important;
			backface-visibility : visible !important;
			background : 0 !important;
			background-attachment : scroll !important;
			background-clip : border-box !important;
			background-color : transparent !important;
			background-image : none !important;
			background-origin : padding-box !important;
			background-position : 0 0 !important;
			background-position-x : 0 !important;
			background-position-y : 0 !important;
			background-repeat : repeat !important;
			background-size : auto auto !important;
			border : 0 !important;
			border-style : none !important;
			border-width : medium !important;
			border-color : inherit !important;
			border-bottom : 0 !important;
			border-bottom-color : inherit !important;
			border-bottom-left-radius : 0 !important;
			border-bottom-right-radius : 0 !important;
			border-bottom-style : none !important;
			border-bottom-width : medium !important;
			border-collapse : separate !important;
			border-image : none !important;
			border-left : 0 !important;
			border-left-color : inherit !important;
			border-left-style : none !important;
			border-left-width : medium !important;
			border-radius : 0 !important;
			border-right : 0 !important;
			border-right-color : inherit !important;
			border-right-style : none !important;
			border-right-width : medium !important;
			border-spacing : 0 !important;
			border-top : 0 !important;
			border-top-color : inherit !important;
			border-top-left-radius : 0 !important;
			border-top-right-radius : 0 !important;
			border-top-style : none !important;
			border-top-width : medium !important;
			bottom : auto !important;
			box-shadow : none !important;
			box-sizing : content-box !important;
			caption-side : top !important;
			clear : none !important;
			clip : auto !important;
			color : inherit !important;
			columns : auto !important;
			column-count : auto !important;
			column-fill : balance !important;
			column-gap : normal !important;
			column-rule : medium none currentColor !important;
			column-rule-color : currentColor !important;
			column-rule-style : none !important;
			column-rule-width : none !important;
			column-span : 1 !important;
			column-width : auto !important;
			content : normal !important;
			counter-increment : none !important;
			counter-reset : none !important;
			cursor : auto !important;
			direction : ltr !important;
			display : inline !important;
			empty-cells : show !important;
			float : none !important;
			font : normal !important;
			font-family : inherit !important;
			font-size : medium !important;
			font-style : normal !important;
			font-variant : normal !important;
			font-weight : normal !important;
			height : auto !important;
			hyphens : none !important;
			left : auto !important;
			letter-spacing : normal !important;
			line-height : normal !important;
			list-style : none !important;
			list-style-image : none !important;
			list-style-position : outside !important;
			list-style-type : disc !important;
			margin : 0 !important;
			margin-bottom : 0 !important;
			margin-left : 0 !important;
			margin-right : 0 !important;
			margin-top : 0 !important;
			max-height : none !important;
			max-width : none !important;
			min-height : 0 !important;
			min-width : 0 !important;
			opacity : 1 !important;
			orphans : 0 !important;
			outline : 0 !important;
			outline-color : invert !important;
			outline-style : none !important;
			outline-width : medium !important;
			overflow : visible !important;
			overflow-x : visible !important;
			overflow-y : visible !important;
			padding : 0 !important;
			padding-bottom : 0 !important;
			padding-left : 0 !important;
			padding-right : 0 !important;
			padding-top : 0 !important;
			page-break-after : auto !important;
			page-break-before : auto !important;
			page-break-inside : auto !important;
			perspective : none !important;
			perspective-origin : 50% 50% !important;
			position : static !important;
			/* May need to alter quotes for different locales (e.g fr) */
			quotes : '\201C' '\201D' '\2018' '\2019' !important;
			right : auto !important;
			tab-size : 8 !important;
			table-layout : auto !important;
			text-align : inherit !important;
			text-align-last : auto !important;
			text-decoration : none !important;
			text-decoration-color : inherit !important;
			text-decoration-line : none !important;
			text-decoration-style : solid !important;
			text-indent : 0 !important;
			text-shadow : none !important;
			text-transform : none !important;
			top : auto !important;
			transform : none !important;
			transform-style : flat !important;
			transition : none !important;
			transition-delay : 0s !important;
			transition-duration : 0s !important;
			transition-property : none !important;
			transition-timing-function : ease !important;
			unicode-bidi : normal !important;
			vertical-align : baseline !important;
			visibility : visible !important;
			white-space : normal !important;
			widows : 0 !important;
			width : auto !important;
			word-spacing : normal !important;
			z-index : auto !important;
			/* basic modern patch */
			all: initial !important;
			all: unset !important;
		}
		</style>
		", 'isHTML' => true];
	}
}
 ?>