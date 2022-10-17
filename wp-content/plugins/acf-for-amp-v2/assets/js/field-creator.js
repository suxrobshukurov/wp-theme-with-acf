var clone = function(){
  jQuery(".amp-acf-structured-clone").off("click").click(function(){
    var group_index = jQuery(this).closest(".amp-acf-placement-group").attr('data-id');                                                
    var selectrow = jQuery(document).find("#call_html_template_acf").html();                        
    nextId = jQuery(this).parents("tbody").find("tr").length;     
        selectrow = selectrow.replace(/\[0\]/g, "["+nextId+"]"); 
        selectrow = selectrow.replace(/\[group-0\]/g, "[group-"+group_index+"]");       
      jQuery(this).parents("tr").after(selectrow);removeHtml();clone();
  });
}
var removeHtml = function(){
jQuery(".acf-condfd-delete").off("click").click(function(){
    var class_count = jQuery(".amp-acf-placement-group").length;         
    if(class_count==1){
        if(jQuery(this).parents("tbody").find("tr").length>1){
        jQuery(this).parents("tr").remove();
      }   
        }else{
            if(jQuery(this).parents("tbody").find("tr").length == 1){
        jQuery(this).parents(".amp-acf-placement-group").remove();
      }else{
              jQuery(this).parents("tr").remove();
          }
        }
  });
}
jQuery(document).ready(function($){

  $(".amp-acf-placement-or-group").off().on("click", function(e){
    
    e.preventDefault();
    var group_index ='';
    var group_index = $(".amp-acf-placement-group").length;             
                
    var selectrow = jQuery(document).find("#call_html_template_acf").html();
        selectrow = selectrow.replace(/\[group-0\]/g, "[group-"+group_index+"]");
    var placement_group_html = '';
        placement_group_html +='<table class="widefat amp-acf-placement-table" style="border:0px;">';
        placement_group_html += selectrow; 
        placement_group_html +='</table>';  
                      
    var html='';  
        html +='<div class="amp-acf-placement-group" name="data_group_array['+group_index+']" data-id="'+group_index+'">';
        html +='<span style="margin-left:10px;font-weight:600">Or</span>';
        html +=placement_group_html;
        html +='</div>';                
    $(".amp-acf-placement-group[data-id="+(group_index-1)+"]").after(html); 
    group_index++;
    clone();
    removeHtml();
    });

  var selectrow = $("#amp_acf_select").find("table.widefat tr").html();
  $("body").append("<script type='template/html' id='call_html_template_acf'><tr class='toclone cloneya'>"+selectrow+"</tr>");
  clone();
  removeHtml();
  $(document).on("change", ".select-post-type", function(){
    var parent = $(this).parents('tr').find(".insert-ajax-select");
    var currentChange = $(this);
    var selectedValue = $(this).val();
    var currentFiledNumber = $(this).attr("class").split(" ")[2];
    var tdindex = [1,2,3,4]; 
    if(selectedValue !='show_globally'){
       $.each(tdindex, function(i,e){  
          $(currentChange).closest('tr').find('td').eq(e).show();  
       });
    parent.find(".ajax-output").remove();
    parent.find(".ajax-output-child").remove();
    parent.find(".spinner").attr("style","visibility:visible");
    parent.children(".spinner").addClass("show");
    var ajaxURL = amp_acf_field_data.ajax_url;
    var group_index = jQuery(this).closest(".amp-acf-placement-group").attr('data-id'); 
    //ajax call
        $.ajax({
        url : ajaxURL,
        method : "POST",
        data: { 
            action: "create_ajax_select", 
            id: selectedValue,
            number : currentFiledNumber,
            group_number : group_index,
        },
        beforeSend: function(){ 
        },
        success: function(data){ 
          // This code is added twice " withThis.find('.ajax-output').remove(); "
            parent.find(".ajax-output").remove();
            parent.children(".spinner").removeClass("show");
            parent.find(".spinner").attr("style","visibility:hidden").hide();
            parent.append(data);
            taxonomyDataCall();
        },
        error: function(data){
          console.log("Failed Ajax Request");
          //console.log(data);
        }
      }); 
    }else{
      $.each(tdindex, function(i,e){   
            $(currentChange).closest('tr').find('td').eq(e).hide(); 
      });
    }
  });
  taxonomyDataCall();
  
});//jQuery(document) closed
function taxonomyDataCall(){
  jQuery('select.ajax-output').change(function(){
    var mainSelectedValue = jQuery(".select-post-type").val();
    if(mainSelectedValue=="ef_taxonomy"){
      parentSelector = jQuery(this).parents("td").find(".insert-ajax-select");
      var selectedValue = jQuery(this).val();
      var currentFiledNumber = jQuery(this).attr("name").split("[")[1].replace("]",'');      
      parentSelector.find(".ajax-output-child").remove();
      parentSelector.find(".spinner").attr("style","visibility:visible");
      parentSelector.children(".spinner").addClass("show");
      
      var ajaxURL = amp_acf_field_data.ajax_url;
      var group_index = jQuery(this).closest(".amp-acf-placement-group").attr('data-id'); 
      //ajax call
      jQuery.ajax({
          url : ajaxURL,
          method : "POST",
          data: { 
              action: "create_tax_ajax_select",
              id: selectedValue,
              number : currentFiledNumber,
              group_number : group_index,
          },
          beforeSend: function(){ 
          },
          success: function(data){ 
            // This code is added twice " withThis.find('.ajax-output').remove(); "
              parentSelector.find(".ajax-output-child").remove();
              parentSelector.children(".spinner").removeClass("show");
              parentSelector.find(".spinner").attr("style","visibility:hidden").hide();
              parentSelector.append(data);
              taxonomyDataCall();
          },
          error: function(data){
            console.log("Failed Ajax Request");
            //console.log(data);
          }
        }); 
    }
  });
}

