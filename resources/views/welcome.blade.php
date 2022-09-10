
@extends('templates.template')
@section('content')
<div class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<x-header :categorias="$categorias"/>

	<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					<div class="item-slide">
						<img src="imagens/slides/main-slider-1-1.jpeg" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title"><b>Moda</b> Feminina</h2>
							<span class="subtitle">Compre todos seus produtos no conforto de sua casa.</span>
							<p class="sale-info">A partir: <span class="price">$19.99</span></p>
							<a href="#" class="btn-link">Compre agora</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="imagens/slides/main-slider-1-2.jpg" alt="" class="img-slide">
						<div class="slide-info slide-2">
							<h2 class="f-title">Extra 25% Off</h2>
							<span class="f-subtitle">On online payments</span>
							<h4 class="s-title">Get Free</h4>
							<p class="s-subtitle">TRansparent Bra Straps</p>
						</div>
					</div>
					<div class="item-slide">
						<img src="imagens/slides/main-slider-1-3.jpg" alt="" class="img-slide">
						<div class="slide-info slide-3">
							<h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
							<span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
							<p class="sale-info">Stating at: <b class="price">$225.00</b></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
				</div>
			</div>

			<!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="assets/images/home-1-banner-1.jpg" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="assets/images/home-1-banner-2.jpg" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>

			<!--On Sale-->
			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">Disponíveis</h3>
				<div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
					@foreach ($produtosDisponiveis as $produto)
						<div class="product product-style-2 equal-elem ">
							@php
								$path = '/' . 'imagens/' . (!empty($produto->subcategoria->path) ? ($produto->subcategoria->path . '/') : '/');
								$imagemFirst = !empty($produto->imagens->first()->imagem) ? $produto->imagens->first()->imagem : 'sem-imagem.jpg';
							@endphp
							<div class="product-thumnail">
								<a href="{{ route('produtos.detalhe', ['id' => $produto->id]) }}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
									<figure><img src="{{ $path . $imagemFirst }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
								</a>
								<div class="group-flash">
									<span class="flash-item sale-label">sale</span>
								</div>
								<div class="wrap-btn">
									<a href="#" class="function-link">quick view</a>
								</div>
							</div>
							<div class="product-info">
								<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
								<div class="wrap-price"><span class="product-price">$250.00</span></div>
							</div>
						</div>
					@endforeach
				</div>
			</div>

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Produto recentes</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="assets/images/digital-electronic-banner.jpg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">						
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
									@foreach ($produtosRecentes as $produto)
										@php
											$path = '/' . 'imagens/' . (!empty($produto->subcategoria->path) ? ($produto->subcategoria->path . '/') : '/');
											$imagemFirst = !empty($produto->imagens->first()->imagem) ? $produto->imagens->first()->imagem : 'sem-imagem.jpg';
										@endphp
										<div class="product product-style-2 equal-elem ">
											<div class="product-thumnail">
												<a href="{{ route('produtos.detalhe',  ['id' => $produto->id]) }}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
													<figure><img src="{{ $path . $imagemFirst }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
												</a>
												<div class="group-flash">
													@if ($produto->novo == 1)
														<span class="flash-item new-label">Novo</span>
													@endif
													@if ($produto->quantidade > 0)
														<span class="flash-item sale-label">Disponível</span>
													@else
														<span class="flash-item sale-label">Sem estoque</span>
													@endif
													@if ($produto->novo == 1)
														<span class="flash-item bestseller-label">Mais vendidos</span>
													@endif
												</div>
												<div class="wrap-btn">
													<a href="#" class="function-link">quick view</a>
												</div>
											</div>
											<div class="product-info">
												<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
												<div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> </div>
											</div>
										</div>
									@endforeach

								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="assets/images/fashion-accesories-banner.jpg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							@foreach ($subcategorias as $key => $subcategoria)
								<a href="{{ '#fashion_'. $key .'a'  }}" class="{{ $key == 0 ? 'tab-control-item active' : 'tab-control-item'}}">{{ ucfirst($subcategoria->descricao ?? '- - -') }}</a>
							@endforeach
						</div>
						<div class="tab-contents">
							@foreach ($subcategorias as $key => $subcategoria)
								@php
								 	$path = '/' . 'imagens/' . (!empty($subcategoria->path) ? ($subcategoria->path . '/') : '/');
								@endphp
								<div class="{{ $key == 0 ? 'tab-content-item active' : 'tab-content-item'}}" id="{{ 'fashion_'. $key .'a'  }}">
									<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
										@foreach ($subcategoria->produtos as $count => $produto)
											<div class="product product-style-2 equal-elem ">
												@php
													$imagemFirst = !empty($produto->imagens->first()->imagem) ? $produto->imagens->first()->imagem : 'sem-imagem.jpg';
												@endphp
												<div class="product-thumnail">
													<a href="{{ route('produtos.detalhe', ['id' => $produto->id]) }}" title="{{ $produto->nome ?? '' }}	">
														<figure><img src="{{ $path . $imagemFirst }}" width="800" height="800" alt="{{ $produto->nome ?? '' }}	"></figure>
													</a>
													<div class="group-flash">
														<span class="flash-item new-label">new</span>
													</div>
													<div class="wrap-btn">
														<a href="{{ route('produtos.detalhe', ['id' => $produto->id]) }}" class="function-link">Ver</a>
													</div>
												</div>
												<div class="product-info">
													<a href="{{ route('produtos.detalhe', ['id' => $produto->id]) }}" class="product-name"><span>{{ $produto->nome ?? '' }}</span></a>
													<div class="wrap-price"><span class="product-price">R${{ $produto->valor ?? '' }}</span></div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>			

		</div>

	</main>

	<!--footer area-->
	<x-footer :categorias="$categorias" />
	<!--footer area-->
</div>
@endsection  
