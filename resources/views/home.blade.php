{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Welcome to my Dashboard</h1>
@stop

@section('content')
<style>
    .hero-bg-image{
            background-image:url("/images/hero.jpg") no-repeat center center/cover;
            background-attachment: fixed;
            height: 600px;
        }
        #image{
            background-image:url("/images/6452c2513bd86-the-godfather.jpg") no-repeat center center/cover;
            background-attachment: fixed;
            height: 600px;
        }
    
    </style>
    <div id="image" class="hero-bg-image d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-black text-uppercase display-2 fw-bold pb-4">Welcome to my Dashboard</h1>
        <a href="/" class="btn btn-secondary btn-lg fw-bold text-uppercase">Start reading</a>
    </div>
    
    
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid rounded" src="https://picsum.photos/id/239/960/620" alt="">
            </div>
            <div class="col-md-6 my-auto">
                <h2 class="fw-bold text-black text-uppercase mb-4">
                    how to be an expert in 2023
                </h2>
                <p class="fw-bold text-black mb-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore dignissimos odio aut tenetur quia, nobis eveniet consequuntur ut nemo facere, delectus corporis perferendis mollitia! Animi perspiciatis deleniti minima incidunt aliquid.
                </p>
                <p class="text-black mb-4">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia sequi in inventore repellendus nisi, velit obcaecati nemo, blanditiis deleniti similique illo repudiandae nesciunt laborum. Dolore ducimus at explicabo iste accusantium!
                </p>
                <a class="btn btn-primary btn-lg" href="/">Read More</a>
            </div>
        </div>
    </div>
    
    <div class="text-center p-5 bg-light text-dark">
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-5 d-sm-grid gap-3 grid-cols-4">
            <span class="fw-bold text-2xl py-2">UX Design Thinking</span>
            <span class="fw-bold text-2xl py-2">Programming Languages</span>
            <span class="fw-bold text-2xl py-2">Graphic Design</span>
            <span class="fw-bold text-2xl py-2">Front-End Development</span>
        </div>
    </div> 
    
    
    
    <div class="container mx-auto text-center py-5">
        <h2 class="fw-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 fs-5 px-10">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quisquam soluta cumque, consectetur incidunt odio itaque modi explicabo enim perspiciatis asperiores, necessitatibus voluptatem dolore architecto molestiae adipisci distinctio ex optio.
        </p>
    </div>
    
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 bg-info  text-white">
                    <div class="card-body">
                        <ul class="list-inline small">
                            <li class="list-inline-item"><a  href="#" class="text-decoration-none text-white">PHP</a></li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white">Programming</a></li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white">Languages</a></li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white">Backend</a></li>
                        </ul>
                        <h3 class="card-title fs-5 py-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo consequatur veniam eligendi debitis aut adipisci, perferendis, atque vel tenetur dolorem voluptas quidem, culpa asperiores harum cupiditate facere ut ipsum provident?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, consequuntur numquam sint voluptas saepe officia hic cumque, repellendus voluptates, rerum corrupti! Deserunt exercitationem ducimus repudiandae obcaecati labore quod, iste officia!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fugiat vel aperiam, corporis itaque ea voluptate temporibus. Aspernatur hic perferendis omnis, id saepe ducimus earum sed facere doloremque maiores soluta.
                        </h3>
                        <a class="btn btn-secondary btn-lg" href="/">Read More</a>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-md-6" >
                <img class="img-fluid rounded" src="https://picsum.photos/id/242/960/620" alt="">
            </div>
      
            
    
        </div>
        
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
