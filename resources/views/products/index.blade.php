@extends('layouts.indexMaster')

@section('style')
    <style>
        .card-fix {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-card {
            position: relative;
            font-family: sans-serif;
            margin-left: 15px;
        }

        .container-card::before,
        .container-card::after {
            content: "";
            background-color: #c3b3a34c;
            position: absolute;
        }

        .container-card::before {
            border-radius: 50%;
            width: 8rem;
            height: 10rem;
            top: 30%;
            right: 60px;
        }

        

        .container-card .box-card {
            width: 18em;
            height: 610px;
            padding: 3rem;
            background-color: #6c025c;
            border: 15px solid #ffffff;
            margin: 15px;
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            border-radius: .7rem;
            transition: all ease .3s;
        }

        .container-card .box-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .container-card .box-card .title {
            font-size: 2rem;
            font-weight: 500;
            letter-spacing: .1em;
            color: #040004;
        }

        .container-card .box-card div strong {
            display: block;
            margin-bottom: .5rem;
        }

        .container-card .box-card div p {
            margin: 0;
            font-size: .9em;
            font-weight: 300;
            letter-spacing: .1em;
            color: #0e0202
        }

        .container-card .box-card div span {
            font-size: .7rem;
            font-weight: 300;
        }

        .container-card .box-card div span:nth-child(3) {
            font-weight: 500;
            margin-right: .2rem;
        }

        .container-card .box-card:hover {
            box-shadow: 0px 0px 20px 1px #080409;
            border: 1px solid #080409;
        }

        .img-icon {
            width: 15px;
            height: 15px;
            padding-left: 3px;
            padding-bottom: 2px;
            filter: invert(1);
            transition: .5s;
            cursor: pointer;
        }

        .img-icon:hover {
            color: #999;
            transition: .5s;
        }

        .img-icon-edit {
            width: 19px;
            height: 19px;
            padding-top: 5px;
            padding-left: 1px;
            filter: invert(1);
            transition: .5s;
            cursor: pointer;
            background-size: cover;
        }

        .img-icon-edit:hover {
            color: #999;
            transition: .5s;
        }

        .img-icon-delete {
            width: 15px;
            height: 15px;
            padding-bottom: 2px;
            filter: invert(1);
            transition: .5s;
            cursor: pointer;
        }

        .img-icon-delete:hover {
            color: #999;
            transition: .5s;
        }

        .options {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        .button-fix {
            width: 44px;
            height: 43px;
            color: #fff;
            text-decoration: none;
            border: none;
            margin-left: 5px;
            background-color: #000;
            padding: 10px 12px;
            border-radius: 10px;
            transition: .5s;
        }

        .button-fix:hover {
            filter: brightness(60%);
            transition: .5s;
        }

        .options a {
            color: #e14ee9;
            text-decoration: none;
            font-size: 18px;
            margin-left: 5px;
            background-color: #000;
            padding-top: 2px;
            padding: 9px 12px;
            border-radius: 10px;
            transition: .5s;

        }

        .options a:hover {
            filter: brightness(60%);
            transition: .5s;
        }
    </style>
@endsection

@section('content')
<header>
    <ul class="nav">
                <li class="nav-item">
                    <div class="col-md-3 text-end">
                        <a href="{{route('logout')}}"> <a class="nav-link" href="http://127.0.0.1:8000/login">   <FONT COLOR="purple">Salir</font></a></a>
                    </div>
                </li>
                <li class="nav-item">
                    <article class="title">
                    <FONT COLOR="purple">Tu seccion privada</font>
                    </article>
                    
                </li>
                <div class="pull-right">
                    @role('admin')
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                        @endrole
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            </ul>
        </nav>
        <div class="cover d-flex justify-content-center align-items-center flex-column">
            <h1>   Pagina privada @auth de {{Auth::user()->name}}       @endauth</h1>
        
            <FONT COLOR="pink">Aqui encontraras productos de tu interes</font>
    </header>


    <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-4">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="grid-fix">
            <div class="card-fix">
                @foreach ($products as $product)
                    <div class="col-md-3 mt-4 mr-5">
                        <div class="container-card">
                            <div class="box-card">
                                <span class="title">{{ $product->nombre }}</span>
                                <img src="{{ $product->imagen }}">
                                <div>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                        
   
                                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Ver mas</a>

                                        @role('admin')
                                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                        @endrole
                       
                                        @csrf
                                        @method('DELETE')
                                        @role('admin')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        @endrole
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection
<style>
    <style>
    body { 
margin: 0em;
}

.cover {
height:400px;
background-image:url(https://i.pinimg.com/originals/de/75/14/de75147dc94c717db110a6b1651c1221.jpg);
color:white;
background-size:cover;
background-position:center;
background-color:rgba(0,0,0,0.5);
background-blend-mode:darken;
}

.card-img-top {
width: 100%;
height: 300px;
object-fit: cover;
}

.flex-container {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
  
  padding: 0;
  margin: 0;
  list-style: none;
}

</style>