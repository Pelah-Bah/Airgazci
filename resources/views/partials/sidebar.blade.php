
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{ route('accueil') }}"><img src="assets/images/logoAA.jpg " alt="AIRGAZ-CI" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{ route('accueil') }}"><img src="assets/images/logoB.jpg " alt="AG" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                  <span>{{ Auth::user()->fonction }}</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>

              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Profile</p>
                  </div>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('accueil') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          @if (auth()->user()->is_admin)
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('register') }}">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">Utilisateur</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Paramètrage stock</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <!--<li class="nav-item"> <a class="nav-link" href=" ">Catégorie</a></li>-->
                <li class="nav-item"> <a class="nav-link" href="{{ url('/famille')}}">Familles</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/format')}}">Formats</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/bouteille')}}">Bouteilles</a></li>
                <!--<li class="nav-item"> <a class="nav-link" href=" ">Articles</a></li>-->
              </ul>
            </div>
          </li>
          <!--<li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Relation intérieur</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=" ">Contrôleurs</a></li>
                <li class="nav-item"> <a class="nav-link" href=" ">Chauffeurs</a></li>
                <li class="nav-item"> <a class="nav-link" href=" ">Livreurs</a></li>
                <li class="nav-item"> <a class="nav-link" href=" ">Véhicules</a></li>
              </ul>
            </div>
          </li>-->

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Clients</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/client')}}">Clients</a></li>
              </ul>
            </div>
          </li>
          @endif

          @if (auth()->user()->is_livraison)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Vente</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/livraison')}}"> Bon de livraison </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/client')}}">Bouteilles clients</a></li>
            </ul>
            </div>
          </li>
          @endif

          @if (auth()->user()->is_retour)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth4" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Retour de Bouteille</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=" "> Bon de récuperation </a></li>
                <!--<li class="nav-item"> <a class="nav-link" href=" "> Retour bouteille </a></li>

                <li class="nav-item"> <a class="nav-link" href=" "> Contre de sortie </a></li>
                <li class="nav-item"> <a class="nav-link" href=" "> Equipe de livraison </a></li>-->
              </ul>
            </div>
          </li>
          @endif

          @if (auth()->user()->is_stock)
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Gestion des stocks</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth2">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="{{ url('/production')}}"> Journal de production </a></li>

                <li class="nav-item"><a class="nav-link" href="{{ url('/production')}}">Stock disponible</a></li>

              </ul>
            </div>
          </li>
          @endif
        </ul>
