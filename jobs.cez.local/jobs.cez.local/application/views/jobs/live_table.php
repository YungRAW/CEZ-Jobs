    <div class="table-responsive">
      <br/>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Companie</th>
            <th>Directia</th>
            <th>Denumire Post</th>
            <th>Departament</th>
            <th>Locatie</th>
            <th>Valabilitate</th>    
            <th>Operatii</th>
          </tr>
         </thead>
        <tbody>
          <?php 
         foreach ($jobs as $row) { ?>
            <tr>

              <td>
                <?=($row["companies_id"]==1) ? "CEZ Vânzare" : ""?>
                <?=($row["companies_id"]==2) ? "CEZ România" : ""?>
                <?=($row["companies_id"]==3) ? "Distributie Oltenia" : ""?>
                <?=($row["companies_id"]==4) ? "CEZ Trade" : ""?>
                <?=($row["companies_id"]==5) ? "Tomis Team" : ""?>
                <?=($row["companies_id"]==6) ? "TMK" : ""?>

              </td>

              <td><?=$row["Directia"]?></td>
              <td><?=$row["DenumirePost"]?></td>
              <td><?=$row["Departament"]?></td>
              <td><?=$row["Locatie"]?></td>
              <td>
                <?=($row['TipPost']==0)? "NEDETERMINATA" : "" ?>
                <?=($row['TipPost']==1)? $row['ValabilitateStart']." - ".$row['ValabilitateEnd'] : "" ?>

              </td>
               
              <td><input type="button" value="Detalii Job" class="btn btn-outline-info btn-sm" href ="<?=base_url('livetable/details/')?>">
                <?php if($this->session->userdata('logged_in')) : ?>
              <input type="button" value="Edit Job" class="btn btn-outline-primary btn-sm" href ="<?=base_url('livetable/edit')?>">
              <?php echo form_open('/livetable/delete/'.$jobs['id']) ;?>
              <input type="submit" value="Delete Job" class="btn btn-outline-danger btn-sm"></td>
            <?php endif;?>
            </tr>   
        <?php  } ?>
       </tbody>
      </table>   
    </div>
  </div>

      
<?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>



<div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>
