@extends('layouts.default')


@section('content')

    <div id="wrapper">
        <div id="content">
            <iframe style="width: 100%; min-height: 400px" src="https://www.youtube.com/embed/3T1c7GkzRQQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
    <br><br>
    <div style="text-align: center;">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="DL6R5CF4GE26A">
            <input type="image" src="https://www.paypalobjects.com/en_US/SE/i/btn/btn_donateCC_LG.gif" border="0"
                   name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"
                 style="display: none !important;">
        </form>
    </div>
    <style>img[src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"] {
            display: none !important;
        }</style>


@endsection
