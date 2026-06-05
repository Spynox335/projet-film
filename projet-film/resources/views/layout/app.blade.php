<!DOCTYPE html>
<html lang="'fr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
      @yield('head')
 <header>
      <nav>
         <div class="items">
                 <ul class="mini-titre">
                         <a href="/movies" class="mini-button"><li>Acceuil</li></a>
                        <a href="/movies/create"><li>créer</li></a>
                           
                        @yield('navbar')
                 </ul> 
          </div> 
       </nav>
    </header>
 </head>
 <body>

    @yield('content')
    <footer>         
         <div>
                <a href="https://github.com/juniorebata93-crypto"><img src="https://i.pinimg.com/1200x/66/71/3a/66713a96b9b21dffd3a85a5d748a3171.jpg" alt="logo github" class="github"></a>                             
                <a href="https://www.instagram.com/jnr_ebata/?next=%2F"><img src="https://i.pinimg.com/736x/4f/6b/36/4f6b3632a749b46e58429676160df6b0.jpg" alt="logo instagram" class="insta"></a>
                 <a href="https://www.tiktok.com/@jr.la.mlo"><img src="https://i.pinimg.com/webp/736x/5d/63/c8/5d63c857404bab94c94a3f5b719628f2.webp" alt="logo tik tok" class="tiktok"></a>
                <p>&copy; 2026 ce site a été réalisé par Lucien EBATA avec l'aide de sa formatrice Maëlie POUSSIER </p>
         </div>  
     </footer>
</body>
</html>