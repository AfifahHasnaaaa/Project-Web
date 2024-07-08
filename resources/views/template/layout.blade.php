<html>

@include('template/call_head')

<body class="sidebar-mini" style="height: auto;">
	<div class="wrapper">
		<div class="content-wrapper">

            @include('template/page_header')
		    <section class="content">

                @include('template/page_konten')

		    </section>
		</div>
		@include('template/call_footer')
	</div>

    @include('template/call_js')

    @yield('script_custom')
</body>
</html>
