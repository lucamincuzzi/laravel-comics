<div class="footer-wrapper">
    <div class="footer-container">
        @foreach ($f_boxes as $f_box)
            <div class="links-container">
                <h4>{{ $f_box['title'] }}</h4>
                <ul>
                    @foreach ($f_box['links'] as $f_link)
                        <li>{{ $f_link }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    {{-- Footer bottom --}}
    <footer>
        <div class="container">
            <button>SING-UP NOW!</button>
            <div class="cta">
                <span>FOLLOW US</span>
                <div class="social">
                    @foreach ($social_links as $icon)
                        <div class="icon"><i class="{{ $icon }}"></i></div>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>
</div>
