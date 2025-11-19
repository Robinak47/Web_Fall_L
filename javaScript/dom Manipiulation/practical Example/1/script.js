const dataTF=document.getElementById("data");
const submitBtn=document.getElementById("submit");
const table=document.getElementById("tab");

submitBtn.addEventListener('click', addRow)

function addRow()
{
    let dataValue=dataTF.value.trim();
    const row=document.createElement("tr");
    row.innerHTML="<td>"+dataValue+ "</td>";
    row.style.border="1";
    table.append(row);
}

