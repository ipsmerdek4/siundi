
              $.fn.dataTable.ext.errMode = 'throw';
        
            $('#b_from').removeClass("border border-primary");
            $('#barangresult').on('mousedown', function(e) {
                e.preventDefault();
                this.blur();
                window.focus();
             });

            $('#reset').click(function() {
                window.location = window.location.origin;;
            });

          


            function vdatable() {   
                var table = $('#table-1').DataTable({ 
                    "bDestroy": true,
                    "autoWidth": false,
                    "columnDefs": [
                        { "width": "10%", "targets": 0 },
                        { "width": "20%", "targets": 1 },
                        { "width": "10%", "targets": 2 },
                        { "width": "20%", "targets": 3 },
                        { "width": "40%", "targets": 4 }, 
                      ], 
                    'serverMethod': 'get',
                    'ajax': {
                        'url':'/result/vv'
                    }, 
                    'columns': [
                       { data: 'no' },
                       { data: 'nama_lengkap' },
                       { data: 'no_hp' },
                       { data: 'hadiah' },
                       { data: 'kode_kupon' },
                    ], 
                    
                
                
                });
                 
            }


           /*  $('#detail').click(function() { 
                vdatable() ;
            });  */
            $(document).ready(function() {
                vdatable() ;
            } );
            


            
            $('#pilih').click(function() {
                var data_id = $(this).data('id');   
                var data = { access_val : data_id, };   
                $.getJSON("/result/v", data, function (result) {   
                    $.each(result.tampil, function() { 
                        //console.log(  result.tampil.TEXT ); 
                        $('#table-1').DataTable().ajax.reload();
                        swal('Selamat', 'Data berhasil Disimpan', 'success'); 
                        $('#pilih').hide();
                        
                    });   
                }); 
            });