@extends('hyde::layouts.app')
@section('content')
@php($title = "Create Tip Draft")
@php($navigation = ['hidden' => true])

@push('meta')
<meta name="robots" content="noindex, nofollow">
@endpush

<script src="https://cdn.tailwindcss.com?plugins=typography"></script>

<main class="mx-auto max-w-7xl py-16 px-8">
    <h1 class="text-center text-3xl font-bold">Create Tip Draft</h1>

    <p class="text-center text-gray-600 dark:text-gray-300 mt-4 max-w-lg mx-auto">
        Internal form to draft a new tip. This form will open a new GitHub issue with the tip content. The form is handled by JavaScript on the frontend.
    </p>

    <form class="max-w-lg mx-auto mt-8 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title:</label>
            <input type="text" id="title" name="title" required  autofocus class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Description:</label>
            <input type="text" id="description" name="description" required class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
        </div>

        <div class="mb-4">
            <label for="body" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Body:</label>
            <textarea id="body" name="body" required class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white h-32 resize-none"></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-blue-300 transition duration-300">
            Submit
        </button>
    </form>

    <script>
        // Select the form
        const form = document.querySelector('form');

        // Add submit event listener to the form
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Get form values
            const title = document.getElementById('title').value;
            const description = document.getElementById('description').value;
            const body = document.getElementById('body').value;

            // Generate slug from title
            const slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');

            // Get current date
            const date = new Date().toISOString().split('T')[0];

            // Assemble front matter and markdown
            const frontMatter = `---
title: "${title}"
description: "${description}"
date: ${date}
author: caen
---`;

            const markdown = `${frontMatter}\n\n${body.trim()}\n`;

            // Encode the markdown for URL
            const encodedMarkdown = encodeURIComponent(markdown);

            // Generate GitHub URL
            const githubUrl = `https://github.com/caendesilva/dev-tips/new/master/_posts?filename=_posts/${slug}.md&value=${encodedMarkdown}`;

            // Open the GitHub URL
            window.open(githubUrl, '_blank');

            // Reset form
            form.reset();
        });
    </script>
</main>

@endsection
