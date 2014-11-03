function getRate(from, to) {
    var script = document.createElement('script');
    script.setAttribute('src', "http://query.yahooapis.com/v1/public/yql?q=select%20rate%2Cname%20from%20csv%20where%20url%3D'http%3A%2F%2Fdownload.finance.yahoo.com%2Fd%2Fquotes%3Fs%3D"+from+to+"%253DX%26f%3Dl1n'%20and%20columns%3D'rate%2Cname'&format=json&callback=parseExchangeRate");
    document.body.appendChild(script);
}
 
function parseExchangeRate(data) {
    var amount = document.getElementById('amount').value;
    var exchangeBox = document.getElementById('rateBox');
    var name = data.query.results.row.name;
    var rate = parseFloat(data.query.results.row.rate, 10);
    var convert = amount*rate;
    var convert = convert.toFixed(2);

    document.getElementById('convertedBox').value = "= " + convert.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    exchangeBox.innerHTML = "The exchange rate from <b>" + name + "</b>, is <i>" + rate + "</i>.";
}

function convert() {
    var from = $('#from option:selected').val();
    var to = $('#to option:selected').val();
    getRate(from, to);
}

