 
        
        function stringacak(panjang) { 
            let hasilnya = ''; 
            //const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            const characak = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

            for ( let i = 0; i < panjang; i++ ) {
                hasilnya += characak.charAt(Math.floor(Math.random() *  characak.length ));
            }
                
            return hasilnya;
        } 

           

        function generateNumberstart() 
        {
            animationTimerss = setInterval(function() { 
                $('#output0').text( stringacak(3) );     
                $('#output1').text( stringacak(4) );     
                $('#output2').text( stringacak(4) );     
                $('#output3').html( '&nbsp;(' +  stringacak(3) + "-" + stringacak(4) + "-" + stringacak(4) + ')');         
            }, 100); //kecepatan acak 

        }

   
        function generateNumberstop(index) { 
            var datadiambil = acakkata[index]; 
            var duration = 1000; //durasi stop 1000 = 1 detik

            var output = $('#output' + index); //tampilkan outpun berdasarkan urutan id
            var started = new Date().getTime(); 

            animationTimer = setInterval(function() {  


                if ((output.text().trim() == datadiambil) || (new Date().getTime() - started > duration)) {
                    clearInterval(animationTimer); // Stop perulangan 
                    output.html( datadiambil );   
                    output.addClass("text-primary");
                    $('#note1').addClass("text-primary");
                    $('#note2').addClass("text-primary");

                    generateNumberstop(index + 1); // memanggil index selanjutnya  
                    
                    if (index == acakkata.length-1) {  
                        var p_acak3 = acakkata[3].split("&nbsp;");
                        var p_acak3_2 = p_acak3[1].split("(");
                        var p_acak3_3 = p_acak3_2[1].split(")");
                        
                        $('#VHSL').html('<input type="hidden" id="HSL" name="HSL" readonly>');
                        
                        var hasil = acakkata[0] + '-' + acakkata[1] + '-' + acakkata[2] + '-' + p_acak3_3[0];
                         
                        $("#HSL").val(hasil); 
 
                    }else if (index == acakkata.length) { 
                        document.getElementById('formku').submit();
                    }  
                }else{ 
                    if (index == 0) { 
                        $('#output0').text( stringacak(3) );     
                        $('#output1').text( stringacak(4) );     
                        $('#output2').text( stringacak(4) );     
                        $('#output3').html( '&nbsp;(' +  stringacak(3) + "-" + stringacak(4) + "-" + stringacak(4) + ')');         
                    }else if (index == 1) {     
                        $('#output1').text( stringacak(4) );     
                        $('#output2').text( stringacak(4) );     
                        $('#output3').html( '&nbsp;(' +  stringacak(3) + "-" + stringacak(4) + "-" + stringacak(4) + ')');      
                    }else if (index == 2) {     
                        $('#output2').text( stringacak(4) );     
                        $('#output3').html( '&nbsp;(' +  stringacak(3) + "-" + stringacak(4) + "-" + stringacak(4) + ')');      
                    }else if (index == 3) {      
                        $('#output3').html( '&nbsp;(' +  stringacak(3) + "-" + stringacak(4) + "-" + stringacak(4) + ')'.trim());       
                    }   
                } 

            }, 100); //kecepatan acak 
        }


        function button_stop() { 
            v_button_stop = setInterval(function() {    
                $('#stop').show();
                clearInterval(v_button_stop);
            }, 1500);   //1 detik baru keluar tombol stop
        }

        function getbarang() { 
            var data = { access_val : $("#barang1").val(), };   
            $.getJSON("/undi/v", data, function (result) {   
                $.each(result.tampil, function() {
                    if ( result.tampil.data == 0) {  //cegah yang sudah dapat-dapat lagi
                        console.log(  result.tampil.data );   
                        getbarang(); 

                    }else{
                        
                        button_stop();
                        
                        var P_kode = this['kode_kupon'].split("-");
                        let data1 = P_kode[0];
                        let data2 = P_kode[1];
                        let data3 = P_kode[2];
                        let data4 ="&nbsp;("+P_kode[3]+"-"+P_kode[4]+"-"+P_kode[5]+")";  
    
                        return acakkata = new Array(data1, data2, data3, data4); 
                        
                       
                       
                    } 

                });   
            }); 

            
 
        }


        $('#stop').click(function() { 
            clearInterval(animationTimerss);
            generateNumberstop(0); 
            
            $('#stop').attr('disabled', true);

        });


        $('#start').click(function() {  
            getbarang();  
            
            $('#start').hide(); 
            generateNumberstart();
            $('#b_from').removeClass("border border-primary");
            $('#barang1').on('mousedown', function(e) {
                e.preventDefault();
                this.blur();
                window.focus();
             });
           
        });
 
        $('#stop').hide();


