<!-- Modal -->

<div class="modal fade" id="authorsModal{{$author->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-author-content">
        <div class="modal-header">
          <div class="modal-title">
          <h4><b>Autor</b></h4>
          </div>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body px-0">
          <div style="overflow-y: hidden; height: calc(100vh - 15rem);">
            <div class="px-2" style="overflow-y: auto; height: auto;">
              <div class="modal-info-author">

                <div class="row">
                  <div class="col-sm-4">
                    <img src="/images/{{ $author->route_image_author }}" style="width: 100%; height: 100%">
                  </div>
                  <div class="col-sm-8">
                    <div class="card-body" style="margin-left: 15px">
                      <h5 class="card-title"><b>{{ $author->name_author}}</b></h5>
                      <p class="card-text"><small class="text-muted">{{ $author->email_author}}</small></p>
                      <p class="card-text">{{ $author->grades_author}}</p>
                    </div>
                  </div>
                </div>
                
               <!-- <div class="modal-author-article">
                  <p style="margin:30px;">Título completo de los articulos publicados por el autor en la revista cientifica de la universidad de margarita</p>
                </div>
                <div class="modal-author-name">
                  <p><b>Nombre y Apellido del Autor</b></p>
                </div>
                <div class="modal-author-article">
                  <p style="margin:30px;">Título completo de los articulos publicados por el autor en la revista cientifica de la universidad de margarita</p>
                </div>
                <div class="modal-author-name">
                  <p><b>Nombre y Apellido del Autor</b></p>
                </div>
                <div class="modal-author-article">
                  <p style="margin:30px;">Título completo de los articulos publicados por el autor en la revista cientifica de la universidad de margarita</p>
                </div>
                <div class="modal-author-name">
                  <p><b>Nombre y Apellido del Autor</b></p>
                </div>
                <div class="modal-author-article">
                  <p style="margin:30px;">Título completo de los articulos publicados por el autor en la revista cientifica de la universidad de margarita</p>
                </div>
            </div> -->
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
</div>
</div>