<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Dashboard</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

 <style>
  :root{--sidebar-width:280px}.sidebar.offcanvas-lg{width:var(--sidebar-width);transition:transform 0.3s ease-in-out}#mainContentWrapper{transition:margin-left 0.3s ease-in-out}@media (min-width:992px){#mainContentWrapper{margin-left:var(--sidebar-width)}}body.desktop-sidebar-toggled .sidebar.offcanvas-lg{transform:translateX(calc(var(--sidebar-width) * -1))}body.desktop-sidebar-toggled #mainContentWrapper{margin-left:0}
 </style>
</head>

<body>
 <div class="d-flex">
  @include('layouts.partials.navbar')

  <div class="flex-grow-1">
   @include('layouts.partials.topbar')
   <main class="p-4">

    @yield('content')

   </main>
  </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <script>
  document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("desktopSidebarToggle");e&&e.addEventListener("click",(function(){document.body.classList.toggle("desktop-sidebar-toggled")}))}));
 </script>
</body>

</html>