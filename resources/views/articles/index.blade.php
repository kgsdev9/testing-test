
 @extends('dashboard.admin.users.admin.layoutadmin')


@section('admin')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" id="proBanner">
            <div class="col-12" style="display: none">
              <span class="d-flex align-items-center purchase-popup">
                <
                <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close" id="bannerClose"></i>
              </span>
            </div>
          </div>
            <div>
                <h1>Gestion D'article</h1>
            </div>
          <div class="row">
            <div class="col-md-12">
              <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                <ul class="nav nav-tabs tab-transparent" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true"> Rubriques</a>
                  </li>



                </ul>
                <div class="d-md-block d-none">
                  <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                  <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                </div>
              </div>
              <div class="tab-content tab-transparent-content">
                <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                  <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Publier un Article</h5>
                          <h5 class="mb-4 text-dark font-weight-bold"> <a href="/articles/forms">Cliquzez-ici</a></h5  >
                          <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                          <p class="mt-4 mb-0">Institut</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">Roosvelt</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Liste Des Articles</h5>
                          <h5 class="mb-4 text-dark font-weight-bold"> <a href="{{route('liste.articles')}}">Cliquzez-ici</a></h5  >
                          <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                          <p class="mt-4 mb-0">Insitut</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">Roosvelt</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Ajouter une categorie</h5>
                          <h5 class="mb-4 text-dark font-weight-bold"> <a href="/categories/forms">Cliquzez-ici</a></h5  >
                          <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                          <p class="mt-4 mb-0">Insitut </p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">Roosvelt</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Liste Des Categories</h5>
                          <h5 class="mb-4 text-dark font-weight-bold"> <a href="/categories/liste">Cliquzez-ici</a></h5  >
                          <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                          <p class="mt-4 mb-0"><a href="" class="text-dark">Cliquez-ici</a></p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">Insitut Rooslevet</h3>
                        </div>
                      </div>
                    </div>
                  </div>

                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->



@endsection



<!-- <div class="row">
    
 
    <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row icons-list">
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="mdi mdi-access-point"></i> 
                  
                 
                <div>
                    <a href="/articles/forms">Publier un article</a>
                </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="mdi mdi-access-point-network"></i> 
                  <a href="/articles/list">Liste des articles</a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="mdi mdi-account"></i> Commentaires Articles
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="mdi mdi-account-box"></i> mdi mdi-account-box
             
                
              </div>
            </div>
          </div>
        </div>
      </div> -->