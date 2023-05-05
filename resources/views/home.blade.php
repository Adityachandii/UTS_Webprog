@extends('layouts.main')
@section('title', 'Starbuck Homepage')

@section('container')
<div class="starreward">
    <div class="atasstarreward d-flex flew-row mb-1 pt-3 px-5 py-5 pb-0">
        <h1>150</h1>
        <img src="iconstargreen.png" alt="" width="4%" height="4%">
    </div>
    <div class="text pt-0 px-5 py-5 pb-2">
        <h6>Star Balanced</h6>
    </div>
    {{-- ini ga paham, ini yg bubble" pencapaian reward --}}
</div>

<div class="news">
    <img src="mainpicture.jpg" class="rounded mx-auto d-block" alt="" width="85%">
</div>

<div class="promoinformation">
    <div class="px-5 pt-5">
        <h1>Promo Information</h1>
    </div>

    <div class="information pt-2 px-5 py-5 pb-5 d-flex flex-row">
        <div class="pict">
            <img src="information1.jpg" alt="" width="300" height="200" class="rounded">
        </div>
        <div class="titelinformation px-5">
            <h3>Coffeemezation</h3>
            <div class="isiinformation">
                <h6>Get creative & mix and match your favorite ingredient to make yourperfect beverage. Whether you're in the mood for something sweet and refreshing or something bold and spicy, the possibilities are endless</h6>
            </div>
        </div>
    </div>

    <div class="information pt-2 px-5 py-5 pb-5 d-flex flex-row">
        <div class="pict">
            <img src="information2.jpg" alt="" width="300" height="200"  class="rounded">
        </div>
        <div class="titelinformation px-5">
            <h3>Refer A Friend</h3>
            <div class="isiinformation">
                <h6>Share your Referral Code with family and friend who are not yet a Starbucks Rewards member. Successfully entered referral codes will grant both of you IDR25K off Reward (valid with min.purchase of IDR 50K)</h6>
            </div>
        </div>
    </div>

    <div class="information pt-2 px-5 py-5 pb-5 d-flex flex-row">
        <div class="pict">
            <img src="information3.jpg" alt="" width="300" height="200" class="rounded">
        </div>
        <div class="titelinformation px-5">
            <h3>Mobile Order</h3>
            <div class="isiinformation">
                <h6>Simply order ahead, skip the cashier line, and pick up your favorite items directyly. All you have to do is submit your order via the Starbucks mobile app! Make any purchase with min.IDR 49K & get a Reward 50% off Beverage (applies with any food purchase) & 5 Bonus Stars</h6>
            </div>
        </div>
    </div>

    <div class="information pt-2 px-5 py-5 pb-5 d-flex flex-row">
        <div class="pict">
            <img src="information4.jpg" alt="" width="300" height="200" class="rounded">
        </div>
        <div class="titelinformation px-5">
            <h3>Online Top Up IDR 300K & Get Rewarded</h3>
            <div class="isiinformation">
                <h6>Try our online Starbucks balance top-ip feature on Starbucks App! it is supper easy to top up and you will get extra 30 Stars when you reload for min.IDR 300K</h6>
            </div>
        </div>
    </div>

    <div class="coffeebutton" >
        <div class="fw-bold p-5", style="text-align: right" >
            <a href="{{route('category', ['id' => 1])}}" class="text-decoration-none text-dark"><h1>COFFEE</h1></a>
        </div>
    </div>
</div>
@endsection

