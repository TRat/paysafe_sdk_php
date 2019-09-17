<?php

namespace Paysafe\ThreeDSecureV2;

/**
 * @property string $carrier
 * @property string $shipMethod
 * @property string $recipientName
 * @property string $street	
 * @property string $street2
 * @property string $city
 * @property string $state
 * @property string $country	
 * @property string $zip
 * 
 */
class ShippingDetails extends \Paysafe\JSONObject
{

    protected static $fieldTypes = array(
   
      'carrier' => array(
         'APC',
         'APS',
         'CAD',
         'DHL',
         'FEX',
         'RML',
         'UPS',
         'USPS',
         'CLK',
         'EMS',
         'NEX',
         'OTHER'
      ),
      'shipMethod' => array(
        'N', 
        'T', 
        'C',
        'O',
        'S' 
      ),
      'recipientName' => 'string',
      'company' => 'string',
      'street' => 'string',
      'street2' => 'string',
      'city' => 'string',
      'state' => 'string',
      'country' => array(
        'AF', 'AX', 'AL', 'DZ', 'AS',
        'AD', 'AO', 'AI', 'AQ', 'AG',
        'AR', 'AM', 'AW', 'AU', 'AT',
        'AZ', 'BS', 'BH', 'BD', 'BD',
        'BY', 'BE', 'BZ', 'BJ', 'BM',
        'BT', 'BO', 'BQ', 'BA', 'BW',
        'BV', 'BR', 'IO', 'BN', 'BG',
        'BF', 'BI', 'KH', 'CM', 'CA',
        'CV', 'KY', 'CF', 'TD', 'CL',
        'CN', 'CX', 'CC', 'CO', 'KM',
        'CG', 'CD', 'CK', 'CR', 'CI',
        'HR', 'CU', 'CW', 'CY', 'CZ',
        'DK', 'DJ', 'DM', 'DO', 'EC',
        'EG', 'SV', 'GQ', 'ER', 'EE',
        'ET', 'FK', 'FO', 'FJ', 'FI',
        'FR', 'GF', 'PF', 'TF', 'GA',
        'GM', 'GE', 'DE', 'GH', 'GI',
        'GR', 'GL', 'GD', 'GP', 'GU',
        'GT', 'GG', 'GN', 'GW', 'GY',
        'HT', 'HM', 'HN', 'HK', 'HU',
        'IS', 'IN', 'ID', 'IR', 'IQ',
        'IE', 'IM', 'IL', 'IT', 'JM',
        'JP', 'JE', 'JO', 'KZ', 'KE',
        'KI', 'KP', 'KR', 'KW', 'KG',
        'LA', 'LV', 'LB', 'LS', 'LR',
        'LY', 'LI', 'LT', 'LU', 'MO',
        'MK', 'MG', 'MW', 'MY', 'MV',
        'ML', 'MT', 'MH', 'MQ', 'MR',
        'MU', 'YT', 'MX', 'FM', 'MD',
        'MC', 'MN', 'ME', 'MS', 'MA',
        'MZ', 'MM', 'NA', 'NR', 'NP',
        'NC', 'NZ', 'NI', 'NE', 'NG',
        'NU', 'NF', 'MP', 'NO', 'OM',
        'PK', 'PW', 'PS', 'PA', 'PG',
        'PY', 'PE', 'PH', 'PN', 'PL',
        'PT', 'PR', 'QA', 'RE', 'RO',
        'RU', 'RW', 'BL', 'SH', 'KN',
        'LC', 'MF', 'VC', 'WS', 'SM',
        'ST', 'SA', 'SN', 'RS', 'SC',
        'SL', 'SG', 'SX', 'SK', 'SI',
        'SB', 'SO', 'ZA', 'GS', 'SS',
        'ES', 'LK', 'PM', 'SD', 'SR',
        'SJ', 'SZ', 'SE', 'CH', 'SY',
        'TW', 'TJ', 'TZ', 'TH', 'NL',
        'TL', 'TG', 'TK', 'TO', 'TT',
        'TN', 'TR', 'TM', 'TC', 'TV',
        'UG', 'UA', 'AE', 'GB', 'US',
        'UM', 'UY', 'UZ', 'VU', 'VA',
        'VE', 'VN', 'VG', 'VI', 'WF',
        'EH', 'YE', 'ZM', 'ZW'   
     ),
      'zip' => 'string'
      );
    
}
