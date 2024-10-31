(function( $ ) {
 
    "use strict";

    // Builder Selection
    $(document).on('change', 'select.sales-addon-builders', function(e){
		e.preventDefault();
		var $this = $(this);
		var $builder = $this.val();

		var sales_addon_builder_change_data = {
			'action': 'sales_addon_builder_change',
			'builder': $builder,
		};

		// Reset Others data
		$('input[name="search-templates"]').val("");
		$('.sales-addon-filter-form')[0].reset();

		$.ajax({
			type: "POST",
			url: ajaxurl,
			data: sales_addon_builder_change_data,
			beforeSend: function() {
				$('.sales-addon-theme-preloader').addClass('active');
			},
			success: function(result){
				$('.sales-addon-themes-wrapper .themes').html(result);
			},
			complete: function(){
				$('.sales-addon-theme-preloader').removeClass('active');
			}
		});
    });

    // Search
    var timeout = null
    $(document).on('keyup', 'input[name="search-templates"]', function(e){
    	
		var $this = $(this);
		var $search_str = $this.val();
		
		var sales_addon_search_data = {
			'action': 'sales_addon_search',
			'search_str': $search_str,
		};

		// Reset Others data
		$('.sales-addon-filter-form')[0].reset();

		clearTimeout(timeout);
		timeout = setTimeout(function() {
			$.ajax({
				type: "POST",
				url: ajaxurl,
				data: sales_addon_search_data,
				beforeSend: function() {
					$('.sales-addon-theme-preloader').addClass('active');
				},
				success: function(result){
					$('.sales-addon-themes-wrapper .themes').html(result);
				},
				complete: function(){
					$('.sales-addon-theme-preloader').removeClass('active');
				}
			});
		}, 800);
    });    

    // Type & Category
    $(document).on('change', '.sales-addon-filter input[name="type"], .sales-addon-filter-cat', function(e){
		e.preventDefault();
		var $this = $(this);
		var $data = $('.sales-addon-filter-form').serialize();

		var sales_addon_filter_data = {
			'action': 'sales_addon_filter',
			'data': $data,
		};

		// Reset Others data
		$('input[name="search-templates"]').val("");

		$.ajax({
			type: "POST",
			url: ajaxurl,
			data: sales_addon_filter_data,
			beforeSend: function() {
				$('.sales-addon-theme-preloader').addClass('active');
			},
			success: function(result){
				$('.sales-addon-themes-wrapper .themes').html(result);
			},
			complete: function(){
				$('.sales-addon-theme-preloader').removeClass('active');
			}
		});
	});

	//Import
	$(document).on('click', '.sales-addon-tem-action', function(e){ 
		e.preventDefault();
		var $this = $(this);
		var $link = $this.data('link');
		var $builder = $this.data('builder');
		var $template_name = $this.data('template-name');

		var sales_addon_data = {
			'action': 'sales_addon_info_grabber',
			'link': $link,
			'builder': $builder,
			'template_name': $template_name,
		};

		$.ajax({
			type: "POST",
			url: ajaxurl,
			data: sales_addon_data,
			beforeSend: function() {
				$this.html('Importing..');
			},
			success: function(result){
				
			},
			complete: function(){
				$this.html('<span class="dashicons dashicons-smiley"></span> Done!');
			}
		});
	});

    //repeatable main method
	$('.sales-addon-extend-fields-wrap').each(function() {
		$(this).repeatable_fields({
			wrapper: '.widget-wrapper',
            container: '.widget-container',
            row: '.widget-row',
            add: '.sales-addon-extend-fields-add',
            remove: '.sales-addon-extend-fields-remove',
            move: '.sales-addon-extend-fields-move',
            template: '.template',
            is_sortable: false,
		});
	});

	//toggle repeated fields
	$(document).on('click', '.sales-addon-extend-field-action', function(e){
		e.preventDefault();
		$(this).parents('.widget').toggleClass('close open').find('.widget-inside').slideToggle('fast');
	});

	//Action buttons of repeated fields
	$(document).on('click', '.sales-addon-extend-fields-remove', function(e){ e.preventDefault(); });
	$('.sales-addon-extend-fields-add').on('click', function(e){ e.preventDefault(); });

	$(document).on('keyup contextmenu input', '.sales-addon-extend-title', function(){
		var $this = $(this);
		$this.parents('.widget').find('.widget-title h3').text($this.val());
	});	

	
 
})(jQuery);