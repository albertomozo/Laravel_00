<?PHP

function setActive($routeName)
{
    return  request()->routeIs($routeName) ? 'active' : '' ;
}
?>