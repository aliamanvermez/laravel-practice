<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>@yield('title')</title>
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   </head>
   <body>
       <header>
           <nav>
               <ul>
                   <li><a href="{{ url('/') }}">Home</a></li>
                   <li><a href="{{ url('/about') }}">About Us</a></li>
                   <li><a href="{{ url('/contact') }}">Contact</a></li>
               </ul>
           </nav>
       </header>

       <main>
           @yield('content')
       </main>

       <footer>
           <p>© 2023 Your Website</p>
       </footer>
   </body>
   </html>