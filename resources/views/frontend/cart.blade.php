<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beli Barang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('/assets/images/logojersey.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
				
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
					<img src="{{asset('/assets/images/logojersey.png')}}" alt="IMG-LOGO"><i><font color="Black">&nbsp Jersey Bola</font></i></img>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="/">Home</a>
							
							</li>

						</ul>
					</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{asset('images/icons/icon-close2.png') }}" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{asset('images/item-cart-01.jpg') }}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{asset('images/item-cart-02.jpg') }}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{asset('images/item-cart-03.jpg') }}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- breadcrumb -->
	<!-- <div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div> -->
		

	<!-- Shoping Cart -->
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<form method="post" action="{{url('cart/edit/'.Auth::user()->id)}}">

							{{csrf_field()}}
							<!-- <input name="_method" type="hidden" value="PATCH"> -->
							<div class="wrap-table-shopping-cart">
								<table class="table-shopping-cart">
									<tr class="table_head">
										<th class="column-1">Gambar</th>
										<th class="column-2">Nama</th>
										<th class="column-3">Harga</th>
										<th class="column-4">Jumlah</th>
										<th class="column-5">Total</th>
										<th class="column-6">Action</th>
									</tr>

									@php
										$total_all = 0;
										$cart = \App\Cart::where('user_id', \Auth::user()->id)->get();
									@endphp

									@foreach($cart as $data)
									@php 
										$t_s = $data->jumlah_brg * $data->product->harga;
										$total_all = $total_all + $t_s;
									@endphp
									<input type="hidden" name="id[]" value="{{$data->id}}">
									<tr class="table_row">
										<td class="column-1">
											<div class="how-itemcart1">
												<img src="{{asset('assets/images/avatar/'.$data->product->gambar) }}" alt="IMG">
											</div>
										</td>
										<td class="column-2">{{$data->product->nama}}</td>
										<td class="column-3">{{number_format($data->product->harga,2,',','.')}}</td>
										<td class="column-4">
											<div class="wrap-num-product flex-w m-l-auto m-r-0">
												<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-minus"></i>
												</div>

												<input class="mtext-104 cl3 txt-center num-product" type="number" name="jumlah_brg[]" value="{{$data->jumlah_brg}}">

												<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-plus"></i>
												</div>
											</div>
										</td>
										<td class="column-5">{{number_format($data->jumlah_brg * $data->product->harga,2,',','.')}}</td>
										<td>
											<a href="{{url('cart/delete', $data->id)}}" class="btn btn-danger">X</a>
										</td>
									</tr>
									@endforeach
								</table>
							</div>

							<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">

								<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
									<button type="submit">Update Cart</button>
								</div>
							</div>

						</form>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Semua Total
						</h4>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<form action="{{ url('checkout/'.Auth()->user()->id) }}" method="post" enctype="multipart/form-data" >
						  		{{ csrf_field() }}
						  		<input type="hidden" name="chart" value="{{$cart}}">
						  		<div class="size-208">
									<span class="mtext-101 cl2">
										Total:  Rp.{{number_format($total_all,2,',','.')}}
									</span>
								</div>
						  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
						  			<label class="control-label">Alamat</label>	
						  			<textarea name="alamat" class="form-control"  required></textarea> 
						  			@if ($errors->has('alamat'))
			                            <span class="help-block">
			                                <strong>{{ $errors->first('alamat') }}</strong>
			                            </span>
			                        @endif
						  		</div>

						  		<div class="form-group {{ $errors->has('no_tlp') ? ' has-error' : '' }}">
						  			<label class="control-label">No Telepon</label>	
						  			<input type="number" name="no_tlp" class="form-control"  required>
						  				@if ($errors->has('no_tlp'))
			                            <span class="help-block">
			                                <strong>{{ $errors->first('no_tlp') }}</strong>
			                            </span>
			                        @endif
						  		</div>

								<div class="form-group {{ $errors->has('pembayaran') ? ' has-error' : '' }}">
						  			<label class="control-label">Pembayaran</label>
						  			<select class="form-control" name="pembayaran" required>
															<option>Transfer</option>
															<option>Bayar ditempat</option>
														</select>
						  			@if ($errors->has('pembayaran'))
			                            <span class="help-block">
			                                <strong>{{ $errors->first('pembayaran') }}</strong>
			                            </span>
			                        @endif
						  		</div>

						  		<div class="form-group {{ $errors->has('pengiriman') ? ' has-error' : '' }}">
						  			<label class="control-label">Pengiriman</label>
						  			<select class="form-control" name="pengiriman" required>
															<option>JNE</option>
															<option>J&T</option>
															<option>Indah Cargo</option>
															<option>Lega Paket</option>
														</select>
						  			@if ($errors->has('pengiriman'))
			                            <span class="help-block">
			                                <strong>{{ $errors->first('pengiriman') }}</strong>
			                            </span>
			                        @endif
						  		</div>

						  		<div class="form-group {{ $errors->has('cek_pembayaran') ? ' has-error' : '' }}">
						  			<label class="control-label">Cek transfer</label>
						  			<td>
										<a href="https://www.jne.co.id" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
										<img src="{{asset('images/jne.jpg')}}" width="70" height="40">
										</a>
									</td>
									<td>
										<a href="https://www.jet.co.id/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
										<img src="{{asset('images/j&t1.png')}}" width="65" height="30">
									</td>
									<td>
										<a href="https://indahonline.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
										<img src="{{asset('images/indah-cargo.png')}}" width="80" height="50">
									</td>
									<td>
										<a href="https://legapaket.com/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
										<img src="{{asset('images/legapaket.png')}}" width="80" height="50">
									</td>
						  		</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									
								</span>
							</div>
						</div>

							<button  type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
								Proceed to Checkout
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	
		

	<!-- Footer -->
	@include('frontend.contact')


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js') }}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js') }}"></script>

</body>
</html>