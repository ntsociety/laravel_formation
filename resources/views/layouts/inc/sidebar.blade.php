<!-- sidebar -->

<div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body">
      <aside class="ps-4">
        <div class="sidebar-brand small fw-bold text-uppercase my-3">
          <a href="dashboard.html" class="text-white">Dtech</a>
        </div>
        <ul class="sidebar-menu navbar-nav text-white">
          <li class="menu-header text-white">
            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
            <span>Dashboard</span>
          </li>
          <li class="my-2"><hr class="text-white"> </li>
          <li class="text-muted small fw-bold text-uppercase mb-3">
            Interface
          </li>
          <li>
            <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#categorie" role="button" aria-expanded="false" aria-controls="collapseExample">
              <span class="text-white"><i class="bi bi-layout-split me-2"></i>Catégorie</span>
              <span class="text-white ms-auto right-icon">
                <i class="bi bi-chevron-right"></i>
              </span>
            </a>
            <div class="collapse" id="categorie">
              <ul class="navbar-nav ps-3">
                <li>
                  <a class="nav-link" href="{{ route('category.index') }}">
                    <span><i class="bi bi-eye"></i></span> Voir Catégories</a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('category.create') }}">
                    <span><i class="bi bi-plus-circle-fill"></i></span> Ajouter Catégories</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#produit" role="button" aria-expanded="false" aria-controls="collapseExample">
              <span class="text-white"><i class="bi bi-layout-split me-2"></i>Produit</span>
              <span class="text-white ms-auto right-icon">
                <i class="bi bi-chevron-right"></i>
              </span>
            </a>
            <div class="collapse" id="produit">
              <ul class="navbar-nav ps-3">
                <li>
                  <a class="nav-link" href="{{ route('produit.index') }}">
                    <span><i class="bi bi-eye"></i></span> Voir produit</a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('produit.create') }}">
                    <span><i class="bi bi-plus-circle-fill"></i></span> Ajouter produit</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#employes" role="button" aria-expanded="false" aria-controls="collapseExample">
              <span class="text-white"><i class="bi bi-layout-split me-2"></i>Employés</span>
              <span class="text-white ms-auto right-icon">
                <i class="bi bi-chevron-right"></i>
              </span>
            </a>
            <div class="collapse" id="employes">
              <ul class="navbar-nav ps-3">
                <li>
                  <a class="nav-link" href="{{ route('list-employes') }}">
                    <span><i class="bi bi-eye"></i></span> Employés</a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('ajout-employe') }}">
                    <span><i class="bi bi-plus-circle-fill"></i></span> Ajouter</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </aside>
    </div>
  </div>
