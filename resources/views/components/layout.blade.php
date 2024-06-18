<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full bg-[#56746b] flex justify-top flex-col ">
    <nav class="flex justify-center w-full">
        <form class="flex justify-center w-full" method="GET" action="/nba/score">
            <div class="my-6 mx-2 p-4">
                <input type="date" class="bg-000 border border-gray-200 rounded p-2 w-full" name="date"
                    placeholder="20024-05-01" value="{{ request()->query('date') }}" />
            </div>
            <div class="my-6 mx-4 p-4">
                <button class="bg-[#000] text-white rounded py-2 px-4 hover:bg-black">
                    submit
                </button>
            </div>
        </form>
    </nav>
    <main class=""h-full flex justify-center items-center">
        {{ $slot }}
    </main>

</body>

</html>
