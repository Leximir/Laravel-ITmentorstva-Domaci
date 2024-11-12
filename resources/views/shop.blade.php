@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="mb-4">Welcome to the shop page !</h2>

                <ol>
                @foreach($products as $product)

                    @if($product === 'Iphone 15' || $product === 'Nokia 3310')
                        <li>
                            <a href="">{{ $product }}</a>
                            <p> - Super snizenje</p>
                        </li>

                    @else

                            <li>
                                <a href="">{{ $product }}</a>
                            </li>

                    @endif
                @endforeach
                </ol>

            </div>
        </div>
    </div>
@endsection
