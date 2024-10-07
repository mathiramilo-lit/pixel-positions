<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pixel Positions</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black font-hanken-grotesk text-white">
  <div class="px-10">
    <nav class="flex items-center justify-between border-b border-white/10 py-4">
      <div>
        <a href="">
          <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
        </a>
      </div>

      <div class="space-x-6 font-bold">
        <a href="#">Jobs</a>
        <a href="#">Careers</a>
        <a href="#">Salaries</a>
        <a href="#">Companies</a>
      </div>
      <div>
        <a href="">
          Post a Job
        </a>
      </div>
    </nav>

    <main class="mx-auto mt-10 max-w-[986px]">{{ $slot }}</main>
  </div>
</body>

</html>
