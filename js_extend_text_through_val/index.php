<html>

<head>
  <meta charset="utf-8" />
  <title>Javascript .val</title>
  <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
  <p id="prod_1">Test text</p>
  <form>
    <input type="text" placeholder="text">
    <input type="hidden" id="hidden_1" value="">
    <input type="button" onclick="addProductTitle()" value="Send">
  </form>
  <script>
    function addProductTitle() {
      var title1 = $('#prod_1').text();
      $('#hidden_1').val(title1);
    }
  </script>
</body>

</html>
