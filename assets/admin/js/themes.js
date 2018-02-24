/**
 * Created by Administrator on 28/08/2016.
 */
function check_logout(){
    if(confirm("You want logout?")){
        return true;
    }else{
        return false;
    }
}
function check_del(){
    if(confirm("Are you sure?")){
        return true;
    }else{
        return false;
    }
}