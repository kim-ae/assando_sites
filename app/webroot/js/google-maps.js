$(document).ready(function(){
    $('#map-canvas').gmap3({
        map:{
            options:{
                center:[-30.033823,-51.218995],
                zoom:15
            }
        },
        marker:{
              latLng:[-30.033823,-51.218995]
        }
    });
})