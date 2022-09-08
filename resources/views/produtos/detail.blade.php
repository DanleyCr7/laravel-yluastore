<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/color-01.css">
</head>
<body class=" detail page ">
	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>
	
	<!--header-->
	<x-header :categorias="$categorias"/>

	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>detail</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							  <ul class="slides">
								@php
									$subcategoria = $produto->subcategoria ?? '';
									$path = '/' . 'imagens/' . (!empty($subcategoria->path) ? ($subcategoria->path . '/') : '/');
								@endphp

								@foreach ($produto->imagens as $imagem)
									@php
										$imagemFirst = !empty($imagem->imagem) ? $imagem->imagem : 'sem-imagem.png';
									@endphp
									<li data-thumb="{{  $path . $imagemFirst }}">
										<img width="350px" src="{{ $path . $imagemFirst }}" alt="product thumbnail" />
									</li>
								@endforeach
							  </ul>
							</div>
						</div>
						<div class="detail-info">
							<div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name">{{ $produto->nome ?? '[NÃO INFORMADO]' }}</h2>
                            <div class="short-desc">
                                <ul>
									@foreach ($produto->especificacoes as $item)
                                    	<li>{{ $item }}</li>
									@endforeach
                                </ul>
                            </div>
                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="/assets/images/social-list.png" alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">$ {{ $produto->valor ?? '0.0' }}</span></div>
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>In Stock</b></p>
                            </div>
                            <div class="quantity">
                            	<span>Quantity:</span>
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
									
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div>
							</div>
							<div class="wrap-butons">
								<a href="#" class="btn add-to-cart">Add to Cart</a>
                                <div class="wrap-btn">
                                    <a href="#" class="btn btn-compare">Add Compare</a>
                                    <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                                </div>
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
								<a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
								<a href="#review" class="tab-control-item">Reviews</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p>{{$produto->descricao ?? '[NÃO INFORMADO]'}}</p>
								</div>
								<div class="tab-content-item " id="add_infomation">
									<table class="shop_attributes">
										<tbody>
											<tr>
												<th>Weight</th><td class="product_weight">1 kg</td>
											</tr>
											<tr>
												<th>Dimensions</th><td class="product_dimensions">12 x 15 x 23 cm</td>
											</tr>
											<tr>
												<th>Color</th><td><p>Black, Blue, Grey, Violet, Yellow</p></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-content-item " id="review">
									
									<div class="wrap-review-form">
										
										<div id="comments">
											<h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6 Chainsaw Omnidirectional [Orage]</span></h2>
											<ol class="commentlist">
												<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
													<div id="comment-20" class="comment_container"> 
														<img alt="" src="/assets/images/author-avata.jpg" height="80" width="80">
														<div class="comment-text">
															<div class="star-rating">
																<span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
															</div>
															<p class="meta"> 
																<strong class="woocommerce-review__author">admin</strong> 
																<span class="woocommerce-review__dash">–</span>
																<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >Tue, Aug 15,  2017</time>
															</p>
															<div class="description">
																<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
															</div>
														</div>
													</div>
												</li>
											</ol>
										</div><!-- #comments -->

										<div id="review_form_wrapper">
											<div id="review_form">
												<div id="respond" class="comment-respond"> 

													<form action="#" method="post" id="commentform" class="comment-form" novalidate="">
														<p class="comment-notes">
															<span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
														</p>
														<div class="comment-form-rating">
															<span>Your rating</span>
															<p class="stars">
																
																<label for="rated-1"></label>
																<input type="radio" id="rated-1" name="rating" value="1">
																<label for="rated-2"></label>
																<input type="radio" id="rated-2" name="rating" value="2">
																<label for="rated-3"></label>
																<input type="radio" id="rated-3" name="rating" value="3">
																<label for="rated-4"></label>
																<input type="radio" id="rated-4" name="rating" value="4">
																<label for="rated-5"></label>
																<input type="radio" id="rated-5" name="rating" value="5" checked="checked">
															</p>
														</div>
														<p class="comment-form-author">
															<label for="author">Name <span class="required">*</span></label> 
															<input id="author" name="author" type="text" value="">
														</p>
														<p class="comment-form-email">
															<label for="email">Email <span class="required">*</span></label> 
															<input id="email" name="email" type="email" value="" >
														</p>
														<p class="comment-form-comment">
															<label for="comment">Your review <span class="required">*</span>
															</label>
															<textarea id="comment" name="comment" cols="45" rows="8"></textarea>
														</p>
														<p class="form-submit">
															<input name="submit" type="submit" id="submit" class="submit" value="Submit">
														</p>
													</form>

												</div><!-- .comment-respond-->
											</div><!-- #review_form -->
										</div><!-- #review_form_wrapper -->

									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Produtos Populares</h2>
						<div class="widget-content">
							<ul class="products">
								@foreach ($produtosPopulares as $produto)
								@php
									$path = '/' . 'imagens/' . (!empty($produto->subcategoria->path) ? ($produto->subcategoria->path . '/') : '/');
									$imagemFirst = !empty($produto->imagens->first()->imagem) ? $produto->imagens->first()->imagem : 'sem-imagem.jpg';
								@endphp
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="{{ route('produtos.detalhe', [ 'id'=> $produto->id]) }}" title="{{ $produto->nome ?? '[NÃO INFORMADO]' }}">
												<figure><img src="{{ $path . $imagemFirst }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{ route('produtos.detalhe', [ 'id'=> $produto->id]) }}" class="product-name"><span> {{ $produto->nome ?? '[NÃO INFORMADO]' }}</span></a>
											<div class="wrap-price"><span class="product-price">R${{ !empty($produto->valor) ? ('R$' . $produto->valor) : 'R$' }}</span></div>
										</div>
									</div>
								</li>
								@endforeach

							</ul>
						</div>
					</div>

				</div><!--end sitebar-->

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">Produtos relacionados</h3>
						<div class="wrap-products">
							<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
								@foreach ($produtosRelacionados as $produto)
								@php
									$path = '/' . 'imagens/' . (!empty($produto->subcategoria->path) ? ($produto->subcategoria->path . '/') : '/');
									$imagemFirst = !empty($produto->imagens->first()->imagem) ? $produto->imagens->first()->imagem : 'sem-imagem.jpg';
								@endphp
								<div class="product product-style-2 equal-elem ">
									<div class="product-thumnail">
										<a href="{{ route('produtos.detalhe', ['id' => $produto->id]) }}" title="{{ $produto->nome ?? '[NÃO INFORMADO]' }}">
											<figure><img src="{{ $path . $imagemFirst }}" width="214" height="214" alt="{{ $produto->nome ?? '[NÃO INFORMADO]' }}"></figure>
										</a>
										<div class="group-flash">
											<span class="flash-item new-label">new</span>
										</div>
										<div class="wrap-btn">
											<a href="#" class="function-link">quick view</a>
										</div>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>{{ $produto->nome ?? '[NÃO INFORMADO]' }}</span></a>
										<div class="wrap-price"><span class="product-price">R${{ !empty($produto->valor) ? $produto->valor : '- - -' }}</span></div>
									</div>
								</div>
								@endforeach
							</div>
						</div><!--End wrap-products-->
						
					</div>
				</div>

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

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
	                                            <li class="menu-item"><a href="#" class="link-term">Lista de compras</a></li>
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
<script src="/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.flexslider.js"></script>
<script src="/assets/js/chosen.jquery.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.countdown.min.js"></script>
<script src="/assets/js/jquery.sticky.js"></script>
<script src="/assets/js/functions.js"></script>
<!--footer area-->
</body>
</html>


