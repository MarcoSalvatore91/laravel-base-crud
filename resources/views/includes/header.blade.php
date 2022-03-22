<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://previews.123rf.com/images/fleren/fleren1611/fleren161100006/67252118-pop-logo-art-pop-logo-art-bang-affiche-de-style-r%C3%A9tro-vector-pop-art-illustration-logo-de-style-comi.jpg" alt="logo" width="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('comic.index') }}">Fumetti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>