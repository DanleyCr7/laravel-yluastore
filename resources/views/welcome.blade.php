
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

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Telefone: 86 9533-0359" href="#" ><span class="icon label-before fa fa-mobile"></span>Telefone: 86 9533-0359</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item" ><a title="Register or Login" href="login.html">Login</a></li>
								<li class="menu-item" ><a title="Register or Login" href="register.html">Register</a></li>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="assets/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="assets/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="assets/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="assets/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Real (BR)" href="#">Real<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									{{-- <ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul> --}}
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="{{ route('index') }}" class="link-to-home"><img src="assets/images/logo-top-1.png" alt="mercado"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="#" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Pesquise aqui...">
									<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="#" class="link-control">Categorias</a>
										<ul class="list-cate">
											<li class="level-0">Categorias</li>
											@foreach ($categorias as $categoria)
												<li class="level-1">-{{ $categoria->descricao ?? '' }}</li>
												@foreach ($categoria->subcategorias as $subcategoria)
													<li class="level-2">{{ $subcategoria->descricao ?? '- - -' }}</li>
												@endforeach
											@endforeach
										</ul>
									</div>
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">LISTA</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="{{ route('produtos.carrinho') }}" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">4 items</span>
										<span class="title">SACOLA</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					{{-- <div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div> --}}

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="{{ route('index') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{ route('produtos.carrinho') }}" class="link-term mercado-item-title">Sacola</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('comprar') }}" class="link-term mercado-item-title">Comprar</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

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
	<footer id="footer">
	    <div class="wrap-footer-content footer-style-1">

	        <div class="wrap-function-info">
	            <div class="container">
	                <ul>
	                    <li class="fc-info-item">
	                        <i class="fa fa-truck" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Taxa de entrega</h4>
	                            <p class="fc-desc">5 REAIS</p>
	                        </div>

	                    </li>
	                    <li class="fc-info-item">
	                        <i class="fa fa-recycle" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Garantia</h4>
	                            <p class="fc-desc">Até 3 dias e está com a etiqueta</p>
	                        </div>

	                    </li>
	                    <li class="fc-info-item">
	                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Formas de pagamento</h4>
	                            <p class="fc-desc">Cartão, pix, dinheiro em espécie.</p>
	                        </div>

	                    </li>
	                    <li class="fc-info-item">
	                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
	                        <div class="wrap-left-info">
	                            <h4 class="fc-name">Whatsapp</h4>
	                            <p class="fc-desc">86 99919-1751</p>
	                        </div>

	                    </li>
	                </ul>
	            </div>
	        </div>
	        <!--End function info-->

	        <div class="main-footer-content">

	            <div class="container">

	                <div class="row">

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">Contatos</h3>
	                            <div class="item-content">
	                                <div class="wrap-contact-detail">
	                                    <ul>
	                                        <li>
	                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
	                                            <p class="contact-txt">Rua Antônio Tomaz da Costa Parnaíba-PI, Bairro joão 23, casa 195.</p>
	                                        </li>
	                                        <li>
	                                            <i class="fa fa-phone" aria-hidden="true"></i>
	                                            <p class="contact-txt">(+55) 86 9533-0359</p>
	                                        </li>
	                                        {{-- <li>
	                                            <i class="fa fa-envelope" aria-hidden="true"></i>
	                                            <p class="contact-txt">Contact@yourcompany.com</p>
	                                        </li>	                                         --}}
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">Linha de contatos</h3>
	                            <div class="item-content">
	                                <div class="wrap-hotline-footer">
	                                    <span class="desc">Telefone para ligação</span>
	                                    <b class="phone-number">(+55)86 9533-0359</b>
	                                </div>
	                            </div>
	                        </div>

	                        {{-- <div class="wrap-footer-item footer-item-second">
	                            <h3 class="item-header">Sign up for newsletter</h3>
	                            <div class="item-content">
	                                <div class="wrap-newletter-footer">
	                                    <form action="#" class="frm-newletter" id="frm-newletter">
	                                        <input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
	                                        <button class="btn-submit">Subscribe</button>
	                                    </form>
	                                </div>
	                            </div>
	                        </div> --}}

	                    </div>

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
	                        <div class="row">
	                            <div class="wrap-footer-item twin-item">
	                                <h3 class="item-header">Minha conta</h3>
	                                <div class="item-content">
	                                    <div class="wrap-vertical-nav">
	                                        <ul>
	                                            <li class="menu-item"><a href="#" class="link-term">Perfil</a></li>
	                                            <li class="menu-item"><a href="#" class="link-term">Lista de comprar</a></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="wrap-footer-item twin-item">
	                                <h3 class="item-header">Informações</h3>
	                                <div class="item-content">
	                                    <div class="wrap-vertical-nav">
	                                        <ul>
	                                            <li class="menu-item"><a href="#" class="link-term">Contate-nos</a></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                </div>

	                {{-- <div class="row">

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">USAMOS PAGAMENTOS SEGUROS:</h3>
	                            <div class="item-content">
	                                <div class="wrap-list-item wrap-gallery">
										<img src="/assets/images/payment.png" style="max-width: 260px;">
									</div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">Social network</h3>
	                            <div class="item-content">
	                                <div class="wrap-list-item social-network">
	                                    <ul>
	                                        <li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	                                        <li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	                                        <li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
	                                        <li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
	                                        <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	                        <div class="wrap-footer-item">
	                            <h3 class="item-header">Dowload App</h3>
	                            <div class="item-content">
	                                <div class="wrap-list-item apps-list">
	                                    <ul>
	                                        <li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="/assets/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
	                                        <li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="/assets/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div> --}}

	                {{-- </div> --}}
	            </div>

	            <div class="wrap-back-link">
	                <div class="container">
	                    <div class="back-link-box">
	                        <h3 class="backlink-title">Links rápidos</h3>
							@foreach ($categorias as $categoria)
	                        <div class="back-link-row">
									<ul class="list-back-link" >
										<li><span class="row-title">{{ $categoria->descricao ?? '[NÃO INFORMAO]' }}:</span></li>
										@foreach ($categoria->subcategorias as $subcategoria)
											<li><a href="#" class="redirect-back-link" title="mobile">{{ $subcategoria->descricao ?? '[NÃO INFORMADO]' }}</a></li>
										@endforeach
									</ul>
								</div>
								@endforeach
	                    </div>
	                </div>
	            </div>

	        </div>

	        <div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>								
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
	    </div>
	</footer>
	<!--footer area-->
</div>
@endsection  
