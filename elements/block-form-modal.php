<section class="block-form-modal">
    
<!-- Modal -->
<div class="modal fade " id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Formularz kontaktowy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form>
                    <!-- <div class="form-group">
                        <label for="firstName">Imię i nazwisko</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Imię i nazwisko">
                    </div>
                    <div class="form-group">
                        <label for="firstEmail">Adres email</label>
                        <input type="email" class="form-control" id="firstEmail" placeholder="adres@email.pl">
                    </div>
                    <div class="form-group">
                        <label for="firstSystem">Używany system</label>
                        <input type="text" class="form-control" id="firstSystem" placeholder="nazwa">
                    </div>
                    <div class="form-group">
                        <label for="firstMessage">Wiadomość</label>
                        <textarea class="form-control" id="firstMessage" rows="6"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="button button--standard border-0">Wyślij</button>
                    </div> -->

            </form>
            <?php //echo do_shortcode('[contact-form-7 id="121" title="Formularz 1"]') ?>
            <?php echo do_shortcode('[contact-form-7 id="86" title="Formularz 1"]') ?>

      </div>
      <!-- <div class="modal-footer">
        <a href="#" class="button button--negative" data-dismiss="modal">Zamknij</a>
      </div> -->
    </div>
  </div>
</div>
</section>

<style>
.hiddenfield{display:none}
//.form-control{border-color:#28262b}
.form-control:focus{border-color:#adbd23;box-shadow: 0 0 0 0.2rem rgba(173, 189, 35, 0.3)}
</style>