<?php if($this->session->flashdata('success')){ ?>
<div id="flash" data-flash="<?=$this->session->flashdata('success'); ?>"></div>
<div id="flash" data-flash="<?=$this->session->unset_userdata('success'); ?>"></div>
<?php } else if ($this->session->flashdata('gagal')) { ?>
<div id="flush" data-flush="<?=$this->session->flashdata('gagal'); ?>"></div>
<div id="flush" data-flush="<?=$this->session->unset_userdata('gagal'); ?>"></div>
<?php } ?>