<footer class="main">
   {{--  <ul>
        <li class="nav-docs"><a href="/docs">Documentation</a></li>
        <li class="nav-laracasts"><a href="https://laracasts.com">Laracasts</a></li>
        <li class="nav-laravel-news"><a href="https://laravel-news.com">News</a></li>
        <li class="nav-partners"><a href="/partners">Partners</a></li>
        <li class="nav-forge"><a href="https://forge.laravel.com">Forge</a></li>
        <li class="dropdown community-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Conference <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="https://laracon.eu">Laracon EU</a></li>
                <li><a href="http://laracon.us">Laracon US</a></li>
                <li><a href="https://laracon.net">Laracon Online</a></li>
            </ul>
        </li>
        <li class="dropdown community-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ecosystem <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="https://github.com/laravel/laravel">GitHub</a></li>
                <li class="divider"></li>
                <li><a href="https://envoyer.io">Envoyer</a></li>
                <li><a href="https://lumen.laravel.com">Lumen</a></li>
                <li><a href="https://spark.laravel.com">Spark</a></li>
                <li class="divider"></li>
                <li><a href="https://laracasts.com/discuss">Forums</a></li>
                <li><a href="https://larajobs.com/?partner=5#/">Jobs</a></li>
                <li><a href="http://www.laravelpodcast.com/">Podcast</a></li>
                <li><a href="http://larachat.co">Slack</a></li>
                <li><a href="https://twitter.com/laravelphp">Twitter</a></li>
            </ul>
        </li>
    </ul> --}}
   
    <p class="less-significant">
        <a href="http://jackmcdade.com">
            Designed by<br>
           
        </a>
    </p>
</footer>

<script id="search_suggestion_template" type="text/template">
{{-- <div class="autocomplete-wrapper">
    {{#_highlightResult.h1}}
    <div class="h1">
        {{{ _highlightResult.h1.value }}}
    </div>
    {{/_highlightResult.h1}}
    <div class="sub-section">
        {{#_highlightResult.h2}}
        <div class="h2">
            <span class="hash">#</span> {{{ _highlightResult.h2.value }}}
        </div>
        {{/_highlightResult.h2}}
        {{#_highlightResult.h3}}
        <div class="h3">
            > {{{ _highlightResult.h3.value }}}
        </div>
        {{/_highlightResult.h3}}
        {{#_highlightResult.h4}}
        <div class="h4">
            > {{{ _highlightResult.h4.value }}}
        </div>
        {{/_highlightResult.h4}}
    </div>
    {{#_highlightResult.content}}
    <div class="content">
        {{{ _highlightResult.content.value }}}
    </div>
    {{/_highlightResult.content}}
</div> --}}
</script>
<script id="search_empty_template" type="text/template">
<div class="autocomplete-wrapper empty">
    <div class="h2">We didn't find any result for "{{-- {{query}} --}}". Sorry!</div>
</div>
</script>
<script id="search_footer_template" type="text/template">
<div class="footer">
    <a target="_blank" href="https://www.algolia.com/?utm_source=laravel&utm_medium=link&utm_campaign=laravel_documentation_search">
        <img width="50" src="/assets/img/algolia-logo.png">
        <div class="powered">powered by</div>
        <div style="clear: both"></div>
    </a>
</div>
</script>
<script src="{{config('constants.TMP_JS')}}laravel-fdb8696856.js"></script>
<script src="{{config('constants.TMP_JS')}}viewport-units-buggyfill.js"></script>
<script>window.viewportUnitsBuggyfill.init();</script>
<script>
var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
(function(d,t){
var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)
}(document,'script'));
</script>