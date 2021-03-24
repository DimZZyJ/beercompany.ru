
function ShowAddControls(){
					 
    var _r= document.getElementById('addshopcontrol');
    if (_r.style.visibility=='collapse'){
        _r.style.visibility='initial';
    }
    else {
        _r.style.visibility='collapse';
    }
 }		
 
 function AddAddControls(){
     ControlsCount++;
     var _tr = document.createElement('tr');
     _tr.innerHTML='<td>ID</td><td><input name="IDInput" type="text"></td><td>Адресс</td><td><input name="AdressInput" type="text"></td><td>Статус</td><td><input name="StatusInput" type="text"></td>';
     _tr.id='shop'+ControlsCount;
     
     document.getElementById('addshopcontrol').appendChild(_tr);
 }

 function DeleteAddControls(){
    var _child = document.getElementById('shop'+ControlsCount);
    if (ControlsCount<0){
        alert('Все элементы удалены');
    }else{
        _child.remove();
        ControlsCount--;
    }
    
 }