<!DOCTYPE html>
<html lang="en">
    <body class="docs language-php">
        @include(config('constants.TMP_NAME').'.partials._header')
        @include(config('constants.TMP_NAME').'.partials._nav')
        {{-- start --}}
        <span class="overlay"></span>
            <article>
            {!!$text!!}
            </article>
        </div>
        {{-- end --}}
        @include(config('constants.TMP_NAME').'.partials._footer')
    </body>
</html>