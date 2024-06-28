<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PDF Export' }}</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @page {
            margin: 1cm;
        }
        body {
            font-family: 'Nunito', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1em;
        }
        th, td {
            border: 1px solid #000000; /* Black border for table cells */
            padding: 10px; /* Increased padding for better readability */
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            
        }
        .text-center {
            text-align: center;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .mt-10 {
            margin-top: 2.5rem;
        }
    </style>
</head>
<body>
    <div class="container mx-auto mt-10 p-5 bg-gray-100 rounded-lg shadow-lg">
        @yield('content')
    </div>
</body>
</html>