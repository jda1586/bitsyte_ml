@extends('layouts.main')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/owl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/owl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/forms/icheck/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/checkboxes-radios.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/validation/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/switch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/pickers/daterange/daterange.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/extensions/toastr.css') }}">
@endsection

@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">New User</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        @include('layouts.partial.breadcrumbs')
                    </ol>
                </div>
            </div>
        </div>
        <div id="bred-graph" class="content-header-right col-md-6 col-xs-12">
            <div class="media width-250 float-xs-right">
                <div class="media-left media-middle">
                    <div id="sp-bar-total-sales"></div>
                </div>
                <div class="media-body media-right text-xs-right">
                    <h3 class="m-0">$5,668</h3><span class="text-muted">Sales</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <section id="register" class="card ">
        <div class="card-header">
            <h4 class="card-title">New User</h4>
        </div>
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form id="newuser" class="steps-validation wizard-circle"
                                  action="{{ route('users.store') }}"
                                  method="post">
                                {{ csrf_field() }}
                                <h6>Step 1</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 ">
                                            <div class="" style="">
                                                {{--<div class="">--}}
                                                <div class="card-header">
                                                    <h4 class="card-title">Select a Package</h4>
                                                </div>

                                                <!--Carousel-->
                                                <div id="owl-carousel" class="">
                                                    @foreach($products as $product)
                                                        <div class="slide-item carousel-slide-item">
                                                            <div class="image-box">
                                                                <img id="slide-{{$product->id}}"
                                                                     src="{!!   asset('backoffice/images')."/".$product->name.".png" !!}"
                                                                     class="carousel-img">
                                                            </div>
                                                            <div class="item-caption carousel-item-caption">
                                                                <h6><strong>Package Golden</strong></h6>
                                                                <div class="row skin skin-line">
                                                                    <div id="radio{{$product->id}}"
                                                                         class="col-md-12 col-sm-12"
                                                                         style="word-break: break-all;">
                                                                        <input type="radio" name="product_id"
                                                                               id="input-radio-{{$product->id}}"
                                                                               data="{{$product->name."-".$product->price}}"
                                                                               value="{{$product->id}}">
                                                                        <label id="name-{{$product->id}}"  for="input-radio-{{$product->id}}">{{$product->name}}</label>
                                                                        <p >price: {{$product->price}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <h6>Step 2</h6>
                                <fieldset>
                                    <h4 class="form-section"><i class="ft-user"></i>Login Data</h4>
                                    <div class="row">
                                        @if(env('APP_LOGIN_WITH')== "email")
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="userinput5">Email <span
                                                                class="required">*</span></label>
                                                    <div class="controls">
                                                        <input name="email" id="email" required type="email"
                                                               class="form-control border-primary"
                                                               placeholder="Email"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>

                                        @else
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="username">Username<span
                                                                class="required">*</span></label>
                                                    <div class="controls">
                                                        <input id="username" name="username"
                                                               class="form-control border-primary"
                                                               placeholder="Username" required
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="password">Password <span class="required">*</span></label>
                                            <div class="controls">
                                                <input name="password" id="password" required type="password"
                                                       placeholder="Password" class="form-control border-primary"
                                                       data-validation-required-message="This field is required">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="confirmation">Confirmation Password <span
                                                        class="required">*</span></label>
                                            <div class="controls">
                                                <input name="password_confirmation" id="confirm_password"
                                                       class="form-control border-primary" type="password"
                                                       placeholder="Confirmation Password"
                                                       data-validation-match-match="password"
                                                       required
                                                       data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="form-section"><i class="ft-mail"></i> User Data </h4>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">Fist Name
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="controls">
                                                    <input type="text" id="first_name"
                                                           class="form-control border-primary"
                                                           placeholder="Fist Name" name="first_name" required
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name <span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" id="last_name"
                                                           class="form-control border-primary"
                                                           placeholder="Last Name" name="last_name" required
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="birthday">Birthday <span class="required">*</span></label>
                                                <div class="controls">
                                                    <input name="birthday" id="Birthday" type="date"
                                                           class="form-control"
                                                           data-toggle="tooltip" data-trigger="hover"
                                                           data-title="birthday" data-placement="top" required
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>
                                        @if(env('APP_LOGIN_WITH')== "email")
                                            <div class="col-md-6">
                                                <label for="username">Username<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input id="username" name="username"
                                                           class="form-control border-primary"
                                                           placeholder="Username" required
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="userinput5">Email <span
                                                                class="required">*</span></label>
                                                    <div class="controls">
                                                        <input name="email" id="email" required
                                                               class="form-control border-primary" type="email"
                                                               placeholder="Email"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                </fieldset>

                                <h6>Step 3</h6>
                                <fieldset>

                                    <h4 class="form-section"><i class="ft-mail"></i> Billing Details </h4>

                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <div class="">
                                                <img id="img-resumen" src="{!!   asset('backoffice/images')."/".$products[0]['name'].".png" !!}">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <div><label for="userinput5"><b>Product Name:</b></label></div>
                                            <div><label id="label-resumen" ></label></div>
                                            <div><label id="price-resumen"><b>Price:</b>{{$products[0]['price']}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-5">
                                            {{--<label for="userinput5"></label>--}}
                                            <div class="col-md-3">
                                                <div style="width: 100%">
                                                    <span class="icon-transfer"><i
                                                                class="icon-wallet icon-tam"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select id="projectinput5" name="interested" class="form-control"
                                                        style="margin-top: 25px">
                                                    <option value="none" selected="" disabled="">select a wallet</option>
                                                    @foreach($wallets as $wallet)
                                                        <option value="design">{{ "name".$wallet->name."-balance".$wallet->balance }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-2" style="margin-left: 40%;">
                                            <input id="submit" class="btn btn-primary btn-min-width mr-1 mb-1"
                                                   type="button" value="Pay now">
                                        </div>
                                    </div>


                                </fieldset>

                                <h6>Step 4</h6>
                                <fieldset>
                                    <div class="form-group" style="margin:auto;width:330px;height: 160px">

                                        <img src="{{ asset('backoffice/images/bitsyte_logo.png') }}" alt="">
                                        <h6>Congratulations</h6>
                                        <p>
                                            Thank you for signing up
                                        </p>
                                    </div>

                                </fieldset>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

    </section>

@endsection

@section('scripts')
    <script src="{{ asset('backoffice/assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('backoffice/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"
            type="text/javascript"></script>
    {{--<script src="{{ asset('backoffice/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript"></script>--}}

    {{--<script src="{{ asset('backoffice/app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>--}}
    {{--<script src="{{ asset('backoffice/app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>--}}
    <script src="{{ asset('backoffice/app-assets/vendors/js/extensions/jquery.steps.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/vendors/js/pickers/daterange/daterangepicker.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/js/scripts/forms/wizard-steps.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/js/scripts/forms/checkbox-radio.js')}}"
            type="text/javascript"></script>
    {{--<script src="{{ asset('backoffice/app-assets/js/scripts/forms/validation/form-validation.js')}}" type="text/javascript"></script>--}}
    <script src="{{ asset('backoffice/app-assets/vendors/js/extensions/toastr.min.js') }}"
            type="text/javascript"></script>




    <script>
        //Four Column Slider
        const tree = "{{ route('trees.binary') }}";
        const home = "{{ route('home') }}";
        var owl = $('#owl-carousel');
        owl.owlCarousel({
            loop: false,
            center: true,
            autoWidth: true,
            margin: 30,
            nav: true,
            autoplayHoverPause: true,
            autoplay: 0,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                540: {
                    items: 1
                },
                720: {
                    items: 1
                },
                1024: {
                    items: 3
                },
                1100: {
                    items: 3
                }
            }
        });

        function item() {
            owl.trigger('to.owl.carousel', 1);
        }

        item();

        $("[id^='slide-']").on("click", function () {
            var slide = $(this).attr('id');
            let b = slide.split('-');
            seleccionar(b[1]);
        });

        function seleccionar(num) {
            $('#radio' + num).find(".iCheck-helper").trigger("click");
            var data =$('#input-radio-' + num).attr("data");
            console.log(data);
            ponerprecio(data);
            /*var price =$('#input-radio-' + num).attr("price");
            console.log(price);*/
        }

        function ponerprecio(data) {
            console.log(data);
            let b = data.split('-');
            console.log(b);

            $('#img-resumen').attr('src', '{{ asset('backoffice/images') }}'+'/'+b[0]+'.png');
            $('#label-resumen').text(b[0]);
            $('#price-resumen').text('Price: '+ b[1]);
        }

        $("#submit").on("click", function () {
            var slide = $(this).attr('id');
            console.log(slide);
            let url = "{{ route('users.store') }}";
            console.log(url);
            toastr.info('yoour pay was exito.', 'user pay!', {
                positionClass: 'toast-top-center', containerId: 'toast-top-center',
                "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 8000
            });
            $("#newuser").submit();

        });

        $("#newuser").submit(function (e) {
            console.log("entro");
            var postData = $(this).serializeArray();
            var formURL = $(this).attr("action");
            console.log(formURL);
            $.ajax({
                url: formURL,
                type: "POST",
                data: postData,
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    let result = JSON.parse(data);
                    console.log(result);
                    if (result.ok === "ok") {
                        console.log("bien");
                        $("a[href='#previous']").hide();
                        $("#alertS").show();
                    } else {
                        console.log("error");
                        $("#alertE").show();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log("error");
                    alert("error try letter");
                }
            });
        });

        function submit() {
            console.log("entro");
//            document.getElementById("myForm").submit();
            $("#theForm").ajaxForm({url: 'server.php', type: 'post'})
        }

        function modal() {
            console.log("modal");
            $('#modal').trigger("click")
        }

    </script>

@endsection
