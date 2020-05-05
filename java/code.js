var rIndex,

    table = document.getElementById("table");

         
            function addHtmlTableRow()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                var newRow = table.insertRow(table.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2),
                    cell4 = newRow.insertCell(3),
                    cell5 = newRow.insertCell(5),
                    cell6 = newRow.insertCell(6),

                    kode = document.getElementById("kode").value,
                    barang = document.getElementById("barang").value,
                    merk = document.getElementById("merk").value,
                    type = document.getElementById("type").value,
                    harga = document.getElementById("harga").value,
                    stock = document.getElementById("stock").value;

                cell1.innerHTML = kode;
                cell2.innerHTML = barang;
                cell3.innerHTML = merk;
                cell4.innerHTML = type;
                cell5.innerHTML = harga;
                cell6.innerHTML = stock;
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
                      document.getElementById("barang").value = this.cells[1].innerHTML;
                      document.getElementById("merk").value = this.cells[2].innerHTML;
                       document.getElementById("type").value = this.cells[3].innerHTML;
                      document.getElementById("harga").value = this.cells[4].innerHTML;
                       document.getElementById("stock").value = this.cells[5].innerHTML;
                    };
                }
            }
            selectedRowToInput();
            
            function editHtmlTbleSelectedRow()
            {
                var  kode = document.getElementById("kode").value,
                    barang = document.getElementById("barang").value,
                    merk = document.getElementById("merk").value,
                    type = document.getElementById("type").value,
                    harga = document.getElementById("harga").value,
                    stock = document.getElementById("stock").value;

               if(!checkEmptyInput()){
                table.rows[rIndex].cells[0].innerHTML = kode;
                table.rows[rIndex].cells[1].innerHTML = barang;
                table.rows[rIndex].cells[2].innerHTML = merk;
                table.rows[rIndex].cells[3].innerHTML = type;
                table.rows[rIndex].cells[4].innerHTML = harga;
                table.rows[rIndex].cells[5].innerHTML = stock;
              }
            }
            
            function removeSelectedRow()
            {
                table.deleteRow(rIndex);
                // clear input text
                document.getElementById("kode").value = "";
                document.getElementById("barang").value = "";
                document.getElementById("merk").value = "";
                document.getElementById("type").value = "";
                document.getElementById("harga").value = "";
                document.getElementById("stock").value = "";
            }