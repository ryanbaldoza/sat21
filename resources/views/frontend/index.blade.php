<!DOCTYPE html>
<html>
	<head>
		@include( 'frontend/partials/head')
	</head>
	<body class="@yield('body_class')">
		@include( 'frontend/partials/top-nav' )

		@yield( 'content' )

		@include( 'frontend/partials/footer' )
		@include( 'frontend/partials/scripts' )
		@yield('scripts')
	</body>
</html>