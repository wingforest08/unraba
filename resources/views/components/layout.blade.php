<!DOCTYPE html>
<html lang="en" class="m-0 p-0">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    
    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
  </head>
  <body class="dark m-0 p-0">
  <x-navbar></x-navbar>
  <main>
        {{ $slot }}
  </main>
  <x-footer></x-footer>
<script src="js/script.js"></script>
<script>
    feather.replace();
    </script>
</body>
</html>

