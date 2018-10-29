(function($) {

    
    var FORM = $.multistepform = function() {
        FORM.init.apply( this, arguments );
    };
    $.extend(FORM, {
        current_fs: false, 
        next_fs: false, 
        previous_fs: false,
        animating: false,

        defaults: {
            container:'',
            duration: 1000,
            form_url: '',
            form_method: 'POST',
            onClose:function(){},
        },
        init: function(opts) {
            FORM.opts = $.extend(true, {}, FORM.defaults, opts);
            if(FORM.opts['form_url']) {
                var cont = $('<div id="'+FORM.opts['container']+'" class="multistepform" style="display:none; position: absolute; top:0; width: 100%; height: 100%; z-index: 9999;"></div>');
                $('body').append(cont);
                cont.html('<div id="multistepform"><div class="bg"></div><div class="close"></div><div id="multistepform-container"></div></div>');
                $.get(FORM.opts['form_url'], function( data ) {
                    $('#multistepform-container').html(data);
                    FORM._show();
                });
            } else {
                var cont = $('#'+FORM.opts['container']).addClass('multistepform').css({
                    'display':'none', 
                    'position': 'absolute',
                    'top':0,
                    'width': '100%',
                    'height': '100%',
                    'z-index': 9999
                });
                var data = cont.html();
                cont.html('<div id="multistepform"><div class="bg"></div><div class="close"></div><div id="multistepform-container">'+data+'</div></div>');
                FORM._show();
            }        
        },
        _show: function() {
            FORM.current_fs = $($('#'+FORM.opts['container']).find('.form')[0]);
            $('#'+FORM.opts['container']+' .next').click(FORM.next);
            $('#'+FORM.opts['container']+' .previous').click(FORM.prev);
            $('#'+FORM.opts['container']+' .close').click(FORM.close);
            $('#'+FORM.opts['container']).show();
            $('body').css({'overflow':'hidden'});
        },
        _next: function() {
            FORM.next_fs = FORM.current_fs.next();
	
            //activate next step on progressbar using the index of next_fs
            $("#multistepform-progressbar li").eq($(".form").index(FORM.next_fs)).addClass("active");

            //show the next fieldset
            FORM.next_fs.show(); 
            //hide the current fieldset with style
            FORM.current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
	                //as the opacity of current_fs reduces to 0 - stored in "now"
	                //1. scale current_fs down to 80%
	                scale = 1 - (1 - now) * 0.2;
	                //2. bring next_fs from the right(50%)
	                left = (now * 50)+"%";
	                //3. increase opacity of next_fs to 1 as it moves in
	                opacity = 1 - now;
	                FORM.current_fs.css({'transform': 'scale('+scale+')'});
	                FORM.next_fs.css({'left': left, 'opacity': opacity});
                }, 
                duration: FORM.opts['duration'], 
                complete: function(){
                    if(!FORM.next_fs[0]) {
                        FORM._close();
                    }
	                FORM.current_fs.hide();
                    FORM.current_fs = FORM.next_fs;
	                FORM.animating = false;

                    var curent_forms = FORM.current_fs.find('form');
                    for(var i=0;i<curent_forms.length;i++) {
                        (function(f){
                            $(f).find('.submit').click(function(e){
                                var form = f;
                                var form_data = $(form).serialize();
                                var url = $(form).attr('action');
                                $.ajax({
                                    type: FORM.opts['container'],
                                    url: url,
                                    data: form_data
                                });
                                e.preventDefault();
                            });
                        })(curent_forms[i]);
                    }
                }, 
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        },
        _close: function() {
            $('#'+FORM.opts['container']).hide();
            $('body').css({'overflow':'auto'});
        },
        close: function() {
            FORM.opts['onClose']();
            FORM._close();
        },
        next: function(){
	        if(FORM.animating) return false;
	        FORM.animating = true;
	
            var form = $(FORM.current_fs).children('form');
            if(form.length) {       
                var form_data = $(form[0]).serialize();
                $.ajax({
                    type: FORM.opts['form_method'],
                    url:$(form[0]).attr('action'),
                    data: form_data,
                    success: function(){
	                    FORM._next();
                    }
                });
            } else {
                FORM._next();
            }
        },
        prev: function() {
            if(FORM.animating) return false;
	        FORM.animating = true;
	
	        FORM.previous_fs = FORM.current_fs.prev();
	
	        //de-activate current step on progressbar
	        $("#multistepform-progressbar li").eq($(".form").index(FORM.current_fs)).removeClass("active");
	
	        FORM.previous_fs.show(); 
	        FORM.current_fs.animate({opacity: 0}, {
		        step: function(now, mx) {
			        //as the opacity of current_fs reduces to 0 - stored in "now"
			        //1. scale previous_fs from 80% to 100%
			        scale = 0.8 + (1 - now) * 0.2;
			        //2. take current_fs to the right(50%) - from 0%
			        left = ((1-now) * 50)+"%";
			        //3. increase opacity of previous_fs to 1 as it moves in
			        opacity = 1 - now;
			        FORM.current_fs.css({'left': left});
			        FORM.previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		        }, 
		        duration: FORM.opts['duration'], 
		        complete: function(){
			        FORM.current_fs.hide();
                    FORM.current_fs = FORM.previous_fs;
			        FORM.animating = false;
		        }, 
		        easing: 'easeInOutBack'
	        });
        }
    });
})(jQuery);


var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

$(document).ready(function(){
    $.multistepform({
        container:'multistepform-example-container',
        form_method:'GET',
    })
});


/*start of the drop down button*/ 


var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);


 /*end of the drop down button */