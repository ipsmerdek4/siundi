
  <div id="app">
    <div class="main-wrapper container ">
	    <div class="navbar-bg d-sm-none"></div> 
      <nav class="navbar navbar-expand-lg main-navbar pt-lg-3">
	  	<a href="<?=base_url()?>" class="navbar-brand text-primary d-none d-lg-inline w-50 text-center mx-auto my-0">
		  Si~UNDI 
		</a> 
	  	<a href="<?=base_url()?>" class="navbar-brand d-lg-none d-inline text-white w-100 text-center">Si~UNDI</a> 
      </nav>
 
      <!-- Main Content -->
      <div class="main-content  pt-lg-5">
        <section class="section  pt-lg-5">
          <div class="section-header py-5">
            <div class=" w-100  text-dark">
              <div class="col-12 mb-5">  
                <div class="text-center ">( Jumlah Kupon Diundi : <?=$totalKupon?> Kupon )</div>
                <div class="text-center text-uppercase h6">Data Terpilih</div>

                <div class="d-flex flex-column align-items-center">
                  <div class="text-center font-weight-bold h3 mt-4 font-size-sm-2">  
                    <div class="m-1"><?=$hasil?></div>
                    <div class="m-1  ">
                        <?=$JOINKUPON[0]->nama_lengkap?> - ( ID = <?=$JOINKUPON[0]->id_identitas?> )
                    </div>
                    <div class="mt-0 pt-0 mb-4  font-size-lg-1" >
                        <?=substr($JOINKUPON[0]->no_hp, 0, -5).'xxxxx'?>
                    </div>
                  </div> 
                </div>
                <div class="text-center">
                  <form action="<?=base_url()?>/result" id="formku" method="post">
                    <div class="col-12 col-sm-6 col-lg-3 p-0 form-group mx-auto border border-primary " id="b_from">

                      <select class="form-control" id="barangresult" name="cars"> 
                          <?php  foreach ($DataBarang as $dt_): ?>  
                          <option value="<?=$dt_->id_barang?>" <?php echo ($dt_->id_barang == $id_barang) ? "selected" : ""?>   > (<?=$dt_->nama_barang?>)<?=$dt_->keterangan ?></option> 
                          <?php endforeach; ?>                        
                      </select> 
                    </div> 
                  </form>
                   
                    <button class="btn btn-secondary " id="reset"  style="font-size:17px"> 
                      <div class="float-left mt-1">Reset</div> 
                    </button>       
                    <button class="btn btn-primary " id="pilih" data-id="<?=$JOINKUPON[0]->id_kupon?>" style="font-size:17px"> 
                      <div class="float-left mt-1">Pilih</div> 
                    </button> 
                    <button class="btn btn-info  " id="detail" style="font-size:17px" data-toggle="modal" data-target="#exampleModal" > 
                      <div class="float-left mt-1">Detail</div> 
                    </button> 
 

                </div> 
              </div>
            </div> 
          </div> 
        </section>
      </div>

   
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  >
      <div class="modal-dialog  modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Detail Pemenang</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              

            <div class="table-responsive">


                      <table class="table table-striped " id="table-1" style="width:760px">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Hadiah</th>
                            <th>Kode Kupon</th> 
                          </tr>
                        </thead> 
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>


            </div>
            <div class="modal-footer"> 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div> 
      </div>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Template By <a href="https://getstisla.com/">Stisla</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>


