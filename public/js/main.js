(function(){
    'use strict'
    
    var cmds = document.getElementByClassName('del');
    var i;
    
    for (i=0; i < cmds.length; i++);
    cmds[i].addEventListener('click', function(e){
        e.prebentDefault();
       
       if (confirm('are you sure?')) {
           document.getElementById('form_' + this.dataset.id).submit();
       } 
    });
})();