<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="css/visual.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>    
        </head>
    <header>
    <a href="indexs.html"><i class='bx bx-horizontal-left'></i></a>
    </header>
    <body>
        <form action="register.php" method="post">
            <input type="text" placeholder="login" name="login"> 
            <input type="text" id="inputField" placeholder="password" name="pass">
            <button id="toggleButton">Показать</button>
            <p>Вы ввели: <span id="output"></span></p>
            <input type="text" id="inputField" placeholder="repeat password" name="repeatpass">
            <input type="text" placeholder="email" name="email">
            <button type="submit"> Зарегистьрироваться </button>
        </form>

    </body>
</html>