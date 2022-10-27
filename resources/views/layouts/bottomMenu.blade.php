<nav class="bottom">
  <a class="{{ isset($activeMenu) && $activeMenu =='actu' ? 'active' : '' }}" href="{{url('actualites')}}"><i class='bx bx-home'></i></a>
  <a class="{{ isset($activeMenu) && $activeMenu =='search' ? 'active' : '' }}" href="{{url('search')}}"><i class='bx bx-search'></i></a>
  <a class="{{ isset($activeMenu) && $activeMenu =='article' ? 'active' : '' }}" href="{{url('articles')}}"><i class='bx bx-user'></i></a>
  <a href="index.php?action=logout"><i class='bx bx-log-out-circle'></i></a>
</nav>
