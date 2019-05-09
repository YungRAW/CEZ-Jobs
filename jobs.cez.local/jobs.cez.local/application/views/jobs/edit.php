<?php  defined('BASEPATH') OR exit('No direct script access allowed');
?>
  

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('livetable/create'); ?>
  <div class="form-group">
    <label for="companieForm">Companie</label>
    <select class="form-control" id="companieForm" name = "companie"  >
      <?php foreach ($companies as $company){ ?>
         <option value = "<?=$company->companies_id ?>"> <?=$company->name ?></option>
     <?php } ?>
      
    </select>
  </div>
  <div class="form-group">
    <label>Directie</label>
    <textarea id="editor1" class="form-control" name="directie" placeholder="Numele Directiei"></textarea>
  </div>
  <div class="form-group">
    <label>Departamentul</label>
    <textarea id="editor3" class="form-control" name="departament" placeholder ="Numele Departamentului"  ></textarea>
  </div>
  <div class="form-group">
    <label>Denumirea</label>
    <textarea id="editor2" class="form-control" name="denumire" placeholder ="Denumirea Postului"  ></textarea>
  </div>
  <div class="form-group">
    <label>Firma</label>
    <textarea id="editor5" class="form-control" name="firma" placeholder ="Denumirea firmei"  ></textarea>
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
    <textarea id="editor5" class="form-control" name="perioada" placeholder ="Perioada Postului"  ></textarea>
  </div>


  <div class="form-group">
    <label>Locatie</label>
    <textarea id="editor8" class="form-control" name="locatie" placeholder ="Locatia Postului"  ></textarea>
  </div>
  <div class="form-group">
    <label>Informatii Post</label>
    <textarea id="editor9" class="form-control" name="info" placeholder ="Informatii legate de post"  ></textarea>
  </div>
  <div class="form-group">
    <label>Cerintele Postului</label>
    <textarea id="editor10" class="form-control" name="cerinte" placeholder ="Cerintele Postului"  ></textarea>
  </div>
  <div class="form-group">
    <label>Responsabilitatiile Postului</label>
    <textarea id="editor11" class="form-control" name="responsabilitati" placeholder ="Responsabilitatiile Postului"  ></textarea>
  </div>
  <div class = "form-group">
    <label> Valabilitate Start</label>
    <textarea id = "editor12" class = "form-control" name = "valabilitateStart" placeholder = "Valabilitate Start"  > </textarea>
  </div>
  <div class = "form-group">
    <label> Valabilitate End</label>
    <textarea id = "editor13" class = "form-control" name = "valabilitateEnd" placeholder = "Valabilitate Sfarsit"  > </textarea>
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
