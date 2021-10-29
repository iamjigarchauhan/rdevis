/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */
    // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });

        // Override Noty defaults
        Noty.overrideDefaults({
            theme: 'limitless',
            layout: 'topRight',
            type: 'alert',
            timeout: 2500
        });



        function openModal(contentUrl,title,size = 'md')
        {
            $('#layoutModal').modal('show');
            $('#layoutModal .modal-body').html('');
            $('#layoutModal .modal-title').html(title);
            $('#layoutModal .modal-dialog').removeClass().addClass('modal-dialog modal-'+size);
            $.ajax({
                url: contentUrl,
                type: 'get',
                success: function(content){
                    $('#layoutModal .modal-body').html(content);
                    $('.form-input-styled').uniform();
                    if (typeof reInitInputs === "function") { 
                        reInitInputs();
                    }
                }
            });
        }
  		 