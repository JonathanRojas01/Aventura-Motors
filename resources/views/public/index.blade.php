<div id="page-home">

    @include('public.template-parts.header')
    @include('public.template-parts.seccion-banners-main')

    <!-- Solo será visto en versión responsive -->
    <div class="only-responsive res-1200">
        @include('public.template-parts.navegacion')
    </div>

    @include('public.template-parts.seccion-marcas')
    @include('public.template-parts.seccion-ofertas')
    @include('public.template-parts.seccion-servicios')
    @include('public.template-parts.seccion-estilo')
    @include('public.template-parts.seccion-contacto')
    @include('public.template-parts.footer')

</div>