(function($){
  function pendingRemove(xy) {
    setTimeout(function(){
      $(xy).find('i').remove();
    }, 700);
  }
  $(document).on('click', '.navigate-settings ul li', function(){
    var dis = $(this);
    var corrContent = dis.data('content');
    var urlX = settingsPath + '/loadview/'+corrContent;
    dis.prepend('<i class="fa fa-spinner fa-spin"></i>');
    $('.navigate-settings ul li').removeClass('active');
    dis.addClass('active');
    var token = $('meta[name="csrf-token"]').prop('content');

    $.ajax({
        url: urlX,
        type: 'POST',
        data: {
            _token: token,
            view: corrContent,
        },
        success: function(response) {
          $('.form-content-tabscontent').html(response);
        },
        error : function(errors){
          alert(JSON.stringify(errors));
        }
    });

    pendingRemove(dis);
  });

  $(document).on('submit', '.save-allsettings', function(e){
    $('.save-settings-btn').prepend('<i class="fa fa-spinner fa-spin"></i>');
  });
})(jQuery);
