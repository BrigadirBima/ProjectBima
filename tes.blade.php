<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<style>
  .tes{
      width: 120px;
      height: 30px;
    }

    .lol{
      width: 120px;
      height: 50px;
    }

    .ye{
      width: 600px;
    }

    .lmao{
      width: 277px;
    }

    .img{
      width: 150px;
      height: 200px;
    }
</style>
<body>
  <nav class="fixed-top h-20 bg-stone-500 shadow-md shadow-gray-500">
    <div class="container m-auto flex justify-between items-center">
      <div>
        <ul class="flex">
          <li>
            <button class=" bg-white rounded p-1 mr-8 mt-3">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
              </svg>
            </button>
          </li>
          <li>
            <button class="transition ease-in-out delay-50 font-semibold bg-neutral-400 hover:-translate-y-1-x-1 hover:scale-110 hover:bg-neutral-400 duration-100 w-20 h-9 mt-4 rounded ">BACK</button>
          </li>
        </ul>
      </div>
        <p class="text-4xl text-white text-right mr-5 mt-2 ">E-DISCIPLINE</p>
      </div>
    </div>
  </nav>

  <div class="container mx-auto my-5 rounded bg-neutral-400">
    <div class="grid grid-rows-4 grid-cols-4 gap-4">
      <div class="img ml-8 row-span-2 mt-4 rounded bg-stone-800"></div>
      <div class="mt-4 text-left text-2xl col-span-2">
        <ul>
          <li>Nama : Rapi</li>
          <li>Kelas : pplg</li>
          <li>Nis : 9669</li>
        </ul>
      </div>
      <div class="text-center row-span-2 container ml-20">
          <div class="tes text-lg bg-white mt-12">STATUS</div>
          <div class="lol text-xl p-2 text-white bg-stone-500">RINGAN</div>
      </div>
      <div class="text-left text-xl">
        <ul>
          <li>Ayah : Udin</li>
          <li>Ibu : Yenny</li>
          <li>Wali : -</li>
        </ul>
      </div>
      <div class="text-left text-xl ">
        <ul>
          <li>Nama : Rapi</li>
          <li>Kelas : pplg</li>
          <li>Nis : 9669</li>
        </ul>
      </div>
      <div class="container col-span-2 row-span-2 p-4 m-4 rounded bg-stone-500">
        <ul class="list-none">
          <li class="text-2xl">Riwayat Poin</li>
          <li class="text-lg">-Terlambat</li>
          <li class="text-lg">-Berkelahi</li>
          <li class="text-lg">-Merokok</li>
          <li class="text-lg">-Tidak mengerjakan tugas</li>
        </ul>
      </div>
      <div class="ye container col-span-2 rounded bg-white border-solid border-4 border-stone-500 m-4">

      </div>
      <div class="container bg-green-500 border-solid border-4 border-stone-500 mb-7 rounded ml-4"></div>
      <div class="lmao container bg-stone-500 mb-7 rounded ml-4"></div>
  </div>
</body>
</html>