@extends('layout.layout')

@section('content')
    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Dicka <span
                    class="w3-hide-small">Armadhany</span> </span>
        </div>
    </div>

    <!-- Second Parallax Image with Portfolio Text -->
    <div class="bgimg-2 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text w3-wide">PORTFOLIO</span>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="w3-content w3-container w3-padding-64" id="portfolio">
        <h3 class="w3-center">MY WORK</h3>
        <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make
                them bigger</em></p><br>

        <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m3">
                <img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="The mist over the mountains">
            </div>

            <div class="w3-col m3">
                <img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Coffee beans">
            </div>

            <div class="w3-col m3">
                <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Bear closeup">
            </div>

            <div class="w3-col m3">
                <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Quiet ocean">
            </div>
        </div>

        <div class="w3-row-padding w3-center w3-section">
            <div class="w3-col m3">
                <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="The mist">
            </div>

            <div class="w3-col m3">
                <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="My beloved typewriter">
            </div>

            <div class="w3-col m3">
                <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Empty ghost train">
            </div>

            <div class="w3-col m3">
                <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Sailing">
            </div>
            <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i
                class="fa fa-remove"></i></span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>
@endsection
