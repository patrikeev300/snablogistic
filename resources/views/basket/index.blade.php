@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">  
@section('content')  
<section>
    <div class="conteiner">
        <div class="otstup">
            <h1 class="title-text-black">Корзина</h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="otst-fif">
            <form action="{{ route('basket.create') }}" method="POST">
                @csrf
                <div class="korxina-boxs">
                    @foreach($basketItems as $item)
                        <div class="card-korzina">
                            <div>
                                <img src="{{ Storage::url('public/products/' . $item->product->Photo_path) }}" alt="{{ $item->product->Name }}" class="smes-korz">
                            </div>
                            <div class="card-korzina-chast">
                                <p class="smes-title">{{ $item->product->Name }}</p>
                                <p class="smes-text">{{ $item->product->Description }}</p>
                                <div class="korzina-text-dop">
                                    <p class="smes-title">Размер: {{ $item->product->Weight }} кг.</p>
                                    <p class="smes-title">Цена: {{ $item->product->Price }} руб.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-korzina-itog">
                    <div class="smes-nazn">
                        <p class="text-korzina-itog">Товары:</p>
                        <p class="text-korzina-itog-two">{{ $basketItems->count() }} шт.</p>
                    </div>
                    <div class="smes-nazn">
                        <p class="text-korzina-itog">Итог:</p>
                        <p class="text-korzina-itog-two">{{ $totalPrice }} руб.</p>
                    </div>
                    <div class="mesto">
                        <button type="button" class="btn-os mesto" data-toggle="modal" data-target="#orderModal">Перейти к оформлению</button>
                    </div>
                    <p class="ruls-korz">Вы принимаете условия Публичной оферты</p>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="modal fade modal-styled" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Оформление заказа</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
    <form action="{{ route('basket.create') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="address">Адрес доставки</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        @foreach($basketItems as $basketItem)
            <input type="hidden" name="ID_Product[]" value="{{ $basketItem->product->id }}">
        @endforeach

        <div class="form-group">
            <label for="commentary">Комментарий к заказу</label>
            <textarea class="form-control" id="commentary" name="commentary" rows="3"></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary">Отправить заказ</button>
        </div>
    </form>
</div>

        </div>
    </div>
</div>



<style>
    .container {
        margin: auto;
    }

    
    a:hover{
        color:#fff;
        text-decoration:none;
    }
    .modal-backdrop {
    position: relative;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}

    .otstup {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .title-text-black {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .otst-fif {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .korxina-boxs {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .card-korzina {
        width: 60%;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 20px;
    }

    .card-korzina img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .card-korzina-chast {
        /* display: flex; */
        justify-content: space-between;
        align-items: center;
    }

    .korzina-text-dop {
        /* flex: 0 0 70%; */
    }

    .korzina-text-img {
        flex: 0 0 25%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .checkbox {
        margin-right: 10px;
    }

    .btn-os {
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

    .btn-os:hover {
        background-color: #C79819;
    }

    .ruls-korz {
        font-size: 12px;
        margin-top: 10px;
    }

    .text-korzina-itog {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .text-korzina-itog-two {
        font-size: 18px;
        font-weight: bold;
    }
</style>

@endsection
