jQuery(document).ready(function(){
        //Bind the window onresize event
        jQuery(window).bind('resize', resizeWindow);

        //Call resizeWindow() function immediately to intiially set elements
        resizeWindow();
    });

    function resizeWindow(){
//		alert(1);
        //Find all the container parent objects
        jQuery('.container').each(function(){
            //Initialize the height variable
            var maxHeight = 0;
			//Cache the jQuery object for faster DOM access and performance
            var $borders = jQuery(this).find('.block-grid-3');
				$borders.css('height','auto');
			//Find all the border child elements within this specific container
            $borders.each(function(){
                //Get current element's height
                var thisHeight = jQuery(this).height();

                //Check if the current height is greater than the max height thus far
                //If so, change max height to this height
                if (thisHeight>maxHeight) maxHeight = thisHeight;
            });
			
            //Now that we have the maximum height of the elements,
            //set that height for all the .border child elements inside the parent element
            $borders.height(maxHeight);
        });
    }