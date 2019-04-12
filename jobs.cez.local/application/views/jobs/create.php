<?php  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('livetable/create'); ?>
  <div class="form-group">
    <label for="companieForm">Companie</label>
    <select class="form-control" id="companieForm" required>
      <option value = "1">CEZ Vanzare</option>
      <option value = "2">CEZ Romania</option>
      <option value = "3">Distributie Oltenia</option>
      <option value = "4">CEZ Trade</option>
      <option value = "5">Tomis Team</option>
      <option value = "6">TMK</option>
    </select>
  </div>
  <div class="form-group">
    <label>Directie</label>
    <textarea id="editor1" class="form-control" name="directie" placeholder="Numele Directiei" required></textarea>
  </div>
  <div class="form-group">
    <label>Departamentul</label>
    <textarea id="editor3" class="form-control" name="departament" placeholder ="Numele Departamentului" required></textarea>
  </div>
  <div class="form-group">
    <label>Denumirea</label>
    <textarea id="editor2" class="form-control" name="denumire" placeholder ="Denumirea Postului" required></textarea>
  </div>
  <div class="form-group">
    <label>Firma</label>
    <textarea id="editor5" class="form-control" name="firma" placeholder ="Denumirea firmei" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Tipul Postului</label>
    <select class="form-control" id="tipPost">
      <option value="1">Pe perioada nedeterminata</option>
      <option value="2">Pe perioada determinata</option>
    </select>
  </div>

  <div class="form-group" id = "perioada" style="display:none;">
    <label>Perioada postului</label>
    <textarea id="editor5" class="form-control" name="perioada" placeholder ="Perioada Postului" required></textarea>
  </div>


  <div class="form-group">
    <label>Locatie</label>
    <textarea id="editor8" class="form-control" name="locatie" placeholder ="Locatia Postului" required></textarea>
  </div>
  <div class="form-group">
    <label>Informatii Post</label>
    <textarea id="editor9" class="form-control" name="info" placeholder ="Informatii legate de post" required></textarea>
  </div>
  <div class="form-group">
    <label>Cerintele Postului</label>
    <textarea id="editor10" class="form-control" name="cerinte" placeholder ="Cerintele Postului" required></textarea>
  </div>
  <div class="form-group">
    <label>Responsabilitatiile Postului</label>
    <textarea id="editor11" class="form-control" name="responsabilitati" placeholder ="Responsabilitatiile Postului" required></textarea>
  </div>
  <div class = "form-group">
    <label> Valabilitate Start</label>
    <textarea id = "editor12" class = "form-control" name = "valabilitateStart" placeholder = "Valabilitate Start" required> </textarea>
  </div>
  <div class = "form-group">
    <label> Valabilitate End</label>
    <textarea id = "editor13" class = "form-control" name = "valabilitateEnd" placeholder = "Valabilitate Sfarsit" required> </textarea>
  </div>
  <button type="submit" class="btn btn-success" href = # >Adaugati Jobul</button>


  
<script>
  $('#tipPost').change(function(){
if ($(this).val()== 1)
{
    $('#perioada').hide();
}else{
    $('#perioada').show();
  } } );

</script>

<script>
  $("#companieForm").click(function(){

    

  }



//ajax

$.ajax({
url: 'localhost',
type: POST,
data: {data: valoare}
});
});

</script>

