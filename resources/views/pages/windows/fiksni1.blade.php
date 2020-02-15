@extends('layouts.app')

@section('content')
<h1>Fiksni 1</h1>
<form method="post" action="{{url('fiksni1')}}">
    <div class="form-group ">
        @csrf
        <div class=" form-group">
            <label class="col-form-label" for="sirina">Sirina</label>
            <input type="text" class="form-control col-lg-2" name="sirina" placeholder="Sirina" />
        </div>
        <div class=" form-group">
            <label class="col-form-label" for="visina">Visina</label>
            <input type="text" class="form-control col-lg-2" name="visina" placeholder="Sirina" />
        </div>
        <div class=" form-group">
            <label class="col-form-label" for="sotk metar">Stok metar</label>
            <input type="text" class="form-control col-lg-2" name="stokMetar" placeholder="Stok metar"
                value={{$stokMetar ?? ''}}>
        </div>

        <div class="py-2 float-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="py-2">
            <h3>{{$cena ?? ''}}</h3>
        </div>
    </div>
    
</form>
@endsection