<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      body {
  height: 150px;
  background-image: url('https://media1.tenor.com/images/36edf4bad90e61b1614e4b6dc104cc51/tenor.gif?itemid=14706131');
background-size: cover;
  background-repeat:no-repeat;
  background-position: center center;
}
        @import url('https://fonts.googleapis.com/css?family=Nunito:400,600,700');

  
  font-family: 'Nunito', sans-serif;


.a{color: #E7484F}
.b{color: #F68B1D}
.c{color: #FCED00}
.d{color: #009E4F}
.e{color: #00AAC3}
.f{color:  #732982}


.container{
  margin-top: 400px;
}

.text-center {
  text-align: center;
}

.rainbow{
  background-color: #9926a1;
  border-radius: 4px;  
  color: #fff;
  cursor: pointer;
  padding: 8px 16px;
  
}

.rainbow-3:hover{
  background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, red);
  animation:slidebg 2s linear infinite;
}

@keyframes slidebg {
  to {
    background-position:20vw;
  }
}

.follow{
  margin-top: 40px;
}

.follow a{
  color: black;
  padding: 8px 16px;
  text-decoration: none;
}

    </style>
</head>
<body>
    <div class="container text-center">
        <a href="/login" class="rainbow rainbow-3">Click Me!</a>
         <div class="follow">
         </div>
</body>
</html>