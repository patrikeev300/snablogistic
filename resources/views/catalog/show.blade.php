@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="otstup">
            <div class="smes-title-str">{{ $product->Name }}</div>
            <div class="smes-articul">Артикул:{{ mt_rand(100000, 999999) }}</div>
            <div class="smes-box-str">
                <div class="smes-boxs">
                    <div class="smes-pic">
                        <img src="{{ Storage::url('public/products/' . $product->Photo_path) }}" alt="{{ $product->Name }}" class="smes-pic-bol">
                    </div>
                    <div class="smes-pic">
                        <img src="img/smes.png" alt="smes" class="smes-pic-min"><br><br><br>
                        <img src="img/smes.png" alt="smes" class="smes-pic-min"><br><br><br>
                        <img src="img/smes.png" alt="smes" class="smes-pic-min">
                    </div>
                </div>
                <div class="smes-boxs-two">
                    <div class="smes-nazn">
                        <p class="text-sves">Назначение состава: </p>
                        <p class="text-sves">{{ $product->assignment->name }}</p>
                    </div>
                    <div class="smes-nazn">
                        <p class="text-sves">Страна:</p>
                        <p class="text-sves">{{ $product->Country }}</p>
                    </div>
                    <div class="smes-nazn">
                        <p class="text-sves">Вес:</p>
                        <p class="text-sves">{{ $product->Weight }} кг</p>
                    </div>
                    <div class="smes-nazn">
                        <p class="text-sves">14 дней на возврат</p>
                    </div>
                    <div class="smes-nazn">
                        <p class="text-sves">{{ $product->Price }} руб. </p>
                    </div>
                    <div class="smes-nazn">
                        <form action="{{ route('addToCart', ['product' => $product->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-add-to-cart" {{ auth()->check() ? '' : 'disabled' }}>Добавить в корзину</button>
                        </form>
                        <form action="{{ route('addToFavorites', ['product' => $product->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="favorite-button" style="border: navajowhite; background: none;">
                                <a href="otlogenn.php" class="menu-box"><img src="/img/Hard-black.png" alt="hard"></a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="otstup">
            <div class="smes-articul">Описание</div>
            <div class="smes-articul" style="margin-bottom: 30px;">{{ $product->Description }}</div>
        </div>
    </div>
</section>

<style>
    .product-section {
        padding: 50px 0;
    }

    .product-details {
        width: 800px;
        margin: auto;
        text-align: center;
    }

    .product-name {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .product-info {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 24px;
        font-weight: bold;
        margin: 20px 0;
    }

    .btn-add-to-cart {
        background-color: #E3A623;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-add-to-cart:hover {
        background-color: #C79819;
    }

    .btn-add-to-cart:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    .product-description {
        font-size: 16px;
        line-height: 1.6;
        margin-top: 20px;
    }
</style>

@endsection
