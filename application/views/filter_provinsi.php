<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Kabupaten/Kota" disabled>
        </div>
    </div>  
    <div class="col-md-6">
        <div class="form-group">
            <select class="form-control" id="kabupaten_kota" name="kab_kota">
                <?php foreach ($dataKabupaten as $kabkota){?>
                    <option value="<?php echo  esc_attr($kabkota->id)?>"><?php echo esc_html($kabkota->kota_kabupaten)?></option>
                <?php }?>
            </select>
        </div>
    </div>  
</div>