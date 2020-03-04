
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <style>
  body{
    background-color: #282828;
  }
    .sk-chase {
    width: 40px;
    height: 40px;
    position: absolute;
    top: 60%;
    left: 50%;
    animation: sk-chase 2.5s infinite linear both;
  }

  .sk-chase-dot {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    animation: sk-chase-dot 2.0s infinite ease-in-out both;
  }

  .sk-chase-dot:before {
    content: '';
    display: block;
    width: 25%;
    height: 25%;
    background-color: #fff;
    border-radius: 100%;
    animation: sk-chase-dot-before 2.0s infinite ease-in-out both;
  }

  .sk-chase-dot:nth-child(1) { animation-delay: -1.1s; }
  .sk-chase-dot:nth-child(2) { animation-delay: -1.0s; }
  .sk-chase-dot:nth-child(3) { animation-delay: -0.9s; }
  .sk-chase-dot:nth-child(4) { animation-delay: -0.8s; }
  .sk-chase-dot:nth-child(5) { animation-delay: -0.7s; }
  .sk-chase-dot:nth-child(6) { animation-delay: -0.6s; }
  .sk-chase-dot:nth-child(1):before { animation-delay: -1.1s; }
  .sk-chase-dot:nth-child(2):before { animation-delay: -1.0s; }
  .sk-chase-dot:nth-child(3):before { animation-delay: -0.9s; }
  .sk-chase-dot:nth-child(4):before { animation-delay: -0.8s; }
  .sk-chase-dot:nth-child(5):before { animation-delay: -0.7s; }
  .sk-chase-dot:nth-child(6):before { animation-delay: -0.6s; }

  @keyframes sk-chase {
    100% { transform: rotate(360deg); }
  }

  @keyframes sk-chase-dot {
    80%, 100% { transform: rotate(360deg); }
  }

  @keyframes sk-chase-dot-before {
    50% {
      transform: scale(0.4);
    } 100%, 0% {
      transform: scale(1.0);
    }
  }
  .container{
    width: 100%;
    height: 100%;
  }
  .p404{
    font-size: 64px;
    position: relative;
    text-align: center;
    font-family: 'Overpass', sans-serif;
    color: #fff;

  }
  .pagnf
  {
    font-size: 50px;
    font-family: 'Overpass', sans-serif;
    position: relative;
    color: #fff;
    text-align: center;
  }
  .animate .sk-chase{
    position: relative;
  }
</style>
  <title>Error</title>
</head>
<body>
  <div class="container">
    <h2 class="p404"> 404 </h2>
    <div class="animate">
      <div class="sk-chase">
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
      </div>
    </div>

    <h2 class="pagnf"> Página não Encontrada</h2>
  </div>


</body>
</html>
