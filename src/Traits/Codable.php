<?php

namespace GGG\HtmlEntities\Traits;

trait Codable
{

	    protected $decoded_chars = array(
			'0' => '?',
			'1' => '!',
			'2' => '&',
			'3' => '@',
			'4' => '#',
			'5' => '%',
			'6' => '$',
			'7' => 'ˆ',
			'8' => '*',
			'9' => '{',
			'10' => '}',
			'11' => '[',
			'12' => ']',
			'13' => '(',
			'14' => ')',
			'15' => '.',
			'16' => ',',
			'17' => ':',
			'18' => ';',
			'19' => '˜',
			'20' => '>',
			'21' => '<',
			'22' => '+',
			'23' => '=',
			'24' => '-',
			'25' => '_',
			'26' => '•',
			'27' => '/',
			'28' => '\\',
			'29' => '"',
			'30' => '\''
		);
	   
		protected $encoded_chars = array(
			'0' => '&amp;quest;',
			'1' => '&amp;excl;',
			'2' => '&amp;amp;',
			'3' => '&amp;commat;',
			'4' => '&amp;num;',
			'5' => '&amp;percnt;',
			'6' => '&amp;dollar;',
			'7' => '&amp;circ;',
			'8' => '&amp;ast;',
			'9' => '&amp;lbrace;',
			'10' => '&amp;rbrace;',
			'11' => '&amp;lbrack;',
			'12' => '&amp;rbrack;',
			'13' => '&amp;lpar;',
			'14' => '&amp;rpar;',
			'15' => '&amp;period;',
			'16' => '&amp;comma;',
			'17' => '&amp;colon;',
			'18' => '&amp;semi;',
			'19' => '&amp;tilde;',
			'20' => '&amp;gt;',
			'21' => '&amp;lt;',
			'22' => '&amp;plus;',
			'23' => '&amp;equals;',
			'24' => '&amp;hyphen;',
			'25' => '&amp;lowbar;',
			'26' => '&amp;middot;',
			'27' => '&amp;sol;',
			'28' => '&amp;bsol;',
			'29' => '&amp;quot;',
			'30' => '&amp;apos;'
		);

}
