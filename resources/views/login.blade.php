@extends('layout.plantilla')
@section ('content')
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailwind Login Template</title>
        <meta name="author" content="David Grzyb">
        <meta name="description" content="">
        @section('title', 'Inicio de Sesión')

        <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

            .font-family-karla {
                font-family: karla;
            }
        </style>
    </head>
    <body class="bg-sky-600 font-family-comfortaa h-screen">

        <div class="w-full flex flex-wrap">

            <!-- Login Section -->
            <div class="w-full md:w-1/2 flex flex-col">

                <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                    <p class="text-center text-3xl">Bienvenido.</p>
                    <form class="flex flex-col pt-3 md:pt-8" method="POST" action="{{route('inicia-sesion')}}">
                        @csrf
                        <div class="flex flex-col pt-4">
                            <label for="email" class="text-lg">Email</label>
                            <input type="email" id="email" name="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
        
                        <div class="flex flex-col pt-4">
                            <label for="password" class="text-lg">Contraseña</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
        
                        <button type="submit" class="bg-blue-600 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">Ingresar</button>
                    </form>
                    <div class="text-center pt-12 pb-12">
                        <p>¿Aún no tienes una cuenta? <a href="register" class="underline font-semibold"> Registrate aquí.</a></p>
                    </div>
                </div>

            </div>

            <!-- Image Section -->
            <div class="w-1/2 shadow-2xl">
                <img class="object-cover w-full h-screen hidden md:block" src="https://pbs.twimg.com/media/F15Zm8qXsBAe3tt?format=png&name=small">
            </div>
        </div>

    </body>
    </html>
@endsection