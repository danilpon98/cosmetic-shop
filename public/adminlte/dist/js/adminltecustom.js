$('.delete').click(function() {
	var res = confirm('Подтвердите действие');
	if (!res) return false;
});


$('nav .nav-sidebar a').each(function() {
	var location = window.location.protocol + '//' + window.location.host + window.location.pathname;
  var link = this.href;
	if(link == location){
		$(this).addClass('active');
		$(this).closest('.has-treeview').children('a').addClass('active');
	}
});

if($("textarea").is("#editor1")){

	ClassicEditor
        .create( document.querySelector( '#editor1' ), {
        	removePlugins: [ 'Heading', 'image' ],
        	toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ]
        })
        .catch( error => {
            console.error( error );
        } );

}

$(".select2").select2({
    placeholder: "Начните вводить наименование товара",
    //minimumInputLength: 2,
    cache: true,
    ajax: {
        url: adminpath + "/product/related-product",
        delay: 250,
        dataType: 'json',
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items
            };
        }
    }
});


if($('div').is('#single')){
    var buttonSingle = $("#single"),
        file;
}

if(buttonSingle){
    new AjaxUpload(buttonSingle, {
        action: adminpath + buttonSingle.data('url') + "?upload=1",
        data: {name: buttonSingle.data('name')},
        name: buttonSingle.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonSingle.closest('.file-upload').find('.overlay').css({'display':'block'});

        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonSingle.closest('.file-upload').find('.overlay').css({'display':'none'});

                response = JSON.parse(response);
                $('.' + buttonSingle.data('name')).html('<img src="/images/upload/' + response.file + '" style="max-height: 200px;">');
            }, 1000);
        }
    });
}
