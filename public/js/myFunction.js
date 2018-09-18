$(document).ready(function() {
    var a=0;
    $('#mypanel').click(function() {
        a+=1;
        if (a&1) 
            {myHover('panel', 'ov');} 
        else {myHover('panel', 'out');}
    });
});

function oninput1(key)
{
    var a = parseInt(document.getElementById('day'+key).value);
    var b = parseInt(document.getElementById('night'+key).value);
    document.getElementById('res'+key).innerHTML = a + b;
}

function oninput2(next, last)
{
    var mass0 = [0];
    var mass1 = [0];
    var p1 = 0;
    var p2 = 0;
    var sum0 = 0;
    var sum1 = 0;
    for (var i = next; i <= last; i++) {

        var example = document.getElementById('value'+i).value.split('+');
        
        if (example[0]!=='') {
            p1 = example[0];
            mass0[mass0.length] = p1;
        }
        
        if (example[1]!=='') {
            p2 = example[1];
            mass1[mass1.length] = p2;
        }     
    }    

    for(var i = 0; i < mass0.length; i++){
        if (mass0[i] == '' || null)
        {mass0[i] = 0;}
        if (mass1[i] == '')
        {mass1[i] = 0;}

        sum0 += parseInt(mass0[i]);
        sum1 += parseInt(mass1[i]);
    }

    document.getElementById('pmcd0').innerHTML = sum0;
    document.getElementById('pmcd1').innerHTML = sum1;
}

function AddLine()
{
    var table = document.getElementById("table4"); 
    var row = table.insertRow(table.rows.length); // Добавляем строку

     // Формируем строку элементов управления
    var index = (table.rows.length-2);
    var cell1 = row.insertCell(0);
    var text1 = document.createElement("div"); // Ввод text1
    text1.innerHTML= index+1;
    cell1.appendChild(text1);

    var arr = ["name", "article", "metric", "price", 
    "opt", "remain", "realization", "zamovl"];

    for (var i = 0; i <= arr.length - 1;  i++) {
        var cell = row.insertCell(i+1);
        
        var text = document.createElement("textarea"); // Ввод text2
        text.setAttribute("rows", '1');
        text.setAttribute("data", 'elastic');
        text.setAttribute("name", arr[i]+index);
        cell.appendChild(text);
        
    }
}

function AddLine1()
{
    var table = document.getElementById("table4"); 
    var row = table.insertRow(table.rows.length); // Добавляем строку

     // Формируем строку элементов управления
    var index = (table.rows.length-2);
    var cell1 = row.insertCell(0);
    var text1 = document.createElement("div"); // Ввод text1
    text1.innerHTML= index+1;
    cell1.appendChild(text1);

    var arr = ["date", "termin", "nespr", "type", "status", "no", 
    "pib", "tel", "adress", "model", "compl", "prod", "maister", "other"];

    for (var i = 0; i <= arr.length - 1;  i++) {
        var cell = row.insertCell(i+1);
        
        var text = document.createElement("textarea"); // Ввод text2
        text.setAttribute("rows", '1');
        text.setAttribute("data", 'elastic');
        text.setAttribute("name", arr[i]+index);
        cell.appendChild(text);
        
    }
}

function sizeAuto(key)
{ 
    var start = document.getElementById(key).size;
    var fact = document.getElementById(key).value.length;    
    if (fact > start) 
    {
        document.getElementById(key).size = fact + 4;
    }
}

function myHover(nameId, type)
{
    var tag = document.getElementById(nameId);
    if (type == 'ov') 
    {        
        tag.src = window.location.protocol+'//'+window.location.hostname+'/css/ico/'+nameId+'_active.png';
    }
    if (type == 'out')
    {
        tag.src = window.location.protocol+'//'+window.location.hostname+'/css/ico/'+nameId+'.png';
    }    
}