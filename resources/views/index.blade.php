<style>
    body{
        align-items: center;
        height:100vh;
    }
</style>
@include('head')
@include('header')

<div 
    style="
        background-image: url({{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height:200px;
        align-items: center;
    " 
    class="w-100 col-12 pt-4"
>
        <h1 class="col-12 text-center"> Encuentra tu espacio ideal </h1>
        <form action="{{route('spaces.index')}}" class="col-12 d-flex justify-content-center">
            <input type="text"  class="wrapper w-50 shadow" style="
            background-color: white;
            border: 1px solid grey;
            border-radius: 10px 0px 0px 10px;
        ">
        <input type="submit"  class="wrapper w-10 shadow corporative" style="
        border: 1px solid grey;
        border-radius: 0px 10px 10px 0px;
    "> 
        </form>
</div>
<h1> sitios de interes </h1>
<main class="align-self-center col-12"> 
    <div class="card-deck">
        <div class="card">
        <div class="card-header p-0 d-flex col-12">
            <img class="col-6 p-0 m-0" src="{{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg">
            <div class="col-6 pv-0 m-0"> 
                <h3> 
                    title 
                </h3>
                <p>
                    lore ipsum translated text
                </p>
            
            </div>
        </div>
        </div> 
        <div class="card">
        <div class="card-header p-0 d-flex col-12">
            <img class="col-6 p-0 m-0" src="{{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg">
            <div class="col-6 pv-0 m-0"> 
                <h3> 
                    title 
                </h3>
                <p>
                    lore ipsum translated text
                </p>
            
            </div>
        </div>
        </div>     
        <div class="card">
        <div class="card-header p-0 d-flex col-12">
            <img class="col-6 p-0 m-0" src="{{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg">
            <div class="col-6 pv-0 m-0"> 
                <h3> 
                    title 
                </h3>
                <p>
                    lore ipsum translated text
                </p>
            
            </div>
        </div>
        </div> 
    </div>
    <div class="card-deck mt-3">
        <div class="card">
            <div class="card-header p-0 d-flex col-12">
                <img class="col-6 p-0 m-0" src="{{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg">
                <div class="col-6 pv-0 m-0"> 
                    <h3> 
                        title 
                    </h3>
                    <p>
                        lore ipsum translated text
                    </p>
                
                </div>
            </div>
        </div> 
        <div class="card">
            <div class="card-header p-0 d-flex col-12">
                <img class="col-6 p-0 m-0" src="{{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg">
                <div class="col-6 pv-0 m-0"> 
                    <h3> 
                        title 
                    </h3>
                    <p>
                        lore ipsum translated text
                    </p>
                
                </div>
            </div>
        </div>     <div class="card">
            <div class="card-header p-0 d-flex col-12">
                <img class="col-6 p-0 m-0" src="{{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg">
                <div class="col-6 pv-0 m-0"> 
                    <h3> 
                        title 
                    </h3>
                    <p>
                        lore ipsum translated text
                    </p>
                
                </div>
            </div>
        </div> 
    </div>
    <div class="card-deck mt-3">
        <div class="card">
            <div class="card-header p-0 d-flex col-12">
                <img class="col-6 p-0 m-0" src="{{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg">
                <div class="col-6 pv-0 m-0"> 
                    <h3> 
                        title 
                    </h3>
                    <p>
                        lore ipsum translated text
                    </p>
                
                </div>
            </div>
        </div> 
        <div class="card">
            <div class="card-header p-0 d-flex col-12">
                <img class="col-6 p-0 m-0" src="{{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg">
                <div class="col-6 pv-0 m-0"> 
                    <h3> 
                        title 
                    </h3>
                    <p>
                        lore ipsum translated text
                    </p>
                
                </div>
            </div>
        </div>     <div class="card">
            <div class="card-header p-0 d-flex col-12">
                <img class="col-6 p-0 m-0" src="{{route('index')}}/design/papel-pintado-geometrico-moderno-blanco.jpg">
                <div class="col-6 pv-0 m-0"> 
                    <h3> 
                        title 
                    </h3>
                    <p>
                        lore ipsum translated text
                    </p>
                
                </div>
            </div>
        </div> 
    </div>
</main>
@include('footer')