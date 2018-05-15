
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom box-shadow">
  <h5 class="my-0 mr-md-auto font-weight-normal logo"><a href="/">Burger Project</a></h5>
  <nav class="navbar-expand-lg my-2 my-md-0 mr-md-3">
    <a class="btn btn-outline-customdark" href="#">About Us</a>
    <a class="btn btn-outline-customdark" href="/shop">Shop</a>
    <a class="btn btn-outline-customdark" href="#">Contact Us</a>
    @if (!Auth::guest())
    <a class="btn btn-outline-customdark" href="#">My Cart</a>
    <div class="btn-group">
	  <button type="button" class="btn btn-outline-customprimary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    {{ Auth::user()->name }}
	  </button>
	  <div class="dropdown-menu">
	    <a class="dropdown-item" href="#">My Orders</a>
	    <a class="dropdown-item" href="#">My Profile</a>
	    <a class="dropdown-item" href="#">Shipping Address</a>
	    <div class="dropdown-divider"></div>
	    <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>    
        <form id="logout-form" name="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
	  </div>
	</div>
	@endif
  	@if (Auth::guest())
 	 <a class="btn btn-outline-primary" href="/signIn">Sign up / Login</a>
 	@endif
  </nav>
</div>