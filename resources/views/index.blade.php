<style>
    body{
        align-items: center;
        height:100vh;
    }
</style>
@include('head')
@include('header')
@isset($search)
<h1 class="p-3"> Aqui tiene sus resultados </h1>
@else
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
            <input type="text" name="search" class="wrapper w-50 shadow" style="
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

<h1 class="p-3"> Sitios de interes </h1>
@endisset


@isset($espais)
    <main class="p-3">
        
    
    @php $i = 4 @endphp
    <div>
    @foreach($espais as $espai)
        @if($i >= 3) 
            @php $i = 1 @endphp
            </div>
            <div class="card-deck mt-3">
                    <div class="card">
                    <div class="card-header p-0 d-flex col-12">
                        <a class="p-0 m-0" style="width:15vw!important; aspect-ratio:1.5 !Important;"  href="{{route("espais.show", ['espai' => $espai->id])}}">
                            <img class="p-0 h-100 m-0" style="width:15vw!important; aspect-ratio:1.5 !Important;" src="{{route('index') . ($espai->images->first()->url ?? '/design/papel-pintado-geometrico-moderno-blanco.jpg')}}">
                        </a>
                        <div class="col-6 pv-0 m-0"> 
                            <h3> 
                                {{$espai->name}}
                            </h3>
                            <p>
                                {{$espai->descripcio ?? 'lore ipsum ...'}}
                            </p>    
                        
                        </div>
                    </div>
                </div> 
                </a>
        @else
            @php $i++ @endphp

            <div class="card">
                <div class="card-header p-0 d-flex col-12">
                    <a class="p-0 m-0" style="width:15vw!important; aspect-ratio:1.5 !Important;"  href="{{route("espais.show", ['espai' => $espai->id])}}">
                        <img class="p-0 h-100 m-0"style="width:15vw!important; aspect-ratio:1.5 !Important;" src="{{route('index') . ($espai->images->first()->url ?? '/design/papel-pintado-geometrico-moderno-blanco.jpg')}}">
                    </a>
                    <div class="pv-0 m-0 ml-2" style="width:15vw! aspect-ratio:1.5 !important; overflow:hidden"> 
                        <h3> 
                            {{$espai->name}}
                        </h3>
                        <p>
                            {{$espai->descripcio ?? 'lore ipsum ...'}}
                        </p>    
                
                    </div>
                </div>
            </div> 
            </a>
        @endif
    @endforeach
    </main>
@endisset

@include('footer')