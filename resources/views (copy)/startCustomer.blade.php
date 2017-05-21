<!DOCTYPE html>
<html lang="fa">

<head>


<link rel="icon" href="/img/favicons/favicon.png"/>
<link rel="apple-touch-icon" href="/img/favicons/touch-icon-iphone.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/touch-icon-ipad.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/touch-icon-iphone-retina.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/touch-icon-ipad-retina.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AutoTrader | Signup a brand new car</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/form-elements.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/1-col-portfolio.css" rel="stylesheet">


    <script src="/js/jquery-1.9.1.js"></script>
{{--<script src="/js/jquery-1.11.1.min.js"></script>--}}

<!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">

</head>

<body>

<!-- Top menu -->

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1>Own a new car within a few click</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 form-box">

                    <form role="form" action="/saleRegister" method="post" enctype="multipart/form-data"
                          class="registration-form">
                        <fieldset>
                            {{csrf_field()}}
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Step 1 / 4</h3>
                                    <p>Choose from the following cars</p>
                                </div>
                                <div class="form-top-right">
                                    <img src="/img/autotrader.svg">
                                </div>
                            </div>
                            <div class="form-bottom">
                            @foreach($cars as $car)
                                <!-- CarNo = {{$car->carNo}} -->
                                    <div class="carBox">
                                        <div class="carContent">
                                            <h3>{{$car->carNameLookups->name}}</h3>
                                            <h4>{{$car->carModel}}</h4>
                                            <a carNo="{{$car->carNo}}" class="btn-next"
                                               href="/getTermsOfSale/{{$car->carNo}}"><img
                                                        src="/img/cars/{{$car->carNo}}.png"
                                                        alt="{{$car->carNameLookups->name}}"></a>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                            <script>
                                //										$(document).ready( function() {
                                //											var carNo;
                                //											$('.carContent>a[value]').on('click', function () {
                                //												carNo=$(this).attr("carNo");
                                //											});
                                //										});
                            </script>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Step 2 / 4</h3>
                                    <p>Choose the sale offer</p>
                                </div>
                                <div class="form-top-right">
                                    <img src="/img/autotrader.svg">
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                           id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Sale Type</th>
                                            <th>Detail</th>
                                            <th>Final Price</th>
                                            <th>Initial Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($termsOfSale as $termOfSale)
                                            <tr class="gradeX" carNo="{{$termOfSale->car_carNo}}">
                                                <td style="text-align: center"><input type="radio"
                                                                                      name="termOfSale_termOfSaleNo"
                                                                                      value="{{$termOfSale->termOfSaleNo}}" price="{{$termOfSale->initialPrice}}
                                                    ">
                                                </td>
                                                <td>{{$termOfSale->saleTypeLookup->saleType}}</td>
                                                <td>{{$termOfSale->description}}</td>
                                                <td class="number">{{$termOfSale->cost}}</td>
                                                <td class="number" price>{{$termOfSale->initialPrice}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btnF btn-previous">Previous</button>
                                <button type="button" class="btnF btn-next">Next</button>
                            </div>
                            <script>

                                $("input[name=termOfSale_termOfSaleNo]:radio").change(function () {
                                    var Xprice = $("input[name=termOfSale_termOfSaleNo]:checked").attr("price");

                                    $("button[billing]").text("Initial cost to pay : " + Xprice);
                                });
                            </script>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Step 3 / 4</h3>
                                    <p>Fill your personal informations</p>
                                </div>
                                <div class="form-top-right">
                                    <img src="/img/autotrader.svg">
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only">First Name</label>
                                    <input type="text" name="name" placeholder="First Name..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Last Name</label>
                                    <input type="text" name="family" placeholder="Last Name..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Driver License No.</label>
                                    <input type="text" name="id" placeholder="Driver License No...." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">National Identification Number</label>
                                    <input type="text" name="nationalCode" placeholder="National Identification Number..."
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Landline Phone Number</label>
                                    <input type="text" name="phoneNo" placeholder="Landline Phone Number..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Mobile Number</label>
                                    <input type="text" name="mobileNo" placeholder="Mobile Number..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">City</label>
                                    <input type="text" name="city" placeholder="City..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Address</label>
                                    <textarea type="text" name="address" placeholder="Address..."
                                              class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="">Upload an ID card </label>
                                    <input type="file" name="nationalCard" class="form-control">
                                </div>

                                <button type="button" class="btnF btn-previous">Previous</button>
                                <button type="button" class="btnF btn-next">Next</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Step 4 / 4</h3>
                                    <p>Peyment</p>
                                </div>
                                <div class="form-top-right">
                                    <img src="/img/autotrader.svg">
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div style="margin: 2em">
                                    <button billing type="button" class="btn btn-success btn-lg btn-block noState">Initial peyment price :
                                    </button>
                                    <hr>
                                    <button type="submit" class="btn btn-danger btn-lg btn-block">Pay</button>
                                </div>
                            </div>
                        </fieldset>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script src="/js/persianumber.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.backstretch.min.js"></script>
<script src="/js/retina-1.1.0.min.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/jquery.number.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("body").persiaNumber();
    });
</script>
<!--[if lt IE 10]>
<script src="/js/placeholder.js"></script>
<![endif]-->

<script>
    $(".carContent>a").click(function () {
        $.ajax({
            url: $(this).attr("href"),
            success: function (data) {
                $("#dynamicContent").html(data);
            }
        });
        return false;
    });
</script>

<script>

    //			jQuery(function($) {
    //				$("td[number]").autoNumeric('set', value);
    //			});

    $('.number').number(true, 0)

</script>

</body>

</html>