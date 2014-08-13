<div class="tableoptions">
                	<button onclick="window.location.href='/page2'" class="deletebutton radius3" title="Tambah Pengumuman">Tambah Pengumuman</button> &nbsp;
                     
                    <select class="radius3">
                    	<option value="">Kategori</option>
                        <option value="">Rendering Engine</option>
                        <option value="">Platform</option>
                    </select> &nbsp;
                    <button class="radius3">Apply Filter</button>
                </div><!--tableoptions-->	
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="stdtable">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
  <tr>
    <td width="5%" align="center">No</td>
    <td width="45%" align="left">Judul</td>
    <td width="15%" align="center">Kategori</td>
    <td width="15%">Tgl Publish</td>
    <td width="20%" class="center">Aksi</td>
  </tr>
  					</thead>
<?php foreach ($homes as $hm): ?>
  <tr>
    <td width="5%" align="center">1</td>
    <td width="45%" align="left"><?php echo $hm->judul_pengumuman;?></td>
    <td width="15%" align="center"><?php echo $hm->kategori;?></td>
    <td width="15%"><?php echo $hm->tanggal_publish;?></td>
    <td width="20%" align="center"><a href="<?php echo base_url() ?>admin/pengumuman_edit/<?php echo $hm->id_pengumuman;?>" class="edit">Edit</a> &nbsp;&#8212;&nbsp; <a href="#" class="delete">Delete</a></td>
  </tr>
<?php endforeach; ?> 
</table><br><br>
<center><?php echo $halaman;?></center>