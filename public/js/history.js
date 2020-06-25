$(document).ready(function(){

  function clear_icon()
  {
   $('#name_icon').html('');
   $('#date_icon').html('');
  }
 
  function fetch_data( sort_type, sort_by, query)
  {
   $.ajax({
    url:"/history/fetch_data?&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
    success:function(data)
    {
     $('tbody').html('');
     $('tbody').html(data);
    }
   })
  }
 
  $(document).on('keyup', '#serach', function(){
   var query = $('#serach').val();
   var column_name = $('#hidden_column_name').val();
   var sort_type = $('#hidden_sort_type').val();
  //  var page = $('#hidden_page').val();
   fetch_data( sort_type, column_name, query);
  });
 
  $(document).on('click', '.sorting', function(){
   var column_name = $(this).data('column_name');
   var order_type = $(this).data('sorting_type');
   var reverse_order = '';
   if(order_type == 'asc')
   {
    $(this).data('sorting_type', 'desc');
    reverse_order = 'desc';
    clear_icon();
    // $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
    $('#'+column_name+'_icon').html('<span uk-icon="icon: chevron-down;"></span>');
   }
   if(order_type == 'desc')
   {
    $(this).data('sorting_type', 'asc');
    reverse_order = 'asc';
    clear_icon
    $('#'+column_name+'_icon').html('<span uk-icon="icon: chevron-up;"></span>');
   }
   $('#hidden_column_name').val(column_name);
   $('#hidden_sort_type').val(reverse_order);
  //  var page = $('#hidden_page').val();
   var query = $('#serach').val();
   fetch_data( reverse_order, column_name, query);
  });
 
  // $(document).on('click', '.pagination a', function(event){
  //  event.preventDefault();
  //  var page = $(this).attr('href').split('page=')[1];
  //  $('#hidden_page').val(page);
  //  var column_name = $('#hidden_column_name').val();
  //  var sort_type = $('#hidden_sort_type').val();
 
  //  var query = $('#serach').val();
 
  //  $('li').removeClass('active');
  //        $(this).parent().addClass('active');
  //  fetch_data(page, sort_type, column_name, query);
  // });
 
 });