<!DOCTYPE html>
<html lang=“pt-br”>
<head>
<meta charset=“utf-8”/>
<meta content=“width=device-width, initial-scale=1, maximum-scale=1” name=“viewport”>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:100);

body { margin-top: 100px; background-color: #0176b6; color: #fff; text-align:center; }

h1 {
  font: 2em 'Roboto', sans-serif;
  margin-bottom: 40px;
  font-size: 40px;
}

#loading {
  top:300px;
  display: inline-block;
  width: 50px;
  height: 50px;
  border: 3px solid rgba(255,255,255,.3);
  border-radius: 50%;
  border-top-color: #fff;
  animation: spin 1s ease-in-out infinite;
  -webkit-animation: spin 1s ease-in-out infinite;
  position:relative;
  z-index:9999px;
}
* {
  font-size: 0px;
}
@keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}
@-webkit-keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}
</style>
</head>
<body>
    <div id="loading"></div>
    <h1>Enviando pedido...</h1>
</body>
</html>