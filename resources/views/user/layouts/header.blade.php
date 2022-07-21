
<img class="logo" src="{{asset('assets/putih.png')}}" alt="">
  <nav>
    <div class="navbar grid">
  <a href="/">Home</a>
  <a href="/courtUser">Court</a>
  <a href="/news">News</a>
  <a href="#">About Us</a>
  <a href="#">Contact</a>
 
  <!-- <div class="dropdown">
    <button class="dropbtn">Kategori
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Beginner</a>
      <a href="#">Intermediate</a>
      <a href="#">Advanced</a>
    </div>
  </div> -->
</div> 
    </nav>
    <div>

    @auth
    <div class="dropdown">
    <button class="dropbtn" style="color:white;">Welcome, {{auth()->user()->username}}
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">My Dashboard</a>
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btnLogout">Logout</button>
      </form>
    </div>
  </div>
    @else
    
    <a href="/login"><button class="button">Login</button></a>
    
    
    @endauth

</div>

