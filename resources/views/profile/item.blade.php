@extends('layouts.main')
@section('title', 'Coffee Catalog')

@section('container')
    @foreach($category as $category)
      <a href="{{ route('category', ['id' => $category->id])}}" class="text-decoration-none text-dark d-flex justofy-content-between mx-5 mt-3">{{$category->categories_name}}</a><br>
    @endforeach

    @foreach ($subcategory->coffee as $item)
    <div class="mt-3 mx-5 mb-5" style="">
        {{$item->coffee_name}} <br>
        <img src="{{asset($item->coffee_image)}}" alt="" widht="200" height="200"><br>
        <div class="d-flex flex-row">
            <p>Rp. </p>
            {{$item->price}} <br>
        </div>
        <div class="d-flex flex-row">
            <p>Star Reward</p>
            <div class="mx-3">
                {{$item->star_reward}}<br>
            </div>
        </div>


        <form action={{route('pushTransaction')}} method="POST">
          @csrf
          <input type="hidden" value={{$item->id}} name="coffeeid">
          <button type="submit" class="btn btn-warning ml-4">Buy Coffee</button>
        </form>

    </div>
    @endforeach
@endsection

