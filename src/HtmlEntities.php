<?php

namespace GGG\HtmlEntities;

class HtmlEntities
{
    private $decoded;
    private $encoded;
    private $chars = array(
        '&amp;quest;' => '?',
        '&amp;excl;' => '!',
        '&amp;commat;' => '@',
        '&amp;num;' => '#',
        '&amp;percnt;' => '%',
        '&amp;dollar;' => '$',
        '&amp;ast;' => '*',
        '&amp;lbrace;' => '{',
        '&amp;rbrace;' => '}',
        '&amp;lbrack;' => '[',
        '&amp;rbrack;' => ']',
        '&amp;lpar;' => '(',
        '&amp;rpar;' => ')',
        '&amp;period;' => '.',
        '&amp;comma;' => ',',
        '&amp;colon;' => ':',
        '&amp;semi;' => ';',
        '&amp;plus;' => '+',
        '&amp;equals;' => '=',
        '&amp;hyphen;' => '-',
        '&amp;lowbar;' => '_',
        '&amp;middot;' => '·',
        '&amp;sol;' => '/',
        '&amp;bsol;' => '\\',
        '&amp;apos;' => '\'',
        '&amp;quot;' => '"',
        '&amp;amp;' => '&',
        '&amp;lt;' => '<',
        '&amp;gt;' => '>',
        '&amp;nbsp;' => ' ',
        '&amp;iexcl;' => '¡',
        '&amp;cent;' => '¢',
        '&amp;pound;' => '£',
        '&amp;curren;' => '¤',
        '&amp;yen;' => '¥',
        '&amp;brvbar;' => '¦',
        '&amp;sect;' => '§',
        '&amp;uml;' => '¨',
        '&amp;copy;' => '©',
        '&amp;ordf;' => 'ª',
        '&amp;laquo;' => '«',
        '&amp;not;' => '¬',
        '&amp;shy;' => '­',
        '&amp;reg;' => '®',
        '&amp;macr;' => '¯',
        '&amp;deg;' => '°',
        '&amp;plusmn;' => '±',
        '&amp;sup2;' => '²',
        '&amp;sup3;' => '³',
        '&amp;acute;' => '´',
        '&amp;micro;' => 'µ',
        '&amp;para;' => '¶',
        '&amp;cedil;' => '¸',
        '&amp;sup1;' => '¹',
        '&amp;ordm;' => 'º',
        '&amp;raquo;' => '»',
        '&amp;frac14;' => '¼',
        '&amp;frac12;' => '½',
        '&amp;frac34;' => '¾',
        '&amp;iquest;' => '¿',
        '&amp;Agrave;' => 'À',
        '&amp;Aacute;' => 'Á',
        '&amp;Acirc;' => 'Â',
        '&amp;Atilde;' => 'Ã',
        '&amp;Auml;' => 'Ä',
        '&amp;Aring;' => 'Å',
        '&amp;AElig;' => 'Æ',
        '&amp;Ccedil;' => 'Ç',
        '&amp;Egrave;' => 'È',
        '&amp;Eacute;' => 'É',
        '&amp;Ecirc;' => 'Ê',
        '&amp;Euml;' => 'Ë',
        '&amp;Igrave;' => 'Ì',
        '&amp;Iacute;' => 'Í',
        '&amp;Icirc;' => 'Î',
        '&amp;Iuml;' => 'Ï',
        '&amp;ETH;' => 'Ð',
        '&amp;Ntilde;' => 'Ñ',
        '&amp;Ograve;' => 'Ò',
        '&amp;Oacute;' => 'Ó',
        '&amp;Ocirc;' => 'Ô',
        '&amp;Otilde;' => 'Õ',
        '&amp;Ouml;' => 'Ö',
        '&amp;times;' => '×',
        '&amp;Oslash;' => 'Ø',
        '&amp;Ugrave;' => 'Ù',
        '&amp;Uacute;' => 'Ú',
        '&amp;Ucirc;' => 'Û',
        '&amp;Uuml;' => 'Ü',
        '&amp;Yacute;' => 'Ý',
        '&amp;THORN;' => 'Þ',
        '&amp;szlig;' => 'ß',
        '&amp;agrave;' => 'à',
        '&amp;aacute;' => 'á',
        '&amp;acirc;' => 'â',
        '&amp;atilde;' => 'ã',
        '&amp;auml;' => 'ä',
        '&amp;aring;' => 'å',
        '&amp;aelig;' => 'æ',
        '&amp;ccedil;' => 'ç',
        '&amp;egrave;' => 'è',
        '&amp;eacute;' => 'é',
        '&amp;ecirc;' => 'ê',
        '&amp;euml;' => 'ë',
        '&amp;igrave;' => 'ì',
        '&amp;iacute;' => 'í',
        '&amp;icirc;' => 'î',
        '&amp;iuml;' => 'ï',
        '&amp;eth;' => 'ð',
        '&amp;ntilde;' => 'ñ',
        '&amp;ograve;' => 'ò',
        '&amp;oacute;' => 'ó',
        '&amp;ocirc;' => 'ô',
        '&amp;otilde;' => 'õ',
        '&amp;ouml;' => 'ö',
        '&amp;divide;' => '÷',
        '&amp;oslash;' => 'ø',
        '&amp;ugrave;' => 'ù',
        '&amp;uacute;' => 'ú',
        '&amp;ucirc;' => 'û',
        '&amp;uuml;' => 'ü',
        '&amp;yacute;' => 'ý',
        '&amp;thorn;' => 'þ',
        '&amp;yuml;' => 'ÿ',
        '&amp;OElig;' => 'Œ',
        '&amp;oelig;' => 'œ',
        '&amp;Scaron;' => 'Š',
        '&amp;scaron;' => 'š',
        '&amp;Yuml;' => 'Ÿ',
        '&amp;fnof;' => 'ƒ',
        '&amp;circ;' => 'ˆ',
        '&amp;tilde;' => '˜',
        '&amp;Alpha;' => 'Α',
        '&amp;Beta;' => 'Β',
        '&amp;Gamma;' => 'Γ',
        '&amp;Delta;' => 'Δ',
        '&amp;Epsilon;' => 'Ε',
        '&amp;Zeta;' => 'Ζ',
        '&amp;Eta;' => 'Η',
        '&amp;Theta;' => 'Θ',
        '&amp;Iota;' => 'Ι',
        '&amp;Kappa;' => 'Κ',
        '&amp;Lambda;' => 'Λ',
        '&amp;Mu;' => 'Μ',
        '&amp;Nu;' => 'Ν',
        '&amp;Xi;' => 'Ξ',
        '&amp;Omicron;' => 'Ο',
        '&amp;Pi;' => 'Π',
        '&amp;Rho;' => 'Ρ',
        '&amp;Sigma;' => 'Σ',
        '&amp;Tau;' => 'Τ',
        '&amp;Upsilon;' => 'Υ',
        '&amp;Phi;' => 'Φ',
        '&amp;Chi;' => 'Χ',
        '&amp;Psi;' => 'Ψ',
        '&amp;Omega;' => 'Ω',
        '&amp;alpha;' => 'α',
        '&amp;beta;' => 'β',
        '&amp;gamma;' => 'γ',
        '&amp;delta;' => 'δ',
        '&amp;epsilon;' => 'ε',
        '&amp;zeta;' => 'ζ',
        '&amp;eta;' => 'η',
        '&amp;theta;' => 'θ',
        '&amp;iota;' => 'ι',
        '&amp;kappa;' => 'κ',
        '&amp;lambda;' => 'λ',
        '&amp;mu;' => 'μ',
        '&amp;nu;' => 'ν',
        '&amp;xi;' => 'ξ',
        '&amp;omicron;' => 'ο',
        '&amp;pi;' => 'π',
        '&amp;rho;' => 'ρ',
        '&amp;sigmaf;' => 'ς',
        '&amp;sigma;' => 'σ',
        '&amp;tau;' => 'τ',
        '&amp;upsilon;' => 'υ',
        '&amp;phi;' => 'φ',
        '&amp;chi;' => 'χ',
        '&amp;psi;' => 'ψ',
        '&amp;omega;' => 'ω',
        '&amp;thetasym;' => 'ϑ',
        '&amp;upsih;' => 'ϒ',
        '&amp;piv;' => 'ϖ',
        '&amp;ensp;' => ' ',
        '&amp;emsp;' => ' ',
        '&amp;thinsp;' => ' ',
        '&amp;zwnj;' => '‌',
        '&amp;zwj;' => '‍',
        '&amp;lrm;' => '‎',
        '&amp;rlm;' => '‏',
        '&amp;ndash;' => '–',
        '&amp;mdash;' => '—',
        '&amp;lsquo;' => '‘',
        '&amp;rsquo;' => '’',
        '&amp;sbquo;' => '‚',
        '&amp;ldquo;' => '“',
        '&amp;rdquo;' => '”',
        '&amp;bdquo;' => '„',
        '&amp;dagger;' => '†',
        '&amp;Dagger;' => '‡',
        '&amp;bull;' => '•',
        '&amp;hellip;' => '…',
        '&amp;permil;' => '‰',
        '&amp;prime;' => '′',
        '&amp;Prime;' => '″',
        '&amp;lsaquo;' => '‹',
        '&amp;rsaquo;' => '›',
        '&amp;oline;' => '‾',
        '&amp;frasl;' => '⁄',
        '&amp;euro;' => '€',
        '&amp;image;' => 'ℑ',
        '&amp;weierp;' => '℘',
        '&amp;real;' => 'ℜ',
        '&amp;trade;' => '™',
        '&amp;alefsym;' => 'ℵ',
        '&amp;larr;' => '←',
        '&amp;uarr;' => '↑',
        '&amp;rarr;' => '→',
        '&amp;darr;' => '↓',
        '&amp;harr;' => '↔',
        '&amp;crarr;' => '↵',
        '&amp;lArr;' => '⇐',
        '&amp;uArr;' => '⇑',
        '&amp;rArr;' => '⇒',
        '&amp;dArr;' => '⇓',
        '&amp;hArr;' => '⇔',
        '&amp;forall;' => '∀',
        '&amp;part;' => '∂',
        '&amp;exist;' => '∃',
        '&amp;empty;' => '∅',
        '&amp;nabla;' => '∇',
        '&amp;isin;' => '∈',
        '&amp;notin;' => '∉',
        '&amp;ni;' => '∋',
        '&amp;prod;' => '∏',
        '&amp;sum;' => '∑',
        '&amp;minus;' => '−',
        '&amp;lowast;' => '∗',
        '&amp;radic;' => '√',
        '&amp;prop;' => '∝',
        '&amp;infin;' => '∞',
        '&amp;ang;' => '∠',
        '&amp;and;' => '∧',
        '&amp;or;' => '∨',
        '&amp;cap;' => '∩',
        '&amp;cup;' => '∪',
        '&amp;int;' => '∫',
        '&amp;there4;' => '∴',
        '&amp;sim;' => '∼',
        '&amp;cong;' => '≅',
        '&amp;asymp;' => '≈',
        '&amp;ne;' => '≠',
        '&amp;equiv;' => '≡',
        '&amp;le;' => '≤',
        '&amp;ge;' => '≥',
        '&amp;sub;' => '⊂',
        '&amp;sup;' => '⊃',
        '&amp;nsub;' => '⊄',
        '&amp;sube;' => '⊆',
        '&amp;supe;' => '⊇',
        '&amp;oplus;' => '⊕',
        '&amp;otimes;' => '⊗',
        '&amp;perp;' => '⊥',
        '&amp;sdot;' => '⋅',
        '&amp;lceil;' => '⌈',
        '&amp;rceil;' => '⌉',
        '&amp;lfloor;' => '⌊',
        '&amp;rfloor;' => '⌋',
        '&amp;lang;' => '〈',
        '&amp;rang;' => '〉',
        '&amp;loz;' => '◊',
        '&amp;spades;' => '♠',
        '&amp;clubs;' => '♣',
        '&amp;hearts;' => '♥',
        '&amp;diams;' => '♦'
    );
    
    public function __construct()
    {
      return $this;
    }
    
    public function decode( $toDecode ) {
      $this->html_entity_decode_plus( $toDecode );
      return $this->get_decoded();
    }

    private function html_entity_decode_plus( $input ) {
      $decoded = NULL;
      $key = NULL;
      $encoded_chars = array_flip( $this->chars );
      $decoded_chars = $this->chars;
      if( is_array( $input ) ) {
        $decoded = [];
        foreach( $input as $index => $char ) {
          if( in_array( $char, $encoded_chars ) ) {
            $keys = array_keys( $encoded_chars, $char );
            $decoded[ $index ] = $decoded_chars[ $keys[0] ];
          } else {
            $decoded[ $index ] = $char;
          }
        }
        $decoded = implode('', $decoded);
      }
      if( is_string( $input ) ) {
        if( strlen( $input ) === 1 ) {
          if( in_array( $input, $encoded_chars ) ) {
            $flipped = array_flip( $encoded_chars );
            $key = $flipped[ $input ];
            $decoded = $decoded_chars[ $key ];
          }
        }
        if( strlen( $input ) >= 2 ) {
          $decoded = [];
          preg_match_all( '/((\&amp\;\w+\;)|([\w\d\s]{1,}))/i', $input, $matches );
          $chars = $matches[1];
          foreach( $chars as $index => $char ) {
            if( in_array( $char, $encoded_chars ) ) {
              $keys = array_keys( $encoded_chars, $char );
              $decoded[ $index ] = $decoded_chars[ $keys[0] ];
              } else {
                $decoded[ $index ] = $char;
              }
            }
            $decoded = implode('', $decoded);
          }
        $this->decoded = $decoded;
      }
    }

    private function get_decoded() {
      return $this->decoded;
    }

    public function encode( $toEncode ) {
      $this->htmlentities_plus( $toEncode );
      return $this->get_encoded();
    }

    private function htmlentities_plus( $input ) {
      $encoded = NULL;
      $key = NULL;
      $encoded_chars = $this->chars;
      $decoded_chars = array_flip( $this->chars );
      if( is_array( $input ) ) {
        $encoded = [];
        foreach( $input as $index => $char ) {
          if( in_array( $char, $decoded_chars ) ) {
            $keys = array_keys( $decoded_chars, $char );
            $encoded[ $index ] = $encoded_chars[ $keys[0] ];
          } else {
            $encoded[ $index ] = $char;
          }
        }
        $encoded = implode('', $encoded);
      }
      if( is_string( $input ) ) {
        if( strlen( $input ) === 1 ) {
          if( in_array( $input, $decoded_chars ) ) {
            $flipped = array_flip( $decoded_chars );
            $key = $flipped[ $input ];
            $encoded = $encoded_chars[ $key ];
          }
        }
        if( strlen( $input ) >= 2 ) {
          $encoded = [];
          $chars = str_split( $input );
          foreach( $chars as $index => $char ) {
            if( in_array( $char, $decoded_chars ) ) {
              $keys = array_keys( $decoded_chars, $char );
              $encoded[ $index ] = $encoded_chars[ $keys[0] ];
            } else {
              $encoded[ $index ] = $char;
            }
          }
          $encoded = implode('', $encoded);
        }
        $this->encoded = $encoded;
      }
    }

    private function get_encoded() {
      return $this->encoded;
    }

}