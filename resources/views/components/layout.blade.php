<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div>
        <nav>
            <a href="">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
            </a>
            <div>links</div>
            <div>post a job</div>
            <div style="font-size: 50px">


        </div>
        </nav>

        <main>
            {{$slot}}
        </main>










    </div>
</body>
</html>
