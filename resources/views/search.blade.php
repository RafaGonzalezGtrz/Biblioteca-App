@extends('layout.plantilla')
@section('content')
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title', 'Buscador')
        @vite('resources/css/app.css')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
            .font-family-comfortaa { font-family: comfortaa; }
            .bg-sidebar { background: #3d68ff; }
            .cta-btn { color: #3d68ff; }
            .upgrade-btn { background: #1947ee; }
            .upgrade-btn:hover { background: #0038fd; }
            .active-nav-link { background: #1947ee; }
            .nav-item:hover { background: #1947ee; }
            .account-link:hover { background: #3d68ff; }
        </style>
    </head>
    <body class="bg-gray-100 font-family-comfortaa flex">

        {{-- Barra de accesos --}}
        @if(auth()->user()->role=='admin')
        <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
            <div class="p-6">
                <a href="admin" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">MAGICBOOK<br><span class="text-2x1">Librería Digital</span></a>
                <p class="text-white text-1x1 font-light">Beta</p>
                <a href="upload" class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-book mr-3"></i> Subir Libro
                </a>
            </div>
            <nav class="text-white text-base font-semibold pt-3">
                <a href="search" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                    <i class="fas fa-search mr-3"></i>
                    Explorar
                </a>
                <a href="users" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    Usuarios
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-bell mr-3"></i>
                    Notificaciones
                </a>
            </nav>
            <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
                <i class="fas fa-wrench mr-3"></i>
                Ajustes
            </a>
        </aside>

        @else
            <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
                <div class="p-6">
                    <a href="home" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">MAGICBOOK<span class="text-white text-2xl font-semibold uppercase hover:text-gray-300"><br>Librería Digital</span></a>
                    <p class="text-white text-1x1 font-light">Beta</p>
                    <a href="mybooks" class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                        <i class="fas fa-book mr-3"></i> Mis Libros
                    </a>
                </div>
                <nav class="text-white text-base font-semibold pt-3">
                    <a href="search" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                        <i class="fas fa-search mr-3"></i>
                        Explorar
                    </a>
                    <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        <i class="fas fa-filter mr-3"></i>
                        Categorias
                    </a>
                    <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        <i class="fas fa-heart mr-3"></i>
                        Guardados
                    </a>
                    <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        <i class="fas fa-bell mr-3"></i>
                        Notificaciones
                    </a>
                </nav>
                <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
                    <i class="fas fa-wrench mr-3"></i>
                    Ajustes
                </a>
            </aside>
        @endif
        {{-- Fin de barra de accesos --}}

        <!-- Desktop Header -->
        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
                <div class="w-1/2"></div>
                <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                    @auth{{Auth::user()->name}} @endauth
                    <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                        @if (auth()->user()->role == 'admin')
                            <img src="https://images.wikidexcdn.net/mwuploads/esssbwiki/thumb/9/95/latest/20220817125116/Kirby_en_Kirby_y_la_tierra_olvidada.png/1200px-Kirby_en_Kirby_y_la_tierra_olvidada.png" class="w-full">
                        @else
                            <img src="https://upen.milaulas.com/pluginfile.php/1/core_admin/logocompact/300x300/1673738961/89925310_2623778167869379_5016977600837320704_n.jpg" class="w-full">
                        @endif
                    </button>

                    {{-- Barra de acceso --}}
                    <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                    <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                        <a href="profile" class="block px-4 py-2 account-link hover:text-white">Account</a>
                        <a href="logout" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                    </div>
                </div>
            </header>
            <div class="w-full overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow p-6">
                    <a class="text-3xl text-black pb-6">
                        Suerte en tu busqueda 
                    </a>
                    <div class="col-xl-12">
                        <form action="{{route('search.index')}}" method="get">
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control border border-black  p-1 m-1" name="texto" value="{{$texto}}">
                                </div>
                                <div class="col-auto">
                                    <input type="submit" class="bg-blue-600 hover:bg-blue-900 rounded-lg text-white btn-primary p-2" value="Buscar">
                                </div>
                                @if(auth()->user()->role=='admin')
                                    <div class="col-auto">
                                        <a href="upload" class="btn btn-success bg-green-500 hover:bg-green-800 text-white p-2 rounded-lg">Subir libro</a>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                    <!--Tabla de abajo -->
                    <div class="w-full mt-12">
                        <div class="bg-white overflow-auto">
                            <table class="min-w-full bg-white">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        @if(auth()->user()->role=='admin')
                                            <th scope="col" class="px-6 py-3">Opciones</th>
                                            <th scope="col" class="px-6 py-3">Nombre</th>
                                            <th scope="col" class="px-6 py-3">Descripción</th>
                                            <th scope="col" class="px-6 py-3">Autor</th>
                                            <th scope="col" class="px-6 py-3">Categoria</th>
                                            <th scope="col" class="px-6 py-3">Editorial</th>
                                            <th scope="col" class="px-6 py-3">ISBN</th>
                                        @else
                                            <th scope="col" class="px-6 py-3">Nombre</th>
                                            <th scope="col" class="px-6 py-3">Descripción</th>
                                            <th scope="col" class="px-6 py-3">Autor</th>
                                            <th scope="col" class="px-6 py-3">Categoria</th>
                                            <th scope="col" class="px-6 py-3">Editorial</th>
                                            <th scope="col" class="px-6 py-3">ISBN</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($books)<=0)
                                        <tr>
                                            <td colspan="6">No hay resultados</td>
                                        </tr>
                                    @else
                                        @foreach ($books as $book)
                                            <tr class="text-center text-xs">
                                                @if(auth()->user()->role=='admin')
                                                
                                                    <td class="border border-black">
                                                        <a href='{{route('search.edit', $book->id)}}' class="btn p-1 bg-yellow-300 hover:bg-yellow-500 text-white rounded-lg">Editar</a> | 
                                                        <button data-modal-target="modal-delete-{{$book->id}}" data-modal-toggle="modal-delete-{{$book->id}}" class="text-white bg-red-600 hover:bg-red-900 rounded-lg text-center p-1" type="button">
                                                            Eliminar
                                                        </button>
                                                        <td class="border border-black">{{$book->nombre}}</td>
                                                        <td class="border border-black">{{$book->descripcion}}</td>
                                                        <td class="border border-black">{{$book->autor}}</td>
                                                        <td class="border border-black">{{$book->categoria}}</td>
                                                        <td class="border border-black">{{$book->editorial}}</td>
                                                        <td class="border border-black">{{$book->ISBN}}</td>
                                                    </td>
                                                    @else
                                                    <td class="border border-black">{{$book->nombre}}</td>
                                                    <td class="border border-black">{{$book->descripcion}}</td>
                                                    <td class="border border-black">{{$book->autor}}</td>
                                                    <td class="border border-black">{{$book->categoria}}</td>
                                                    <td class="border border-black">{{$book->editorial}}</td>
                                                    <td class="border border-black">{{$book->ISBN}}</td>
                                                    @endif
                                                </tr>
                                                @include('deletebook')
                                        @endforeach
                                    @endif
                                </tbody>
                                {{$books->links()}}
                            </table>
                        </div>
                    </div>
                </main>
        
                <footer class="w-full bg-white text-right p-4">
                    Edited by <a target="_blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUJcmljayByb2xs" class="underline">miondator</a>.
                </footer>
            </div>
        </div>

        <!-- AlpineJS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
        <!-- ChartJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>


        <script>
            var chartOne = document.getElementById('chartOne');
            var myChart = new Chart(chartOne, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            var chartTwo = document.getElementById('chartTwo');
            var myLineChart = new Chart(chartTwo, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </body>
        
    </html>
@endsection