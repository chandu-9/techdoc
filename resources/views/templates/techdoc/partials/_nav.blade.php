<nav class="main">
    <a href="/" class="brand nav-block">
        {{-- <img src="{{config('constants.TMP_IMG')}}voice.png"> --}}
        <span>Technolynew</span>
    </a>
    <div class="search nav-block">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#A1A1A1" d="M5.8 11.7c-1.6 0-3-.6-4.1-1.7S0 7.4 0 5.8s.6-3 1.7-4.1C2.8.6 4.3 0 5.8 0s3 .6 4.1 1.7c2.3 2.3 2.3 6 0 8.3-1 1.1-2.5 1.7-4.1 1.7zM5.8 1c-1.3 0-2.5.5-3.4 1.4C1.5 3.3 1 4.5 1 5.8s.5 2.5 1.4 3.4c.9.9 2.1 1.4 3.4 1.4s2.5-.5 3.4-1.4c1.9-1.9 1.9-5 0-6.9C8.4 1.5 7.1 1 5.8 1z"/><path fill="#A1A1A1" d="M15.5 16c-.1 0-.3 0-.3-.1L9.3 10c-.2-.2-.2-.5 0-.7s.5-.2.7 0l5.9 5.9c.2.2.2.5 0 .7-.1.1-.3.1-.4.1z"/></svg>
        <input placeholder="search" type="text" v-model="search" id="search-input" v-on:blur="reset" />
    </div>
    <ul class="main-nav" v-if="! search">
        <li class="nav-docs"><a href="/docs">Documentation</a></li>
        <li class="nav-laracasts"><a href="http://vehicleadda.ga">Vechicleadda</a></li>
        <li class="nav-laracasts"><a href="http://vehicleadda.ga">Nginx</a></li>
        <li class="nav-laracasts"><a href="http://vehicleadda.ga">Apache</a></li>
        <li class="nav-laracasts"><a href="http://vehicleadda.ga">Mysql</a></li>
        <li class="nav-laracasts"><a href="http://vehicleadda.ga">Git</a></li>
    </ul>
    <div class="responsive-sidebar-nav">
        <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
    </div>
</nav>
<nav id="slide-menu" class="slide-menu" role="navigation">
</div>
</nav>
<span class="overlay"></span>
<div class="docs-wrapper container">
<section class="sidebar">
    {!! Menu::get('MyNavBar')->asUl() !!}
    
</section>
