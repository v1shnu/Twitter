<div id="navBarLoggedOut" style="display:none;" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <a class="brand" style="margin-left:0px;" href="#">Twitter</a>
    <ul class="nav" style="float:none; display:inline-block;">
  		<img src="./img/icon.png" style="height:40px"></a></li>
    </ul>
    <ul class="nav pull-right">
      <li><a href="#">Settings</a></li>
    </ul>
  </div>
</div>

<div id="navBarLoggedIn" style="display:none;" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <a class="brand" style="margin-left:0px;" href="#">Twitter</a>
    <ul class="nav" style="float:none; display:inline-block;">
  		<li class="active"><a href="#">Home</a></li>
	    <li><a href="#">Connect</a></li>
	    <li><a href="#">Profile</a></li>
    </ul>
    <ul class="nav pull-right">
    	<li class="divider-vertical"></li>
    	<form class="navbar-search">
				<input type="text" class="search-query span3" placeholder="Search" style="height:25px;margin-top:3px;">
					<div class="icon-search icon-white"></div>
		</form>
		<li class="divider-vertical"></li>
      	<li onClick="logout()"><a href="#">Logout</a></li>
    </ul>
  </div>
</div>