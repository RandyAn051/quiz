var rIndex,

    table = document.getElementById("table");
            
            // check the empty input
     function checkEmptyInput()
        {
                var isEmpty = false,
                    kode = document.getElementById("kode").value,
                    tanggal = document.getElementById("tanggal").value,
                    pembeli = document.getElementById("pembeli").value,
                    barang = document.getElementById("barang").value;

                if(kode === ""){
                    alert("kotak kode tidak boleh kosong");
                    isEmpty = true;
                }
                else if(tanggal === ""){
                    alert("kotak tanggal tidak boleh kosong");
                    isEmpty = true;
                }
                else if(pembeli === ""){
                    alert("kotak pembeli tidak boleh kosong");
                    isEmpty = true;
                }
                else if(barang === ""){
                    alert("kotak barang tidak boleh kosong");
                    isEmpty = true;
                }
                return isEmpty;
            }
            
            // add Row
            function addHtmlTableRow()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                // set the values into row cell's
                if(!checkEmptyInput()){
                var newRow = table.insertRow(table.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2),
                    cell4 = newRow.insertCell(3),

                    kode = document.getElementById("kode").value,
                    tanggal = document.getElementById("tanggal").value,
                    pembeli = document.getElementById("pembeli").value,
                    barang = document.getElementById("barang").value;

                cell1.innerHTML = kode;
                cell2.innerHTML = tanggal;
                cell3.innerHTML = pembeli;
                cell4.innerHTML = barang;
                // call the function to set the event to the new row
                selectedRowToInput();
            }
            }
            
            // display selected row data into input text
            function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("kode").value = this.cells[0].innerHTML
                      document.getElementById("tanggal").value = this.cells[1].innerHTML;
                      document.getElementById("pembeli").value = this.cells[2].innerHTML;
                      document.getElementById("barang").value = this.cells[3].innerHTML;
                    };
                }
            }
            selectedRowToInput();
            
            function editHtmlTbleSelectedRow()
            {
                var kode = document.getElementById("kode").value,
                    tanggal = document.getElementById("tanggal").value,
                    pembeli = document.getElementById("pembeli").value,
                    barang = document.getElementById("barang").value;

               if(!checkEmptyInput()){
                table.rows[rIndex].cells[0].innerHTML = kode;
                table.rows[rIndex].cells[1].innerHTML = tanggal;
                table.rows[rIndex].cells[2].innerHTML = pembeli;
                table.rows[rIndex].cells[3].innerHTML = barang;
              }
            }
            
            function removeSelectedRow()
            {
                table.deleteRow(rIndex);
                // clear input text
                document.getElementById("kode").value = "";
                document.getElementById("tanggal").value = "";
                document.getElementById("pembeli").value = "";
                document.getElementById("barang").value = "";
            }