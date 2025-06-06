<?php

/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
    'generalDesc' => [
        'NationalNumberPattern' => '[1-467]\d{9,10}|55[0-46-9]\d{8}|[34]\d{7}|55\d{7,8}|(?:5[0-46-9]|[89]\d)\d{7,9}',
        'PossibleLength' => [
            8,
            9,
            10,
            11,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'fixedLine' => [
        'NationalNumberPattern' => '(?:[14689][1-9]|2[12478]|3[1-578]|5[13-5]|7[13-579])[2-5]\\d{7}',
        'ExampleNumber' => '1123456789',
        'PossibleLength' => [
            10,
        ],
        'PossibleLengthLocalOnly' => [
            8,
        ],
    ],
    'mobile' => [
        'NationalNumberPattern' => '(?:[14689][1-9]|2[12478]|3[1-578]|5[13-5]|7[13-579])(?:7|9\\d)\\d{7}',
        'ExampleNumber' => '11961234567',
        'PossibleLength' => [
            10,
            11,
        ],
        'PossibleLengthLocalOnly' => [
            8,
            9,
        ],
    ],
    'tollFree' => [
        'NationalNumberPattern' => '800\\d{6,7}',
        'ExampleNumber' => '800123456',
        'PossibleLength' => [
            9,
            10,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'premiumRate' => [
        'NationalNumberPattern' => '[59]00\d{6,7}',
        'ExampleNumber' => '500123456',
        'PossibleLength' => [
            9,
            10,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'sharedCost' => [
        'NationalNumberPattern' => '(?:30[03]\d{3}|4(?:0(?:0\d|20)|370|864))\d{4}|300\d{5}',
        'ExampleNumber' => '40041234',
        'PossibleLength' => [
            8,
            10,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'personalNumber' => [
        'PossibleLength' => [
            -1,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'voip' => [
        'PossibleLength' => [
            -1,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'pager' => [
        'PossibleLength' => [
            -1,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'uan' => [
        'PossibleLength' => [
            -1,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'voicemail' => [
        'PossibleLength' => [
            -1,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'noInternationalDialling' => [
        'NationalNumberPattern' => '(?:30[03]\d{3}|4(?:0(?:0\d|20)|864))\d{4}|800\d{6,7}|300\d{5}',
        'PossibleLength' => [
            8,
            9,
            10,
        ],
        'PossibleLengthLocalOnly' => [],
    ],
    'id' => 'BR',
    'countryCode' => 55,
    'internationalPrefix' => '00(?:1[245]|2[1-35]|31|4[13]|[56]5|99)',
    'nationalPrefix' => '0',
    'nationalPrefixForParsing' => '(?:0|90)(?:(1[245]|2[1-35]|31|4[13]|[56]5|99)(\\d{10,11}))?',
    'nationalPrefixTransformRule' => '$2',
    'sameMobileAndFixedLinePattern' => false,
    'numberFormat' => [
        [
            'pattern' => '(\\d{3,6})',
            'format' => '$1',
            'leadingDigitsPatterns' => [
                '1(?:1[25-8]|2[357-9]|3[02-68]|4[12568]|5|6[0-8]|8[015]|9[0-47-9])|321|610',
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
        [
            'pattern' => '(\\d{4})(\\d{4})',
            'format' => '$1-$2',
            'leadingDigitsPatterns' => [
                '300|4(?:0[02]|37|86)', 
                '300|4(?:0(?:0|20)|370|864)'
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
        [
            'pattern' => '(\\d{4})(\\d{4})',
            'format' => '$1-$2',
            'leadingDigitsPatterns' => [
                '[2-57]',
                '[2357]|4(?:[0-24-9]|3(?:[0-689]|7[1-9]))',
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
        [
            'pattern' => '(\\d{3})(\\d{2,3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '(?:[358]|90)0',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
        [
            'pattern' => '(\\d{5})(\\d{4})',
            'format' => '$1-$2',
            'leadingDigitsPatterns' => [
                '9',
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
        [
            'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1 $2-$3',
            'leadingDigitsPatterns' => [
                '(?:[14689][1-9]|2[12478]|3[1-578]|5[13-5]|7[13-579])[2-57]',
            ],
            'nationalPrefixFormattingRule' => '($1)',
            'domesticCarrierCodeFormattingRule' => '0 $CC ($1)',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
        [
            'pattern' => '(\\d{2})(\\d{5})(\\d{4})',
            'format' => '$1 $2-$3',
            'leadingDigitsPatterns' => [
                '[16][1-9]|[2-57-9]',
            ],
            'nationalPrefixFormattingRule' => '($1)',
            'domesticCarrierCodeFormattingRule' => '0 $CC ($1)',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
    ],
    'intlNumberFormat' => [
        [
            'pattern' => '(\\d{4})(\\d{4})',
            'format' => '$1-$2',
            'leadingDigitsPatterns' => [
                '300|4(?:0[02]|37|86)', 
                '300|4(?:0(?:0|20)|370|864)'
            ],
            'nationalPrefixFormattingRule' => '',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
        [
            'pattern' => '(\\d{3})(\\d{2,3})(\\d{4})',
            'format' => '$1 $2 $3',
            'leadingDigitsPatterns' => [
                '(?:[358]|90)0',
            ],
            'nationalPrefixFormattingRule' => '0$1',
            'domesticCarrierCodeFormattingRule' => '',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
        [
            'pattern' => '(\\d{2})(\\d{4})(\\d{4})',
            'format' => '$1 $2-$3',
            'leadingDigitsPatterns' => [
                '(?:[14689][1-9]|2[12478]|3[1-578]|5[13-5]|7[13-579])[2-57]',
            ],
            'nationalPrefixFormattingRule' => '($1)',
            'domesticCarrierCodeFormattingRule' => '0 $CC ($1)',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
        [
            'pattern' => '(\\d{2})(\\d{5})(\\d{4})',
            'format' => '$1 $2-$3',
            'leadingDigitsPatterns' => [
                '[16][1-9]|[2-57-9]',
            ],
            'nationalPrefixFormattingRule' => '($1)',
            'domesticCarrierCodeFormattingRule' => '0 $CC ($1)',
            'nationalPrefixOptionalWhenFormatting' => false,
        ],
    ],
    'mainCountryForCode' => false,
    'mobileNumberPortableRegion' => true,
];
