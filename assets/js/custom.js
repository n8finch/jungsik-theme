/**
 * Custom Functionality for the Jungsik theme
 */

//Load jQuery in No-Conflict mode

(function ($) {

  $(document).ready(function () {

    //Cache variables
    var $staffBios = $('.staff-bios');
    var $choiceMenuLink = $('#choice-menu-link');
    var $tastingMenuLink = $('#tasting-menu-link');
    var $tastingChoiceMenu = $('.tasting-menu-items');
    var $choiceMenuItems = $('.choice-menu-items');
    var $staffNameLinks = $('.staff-name-links');

    /**
     * Hide necessary elements on page load
     */
    //Hide Hello page elements
    $($staffBios).hide();

    //Hide Eat page elements
    $($tastingChoiceMenu).hide();

    /**
     * Click events to show page elements
     */

    //Hello Page show elements
    $($staffNameLinks).click(function(event) {
      event.preventDefault();
      var $bioToShow = $(this).attr('data-staff-pair');
      $bioToShow = '#' + $bioToShow;
      $($staffBios).slideUp();
      $($bioToShow).slideDown();
    });



    // Eat Page show elements
    $($choiceMenuLink).click(function () {
      $($tastingChoiceMenu).slideUp();
      $($choiceMenuItems).slideDown();
    });

    $($tastingMenuLink).click(function () {
      $($choiceMenuItems).slideUp();
      $($tastingChoiceMenu).slideDown();
    });


    //Modal
    $(function() {
      $("#modal-1").on("change", function() {
        if ($(this).is(":checked")) {
          $("body").addClass("modal-open");
        } else {
          $("body").removeClass("modal-open");
        }
      });

      $(".modal-fade-screen, .modal-close").on("click", function() {
        $(".modal-state:checked").prop("checked", false).change();
      });

      $(".modal-inner").on("click", function(e) {
        e.stopPropagation();
      });
    });


  });

})(jQuery);