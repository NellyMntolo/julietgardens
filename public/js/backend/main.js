
/*
*
* Authour: Nelly
*
*/

$('<div id="particles-js"></div>').insertBefore('.content-header');

// Toastrs
$('.toastrDefaultSuccess').click(function() {
  toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});
$('.toastrDefaultInfo').click(function() {
  toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});
$('.toastrDefaultError').click(function() {
  toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});
$('.toastrDefaultWarning').click(function() {
  toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});



// Bootstrap Tour
// Found a change that is necessary for the tour to work properly Popovers are now using:
// .popover-header instead of .popover-title
// .popover-body instead of .popover-content
// Should be updated in the template
var tour = new Tour({
  name: "tour",
  // steps: [],
  steps: [
    {
      element: "#top-nav-home-btn",
      title: "Home Page",
      content: "Welcome to your new back-end. follow these steps to learn more about basic usage."
    },
    {
      element: "#top-nav-settings-btn",
      title: "General Settings",
      content: "Content of my step"
    },
    {
      element: "#top-nav-language-btn",
      title: "Language Settings",
      content: "Add/Edit/Sort Languages."
    },
    {
      element: "#top-nav-chat-btn",
      title: "Chat",
      content: "Maintain or join chatroom."
    },
    {
      element: "#top-nav-meetings-btn",
      title: "Meetings",
      content: "Maintain Scheduling and Meetings."
    },
    {
      element: "#top-nav-choose-lang-btn",
      title: "Title of my step",
      content: "Select a prefered language."
    },
    {
      element: "#top-nav-notifications-btn",
      title: "Notifications",
      content: "See Recent Notifications."
    },
    {
      element: "#top-nav-fullscreen-btn",
      title: "Fullscreen",
      content: "Trigger Fullscreen Mode."
    },
    {
      element: "#top-nav-profile-btn",
      title: "Title of my step",
      content: "Content of my step"
    },
    {
      element: "#my-other-element",
      title: "Title of my step",
      content: "Content of my step",
      path: "/url/to/go/to/"
    }
  ],
  container: "body",
  smartPlacement: true,
  keyboard: true,
  storage: window.localStorage,
  debug: false,
  backdrop: false,
  backdropContainer: 'body',
  backdropPadding: 0,
  redirect: true,
  orphan: false,
  duration: false,
  delay: false,
  basePath: "",
  template: "<div class='popover tour'><div class='arrow'></div><h3 class='popover-title'></h3>div class='popover-content'></div><div class='popover-navigation'><button class='btn btn-default' data-role='prev'>« Prev</button><span data-role='separator'>|</span><button class='btn btn-default' data-role='next'>Next »</button></div><button class='btn btn-default' data-role='end'>End tour</button></div>",
  afterGetState: function (key, value) {},
  afterSetState: function (key, value) {},
  afterRemoveState: function (key, value) {},
  onStart: function (tour) {},
  onEnd: function (tour) {},
  onShow: function (tour) {},
  onShown: function (tour) {},
  onHide: function (tour) {},
  onHidden: function (tour) {},
  onNext: function (tour) {},
  onPrev: function (tour) {},
  onPause: function (tour, duration) {},
  onResume: function (tour, duration) {},
  onRedirectError: function (tour) {}  
});
// Bootstrap Tour

// self-XSS
// setTimeout(console.log.bind(console, '%cNelly', 'color: #FF00FF;'), 0);    
var xss_cssRule =
"color: rgb(44, 120, 189);" +
"font-size: 100px;" +
"font-weight: bold;" +
"text-shadow: 5px 5px 10px rgba(137,194,255,100);" +
"filter: dropshadow(color=rgba(137,194,255,100), offx=1, offy=1);";
setTimeout(console.log.bind(console,'%cNelly', xss_cssRule), 0);
// self-XSS


// Tab-Temporary client browser storage || on test
$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
});
var activeTab = localStorage.getItem('activeTab');
if(activeTab){
    //  $('#myTab a[href="' + activeTab + '"]').tab('show');
    $('.nav-pills a[href="' + activeTab + '"]').tab('show');
}
// Tab-Temporary client browser storage

// Dashboard Calendar
$('#cal').datetimepicker({
  format: 'L',
  inline: true
});
// Dashboard Calendar


// Preloader
$('.preloader').hide();
// Preloader


//  Sortings
$(function() {
        $('#lang_sorter').sortable({
          placeholder: "ui-state-highlight",
          items: '.lang-list',
          revert: true,
          over: function() {
             $('.ui-state-highlight').stop().animate({
                 height: 0
             }, 400);
          },
          change: function() {
             $('.ui-state-highlight').stop().animate({
                 height: 200
             }, 400);
          },
          update: function() {
             $('.ui-state-highlight').stop().animate({
                 height: 200
             }, 400);
          }, 

          // stop: function (event, ui) {
          // var data = $(this).sortable('serialize');
          //     $.ajax({
          //         type: "POST",
          //         url:"/Admin/SortShopProduct",
          //         data: data,
          //         success: function (response) {
          //         //alert(response);                      
          //         $("#sorter").html(response); 
          //         //console.log(data);
          //         },            
          //         error: function (jXHR, textStatus, errorThrown) {
          //            alert(errorThrown);               
          //         }
          //     });
          // }
      });
      $( "#sorter" ).disableSelection();
  });


$(function() {
      $('#social_media_sorter').sortable({
        placeholder: "ui-state-highlight",
        items: '.social-list',
        revert: true,
        over: function() {
           $('.ui-state-highlight').stop().animate({
               height: 0
           }, 400);
        },
        change: function() {
           $('.ui-state-highlight').stop().animate({
               height: 200
           }, 400);
        },
        update: function() {
           $('.ui-state-highlight').stop().animate({
               height: 200
           }, 400);
        }, 

        // stop: function (event, ui) {
        // var data = $(this).sortable('serialize');
        //     $.ajax({
        //         type: "POST",
        //         url:"/Admin/SortShopProduct",
        //         data: data,
        //         success: function (response) {
        //         //alert(response);                      
        //         $("#sorter").html(response); 
        //         //console.log(data);
        //         },            
        //         error: function (jXHR, textStatus, errorThrown) {
        //            alert(errorThrown);               
        //         }
        //     });
        // }
    });
    $( "#social_media_sorter" ).disableSelection();
});
//  Sortings

// image previews
var imgInp = document.getElementById('customFile');
var customFileContact = document.getElementById('customFileContact');
var customFileContact_two = document.getElementById('customFileContact_two');
var customFile_section_two = document.getElementById('customFile_section_two');
var customFile_section_four = document.getElementById('customFile_section_four');
var customFile_slider = document.getElementById('customFile_slider');
var customFile_news = document.getElementById('customFile_news');
var customFile_about_one = document.getElementById('customFile_about_one');
var customFile_about_two = document.getElementById('customFile_about_two');
var customFile_service_one = document.getElementById('customFile_service_one');
var customFile_service_two = document.getElementById('customFile_service_two');
var customFile_we_do = document.getElementById('customFile_we_do');
var customFile_gallery = document.getElementById('customFile_gallery');
var blah = document.getElementById('actual_preview');
var contact_blah = document.getElementById('actual_contact_preview_one');
var contact_blah_two = document.getElementById('actual_contact_preview_two');
var index_section_two_blah = document.getElementById('actual_index_section_two_preview');
var index_section_four_blah = document.getElementById('actual_index_section_four_preview');
var actual_preview_slider = document.getElementById('actual_preview_slider');
var actual_preview_news = document.getElementById('actual_preview_news');
var actual_preview_about_one = document.getElementById('actual_preview_about_one');
var actual_preview_about_two = document.getElementById('actual_preview_about_two');
var actual_preview_service_one = document.getElementById('actual_preview_service_one');
var actual_preview_service_two = document.getElementById('actual_preview_service_two');
var actual_preview_we_do = document.getElementById('actual_preview_we_do');
var actual_preview_gallery = document.getElementById('actual_preview_gallery');

// var imgInp = document.getElementById('preview_image');
// var blah = document.getElementById('actual_preview');

if (typeof(imgInp) != 'undefined' && imgInp != null) {
  imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      blah.src = URL.createObjectURL(file);
      contact_blah.src = URL.createObjectURL(file);
    }
  }
}
if (typeof(customFileContact) != 'undefined' && customFileContact != null) {
  customFileContact.onchange = evt => {
    const [file] = customFileContact.files
    if (file) {
      contact_blah.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFileContact_two) != 'undefined' && customFileContact_two != null) {
  customFileContact_two.onchange = evt => {
    const [file] = customFileContact_two.files
    if (file) {
      contact_blah_two.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_section_two) != 'undefined' && customFile_section_two != null) {
  customFile_section_two.onchange = evt => {
    const [file] = customFile_section_two.files
    if (file) {
      index_section_two_blah.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_section_four) != 'undefined' && customFile_section_four != null) {
  customFile_section_four.onchange = evt => {
    const [file] = customFile_section_four.files
    if (file) {
      index_section_four_blah.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_slider) != 'undefined' && customFile_slider != null) {
  customFile_slider.onchange = evt => {
    const [file] = customFile_slider.files
    if (file) {
      actual_preview_slider.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_news) != 'undefined' && customFile_news != null) {
  customFile_news.onchange = evt => {
    const [file] = customFile_news.files
    if (file) {
      actual_preview_news.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_about_one) != 'undefined' && customFile_about_one != null) {
  customFile_about_one.onchange = evt => {
    const [file] = customFile_about_one.files
    if (file) {
      actual_preview_about_one.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_about_two) != 'undefined' && customFile_about_two != null) {
  customFile_about_two.onchange = evt => {
    const [file] = customFile_about_two.files
    if (file) {
      actual_preview_about_two.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_service_one) != 'undefined' && customFile_service_one != null) {
  customFile_service_one.onchange = evt => {
    const [file] = customFile_service_one.files
    if (file) {
      actual_preview_service_one.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_service_two) != 'undefined' && customFile_service_two != null) {
  customFile_service_two.onchange = evt => {
    const [file] = customFile_service_two.files
    if (file) {
      actual_preview_service_two.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_we_do) != 'undefined' && customFile_we_do != null) {
  customFile_we_do.onchange = evt => {
    const [file] = customFile_we_do.files
    if (file) {
      actual_preview_we_do.src = URL.createObjectURL(file)
    }
  }
}
if (typeof(customFile_gallery) != 'undefined' && customFile_gallery != null) {
  customFile_gallery.onchange = evt => {
    const [file] = customFile_gallery.files
    if (file) {
      actual_preview_gallery.src = URL.createObjectURL(file)
    }
  }
}
// image previews