<!DOCTYPE html>
<html lang="fa">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>::فروش اینترنتی محصولات کرمان خودرو::</title>

        <!-- CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-rtl.css">
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
                            <h1>فروش اینترنتی محصولات کرمان خودرو</h1>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 form-box">
                        	
                        	<form role="form" action="/saleRegister" method="post" enctype="multipart/form-data" class="registration-form">
                        		<fieldset>
                                    {{csrf_field()}}
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>مرحله 1 / 4</h3>
		                            		<p>خودرو مورد نظر را انتخاب نمایید :</p>
		                        		</div>
		                        		<div class="form-top-right">
											<img src="/img/logo.png">
										</div>
		                            </div>
		                            <div class="form-bottom">
										@foreach($cars as $car)
										<!-- CarNo = {{$car->carNo}} -->
										<div class="carBox">
											<div class="carContent">
												<h3>{{$car->carNameLookups->name}}</h3>
												<h4>{{$car->carModel}}</h4>
												<a carNo="{{$car->carNo}}" class="btn-next" href="/getTermsOfSale/{{$car->carNo}}"><img src="/img/cars/{{$car->carNo}}.png" alt="{{$car->carNameLookups->name}}"></a>
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
											<h3>مرحله 2 / 4</h3>
											<p>شرایط فروش را انتخاب نمایید :</p>
										</div>
										<div class="form-top-right">
											<img src="/img/logo.png">
										</div>
									</div>
		                            <div class="form-bottom">
										<div class="table-responsive">
											<table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
												<tr>
													<th>انتخاب</th>
													<th>نوع فروش</th>
													<th>توضیحات</th>
													<th>قیمت تمام شده</th>
													<th>پرداخت اولیه</th>
												</tr>
												</thead>
												<tbody>
												@foreach($termsOfSale as $termOfSale)
													<tr class="gradeX" carNo="{{$termOfSale->car_carNo}}">
														<td style="text-align: center" value="{{$termOfSale->initialPrice}}"><input type="radio" name="termOfSale_termOfSaleNo" value="{{$termOfSale->termOfSaleNo}}"></td>
														<td>{{$termOfSale->saleTypeLookup->saleType}}</td>
														<td>{{$termOfSale->description}}</td>
														<td class="number">{{$termOfSale->cost}}</td>
														<td class="number" price>{{$termOfSale->initialPrice}}</td>
													</tr>
												@endforeach
												</tbody>
											</table>
										</div>
				                        <button type="button" class="btnF btn-previous">قبلی</button>
				                        <button type="button" class="btnF btn-next">بعدی</button>
				                    </div>
									<script>
										$(document).ready( function() {
											var XcarNo;
											$('a[carNo]').on('click', function () {
												XcarNo=$(this).attr("carNo");
												$("tr[carNo]").hide();
												$("tr[carNo="+XcarNo+"]").show();
											});

                                           //var Xprice = $("tr:has(td:checked)>td[price]").text();
//                                            var Xprice= $("td input[type='radio']:checked").attr("value");
                                            var Xprice= $("td input[type='radio']").attr("value");
                                            if(Xprice){
//                                                alert($("td input[type='radio']:checked").ifCttr("value"));
                                            }
                                            $("button[billing]").text("مبلغ قابل پرداخت برای ثبت نام : " + Xprice);


										});
									</script>
			                    </fieldset>
			                    
			                    <fieldset>
									<div class="form-top">
										<div class="form-top-left">
											<h3>مرحله 3 / 4</h3>
											<p>مشخصات خود را وارد نمایید: :</p>
										</div>
										<div class="form-top-right">
											<img src="/img/logo.png">
										</div>
									</div>
									<div class="form-bottom">
										<div class="form-group">
											<label class="sr-only">نام</label>
											<input type="text" name="name" placeholder="نام..." class="form-control">
										</div>
										<div class="form-group">
											<label class="sr-only">نام خانوادگی</label>
											<input type="text" name="family" placeholder="نام خانوادگی..." class="form-control">
										</div>
										<div class="form-group">
											<label class="sr-only">شماره شناسنامه</label>
											<input type="text" name="id" placeholder="شماره شناسنامه..." class="form-control">
										</div>
										<div class="form-group">
											<label class="sr-only">شماره ملی</label>
											<input type="text" name="nationalCode" placeholder="شماره ملی..." class="form-control">
										</div>
										<div class="form-group">
											<label class="sr-only">تلفن ثابت</label>
											<input type="text" name="phoneNo" placeholder="تلفن ثابت..." class="form-control">
										</div>
										<div class="form-group">
											<label class="sr-only">"تلفن همراه</label>
											<input type="text" name="mobileNo" placeholder="تلفن همراه..." class="form-control">
										</div>
										<div class="form-group">
											<label class="sr-only">شهر محل سکونت</label>
											<input type="text" name="city" placeholder="شهر محل سکونت..." class="form-control">
										</div>
										<div class="form-group">
											<label class="sr-only">آدرس</label>
											<textarea type="text" name="address" placeholder="آدرس..." class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label class="">بارگذاری تصویر کارت ملی :</label>
											<input type="file" name="nationalCard" class="form-control">
										</div>

										<button type="button" class="btnF btn-previous">قبلی</button>
										<button type="button" class="btnF btn-next">بعدی</button>
									</div>
								</fieldset>

								<fieldset>
									<div class="form-top">
										<div class="form-top-left">
											<h3>مرحله 4 / 4</h3>
											<p>مشخصات خود را وارد نمایید: :</p>
										</div>
										<div class="form-top-right">
											<img src="/img/logo.png">
										</div>
									</div>
									<div class="form-bottom">
                                        <div style="margin: 2em">
                                            <button billing type="button" class="btn btn-success btn-lg btn-block noState">مبلغ قابل پرداخت برای ثبت نام : </button><hr>
                                            <button type="submit" class="btn btn-danger btn-lg btn-block">پرداخت</button>
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
			$(document).ready(function(){
				$("body").persiaNumber();
			});
		</script>
        <!--[if lt IE 10]>
            <script src="/js/placeholder.js"></script>
        <![endif]-->

		<script>
			$(".carContent>a").click(function()
			{
				$.ajax({
					url : $(this).attr("href"),
					success : function (data) {
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

$('.number').number( true, 0 )

		</script>

    </body>

</html>