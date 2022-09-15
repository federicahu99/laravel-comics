<?php
$links = config('header');
?>

<header>
<!-- upper header -->
    <div id="upper-header">
        <ul id="flex-upper-header" class="container">
           <li><a href="">DC POWER VISA</a></li>
           <li><a href="">ADDITIONAL DC SITES</a></li>
        </ul>
    </div>
<!-- bottom header -->
    <div id="bottom-header">
        <div class="container flex-bottom">
            <figure>
                <a href="">
                    <img src=" {{ asset('img/dc-logo.png') }} " alt="">
                </a>
            </figure>
            <ul class="flex-bottom">
                @foreach($links as $link)
                <li><a href="">{{$link['name']}}</a></li>
                @endforeach
            </ul>
            <div> 
                <input type="text" placeholder="Search.." id="header-search">
            </div>
        </div>
    </div>
</header>