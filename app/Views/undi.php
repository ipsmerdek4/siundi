
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
                <div class="text-center w-100 ">
                  <span class="h4">Selamat Datang</span><br>Di SI~UNDI ( Sistem Undian Doorprize )
                </div>   
              </div> 
              <div class="col-12">                
                <div class="text-center ">( Jumlah Kupon Diundi : <?=number_format($totalKupon)?> Kupon )</div> 
                <div class="text-center text-uppercase h6">Silahkan Klik Start Untuk Memulai</div>
                <div class="d-flex flex-column align-items-center">
                  <div class="text-center font-weight-bold h3 my-4  ">  
                    <div class=" float-left font-size-sm" id="output0"></div> 
                    <div class=" float-left font-size-sm" id="note1">-</div>
                    <div class=" float-left font-size-sm" id="output1"></div> 
                    <div class=" float-left font-size-sm" id="note2">-</div>
                    <div class=" float-left font-size-sm" id="output2"></div> 
                    <div class=" float-left font-size-sm" id="output3"></div> 

                  </div>
                </div>
                <div class="text-center">
                  <form action="<?=base_url()?>/result" id="formku" method="post">
                    <div class="col-12 col-sm-6 col-lg-3 p-0 form-group mx-auto border border-primary " id="b_from">

                      <select class="form-control" id="barang1" name="barangku"> 
                          <?php  foreach ($DataBarang as $dt_): ?>  
                          <?='<option value="'.$dt_->id_barang.'">('.$dt_->nama_barang.') '.$dt_->keterangan .'</option>'?> 
                          <?php endforeach; ?>                        
                      </select> 
                    </div>
                    <div id="VHSL"> </div>
                  </form>
                    <button class="btn btn-success px-5" id="start" style="font-size:17px">
                      <span class="ion-play float-left mt-1 mr-2" style="font-size:23px"></span>
                      <div class="float-left mt-1">Start</div> 
                    </button> 
                    <button class="btn btn-danger px-5" id="stop"style="font-size:17px">
                      <span class="ion-stop float-left mt-1 mr-2" style="font-size:23px"></span>
                      <div class="float-left mt-1">Stop</div> 
                    </button> 
                </div> 
              </div>
            </div> 
          </div> 
        </section>
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

