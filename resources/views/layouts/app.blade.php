<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Books CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ url('/') }}">My Laravel App</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/books') }}">literature</a></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/date') }}">Date</a></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/novels') }}">Novels</a></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
          
        @yield('content')
    </div>
</body>
</html>
