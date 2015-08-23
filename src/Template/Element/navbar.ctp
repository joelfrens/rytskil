<!--<div>
	<ul id="navbar">
		<li><a href='/admin/users'><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Users</a></li>
		<li><a href='/admin/agencies'><span class="glyphicon glyphicon-user" aria-hidden="true">Agencies</a></li>
		<li><a href='/admin/countries'><span class="glyphicon glyphicon-globe" aria-hidden="true">Countries</a></li>
		<li><a href='/admin/page_contents'><span class="glyphicon glyphicon-book" aria-hidden="true">Pages</a></li>
		<li><a href='/admin/packages'><span class="glyphicon glyphicon-user" aria-hidden="true">Packages</a></li>
		<li><a href='/admin/categories'><span class="glyphicon glyphicon-list-alt" aria-hidden="true">Categories</a></li>
		<li><a href='/admin/user_types'><span class="glyphicon glyphicon-user" aria-hidden="true">User types</a></li>
		<li><a href='/admin/occupations'><span class="glyphicon glyphicon-user" aria-hidden="true">Occupations</a></li>
		<li><a href='/admin/uk_postcodes'><span class="glyphicon glyphicon-user" aria-hidden="true">Postcodes</a></li>
		<li><a href='/admin/logout'><span class="glyphicon glyphicon-off" aria-hidden="true">Log out</a></li>
	</ul>
</div>
<div class="nav_seperator"></div>-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/admin/page_contents">Pages</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li><a href="/admin/packages">Packages <span class="sr-only"></span></a></li>
        <li><a href="/admin/users">Users <span class="sr-only">(current)</span></a></li>
        <li><a href="/admin/agencies">Agencies <span class="sr-only"></span></a></li>
        <li><a href="/admin/jobs">Jobs</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/admin/user_types">User types</a></li>
            <li><a href="/admin/job_types">Job types</a></li>
            <li><a href="/admin/uk_postcodes">Postcodes</a></li>
            <li><a href="/admin/occupations">Occupations</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/admin/countries">Countries</a></li>
            <li><a href="/admin/languages">Languages</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/admin/categories">Categories</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/admin/users/logout">Log Out</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>