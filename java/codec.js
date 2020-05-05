var rIndex,

    table = document.getElementById("table");
            
   
            function addHtmlTableRow()
            {
   
                var newRow = table.insertRow(table.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2),
                    cell4 = newRow.insertCell(3),
                    cell5 = newRow.insertCell(4),

                    kode = document.getElementById("kode").value,
                    pembeli = document.getElementById("pembeli").value,
                    jenis = document.getElementById("jenis").value,
                    alamat = document.getElementById("alamat").value,
                    kota = document.getElementById("kota").value;

                cell1.innerHTML = kode;
                cell2.innerHTML = pembeli;
                cell3.innerHTML = jenis;
                cell4.innerHTML = alamat;
                cell5.innerHTML = kota;
                // call the function to set the event to the new row
                selectedRowToInput();
            }
            
            // display selected row data into input text
            function selectedRowToInput()
            {
                
                for(var i = 0; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("kode").value = this.cells[0].innerHTML
                      document.getElementById("pembeli").value = this.cells[1].innerHTML
                      document.getElementById("jenis").value = this.cells[2].innerHTML;
                      document.getElementById("alamat").value = this.cells[3].innerHTML;
                      document.getElementById("kota").value = this.cells[4].innerHTML;
                    };
                }
            }
            selectedRowToInput();
            
            function editHtmlTbleSelectedRow()
            {
                var kode = document.getElementById("kode").value,
                    pembeli = document.getElementById("pembeli").value,
                    jenis = document.getElementById("jenis").value,
                    alamat = document.getElementById("alamat").value,
                    kota = document.getElementById("kota").value;

               if(!checkEmptyInput()){
                table.rows[rIndex].cells[0].innerHTML = kode;
                table.rows[rIndex].cells[1].innerHTML = pembeli;
                table.rows[rIndex].cells[2].innerHTML = jenis;
                table.rows[rIndex].cells[3].innerHTML = alamat;
                table.rows[rIndex].cells[4].innerHTML = kota;
              }
            }
            
            function removeSelectedRow()
            {
                table.deleteRow(rIndex);
                // clear input text
                document.getElementById("kode").value = "";
                document.getElementById("pembeli").value = "";
                document.getElementById("jenis").value = "";
                document.getElementById("alamat").value = "";
                document.getElementById("kota").value = "";
            }