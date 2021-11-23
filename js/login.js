$(document).ready(function(){
  $('.login-form').on('click', function() {
    let data = {};

    let isError = false;
    $(this).closest('form').find('input').each((i, el) => {
      let name = $(el).attr('name');
      let val = $(el).val();

      let func = isValid;
      if (name == 'email') func = isMail;
      if (name == 'phone') func = isPhone;

      if (!func($(el))) {
        isError = true;
        toValid($(el), false);
      } else {
        toValid($(el), true);
      }

      data[name] = val;
    });

    if (isError) return;

    console.log(data);
    $.ajax({
      url: '',
      data: data,
      error: data => {

      },
      success: data => { 

      }
    });
  });
});

function isValid($input) {
  return $input.val();
}

function isMail($input) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test($input.val());
}

function isPhone($input) {
  let re = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
  return re.test($input.val());
}

function toValid($input, isValid) {
  $input.removeClass('is-invalid is-valid');
  if (isValid) $input.addClass('is-valid');
  else $input.addClass('is-invalid');
}