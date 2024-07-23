<html>

@include('template/call_head')

<body class="sidebar-mini" style="height: auto;">
	<div class="wrapper">
		<div class="content-wrapper">

            @include('template/user/page_header_user')

		    <section class="content">

                @include('template/user/page_konten_user')
				

		    </section>
		</div>
		@include('template/call_footer')
	</div>

    @include('template/user/call_js_user')

    @yield('script_custom')
</body>
</html>
