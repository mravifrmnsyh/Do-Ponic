<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Pengguna</h3>
            <div class="pull-right">
                <a href="<?=site_url('users')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"> Kembali</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('users/ubah/'.$row->id_user);?>
                    <div class="form-group">
                        <label for="">Id User</label>
                        <input type="text" name="id_user" readonly
                            value="<?=$this->input->post('id_user') ?? $row->id_user?>" class="form-control">
                    </div>
                    <div class="form-group <?=form_error('nama')? 'has-error' : null?>">
                        <label for="">Nama Lengkap *</label>
                        <input type="text" name="nama" value="<?=$this->input->post('nama') ?? $row->nama?>"
                            class="form-control">
                        <?=form_error('nama')?>
                    </div>
                    <div class="form-group <?=form_error('username')? 'has-error' : null?>">
                        <label for="">Username *</label>
                        <input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>"
                            class="form-control">
                        <?=form_error('username')?>
                    </div>
                    <div class="form-group <?=form_error('password')? 'has-error' : null?>">
                        <label for="">Password</label>
                        <input type="password" name="password" value="<?=$this->input->post('password')?>"
                            class="form-control">
                        <?=form_error('password')?>
                    </div>
                    <div class="form-group <?=form_error('password1')? 'has-error' : null?>">
                        <label for="">Password Confirmation</label>
                        <input type="password" name="password1" value="<?=$this->input->post('password1')?>"
                            class="form-control">
                        <?=form_error('password1')?>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat </label>
                        <textarea name="alamat"
                            class="form-control"><?=$this->input->post('alamat') ?? $row->alamat?></textarea>
                    </div>
                    <div class="form-group <?=form_error('level')? 'has-error' : null?>">
                        <label for="">Level</label>
                        <select name="level" class="form-control" value="">
                            <?php $level = $this->input->post('level') ?? $row->level?>
                            <option value="1"> Admin </option>
                            <option value="2" <?=$level == 2 ?  'selected' : null?>> User </option>
                        </select>
                        <?=form_error('level')?>
                    </div>
                    <div class="form-group">
                        <label>Foto</label><br>
                        <?php if($row->foto != null){ ?>
                        <div style="margin-bottom:5px">
                            <img src="<?=base_url(); ?>assets/gambar/user/<?=$row->foto;?>" style="width:50%">
                        </div>
                        <?php }?>
                        <input type="file" name="foto" class="form-control" size="20">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                        <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </div>

</section>