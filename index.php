<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="utf-8" />
  <title>News Ticker</title>
  <!-- Plugin styles -->
  <link type="text/css" rel="stylesheet" href="css/jquery.jConveyorTicker.min.css?v=1.1.0" />

  <!-- Demo styles -->
  <link type="text/css" rel="stylesheet" href="demo-files/demo-styles.css?v=1.1.0" />

</head>
<body>
  <div class="d-wrap">


    <main>

      <aside class="d-playbox">
        
        <div class="d-demo-wrap">

          <div class="jctkr-label">
          </div>
          <div class="js-conveyor-3">
            <ul id="scroller">
            </ul>
          </div>
        </div>

      </aside>
  <!-- jQuery v1.10.2 or above -->
  <script src="demo-files/jquery.min.js?v=1.10.2"></script>

  <!-- Syntax Highlighter -->
  <script src="demo-files/run_prettify.js"></script>

  <!-- jConveyorTicker plugin -->
  <script src="js/jquery.jConveyorTicker.min.js?v=1.1.0"></script>

  <script type="text/javascript" charset="utf-8">
    var color=0;
  $(function() {
    function getData() {
    $.getJSON('dat.json', function(data) {
    var output = '';
    
    $.each(data, function(key, value) {
        output +=  "<li> WorldPrice : " + value.WorldPrice + " </li> <li>WorldPriceSell : " + value.WorldPriceSell + " </li> <li> Buy : " + value.Buy+" </li> <li>Sell : " + value.Sell + "</li> <li> WorldPrice24 : "+ value.WorldPrice24 + " </li> <li>WorldPrice24Sell : "+ value.WorldPrice24Sell + " </li> <li> WorldPriceEGP : " + value.WorldPriceEGP + "</li> <li> WorldPriceEGPSell : " + value.WorldPriceEGPSell + "</li> <li> LocalPrice24 : " + value.LocalPrice24 + "</li> <li> LocalSellPrice24 : " + value.LocalSellPrice24 + " </li> <li>LocalPrice18 : " + value.LocalPrice18 + " </li> <li>LocalSellPrice18 : " + value.LocalSellPrice18 + "</li>";
    });
    $('#scroller').html(output); // <ul id="example"></ul>
    $('.js-conveyor-3').jConveyorTicker({
      reverse_elm: true
    });
    $.getJSON('dat.json', function(data) {
    var output = '';
    $.each(data, function(key, value) {
        output +=  "<p>Last Update : " + value.DateOfRecord + "</p>";
    });
    $('.jctkr-label').html(output); // <ul id="example"></ul>
  });
    });
  }
setInterval(getData, 51000);

$(function() {
    getData();
});
  });
  </script>

</body>
</html>
