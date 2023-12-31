<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Rì viu phim</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="search-styles.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/41f5e993c5.js" crossorigin="anonymous"></script>
</head>
<body class="flex-col">
  
  
  <nav>
    <!-- nav bar left side -->
    <div class="flex items-center p-4 ml-9">
      <i class="fa-solid fa-grip text-lg"></i>
      <p class="greeting-message ml-8 text-sm"></p>
    </div>

    <!-- nav bar middle -->
    <div class="items-center nav-brand-logo">
      <img class="w-20 mb-2.5" src="remove.png" alt="site-logo">
    </div>

    <!-- nav bar right side -->
    <div class="flex items-center p-4 mr-9">
      <i class="hover:text-amber-400 ease-linear duration-200 fa-solid fa-bell block text-lg"></i>
      <i class="hover:text-neutral-600 ease-linear duration-200 fa-solid fa-gear ml-7 block text-lg settings"></i>
    </div>
  </nav>
  <!-- END OF NAV BAR -->
  
  <!-- START OF SEARCH BAR -->
  <main class="flex-col justify-center items-center search-implement">
    <!-- SITE LOGO -->
    <div class="searchbar-logo mb-20">
      <img src="remove.png" alt="" class="shadow-2xl">
    </div>
    <!-- END OF SITE LOGO -->
    
    <!-- SEARCH BAR MAIN SECTION -->
    <div class="flex shadow-xl m-auto"  id="search-bar">
      <input type="search" class="h-10 p-6 pl-4 text-white search-query form-control" placeholder="Chỗ này để tìm này" id="movie-search-box" onkeyup="findMovies()" onclick="findMovies()">
      <div class="bg-sky-700 search-btn flex justify-center items-center search-btn">
        <i class="fa-solid fa-magnifying-glass text-lg block"></i>
      </div>
    </div>
    <!-- END OF SEARCH BAR MAIN SECTION -->

    <div class = "flex-col search-list shadow-xl" id = "search-list">
      <!-- list here -->
    </div>
  </main>

  <!-- MOVIE DETAILS PAGE -->
  <section class="flex result-flex" id="result-flex">
    <!-- After clicking search result -->
  </section>

  <div onclick="enterFavPage()" class="footer cursor-pointer hover:bg-black hover:shadow-2xl hover:border-0 hover:opacity-100 border rounded opacity-50 p-2 w-36 text-center">
    My Favourite
  </div>
<!--veiw-->
<div class="viewbox  ">
  <div class="view"><i class="fa fa-bars" id="btn-listModel" aria-hidden="true"></i></div>
  <div class="view"><i class="fa fa-th" aria-hidden="true"></i></div>

</div>

<div class="clearfix"></div>

<!-- data-panel -->
<div class="row" id="data-panel">
  
</div>
</div>


   <!-- FAVOURITE MOVIES PAGE -->
   <div id="favourite-result" class="flex-col">
    <div class="flex justify-between items-center mb-10">
      <h1 class="text-4xl font-bold">My Favourite</h1>
      <i onclick="clearList()" class="fa-solid fa-xmark hover:text-red-500 hover:text-xl"></i>
    </div>
    <div class="gap-y-20 gap-x-10 fav-list">
      <!-- <div class="rounded-lg fav-res-img flex justify-center items-center firstchild">
        <button>
         <p class="remove-fav shadow-2xl"><i class="fa-solid fa-trash text-8xl"></i></p>
        </button>
      </div> -->
    </div>
  </div>

  <script src="script.js"></script>
  <!-- <script src="myFavourite.js"></script> -->
  <script src="greetingMessage.js"></script>
</body>
</html>