<nav>
<div class="navbar-header">
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a href="<? echo base_url();?>index.php/home/view" class="navbar-brand">ALKET</a>
</div>
<!-- Collection of nav links, forms, and other content for toggling -->
<div id="navbarCollapse" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href="<? echo base_url();?>index.php/home/tambahdata"><span class="glyphicon glyphicon-plus-sign"> TAMBAH DATA</a></li>
        <li><a href="<? echo base_url();?>index.php/home/manage"><span class="glyphicon glyphicon-cog"> MANAGE DATA</a></li>
        <li><a href="<? echo base_url();?>index.php/home/telusur"><span class="glyphicon glyphicon-search"> CARI DATA</a></li>
        
            <!-- <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></a>  </li>
                <li><a href="#"><span class="glyphicon glyphicon-off"> LogOut</a>  </li>
            </ul> -->
</div>
</nav>