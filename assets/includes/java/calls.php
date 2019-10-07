<script>
function checkWIFI() 
{
                
              var html ="null";
                if (navigator.connection) 
                {
                    var type = navigator.connection.type;
                   

                    switch (type)
                    {
                        case navigator.connection.UNKNOWN:
                            html = "Direct Wifi";
                            break;
                        case navigator.connection.ETHERNET:
                            html = "Ethernet";
                            break;
                        case navigator.connection.WIFI:
                            html = "Wifi";
                            break;
                        case navigator.connection.CELL_2G:
                            html = "Cell 2G";
                            break;
                        case navigator.connection.CELL_3G:
                            html = "Cell 3G";
                            break;
                        case navigator.connection.CELL_4G:
                            html = "Cell 4G";
                            break;
                        case navigator.connection.CELL_5G:
                            html = "Cell 5G";
                            break;
                        case navigator.connection.CELL_6G:
                            html = "Cell 6G";
                            break;
                        default:
                            html = "WiiStream";
                    }
                } 
                else
                {
                    html = "Connection type not supported.";
                }

                return $('#connectionCheck').html(html);
}
      
    
function read_get_file(call,t)
{
  checkWIFI();
  
$.post('read.php?'+call+'&t='+t+'',{},function(data){

    update_tag(data);
console.log(data);
});
}


function hashHandler(){
  /*  this.oldHash = window.location.hash;
    this.Check;

    var that = this;
    var detect = function(){
        if(that.oldHash!=window.location.hash){
            //alert("HASH CHANGED - new has" + window.location.hash);
            that.oldHash = window.location.hash;
        }
    };

    if(detect == null)
    {

    }
    this.Check = setInterval(function(){ detect() }, 1000);*/
}

//var hashDetection = new hashHandler();

function update_tag(data)
{
return $('#c_a_h_').html(data);
}


</script>