<div class="container-fluid py-2" id="header">
    <div class="row">
        <div
            class="col-10 col-sm-10 col-md-10
            mt-2 mt-sm-2 mt-md-2 mt-lg-2
             order-1 order-md-0"
        >
            <a href="{{ url('/') }}" class="titulo_header">
                <h2>Departamento de informática</h2>
            </a>
        </div>

        <div
            class=" col-2 col-sm-2 d-flex justify-content-md-end order-0 order-md-1"
        >
            <nav class="navbar navbar-expand-md">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span>
                        <i class="line mt-1"></i>
                        <i class="line"></i>
                        <i class="line"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                      <a class="nav-item nav-link active" href="{{ url('/') }}"
                            >Inicio <span class="sr-only">(current)</span></a
                        >
                        <a class="nav-item nav-link" href="{{ url('/miembros') }}">Miembros</a>
                        <a class="nav-item nav-link" href="{{ url('/login') }}">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
