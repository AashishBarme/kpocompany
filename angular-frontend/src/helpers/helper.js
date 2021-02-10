//convert date fromat from wordpress db to F,j Y
function DateFormat(date)
{
    var options = { year: 'numeric', month: 'long', day: 'numeric' };
    var today  = new Date(date);
    var new_date = today.toLocaleDateString("en-US",options);
    return new_date;   
}

function menuOpen()
{
    let element = document.getElementById("mobile_nav");
    element.classList.toggle("display_nav_menu");
}

function submenuDisplay()
{
    let element = document.getElementById("sub-menu");
    element.classList.toggle("display_nav_menu");
}