

function $ID( id ) {
    return document.getElementById(id);
}



function checkInvalidValue( id ) {
    let d = $ID(id);
    return d.value == "";

}

function checkNameAndPass() {
    
    if ( checkInvalidValue("name") || checkInvalidValue("pass") ) {
        window.alert("name or pass are invalid status.");
        return false;
    }
    
    return true;

}

function setAttr( id, elm, val ) {
    let d = $ID(id);
    
    d.setAttribute(elm, val);

}

function main() {
    
    setAttr("login", "onclick", "return checkNameAndPass(this)");


}
