<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/foundation.css" />
  <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
  <title>Live Currency Convert - By Jean-Pierre Gassin</title>
</head>

<body>
  <div class="mainContainer">
    <div class="contentContainer">
      <div class="formContainer">
        <form>
          <fieldset>
            <legend>Convert Your Currency</legend>
            <div class="row">
              <div class="large-6 columns">
              <label>From:
              <select id="from">
                <option value="AMK">Ang Mo Kio</option>
                <option value="ANG">Netherlands Antillean Guilder</option>
                <option value="ANZ">Azerbaijani Manat</option>
                <option value="ARS">Argentine Peso</option>
                <option value="AUD" selected="selected">Australian Dollar</option>
                <option value="AWG">Aruban Florin</option>
                <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                <option value="BBD">Barbadian Dollar</option>
                <option value="BDT">Bangladeshi Taka</option>
                <option value="BGN">Bulgarian Lev</option>
                <option value="BOB">Bolivian Boliviano</option>
                <option value="BRL">Brazilian Real</option>
                <option value="BSD">Bahamian Dollar</option>
                <option value="BYR">Belarusian Ruble</option>
                <option value="GBP">British Pound Sterling</option>
                <option value="KHR">Cambodian Riel</option>
                <option value="CAD">Canadian Dollar</option>
                <option value="HRK">Croatian Kuna</option>
                <option value="CLP">Chilean Peso</option>
                <option value="CNY">Chinese Yuan</option>
                <option value="COP">Colombian Peso</option>
                <option value="CRC">Costa Rican Colón</option>
                <option value="CZK">Czech Republic Koruna</option>
                <option value="DKK">Danish Krone</option>
                <option value="DOP">Dominican Peso</option>
                <option value="XCD">East Caribbean Dollar</option>
                <option value="EGP">Egyptian Pound</option>
                <option value="AED">Emirati Dirham</option>
                <option value="ERN">Eritrean Nakfa</option>
                <option value="EEK">Estonian Kroon</option>
                <option value="EUR">Euro</option>
                <option value="GEL">Georgian Lari</option>
                <option value="GHC">Ghanaian Cedi</option>
                <option value="GTQ">Guatemalan Quetzal</option>
                <option value="HKD">Hong Kong Dollar</option>
                <option value="HNL">Honduran Lempira</option>
                <option value="HUF">Hungarian Forint</option>
                <option value="IDR">Indonesian Rupiah</option>
                <option value="ILS">Israeli New Sheqel</option>
                <option value="INR">Indian Rupee</option>
                <option value="ISK">Icelandic Króna</option>
                <option value="JMD">Jamaican Dollar</option>
                <option value="JPY">Japanese Yen</option>
                <option value="KES">Kenyan Shilling</option>
                <option value="KWD">Kuwaiti Dinar</option>
                <option value="KYD">Cayman Islands Dollar</option>
                <option value="KZT">Kazakhstani Tenge</option>
                <option value="LBP">Lebanese Pound</option>
                <option value="LKR">Sri Lankan Rupee</option>
                <option value="LTL">Lithuanian Litas</option>
                <option value="LVL">Latvian Lats</option>
                <option value="MGA">Malagasy Ariary</option>
                <option value="MKD">Macedonian Denar</option>
                <option value="MOP">Macanese Pataca</option>
                <option value="MTL">Maltese Lira</option>
                <option value="MUR">Mauritian Rupee</option>
                <option value="MXN">Mexican Peso</option>
                <option value="MYR">Malaysian Ringgit</option>
                <option value="MZM">Mozambican Metical</option>
                <option value="NPR">Nepalese Rupee</option>
                <option value="TWD">New Taiwan Dollar</option>
                <option value="NZD">New Zealand Dollar</option>
                <option value="NGN">Nigerian Naira</option>
                <option value="NIO">Nicaraguan Córdoba</option>
                <option value="NOK">Norwegian Krone</option>
                <option value="KPW">North Korean Won</option>
                <option value="OMR">Omani Rial</option>
                <option value="PEN">Peruvian Nuevo Sol</option>
                <option value="PHP">Philippine Peso</option>
                <option value="PKR">Pakistani Rupee</option>
                <option value="PYG">Paraguayan Guarani</option>
                <option value="QAR">Qatari Rial</option>
                <option value="RON">Romanian Leu</option>
                <option value="RUB">Russian Ruble</option>
                <option value="SAR">Saudi Riyal</option>
                <option value="CSD">Serbian Dinar</option>
                <option value="SCR">Seychellois Rupee</option>
                <option value="SEK">Swedish Krona</option>
                <option value="SGD">Singapore Dollar</option>
                <option value="SIT">Slovenian Tolar</option>
                <option value="SKK">Slovak Koruna</option>
                <option value="ZAR">South African Rand</option>
                <option value="KRW">South Korean Won</option>
                <option value="SRD">Surinamese Dollar</option>
                <option value="CHF">Swiss Franc</option>
                <option value="THB">Thai Baht</option>
                <option value="TRY">Turkish Lira</option>
                <option value="TTD">Trinidad and Tobago Dollar</option>
                <option value="TZS">Tanzanian Shilling</option>
                <option value="UAH">Ukrainian Hryvnia</option>
                <option value="UGX">Ugandan Shilling</option>
                <option value="USD">US Dollar</option>
                <option value="UYU">Uruguayan Peso</option>
                <option value="UZS">Uzbekistan Som</option>
                <option value="VEB">Venezuelan Bolivar</option>
                <option value="VND">Vietnamese Dong</option>
                <option value="ZWD">Zimbabwe Dollar</option>
              </select>
              </label>
              </div>
              <div class="large-6 columns">
                <label>Amount: </label>
                <input id="amount" type="number" step="any" placeholder="0.00"/>
              </div>
            </div>

            <div class="row">
              <div class="large-6 columns">
                <label>To:
                <select id="to">
                  	<option value="AMK">Ang Mo Kio</option>
	                <option value="ANG">Netherlands Antillean Guilder</option>
	                <option value="ANZ">Azerbaijani Manat</option>
	                <option value="ARS">Argentine Peso</option>
	                <option value="AUD" selected="selected">Australian Dollar</option>
	                <option value="AWG">Aruban Florin</option>
	                <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
	                <option value="BBD">Barbadian Dollar</option>
	                <option value="BDT">Bangladeshi Taka</option>
	                <option value="BGN">Bulgarian Lev</option>
	                <option value="BOB">Bolivian Boliviano</option>
	                <option value="BRL">Brazilian Real</option>
	                <option value="BSD">Bahamian Dollar</option>
	                <option value="BYR">Belarusian Ruble</option>
	                <option value="GBP">British Pound Sterling</option>
	                <option value="KHR">Cambodian Riel</option>
	                <option value="CAD">Canadian Dollar</option>
	                <option value="HRK">Croatian Kuna</option>
	                <option value="CLP">Chilean Peso</option>
	                <option value="CNY">Chinese Yuan</option>
	                <option value="COP">Colombian Peso</option>
	                <option value="CRC">Costa Rican Colón</option>
	                <option value="CZK">Czech Republic Koruna</option>
	                <option value="DKK">Danish Krone</option>
	                <option value="DOP">Dominican Peso</option>
	                <option value="XCD">East Caribbean Dollar</option>
	                <option value="EGP">Egyptian Pound</option>
	                <option value="AED">Emirati Dirham</option>
	                <option value="ERN">Eritrean Nakfa</option>
	                <option value="EEK">Estonian Kroon</option>
	                <option value="EUR">Euro</option>
	                <option value="GEL">Georgian Lari</option>
	                <option value="GHC">Ghanaian Cedi</option>
	                <option value="GTQ">Guatemalan Quetzal</option>
	                <option value="HKD">Hong Kong Dollar</option>
	                <option value="HNL">Honduran Lempira</option>
	                <option value="HUF">Hungarian Forint</option>
	                <option value="IDR">Indonesian Rupiah</option>
	                <option value="ILS">Israeli New Sheqel</option>
	                <option value="INR">Indian Rupee</option>
	                <option value="ISK">Icelandic Króna</option>
	                <option value="JMD">Jamaican Dollar</option>
	                <option value="JPY">Japanese Yen</option>
	                <option value="KES">Kenyan Shilling</option>
	                <option value="KWD">Kuwaiti Dinar</option>
	                <option value="KYD">Cayman Islands Dollar</option>
	                <option value="KZT">Kazakhstani Tenge</option>
	                <option value="LBP">Lebanese Pound</option>
	                <option value="LKR">Sri Lankan Rupee</option>
	                <option value="LTL">Lithuanian Litas</option>
	                <option value="LVL">Latvian Lats</option>
	                <option value="MGA">Malagasy Ariary</option>
	                <option value="MKD">Macedonian Denar</option>
	                <option value="MOP">Macanese Pataca</option>
	                <option value="MTL">Maltese Lira</option>
	                <option value="MUR">Mauritian Rupee</option>
	                <option value="MXN">Mexican Peso</option>
	                <option value="MYR">Malaysian Ringgit</option>
	                <option value="MZM">Mozambican Metical</option>
	                <option value="NPR">Nepalese Rupee</option>
	                <option value="TWD">New Taiwan Dollar</option>
	                <option value="NZD">New Zealand Dollar</option>
	                <option value="NGN">Nigerian Naira</option>
	                <option value="NIO">Nicaraguan Córdoba</option>
	                <option value="NOK">Norwegian Krone</option>
	                <option value="KPW">North Korean Won</option>
	                <option value="OMR">Omani Rial</option>
	                <option value="PEN">Peruvian Nuevo Sol</option>
	                <option value="PHP">Philippine Peso</option>
	                <option value="PKR">Pakistani Rupee</option>
	                <option value="PYG">Paraguayan Guarani</option>
	                <option value="QAR">Qatari Rial</option>
	                <option value="RON">Romanian Leu</option>
	                <option value="RUB">Russian Ruble</option>
	                <option value="SAR">Saudi Riyal</option>
	                <option value="CSD">Serbian Dinar</option>
	                <option value="SCR">Seychellois Rupee</option>
	                <option value="SEK">Swedish Krona</option>
	                <option value="SGD">Singapore Dollar</option>
	                <option value="SIT">Slovenian Tolar</option>
	                <option value="SKK">Slovak Koruna</option>
	                <option value="ZAR">South African Rand</option>
	                <option value="KRW">South Korean Won</option>
	                <option value="SRD">Surinamese Dollar</option>
	                <option value="CHF">Swiss Franc</option>
	                <option value="THB">Thai Baht</option>
	                <option value="TRY">Turkish Lira</option>
	                <option value="TTD">Trinidad and Tobago Dollar</option>
	                <option value="TZS">Tanzanian Shilling</option>
	                <option value="UAH">Ukrainian Hryvnia</option>
	                <option value="UGX">Ugandan Shilling</option>
	                <option value="USD" selected="selected">US Dollar</option>
	                <option value="UYU">Uruguayan Peso</option>
	                <option value="UZS">Uzbekistan Som</option>
	                <option value="VEB">Venezuelan Bolivar</option>
	                <option value="VND">Vietnamese Dong</option>
	                <option value="ZWD">Zimbabwe Dollar</option>
                </select>
                </label>
              </div>

              <div class="large-6 columns">
                <label>&nbsp;
                <input id="convertedBox" type="text" disabled/>
                </label>
              </div>
            </div>

            <div class="row">
              <div class="large-6 columns">
                <h6 class="subheader" id="rateBox"></h6>
              </div>
            </div>

            <div class="row">
              <div class="large-12 columns">
                <input class="button expand radius" type="button" value="Convert" onclick="convert()" id="convertButton">
              </div>
            </div>
          </fieldset>
        </form>
        <small><a href="http://jpgassin.com">Created by Jean-Pierre Gassin</a></small>
      </div>
    </div>
  </div>

<footer>
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/convert.js" type="text/javascript"></script>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</footer>
</body>
</html>