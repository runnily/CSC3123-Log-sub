function mktoggle(t,e){return'<i class="'+t+" fas fa-toggle-"+(e?"on":"off")+'"></i>'}function tick(t){return mktoggle("",t)}function toggle(t){t.toggleClass("fa-toggle-off").toggleClass("fa-toggle-on")}function dotoggle(t,e,a,o){if(t.preventDefault(),t.stopPropagation(),!e.hasClass("fadis"))if(e.hasClass("htick")){// this is not yet created so tick the hidden box
var n=e.next();n.val(1==n.val()?0:1),toggle(e)}else{// toggle at the other end
var l=e.parent().parent();$.ajax(base+"/ajax/toggle/"+a+"/"+l.data("id")+"//"+o,{method:"PATCH"}).done(function(){toggle(e)}).fail(function(t){bootbox.alert("<h3>Toggle failed</h3>"+t.responseText)})}}function dodelbean(t,a,o){t.preventDefault(),t.stopPropagation(),bootbox.confirm("Are you sure you you want to delete this "+o+"?",function(t){if(t){// user picked OK
var e=$(a).parent().parent();$.ajax(base+"/ajax/bean/"+o+"/"+e.data("id")+"/",{method:"DELETE"}).done(function(){e.css("background-color","yellow").fadeOut(1500,function(){e.remove()})}).fail(function(t){bootbox.alert("<h3>Delete failed</h3>"+t.responseText)})}})}function tableClick(e){e.preventDefault();var a=$(e.target);e.data.clicks.forEach(function(t){a.hasClass(t[0])&&t[1](e,a,e.data.bean,t[2])})}