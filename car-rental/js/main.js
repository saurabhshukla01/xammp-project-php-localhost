(function ($) {
    "use strict";
  
    // Mobile Navigation
    if ($('.main-nav').length) {
      var $mobile_nav = $('.main-nav').clone().prop({
        class: 'mobile-nav d-lg-none'
      });
      $('body').append($mobile_nav);
      $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>');
      $('body').append('<div class="mobile-nav-overly"></div>');
  
      $(document).on('click', '.mobile-nav-toggle', function(e) {
        $('body').toggleClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
        $('.mobile-nav-overly').toggle();
      });
      
      $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('active');
      });
  
      $(document).click(function(e) {
        var container = $(".mobile-nav, .mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
            $('.mobile-nav-overly').fadeOut();
          }
        }
      });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
      $(".mobile-nav, .mobile-nav-toggle").hide();
    }
  
  })(jQuery);



// Iterate over each select element
$('#selectbox1').each(function () {

  // Cache the number of options
  var $this = $(this),
      numberOfOptions = $(this).children('option').length;

  // Hides the select element
  $this.addClass('s-hidden');

  // Wrap the select element in a div
  $this.wrap('<div class="select"></div>');

  // Insert a styled div to sit over the top of the hidden select element
  $this.after('<div class="styledSelect"></div>');

  // Cache the styled div
  var $styledSelect = $this.next('div.styledSelect');

  // Show the first select option in the styled div
  $styledSelect.text($this.children('option').eq(0).text());

  // Insert an unordered list after the styled div and also cache the list
  var $list = $('<ul />', {
      'class': 'options'
  }).insertAfter($styledSelect);

  // Insert a list item into the unordered list for each select option
  for (var i = 0; i < numberOfOptions; i++) {
      $('<li />', {
          text: $this.children('option').eq(i).text(),
          rel: $this.children('option').eq(i).val()
      }).appendTo($list);
  }

  // Cache the list items
  var $listItems = $list.children('li');

  // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
  $styledSelect.click(function (e) {
      e.stopPropagation();
      $('div.styledSelect.active').each(function () {
          $(this).removeClass('active').next('ul.options').hide();
      });
      $(this).toggleClass('active').next('ul.options').toggle();
  });

  // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
  // Updates the select element to have the value of the equivalent option
  $listItems.click(function (e) {
      e.stopPropagation();
      $styledSelect.text($(this).text()).removeClass('active');
      $this.val($(this).attr('rel'));
      $list.hide();
      /* alert($this.val()); Uncomment this for demonstration! */
  });

  // Hides the unordered list when clicking outside of it
  $(document).click(function () {
      $styledSelect.removeClass('active');
      $list.hide();
  });

});

// Iterate over each select element
$('#selectbox2').each(function () {

  // Cache the number of options
  var $this = $(this),
      numberOfOptions = $(this).children('option').length;

  // Hides the select element
  $this.addClass('s-hidden');

  // Wrap the select element in a div
  $this.wrap('<div class="select"></div>');

  // Insert a styled div to sit over the top of the hidden select element
  $this.after('<div class="styledSelect"></div>');

  // Cache the styled div
  var $styledSelect = $this.next('div.styledSelect');

  // Show the first select option in the styled div
  $styledSelect.text($this.children('option').eq(0).text());

  // Insert an unordered list after the styled div and also cache the list
  var $list = $('<ul />', {
      'class': 'options'
  }).insertAfter($styledSelect);

  // Insert a list item into the unordered list for each select option
  for (var i = 0; i < numberOfOptions; i++) {
      $('<li />', {
          text: $this.children('option').eq(i).text(),
          rel: $this.children('option').eq(i).val()
      }).appendTo($list);
  }

  // Cache the list items
  var $listItems = $list.children('li');

  // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
  $styledSelect.click(function (e) {
      e.stopPropagation();
      $('div.styledSelect.active').each(function () {
          $(this).removeClass('active').next('ul.options').hide();
      });
      $(this).toggleClass('active').next('ul.options').toggle();
  });

  // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
  // Updates the select element to have the value of the equivalent option
  $listItems.click(function (e) {
      e.stopPropagation();
      $styledSelect.text($(this).text()).removeClass('active');
      $this.val($(this).attr('rel'));
      $list.hide();
      /* alert($this.val()); Uncomment this for demonstration! */
  });

  // Hides the unordered list when clicking outside of it
  $(document).click(function () {
      $styledSelect.removeClass('active');
      $list.hide();
  });

});

(function($) {

  'use strict';

  var $filters = $('.filter [data-filter]'),
    $boxes = $('.boxes [data-category]');

  $filters.on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    
    $filters.removeClass('active');
    $this.addClass('active');

    var $filterColor = $this.attr('data-filter');

    if ($filterColor == 'all') {
      $boxes.removeClass('is-animated')
        .fadeOut().finish().promise().done(function() {
          $boxes.each(function(i) {
            $(this).addClass('is-animated').delay((i++) * 200).fadeIn();
          });
        });
    } else {
      $boxes.removeClass('is-animated')
        .fadeOut().finish().promise().done(function() {
          $boxes.filter('[data-category = "' + $filterColor + '"]').each(function(i) {
            $(this).addClass('is-animated').delay((i++) * 200).fadeIn();
          });
        });
    }
  });

})(jQuery);
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
  document.getElementById("prevBtn").style.display = "none";
  } else {
  document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
  document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
  document.getElementById("nextBtn").innerHTML = "Book Now";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
  // ... the form gets submitted:
  document.getElementById("regForm").submit();
  return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
  // If a field is empty...
  if (y[i].value == "") {
    // add an "invalid" class to the field:
    y[i].className += " invalid";
    // and set the current valid status to false
    valid = false;
  }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
  document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
  x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
  $(document).ready(function(){
  
    var callbackRangeCalendar =  $("#cal5").rangeCalendar({changeRangeCallback: rangeChanged,weekends:true});
    
    function rangeChanged(target,range){
    
      
      console.log(range);
      var startDay = moment(range.start).format('DD');
      var startMonth = moment(range.start).format('MMM');
      var startYear = moment(range.start).format('YYYY');
      var endDay = moment(range.end).format('DD');
      var endMonth = moment(range.end).format('MMM');
      var endYear = moment(range.end).format('YYYY');
      
      
      $(".calendar-values .start-date .value").html(startDay);
      $(".calendar-values .start-date .label").html("");
      $(".calendar-values .start-date .label").append(startMonth);
      $(".calendar-values .start-date .label").append("<small>"+startYear+"</small>");
      $(".calendar-values .end-date .value").html(endDay);
      $(".calendar-values .end-date .label").html("");
      $(".calendar-values .end-date .label").append(endMonth);
      $(".calendar-values .end-date .label").append("<small>"+endYear+"</small>");
      $(".calendar-values .days-width .value").html(range.width);
      $(".calendar-values .from-now .label").html(range.fromNow);
      
    }
  
    function ragneChanged(target,range) {
      
      console.log(range);
    }
  
  });
  $(document).ready(function(){
	
		var callbackRangeCalendar =  $("#cal5").rangeCalendar({changeRangeCallback: rangeChanged,weekends:true});
		
		function rangeChanged(target,range){
	    
			
			console.log(range);
		    var startDay = moment(range.start).format('DD');
		    var startMonth = moment(range.start).format('MMM');
		    var startYear = moment(range.start).format('YY');
		    var endDay = moment(range.end).format('DD');
		    var endMonth = moment(range.end).format('MMM');
		    var endYear = moment(range.end).format('YY');
		    
		    
		    $(".calendar-values .start-date .value").html(startDay);
		    $(".calendar-values .start-date .label").html("");
		    $(".calendar-values .start-date .label").append(startMonth);
		    $(".calendar-values .start-date .label").append("<small>"+startYear+"</small>");
		    $(".calendar-values .end-date .value").html(endDay);
		    $(".calendar-values .end-date .label").html("");
		    $(".calendar-values .end-date .label").append(endMonth);
		    $(".calendar-values .end-date .label").append("<small>"+endYear+"</small>");
		    $(".calendar-values .days-width .value").html(range.width);
		    $(".calendar-values .from-now .label").html(range.fromNow);
		    
		}
    
		function ragneChanged(target,range) {
			
			console.log(range);
		}
    
  });
 