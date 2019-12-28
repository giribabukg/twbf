@extends('layouts.fronthome')

@section('content')
    <section id="introduction" class="tm-section-pad-top">
        @include('intro')
    </section>
    <section id="work" class="tm-section-pad-top">
      @include('work')
    </section>

    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
      @include('contact')
      <footer class="text-center small tm-footer">
          <p class="mb-0">
            Copyright &copy; 2019 TWBF Powered By <a rel="nofollow" href="http://www.dikshainfotech.in" class="tm-footer-link" target="_blank">Diksha Infotech</a>
          </p>
        </footer>
    </section>
@endsection