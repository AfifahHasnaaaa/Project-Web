<html>

@include('template/call_head')

<body class="sidebar-mini" style="height: auto;">
	<div class="wrapper">
		<div class="content-wrapper">

			@include('template/admin/page_header_admin')

			<section class="content">

				@include('template/admin/page_konten_admin')

			</section>
		</div>
		@include('template/admin/call_footer_admin')
	</div>

	@include('template/admin/call_js_admin')

	@yield('script_custom')
</body>

</html>