@extends('_layouts.main') 

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Tables
            </h2>

            <nav>
                <a
                    href="/movies/create"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                >
                    Create
                </a>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table Two Start -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <p class="font-medium">Id</p>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="font-medium">Nama</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="font-medium">description</p>
                    </div>
                </div>

                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="number-sm font-medium number-black dark:number-white">
                            1
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                        One Piece
                        </p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        One Piece mengisahkan petualangan seorang bajak laut bernama Monkey D. Luffy dan krunya dalam mencari harta karun legendaris bernama One Piece. Mereka membentuk ikatan persahabatan yang kuat dalam perjalanan mereka.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="number-sm font-medium number-black dark:number-white">
                            2
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Sword Art Online
                        </p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Sword Art Online mengisahkan petualangan seorang pemain game bernama Kirito yang terperangkap di dalam dunia virtual reality yang berbahaya. Dia bersama dengan teman-temannya berusaha untuk menyelesaikan permainan dan keluar dari perangkap tersebut.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="number-sm font-medium number-black dark:number-white">
                            3
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                        The Seven Deadly Sins (Nanatsu no Taizai)
                        </p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        The Seven Deadly Sins mengikuti petualangan tujuh ksatria legendaris yang disebut 'The Seven Deadly Sins'. Mereka berusaha untuk mengalahkan para musuh yang kuat dan mengembalikan perdamaian ke kerajaan Liones
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="number-sm font-medium number-black dark:number-white">
                            4
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Fairy Tail
                        </p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Fairy Tail mengikuti kisah sekelompok penyihir muda dari guild Fairy Tail yang melakukan berbagai misi petualangan. Mereka menghadapi berbagai tantangan dan musuh, sambil memperkuat ikatan persahabatan mereka.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <p class="number-sm font-medium number-black dark:number-white">
                            5
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Hunter x Hunter
                        </p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Hunter x Hunter mengikuti petualangan seorang bocah bernama Gon Freecss yang ingin menjadi Hunter, seseorang yang berpetualang, menemukan harta karun, dan menaklukkan monster. Dia bertemu dengan berbagai teman dan musuh dalam perjalanannya.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ====== Table Two End -->
        </div>
        <!-- ====== Table Section End -->
    </div>
</main>
@endsection
