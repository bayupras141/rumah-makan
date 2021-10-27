@extends('layouts.app')

@section('content')
<div class="row tm-row tm-mb-120">
    <div class="col-12">
        <h2 class="tm-color-primary tm-post-title tm-mb-60 text-center">Menu Makanan</h2>
    </div>
    @foreach($data as $c)
    <article class="col-12 col-md-4 tm-post">
        <hr class="tm-hr-primary">
        <a href="post.html" class="effect-lily tm-post-link tm-pt-30">
            <div class="tm-post-link-inner">
                <a href="#">
                <img src="{{asset($c['url'])}}" alt="" class="img-fluid">                      
            </div>
            <span class="position-absolute tm-new-badge"></span>
            <h2 class="tm-pt-30 tm-color-dark tm-post-title">{{$c['nama']}}</h2>
        </a>                    
        <li style="font-size: 15px; font-family: 'Times New Roman', Times, serif; list-style-type:none;">
            Harga : Rp.{{$c['Harga']}}
        </li>
    </article>
    @endforeach
</div>
@endsection
