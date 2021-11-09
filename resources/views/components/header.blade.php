<x-navbar-search/>
<x-navbar/>

<style media="screen">
  .navbar{
    padding: 8px 8px 8px 0px;
    width: 100%;
    background-color: #FFFFFF !important;
    box-shadow: 10px 15px 10px -20px rgba(0,0,0,0.51);
    -webkit-box-shadow: 10px 15px 10px -20px rgba(0,0,0,0.51);
    -moz-box-shadow: 10px 15px 10px -20px rgba(0,0,0,0.51);

    font-weight: 550;
  }
  .regular-nav{
    width: 100%;
    z-index:1000;
  }
  .search-nav{
    width: 100%;
    z-index:1001;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
  }
  .search-nav.slider.no-padding{
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }

  .search-nav.slider {
	overflow-y: hidden;
	max-height: 500px; /* approximate max height */

	transition-property: all;
	transition-duration: .5s;
	transition-timing-function: cubic-bezier(0, 0, 0.5, 0);
  }

  .search-nav.slider.closed {
  	max-height: 0;
  }
  .search-nav.slider.overflow {
  	overflow: visible !important;
  }

  #navSearchButton{
  background-color: inherit;
  border: none;
  border-bottom: solid white;
  margin-right: 15px;
  color: #6C3FB3;
  font-weight: 550;
}

.nav-item{
overflow: hidden;
}

a.nav-link.active{
border-bottom: solid white;
/* margin-right: 2px; */
}

#navSearchButton:hover{
border-bottom: solid black;
}

a.nav-link.active:hover{
border-bottom: solid black;
}

</style>

<script type="text/javascript">


  function slideSearchBar(e) {
    document.getElementById('searchNav').classList.toggle('closed');
    document.getElementById('searchNav').classList.toggle('overflow');
    document.getElementById('searchNav').classList.toggle('no-padding');

    document.getElementsByClassName('navbar-toggler')[0].click();
  }

</script>
