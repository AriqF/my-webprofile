<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'Ariq Fachry - Send Email')
    </head>
    <body>
        <h4>You Got Email From {{ $details['email'] }}</h4>
        <h5>From: {{ $details['name'] }}</h5>
        <p>{{ $details['subject'] }}</p>
        <p>{{ $details['message'] }}</p>
        <p>Thank You</p>
    </body>
</html>