<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Kabupaten/Kota" disabled>
        </div>
    </div>  
    <div class="col-md-6">
        <div class="form-group">
           <!--  <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                <div class="form-select"> -->
                    <select class="form-control" id="kabupaten_kota" name="kab_kota">
                        <?php foreach ($dataKabupaten as $kabkota){?>
                            <option value="<?= $kabkota->id?>"><?= $kabkota->kota_kabupaten?></option>
                        <?php }?>
                    </select>
                </div>
           <!--  </div>    
        </div> -->
    </div>  
</div>