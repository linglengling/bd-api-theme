(function($){
  $(function(){
    var form = $("[name=wpcf7-form]");

    wpcf7_element_converter_create_shortcode_container();
    var inputs = wpcf7_element_converter_get_inputs(form);
    wpcf7_element_converter_convert_inputs(inputs);


  })

  function wpcf7_element_converter_convert_inputs(inputs){
    inputs.each(function(){
      var sc = wpcf7_element_converter_create_shortcode($(this));
      var item = $("<span>").addClass("mailtag code used").html(sc);
      item
      .css({
        "display": "inline-block",
        "padding-left": "4px",
        "padding-right": "4px",
      })
      $("#wpcf7-admin-converted-elements").append(item);
    });
  }

  function wpcf7_element_converter_create_text_shortcode(input){

    var shortcode = "";
    var type = input.prop("type");

    if(!type){
      type = "text";
    }

    if(!(["text", "email", "tel", "number", "url", "textarea"].includes(type))) {
      return false;
    }

      shortcode = "["+type;


    if(input.prop("required")){
      shortcode += "*";
    }

    if(input.prop("name")){
      shortcode += " "+input.prop("name");
    }

    if(input.prop("id")){
        shortcode += ' id:"'+input.prop("id")+'"';
    }

    if(input.prop("class")){
      var classes = input.prop("class").split(" ");
      classes.forEach(function(v,i){
        if(v){
          shortcode += ' class:'+v;
        }
      });

    }

    if(input.prop("placeholder")){
      if(type == "textarea" && input.val()){

      } else {
        shortcode += ' placeholder "'+input.prop("placeholder")+'"';
      }

    }

    if(input.val()){
        shortcode += ' "'+input.val()+'"';
    }


    shortcode += "]";

    return shortcode;

  }

  function wpcf7_element_converter_create_shortcode(input){
    var type = input.prop("type");

    if(!type){
      type = "text";
    }

    switch(type){
      case "text":
      case "email":
      case "tel":
      case "number":
      case "url":
      case "textarea":
        return wpcf7_element_converter_create_text_shortcode(input);
        break;
      default:
        return false;
        break;
    }
  }

  function wpcf7_element_converter_get_inputs(form){
    var html = form.val();
    var inputs = $(html).filter(":input");
    inputs = inputs.add($(html).find(":input"));
    return inputs;
  }

  function wpcf7_element_converter_create_shortcode_container(){
    if($("#wpcf7-admin-form-element").find("#wpcf7-admin-converted-elements").length < 1) {
      $($("<div>").attr({"id": "wpcf7-admin-converted-elements"})).insertAfter("#tag-generator-list");
    }

    $("#wpcf7-admin-converted-elements").empty();
    $("#wpcf7-admin-converted-elements")
    .css({
      "padding": "6px",
      "color": "#666"
    })
  }
})(jQuery);
