<?php

namespace GGG\HtmlEntities;

class HtmlEntities
{
    private $decoded;
    private $encoded;
    private $decodedChars = array(
        '0' => '?',
        '1' => '!',
        '2' => '@',
        '3' => '#',
        '4' => '%',
        '5' => '$',
        '6' => '*',
        '7' => '{',
        '8' => '}',
        '9' => '[',
        '10' => ']',
        '11' => '(',
        '12' => ')',
        '13' => '.',
        '14' => ',',
        '15' => ':',
        '16' => ';',
        '17' => '+',
        '18' => '=',
        '19' => '-',
        '20' => '_',
        '21' => '•',
        '22' => '/',
        '23' => '\\',
        '24' => '\'',
        '25' => '\"',
        '26' => '&',
        '27' => '<',
        '28' => '>',
        '29' => ' ',
        '30' => '¡',
        '31' => '¢',
        '32' => '£',
        '33' => '¤',
        '34' => '¥',
        '35' => '¦',
        '36' => '§',
        '37' => '¨',
        '38' => '©',
        '39' => 'ª',
        '40' => '«',
        '41' => '¬',
        '42' => '­',
        '43' => '®',
        '44' => '¯',
        '45' => '°',
        '46' => '±',
        '47' => '²',
        '48' => '³',
        '49' => '´',
        '50' => 'µ',
        '51' => '¶',
        '52' => '·',
        '53' => '¸',
        '54' => '¹',
        '55' => 'º',
        '56' => '»',
        '57' => '¼',
        '58' => '½',
        '59' => '¾',
        '60' => '¿',
        '61' => 'À',
        '62' => 'Á',
        '63' => 'Â',
        '64' => 'Ã',
        '65' => 'Ä',
        '66' => 'Å',
        '67' => 'Æ',
        '68' => 'Ç',
        '69' => 'È',
        '70' => 'É',
        '71' => 'Ê',
        '72' => 'Ë',
        '73' => 'Ì',
        '74' => 'Í',
        '75' => 'Î',
        '76' => 'Ï',
        '77' => 'Ð',
        '78' => 'Ñ',
        '79' => 'Ò',
        '80' => 'Ó',
        '81' => 'Ô',
        '82' => 'Õ',
        '83' => 'Ö',
        '84' => '×',
        '85' => 'Ø',
        '86' => 'Ù',
        '87' => 'Ú',
        '88' => 'Û',
        '89' => 'Ü',
        '90' => 'Ý',
        '91' => 'Þ',
        '92' => 'ß',
        '93' => 'à',
        '94' => 'á',
        '95' => 'â',
        '96' => 'ã',
        '97' => 'ä',
        '98' => 'å',
        '99' => 'æ',
        '100' => 'ç',
        '101' => 'è',
        '102' => 'é',
        '103' => 'ê',
        '104' => 'ë',
        '105' => 'ì',
        '106' => 'í',
        '107' => 'î',
        '108' => 'ï',
        '109' => 'ð',
        '110' => 'ñ',
        '111' => 'ò',
        '112' => 'ó',
        '113' => 'ô',
        '114' => 'õ',
        '115' => 'ö',
        '116' => '÷',
        '117' => 'ø',
        '118' => 'ù',
        '119' => 'ú',
        '120' => 'û',
        '121' => 'ü',
        '122' => 'ý',
        '123' => 'þ',
        '124' => 'ÿ',
        '125' => 'Œ',
        '126' => 'œ',
        '127' => 'Š',
        '128' => 'š',
        '129' => 'Ÿ',
        '130' => 'ƒ',
        '131' => 'ˆ',
        '132' => '˜',
        '133' => 'Α',
        '134' => 'Β',
        '135' => 'Γ',
        '136' => 'Δ',
        '137' => 'Ε',
        '138' => 'Ζ',
        '139' => 'Η',
        '140' => 'Θ',
        '141' => 'Ι',
        '142' => 'Κ',
        '143' => 'Λ',
        '144' => 'Μ',
        '145' => 'Ν',
        '146' => 'Ξ',
        '147' => 'Ο',
        '148' => 'Π',
        '149' => 'Ρ',
        '150' => 'Σ',
        '151' => 'Τ',
        '152' => 'Υ',
        '153' => 'Φ',
        '154' => 'Χ',
        '155' => 'Ψ',
        '156' => 'Ω',
        '157' => 'α',
        '158' => 'β',
        '159' => 'γ',
        '160' => 'δ',
        '161' => 'ε',
        '162' => 'ζ',
        '163' => 'η',
        '164' => 'θ',
        '165' => 'ι',
        '166' => 'κ',
        '167' => 'λ',
        '168' => 'μ',
        '169' => 'ν',
        '170' => 'ξ',
        '171' => 'ο',
        '172' => 'π',
        '173' => 'ρ',
        '174' => 'ς',
        '175' => 'σ',
        '176' => 'τ',
        '177' => 'υ',
        '178' => 'φ',
        '179' => 'χ',
        '180' => 'ψ',
        '181' => 'ω',
        '182' => 'ϑ',
        '183' => 'ϒ',
        '184' => 'ϖ',
        '185' => ' ',
        '186' => ' ',
        '187' => ' ',
        '188' => '‌',
        '189' => '‍',
        '190' => '‎',
        '191' => '‏',
        '192' => '–',
        '193' => '—',
        '194' => '‘',
        '195' => '’',
        '196' => '‚',
        '197' => '“',
        '198' => '”',
        '199' => '„',
        '200' => '†',
        '201' => '‡',
        '202' => '•',
        '203' => '…',
        '204' => '‰',
        '205' => '′',
        '206' => '″',
        '207' => '‹',
        '208' => '›',
        '209' => '‾',
        '210' => '⁄',
        '211' => '€',
        '212' => 'ℑ',
        '213' => '℘',
        '214' => 'ℜ',
        '215' => '™',
        '216' => 'ℵ',
        '217' => '←',
        '218' => '↑',
        '219' => '→',
        '220' => '↓',
        '221' => '↔',
        '222' => '↵',
        '223' => '⇐',
        '224' => '⇑',
        '225' => '⇒',
        '226' => '⇓',
        '227' => '⇔',
        '228' => '∀',
        '229' => '∂',
        '230' => '∃',
        '231' => '∅',
        '232' => '∇',
        '233' => '∈',
        '234' => '∉',
        '235' => '∋',
        '236' => '∏',
        '237' => '∑',
        '238' => '−',
        '239' => '∗',
        '240' => '√',
        '241' => '∝',
        '242' => '∞',
        '243' => '∠',
        '244' => '∧',
        '245' => '∨',
        '246' => '∩',
        '247' => '∪',
        '248' => '∫',
        '249' => '∴',
        '250' => '∼',
        '251' => '≅',
        '252' => '≈',
        '253' => '≠',
        '254' => '≡',
        '255' => '≤',
        '256' => '≥',
        '257' => '⊂',
        '258' => '⊃',
        '259' => '⊄',
        '260' => '⊆',
        '261' => '⊇',
        '262' => '⊕',
        '263' => '⊗',
        '264' => '⊥',
        '265' => '⋅',
        '266' => '⌈',
        '267' => '⌉',
        '268' => '⌊',
        '269' => '⌋',
        '270' => '〈',
        '271' => '〉',
        '272' => '◊',
        '273' => '♠',
        '274' => '♣',
        '275' => '♥',
        '276' => '♦'
    );
    private $encodedChars = array(
        '0' => '&amp;quest;',
        '1' => '&amp;excl;',
        '2' => '&amp;commat;',
        '3' => '&amp;num;',
        '4' => '&amp;percnt;',
        '5' => '&amp;dollar;',
        '6' => '&amp;ast;',
        '7' => '&amp;lbrace;',
        '8' => '&amp;rbrace;',
        '9' => '&amp;lbrack;',
        '10' => '&amp;rbrack;',
        '11' => '&amp;lpar;',
        '12' => '&amp;rpar;',
        '13' => '&amp;period;',
        '14' => '&amp;comma;',
        '15' => '&amp;colon;',
        '16' => '&amp;semi;',
        '17' => '&amp;plus;',
        '18' => '&amp;equals;',
        '19' => '&amp;hyphen;',
        '20' => '&amp;lowbar;',
        '21' => '&amp;middot;',
        '22' => '&amp;sol;',
        '23' => '&amp;bsol;',
        '24' => '&amp;apos;',
        '25' => '&amp;quot;',
        '26' => '&amp;&amp;',
        '27' => '&amp;lt;',
        '28' => '&amp;gt;',
        '29' => '&amp;nbsp;',
        '30' => '&amp;iexcl;',
        '31' => '&amp;cent;',
        '32' => '&amp;pound;',
        '33' => '&amp;curren;',
        '34' => '&amp;yen;',
        '35' => '&amp;brvbar;',
        '36' => '&amp;sect;',
        '37' => '&amp;uml;',
        '38' => '&amp;copy;',
        '39' => '&amp;ordf;',
        '40' => '&amp;laquo;',
        '41' => '&amp;not;',
        '42' => '&amp;shy;',
        '43' => '&amp;reg;',
        '44' => '&amp;macr;',
        '45' => '&amp;deg;',
        '46' => '&amp;plusmn;',
        '47' => '&amp;sup2;',
        '48' => '&amp;sup3;',
        '49' => '&amp;acute;',
        '50' => '&amp;micro;',
        '51' => '&amp;para;',
        '52' => '&amp;middot;',
        '53' => '&amp;cedil;',
        '54' => '&amp;sup1;',
        '55' => '&amp;ordm;',
        '56' => '&amp;raquo;',
        '57' => '&amp;frac14;',
        '58' => '&amp;frac12;',
        '59' => '&amp;frac34;',
        '60' => '&amp;iquest;',
        '61' => '&amp;Agrave;',
        '62' => '&amp;Aacute;',
        '63' => '&amp;Acirc;',
        '64' => '&amp;Atilde;',
        '65' => '&amp;Auml;',
        '66' => '&amp;Aring;',
        '67' => '&amp;AElig;',
        '68' => '&amp;Ccedil;',
        '69' => '&amp;Egrave;',
        '70' => '&amp;Eacute;',
        '71' => '&amp;Ecirc;',
        '72' => '&amp;Euml;',
        '73' => '&amp;Igrave;',
        '74' => '&amp;Iacute;',
        '75' => '&amp;Icirc;',
        '76' => '&amp;Iuml;',
        '77' => '&amp;ETH;',
        '78' => '&amp;Ntilde;',
        '79' => '&amp;Ograve;',
        '80' => '&amp;Oacute;',
        '81' => '&amp;Ocirc;',
        '82' => '&amp;Otilde;',
        '83' => '&amp;Ouml;',
        '84' => '&amp;times;',
        '85' => '&amp;Oslash;',
        '86' => '&amp;Ugrave;',
        '87' => '&amp;Uacute;',
        '88' => '&amp;Ucirc;',
        '89' => '&amp;Uuml;',
        '90' => '&amp;Yacute;',
        '91' => '&amp;THORN;',
        '92' => '&amp;szlig;',
        '93' => '&amp;agrave;',
        '94' => '&amp;aacute;',
        '95' => '&amp;acirc;',
        '96' => '&amp;atilde;',
        '97' => '&amp;auml;',
        '98' => '&amp;aring;',
        '99' => '&amp;aelig;',
        '100' => '&amp;ccedil;',
        '101' => '&amp;egrave;',
        '102' => '&amp;eacute;',
        '103' => '&amp;ecirc;',
        '104' => '&amp;euml;',
        '105' => '&amp;igrave;',
        '106' => '&amp;iacute;',
        '107' => '&amp;icirc;',
        '108' => '&amp;iuml;',
        '109' => '&amp;eth;',
        '110' => '&amp;ntilde;',
        '111' => '&amp;ograve;',
        '112' => '&amp;oacute;',
        '113' => '&amp;ocirc;',
        '114' => '&amp;otilde;',
        '115' => '&amp;ouml;',
        '116' => '&amp;divide;',
        '117' => '&amp;oslash;',
        '118' => '&amp;ugrave;',
        '119' => '&amp;uacute;',
        '120' => '&amp;ucirc;',
        '121' => '&amp;uuml;',
        '122' => '&amp;yacute;',
        '123' => '&amp;thorn;',
        '124' => '&amp;yuml;',
        '125' => '&amp;OElig;',
        '126' => '&amp;oelig;',
        '127' => '&amp;Scaron;',
        '128' => '&amp;scaron;',
        '129' => '&amp;Yuml;',
        '130' => '&amp;fnof;',
        '131' => '&amp;circ;',
        '132' => '&amp;tilde;',
        '133' => '&amp;Alpha;',
        '134' => '&amp;Beta;',
        '135' => '&amp;Gamma;',
        '136' => '&amp;Delta;',
        '137' => '&amp;Epsilon;',
        '138' => '&amp;Zeta;',
        '139' => '&amp;Eta;',
        '140' => '&amp;Theta;',
        '141' => '&amp;Iota;',
        '142' => '&amp;Kappa;',
        '143' => '&amp;Lambda;',
        '144' => '&amp;Mu;',
        '145' => '&amp;Nu;',
        '146' => '&amp;Xi;',
        '147' => '&amp;Omicron;',
        '148' => '&amp;Pi;',
        '149' => '&amp;Rho;',
        '150' => '&amp;Sigma;',
        '151' => '&amp;Tau;',
        '152' => '&amp;Upsilon;',
        '153' => '&amp;Phi;',
        '154' => '&amp;Chi;',
        '155' => '&amp;Psi;',
        '156' => '&amp;Omega;',
        '157' => '&amp;alpha;',
        '158' => '&amp;beta;',
        '159' => '&amp;gamma;',
        '160' => '&amp;delta;',
        '161' => '&amp;epsilon;',
        '162' => '&amp;zeta;',
        '163' => '&amp;eta;',
        '164' => '&amp;theta;',
        '165' => '&amp;iota;',
        '166' => '&amp;kappa;',
        '167' => '&amp;lambda;',
        '168' => '&amp;mu;',
        '169' => '&amp;nu;',
        '170' => '&amp;xi;',
        '171' => '&amp;omicron;',
        '172' => '&amp;pi;',
        '173' => '&amp;rho;',
        '174' => '&amp;sigmaf;',
        '175' => '&amp;sigma;',
        '176' => '&amp;tau;',
        '177' => '&amp;upsilon;',
        '178' => '&amp;phi;',
        '179' => '&amp;chi;',
        '180' => '&amp;psi;',
        '181' => '&amp;omega;',
        '182' => '&amp;thetasym;',
        '183' => '&amp;upsih;',
        '184' => '&amp;piv;',
        '185' => '&amp;ensp;',
        '186' => '&amp;emsp;',
        '187' => '&amp;thinsp;',
        '188' => '&amp;zwnj;',
        '189' => '&amp;zwj;',
        '190' => '&amp;lrm;',
        '191' => '&amp;rlm;',
        '192' => '&amp;ndash;',
        '193' => '&amp;mdash;',
        '194' => '&amp;lsquo;',
        '195' => '&amp;rsquo;',
        '196' => '&amp;sbquo;',
        '197' => '&amp;ldquo;',
        '198' => '&amp;rdquo;',
        '199' => '&amp;bdquo;',
        '200' => '&amp;dagger;',
        '201' => '&amp;Dagger;',
        '202' => '&amp;bull;',
        '203' => '&amp;hellip;',
        '204' => '&amp;permil;',
        '205' => '&amp;prime;',
        '206' => '&amp;Prime;',
        '207' => '&amp;lsaquo;',
        '208' => '&amp;rsaquo;',
        '209' => '&amp;oline;',
        '210' => '&amp;frasl;',
        '211' => '&amp;euro;',
        '212' => '&amp;image;',
        '213' => '&amp;weierp;',
        '214' => '&amp;real;',
        '215' => '&amp;trade;',
        '216' => '&amp;alefsym;',
        '217' => '&amp;larr;',
        '218' => '&amp;uarr;',
        '219' => '&amp;rarr;',
        '220' => '&amp;darr;',
        '221' => '&amp;harr;',
        '222' => '&amp;crarr;',
        '223' => '&amp;lArr;',
        '224' => '&amp;uArr;',
        '225' => '&amp;rArr;',
        '226' => '&amp;dArr;',
        '227' => '&amp;hArr;',
        '228' => '&amp;forall;',
        '229' => '&amp;part;',
        '230' => '&amp;exist;',
        '231' => '&amp;empty;',
        '232' => '&amp;nabla;',
        '233' => '&amp;isin;',
        '234' => '&amp;notin;',
        '235' => '&amp;ni;',
        '236' => '&amp;prod;',
        '237' => '&amp;sum;',
        '238' => '&amp;minus;',
        '239' => '&amp;lowast;',
        '240' => '&amp;radic;',
        '241' => '&amp;prop;',
        '242' => '&amp;infin;',
        '243' => '&amp;ang;',
        '244' => '&amp;and;',
        '245' => '&amp;or;',
        '246' => '&amp;cap;',
        '247' => '&amp;cup;',
        '248' => '&amp;int;',
        '249' => '&amp;there4;',
        '250' => '&amp;sim;',
        '251' => '&amp;cong;',
        '252' => '&amp;asymp;',
        '253' => '&amp;ne;',
        '254' => '&amp;equiv;',
        '255' => '&amp;le;',
        '256' => '&amp;ge;',
        '257' => '&amp;sub;',
        '258' => '&amp;sup;',
        '259' => '&amp;nsub;',
        '260' => '&amp;sube;',
        '261' => '&amp;supe;',
        '262' => '&amp;oplus;',
        '263' => '&amp;otimes;',
        '264' => '&amp;perp;',
        '265' => '&amp;sdot;',
        '266' => '&amp;lceil;',
        '267' => '&amp;rceil;',
        '268' => '&amp;lfloor;',
        '269' => '&amp;rfloor;',
        '270' => '&amp;lang;',
        '271' => '&amp;rang;',
        '272' => '&amp;loz;',
        '273' => '&amp;spades;',
        '274' => '&amp;clubs;',
        '275' => '&amp;hearts;',
        '276' => '&amp;diams;'
    );
    
    public function __construct()
    {
        return $this;
    }
  
    public function decode($input)
    {
        $decoded = null;
        $key = null;
        $encodedChars = $this->encodedChars;
        $decodedChars = $this->decodedChars;
        if (is_array($input))
        {
            $decoded = array();
            foreach($input as $index => $char)
            {
                if (in_array($char, $encodedChars))
                {
                    $keys = array_keys($encodedChars, $char);
                    $decoded[$index] = $decodedChars[$keys[0]];
                }
                else
                {
                    $decoded[$index] = $char;
                }
            }
            $decoded = implode('', $decoded);
        }
        if (is_string($input))
        {
            if (strlen($input) === 1)
            {
                if (in_array($input, $encodedChars))
                {
                    $flipped = array_flip($encodedChars);
                    $key = $flipped[$input];
                    $decoded = $decodedChars[$key];
                }
            }
            if (strlen($input) >= 2)
            {
                $decoded = array();
                preg_match_all('/((\&amp\;\w+\;)|([\w\d\s]{1,}))/i', $input, $matches);
                $chars = $matches[1];
                foreach($chars as $index => $char)
                {
                    if (in_array($char, $encodedChars))
                    {
                        $keys = array_keys($encodedChars, $char);
                        $decoded[$index] = $decodedChars[$keys[0]];
                    }
                    else
                    {
                        $decoded[$index] = $char;
                    }
                }
                $decoded = implode('', $decoded);
            }
            $this->decoded = $decoded;
        }
        return $this->getDecoded();
    }
  
    private function getDecoded()
    {
        return $this->decoded;
    }
  
    public function encode($input)
    {
        $encoded = null;
        $key = null;
        $decodedChars = $this->decodedChars;
        $encodedChars = $this->encodedChars;
        if (is_array($input))
        {
            $encoded = array();
            foreach($input as $index => $char)
            {
                if (in_array($char, $decodedChars))
                {
                    $keys = array_keys($decodedChars, $char);
                    $encoded[$index] = $encodedChars[$keys[0]];
                }
                else
               {
                   $encoded[$index] = $char;
               }
            }
            $encoded = implode('', $encoded);
        }
        if (is_string($input))
        {
            if (strlen($input) === 1)
            {
                if (in_array($input, $decodedChars))
                {
                    $flipped = array_flip($decodedChars);
                    $key = $flipped[$input];
                    $encoded = $encodedChars[$key];
                }
            }
            if (strlen($input) >= 2)
            {
                $encoded = array();
                $chars = str_split($input);
                foreach($chars as $index => $char)
                {
                    if (in_array($char, $decodedChars))
                    {
                        $keys = array_keys($decodedChars, $char);
                        $encoded[$index] = $encodedChars[$keys[0]];
                    }
                    else
                    {
                        $encoded[$index] = $char;
                    }
                }
                $encoded = implode('', $encoded);
            }
            $this->encoded = $encoded;
        }
        return $this->getEncoded();
    }
  
    private function getEncoded()
    {
        return $this->encoded;
    }
  
}