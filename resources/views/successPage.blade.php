<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>فروش اینترنتی محصولات کرمان خودرو</title>

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
                        <div class="col-sm-8 col-sm-offset-2 form-box">
							<div class="form-top">
								<div class="form-top-left">
									<h3>ثبت نام با موفقیت انجام شد!</h3>
									<p>از خرید شما سپاس گزاریم</p>
								</div>
								<div class="form-top-right">
									<img src="/img/logo.png">
								</div>
							</div>
							<div class="form-bottom">

								<div class="endBtn">
									<div class="alert alert-success">کد پیگیری خرید : {{$sale->saleTrackingCode}}</div>
									<a type="button" class="btn btn-success btn-lg btn-block" href="http://www.kermanmotor.ir/">دانلود رسید ثبت نام</a><hr>
									{{--<button type="button" class="btn btn-danger btn-lg btn-block">شرکت در نظرسنجی</button>--}}
								</div>
							</div>
		                    
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

    </body>

</html>