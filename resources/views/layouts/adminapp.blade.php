<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Admin panel</title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
	<!-- component -->
	<!-- This is an example component -->
		@include('layouts.navbar')
		<div class="flex overflow-hidden bg-white pt-16">
		    @include('layouts.sidebar')



            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">


                <main>
                    @yield('content')
                </main>


		    </div>
		</div>

	</div>


    <script async defer src="https://buttons.github.io/buttons.js"></script>
	<script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

    <script src="chemin/vers/votre/fichier/datatables.min.js"></script>

	<script>
        $(document).ready(function() {
            $('.table').DataTable({
                searching: true,
            });
        });
    </script>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</body>
</html>
