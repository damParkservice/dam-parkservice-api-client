<?php
/**
 * @service meinparkenSoapClient
 */
class meinparkenSoapClient{
	/**
	 * The WSDL URI
	 *
	 * @var string
	 */
	public static $_WsdlUri='http://api.parkplusfly-sxf.de/soap/index.php?WSDL';
	/**
	 * The PHP SoapClient object
	 *
	 * @var object
	 */
	public static $_Server=null;

	/**
	 * Send a SOAP request to the server
	 *
	 * @param string $method The method name
	 * @param array $param The parameters
	 * @return mixed The server response
	 */
	public static function _Call($method,$param){
		if(is_null(self::$_Server))
			self::$_Server=new SoapClient(self::$_WsdlUri);
		return self::$_Server->__soapCall($method,$param);
	}

	/**
	 * mein-parken.de webservice
	 *
	 * @param BookingRequest $obj The request, containing personal and trip data of the customer
	 * @return BookingResponse The response, containing booking id(s) or error message(s)
	 */
	public function Book($obj){
		return self::_Call('Book',Array(
			$obj
		));
	}
}

/**
 * A "Booking Request" is a reservation request for one or more
 * parking positions for a specific time span.
 * Documentation and examples for this web client are available at
 * https://github.com/damParkservice/dam-parkservice-api-client
 *
 * @pw_element string $Language accepted values: de, en, pl. Defaults to en.
 * @pw_element string $Salutation allowed values: Herr, Frau, Firma, Mr, Mrs, Company, Pan, Pani, SpÃ³Åka
 * @pw_element string $FirstName The guest's first name
 * @pw_element string $LastName The guest's last name
 * @pw_element string $Company The guest's company
 * @pw_element string $Street Street address
 * @pw_element string $ZIP Zip Code
 * @pw_element string $City City
 * @pw_element string $MobilePhone mobile phone number
 * @pw_element string $Email valid email address
 * @pw_element string $NumberPlate Number Plate
 * @pw_element string $VoucherCode Voucher Code
 * @pw_element dateTime $OutFlightTS Departure time and date of outgoing flight. Timezone: Berlin. Format: yyyy-mm-dd HH:ii:ss
 * @pw_element string $OutFlightNo Flight number of outgoing flight
 * @pw_element dateTime $RetFlightTS Arrival time and date of return flight. Timezone: Berlin. Format: yyyy-mm-dd HH:ii:ss
 * @pw_element string $RetFlightNo Flight number of return flight
 * @pw_element dateTime $ParkTS Planned arrival time at the parking lot, before boarding the outgoing flight. Should be about at least two hours before the scheduled flight time. Timezone: Berlin. Format: yyyy-mm-dd HH:ii:ss
 * @pw_element string $Destination Travel destination - airport code, airport name or country - This information is used to check the flight numbers
 * @pw_element integer $NumberOfPassengers How many passengers will use the airport shuttle? - Important for planning purposes.
 * @pw_element integer $NumberOfVehicles How many parking positions are required? (usually one per vehicle)
 * @pw_element boolean $Indoor Is an indoor (true) or an outdoor (false) parking position requested?
 * @pw_element string $Comment Free text, message to the parking provider
 * @pw_element boolean $AgbChecked Set to "true" if the customer accepted the AGB
 * @pw_element string $PartnerId Affiliate Partner Id
 * @pw_element string $TestMode testing modes for the webservice (see documentation)
 * @pw_element string $BookingIP Customer's IP address (not the IP address of the server!)
 * @pw_element string $SessionId Customer's session id
 * @pw_element string $APIKey API key
 * @pw_element string $BookingMode Booking Mode; valid values are precheck, completeness or booking. Predefaults to "precheck".
 * @pw_complex BookingRequest
 */
class BookingRequest{
	/**
	 * accepted values: de, en, pl. Defaults to en.
	 *
	 * @var string
	 */
	public $Language;
	/**
	 * allowed values: Herr, Frau, Firma, Mr, Mrs, Company, Pan, Pani, SpÃ³Åka
	 *
	 * @var string
	 */
	public $Salutation;
	/**
	 * The guest's first name
	 *
	 * @var string
	 */
	public $FirstName;
	/**
	 * The guest's last name
	 *
	 * @var string
	 */
	public $LastName;
	/**
	 * The guest's company
	 *
	 * @var string
	 */
	public $Company;
	/**
	 * Street address
	 *
	 * @var string
	 */
	public $Street;
	/**
	 * Zip Code
	 *
	 * @var string
	 */
	public $ZIP;
	/**
	 * City
	 *
	 * @var string
	 */
	public $City;
	/**
	 * mobile phone number
	 *
	 * @var string
	 */
	public $MobilePhone;
	/**
	 * valid email address
	 *
	 * @var string
	 */
	public $Email;
	/**
	 * Number Plate
	 *
	 * @var string
	 */
	public $NumberPlate;
	/**
	 * Voucher Code
	 *
	 * @var string
	 */
	public $VoucherCode;
	/**
	 * Departure time and date of outgoing flight. Timezone: Berlin. Format: yyyy-mm-dd HH:ii:ss
	 *
	 * @var dateTime
	 */
	public $OutFlightTS;
	/**
	 * Flight number of outgoing flight
	 *
	 * @var string
	 */
	public $OutFlightNo;
	/**
	 * Arrival time and date of return flight. Timezone: Berlin. Format: yyyy-mm-dd HH:ii:ss
	 *
	 * @var dateTime
	 */
	public $RetFlightTS;
	/**
	 * Flight number of return flight
	 *
	 * @var string
	 */
	public $RetFlightNo;
	/**
	 * Planned arrival time at the parking lot, before boarding the outgoing flight. Should be about at least two hours before the scheduled flight time. Timezone: Berlin. Format: yyyy-mm-dd HH:ii:ss
	 *
	 * @var dateTime
	 */
	public $ParkTS;
	/**
	 * Travel destination - airport code, airport name or country - This information is used to check the flight numbers
	 *
	 * @var string
	 */
	public $Destination;
	/**
	 * How many passengers will use the airport shuttle? - Important for planning purposes.
	 *
	 * @var integer
	 */
	public $NumberOfPassengers;
	/**
	 * How many parking positions are required? (usually one per vehicle)
	 *
	 * @var integer
	 */
	public $NumberOfVehicles;
	/**
	 * Is an indoor (true) or an outdoor (false) parking position requested?
	 *
	 * @var boolean
	 */
	public $Indoor;
	/**
	 * Free text, message to the parking provider
	 *
	 * @var string
	 */
	public $Comment;
	/**
	 * Set to "true" if the customer accepted the AGB
	 *
	 * @var boolean
	 */
	public $AgbChecked;
	/**
	 * Affiliate Partner Id
	 *
	 * @var string
	 */
	public $PartnerId;
	/**
	 * testing modes for the webservice (see documentation)
	 *
	 * @var string
	 */
	public $TestMode;
	/**
	 * Customer's IP address (not the IP address of the server!)
	 *
	 * @var string
	 */
	public $BookingIP;
	/**
	 * Customer's session id
	 *
	 * @var string
	 */
	public $SessionId;
	/**
	 * API key
	 *
	 * @var string
	 */
	public $APIKey;
	/**
	 * Booking Mode; valid values are precheck, completeness or booking. Predefaults to "precheck".
	 *
	 * @var string
	 */
	public $BookingMode;
}

/**
 * For each booking request, an element like this is returned.
 * It contains errors, if the submission was not successful -
 * and booking id(s), if the submission was successful.
 *
 * @pw_element stringArray $BookingId The booking Ids, if request was successful. One booking id per vehicle.
 * @pw_element ErrorObjectArray $Errors Error messages
 * @pw_element string $PrecheckOk returns ok in precheck mode
 * @pw_element stringArray $Avaliability returns the availability of indoor / outdoor / requested parking spaces
 * @pw_element stringArray $Pricing returns the calculated number of days and prices for indoor / outdoor parking spaces
 * @pw_complex BookingRequestResponse
 */
class BookingRequestResponse{
	/**
	 * The booking Ids, if request was successful. One booking id per vehicle.
	 *
	 * @var stringArray
	 */
	public $BookingId;
	/**
	 * Error messages
	 *
	 * @var ErrorObjectArray
	 */
	public $Errors;
	/**
	 * returns ok in precheck mode
	 *
	 * @var string
	 */
	public $PrecheckOk;
	/**
	 * returns the availability of indoor / outdoor / requested parking spaces
	 *
	 * @var stringArray
	 */
	public $Avaliability;
	/**
	 * returns the calculated number of days and prices for indoor / outdoor parking spaces
	 *
	 * @var stringArray
	 */
	public $Pricing;
}



/**
 * Error messages consist of an error code, the field name, and an error message.
 * For a list of all possible error codes, please consult the documentation.
 *
 * @pw_element string $Code usually a three-digit code
 * @pw_element string $Field Determines which field in the form or SOAP request is affected
 * @pw_element string $Message detailed error message
 * @pw_complex ErrorObject
 */
class ErrorObject{
	/**
	 * usually a three-digit code
	 *
	 * @var string
	 */
	public $Code;
	/**
	 * Determines which field in the form or SOAP request is affected
	 *
	 * @var string
	 */
	public $Field;
	/**
	 * detailed error message
	 *
	 * @var string
	 */
	public $Message;
}