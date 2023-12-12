<?php
$response = [];
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Word Explorator</title>

    <!-- FavIcon -->
    <link rel="icon" href="https://www.svgrepo.com/show/520332/wordweb.svg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Style -->
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Banner --}}
    @include('components.banner')

    {{-- Navigation Bar --}}
    @include('components.navbar')

    {{-- Hero --}}
    {{-- TODO: ADD HERO --}}
    
    {{-- Pages --}}
    <div class="pages m-10 inline-grid grid-cols-4 gap-4">
        <a href="./features/wordsearch" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Word Search</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Search a words that meets criteria written with wild card pattern, ex: h???y res: happy, etc</p>
        </a>
        
        <a href="./features/synant" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Synonyms & Antonyms</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Search synonyms or antonyms of inputted word</p>
        </a>

        <a href="./features/rhyme" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rhymes</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Search correspondence of sound endings of word</p>
        </a>

        <a href="./features/pow" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Part of Word</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Search a word term that denotes part of something but is used to refer to the whole of it</p>
        </a>

        <a href="./features/related" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Related Word</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Search related word </p>
        </a>

        <a href="./features/associated" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Associated</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">search word that are statistically associated with the query word in the same piece of text.</p>
        </a>

         <a href="./features/def" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Definitions</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">search definitions of a word</p>
        </a>
    </div>
    
</html>
