@extends('layouts.layout');

@section('content')

    {{-- projects details area start  --}}
    <section class="project-details pt-5">
        <div class="container">
            <div class="row mt-5 bg-white p-3 shadow-lg">
                <div class="col-md-6">
                    <div class="project-img-area pt-5">
                        <img class="img-fluid" src="{{asset("assets/img/home.png")}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project-content pt-5">
                        <h3>Project Title</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, molestiae alias. Itaque, beatae soluta. Nisi tenetur officiis provident ut nulla! Quas quidem reiciendis molestiae sequi error accusantium eveniet aspernatur sed.</p>
                        <h5>Live Link: <a href="" target="_blank">https://github.com/SR-Sohan/portfolio</a></h5>
                        <h5>Github Link: <a href="" target="_blank">https://github.com/SR-Sohan/portfolio</a></h5>

                        <div class="project_technology mt-5">
                          <h3>Technology</h3>
                          <div class="project_technology_wrap">
                            <div>HTML5</div>
                            <div>CSS3</div>
                            <div>Bootstrap</div>
                            <div>JavaScript</div>
                            <div>PHP</div>
                            <div>Laravel</div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- projects details area end --}}
    
@endsection