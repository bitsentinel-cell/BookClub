<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>BookClub</title>
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('books') }}" class="p-3">Books</a>
            </li>
        </ul>

        <ul class="flex items-center">

            @auth

            <li>
                <a href="" class="p-3">{{ Auth::user()->username }}</a>
            </li>

            <li>
                <form class="inline p-3" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>

            @endauth
            @guest


            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>

            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>

            @endguest

        </ul>

    </nav>


    @yield('content')


</body>

</html>