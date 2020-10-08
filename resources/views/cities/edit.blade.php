@extends ('layout')

@section('content')
    <div id="wrapper">
        <h1>Edit city {{$city->name}}</h1>
        <form method="POST" action="/cities/{{$city->id}}">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="name">City name:</label>
                <div class="control">
                    <input 
                        class="input" 
                        type="text" 
                        name="city_name" 
                        id="city_name"
                        value="{{$city->name}}">
                </div>
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
        <a href="/cities"><button class="button is-link">Cancel</button></a>
        <form method="POST" action="/cities/{{$city->id}}">
            @csrf
            @method('DELETE')
            <button class="button is-link" type="submit">Delete city</button>
        </form>
    </div>
@endsection