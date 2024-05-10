$(document).ready(function() {
    // preload images
    $("#image_list a").each(function() {
        var swappedImage = new Image();
        swappedImage.src = $(this).attr("href");
    });
    
    // set up event handlers for links    
    $("#image_list a").click(function(evt) {
        evt.preventDefault();
        
        var imageURL = $(this).attr("href");
        var caption = $(this).attr("title");

        // Fade out the current image and caption over one second
        $("#image, #caption").fadeOut(1000, function() {
            // Display the new image and caption
            $("#image").attr("src", imageURL);
            $("#caption").text(caption);
            
            // Fade in the new image and caption over one second
            $("#image, #caption").fadeIn(1000);
        });
    });
    
    // move focus to first thumbnail
    $("li:first-child a").focus();
});