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
            grid-template-columns: 
                [line1] 1fr
                [line2] 1fr
                [line3] 1fr
                [line4] 1fr;
            grid-template-rows: repeat(3, 1fr);
            grid-gap: 20px 15px;
       }

       .d1{
          /* grid-column: line2 / line4;
          grid-row: 1 / span2; */

          grid-area: 1 / line1 / 4 / line3;

            
       }



    </style>
</head>
<body>
    <div class="d1">1</div>
    <div class="d2">2</div>
    <div class="d3">3</div>
    
</body>
</html>