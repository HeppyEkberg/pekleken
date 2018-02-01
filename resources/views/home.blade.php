@extends('layouts.default')




@section('content')


    <div id="wrapper">
        <div id="content"><a href="/" class="home-link"><p class="site-title">Pekleken.se</p></a>
            @if(is_null($question))
                @include('question.reset')
            @else
                @include('question.markup')
            @endif
            <div><a href="/" id="RandomQuestion"><img src="/gfx/dice.png" alt=""></a></div>
            <div style="clear: both;"></div>
        </div>
        <div id="footer">Snusk: <a href="{{ route('home.snusk') }}"> {{ ((int) session('snusk') == 1 ? 'På' : 'Av') }}</a>
            <div style="float: right;">
                <a href="/#about-information/" id="om-pekleken">Hur man spelar pekleken</a>
            </div>
        </div>
        <div id="about-information-wrapper">
            <div id="about-information" style="display: none;"><br>
                <h1>Pekleken - ett ölspel till förfesten</h1>
                <p>Pekleken spelar man genom att en på festen, tar och slumpar fram påståenden/frågor och läser sedan denna
                    ut högt. Alla i umgänget pekar sedan på den person de tycker detta påstående passar in bäst på. Den som
                    "vinner", alltså den som får mest pekningar får då dricka sin medhavda alkoholdrick i klunkar x
                    pekningar. Blir det lika får båda dricka x antal klunkar.</p>
                <h2>Om pekleken</h2>
                <p>Pekleken.se fick sin första tanke, på en väldigt trevlig förfest hos mig här i Kalmar. Då vi letade efter
                    något passande spel att underhålla oss med. Så jag som har spelat detta spel tidigare på
                    någon förfest tyckte vi kunde spela det. Då jag har oerhört dålig fantasi när det kommer till detta
                    satte jag min och försökte leta upp någon hemsida med detta spel. Men till min förtvivlan hittade jag
                    inte pekleken vid denna förfest.</p>
                <p>Någon dag senare satte jag, <a href="http://heppy.nu">Heppy</a> &amp; Joakim oss ner och började
                    programmera ihop pekleken.se. Så nu hoppas vi det blir många som kommer använda sig utav denna
                    trevliga lilla hemsida, samt även hjälper oss att utöka deras bibliotek med roliga frågor så vi
                    tillsammans gör den till den bästa <strong>pekleken</strong>.</p>
                <p>Om ni vill, så får ni absolut gärna donera lite pengar, så kommer vi att fortsätta utveckla pekleken.se
                    med nya idéer för att utöka den roliga underhållingen som pekleken.se kommer ge oss i framtiden.
                    Ni kan för tillfället se alla pekleken.se's godkända frågor här: <a href="/lista/">pekleken.se's alla
                        frågor</a>. Så se till att ha roligt nu!</p></div>
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
