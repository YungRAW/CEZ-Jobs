<?php  defined('BASEPATH') OR exit('No direct script access allowed');
?> 
</br>
</br>
</br>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('livetable/add'); ?>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Compania</label>
    <select class="form-control" id="exampleFormControlSelect1" required>
      <option>CEZ Vanzare</option>
      <option>CEZ Romania</option>
      <option>Distributie Oltenia</option>
      <option>CEZ Trade</option>
      <option>Tomis Team</option>
      <option>TMK</option>
    </select>
  </div>
  <div class="form-group">
    <label>Directie</label>
    <textarea id="editor1" class="form-control" name="data[Directie]" placeholder="Numele Directiei" required></textarea>
  </div>
  <div class="form-group">
    <label>Denumirea</label>
    <textarea id="editor2" class="form-control" name="data[Denumire]" placeholder ="Denumirea Postului" required></textarea>
  </div>
  <div class="form-group">
    <label>Departamentul</label>
    <textarea id="editor3" class="form-control" name="data[Departamentul]" placeholder ="Numele Departamentului" required></textarea>
  </div>
  <div class="form-group">
    <label>Firma</label>
    <textarea id="editor5" class="form-control" name="Firma" placeholder ="Denumirea firmei" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Tipul Postului</label>
    <select class="form-control" id="tipPost">
      <option value="1">Pe perioada nedeterminata</option>
      <option value="2">Pe perioada determinata</option>
    </select>
  </div>
  <?php ?>

  <div class="form-group" id = "perioada" style="display:none;">
    <label>Perioada postului</label>
    <textarea id="editor5" class="form-control" name="Denumire" placeholder ="Perioada Postului" required></textarea>
  </div>


  <div class="form-group">
    <label>Locatie</label>
    <textarea id="editor8" class="form-control" name="Locatie" placeholder ="Locatia Postului" required></textarea>
  </div>
  <div class="form-group">
    <label>Informatii Post</label>
    <textarea id="editor9" class="form-control" name="Info" placeholder ="Informatii legate de post" required></textarea>
  </div>
  <div class="form-group">
    <label>Cerintele Postului</label>
    <textarea id="editor10" class="form-control" name="Cerinte" placeholder ="Cerintele Postului" required></textarea>
  </div>
  <div class="form-group">
    <label>Responsabilitatiile Postului</label>
    <textarea id="editor11" class="form-control" name="Responsabilitati" placeholder ="Responsabilitatiile Postului" required></textarea>
  </div>
  <?php /*valabilitatea de start pana la stergerea postului*/?>
  <?php /*valabilitatea de final pana la stergerea postului*/?>
  <button type="submit" class="btn btn-success" href = # >Adaugati Jobul</button>



<script>
  $('#tipPost').change( function(){
if ($(this).val()== 1)
{
    $('#perioada').hide();
}else{
    $('#perioada').show();
  } } );


</script>