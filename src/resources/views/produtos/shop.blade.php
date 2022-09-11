@extends('templates.template')
@section('content')
<body class="home-page home-01 ">

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
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>{{ 'Resultado' }}</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="assets/images/shop-banner.jpg" alt=""></figure>
						</a>
					</div>

					<div class="wrap-shop-control">

						<h1 class="shop-title">{{ 'Resultado' }}</h1>

						<div class="wrap-right">
							<div class="change-display-mode">
								<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i></a>
								{{-- <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a> --}}
							</div>
						</div>

					</div><!--end wrap shop control-->

					<div class="row">

						<ul class="product-list grid-products equal-container">
                            @foreach ($produtos as $produto)
                                @php
                                    $path = '/' . 'imagens/' . (!empty($produto->subcategoria->path) ? ($produto->subcategoria->path . '/') : '/');
                                    $imagemFirst = !empty($produto->imagens->first()->imagem) ? $produto->imagens->first()->imagem : 'sem-imagem.jpg';
                                @endphp
                                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-3 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{ route('produtos.detalhe', ['id' => $produto->id]) }}" title="{{ $produto->descricao ?? '' }}">
                                                <figure><img src="{{ $path . $imagemFirst }}" alt="{{ $produto->descricao ?? '' }}"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route('produtos.detalhe', ['id' => $produto->id]) }}" class="product-name"><span>{{ $produto->nome ?? '' }}</span></a>
                                            <div class="wrap-price"><span class="product-price">R${{ $produto->valor ?? '' }}</span></div>
                                            <a href="#" class="btn add-to-cart">Adicionar a sacola</a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

						</ul>

					</div>

					<div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            {!! $produtos->links() !!}
						</ul>
						<p class="result-count">Showing 1-8 of 12 result</p>
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Categorias</h2>
						<div class="widget-content">
							<ul class="list-category">
                                @foreach ($categorias as $categoria)
                                    <li class="{{ count($categoria->subcategorias) > 0 ? 'category-item has-child-cate' : 'category-item'}}">
                                        <a href="#" data-categoria_id="{{$categoria->id}}" class="categoria-link">{{$categoria->descricao ?? ''}}</a>
                                        @if(count($categoria->subcategorias) > 0)
                                            <span class="toggle-control">+</span>
                                        @endif
                                        @foreach ($categoria->subcategorias as $subcategoria)
                                            <ul class="sub-cate">
                                                <li class="category-item"><a href="#" data-subcategoria_id="{{$subcategoria->id}}" class="subcategoria-link">{{ $subcategoria->descricao ?? '' }}</a></li>
                                            </ul>
                                        @endforeach
                                    </li>
                                @endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

					<div class="widget mercado-widget filter-widget brand-widget">
						<h2 class="widget-title">Brand</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list list-limited" data-show="{{ count($subcategorias) + 1}}">
								@foreach ($subcategorias as $key => $subcategoria)
									@php
										$subcategoriaActive = $subcategoriasActive->where('id', $subcategoria->id)->first();
									@endphp
									@if($key <= (count($subcategorias)-3))
										<li 
										data-subcategoria_id="{{$subcategoria->id}}" 
										class="list-item">
											<a class="{{ !empty($subcategoriaActive['situacao']) ? 'filter-link active' : 'filter-link'}}" href="#">{{ $subcategoria->descricao ?? '' }}
											</a>
										</li>
									@else
										<li data-subcategoria_id="{{$subcategoria->id}}" class="list-item"><a class="{{ !empty($subcategoriaActive['situacao']) ? 'filter-link active' : 'filter-link'}}" href="#">{{ $subcategoria->descricao ?? '' }}</a></li>
									@endif
								@endforeach
								<li class="list-item"><a data-label='Ver menos<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Ver mais<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div><!-- brand widget-->

					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Price</h2>
						<div class="widget-content">
							<div id="slider-range"></div>
							<p>
								<label for="amount">Preço:</label>
								<input type="text" id="amount" readonly>
								<button class="filter-submit">Filtrar</button>
							</p>
						</div>
					</div><!-- Price-->

					{{-- <div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Color</h2>
						<div class="widget-content">
							<ul class="list-style vertical-list has-count-index">
								<li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Blue <span>(283)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Grey <span>(116)</span></a></li>
								<li class="list-item"><a class="filter-link " href="#">Pink <span>(29)</span></a></li>
							</ul>
						</div>
					</div> --}}
					<!-- Color -->

					<div class="widget mercado-widget filter-widget">
						<h2 class="widget-title">Size</h2>
						<div class="widget-content">
							<ul class="list-style inline-round ">
								<li class="list-item"><a class="filter-link active" href="#">s</a></li>
								<li class="list-item"><a class="filter-link " href="#">M</a></li>
								<li class="list-item"><a class="filter-link " href="#">l</a></li>
								<li class="list-item"><a class="filter-link " href="#">xl</a></li>
							</ul>
							<div class="widget-banner">
								<figure><img src="assets/images/size-banner-widget.jpg" width="270" height="331" alt=""></figure>
							</div>
						</div>
					</div><!-- Size -->

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Produtos populares</h2>
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
					</div><!-- brand widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
	<x-footer :categorias="$categorias" />
	<!--footer area-->

	<script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/functions.js"></script>
	<script>
		
	</script>
</body>
@endsection  
