<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire Datatable</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/107c56b88c.js" crossorigin="anonymous"></script>

        @livewireStyles
    </head>
    <body class="mt-4 mx-4">
        <h3 class="text-center">Laravel Datatable</h3>
        @livewire('contacts-table');

        @livewireScripts
    </body>
</html>
