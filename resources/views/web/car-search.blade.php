@extends('web.layout.layout')
@section("name","Search: ".app("request")->input('q'))
@section("main")
    <div class="no-bottom no-top zebra" id="content">
        <div id="top"></div>

        <!-- section begin -->
        @include('web.html.breadcrumb')
        <!-- section close -->

        <section id="section-cars">
            <div class="container">
                <div class="row">
                    {{--Filter Car--}}
                    @include('web.html.car.filter-car')
                    {{--End Filter Car--}}

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12" style="text-align: center">
                                <p>Found {{ $count }} cars</p>
                            </div>
                            @include("web.html.car.cars")
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <a href="#" id="back-to-top"></a>
@endsection
