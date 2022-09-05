<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        html, body{
            margin: 20px;
            height: calc(100% - 40px);
            background-color: lightgray;
        }

        div{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            border: solid 5px dodgerblue;
            background-color: #fff;
        }

        body{
            display: grid;
            /* grid-template-columns: 50% 50%; */
            /* grid-template-columns: repeat(12, 8.33%); */
            grid-template-columns: 3fr 6fr 3fr;
            grid-template-rows: 200px auto auto auto;
        }

        .d8{
            grid-column-start: 2;
            grid-column-end: 4;
            grid-row-start: 2;
            grid-row-end: span 2;
        }



    </style>
</head>
<body>
    <div class="d1">1</div>
    <div class="d2">2</div>
    <div class="d3">3</div>
    <div class="d4">4</div>
    <div class="d5">5</div>
    <div class="d6">6</div>
    <div class="d7">7</div>
    <div class="d8">8</div>
    <div class="d9">9</div>
    <div class="d10">10</div>
    <div class="d11">11</div>
    <div class="d12">12</div>
</body>
</html>