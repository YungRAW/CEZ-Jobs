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
              <td><?=$row["Companie"]?></td>
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
              <input type="button" value="Edit Job" class="btn btn-outline-primary btn-sm" href ="<?=base_url('livetable/edit/')?>">
              <input type="button" value="Delete Job" class="btn btn-outline-danger btn-sm" href ="<?=base_url('livetable/delete/')?>"></td>
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