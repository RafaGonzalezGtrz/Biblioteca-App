@extends('layout.plantilla')
@section('content')
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @section('title', 'AdminScreen')
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

        {{-- Fin de barra de accesos --}}


        <!-- Desktop Header -->
        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
                <div class="w-1/2 text-right"></div>
                <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                    @auth{{Auth::user()->name}} @endauth
                    <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                        <img src="https://images.wikidexcdn.net/mwuploads/esssbwiki/thumb/9/95/latest/20220817125116/Kirby_en_Kirby_y_la_tierra_olvidada.png/1200px-Kirby_en_Kirby_y_la_tierra_olvidada.png" class="w-full">
                    </button>

                    {{-- Barra de acceso --}}
                    <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                    <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                        <a href="profile')}}" class="block px-4 py-2 account-link hover:text-white">Cuenta</a>
                        <a href="logout" class="block px-4 py-2 account-link hover:text-white">Cerrar Sesión</a>
                    </div>
                </div>
            </header>
            <div class="w-full overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow p-6">
                    <a class="text-3xl text-black pb-6">
                        Bienvenido @auth de nuevo Admin {{Auth::user()->name}} @endauth 
                    </a>
                    <!--Tabla de abajo -->
                    <div class="w-full mt-12">
                        <p class="text-xl pb-3 flex items-center">Libros en Plataforma</p>
                        <div class="bg-white overflow-auto">
                            <table class="min-w-full bg-white">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre Del Libro</th>
                                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Autor</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Idioma Original</th>
                                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Fecha De Publicación</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr>
                                        <td class="w-1/3 text-left py-3 px-4">Cien años de soledad</td>
                                        <td class="w-1/3 text-left py-3 px-4">Gabriel García Márquez</td>
                                        <td class="text-left py-3 px-4">Español</td>
                                        <td class="text-left py-3 px-4">Mayo de 1967</td>
                                    </tr>
                                    <tr class="bg-gray-200">
                                        <td class="w-1/3 text-left py-3 px-4">El señor de los anillos</td>
                                        <td class="w-1/3 text-left py-3 px-4">J.R.R Tolkien</td>
                                        <td class="text-left py-3 px-4">Inglés</td>
                                        <td class="text-left py-3 px-4"> 29 de julio de 1954</td>
                                    </tr>
                                    <tr>
                                        <td class="w-1/3 text-left py-3 px-4">1984</td>
                                        <td class="w-1/3 text-left py-3 px-4">George Orwell</td>
                                        <td class="text-left py-3 px-4">Inglés</td>
                                        <td class="text-left py-3 px-4">8 de junio de 1949</td>
                                    </tr>
                                    <tr class="bg-gray-200">
                                        <td class="w-1/3 text-left py-3 px-4">Harry Potter y la pierdra filosofal</td>
                                        <td class="w-1/3 text-left py-3 px-4">J.K Rowling</td>
                                        <td class="text-left py-3 px-4">Inglés</td>
                                        <td class="text-left py-3 px-4">26 de junio de 1997</td>
                                    </tr>
                                    <tr>
                                        <td class="w-1/3 text-left py-3 px-4">Don Quijote de la Mancha</td>
                                        <td class="w-1/3 text-left py-3 px-4">Miguel de Cervantes</td>
                                        <td class="text-left py-3 px-4">Español</td>
                                        <td class="text-left py-3 px-4">16 de junio de 2000</td>
                                    </tr>
                                    <tr class="bg-gray-200">
                                        <td class="w-1/3 text-left py-3 px-4">Guerra y paz</td>
                                        <td class="w-1/3 text-left py-3 px-4">León Tolstói</td>
                                        <td class="text-left py-3 px-4">Frances</td>
                                        <td class="text-left py-3 px-4">1986</td>
                                    </tr>
                                </tbody>
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