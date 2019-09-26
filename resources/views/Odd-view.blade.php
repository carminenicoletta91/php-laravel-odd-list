<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('elem.head')
    </head>

    <body>
    <div class="container">
      @include('elem.header')
      @include('elem.section-central')
      @include('elem.footer')
    </div>
    </body>
</html>
