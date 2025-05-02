<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin - Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h3 class="text-center">Admin</h3>
                <hr>
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="#">Utilisateurs</a>
                <a href="#">Produits</a>
                <a href="#">Categories</a>
                <a href="#">Parameters</a>
                <a href="#">Déconnexion</a>
            </div>
            
            <!-- Content principal -->
            <div class="col-md-10 p-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>