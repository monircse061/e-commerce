@extends('lay_out')
@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h1 style="color: deeppink">Bkash Payment</h1>
                        <h2>Please complete your bKash payment at first,Also note that 1.85% bKash "SEND MONEY" cost will be added with net price.</h2>
                            <h2 style="color: deeppink;font-family: 'Arial Narrow';font-weight: bolder">bKash Personal Number : 01757-128711</h2>
                        {{--bKash Personal Number : 01757-128711--}}
                        <div class="img">
                            <img src="{{URL::to('frontend/images/home/send_money.jpg')}}" alt="" />

                        </div>


                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">

                </div>

            </div>

            <div class="row1">
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="login-form"><!--login form-->

                        <div class="img">
                            <img src="{{URL::to('frontend/images/home/b1.png')}}" alt="" />
                            <img src="{{URL::to('frontend/images/home/br.png')}}" alt="" />
                            <img src="{{URL::to('frontend/images/home/b2.png')}}" alt="" />
                            <img src="{{URL::to('frontend/images/home/br.png')}}" alt="" />
                            <img src="{{URL::to('frontend/images/home/b3.png')}}" alt="" />
                            <img style="margin-top: 50px;" src="{{URL::to('frontend/images/home/b4.png')}}" alt="" />
                            <img src="{{URL::to('frontend/images/home/br.png')}}" alt="" />
                            <img style="margin-top: 50px;" src="{{URL::to('frontend/images/home/b5.png')}}" alt="" />
                            <img src="{{URL::to('frontend/images/home/br.png')}}" alt="" />
                            <img style="margin-top: 50px;" src="{{URL::to('frontend/images/home/b6.png')}}" alt="" />
                        </div>

                        <form style="margin-top: 50px;" action="{{url('/bikash-payment')}}" method="post">
                            {{csrf_field()}}
                            bKash Number : <input type="text" name="bkash_number" placeholder="017XXXXXXXX">
                            bKash Transaction ID : <input type="text" name="bkash_transaction_id" placeholder="7I14HD0PDQ">
                            reference:(*must be your name) <input type="text" name="reference" placeholder="Monir">
                            <input type="submit" class=" btn btn-default" value="Done">
                        </form>

                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">

                </div>

            </div>


        </div>
    </section><!--/form-->

@endsection