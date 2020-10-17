<section class="block-search-modal">
    
<!-- Modal -->
<div class="modal fade " id="searchModal" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Czego szukasz?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <form method="get" class="form-inline my-2 my-lg-0 search__form" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" autofocus class="searchinput form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Wpisz hasło' ); ?>" />
            <input type="submit" class="my-2 my-sm-0 border-0 button button--standard" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Szukaj' ); ?>" />
    </form>

      </div>
      <!-- <div class="modal-footer">
        <a href="#" class="button button--negative" data-dismiss="modal">Zamknij</a>
      </div> -->
    </div>
  </div>
</div>
</section>
